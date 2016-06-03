<form method="post" enctype="multipart/form-data" action="<?php echo Listing_Manager_Utilities::get_current_url(); ?>">
	<?php echo Listing_Manager_Product_Package::get_submission_packages(); ?>
	
	<?php echo Listing_Manager_Submission::render_fields( null, $update ); ?>

	<button type="submit" name="submit_listing" value="1" class="button">
		<?php echo esc_html__( 'Save', 'listing-manager' ); ?>
	</button>
</form>

<?php Listing_Manager_Submission::clean_validation_errors(); ?>