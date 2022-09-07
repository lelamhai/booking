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

    $('.option-select').click(function(){
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
        },
        error: function( jqXHR, textStatus, errorThrown ){
        }
    });
}
