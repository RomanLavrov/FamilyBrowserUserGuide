
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
        let data = {'orderId' : this.dataset.orderid, 'status' : this.value }
        $.post("/FamilyBrowser/de/Order/SetStatus", data, function(data){
            console.log(data);
        })
    }
});

$("#btnExcelExport").click(function () {
    console.log("Export to Excel");
    $.get("/FamilyBrowser/de/Order/GetExportData", function (data) {
        var dataArray = [];
        data = JSON.parse(data);
        var header = Object.keys(data[0]);
        dataArray.push(header);

        data.forEach(element => {
            var dataRow = Object.values(element);
           
            dataRow[20] = dataRow[20].includes("logo")? "No file" : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" +  dataRow[20];
            dataRow[21] = dataRow[21].includes("logo")? "No file" : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" +  dataRow[21];
            dataRow[22] = dataRow[22].includes("logo")? "No file" : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" +  dataRow[22];
            dataArray.push(dataRow);
        });

        console.log(dataArray);


        var fileName = "Families Orders.xlsx";
        var ws_name = "Orders";
        var wb = XLSX.utils.book_new();
        wb.Props = {
            Title: "SheetJS Tutorial",
            Subject: "Test",
            Author: "Red Stapler",
            CreatedDate: new Date()
        };
      
        var ws = XLSX.utils.aoa_to_sheet(dataArray);
        wb.SheetNames.push("Test Sheet");
        wb.Sheets['Test Sheet'] = ws;
        var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });

        //console.log(wbout);

        function s2ab(s) {
            var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
            var view = new Uint8Array(buf);  //create uint8array as viewer
            for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
            return buf;
        }
        saveAs(new Blob([s2ab(wbout)], { type: "application/octet-stream" }), 'test.xlsx');
    })
});

$(".file-preview").each(function(){
    this.onclick = function(){
        console.log(this.dataset.link);
        if(!this.dataset.link.includes("logo")){
            window.open(this.dataset.link);
        }
       
    }
})

