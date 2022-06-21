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
});