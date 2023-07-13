<div class="about-main-flex">
    <div class="about-left">
        <p><?php the_field('about_title'); ?></p>
        <h3><?php the_field('about_desc'); ?></h3>
    </div>
    <div class="about-right">
        <img src="<?= get_field('about_img'); ?>">
    </div>
</div>


