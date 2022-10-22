<?php

class Marketplace extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Marketplace',
			"iconNav" => [
				"home" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_home.svg') ."'>" ,
				"homeActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_home_active.svg') ."'>",
				"jenis" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_jenis.svg'),
				"jenisActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_jenis_active.svg')."'>",
				"testimoni" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_testimoni.svg')."'>",
				"testimoniActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_testimoni_active.svg')."'>",
				"tentang" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_tentang.svg')."'>",
				"tentangActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_tentang_active.svg')."'>",
				"profile" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_profil.svg')."'>",
				"profileActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_profil_active.svg')."'>",
			]
		];
		$this->load->view('marketplace/v_marketplace', $data, FALSE);
	}
}
