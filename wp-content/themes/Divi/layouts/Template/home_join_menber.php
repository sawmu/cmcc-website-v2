<?php
$get_all_join = get_field('join_as_member');

?>

<div class="home-join-main">
	<div class="home-join-menber">
		<?php foreach ($get_all_join as $home_join) : ?>
			<div class="join-gutter">
                    <div class="join-list-flex ">
                        <div class="join-list-image">
                            <img src="<?php echo $home_join['join_as_icon'];?>"class="img-responsive" alt="image">
                        </div>
                        <div class="join-list-description">
                            <?php echo $home_join['join_as_text']; ?>
                        </div>
                    </div>
                </div>
		<?php endforeach; ?>
	</div>
</div>
