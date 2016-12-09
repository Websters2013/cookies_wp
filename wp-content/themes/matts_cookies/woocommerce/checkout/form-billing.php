<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */

?>
<h2 class="checkout__title">your Billing info</h2>

<!-- checkout__info -->
<div class="checkout__info">
	<div>

		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div>
				<label class="site__label" for="billing_first_name">FIRST NAME</label>
			</div>
			<div>
				<input class="site__input"  value="<?= $checkout->get_value('billing_first_name') ?>" data-required type="text" id="billing_first_name" name="billing_first_name">
			</div>
		</fieldset>
		<!-- /checkout__fields -->

		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div><label class="site__label" for="billing_last_name">LAST NAME</label></div>
			<div><input class="site__input"  data-required value="<?= $checkout->get_value('billing_last_name') ?>" type="text" id="billing_last_name" name="billing_last_name"></div>
		</fieldset>
		<!-- /checkout__fields -->

		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div><label class="site__label" for="billing_email">E-MAIL</label></div>
			<div><input class="site__input"  data-required value="<?= $checkout->get_value('billing_email') ?>" type="email" id="billing_email" name="billing_email"></div>
		</fieldset>
		<!-- /checkout__fields -->

		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div> <label class="site__label" for="billing_phone">PHONE</label></div>
			<div><input class="site__input"  data-required value="<?= $checkout->get_value('billing_phone') ?>" type="tel" id="billing_phone" name="billing_phone"></div>
		</fieldset>
		<!-- /checkout__fields -->

	</div>
	<div>

		<!-- checkout__fields -->
		<fieldset class="checkout__fields checkout__fields-hide">
			<div><label class="site__label" for="billing_country">Country</label></div>
			<div><input class="site__input"  data-required value="US" type="text" id="billing_country" name="billing_country"></div>
		</fieldset>
		<!-- /checkout__fields -->
		
		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div><label class="site__label" for="billing_address_1">ADDRESS</label></div>
			<div><input class="site__input"  data-required value="<?= $checkout->get_value('billing_address_1') ?>" type="text" id="billing_address_1" name="billing_address_1"></div>
		</fieldset>
		<!-- /checkout__fields -->

		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div><label class="site__label" for="billing_address_2">ADDRESS</label></div>
			<div><input class="site__input"  data-required value="<?= $checkout->get_value('billing_address_2') ?>" type="text" id="billing_address_2" name="billing_address_2"></div>
		</fieldset>
		<!-- /checkout__fields -->

		<!-- checkout__fields -->
		<fieldset class="checkout__fields">
			<div><label class="site__label" for="billing_city">CITY & STATE</label></div>
			<div class="checkout__fields__two">
				<div>

					<?php $states = WC()->countries->get_states( 'US' );  ?>

					<input class="site__input" data-required value="<?= $checkout->get_value('billing_city') ?>" type="text" id="billing_city" name="billing_city">

					<?php

					if(is_array( $states ) && !empty( $states )):
						?>
						<select name="billing_state" id="state">

							<?php foreach ($states as $key => $state){

								if($checkout->get_value('billing_state') == $key){
									$selected = 'selected';
								} else {
									$selected = '';
								}

								?>

								<option  <?= $selected ?> value="<?= $key ?>"><?= $state ?></option>

							<?php } ?>

						</select>
					<?php endif; ?>

				</div>
			</div>
		</fieldset>
		<!-- /checkout__fields -->
		
		<!-- checkout__fields -->
		<fieldset class="checkout__fields checkout__fields_zip">
			<div><label class="site__label" for="billing_postcode">ZIP</label></div>
			<div><input class="site__input"  data-required value="<?= $checkout->get_value('billing_postcode') ?>" type="text" id="billing_postcode" name="billing_postcode"></div>
		</fieldset>
		<!-- /checkout__fields -->

	</div>
</div>
<!-- /checkout__info -->
