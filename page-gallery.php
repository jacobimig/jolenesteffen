<?php get_header();?>

<main class="galleryBody">
            <h2>Gallery</h2>
            <div class="galleryContainer">

<?php
$args = array(
  'post_type' => 'post',
  'category_name' => 'gallery-items'
);

$blogposts = new WP_Query($args);

while($blogposts->have_posts()) {
    $blogposts->the_post();
?>
            <a href="<?php the_permalink(); ?>">
                <div class="galleryCard">
                  <img class="galleryImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" >
                    <h3><?php the_title(); ?></h3>
                  <p><?php the_content(); ?></p>  
                </div> 
            </a>             
<?php } wp_reset_query(); ?>
            </div>

</main> 

<?php get_footer();?>