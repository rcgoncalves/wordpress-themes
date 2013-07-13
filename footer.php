				</div>
			</div>
			<?php
			if(!is_page_template('page-templates/front-page.php')) {
				get_sidebar('footer');
			}
			?>
			<footer id="colophon" role="contentinfo">
				<div class="site-info">
					<a href="http://wordpress.org/" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'rcg-gray'); ?>"><?php _e('Proudly powered by WordPress', 'rcg-gray' ); ?></a>
					|
					<a href="http://rcgoncalves.pt/project/rcg-gray/"><?php _e('Theme RCG Gray', 'rcg-gray'); ?></a>
				</div>
			</footer>
		</div>
		<?php
		wp_footer();
		?>
	</body>
</html>

