<?php defined('SYSPATH') or die('No direct script access.');

class Controller_colabore extends Controller_Root {

    public function action_doacao() {
    	$this->template->page_id = "colabore";
    }

    public function action_sejavoluntario() {
        $this->template->page_id = "voluntario";
    }
	

}