<?php
get_header();
?>

<?php
$args = array(
  'post_type' => 'post',
  'category_name' => 'about-me'
);

$blogposts = new WP_Query($args);

while($blogposts->have_posts()) {
    $blogposts->the_post();
?>

<main class="aboutBody">
            <div class="aboutImg">
                <img src='<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>' alt="Jolene Steffen">
            </div>
            <div class="aboutText">
                <h2>Jolene Steffen</h2>
                <h4>Owner</h4>
                <?php the_content(); ?>
            </div>
<?php } wp_reset_query(); ?>
        </main>



<?php
get_footer();
?>