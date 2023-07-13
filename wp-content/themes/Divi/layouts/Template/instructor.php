<?php
$course_list = get_field('benefits_list'); ?>

<div class="class-course-main-flex">
    <div class="course-left">
        <h2><?php the_field('be_title'); ?></h2>
        <p><?php the_field('be_desc'); ?></p>
        <div class="course-main">
        
        
        
        
        <?php if( have_rows('benefits_list')): ?>
        <?php while ( have_rows('benefits_list') ) : the_row();  ?>
         <div class="course-gutter">
                    <div class="course-list-flex ">
                        <div class="course-list-image">
                            <img src=" <?php the_sub_field('be_icon');?>"class="img-responsive" alt="image">
                        </div>
                        <div class="course-list-description">
                           
                            <?php the_sub_field('be_text');?>
                        </div>
                    </div>
                </div>
         <?php endwhile; ?>
        
          <?php endif; ?>

        </div>
    </div>


    <div class="course-right">
    <h2><?php the_field('in_title'); ?></h2>
        <div class="instructor-flex">
            <div class="in-img">
                <img src="<?= get_field('instructor_photo'); ?>">
            </div>
            <div class="in-person">
                <h3><?php the_field('instructor_name'); ?></h3>
                <p><?php the_field('instructor_position'); ?></p>
            </div>
        </div>
        <div class="instructor-desc">
            <p><?php the_field('instructor_desc'); ?></p>
        </div>
        
    </div>
</div>