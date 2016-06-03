<div class="map-wrapper" >
    <div class="map">
        <div class="map-inner">
            <div class="map-container"
                 data-transparent-marker-image="<?php echo plugins_url( 'listing-manager' ); ?>/assets/img/transparent-marker-image.png"
                 data-zoom="<?php echo ! empty( $zoom ) ? $zoom : '13'; ?>"
                 data-latitude="<?php echo ! empty( $latitude ) ? $latitude : '40.74'; ?>"
                 data-longitude="<?php echo ! empty( $longitude ) ? $longitude : '-74.00'; ?>"
                 <?php if ( ! empty( $marker_style ) ) : ?>data-marker-style="<?php echo esc_attr( $marker_style ); ?>"<?php endif; ?>
                 <?php if ( ! empty( $max_pins ) ) : ?>data-max-pins="<?php echo esc_attr( $max_pins ); ?>"<?php endif; ?>
                 <?php if ( ! empty( $orderby ) ) : ?>data-orderby="<?php echo esc_attr( $orderby ); ?>"<?php endif; ?>
                 <?php if ( ! empty( $grid_size ) ) : ?> data-grid-size="<?php echo esc_attr( $grid_size ); ?>"<?php endif; ?>
                 <?php if ( ! empty( $geolocation ) ) : ?>data-geolocation="<?php echo esc_attr( $geolocation ); ?>"<?php endif; ?>
                 data-styles='[{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]'
                 data-ajax-action="<?php echo admin_url( 'admin-ajax.php' ); ?>">
            </div><!-- /.map-container -->
        </div><!-- /.map-inner -->
    </div><!-- /.map -->
</div><!-- /.map-wrapper -->
