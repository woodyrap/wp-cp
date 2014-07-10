<?php get_header(); ?>
<section id="main">
		<section id="article_list">
		
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
				<div class="extract"><?php the_content(); ?></div>						
			</article>
		<?php endwhile; else: ?>
			<h1><?php _e( 'Articles does not found', 'myblog' ); ?></h1>
		<?php endif; ?>			
		<div id="comments">
			<h3><?php _e( 'Comments', 'myblog' ); ?></h3>
			<div id="box_comments">
				<?php comments_template(); ?>
			</div>
		</div>
		</section>
		
<?php get_sidebar(); ?>
	</section>

<?php get_footer(); ?>