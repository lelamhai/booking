$(document).ready(function() {
    let date = new Date();
    let startDate = new Date(date.getFullYear(), date.getMonth(), (date.getDate() - date.getDay())+1);
    let endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 7);

    var selectCurrentWeek = function() {
        window.setTimeout(function () {
            $('#datepicker').find('.ui-datepicker-current-day a').addClass('ui-state-active')
        }, 1);
    };

    $( "#datepicker" ).datepicker( {
        firstDay: 1,
        beforeShowDay: function(date) {
            var cssClass = '';
            if(date >= startDate && date <= endDate)
                cssClass = 'ui-datepicker-current-day';
            return [true, cssClass];
        },
        onChangeMonthYear: function(year, month, inst) {
            selectCurrentWeek();
        }
    });

    $(".control-collapse").click(function(){
        $( this ).toggleClass( "collapse180" );
        $("#manage-menu-wrap").toggleClass("sidebar-menu");
        $("#manage-content-wrap").toggleClass("margin-content");
    });
    startDate    = new Date(startDate);
    let yrS      = startDate.getFullYear();
    let monthS   = startDate.getMonth()+1;
    let dayS     = startDate.getDate();
    let newStartDate = yrS + '-' + monthS + '-' + dayS;
    
    endDate    = new Date(endDate);
    let yrE      = endDate.getFullYear();
    let monthE   = endDate.getMonth()+1;
    let dayE     = endDate.getDate();
    let newEndDate = yrE + '-' + monthE + '-' + dayE;
    

    loadBooks(newStartDate, newEndDate);
    
    $(document).on('click', '.previous-books', function() {
        let end = $(this).data("date");

        let endDate    = new Date(end);
        endDate.setDate(endDate.getDate() - 1);
        let yrS      = endDate.getFullYear();
        let monthS   = endDate.getMonth()+1;
        let dayS     = endDate.getDate();
        let newEndDate = yrS + '-' + monthS + '-' + dayS;

        let startDate    = new Date(end);
        startDate.setDate(startDate.getDate() - 7);
        let yrE      = startDate.getFullYear();
        let monthE   = startDate.getMonth()+1;
        let dayE     = startDate.getDate();
        let newStartDate = yrE + '-' + monthE + '-' + dayE;

        loadBooks(newStartDate, newEndDate);
    });

    $(document).on('click', '.next-books', function() {
        let start = $(this).data("date");

        let startDate    = new Date(start);
        startDate.setDate(startDate.getDate() + 1);
        let yrS      = startDate.getFullYear();
        let monthS   = startDate.getMonth()+1;
        let dayS     = startDate.getDate();
        let newStartDate = yrS + '-' + monthS + '-' + dayS;

        let endDate    = new Date(start);
        endDate.setDate(endDate.getDate() + 7);
        let yrE      = endDate.getFullYear();
        let monthE   = endDate.getMonth()+1;
        let dayE     = endDate.getDate();
        let newEndDate = yrE + '-' + monthE + '-' + dayE;

        loadBooks(newStartDate, newEndDate);
    });

});

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
