$(document).ready(function () {

    function ExpandHeader(){

        var $el = $(this);
        var $articleContent = $el.next();
        var $expandingContent =  $articleContent.find(".expanding-content");

        var $moreButton = $articleContent.find(".expanding-button");

        ExpandAnimation($expandingContent);

        $moreButton.fadeOut();

        return false;
    }

        
    function ExpandButton(){

        var $el = $(this);
        var $expandingContent =  $el.prev();

        ExpandAnimation($expandingContent);

        $el.fadeOut();

        return false;
    }

    function ExpandAnimation($expandingContent){

        var totalHeight = 0;

        $expandingContent.children().each(function() {
            totalHeight += $(this).outerHeight();
          });

        $expandingContent
            .animate({
                "height": totalHeight + 50
            }, 500);

    }

    $(".expanding-header").click(ExpandHeader);
    $(".expanding-button").click(ExpandButton);
});