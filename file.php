<?php if ( ! empty( $_GET['id'] ) ) : ?>    
    <?php $attachment_id = get_post_meta( $_GET['id'], $id, true );?>

    <?php if ( ! empty( $attachment_id ) ) : ?>
        <div class="listing-manager-form-gallery">
            <div class="listing-manager-form-gallery-image">
                <?php $src = wp_get_attachment_image_src( $attachment_id ); ?>        
                <img src="<?php echo esc_attr( $src[0] ); ?>" alt="">
                <a href="<?php echo network_site_url(); ?><?php echo esc_attr( $_SERVER['REQUEST_URI'] ); ?>&remove_attachment_id=<?php echo esc_attr( $attachment_id ); ?>">
                    <?php echo esc_html__( 'Remove', 'listing-manager' ); ?>
                </a>
            </div><!-- /.listing-manager-form-gallery-image -->
        </div><!-- /.listing-manager-form-gallery -->
    <?php endif; ?>    
<?php endif; ?>

<div class="form-group <?php if ( ! empty( $_SESSION['form_errors'][ $id ] ) ) : ?>form-error<?php endif; ?>">
    <label for="<?php echo esc_attr( $id ); ?>">
        <?php echo esc_html( $label ); ?>
        <?php if ( $required ) : ?><span class="required">*</span><?php endif; ?>
    </label>

    <input type="file"
           <?php if ( $required ) : ?>required="required"<?php endif; ?>
           id="<?php echo esc_attr( $id ); ?>"
           name="<?php echo esc_attr( $id ); ?>"           
           class="form-control">

    <?php if ( ! empty( $_SESSION['form_errors'][ $id ] ) ) : ?>
        <div class="form-error">
            <?php foreach( $_SESSION['form_errors'][ $id ] as $message ) : ?>
                <p><?php echo esc_html( $message ); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div><!-- /.form-group -->