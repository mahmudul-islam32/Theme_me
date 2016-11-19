	<!-- OUR WORKS -->
	<section id="our-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
	
						<h1>Out Works</h1>
						<span class="st-border"></span>
					</div>
					
	
				</div>
				
				
				

				<div class="portfolio-wrapper" >
                    <?php $portfolio_cats = get_terms( 'theme-portfolio' ); ?>
				    <?php if( ! empty( $portfolio_cats ) && ! is_wp_error( $portfolio_cats ) ) : ?>		
					<div class="col-md-12">
						<ul class="filter">  			
							<li><a class="active" href="#" data-filter="*">All</a></li>	
							
							
                            			
                            <?php foreach ( $portfolio_cats as $portfolio_cat ) : ?>
                                <li><a href="#" data-filter=".<?php echo $portfolio_cat->slug ?>"><?php echo $portfolio_cat->name ?></a></li>
                            <?php endforeach; ?>
						</ul><!--/#portfolio-filter-->
					</div>
					<?php endif; ?>		
					
					<div class="portfolio-items">
					
					
<?php
global $post;
$args = array( 'posts_per_page' => -1, 'post_type'=> 'mytheme-portfolio', 'orderby' => 'menu_order', 'order' => 'ASC' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
 
<?php 
   $portfolio_large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>



<?php
$terms = get_the_terms( $post->ID, 'theme-portfolio' );

if ( $terms && ! is_wp_error( $terms ) ) : 

    $portfolio_cat_slug = array();
    $portfolio_cat_name = array();

    foreach ( $terms as $term ) {
        $portfolio_cat_slug[] = $term->slug;
    }

    foreach ( $terms as $term ) {
        $portfolio_cat_name[] = $term->name;
    }

    $portfolio_cat_array = join( ", ", $portfolio_cat_slug );
    $portfolio_class_array = join( " ", $portfolio_cat_slug );

    $portfolio_assigned_list = join( ", ", $portfolio_cat_name );
endif;

    
?> 
 
						<div class="col-md-4 col-sm-6 work-grid <?php echo $portfolio_class_array; ?>">
							<div class="portfolio-content">
								<?php the_post_thumbnail('portfolio-thumb', array('class' => 'img-responsive')); ?>
								
								<div class="portfolio-overlay">
									<a href="<?php echo $portfolio_large[0]; ?>"><i class="fa fa-camera-retro"></i></a>
									<h5><?php the_title(); ?></h5>
									<p><?php echo $portfolio_assigned_list; ?></p>
								</div>
							</div>	
						</div>
<?php endforeach; ?>					
						

						
					</div>				
				</div>

			</div>
		</div>
	</section>
	<!-- /OUR WORKS -->