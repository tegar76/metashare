<?php

class Faker extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->faker = Faker\Factory::create('id_ID');
	}

	public function faker_customer()
	{
		$count = 5;
		$customer = array();
		for ($i = 0; $i < $count; $i++) {
			$customer[] = [
				'name'	=> $this->faker->name(),
				'phone'	=> $this->faker->phoneNumber(),
				'email'	=> $this->faker->email(),
			];
		}
		$this->db->insert_batch('customer', $customer);
		var_dump($customer);
	}

	public function faker_transaction()
	{
		$count = 4;
		$data = array();
		for ($i = 0; $i < $count; $i++) {
			$data[] = [
				'code' => strtoupper($this->faker->lexify('??')),
				'cus_id' => $this->faker->numberBetween(100, 104),
				'admin_id' => 11,
				'model_id' => 122
			];
		}
		$this->db->insert_batch('transaction', $data);
		var_dump($data);
	}
}
