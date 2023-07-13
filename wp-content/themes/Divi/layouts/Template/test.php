<?php get_header(); ?>

<?php 
$layout = get_field('layout', 'term_' . get_queried_object()->term_id);
if($layout == 1) {
    echo do_shortcode('[et_pb_section global_module="897"][/et_pb_section]'); 
}
else if($layout == 2) {
    echo do_shortcode('[et_pb_section global_module="897"][/et_pb_section]'); 
}
?>

<?php if ($featured_posts): ?>
    <pre><?php echo print_r($featured_posts); ?></pre>
    <?php endif;?>


<?php get_footer(); ?>