<?php
$get_all_courses = get_field('home_courses_list');

?>

<div class="home-courses-main">
	<div class="home-courses_left">
		<h2><?php the_field('home_course_title'); ?></h2>
        <p><?php the_field('home_course_desc'); ?></p>
		<div class="home-coures-btn">
            <div class="btn-center trial-btn">
                <a href="<?=get_field('home_course_button_link');?>" class="view-more"><?=get_field('home_course_button_label');?></a>
            </div>
        </div>
	</div>
	<div class="home-courses-slider">
		<?php foreach ($get_all_courses as $home_courses) : ?>
			<div class="home-courses-flex">
			    <a href="<?php echo $home_courses['home_course_repeater_link'];?>">
				<div class="home-class-backg">
					<div class="program-image">
						<img src="<?php echo $home_courses['home_course_repeater_image'];?>" class="img-responsive" alt="image">
					</div>
					
					<div class="program-info">
						<p class="subject"><?php echo $home_courses['home_course_repeater_title']; ?></p>
					</div>
					
				</div>
				</a>
        </div>
		<?php endforeach; ?>
	</div>
</div>
