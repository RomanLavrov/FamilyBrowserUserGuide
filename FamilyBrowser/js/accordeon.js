var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
    acc[i].click();
}

var slashIndex = window.location.href.lastIndexOf('/');
var currentPage = window.location.href.substring(slashIndex + 1);
console.log(currentPage);
$(".nav-button").each(function () {
    if (currentPage == this.dataset.name) {
        console.log(this.dataset.name);
        // this.style.borderLeft = "3px solid #274b59";
        this.style.boxShadow = "0px 0px 8px 0 rgba(0, 0, 0, 0.3)";
        this.style.marginLeft = '5px';
        this.style.marginBottom = '5px';
        this.style.marginTop = '5px';
        this.style.paddingLeft = "15px";
    }
});