let file2d;
let file3d;
let fileSpecification;
/*
let submitButton = document.getElementById("submitFamilyOrder");
submitButton.onclick = function () {
    let orderData = {
        name: $(":input[aria-label = name]").val(),
        mail: $("#order-mail").val(),
        company: $("#order-company").val(),
        project: $("#order-project").val(),
        system: $('[name = "systemSelection"]:checked').prop("labels")[0].innerText,
        description: $("#order-description").val(),
        //file2d: $("#2dFileUpload").val(),
        file2d: file2d,

        //file3d: $("#3dFileUpload").val(),
        file3d:file3d,

        //fileSpecification: $("#specificationupload").val(),
        fileSpecification: fileSpecification,
        mount: $("#order-mount").val(),
        placement: $("#order-placement").val(),
        installationMedium: $("#order-installationMedium").val(),
        diameter: $("#order-diameter").val(),
        height: $("#order-height").val(),
        depth: $("#order-depth").val(),
        eBKP: $("#order-eBKP").val(),
        BKP: $("#order-BKP").val(),
        omniClass: $("#order-omniClass").val(),
        ifcExport: $("#order-ifcExportAs").val(),
        ifcExportType: $("#order-ifcExportType").val()
    }  

    $.post("/FamilyBrowser/de/Order/Submit", orderData, function (data) {
        console.log(data);
    });
}*/


$("#file2d").change(function () {
    var fileName = this.value.substring(this.value.lastIndexOf('\\') + 1);
    $('label[for=' + this.id + ']').text(fileName);
    file2d = createUUID() + fileName;
});

$("#file3d").change(function () {
    var fileName = this.value.substring(this.value.lastIndexOf('\\') + 1);
    $('label[for=' + this.id + ']').text(fileName);
    file3d = createUUID() + fileName;
});

$("#fileSpecification").change(function () {
    var fileName = this.value.substring(this.value.lastIndexOf('\\') + 1);
    $('label[for=' + this.id + ']').text(fileName);
    fileSpecification = createUUID() + fileName;
});

function createUUID() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
    });
}

$(".hvacMedium").hide();

$("#systemElektro").change(function () {

    $(".hvacMedium").hide();
    $(".electroMedium").show();
});

$("#systemHVAC").change(function () {
    $(".hvacMedium").show();
    $(".electroMedium").hide();
});

$("#systemArchitektur").change(function () {
    if ($(this).is(':checked')) {
        $('#extendedOptions').hide();
    } 
});

$("#systemHVAC").change(function () {
    if ($(this).is(':checked')) {
        $('#extendedOptions').show();
    } 
});

$("#systemElektro").change(function () {
    if ($(this).is(':checked')) {
        $('#extendedOptions').show();
    } 
});

//-------Swap 2D File input
$("#file2dLinkInput").hide();

$("#file2DswapInput").click(function(){   
    if ($("#file2dFileInput").is(":hidden")){      
        $("#file2dFileInput").show();
        $("#file2dLinkInput").hide();
        $(this).text("Oder Link angeben");
    }
    else{
        $("#file2dFileInput").hide();
        $("#file2dLinkInput").show();
        $(this).text("Oder Datei angeben");
    }
});
//-----------------------------

//-------Swap 3D File input
$("#file3dLinkInput").hide();

$("#file3DswapInput").click(function(){   
    if ($("#file3dFileInput").is(":hidden")){      
        $("#file3dFileInput").show();
        $("#file3dLinkInput").hide();
        $(this).text("Oder Link angeben");
    }
    else{
        $("#file3dFileInput").hide();
        $("#file3dLinkInput").show();
        $(this).text("Oder Datei angeben");
    }
});
//-----------------------------

//-------Swap 3D File input
$("#fileSpecLinkInput").hide();

$("#fileSpecSwapInput").click(function(){   
    if ($("#fileSpecFileInput").is(":hidden")){      
        $("#fileSpecFileInput").show();
        $("#fileSpecLinkInput").hide();
        $(this).text("Oder Link angeben");
    }
    else{
        $("#fileSpecFileInput").hide();
        $("#fileSpecLinkInput").show();
        $(this).text("Oder Datei angeben");
    }
});
//-----------------------------

