console.log("Lang");

var buttons = document.getElementsByClassName("btn-lang");
var btnArray = Array.from(buttons);
btnArray.forEach(function (element) {
    element.onclick = function () {
        var location = window.location.href;
        var newLocation = null;
        if (element.innerText == "EN") {
            if (location.includes("/de")) {
                newLocation = location.replace("/de", "/en");
            }
            if (!location.includes("/en") && !location.includes("/de")) {
                newLocation = location.replace("/FamilyBrowser", "/FamilyBrowser/en/Overview");
            }
            if (location.includes("/en")){
                newLocation = location;
            }
        }
        if (element.innerText == "DE") {
            if (location.includes("/en")) {
                newLocation = location.replace("/en", "/de");
            }
            if (!location.includes("/en") && !location.includes("/de")) {
                newLocation = location.replace("/FamilyBrowser", "/FamilyBrowser/de/Overview");
            }
            if (location.includes("/de")){
                newLocation = location;
            }
        }

        window.location.href = newLocation;
    }
});