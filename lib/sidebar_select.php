<?php
	/**
	 * Adds a custom field type to the meta box class
	 *
	 * @param array $field Your new field
	 * @param mixed $meta Current saved meta_value for the key
	 */
	function sidebar_select( $field, $meta ) {
		$sidebars = $GLOBALS['wp_registered_sidebars'];
		echo '<select name="', $field['id'], '" id="', $field['id'], '">';
			foreach ($sidebars as $option) {
			echo '<option value="', $option['id'], '"', $meta == $option['id'] ? ' selected="selected"' : '', '>', $option['name'], '</option>';
			}
			echo '</select>';
			echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
	}

	/**
	 * Validation function for sidebar_select meta box field
	 *
	 * @param string $new The new value to validate before saving
	 * @return bool|string If validates returns the value
	 */
	function validate_sidebar_select( $new ) {
		$sidebars = $GLOBALS['wp_registered_sidebars'];
			if ( !array_key_exists( $new, (array)$sidebars ) ) $new ='';
			return $new;
	}