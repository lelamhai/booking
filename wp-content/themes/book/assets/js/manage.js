$(document).ready(function() {
    $("#wp-admin-bar-my-account li:eq(1)").before($("#wp-admin-bar-my-account li:eq(3)"));
    $("#wp-admin-bar-my-account li:eq(2)").before($("#wp-admin-bar-my-account li:eq(4)"));

    let date = new Date();
    let begin = getMonday(date);
    let end = getSunday(date);
    
    loadBooks(formatDate(begin), formatDate(end));
    $('#datepicker').datepicker({
        firstDay: 1,
        onSelect: function(dateText, inst) {
            date = new Date(dateText);
            begin = getMonday(date);
            end = getSunday(date);
            loadBooks(formatDate(begin), formatDate(end));
        },
        beforeShowDay: function(listDate) {
            let currentDate = new Date(formatDate(listDate));
            let startDate = new Date(formatDate(begin));
            let endDate = new Date(formatDate(end));
            
            var cssClass = '';
             if(currentDate >= startDate && currentDate <= endDate)
                cssClass = 'ui-datepicker-current-day';
            return [true, cssClass];
        },
    });
    $(document).on('click', '.button-search-books', function() {
        let phone = $.trim($('.input-search-books').val());

        $.ajax({
            type : "GET", 
            dataType: 'html',
            url : "./wp-admin/admin-ajax.php",
            data : {
                action: "search_phone_books",
                phone: phone,
            },
            beforeSend: function(){
               $(".list-data-books").remove();
            },
            success: function(response) {
                // console.log(response);
                $(".ajax-books").append(response);
                $('.input-search-books').val("");
            },
            error: function( jqXHR, textStatus, errorThrown ){
            }
        });
    });

});

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

function loadBooks(startDate, endDate)
{
    $.ajax({
        type : "GET", 
        dataType: 'html',
        url : "./wp-admin/admin-ajax.php",
        data : {
            action: "get_data_books_date",
            startDate: startDate,
            endDate: endDate
           
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
