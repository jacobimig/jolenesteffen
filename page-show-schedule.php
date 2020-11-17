<?php get_header(); ?>

<main class="scheduleBody">
    <h2><?php echo date("Y") . " Show Schedule" ?></h2>
    <div class="scheduleGrid">
        <h4>Dates</h4>
        <h4>Art Show Location</h4>

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'show-schedule'
        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post();
        ?>
            <h4><?php the_title(); ?></h4>
            <span><?php the_content(); ?></span>
        <?php } wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>