<?php
get_header();
?>
<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php
		if(have_posts()) :
			while(have_posts()) :
				the_post();
				get_template_part('content', get_post_format());
			endwhile;
			// Navigation
			if($wp_query->max_num_pages > 1) :
			?>
				<nav id="nav-below" class="navigation" role="navigation">
					<h3 class="assistive-text"><?php _e('Post navigation', 'rcg-gray'); ?></h3>
					<div class="nav-previous"><?php next_posts_link(__('&larr; Older posts', 'rcg-gray')); ?></div>
					<div class="nav-next"><?php previous_posts_link(__('Newer posts &rarr;', 'rcg-gray')); ?></div>
				</nav>
			<?php
			endif;
		else :
		?>
			<article class="post no-results">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e('No posts to display', 'rcg-gray'); ?></h1>
				</header>
				<div class="entry-content">
					<p><?php _e('Sorry, but no results were found.', 'rcg-gray'); ?></p>
				</div>
			</article>
		<?php
		endif;
		?>
	</div>
</div>
<?php
get_sidebar();
get_footer();
?>
