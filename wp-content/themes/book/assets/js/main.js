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

    // menu more
    $('.menu-right-more').click(function(){
        $(this).parent().parent().parent().children(".content-menu-child").toggle("menu-hide");
    });

    
    // datepicker
    $( "#datepicker" ).datepicker({
        minDate: new Date()
    }).datepicker("setDate",'now');


    $("#single-main").select2({
        placeholder: "Select a time",
        allowClear: true
    });

    $(".basic-single").select2({
        placeholder: "Select ...",
        allowClear: true
    });


   
    


    let date = $('.datepicker').val();
    let time_id = $('.single-main').val();
    loadData(date,time_id);

    $('#single-main').on("change", function (e) { 
        let time_id = $(this).find(':selected').val();
        let date = $('.datepicker').val();
        loadData(date,time_id);
    });

    $('.submit').click(function(){

        let isFullname = false;
        let isPhoneNumber = false;
        let isEmail = false;
        let isDatepicker = false;
        let isSelect2 = false;

        let fullname = $('.full-name').val();
        let phoneNumber = $('.phone-number').val();
        let email = $('.email').val();
        let datepicker = $('.datepicker').val();
        let select2 = $('.single-main').val();



        if(fullname.length == 0)
        {
            $('.wrap-input-full .error').css("opacity", 1);
            $('.wrap-input-full .error').text('Field with * is required.');
            isFullname = false;
        } else {
            $('.wrap-input-full .error').css("opacity", 0);
            $('.wrap-input-full .error').text('');
            isFullname = true;
        }

        if(phoneNumber.length == 0)
        {
            $('.wrap-input-phone-number .error').css("opacity", 1);
            $('.wrap-input-phone-number .error').text('Field with * is required.');
            isPhoneNumber = false;
        } else {
            if(isVietnamesePhoneNumber(phoneNumber)) {
                $('.wrap-input-phone-number .error').css("opacity", 0);
                $('.wrap-input-phone-number .error').text('Error');
                isPhoneNumber = true;
            } else {
                $('.wrap-input-phone-number .error').css("opacity", 1);
                $('.wrap-input-phone-number .error').text('Please enter your phone number');
                isPhone = false;
            }
        }

        if(email.length == 0)
        {
            // $('.wrap-input-email .error').css("opacity", 1);
            // $('.wrap-input-email .error').text('Field with * is required.');
            isEmail = true;
        } else {
            if(validateEmail(email)) { 
                $('.wrap-input-email .error').css("opacity", 0);
                $('.wrap-input-email .error').text('Error');
                isEmail = true;
            } else {
                $('.wrap-input-email .error').css("opacity", 1);
                $('.wrap-input-email .error').text('Please enter your email');
                isEmail = false;
            }
        }

        if(validateEmail(email)) { 
            $('.wrap-input-email .error').css("opacity", 0);
            $('.wrap-input-email .error').text('Error');
            isEmail = true;
        } else {
            $('.wrap-input-email .error').css("opacity", 1);
            $('.wrap-input-email .error').text('Please enter your email');
            isEmail = false;
        }

        if(datepicker.length == 0)
        {
            $('.wrap-input-datepicker .error').css("opacity", 1);
            $('.wrap-input-datepicker .error').text('Field with * is required.');
            isDatepicker = false;
        } else {
            $('.wrap-input-datepicker .error').css("opacity", 0);
            $('.wrap-input-datepicker .error').text('Error');
            isDatepicker = true;
        }

        if(select2.length == 0)
        {
            $('.wrap-input-single-main .error').css("opacity", 1);
            $('.wrap-input-single-main .error').text('Field with * is required.');
            isSelect2 = false;
        } else {
            $('.wrap-input-single-main .error').css("opacity", 0);
            $('.wrap-input-single-main .error').text('Error');
            isSelect2 = true;
        }


        let slots = 0;
        $('input:radio.checkbox-budget').each(function () {
            if(this.checked)
            {
                slots = $(this).val();
            } 
        });

        let totalSlots = 0;
        for(let k=1; k<=slots; k++)
        {   
            let checked = 0;
            let countChecked = 0;


            $(".wrap-service-parent-"+k+">.wrap-button-number>.number>.checkbox-menu").each(function (index, obj) {
                if (this.checked) {
                    let parentId = $(this).data("id");
                    let parentName = $(this).data("name");

                    checked = 1;
                    countChecked ++;
                } 
            });

            $(".wrap-service-parent-"+k+">.wrap-service-child>.wrap-service-item").each(function (index, obj) {
                if(!$(this).hasClass('hidden'))
                {
                    let id = $(this).children(".service-content").children(".basic-single").find(':selected').val();
                    let name = $(this).children(".service-content").children(".basic-single").find(':selected').text();
                    // console.log("name: " + name);
                    // console.log("id: " + id);
                   
                }
            });

            if(checked > 0)
            {
                totalSlots ++;
            }

            if(countChecked == 0)
            {
                $(".wrap-service-parent-"+k+">.wrap-service-child>.error-checkbox").css("opacity", 1);
            } else {
                $(".wrap-service-parent-"+k+">.wrap-service-child>.error-checkbox").css("opacity", 0);
            }
        }

        if(isFullname && isPhoneNumber &&  isEmail && isDatepicker && isSelect2 && totalSlots==slots && slots!=0)
        {
            let fullName = $(".full-name").val();
            let phoneNumber = $(".phone-number").val();
            let email = $(".email").val();
            let datepicker = $( "#datepicker" ).datepicker({dateFormat: 'DD-MM-YYYY HH:mm:ss' }).val();
            let message = $(".message").val();
            let time_id = $("#single-main").find(':selected').val();

            $.ajax({
                type : "GET", 
                dataType: 'html',
                url : "http://localhost/booking/wp-admin/admin-ajax.php",
                data : {
                    action: "insert",
                    fullName: fullName,
                    phoneNumber: phoneNumber,
                    datepicker: datepicker,
                    email: email,
                    message: message,
                    slots: slots,
                    time_id: time_id
                },
                beforeSend: function(){
                   
                },
                success: function(response) {
                    if(response == 1)
                    {
                        alert("Booking finish");
                        location.reload();
                    } else 
                    {
                        alert("Sorry, Phone number is already in use. Please try again.");
                    }
                },
                error: function( jqXHR, textStatus, errorThrown ){
                }
            });
        }
    });

});

