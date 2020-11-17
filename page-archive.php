<?php
get_header();
?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'archive');
        get_template_part('template-parts/content', 'img');
    }
}
?>
ARCHIVE HERE

<?php
get_footer();
?>