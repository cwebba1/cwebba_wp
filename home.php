
<?php 
/**
* Template Name: Homepage
* From: Index.php Template
* 
*/
get_header(); ?>
<!-- CONTENT HERE -->
<!--  CONTENT BEGINS HERE -->
	<div class="wide-content" role="main">
		<figure class="mast">
			<img class="rnd shadow" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heropics/swim528x90_x2Banner.jpg" width="528" height="90"
alt="About Craig Webb" />
		</figure>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title() ;?></h2>
			<?php the_post_thumbnail(); ?>
			<?php the_excerpt(); ?>
			<?php endwhile; else: ?>
			<p>Sorry, no posts to list</p>
		<?php endif; ?>
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



