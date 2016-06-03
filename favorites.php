<?php $listing_add_page_id = get_theme_mod( 'listing_manager_pages_listing_add', null ); ?>

<?php if ( ! empty( $listing_add_page_id ) ) : ?>
	<a href="<?php echo get_permalink( $listing_add_page_id ); ?>" class="button listing-manager-listing-add">
		<?php echo esc_html__( 'Create', 'listing-manager' ); ?>
	</a>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
	<table class="listing-manager-table-list">
		<thead>
		<tr>
			<th><?php echo esc_html__( 'Image', 'listing-manager' ); ?></th>
			<th><?php echo esc_html__( 'Title', 'listing-manager' ); ?></th>
			<th><?php echo esc_html__( 'Actions', 'listing-manager' ); ?></th>
		</tr>
		</thead>

		<tbody>
		<?php while ( have_posts() ): the_post(); ?>
			<tr>
				<td class="thumbnail-wrapper">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'shop_thumbnail' ); ?>
						<?php else: ?>
							<?php echo wc_placeholder_img(); ?>
						<?php endif; ?>
					</a>
				</td>

				<td>
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
				</td>

				<td class="actions-wrapper">
					<a href="<?php the_permalink(); ?>" class="button view"><?php echo esc_html__( 'View', 'listing-manager' ); ?></a>
				</td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>

	<?php woocommerce_pagination(); ?>
<?php endif; ?>