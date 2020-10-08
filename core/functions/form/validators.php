<?php
/**
 * Validating if input value is not empty
 *
 * @param $field_value
 * @param array $field
 * @return bool
 */
function validate_field_not_empty($field_value, &$field)
{
    if ($field_value === '') {
        $field['error'] = 'This field is required.';
        return false;
    }

    return true;
}

/**
 * Validates if field meets email standard
 *
 * @param string $field_value
 * @param array $field
 * @return bool|null
 */
function validate_email($field_value, &$field)
{
    if (!filter_var($field_value, FILTER_VALIDATE_EMAIL)) {
        $field['error'] = "$field_value is not a valid email address";
        return false;
    }

    return true;
}

/**
 *Validates field is appropriate length and doesn't have symbols
 *
 * @param $field_value
 * @param $field
 * @return bool
 */
function validate_field_length_numbers($field_value, &$field)
{
    if (strlen($field_value) > 40) {
        $field['error'] = 'Input length could not be more than 400 symbols';
        return false;
        // TRUE if $field_value contains a decimal digit
        //Returns a string starting from the character found, or FALSE if it is not found.
    } else if (strpbrk($field_value, '1234567890') !== FALSE) {
        $field['error'] = 'Input could not contain number';
        return false;
    }

    return true;
}

function validate_field_length($field_value, &$field)
{
    if (strlen($field_value) > 500) {
        $field['error'] = 'Input length could not be more than 400 symbols';
        return false;
    }

    return true;
}























