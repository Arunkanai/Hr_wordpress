<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'charitable-non-profit' ),
		'next_text' => esc_html__( 'Next page', 'charitable-non-profit' ),
	) );