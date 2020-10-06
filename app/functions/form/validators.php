<?php

use App\App;

/**
 * * Validates unique users
 *
 * @param string $field_value
 * @param $field
 * @return bool
 */
function validate_user_unique(string $field_value, &$field)
{

    if (App::$db->getRowsWhere('users', ['email' => $field_value])) {
        $field['error'] = 'Such user already exist';
        return false;
    }
    return true;
}

/**
 * Validates login
 *
 * @param array $form_values
 * @param array $form
 * @return bool
 */
function validate_login(array $form_values, array &$form): bool
{
    if (!App::$db->getRowsWhere('users', [
//        'email' => $form_values['email'],
        'password' => $form_values['password']
    ])) {
        $form['error'] = 'Password is incorrect';
        return false;
    }
    return true;
}
//
///**
// * Validates unique pixel
// *
// * @param string $field_value
// * @param array $field
// * @return bool
// */
//function validate_pixels_unique($form_values, array &$field): bool
//{
//    if (App::$db->getRowsWhere('pixels', ['x' => $form_values['x'], 'y' => $form_values['y']])) {
//        $field['error'] = 'Norimas pikselis jau užimtas';
//        return false;
//    }
//    return true;
//}






