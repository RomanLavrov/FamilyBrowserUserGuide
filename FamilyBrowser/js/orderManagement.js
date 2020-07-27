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
                dataRow[17] = (dataRow[17].includes("logo") || dataRow[17] == "") ? "No File" : { v: "", f: `HYPERLINK("https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/${dataRow[17]}")`, t: 's' };
                dataRow[18] = (dataRow[18].includes("logo") || dataRow[18] == "") ? "No File" : { v: "", f: `HYPERLINK("https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/${dataRow[18]}")`, t: 's' };
                dataRow[19] = (dataRow[19].includes("logo") || dataRow[19] == "") ? "No File" : { v: "", f: `HYPERLINK("https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/${dataRow[19]}")`, t: 's' };
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
})

