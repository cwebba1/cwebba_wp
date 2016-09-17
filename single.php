<?php
/*
Template Name: Single Template
*/
?>
<?php get_header()?>

<div class="wide-content">
<figure class="mast">
<img class="rnd shadow" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heropics/taxi_banner728x90.jpg" width="728" height="90"
alt="About Craig Webb" />
</figure>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php while (have_posts()): the_post();?>
	<h2><?php the_title()?></h2>
	<?php the_content(__('Continue Reading','cwebba'));?>
	<p><?php the_tags('Tagged:', '' ,'' ); ?></p>
	<?php wp_link_pages('before=<p class="link-pages">Page: ') ?>
	<?php endwhile;?>
	<br />
	<div class="clear"></div>

	<div><?php comments_template('', true); ?></div>
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
	<?php get_sidebar()?>

<!-- This Page had a comments template here.  -->
	<div class="clear"></div>
	<?php get_footer()?>
