<?php if ( empty( $listing ) ): ?>
    <div class="woocommerce">
        <div class="woocommerce-error">
            <?php echo esc_html__( 'You have to specify listing!', 'listing-manager' ) ?>
        </div><!-- /.woocommerce-error-->
    </div><!-- /.woocommerce -->
<?php else: ?>
    <h3><?php echo esc_html__( sprintf( "What's wrong with %s?", get_the_title( $listing ) ), 'listing-manager' ); ?></h3>
    
    <form method="post" action="<?php echo get_the_permalink( $listing->ID ) ?>">
        <input type="hidden" name="listing_id" value="<?php echo esc_attr( $listing->ID ); ?>">

        <div class="form-group">
            <div class="radio">
                <label for="spam">
                    <input type="radio" name="reason" id="spam" required value="<?php echo esc_html__( 'It is spam', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It is spam', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="nudity">
                    <input type="radio" name="reason" id="nudity" required value="<?php echo esc_html__( 'It is nudity or pornography', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It is nudity or pornography', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="humiliation">
                    <input type="radio" name="reason" id="humiliation" required value="<?php echo esc_html__( 'It humiliates somebody', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It humiliates somebody', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="inappropriate">
                    <input type="radio" name="reason" id="inappropriate" required value="<?php echo esc_html__( 'It is inappropriate', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It is inappropriate', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="attack">
                    <input type="radio" name="reason" id="attack" required value="<?php echo esc_html__( 'It insults or attacks someone based on their religion, ethnicity or sexual orientation', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It insults or attacks someone based on their religion, ethnicity or sexual orientation', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->            

            <div class="radio">
                <label for="violence">
                    <input type="radio" name="reason" id="violence" required value="<?php echo esc_html__( 'It advocates violence or harm to a person or animal', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It advocates violence or harm to a person or animal', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="harming">
                    <input type="radio" name="reason" id="harming" required value="<?php echo esc_html__( 'It displays someone harming themself or planning to harm themself', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It displays someone harming themself or planning to harm themself', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="drugs">
                    <input type="radio" name="reason" id="drugs" required value="<?php echo esc_html__( 'It describes buying or selling drugs, guns or regulated products', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It describes buying or selling drugs, guns or regulated products', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->


            <div class="radio">
                <label for="unauthorized">
                    <input type="radio" name="reason" id="unauthorized" required value="<?php echo esc_html__( 'It is an unauthorized use of my intellectual property', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'It is an unauthorized use of my intellectual property', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->

            <div class="radio">
                <label for="something_else">
                    <input type="radio" name="reason" id="something_else" required value="<?php echo esc_html__( 'Something else', 'listing-manager' ); ?>">
                    <?php echo esc_html__( 'Something else', 'listing-manager' ); ?>
                </label>
            </div><!-- /.radio -->
        </div><!-- /.form-group -->

        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="<?php echo esc_html__( 'Other reason or additional information', 'listing-manager' ); ?>" rows="4"></textarea>
        </div><!-- /.form-group -->

        <h3><?php echo esc_html__( 'Contact to you', 'listing-manager' ); ?></h3>

        <div class="row">
            <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="<?php echo esc_html__( 'Name', 'listing-manager' ); ?>" required="required">
            </div><!-- /.form-group -->

            <div class="form-group">
                <input class="form-control" name="email" type="email" placeholder="<?php echo esc_html__( 'E-mail', 'listing-manager' ); ?>" required="required">
            </div><!-- /.form-group -->
        </div><!-- /.row -->

        <div class="button-wrapper">
            <button type="submit" class="button" name="report_form"><?php echo esc_html__( 'Submit to review', 'listing-manager' ); ?></button>
        </div><!-- /.button-wrapper -->
    </form>
<?php endif; ?>