<form method="get" action="<?php echo Listing_Manager_Utilities::get_current_url(); ?>" class="listing-manager-filter-form">	
	<?php $fields = Listing_Manager_Filters::get_fields(); ?>

	<?php foreach ( $fields as $key => $value ) : ?>
		<?php $is_field_visible = empty( $instance[ sprintf( 'hide_%s', $key ) ] ); ?>
		<?php $is_field_active = in_array( $key, array_keys( Listing_Manager_Filters::get_fields() ) ); ?>

		<?php if ( $is_field_visible && $is_field_active ) : ?>
			<?php $template = str_replace( '_', '-', $key ); ?>
			<?php wc_get_template( 'listing-manager/filters/' . $template . '.php', array(
				'widget_id'		=> Listing_Manager_Utilities::get_uuid(),
				'input_titles'	=> ! empty( $atts['input_titles'] ) ? $atts['input_titles'] : 'labels',
				'atts'			=> $atts,
			), '', LISTING_MANAGER_DIR . 'templates/' ); ?>
		<?php endif; ?>
	<?php endforeach; ?>

	<div class="form-group form-group-button">
		<button class="button" type="submit">
			<?php echo esc_html__( 'Filter Listings', 'listing-manager' ); ?>
		</button>
	</div><!-- /.form-group -->
</form>