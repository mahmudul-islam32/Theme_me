<?php 
global $my_theme;
$slider_items=$my_theme['slider'];








?>


<!-- SLIDER -->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">
                <?php foreach($slider_items as $slider_item):?>
				<div class="item active" style="background-image: <?php echo $slider_item['url'];?>">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1><?php echo $slider_item['title'];?>  </h1>
								<h2>creative world</h2>
								<p><?php echo $slider_item['description'];?></p>
							</div>
						</div>
					</div>					
				</div>
                
				<?php endforeach;?>
			
			
			
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>		
		</div> <!--/#home-carousel--> 
    </section>
	<!-- /SLIDER -->