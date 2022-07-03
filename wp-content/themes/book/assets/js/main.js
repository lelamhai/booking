$(document).ready(function() {
    $(".slider").slick({
        dots: true,
        arrows: false,
        autoplay: true,
        slidesToShow: 1
    });

    // Menu mobile
    $(".menu-open").click(function(){
        $(".mobile-container").removeClass( "not-showmenu" );
    });

    $(".menu-close").click(function(){
        $(".mobile-container").addClass("not-showmenu");
    });

    $(".header-list-menu li").click(function(){
        $(".mobile-container").addClass("not-showmenu");
    });

    // Popup reivew
    $(".wrap-review").click(function(){
        $(".popup").toggleClass("show-popup");
    });

    $(".popup").click(function(e){
        if(e.target == e.currentTarget)
        {
            $(".popup").toggleClass("show-popup");
            $(".box-report").css("display","none");
            $(".box-good").css("display","none");
        } else {
            return;
        }
    });

    $(".box-report-icon").click(function(){
        $(".box-report").css("display","block");
    });

    $(".box-good-icon").click(function(){
        $(".box-good").css("display","block");
    });

    $(".box-submit button").click(function(){
        $(".popup").toggleClass("show-popup");
        $(".box-report").css("display","none");
    });

    $(".submit-good button").click(function(){
        $(".popup").toggleClass("show-popup");
        $(".box-good").css("display","none");
        let url = $("#linkgood").val();
        window.open(url);
    });


    $('#single-main').on("change", function (e) { 
        let time_id = $(this).find(':selected').val();
        $.ajax({
            type : "GET", 
            dataType: 'html',
            url : "http://localhost/booking/wp-admin/admin-ajax.php",
            data : {
                action: "selectTime",
                time_id: time_id,
            },
            beforeSend: function(){
                $(".wrap-guest").remove();
            },
            success: function(response) {
                $( ".wrap-data-ajax" ).append( response );
                $(".basic-single").select2({
                    placeholder: "Select ...",
                    allowClear: true
                });
            },
            error: function( jqXHR, textStatus, errorThrown ){
                // console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        });
    });
});