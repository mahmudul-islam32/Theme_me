<?php 
global $my_theme;
$service_items=$my_theme['services'];
$service_title=$my_theme['service-title'];







?>




<!-- SERVICES -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo $service_title;?></h1>
						<span class="st-border"></span>
					</div>
				</div>
               <?php foreach($service_items as $service_item):?>
				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-<?php echo $service_item['url'];?>"></i> <?php echo $service_item['title'];?></h2>
					<p><?php echo $service_item['description'];?></p>
				</div>

				<?php endforeach;?>

			


			

			</div>
		</div>
	</section>
	<!-- /SERVICES -->