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
				<th><?php echo esc_html__( 'Package', 'listing-manager' ); ?></th>
				<th><?php echo esc_html__( 'Status', 'listing-manager' ); ?></th>
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

					<td>
						<?php $package_id = get_post_meta( get_the_ID(), LISTING_MANAGER_LISTING_PREFIX . 'package', true ); ?>
						<?php if ( ! empty( $package_id ) ) : ?>
							<?php echo get_the_title( $package_id ); ?>
						<?php else : ?>
							-
						<?php endif; ?>
					</td>

					<td>
						<?php $post_status = get_post_status( get_the_ID() ); ?>
						<?php if ( 'pending' === $post_status ) : ?>
							<?php echo esc_html__( 'Pending', 'listing-manager' ); ?>
						<?php elseif ( 'publish' === $post_status ) : ?>
							<?php echo esc_html__( 'Published', 'listing-manager' ); ?>
						<?php endif; ?>
					</td>

					<td class="actions-wrapper">
						<?php $edit_listing = get_theme_mod( 'listing_manager_pages_listing_edit', null );?>
						<?php if ( ! empty( $edit_listing ) ) : ?>
							<a class="button edit" href="<?php echo get_permalink( $edit_listing ); ?>?id=<?php echo esc_attr( get_the_ID() ); ?>" class="button">
								<?php echo get_the_title( $edit_listing ); ?>
							</a>
						<?php endif; ?>						

						<?php $remove_listing = get_theme_mod( 'listing_manager_pages_listing_remove', null );?>
						<?php if ( ! empty( $remove_listing ) ) : ?>
							<a class="button remove" href="<?php echo get_permalink( $remove_listing ); ?>?id=<?php echo esc_attr( get_the_ID() ); ?>" class="button">
								<?php echo get_the_title( $remove_listing ); ?>
							</a>
						<?php endif; ?>
					</td>
				</tr>
			<?php endwhile; ?>			
		</tbody>
	</table>

    <?php woocommerce_pagination(); ?>
<?php endif; ?>