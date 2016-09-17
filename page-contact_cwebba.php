
<?php 
/**
* Template Name: CWebba Contact Page
* page-contact_cwebba.php 091416
* From: Let’s Build A WordPress Theme From Scratch – Page.php
* http://www.wpdevsolutions.com/build-a-wordpress-theme-page-template/
*/
get_header(); ?>
<!-- CONTENT HERE -->

<!--  CONTENT BEGINS HERE -->
	<div class="wide-content" role="main">
<figure class="mast">
<img class="rnd shadow" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heropics/swim528x90_x2Banner.jpg" width="528" height="90"
alt="About Craig Webb" />
</figure>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="page-content-title"><?php the_title(); ?></h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
                <?php endwhile; ?>                
                <?php else: ?>
                    <!-- <p>No content has been posted to this page.</p> -->                   
           	<?php endif; ?>
</div><!-- END post-class -->
                             

<br />
<br />
<h4>Concept, design and creative development.</h4>
<blockquote class="big">Build a core identity and message tailored to your target audience.</blockquote>
<p class="endpara2"><strong>Craig Webb Art</strong> provides all aspects of New Business Communications Development including project management, creative development, copywriting and graphic design.</p>

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



