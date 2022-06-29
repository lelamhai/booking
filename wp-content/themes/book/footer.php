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
            console.log(event);
            
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
    </script>
</body></html>