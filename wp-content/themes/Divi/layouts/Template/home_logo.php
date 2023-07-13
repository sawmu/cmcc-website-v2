<?php

   $get_logo = get_field('images');
?>
	
   <div class="home-logo">

        	<?php foreach ($get_logo as $get_logo) : ?>
           
                 <div>
                 	<img src="<?php echo $get_logo['images'];?>">
                 </div>

			<?php ?>

   </div>
								  				 						  