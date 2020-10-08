<?php
/**
 * Generates tag attributes
 *
 * @param array $attrs
 * @return string
 */
function html_attr(array $attrs): string
{
    $attributes = [];

    foreach ($attrs as $key => $attr) {
        $attributes[] = "$key=\"$attr\"";
    }

    return implode(' ', $attributes);
}

/**
 * Generating new input field from given array
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */
function input_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'value' => $field['value'] ?? '',
        'id' => $field_id,
    ];
    $attributes += $field['extra']['attr'] ?? [];

    return html_attr($attributes);
}

/**
 * Generating button from given array
 *
 * @param string $button_id
 * @param array $button
 * @return string
 */

function button_attr(string $button_id, array $button): string
{
    $attributes = [
        'name' => 'action',
        'value' => $button_id,
    ];

    $attributes += $button['extra']['attr'] ?? [];

    return html_attr($attributes);
}

/**
 * Generates select tag attributes
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */

function select_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'id' => $field_id,
    ];

    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}

/**
 * Generates options tag attributes
 *
 * @param string $option_id
 * @param array $field
 * @return string
 */

function option_attr(string $option_id, array $field): string
{
    $attributes = [
        'value' => $option_id,
    ];

    $option = $field['options'][$option_id];
    if ($field['value'] == $option_id) $attributes['selected'] = true;
    if (is_array($option)) $attributes += $option['attr'];

    return html_attr($attributes);
}

/**
 * Generates textarea tag attributes
 *
 * @param string $field_id
 * @param array $field
 * @return string
 */

function textarea_attr(string $field_id, array $field): string
{
    $attributes = [
        'name' => $field_id,
        'type' => $field['type'],
        'id' => $field_id,
    ];

    $attributes += $field['extra']['attr'] ?? [];
    return html_attr($attributes);
}




