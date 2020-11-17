<?php
get_header();
?>

<main class="galleryBody">
            <h2 onclick="myFunction()">Gallery</h2>
            <div class="galleryContainer">

<?php
$args = array(
  'post_type' => 'post',
  'category' => 'gallery-items'
);

$blogposts = new WP_Query($args);

while($blogposts->have_posts()) {
    $blogposts->the_post();
?>

                <div class="galleryCard">
                  <img class="galleryImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" onclick="openModal()">
                  <h3><?php the_title(); ?></h3>
                  <h4>Size 16"x20" Framed, $850</h4>
                  <p><?php the_content(); ?></p>                  
                </div>
<?php } wp_reset_query(); ?>
            </div>

</main> 
<div class="pagination">
    <?php echo paginate_links(); ?>
</div>
<?php
get_footer();
?>