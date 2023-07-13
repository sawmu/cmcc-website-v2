<div class="class-rates-main">   

    <?php if( have_rows('class_rates')): ?>
        <?php  while ( have_rows('class_rates') ) : the_row();  ?>
        <div class="class-rates-flex">   
            <div class="rates-title">
                <h3><?php the_sub_field('rate_title'); ?></h3>
            </div>                                                 
            <div class="class-list-main">

                <?php if( have_rows('class_rates_list')): ?>                                    
                            <div class="rates_list">  
                                <?php while ( have_rows('class_rates_list') ) : the_row();  ?>
                                    
                                        <div class="agendali">
                                            <div class="price"><sup><?php the_sub_field('class_rates_currency');?></sup><?php the_sub_field('class_rates_price');?><span><?php the_sub_field('class_rates_frequency');?></span></div>
                                            <p><?php the_sub_field('class_rates_sub_title');?></p>
                                            <?php the_sub_field('class_rates_text');?>
                                            <?php if (!empty(get_sub_field('rate_packages_price'))) { ?>
                                                <div class="packages-price"><sup><?php the_sub_field('rate_packages_currency');?></sup><?php the_sub_field('rate_packages_price');?><span><?php the_sub_field('rate_packages_frequency');?></span></div>
                                                <p><?php the_sub_field('rate_packages_text');?></p>
                                            <?php } ?>
                                        </div>



                                <?php endwhile; ?>
                                        <div class="rate-btn">
                                            <div class="btn-center">
                                                <a href="<?=get_sub_field('rate_btn_link');?>" class="view-more"><?=get_sub_field('rate_btn_label');?></a>
                                            </div>
                                        </div>
                            </div>
                                
                          
                <?php endif; ?> 
                
            </div><!-- class-list-main -->
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
    
</div><!-- #class-rates -->