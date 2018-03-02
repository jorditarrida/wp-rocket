<?php
/**
 * Text template.
 *
 * @since 3.0
 *
 * @param array $data {
 *     Checkbox Field arguments.
 *
 *     @type string $id          Field identifier.
 *     @type string $parent      Parent field identifier.
 *     @type string $label       Field label.
 *     @type string $value       Field value.
 *     @type string $description Field description.
 *     @type string $input_attr  Attributes for the input field.
 * }
 */

defined( 'ABSPATH' ) || die( 'Cheatin&#8217; uh?' );
?>

<div class="wpr-field wpr-field--text <?php echo isset( $data['parent'] ) ? 'wpr-field--children' : ''; ?>">
	<div class="wpr-text">
        <label for="<?php echo esc_attr( $data['id'] ); ?>"><?php echo $data['label']; ?></label>
		<input type="text" id="<?php echo esc_attr( $data['id'] ); ?>" class="" name="wp_rocket_settings[<?php echo esc_attr( $data['id'] ); ?>]" value="<?php echo esc_attr( $data['value'] ); ?>"<?php echo isset( $data['input_attr'] ) ? $data['input_attr'] : ''; ?>>
	</div>

	<?php if ( ! empty( $data['description'] ) ) { ?>
	<div class="wpr-field-description">
		<?php echo $data['description']; ?>
	</div>
	<?php } ?>
</div>
