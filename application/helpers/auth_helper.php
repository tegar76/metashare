<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('is_logged_in')) {
    function is_logged_in()
    {
        $ci =& get_instance();

        return $ci->session->userdata('logged_in') === TRUE;
    }
}
