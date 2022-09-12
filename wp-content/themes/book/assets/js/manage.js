$(document).ready(function() {
    $("#wp-admin-bar-my-account li:eq(1)").before($("#wp-admin-bar-my-account li:eq(3)"));
    $("#wp-admin-bar-my-account li:eq(2)").before($("#wp-admin-bar-my-account li:eq(4)"));

    let option = 7;
    let date = new Date();
    let begin = getMonday(date);
    let end = getSunday(date);
    
    loadBooks(formatDate(begin), formatDate(end), option);
    $('#datepicker').datepicker({
        firstDay: 1,
        onSelect: function(dateText, inst) {
            date = new Date(dateText);
            if(option == 7)
            {
                begin = getMonday(date);
                end = getSunday(date);
            } else {
                begin = getCalculator(date, 0);
                end = getCalculator(date, 0);
            }
            loadBooks(formatDate(begin), formatDate(end), option);
        },
        beforeShowDay: function(listDate) {
            let currentDate = new Date(formatDate(listDate));
            let startDate = new Date(formatDate(begin));
            let endDate = new Date(formatDate(end));
            
            var cssClass = '';
             if(currentDate >= startDate && currentDate <= endDate)
                cssClass = 'custom-ui-datepicker-current-day';
            return [true, cssClass];
        },
    });

    $(document).on('click', '.option-select', function() {
        $(".option-select").removeClass("option-active");
        $(this).addClass("option-active");
        option = $(this).data("option");

        date = new Date();
        if(option == 7)
        {
            begin = getMonday(date);
            end = getSunday(date);

            $('#datepicker').datepicker('option', {
                beforeShowDay: function(listDate) {
                    let currentDate = new Date(formatDate(listDate));
                    let startDate = new Date(formatDate(begin));
                    let endDate = new Date(formatDate(end));
                    var cssClass = '';
                    if(currentDate >= startDate && currentDate <= endDate)
                       cssClass = 'custom-ui-datepicker-current-day';
                   return [true, cssClass];
                },
            });
        } else {
            begin = getCalculator(date, 0);
            end = getCalculator(date, 0);

            $('#datepicker').datepicker('option', {
                beforeShowDay: function(listDate) {
                    let currentDate = new Date(formatDate(listDate));
                    let startDate = new Date(formatDate(begin));
                    let endDate = new Date(formatDate(end));
                    var cssClass = '';
                    if(currentDate >= startDate && currentDate <= endDate)
                       cssClass = 'custom-ui-datepicker-current-day';
                   return [true, cssClass];
                },
            });
        }
        $('#datepicker').datepicker(
            'setDate', date
        );
        loadBooks(formatDate(begin), formatDate(end), option);
    });

    $(document).on('click', '.previous-books', function() {
        let currentDate = $(this).data('date');
        date = new Date(currentDate);

        if(option == 7)
        {
            begin = getCalculator(date, -7);
            end = getCalculator(date, -1);

            $('#datepicker').datepicker('option', {
                beforeShowDay: function(listDate) {
                    let currentDate = new Date(formatDate(listDate));
                    let startDate = new Date(formatDate(begin));
                    let endDate = new Date(formatDate(end));
                    var cssClass = '';
                    if(currentDate >= startDate && currentDate <= endDate)
                       cssClass = 'custom-ui-datepicker-current-day';
                   return [true, cssClass];
                },
            });
        } else {
            begin = getCalculator(date, -1);
            end = getCalculator(date, -1);

            $('#datepicker').datepicker('option', {
                beforeShowDay: function(listDate) {
                    let currentDate = new Date(formatDate(listDate));
                    let startDate = new Date(formatDate(begin));
                    let endDate = new Date(formatDate(end));
                    var cssClass = '';
                    if(currentDate >= startDate && currentDate <= endDate)
                       cssClass = 'custom-ui-datepicker-current-day';
                   return [true, cssClass];
                },
            });
        }
        $('#datepicker').datepicker(
            'setDate', begin
        );
        loadBooks(formatDate(begin), formatDate(end), option);
    });

    $(document).on('click', '.next-books', function() {
        let currentDate = $(this).data('date');
        date = new Date(currentDate);
        
        if(option == 7)
        {
            begin = getCalculator(date, 1);
            end = getCalculator(date, 7);

            $('#datepicker').datepicker('option', {
                beforeShowDay: function(listDate) {
                    let currentDate = new Date(formatDate(listDate));
                    let startDate = new Date(formatDate(begin));
                    let endDate = new Date(formatDate(end));
                    var cssClass = '';
                    if(currentDate >= startDate && currentDate <= endDate)
                       cssClass = 'custom-ui-datepicker-current-day';
                   return [true, cssClass];
                },
            });
        } else {
            begin = getCalculator(date, 1);
            end = getCalculator(date, 1);

            $('#datepicker').datepicker('option', {
                beforeShowDay: function(listDate) {
                    let currentDate = new Date(formatDate(listDate));
                    let startDate = new Date(formatDate(begin));
                    let endDate = new Date(formatDate(end));
                    var cssClass = '';
                    if(currentDate >= startDate && currentDate <= endDate)
                       cssClass = 'custom-ui-datepicker-current-day';
                   return [true, cssClass];
                },
            });
        }
        $('#datepicker').datepicker(
            'setDate', end
        );
        loadBooks(formatDate(begin), formatDate(end), option);
    });

    
    $(document).on('click', '.close ', function() { 
        $('.modal-input-phone').val(" ");
        $('.not-data-books').css("opacity", 0);
    });

    $('#modal-button-phone').click(function(){
        let phoneNumber = $('.modal-input-phone').val();
        if(phoneNumber.length == 0)
        {
            $('.not-data-books').css("opacity", 1);
            $('.not-data-books').text('Field with * is required.');
            return false;
        } else if(!isVietnamesePhoneNumber(phoneNumber)) {
            $('.not-data-books').css("opacity", 1);
            $('.not-data-books').text('Please enter your phone number');
            return false;
        }
        $('#modalPhone').modal('toggle');
        searchLoadBooks(phoneNumber, 0);
    });

    $(document).on('click', '.button-status-booking', function() {
        let status = $(this).data("status");
        let id = $(this).parent().data("id");

        if(status == 0)
        {
            $('#modalCancel').modal('toggle');
            $('#idBooks').val(id);
            $('#statusBooks').val(status);
            return false;
        } 
        changeStatusBooks(id, status);
        
    });

    $(document).on('click', '.yes-cancel-books', function() {
        let id = $('#idBooks').val();
        let status = $('#statusBooks').val();
        changeStatusBooks(id, status);
    });

    $(".control-collapse").click(function(){
        $( this ).toggleClass( "collapse180" );
        $("#manage-menu-wrap").toggleClass("sidebar-menu");
        $("#manage-content-wrap").toggleClass("margin-content");
    });

    $(document).on('click', '.icon-collapse', function() { 
        $(this).parents(".item-boook").children(".wrap-content-books").toggle( "hide-card" );
        $(this).children(".first-minus").toggle( "first-minus" );
    });

    $(document).on('click', '.delete', function() { 
        let id = $(this).parents(".group-button").data("id");
        $('#modalDeleteBook').modal('toggle');
        $("#idDeleteBooks").val(id);
    });

    $(document).on('click', '.yes-delete-books', function() { 
        let id =  $("#idDeleteBooks").val();
        $.ajax({
            type : "GET", 
            dataType: 'html',
            url : "./wp-admin/admin-ajax.php",
            data : {
                action: "delete_data_books",
                id: id
            },
            beforeSend: function(){

            },
            success: function(response) {
                $('#modalDeleteBook').modal('toggle');
                $('.item-boook[data-id="'+id+'"]').remove();
            },
            error: function( jqXHR, textStatus, errorThrown ){
    
            }
        });
    });

    
});

