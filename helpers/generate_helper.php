<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// -----------------------------------------------------------------------------

/**
 * Generate Random String Helper
 *
 * @package Codeigniter
 * @subpackage Helpers
 * @category Helpers
 * @author Wangfa Liu <liu.wangfa@gmail.com>
 *
 */

// -----------------------------------------------------------------------------

/**
 * Get a random string with a custom length
 *
 * @access public
 * @param type $length
 * @return string
 */
function generate_random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';

    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $random_string;
}

/* End of file generate_helper.php */
/* Location: ./application/helpers/generate_helper.php */
