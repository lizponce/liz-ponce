<?php
/**
* Template Name: Child Single Portfolio
 */

//LOADING header.php + actions
get_header(); 
?>

<div class="full-width-wrapper">
    <div class="container">
        <div class="left-half">
        	<?php the_post_thumbnail(); ?>
        </div>
        <div class="right-half">
        	<h1><?php echo get_the_title(); ?></h1>
        	<hr class="content-title-rule">
        	<p><?php the_content(); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>