function selectTime()
{
    $('#single-main').on("change", function (e) { 
        let time_id = $(this).find(':selected').val();
        let date = $('.datepicker').val();
        loadData(date,time_id);
        
        // $.ajax({
        //     type : "GET", 
        //     dataType: 'json',
        //     contentType: "application/json; charset=utf-8",
        //     url : "http://localhost/booking/wp-admin/admin-ajax.php",
        //     data : {
        //         action: "selectTime",
        //         time_id: time_id,
        //     },
        //     beforeSend: function(){
        //         $(".wrap-guest").remove();
        //     },
        //     success: function(response) {
        //         $( ".wrap-data-ajax" ).append( response );
        //         $(".basic-single").select2({
        //             placeholder: "Select ...",
        //             allowClear: true
        //         });
        //     },
        //     error: function( jqXHR, textStatus, errorThrown ){
        //     }
        // });
    });
}

function loadData(date,time_id)
{
    
    $.ajax({
        type : "GET", 
        dataType: 'html',
        contentType: "application/json; charset=utf-8",
        url : "http://localhost/booking/wp-admin/admin-ajax.php",
        data : {
            action: "getSlots",
            date: date,
            time_id: time_id

        },
        beforeSend: function(){
            $(".item-slot").remove();
        },
        success: function(response) {
            console.log(response);
            let obj = jQuery.parseJSON( response );
            if(obj.success)
            {
                let html = "";
                if(obj.data>0)
                {
                    for(let i=1; i<= obj.data; i++)
                    {
                        if(i==1)
                        {
                            html = html + "<div class='item-slot'><input class='checkbox-budget' type='radio' onchange='onChangeRadio(this)' name='budget' id='budget-"+i+"' value='"+i+"' checked><label class='for-checkbox-budget' for='budget-"+i+"'><span data-hover='"+i+"'>"+i+"</span></label></div>"
                        } else {
                            html = html +"<div class='item-slot'><input class='checkbox-budget' type='radio' onchange='onChangeRadio(this)' name='budget' id='budget-"+i+"' value='"+i+"'><label class='for-checkbox-budget' for='budget-"+i+"'><span data-hover='"+i+"'>"+i+"</span></label></div>"
                        }
                    }
                    $( ".select-nember" ).append( html );
                    $(".wrap-input-message").css("display","block");
                    $('.wrap-service-parent-1').css("display","block");
                    $('.empty-slot').remove();
                } else {
                    $('.wrap-service-parent-1').css("display","none");
                    $( ".select-nember" ).append( "<div class='empty-slot' style='padding: 15px 0 30px 0'>There are no available seats. Please call us or select another time.</div>" );
                    $(".wrap-input-message").css("display","none");
                }
                
            }
        },
        error: function( jqXHR, textStatus, errorThrown ){
        }
    });
}



function onChangeRadio(e)
{
    let slots = $(e).val();
    if(slots > 0)
    {
        $(".wrap-service-parent").css("display","none");
        for(let i=1; i<=slots; i++)
        {
            $(".wrap-service-parent-"+i).css("display","block");
        }
    }
}

function onChangeCheckbox(e)
{
    let index = $(e).val();
    if(e.checked)
    {
        $(e).parent().parent().parent().children(".wrap-service-child").children(".wrap-service-item-"+index).removeClass("hidden");
    } else {
        $(e).parent().parent().parent().children(".wrap-service-child").children(".wrap-service-item-"+index).addClass("hidden");
    }
}

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( email );
}

function isVietnamesePhoneNumber(number) {
    if(number.length <= 10 && $.isNumeric(number))
    {
        return true;
    }
    return false;
}

