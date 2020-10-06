<?php
/**
 * validating if input value is not empty
 *
 * @param $field_value
 * @param array $field
 * @return bool
 */
function validate_field_not_empty($field_value, &$field)
{
    if ($field_value === '') {
        $field['error'] = 'Prašome užpildyti laukelį';
    } else {
        return true;
    }
}

/**
 * validating if input value is number
 *
 * @param   $field_value
 * @param array $field
 * @return bool
 */

function validate_field_is_number($field_value, &$field)
{
    if (!is_numeric($field_value)) {
        $field['error'] = 'Laukelio vertė privalo būti skaičius';
    } else {
        return true;
    }
}


function validate_field_is_correct_number($field_value, &$field)
{
    if ($field_value < 18 || $field_value > 100) {
        $field['error'] = 'Amžius netinkamas';
    } else {
        return true;
    }
}

function validate_field_has_space($field_value, &$field)
{

    if ($field_value == trim($field_value) && strpos($field_value, " ") == false) {
        $field['error'] = 'Tarp žodžių privalo buti tarpas';
    } else if ($field_value !== trim($field_value)) {
        $field['error'] = 'Prašome ištrinti tarpus pradžioje ir pabaigoje laukelio';
    } else {
        return true;
    }
}

//function validate_field_is_num_from100to200($field_value, &$field)
//{
//    if ($field_value < 100 || $field_value > 200) {
//        $field['error'] = 'Skaičius neatitinka sąlygos';
//    } else {
//        return true;
//    }
//}

/**
 * validate if number is in range
 *
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool or null
 */
function validate_field_range(string $field_value, array &$field, array $params): ?bool
{
    if (($field_value < $params['min']) || ($field_value > $params['max'])) {
        $field['error'] = strtr('Laukelio vertė turi būti @from iki @to', [
            '@from' => $params['min'],
            '@to' => $params['max']
        ]);
        return false;
    } else {
        return true;
    }
}

/**
 * validates matching fields
 *
 * @param string $field_value
 * @param array $form
 * @param array $params
 * @return bool
 */

//function validate_fields_match(array $form_values, array &$form, array $params)
//{
//        var_dump(['form_values' => $form_values, 'params' => $params]);
//}

function validate_fields_match(array $form_values, array &$form, array $params): bool
{
//    var_dump(['form_values' => $form_values, 'params' => $params]);
    $reference_value = $form_values[$params[0]];
    foreach ($params as $param) {
        $field_value = $form_values[$param];
        if ($field_value != $reference_value) {
            $form['error'] = 'Slaptažodžiai turi sutapti!';
            return false;
        }
    }
    return true;
}


/**
 * Validate colors
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_select(string $field_value, array &$field): bool
{
    foreach ($field['options'] as $key => $value) {
        if ($field_value === $key) {
            return true;
        }
    }
    $field['error'] = 'Rinktis negalima';
    return false;
}




















