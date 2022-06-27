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

            
            
            let list = $("#slots").val();
            console.log(list);
            setRadio(1);

            $(".select-nember input[name='budget']").click(function(){
                var radioValue = $("input[name='budget']:checked").val();
                setRadio(radioValue);
            });


            function setRadio(value) {
                if(value != 0)
                {
                    for(var i=1; i <= list; i++)
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


            $(".checkbox-menu").change(function() {
                let className = $(this).val();
                if(this.checked) {
                    $("."+className).css("display","block");
                } else {
                    $("."+className).css("display","none");
                }
            });
            

        });
    </script>
</body></html>