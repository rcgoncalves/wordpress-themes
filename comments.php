<?php
if(post_password_required()) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
	if(have_comments()) :
	?>
		<h2 class="comments-title">
			<?php
			printf(_n('One reply', '%1$s replies on &ldquo;%2$s&rdquo;', get_comments_number(), 'rcg-gray'),
				number_format_i18n(get_comments_number()),
				get_the_title()
			);
			?>
		</h2>
		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>
		<?php
		if(get_comment_pages_count() > 1 && get_option('page_comments')) :
		?>
			<nav id="comment-nav-below" class="navigation" role="navigation">
				<h1 class="assistive-text section-heading"><?php _e('Comment navigation', 'rcg-gray'); ?></h1>
				<div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'rcg-gray')); ?></div>
				<div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'rcg-gray')); ?></div>
			</nav>
		<?php
		endif;
		if(!comments_open() && get_comments_number()) :
		?>
			<div id="comments-closed">
				<h3 class="nocomments"><?php _e('Comments are closed.', 'rcg-gray'); ?></h3>
			</div>
		<?php
		endif;
	endif; 
	comment_form();
	?>
</div>
