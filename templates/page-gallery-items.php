
<?php
/**
* Template Name: Gallery Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
?>
<main class="galleryBody">
            <h2>Gallery</h2>
            <div class="galleryContainer">
                <div class="galleryCard" >                  
                  <?php if(has_post_thumbnail()):?>
                    <img class="galleryImg" src="<?php the_post_thumbnail_url();?>" alt="art" onclick="openModal()">
                  <?php endif;?>
                  <h3><?php the_title();?></h3>
                  <h4>Size 16"x20" Framed, $850</h4>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat possimus sed harum ipsam, nesciunt commodi delectus id recusandae. 
                      Qui, deleniti? Nemo possimus sunt fugiat. Distinctio quidem obcaecati laborum veritatis ullam corrupti accusamus, consequuntur 
                      explicabo minima consectetur earum at dolor libero porro?</p>                      
                </div>
            </div>    
</main> 
             
<?php
get_footer();
?>