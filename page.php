<?php get_header(); ?>

<h1>This is Page.php</h1>

<h2><?php the_title(); ?></h2>

<?php the_post_thumbnail('medium')  ?>

<?php the_content() ?>


<?php $imgpath =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' , false);


?>

<img src="<?php echo $imgpath[0] ?>" alt="feature image" width=500px>



<?php get_footer(); ?>