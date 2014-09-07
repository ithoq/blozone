

    <div class="copyright container light-bg">
    	<div class="padding clearfix">
    		<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'footer_text')) :  echo ot_get_option( 'footer_text' ); endif ; endif; ?>
        </Div><!--/.padding-->
    </div><!--/.copyright-->
    
    <div class="spacing-40 clearfix"></div>
    

<?php wp_footer(); ?>
</body>
</html>