$(document).ready(function() {
    $( "#datepickerCalendar" ).datepicker({
        minDate: new Date()
    }).datepicker("setDate",'now');

    $("#single-main").select2({
        placeholder: "Select a time",
        allowClear: true
    });
    let date = $('#datepickerCalendar').val();
    let time_id = $('#single-main').val();
    loadData(date,time_id);

     // select time
     $('#single-main').on("change", function (e) { 
        let time_id = $(this).find(':selected').val();
        let date = $('#datepickerCalendar').val();
        console.log(time_id);
        loadData(date,time_id);
    });

    // select date
    $('#datepickerCalendar').change(function(e){
        let time_id = $('#single-main').val();
        console.log(time_id);
        let date = $(this).val();
        loadData(date,time_id);
    });

    $(document).on('click', '.checkbox-budget', function() {
        let slots = $(this).val();
        if(slots > 0)
        {
            $(".wrap-service-parent").css("display","none");
            for(let i=1; i<=slots; i++)
            {
                $(".wrap-service-parent-"+i).css("display","block");
            }
        }
    });

    $(document).on('click', '.checkbox-menu', function() {
        let index = $(this).val();
        if(this.checked)
        {
            $(this).parent().parent().parent().children(".wrap-service-child").children(".wrap-service-item-"+index).removeClass("hidden");
        } else {
            $(this).parent().parent().parent().children(".wrap-service-child").children(".wrap-service-item-"+index).addClass("hidden");
        }
    });

    $('.submit').click(function(){
        let isFullname = false;
        let isPhoneNumber = false;
        let isEmail = false;
        let isLocation = false;
        let isDatepicker = false;
        let isSelect2 = false;

        let fullname = $('.full-name').val();
        let phoneNumber = $('.phone-number').val();
        let email = $('.email').val();
        let location = $('.location').val();
        let datepicker = $('#datepickerCalendar').val();
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

        // if(location.length == 0)
        // {
        //     isLocation = true;
        // } else {
        //     if(validateLocation(location)) {
        //         $('.wrap-input-location .error').css("opacity", 0);
        //         $('.wrap-input-location .error').text('Error');
        //         isLocation = true;
        //     } else {
        //         $('.wrap-input-location .error').css("opacity", 1);
        //         $('.wrap-input-location .error').text('Please enter your location');
        //         isLocation = false;
        //     }
        // }

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
        
        let json = Array();
        for(let k=1; k<=slots; k++)
        {   
            let service = new Object();

            let checked = 0;
            let countChecked = 0;

            let serviceParent = Array();
            // parent
            $(".wrap-service-parent-"+k+">.wrap-button-number>.number>.checkbox-menu").each(function (index, obj) {
                if (this.checked) {
                    let id = $(this).data("id");
                    
                    serviceParent.push(id);
                    checked = 1;
                    countChecked ++;
                } 
            });
            console.log(countChecked);

            let serviceChild = Array();
            // children
            $(".wrap-service-parent-"+k+">.wrap-service-child>.wrap-service-item").each(function (index, obj) {
                if(!$(this).hasClass('hidden'))
                {
                    let child = $(this).children(".service-content").children(".basic-single").find(':selected').val();
                    let parent = $(this).children(".service-content").children(".basic-single").find(':selected').data("parent");
                    
                    let services = parent+"-"+child; 
                    serviceChild.push(services);
                }
            });

            // service.parent = serviceParent;
            service.children = serviceChild;

            json.push(service);
            if(checked > 0)
            {
                totalSlots ++;
            }

            if(countChecked == 0)
            {
                $(".wrap-service-parent-"+k+">.wrap-service-child>.error-checkbox").css({"display": "block", "opacity": 1});
            } else {
                $(".wrap-service-parent-"+k+">.wrap-service-child>.error-checkbox").css({"display": "none", "opacity": 0});
            }
        }
       
        var services = JSON.stringify(json);
        // console.log(services);
        // return false;

        if(isFullname && isPhoneNumber &&  isEmail && isDatepicker && isSelect2 && totalSlots==slots && slots!=0)
        {
            let fullName = $(".full-name").val();
            let phoneNumber = $(".phone-number").val();
            let email = $(".email").val();
            let location = $(".location").val();
            let datepicker = $( "#datepicker" ).datepicker({dateFormat: 'DD-MM-YYYY HH:mm:ss' }).val();
            let message = $(".message").val();
            let time_id = $("#single-main").find(':selected').val();

            var services = JSON.stringify(json);
            console.log(services);
            $.ajax({
                type : "GET", 
                dataType: 'html',
                url : "./wp-admin/admin-ajax.php",
                data : {
                    action: "insert",
                    fullName: fullName,
                    phoneNumber: phoneNumber,
                    datepicker: datepicker,
                    email: email,
                    location: location,
                    message: message,
                    slots: slots,
                    services: services,
                    time_id: time_id
                },
                beforeSend: function(){
                   
                },
                success: function(response) {
                    console.log(response);
                    alert("Booking finish");
                    window.location.reload(true)
                },
                error: function( jqXHR, textStatus, errorThrown ){
                }
            });
        }
    });
});

