<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="infobox">
    <div class="infobox-inner">
        <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
        <div class="infobox-image" <?php if ( ! empty( $image_url ) ) : ?>style="background-image: url('<?php echo esc_attr( $image_url ); ?>');"<?php endif; ?>>
            <a href="<?php the_permalink(); ?>"></a>
        </div>

        <div class="infobox-title">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php echo the_title(); ?>
                </a>
            </h2>
        </div><!-- /.infobox-title-->

        <a class="close"></a>
    </div>
</div>