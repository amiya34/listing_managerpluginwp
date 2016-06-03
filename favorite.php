<div class="listing-manager-favorite">
    <?php if ( Listing_Manager_Favorites::is_my_favorite( $id ) ) : ?>
        <a href="#" class="button listing-manager-favorite-add marked" data-listing-id="<?php echo esc_attr( $id ); ?>" data-ajax-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">
            <span data-toggle="<?php echo esc_attr__( 'Add to favorites', 'listing-manager' ); ?>">
                <?php echo esc_html__( 'I Love It', 'listing-manager' ); ?>
            </span>
        </a><!-- /.button -->
    <?php else: ?>
        <a href="#" class="button listing-manager-favorite-add" data-listing-id="<?php echo esc_attr( $id ); ?>" data-ajax-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">
            <span data-toggle="<?php echo esc_attr__( 'I Love It', 'listing-manager' ); ?>">
                <?php echo esc_html__( 'Add to favorites', 'listing-manager' ); ?>
            </span>
        </a><!-- /.button -->
    <?php endif ; ?>
</div><!-- /.listing-manager-favorite -->
