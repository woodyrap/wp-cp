<?php get_header(); ?>
<section id="main">		
		<h1><?php _e( 'Products en', 'myblog' ); ?>: <?php single_term_title(); ?></h1>
		<section id="article_list">		
		<h2 id="cat_name"><?php single_cat_title( $prefix = '', $display = true); ?></h2>
		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article>
				<div class="thumb"><a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('list_article_thumbs'); } ?>					
				</a></div>
				
				<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
				<div class="date"><p><?php _e( 'Price: ', 'myblog' ); ?><?php the_field('price'); ?></p><span><?php the_taxonomies(array(
					'post'=>0,
					'before'=>'',
					'sep'=>',',
					'after'=>'',
					'template'=>'%s: %l',
				)); ?></span></div>
				<div class="extract"><?php the_excerpt(); ?></div>						
			</article>
		<?php endwhile; else: ?>
			<h1><?php _e( 'Articles does not found', 'myblog' ); ?></h1>
		<?php endif; ?>
			<div id="pagination">
				<p>				    
					<?php next_posts_link(__( 'Next Posts', 'myblog' )); ?>
					<?php previous_posts_link(__( 'Previous Posts', 'myblog' )); ?>
				</p>
			</div>
		</section>
		
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>