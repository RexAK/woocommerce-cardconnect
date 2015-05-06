<p class="form-row form-row-first">
	<label for="card_connect-save-card">
		<input
			id="card_connect-save-card"
			class="input-checkbox"
			type="checkbox"
			name="card_connect-save-card"
			style="margin-right: 3px"
			/>
		<?php echo __( 'Save this card', 'woocommerce' ); ?>
		<input
			id="card_connect-new-card-alias"
			class="input-text"
			type="text"
			name="card_connect-new-card-alias"
		  placeholder="Card Nickname"
			/>
	</label>
</p>

<p class="form-row form-row-last">
	<label for="card_connect-cards">
		<?php echo __( 'Use a saved card', 'woocommerce' ); ?>
	</label>
	<select
		id="card_connect-cards"
		class="input-select"
		name="card_connect-cards"
		>
		<option value="1234">7589</option>
		<option value="1234">7589</option>
		<option value="1234">7589</option>
		<option value="1234">7589</option>
	</select>
</p>