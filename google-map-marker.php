<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php if ( ! empty( $_GET['marker-style'] ) && $_GET['marker-style'] == 'horizon-poi' ) : ?>
    <?php $poi = Horizon_Post_Type_Listing::get_horizon_poi(); ?>
    <div class="marker-horizon-poi"><div class="marker-horizon-poi-inner">
            <?php if ( ! empty( $poi ) ) : ?>
                <i class="horizon-poi <?php echo $poi; ?>"></i>
            <?php else : ?>
                <i class="horizon-poi horizon-poi-information"></i>
            <?php endif; ?>
        </div></div>
<?php else : ?>
    <div class="marker"><div class="marker-inner"></div></div>
<?php endif; ?>