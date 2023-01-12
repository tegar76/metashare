<?php

function checkSuperAdmin()
{
	$CI = &get_instance();
	$CI->load->model('AuthModel', 'auth', true);
	$admin = $CI->auth->getAdminByEmail($CI->session->userdata('email'));
	$token = $CI->auth->checkToken($CI->session->userdata('backToken'));
	if (empty($admin) or empty($token)) {
		if ($CI->session->userdata('level') != 'su-admin') {
			redirect('su-admin/login');
		}
	}
}


function checkAdminLogin()
{
	$CI = &get_instance();
	if ($CI->session->userdata('level') == 'admin') {
		return redirect('admin/dashboard');
	}
}

function isAdminLogin()
{
	$CI = &get_instance();
	$CI->load->model('AuthModel', 'auth', true);
	$admin = $CI->auth->getAdminByEmail($CI->session->userdata('email'));
	$token = $CI->auth->checkToken($CI->session->userdata('backToken'));
	if (empty($admin) or empty($token)) {
		redirect('admin/login');
	}
}

function sweetAlert($title = NULL, $text = NULL, $type = NULL)
{
	$CI = &get_instance();
	return $CI->session->set_flashdata([
		'title' => $title,
		'text' => $text,
		'type' => $type,
	]);
}
