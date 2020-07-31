$(".deleteOrder").each(function () {

    this.onclick = function () {

        let orderId = this.dataset.id;
        let data = { "orderId": orderId };

        var orderRow = $(`[data-orderid='${orderId}']`).get(0);
        orderRow.parentElement.removeChild(orderRow);
        // console.log($(`[data-orderid='${orderId}']`).get(0));

        $.post("/FamilyBrowser/de/Order/DeleteOrder", data, function (data) {
            console.log(data);
            if (data == 1) {
                alert(`Bestellung ${orderId} wurde gelöscht.`);
            }
        })
    }
});

$(".orderStatusSelect").each(function () {
    this.onchange = function () {
        console.log(this.dataset.orderid);
        console.log(this.value);
        let data = { 'orderId': this.dataset.orderid, 'status': this.value }
        $.post("/FamilyBrowser/de/Order/SetStatus", data, function (data) {
            console.log(data);
        })
    }
});

$("#btnExcelExport").click(function () {
    console.log("Export to Excel");
    $.get("/FamilyBrowser/de/Order/GetExportData", function (data) {
        console.log(data);
        var dataArray = [];
        data = JSON.parse(data);
        console.table(data);
        var header = Object.keys(data[0]);
        dataArray.push(header);

        data.forEach(element => {
            if (element['StatusID'] != 5) {
                var dataRow = Object.values(element);
                dataRow[17] = (dataRow[17].includes("logo") || dataRow[17] == "") ? "No File" : { v: "", f: `HYPERLINK("${dataRow[17]}")`, t: 's' };
                dataRow[18] = (dataRow[18].includes("logo") || dataRow[18] == "") ? "No File" : { v: "", f: `HYPERLINK("${dataRow[18]}")`, t: 's' };
                dataRow[19] = (dataRow[19].includes("logo") || dataRow[19] == "") ? "No File" : { v: "", f: `HYPERLINK("${dataRow[19]}")`, t: 's' };
                dataArray.push(dataRow);
            }
        });

        console.log(dataArray);

        var wb = XLSX.utils.book_new();

        wb.Props = {
            Title: "SheetJS Tutorial",
            Subject: "Test",
            Author: "Red Stapler",
            CreatedDate: new Date()
        };

        var ws = XLSX.utils.aoa_to_sheet(dataArray);
        console.log(ws);
        wb.SheetNames.push("Test Sheet");
        wb.Sheets['Test Sheet'] = ws;

        var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });

        function s2ab(s) {
            var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
            var view = new Uint8Array(buf);  //create uint8array as viewer
            for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
            return buf;
        }
        saveAs(new Blob([s2ab(wbout)], { type: "application/octet-stream" }), 'FamiliesOrders.xlsx');
    })
});

$(".file-preview").each(function () {
    this.onclick = function () {
        console.log(this.dataset.link);
        if (!this.dataset.link.includes("logo")) {
            window.open(this.dataset.link);
        }
    }
});


$(".familyUpload").each(function () {
    $(this).change(function () {
        var fileName = this.value.substring(this.value.lastIndexOf('\\') + 1);
        console.log(fileName);


        $('label[for=' + this.id + ']').text(fileName);
        $(`#btnSubmit${this.id}`).click();
    });
});

$(".submitFamily").each(function () {
    $(this).click(function (event) {
        event.preventDefault();
        //console.log(document.getElementById(this.dataset.form));
        //console.log(document.getElementById(this.dataset.file));
        var fileFamily = document.getElementById(this.dataset.file).files[0];
        var orderId = this.dataset.order;
        console.log(orderId);

        var formData = new FormData();
        formData.append("fileFamily", fileFamily);
        formData.append("orderId", orderId);

        var url = '/FamilyBrowser/de/Order/UploadFamily';
        $.ajax({
            url: url,
            method: 'POST',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                response = JSON.parse(response);
                console.log(response.fileName);
                var fileName = response.fileName;

                $(`#downloadLink${orderId}`).removeAttr('hidden');
                $(`#downloadLink${orderId}`).attr("href", `/readyFamilies/${fileName}`);
                $(`#downloadLink${orderId}`).attr("download", fileName.substring(15, fileName.length));
            }
        });
    });
});

let order = 0;

$(".btnReserveId").each(function () {
    $(this).click(function () {
        console.log(this);
        order = this.dataset.order;
    });
});

$("#reserveTypeNumbers").click(function () {
    let version = $("#inputVersion").val();
    let system = $("#inputSystem").val();
    let typesNumber = parseInt($("#inputTypeNumber").val());

    let url = `http://fb-rest-env.eu-central-1.elasticbeanstalk.com/api/FamilyTypeData/system/${system}/version/${version}/latestId`;
    console.log(url);
    $.get(url, function (data) {
        let latestNumber = parseInt(data['TypeID'].substring(1));
        console.log(latestNumber);

        let localReserveUrl = "/FamilyBrowser/de/Order/GetLargestReservedNumber";
        let paramsLocalRargest = {};
        paramsLocalRargest['system'] = system;
        paramsLocalRargest['version'] = version;

        $.post(localReserveUrl, paramsLocalRargest, function (localResponse) {
            let localLargest = parseInt(localResponse);
            latestNumber = localLargest > latestNumber ? localLargest : latestNumber;
            console.log("Latest: " + latestNumber);

            for (let index = 1; index <= typesNumber; index++) {
                data = {};
                data['System'] = system;
                data['Version'] = version;
                data['ReservedNumber'] = latestNumber + index;
                data['OrderId'] = order;

                console.log(data);

                let newReserveUrl = "/FamilyBrowser/de/Order/CreateNewReserve";
                $(`#reservedNumbers${order}`).empty();
                $.post(newReserveUrl, data, function (data) {
                    let prefix = '';
                    switch (system) {
                        case 'Electrics':
                            prefix = 'E';
                            break;
                        case 'Heating':
                            prefix = 'H';
                            break;
                        case 'Ventilation':
                            prefix = 'L';
                            break;
                        case 'AirConditioning':
                            prefix = 'K';
                            break;
                        case 'Piping':
                            prefix = 'S';
                            break;

                        default:
                            break;
                    }
                    var numberDiv = document.createElement('div');
                    var number = document.createTextNode(prefix + (latestNumber + index));
                    numberDiv.appendChild(number);

                    $(`#reservedNumbers${order}`).append(numberDiv);

                    console.log(data);
                });
            }
        });
    }).fail(function () {
        alert('System dieser Version nicht gefunden');
    });
});

$("#btnMoreTypes").click(function () {
    let typeNumber = parseInt($("#inputTypeNumber").val());
    $("#inputTypeNumber").val(++typeNumber);
});

$("#btnLessTypes").click(function () {
    let typeNumber = parseInt($("#inputTypeNumber").val());
    if (typeNumber > 0) {
        $("#inputTypeNumber").val(--typeNumber);
    }
});



