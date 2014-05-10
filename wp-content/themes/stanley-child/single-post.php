<?php
/**
* Template Name: Child Single Post
 */

//LOADING header.php + actions
get_header(); 
?>

<div class="full-width-wrapper">
    <div class="container">
        	<p><?php the_content(); ?></p>
    </div>
</div>

<?php get_footer(); ?>