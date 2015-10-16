<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme_Two
 */

?>

<div class="myPost_Container"  id="id-<?php the_ID(); ?>">
    
    <div class="myPostTitle">
        <?php the_title(); ?>
        
    </div>
    
    <div class="myPostAuthor">
        <?php the_author(); ?>
        
    </div>

</div>
