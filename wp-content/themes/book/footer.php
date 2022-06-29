<footer>
       <div class="wrap-footer">
           <div class="footer-row1">
                <?php if( have_rows('footer', 'option') ): ?>
                    <?php while( have_rows('footer', 'option') ): the_row(); ?>
                        <div class="footer-service"><a href="./privacy-policy" style="color: #fff"><?php echo get_sub_field('text_term_of_service') ?></a></div>
                        <div class="footer-service"><a href="./terms" style="color: #fff"><?php  echo get_sub_field('text_privacy_policy', 'options'); ?></a></div>
                    <?php endwhile; ?>
                <?php endif; ?>
           </div>

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
                    $('.wrap-input-full .error').text('Please input a value');
                    isFullname = false;
                } else {
                    $('.wrap-input-full .error').css("opacity", 0);
                    $('.wrap-input-full .error').text('');
                    isFullname = true;
                }

                if(phoneNumber.length == 0)
                {
                    $('.wrap-input-phone-number .error').css("opacity", 1);
                    $('.wrap-input-phone-number .error').text('Please input a value');
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
                    $('.wrap-input-email .error').css("opacity", 1);
                    $('.wrap-input-email .error').text('Please input a value');
                    isEmail = false;
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

                if(datepicker.length == 0)
                {
                    $('.wrap-input-datepicker .error').css("opacity", 1);
                    $('.wrap-input-datepicker .error').text('Please input a value');
                    isDatepicker = false;
                } else {
                    $('.wrap-input-datepicker .error').css("opacity", 0);
                    $('.wrap-input-datepicker .error').text('Error');
                    isDatepicker = true;
                }

                if(select2.length == 0)
                {
                    $('.wrap-input-single-main .error').css("opacity", 1);
                    $('.wrap-input-single-main .error').text('Please input a value');
                    isSelect2 = false;
                } else {
                    $('.wrap-input-single-main .error').css("opacity", 0);
                    $('.wrap-input-single-main .error').text('Error');
                    isSelect2 = true;
                }

                if(isFullname && isPhoneNumber &&  isEmail && isDatepicker && isSelect2)
                {
                    alert("Finish");
                }

            });


            // load default
            let slots = $("#single-main").find(':selected').data('slot');
            let index = $("#single-main").find(':selected').data('index');
            setRadio(1, slots);
            
            
            $('#single-main').on("change", function (e) { 
                let slots = $(this).find(':selected').data('slot');
                let index = $(this).find(':selected').data('index');
                $.ajax({
                    type : "GET", 
                    dataType: 'html',
                    url : "./wp-admin/admin-ajax.php",
                    data : {
                        action: "select2",
                        slots: slots,
                        index: index
                    },
                    beforeSend: function(){
                        $(".choose-person").remove();
                    },
                    success: function(response) {
                        $( ".wrap-data-ajax" ).append( response );
                        setRadio(1, slots);
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

        // event change radio
        function raidoChange(slots, index){
            setRadio(index, slots);
        }
        
         // event change checkbox
        function checkboxChange(className, event){
            if(event.checked) {
                $("."+className).css("display","block");
            } else {
                $("."+className).css("display","none");
            }
        }

        function setRadio(value, slots) {
            if(value != 0)
            {
                for(var i=1; i <= slots; i++)
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

        function validateEmail(email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test( email );
        }

        function isVietnamesePhoneNumber($number) {
            return /^\d{3}-?\d{3}-?\d{4}$/g.test($number);
        }
    </script>
</body></html>