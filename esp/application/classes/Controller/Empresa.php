<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Empresa extends Controller_Root {

    public function action_viagreen() {
    	$this->template->page_id = "company";
    }

    public function action_nossamarca() {
        $this->template->page_id = "company";
    }
	
	public function action_governanca() {
        $this->template->page_id = "company";
    }
}