<?php
$connect_link = get_field('connect_link'); 
// var_dump($connect_link);
?> 

<div class="connect-title">
	<h2 class="article-title"><?php the_field('titel_connect'); ?></h2>
</div>

<div class="connect-main">
    <div class="connect-left">
        <?php if( have_rows('connect_link')): ?>
            <?php while ( have_rows('connect_link') ) : the_row();  ?>
                <div class="connect-btn-main">
                    <a class="connect-btn-link" href="<?php the_sub_field('connect_inner_link');?>">
                    <div class="connect-icon-gp">
                        <img src=" <?php the_sub_field('connect_icon');?>"class="img-responsive" alt="image">
                        <p> <?php the_sub_field('connect_text');?> </p>
                    </div>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>	
                </div>
            <?php endwhile; ?>    
        <?php endif; ?>
	</div>

    <div class="connect-right">
        <div class="con-right-main">
        <div class="connect-right-title">
            <h2>
                <?php the_field('right_title_connect'); ?>
            </h2>
            <p>
                <?php the_field('right_sub_title_connect'); ?>
            </p>
        </div>
        <div class="right-connect-btn-main">
        <?php if( have_rows('right_connect_link')): ?>
            <?php while ( have_rows('right_connect_link') ) : the_row();  ?>
                <div class="r-connect-btn-main">
                    <a class="r-connect-btn-link" href="<?php the_sub_field('right_connect_inner_link');?>">
                    <div class="r-connect-icon-gp">
                        <img src=" <?php the_sub_field('right_connect_icon');?>"class="img-responsive" alt="image">
                        <p> <?php the_sub_field('right_connect_text');?> </p>
                    </div>
                    </a>	
                </div>
            <?php endwhile; ?>    
        <?php endif; ?>
        </div>
        </div> 
    </div>

</div>
