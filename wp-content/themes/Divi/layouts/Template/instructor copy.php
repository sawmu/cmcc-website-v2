
<div class="class-course-main-flex">
    <div class="course-left">
        <p><?php the_field('about_title'); ?></p>
        <h3><?php the_field('about_desc'); ?></h3>
    </div>


    <div class="course-right">
        <div class="instructor-flex">
            <div class="in-img">
                <img src="<?= get_field('instructor_photo'); ?>">
            </div>
            <div>
                <h3><?php the_field('in_name'); ?></h3>
                <p><?php the_field('instructor_position'); ?></p>
            </div>>
        </div>
        <div class="instructor-desc">
            <p><?php the_field('instructor_desc'); ?></p>
        </div>
        
    </div>
</div>

<?php

$instructor_posts = get_field('instructor');

?>

    <?php if ($instructor_posts): ?>
    
    <pre><?php echo print_r($instructor_posts); ?></pre>

    <h3><?php echo esc_html( $instructor_posts["in_name"] ); ?></h3>
    </div>

    <?php endif;?>


