<?php get_header();?>

<section class="singlePage">
    <h2 class="title"><?php the_title(); ?></h2>
    <img class="img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" >
    <div class="txtWrapper">
        <p class="pageTxt"><?php the_content(); ?></p>
    </div>
</section>

<?php get_footer();?>