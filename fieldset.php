<fieldset class="listing-manager-submission-form-<?php echo esc_attr( $id ); ?><?php if ( ! empty( $collapsible ) ) : ?> collapsible<?php endif; ?>">
	<?php if ( ! empty( $legend ) ) : ?>
		<legend><?php echo esc_html( $legend ); ?></legend>
	<?php endif; ?>

	<div class="fieldset-content">
		<?php echo $content; ?>
	</div>
</fieldset>