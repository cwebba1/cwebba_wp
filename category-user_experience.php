<?php
/**
* category-user_experience.php cat=7 091416
* From: A Simple Category Template
* http://www.wpbeginner.com/wp-themes/how-to-create-category-templates-in-wordpress/
*/

get_header(); ?> 
	<!-- This is category-user_experience.php From: A Simple Category Template (WP Beginner) -->

<!-- CONTENT HERE -->
<div class="wide-content" role="main">
		<figure class="mast">
			<img class="rnd shadow" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heropics/swim528x90_x2Banner.jpg" width="528" height="90"
alt="About Craig Webb" />
		</figure>
<!--  CONTENT BEGINS HERE -->
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<h1 class="archive-title"><?php single_cat_title( '', true ); ?></h1>


<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<?php

// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

<div class="entry">
<?php the_content(); ?>
	<div class="clear"></div>
<!--
 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
-->
</div>

<?php endwhile; 

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<br />
<?php cwebba_numeric_posts_nav(); ?>
<?php endif; ?>

<br />
<br />
<h4>Concept, design and creative development.</h4>
<blockquote class="big">Build a core identity and message tailored to your target audience.</blockquote>
<p><strong>Craig Webb Art</strong> provides all aspects of New Business Communications Development including project management, creative development, copywriting and graphic design.</p>

<nav class="workbook">
<ul><li><h5><a href="work_artdirection.htm">Graphic Design</a></h5>
<p class="p12">Creative concepts and persuasive visual design solutions that rock across media.</p>
</li><li><h5><a href="work_written_content.htm">Copywriting</a></h5>
<p class="p12">Compelling messages that grab attention, tell great stories and target consumers.</p>
</li><li class="last">
<h5><a href="work_web.htm">Internet Design</a></h5>
<p class="p12">Delightful interactive experiences that support business objectives and user needs.</p>
</li></ul>
</nav>
</div><!-- /end wide-content -->


<?php get_sidebar(); ?>
<div class="clear"></div>
<?php get_footer(); ?>
