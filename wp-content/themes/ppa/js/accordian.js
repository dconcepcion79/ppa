var headers = ["H1","H2","H3","H4","H5","H6"];

jQuery('documeny').ready(function($) {
    $(".meeting-notes-accordian .mn-title").prepend("<span class='mn-click'><i class='fa fa-plus'></i></span>");

    $('.meeting-notes-accordian .mn-click').on("click", function(){
        //console.log($(this).parent().next('ul'));
        $(this).parent().next('ul').slideToggle(300);
        if ($(this).children().hasClass('fa-plus')) {
            $(this).children().removeClass('fa-plus').addClass('fa-minus');
        } else {
            $(this).children().removeClass('fa-minus').addClass('fa-plus');
        }
    });
});