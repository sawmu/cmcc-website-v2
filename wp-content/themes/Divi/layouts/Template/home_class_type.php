<?php
$args = array(
	'post_type'		 => 'class_types',
	'post_status'	 => 'publish',
	'posts_per_page' => 100,
	'orderby'		 => 'date',
	'order'			 => 'DESC',
);
$get_all_class_type = get_posts($args);

//var_dump($get_all_tutor);

?>
	<div class="class-home-type-title">
		<h2 class="article-title"><?php the_field('home_type_title'); ?></h2>
	</div>
	<div class="class-type-slider">
	
		<?php foreach ($get_all_class_type as $tutor) : ?>
			<div class="article-list">
				<div class="article">
					<?php $thumbanil = wp_get_attachment_url( get_post_thumbnail_id($tutor->ID), 'full' ); ?>
						<div class="article-thumbnail">
							<img src="<?=$thumbanil;?>" alt="<?php echo $tutor->post_title;?>" class="img-responsive" alt="image">
						</div>
					<div class="overlay">
						<div class="article-info">
							<p class="tutor-name hidden"><?php echo $tutor->post_title;?></p>
							<p><?php echo mb_substr( $tutor->post_content, 0, 200 )."..."; ?></p>
							<div class="tutor-full-detail hidden">
								<?php echo apply_filters( 'the_content', $tutor->post_content );?>
							</div>	
							<a href="<?=get_field('find_out_more');?>">find out more</a>
							
						</div>
					</div> <!-- overlay	 -->
				</div>
				
				<div class="article-info-out">
					<h2 class="article-title"><?php echo $tutor->post_title;?></h2>
					<p class="subtitle-article">Suitable for all levels.</p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

																		