<?php get_header();?>


	<?php

	global $my_theme;
$layout = $my_theme['layout-setting']['enabled'];

 
 
if ($layout): foreach ($layout as $key=>$value) {
    
 
    switch($key) {
        //when we use get_template part we need no extension
 
        case 'slider': get_template_part( 'layouts/layout-slider' );
        break;
        case 'service': get_template_part( 'layouts/layout-sevices' );
        break; 
        case 'works': get_template_part( 'layouts/layout-works' );
        break;
        case 'team': get_template_part( 'layouts/layout-team' );
        break; 
        case 'pricing': get_template_part( 'layouts/layout-pricing' );
        break;
        case 'testimonials': get_template_part( 'layouts/layout-testimonials' );
        break;
        case 'stats': get_template_part( 'layouts/layout-stats' );
        break;
        case 'contact': get_template_part( 'layouts/layout-contact' );
        break;
 
        
 
    }
 
}
 
endif;
?>
	



	




	





	

	<?php get_footer();?>