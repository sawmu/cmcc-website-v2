<?php
$args = array(
	'post_type'		 => 'teacher',
	'post_status'	 => 'publish',
	'posts_per_page' => 100,
	'orderby'		 => 'date',
	'order'			 => 'DESC',
);
$get_all_tutor = get_posts($args);

//var_dump($get_all_tutor);

?>

<div class="tutor-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 tutor-left">
				<h3 class="tutor-name"><?php echo $get_all_tutor[0]->post_title;?></h3>
				<div class="tutor-description">
					<?php echo apply_filters( 'the_content', $get_all_tutor[0]->post_content );?>
				</div>				
			</div>
			<div class="col-md-4 col-sm-12">
				<?php $thumbanil = wp_get_attachment_url( get_post_thumbnail_id($get_all_tutor[0]->ID), 'full' ); ?>
				<div class="tutor-thumbnail">
					<img src="<?=$thumbanil;?>" alt="<?php echo $get_all_tutor[0]->post_title;?>" class="img-responsive">
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="tutor-list">
	

	<div class="tutor-slider container">
		<?php foreach ($get_all_tutor as $tutor) : ?>
			<div class="tutor-info">
				<div class="tutor-border">
					<h3 class="tutor-name hidden"><?php echo $tutor->post_title;?></h3>
					<div class="tutor-full-detail hidden">
						<?php echo apply_filters( 'the_content', $tutor->post_content );?>
					</div>
					<?php $thumbanil = wp_get_attachment_url( get_post_thumbnail_id($tutor->ID), 'full' ); ?>
					<div class="tutor-thumbnail">
						<img src="<?=$thumbanil;?>" alt="<?php echo $tutor->post_title;?>" class="img-responsive">
					</div>
				</div>							
			</div>
		<?php endforeach; ?>
	</div>
</div>