

<div class="main-schedule-flex">
		<div class="schedule-left" style="background-image:url('<?php echo the_field('schedule_background_image_one'); ?>');">
            <div class="schedule-inner">
                <h2 class="header-title"><?php the_field('schedule_title_one'); ?></h2>
                <div class="description">
                    <p><?php the_field('schedule_desc_one'); ?></p>
                </div>
                <div class="btn trial-btn">
                    <div class="btn-center">
                        <a href="<?=get_field('schedule_button_link');?>" class="view-more"><?=get_field('schedule_button_label_one');?></a>
                    </div>
                </div>
            </div>
		</div>

        <div class="schedule-right" style="background-image:url('<?php echo the_field('schedule_background_image_two'); ?>');">
            <div class="schedule-inner">
                <h2 class="header-title"><?php the_field('schedule_title_two'); ?></h2>
                <div class="description">
                    <p><?php the_field('schedule_desc_two'); ?></p>
                </div>
                <div class="btn member-btn">
                    <div class="btn-center">
                        <a href="<?=get_field('schedule_button_link_two');?>" class="view-more"><?=get_field('schedule_button_label_two');?></a>
                    </div>
                </div>
            </div>
		</div>
</div>
