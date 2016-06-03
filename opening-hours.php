<table class="listing-manager-submission-opening-hours">
    <thead>
        <tr>
            <th></th>
            <th><?php echo esc_html__( 'Time From', 'listing-manager' ); ?></th>
            <th><?php echo esc_html__( 'Time To', 'listing-manager' ); ?></th>
            <th><?php echo esc_html__( 'Custom Text', 'listing-manager' ); ?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach( Listing_Manager_Utilities::get_days() as $key => $value ) : ?>
            <?php $prefix = $id . '_' . $key; ?>
            <tr>
                <td class="day-name"><?php echo esc_html( $value ); ?></td>
                <?php $from = ! empty( $_GET['id'] ) ? get_post_meta( $_GET['id'], $prefix . '_from', true ) : ''; ?>
                <td><input type="text" class="from" name="<?php echo esc_attr( $prefix ); ?>_from" value="<?php echo esc_attr( $from ); ?>"></td>

                <?php $to = ! empty( $_GET['id'] ) ? get_post_meta( $_GET['id'], $prefix . '_to', true ) : ''; ?>
                <td><input type="text" class="to" name="<?php echo esc_attr( $prefix ); ?>_to" value="<?php echo esc_attr( $to ); ?>"></td>

                <?php $custom = ! empty( $_GET['id'] ) ? get_post_meta( $_GET['id'], $prefix . '_custom', true ) : ''; ?>
                <td><input type="text" name="<?php echo esc_attr( $prefix ); ?>_custom" value="<?php echo esc_attr( $custom ); ?>"></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>