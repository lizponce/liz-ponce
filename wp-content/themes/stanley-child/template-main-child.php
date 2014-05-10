<?php
/**
* Template Name: Main Child
 */

//LOADING header.php + actions
get_header(); 
?>

<div class="full-width-wrapper">
    <div class="container">
        <h1><?php echo get_the_title(); ?></h1>
        <hr class="content-title-rule">
        <p><?php the_content(); ?></p>
    </div>
</div>

<?php get_footer(); ?>