<?php if ( empty( $listing ) ): ?>
	<div class="woocommerce">
		<div class="woocommerce-error">
			<?php echo esc_html__( 'Post ID is missing.', 'listing-manager' ); ?>
		</div><!-- /.woocommerce-error -->
	</div><!-- /.woocommerce -->
<?php elseif ( Listing_Manager_Claims::user_already_claimed( $listing->ID, get_current_user_id() ) ): ?>
	<div class="woocommerce">
		<div class="woocommerce-error">
			<?php echo esc_html__( 'You have already claimed this listing. Please, wait for admin review.', 'listing-manager' ); ?>
		</div><!-- /.woocommerce-error -->
	</div><!-- /.woocommerce -->
<?php else: ?>
	<form method="post" action="<?php echo get_the_permalink( $listing->ID ) ?>">
		<input type="hidden" name="listing_id" value="<?php echo esc_attr( $listing->ID ); ?>">

		<div class="form-group">
			<input class="form-control" name="name" type="text" placeholder="<?php echo esc_html__( 'Name', 'listing-manager' ); ?>" required="required">
		</div><!-- /.form-group -->

		<div class="form-group">
			<input class="form-control" name="email" type="email" placeholder="<?php echo esc_html__( 'E-mail', 'listing-manager' ); ?>" required="required">
		</div><!-- /.form-group -->

		<div class="form-group">
			<input class="form-control" name="phone" type="text" placeholder="<?php echo esc_html__( 'Phone', 'listing-manager' ); ?>" required="required">
		</div><!-- /.form-group -->

		<div class="form-group">
			<textarea class="form-control" name="message" required="required" placeholder="<?php echo esc_html__( 'Message', 'listing-manager' ); ?>" rows="4"></textarea>
		</div><!-- /.form-group -->

		<div class="button-wrapper">
			<button type="submit" class="button" name="claim_form">
				<?php echo esc_html__( sprintf( 'Claim %s', get_the_title( $listing ) ), 'listing-manager' ); ?>
			</button>
		</div><!-- /.button-wrapper -->
	</form>
<?php endif; ?>