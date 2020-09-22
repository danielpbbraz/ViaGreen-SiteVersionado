<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Produtos extends Controller_Root {

    public function action_apoio_tec() {
    	$this->template->page_id = "apoio_tec";
    }

    public function action_comp_carb() {
        $this->template->page_id = "comp_carb";
    }
    // public function action_recuperacao() {
    //     $this->template->page_id = "recuperacao";
    // }
    public function action_log_sust() {
        $this->template->page_id = "log_sust";
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
    public function action_ecoevent() {
        $this->template->page_id = "product-ecoevent";
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

    public function action_recuperacao() {
        $this->template->page_id = "recuperacao";
    }

    public function action_ecopilot() {
        $this->template->page_id = "product-ecopilot";
    }
	public function action_assinatura() {
        $this->template->page_id = "assinatura";
    }
}