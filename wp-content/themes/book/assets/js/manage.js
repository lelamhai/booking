$(document).ready(function() {
    let date = new Date();
    let startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
    let endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);
    
    var selectCurrentWeek = function() {
        window.setTimeout(function () {
            $('#datepicker').find('.ui-datepicker-current-day a').addClass('ui-state-active')
        }, 1);
    };

    $( "#datepicker" ).datepicker( { 
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
});
 
