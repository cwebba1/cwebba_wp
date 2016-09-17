<?php get_header();?>
<!-- /*index.php*/ -->
<div class="wide-content">
<figure class="mast">
<img class="rnd shadow" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/heropics/swim528x90_x2Banner.jpg" width="528" height="90"
alt="About Craig Webb" />
</figure>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
<p class="post-date">Posted on <?php the_time('F jS, Y') ?></p>
<p><?php the_content(__('Continue Reading','cwebba')); ?></p>
	<div class="clear"></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, we couldn&rsquo;t find the post you are looking for.','cwebba'); ?></p>
<?php endif; ?>
</div><!-- END post-class -->

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
