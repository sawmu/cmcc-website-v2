<?php
$ministry = get_field('ministry'); 
// var_dump($ministry);
?> 

<div class="ministry-main">
    <div class="ministry-slider">
        <?php if( have_rows('ministry')): ?>
            <?php while ( have_rows('ministry') ) : the_row();  ?>
                <div class="ministry-row">
                    <a class="ministry-link" href="<?php the_sub_field('ministry_link');?>">
                    <div class="ministry-img">
                        <img src=" <?php the_sub_field('ministry_icon');?>"class="img-responsive" alt="image">
                    </div>
                    </a>	
                </div>
            <?php endwhile; ?>    
        <?php endif; ?>
	</div>

</div>

