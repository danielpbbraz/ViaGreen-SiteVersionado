<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Produtos extends Controller_Root {

    public function action_consultoria() {
    	$this->template->page_id = "consulting";
    }

    public function action_eco_emission() {
        $this->template->page_id = "eco-emission";
    }

    public function action_vgp() {
        $this->template->page_id = "vgp";
    }

    public function action_ecofreight() {
        $this->template->page_id = "product-ecofreight";
    }

    public function action_ecorotas() {
        $this->template->page_id = "product-ecorotas";
    }

    public function action_ecoflight() {
        $this->template->page_id = "product-ecoflight";
    }

    public function action_calculadora() {
        $this->template->page_id = "product-calculadora";
    }

    public function action_ecommerce() {
        $this->template->page_id = "product-ecommerce";
    }

    public function action_projetos() {
        $this->template->page_id = "product-projetos";
    }
	
	public function action_governanca() {
        $this->template->page_id = "product-gov";
    }

    public function action_compensacao() {
        $this->template->page_id = "product-compensacao";
    }

    public function action_plantio_de_arvores() {
        $this->template->page_id = "product-plantio";
    }

    public function action_mudancas() {
        $this->template->page_id = "product-mudancas";
    }
}