<?php

class AuthModel extends CI_Model
{

	public function getSuperAdmin($username)
	{
		$this->db->where('code', $username);
		$this->db->where('level', 'su-admin');
		return $this->db->get('admin')->row();
	}

	public function getAdminByCode($code)
	{
		$this->db->where('code', $code);
		return $this->db->get('admin')->row();
	}

	public function getAdminByEmail($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('admin')->row();
	}

	public function getCustomerByEmail($email)
	{
		$this->db->where('email', $email);
		return $this->db->get('customer')->row_object();
	}

	public function registerCustomer($data)
	{
		$regist = array(
			'name' => $data['name'],
			'email' => $data['email'],
			'phone' => $data['phone'],
			'password' => password_hash($data['password'], PASSWORD_DEFAULT),
		);
		$this->db->insert('customer', $regist);
	}

	public function checkToken($access_token)
	{
		$this->db->where('access_token', $access_token);
		return $this->db->get('token_login')->row_object();
	}

	public function registToken($data)
	{
		return $this->db->insert('token_login', $data);
	}

	public function deleteToken($access_token)
	{
		$this->db->where('access_token', $access_token);
		return $this->db->delete('token_login');
	}
}

/* End of file AuthModel.php */
/* Location: ./application/models/AuthModel.php */
