
	<!-- OUR TEAM -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Our Team</h1>
						<span class="st-border"></span>
					</div>
				</div>
                
                                 <?php
                                         global $post;
                          $args = array( 'posts_per_page' => 4, 'post_type'=> 'team','orderby'=>'menu_order','order'=>'ASC' );
                          $myposts = get_posts( $args );
                            foreach( $myposts as $post ) : setup_postdata($post); ?>
            <?php
              $news_thumb=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
               $icon= get_post_meta($post->ID, 'icon', true); 

            ?>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<?php the_post_thumbnail('team-thumb', array('class' => 'img-responsive')); ?>
							<div class="member-social">
								<a href=""><i class="fa fa-<?php echo $icon;?> "></i></a>
								
							</div>
						</div>
						<div class="member-info">
							<h4><?php the_title();?></h4>
							<span>Designer</span>
						</div>
					</div>
				</div>

		 <?php endforeach; ?>

			

			</div>
		</div>
	</section>
	<!-- /OUR TEAM -->