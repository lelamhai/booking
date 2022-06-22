<footer>
       <div class="wrap-footer">
           <div class="footer-row1">
                <?php if( have_rows('footer', 'option') ): ?>
                    <?php while( have_rows('footer', 'option') ): the_row(); ?>
                        <div class="footer-service"><a href="<?php echo get_sub_field('link_term_of_service') ?>" style="color: #fff"><?php echo get_sub_field('text_term_of_service') ?></a></div>
                        <div class="footer-service"><a href="<?php echo get_sub_field('link_privacy_policy', 'options'); ?>" style="color: #fff"><?php  echo get_sub_field('text_privacy_policy', 'options'); ?></a></div>
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