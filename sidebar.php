<!-- Sidebar.php 090516 -->
<style>
.cat-item-1 {display:none;}
</style>

<div id="sidebar" class="wide-sidnav">


<section class="wide-move">

<!-- Hard-coded not from dynamic widget, from Codex:  -->
        <div><h5 class="sidebartitle"><strong><?php _e('Search:','cwebba'); ?></strong></h5>
<form id="searchbox" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text">Search for:</span>
    <input id="search" type="search" class="search-field" placeholder="Search . . ." value="" name="s" title="Search for:" />
    <input id="search-submit" type="submit" class="search-submit" value="Go" />
</form></div>


<nav>
<ul class="wide-navserv" style="padding:0;">
<h5 class="no-margin sidebartitle"><strong><?php _e('Recent Posts','cwebba'); ?></strong></h5>
<?php get_archives_exclude_category() ?>
</ul>
</nav>
</section><!-- END wide-move -->




<aside class="wide-services">
  <!--
<header class="rice">
<h5 class="no-margin sidebartitle"><strong><?php _e('Pages','cwebba'); ?></strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<?php wp_list_pages('title_li='); ?>
</ul>
</div>
</div>
-->


<header class="rice">
<h5 class="no-margin sidebartitle"><strong><?php _e('Topics','cwebba'); ?></strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<?php wp_list_categories("orderby=ID&exclude=1,6&title_li="); ?>
</ul><!-- END Hard-code -->
</div>
</div>


<header class="rice">
<?php query_posts('cat=4&showposts=5'); ?><!-- Technology -->
<h5 class="no-margin sidebartitle"><strong><a style="max-width:100%;" href="/index.php?cat=4"><?php single_cat_title(''); ?></a>
</strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul><!-- END Hard-code -->
</div>
</div>


<header class="rice">
<?php query_posts('cat=7&showposts=5'); ?><!-- User-Experience -->
<h5 class="no-margin sidebartitle"><strong><a style="max-width:100%;" href="/index.php?cat=7"><?php single_cat_title(''); ?></a>
</strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul><!-- END Hard-code -->
</div>
</div>


<header class="rice">
<?php query_posts('cat=5&showposts=5'); ?><!-- Polis -->
<h5 class="no-margin sidebartitle"><strong><a style="max-width:100%;" href="/index.php?cat=5"><?php single_cat_title(''); ?></a>
</strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul><!-- END Hard-code -->
</div>
</div>


<header class="rice">
<h5 class="no-margin sidebartitle"><strong><?php _e('Archives','cwebba'); ?></strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<?php wp_get_archives('type=monthly'); ?>
</ul><!-- END Hard-code -->
</div>
</div>

<!--
<header class="rice">
<h5 class="no-margin sidebartitle"><strong><?php _e('Administration','cwebba'); ?></strong></h5>
</header>
<div class="colcontain">
<div class="columns02 sidnavcol gra-gradi">
<ul class="list-archives">
<li><?php wp_loginout($_SERVER['REQUEST_URI']); ?></li>
</ul>
</div>
</div>
-->
</aside>
<br />
	<?php dynamic_sidebar('sidebar-widget-01');?>

</div><!-- END wide-sidnav -->

