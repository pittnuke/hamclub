<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s older', 'hamclub' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'newer %s', 'hamclub' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args );