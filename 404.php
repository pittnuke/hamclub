<?php get_header(); ?>
<main id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'hamclub' ); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<p><?php esc_html_e( 'You called CQ, but noone was listening. Try a search instead?', 'hamclub' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
</main>
<?php get_footer(); ?>
