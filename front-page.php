
<?php 
/**
* Template Name: front-page
* front-page.php 090516
* front-page.php 072316
* From: Index.php Template + category.php template
* 
*/
get_header(); ?>
<!-- CONTENT HERE -->
<!--  CONTENT BEGINS HERE -->
<div class="wide-content" role="main">
<figure class="mast">
<!--<img class="rnd shadow" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heropics/swim528x90_x2Banner.jpg" width="528" height="90"
alt="About Craig Webb" />-->
<img class="rnd shadow" src="<?php echo get_hero_image_src(); ?>" width="528" height="90" alt="About Craig Webb" />
</figure>

	<?php if (is_front_page()): ?><?php endif; ?>

	<?php query_posts('category_name=land-here&showposts=1'); ?>

<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title() ;?></h1>		


	<?php the_content(); ?>

<?php endwhile; ?>
<br>
	<div class="clear"></div>


	<hr class="thin-lt-rule" />
	<br>

<?php rewind_posts(); ?>

	<?php query_posts('category_name=frontfoot&showposts=1'); ?>
<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title() ;?></h1>		

	<?php the_content(); ?>
<?php endwhile; ?>



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
<!-- Sidenav here -->
    <?php get_sidebar(); ?>
<?php get_footer(); ?>