function changeStatusBooks(id, status)
{
    $.ajax({
        type : "GET", 
        dataType: 'html',
        contentType: "application/json; charset=utf-8",
        url : "./wp-admin/admin-ajax.php",
        data : {
            action: "change_status_books",
            id: id,
            status: status
        },
        beforeSend: function(){
            // $(".wrap-book-item").remove();
        },
        success: function(response) {
            if(status == 2)
            {
                $('#modalComfirm').modal('toggle');
            } else {
                $('#modalCancel').modal('toggle');
                $('#modalCancelYes').modal('toggle');
            }

            let phone = $('.modal-input-phone').val();
            searchLoadBooks(phone);
        },
        error: function( jqXHR, textStatus, errorThrown ){

        }
    });
}

function searchLoadBooks(phone, flag = 1)
{
    $.ajax({
        type : "GET", 
        dataType: "json",
        url : "./wp-admin/admin-ajax.php",
        data : {
            action: "get_data_books",
            phone: phone
        },
        beforeSend: function(){
            $(".wrap-book-item").remove();
        },
        success: function(response) {
            let data = response.data;
            if(data.postType.length <= 0)
            {
                $('.not-data-books').css("opacity", 1);
                $('.not-data-books').text('There is no appointment with this phone number');

                $('.wrap-book-title').css("display","none");
                let html = "<div>No Appointment</div>";
                $("#ajax-searchbooks").append(html);
                return false;
            }

            $('.not-data-books').css("opacity", 0);
            $('.wrap-book-title').css("display","flex");

            if(flag == 0)
            {
                $('#modalBooks').modal('toggle');
            }
            let html = "";
            for(let i=0; i<data.postType.length; i++)
            {
                let id = data.postType[i].ID;
                let title = data.postType[i].post_title; 
                let listDate = data.customField[i].bookingDate.split('-');
                let date = listDate[1]+"/"+listDate[2]+"/"+listDate[0];
                let time = data.customField[i].bookingTime;
                let services = data.customField[i].bookingServices;

                let obj = JSON.parse(services);
                
                let name = "";
                for(let s=0; s < obj.length; s++)
                {
                    let id = s + 1;
                    let slot = "* Seat" + id + "<br>";
                    for(let c=0; c < obj[s].length; c++)
                    {
                        let list = obj[s][c].split('-');
                        if(list[1])
                        {
                            slot = slot + "- "+ list[0] + "->" + list[1] + "<br>";
                        } else {
                            slot = slot + "- "+ list[0] + "<br>";
                        }
                    }
                    name = name + slot + "<br><br>";
                }

                if(data.customField[i].bookingStatus == 1)
                {
                    html = html + "<div class='wrap-book-item'><div class='book-name'>"+title+"</div><div class='book-date'>"+date+"</div><div class='book-time'>"+time+"</div><div class='book-serivces'>"+name+"</div><div class='book-control' data-id="+id+"><button class='button-confirm-books button-status-booking' data-status='2'>Confirm</button><button class='button-cancel-books button-status-booking' data-status='0'>Cancel</button></div></div>";
                } else {
                    html = html + "<div class='wrap-book-item'><div class='book-name'>"+title+"</div><div class='book-date'>"+date+"</div><div class='book-time'>"+time+"</div><div class='book-serivces'>"+name+"</div><div class='book-control'  data-id="+id+"><button class='button-confirm-books' disabled>Confirmed</button><button class='button-cancel-books button-status-booking' data-status='0'>Cancel</button></div></div>";
                }
            }
            $("#ajax-searchbooks").append(html);
        },
        error: function( jqXHR, textStatus, errorThrown ){

        }
    });
}

