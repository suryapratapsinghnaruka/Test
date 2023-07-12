// Jquery Steps
$(function (){
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true,

        labels: {
          finish: "Submit <i class='fad fa-paper-plane ms-2'></i>",
          next: "Next <i class='fad fa-arrow-right ms-2'></i>",
          previous: "<i class='fad fa-arrow-left me-2'></i> Prev"
        }
    });
});

// Click Checkbox To Show
$(function () {
    $("#hazmat").click(function () {
        if ($(this).is(":checked")) {
            $("#hazmatnumber").show();
        } else {
            $("#hazmatnumber").hide();
        }
    });
});

