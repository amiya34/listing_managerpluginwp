<div class="form-group <?php if ( ! empty( $_SESSION['form_errors'][ $id ] ) ) : ?>form-error<?php endif; ?>">
	<label for="<?php echo esc_attr( $id ); ?>">
		<?php echo esc_html( $label ); ?>
		<?php if ( $required ) : ?><span class="required">*</span><?php endif; ?>
	</label>

	<?php $terms = get_terms( $taxonomy, array(
		'hide_empty' => false,
	) ); ?>

	<select name="<?php echo esc_attr( $id ); ?>[]" multiple="multiple">
		<?php if ( is_array( $terms ) ) : ?>
			<?php foreach ( $terms as $term ) : ?>
				<option <?php if ( ! empty( $_GET['id'] ) && has_term( $term, $taxonomy, $_GET['id'] ) ) : ?>selected="selected"<?php endif; ?> value="<?php echo esc_attr( $term->term_id ); ?>">
					<?php echo esc_html( $term->name ); ?>
				</option>
			<?php endforeach; ?>
		<?php endif; ?>
	</select>

	<?php if ( ! empty( $_SESSION['form_errors'][ $id ] ) ) : ?>
		<div class="form-error">
			<?php foreach( $_SESSION['form_errors'][ $id ] as $message ) : ?>
				<p><?php echo esc_html( $message ); ?></p>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div><!-- /.form-group -->