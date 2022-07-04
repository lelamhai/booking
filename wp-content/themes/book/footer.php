<footer>
       <div class="wrap-footer">
           <div class="footer-row2">©All Rights Reserved. Powered by <a href="http://softkeymarketing.com/" style="color: #fff;">Softkeymarketing.com</a></div>
       </div>
    </footer>
    
    <?php
      wp_footer();
    ?>

    <script>
        $(document).ready(function() {
            $( function() {
                $( "#datepicker" ).datepicker();
            } );


            $("#single-main").select2({
                placeholder: "Select a time",
                allowClear: true
            });

            $(".basic-single").select2({
                placeholder: "Select ...",
                allowClear: true
            });

            $('.menu-right-more').click(function(){
                $(this).parent().parent().parent().children(".content-menu-child").toggle("menu-hide");
            });
        });

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
    </script>
</body></html>