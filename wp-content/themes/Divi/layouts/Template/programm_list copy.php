<?php

$taxonomies = get_terms( array(
    'taxonomy' => 'class_category',
    'hide_empty' => false
) );

?>

<div class="program-tab">
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <?php 
      $i = 0;
      foreach ($taxonomies as $tab) : //var_dump($tab);
      ?>
        <div class="nav-item <?php echo ($i == 0) ? 'active' : ''; ?>" id="nav-<?=$tab->slug;?>" data-toggle="tab" href="#nav-subject-<?=$tab->slug;?>" role="tab" aria-controls="nav-subject-<?=$tab->slug;?>" aria-selected="<?php echo ($i == 0) ? 'true' : 'false'; ?>">
          <p><?php echo $tab->name; ?></p>
          <span class="category-description"><?=$tab->description;?></span>
        </div>
        
      <?php
      $i++;
      endforeach;
      ?>
    </div>
  </nav>

  <div class="tab-content" id="nav-tabContent">

    <?php

    if( have_rows('programmes_list') ):
      $i = 0;
      while( have_rows('programmes_list') ) : the_row();
        // /var_dump(get_sub_field('tab_name'));

        $tab_name = get_sub_field('tab_name');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $read_more_link = get_sub_field('read_more_link');
        $upload_image = get_sub_field('upload_image');

    ?>

    <?php if ($i == 0) : ?>
      <div class="tab-pane fade show active" id="nav-subject-<?=$tab_name->slug;?>" role="tabpanel" aria-labelledby="nav-<?=$tab_name->slug;?>">
        <div class="program-detail">
          <div class="program-image">
            <img src="<?=$upload_image;?>" class="img-responsive" alt="<?=$title;?>">
          </div>
          <div class="program-info">
            <p class="subject"><?=$title;?></p>
            <p class="description"><?=$description;?></p>
            <a href="<?=$read_more_link;?>" class="read-more-btn">Read More</a>
          </div>
        </div>

    <?php else:// var_dump($tab); var_dump($tab_name->slug); ?>
      <?php if($tab == $tab_name->slug) : ?>
        <div class="program-detail">
          <div class="program-image">
            <img src="<?=$upload_image;?>" class="img-responsive" alt="<?=$title;?>">
          </div>
          <div class="program-info">
            <p class="subject"><?=$title;?></p>
            <p class="description"><?=$description;?></p>
            <a href="<?=$read_more_link;?>" class="read-more-btn">Read More</a>
          </div>
        </div>

      <?php else: ?>
    

      <?php endif; ?>
    <?php endif; ?>   

    <?php
      $tab = $tab_name->slug;
      $i++;
      endwhile;
    endif;
    ?>
    </div> <!-- end of tab-pane -->
  </div>
</div>