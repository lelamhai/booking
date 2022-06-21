<footer>
       <div class="wrap-footer">
           <div class="footer-row1">
               <div class="footer-service"><a href="#" style="color: #fff">Term of service</a></div>
               <div class="footer-service"><a href="#" style="color: #fff">Privacy policy</a></div>
           </div>

           <div class="footer-row2">©All Rights Reserved. Powered by <a href="#" style="color: #fff;">Softkeymarketing.com</a></div>
       </div>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="./assets/slick/slick.js"></script>
    <script src="./assets/js/main.js?v=2"></script> -->

    <?php
      wp_footer();
    ?>

    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );

        $("#single").select2({
          placeholder: "Select a programming language",
          allowClear: true
        });

        $("#single").select2({
            placeholder: "Select a time",
            allowClear: true
        });



        setRadio(1);

        $(".select-nember input[name='budget']").click(function(){
            var radioValue = $("input[name='budget']:checked").val();
            setRadio(radioValue);
        });

        function setRadio(value)
        {
            if(value != 0)
            {
                for(var i=1; i <= 2; i++)
                {
                    if(i <= value)
                    {
                        $("#guest-" + i).css("display", "block");
                    } else {
                        $("#guest-" + i).css("display", "none");
                    }
                }
            }
            
        }
    </script>

  
</body></html>