function isVietnamesePhoneNumber(number) {
    if(number.length >= 10 && $.isNumeric(number))
    {
        return true;
    }
    return false;
}

function formatDate(date)
{
    let dateFormat = new Date(date);
    let year = dateFormat.getFullYear();
    let month   = dateFormat.getMonth()+1;
    let day     = dateFormat.getDate();
    return  year + '-' + month + '-' + day;
}

function getMonday(d) {
    var day = d.getDay(),
        diff = d.getDate() - day + (day == 0 ? -6:1); // adjust when day is sunday
    return new Date(d.setDate(diff));
}

function getSunday(d) {
    let day = new Date(d);
    day.setDate(day.getDate() + 6);
    return day;
}

function getCalculator(date, numberDay)
{
    let currentDate = new Date(date);
    currentDate.setDate(currentDate.getDate() + numberDay);
    return currentDate;
}

function loadBooks(startDate, endDate, amount)
{
    $.ajax({
        type : "GET", 
        dataType: 'html',
        url : "./wp-admin/admin-ajax.php",
        data : {
            action: "get_data_books_date",
            startDate: startDate,
            endDate: endDate,
            amount: amount
           
        },
        beforeSend: function(){
           $(".list-data-books").remove();
        },
        success: function(response) {
            $(".ajax-books").append(response);
            if(amount == 1)
            {
                $('.list-calendar').addClass( "today" );
            } 
        },
        error: function( jqXHR, textStatus, errorThrown ){
        }
    });
}


function loadData(date,time_id)
{
    $.ajax({
        type : "GET", 
        dataType: 'html',
        contentType: "application/json; charset=utf-8",
        url : "./wp-admin/admin-ajax.php",
        data : {
            action: "getSlots",
            date: date,
            time_id: time_id

        },
        beforeSend: function(){
            $(".wrap-guest").remove();
        },
        success: function(response) {
            $('.wrap-data-ajax').append(response);
            $(".basic-single").select2({
                placeholder: "Select ...",
                allowClear: true
            });
        },
        error: function( jqXHR, textStatus, errorThrown ){

        }
    });
}

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( email );
}

function isVietnamesePhoneNumber(number) {
    if(number.length >= 10 && $.isNumeric(number))
    {
        return true;
    }
    return false;
}

function validateLocation(location) {
    var locationReg = /\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\$/;
    return locationReg.test( location );
}