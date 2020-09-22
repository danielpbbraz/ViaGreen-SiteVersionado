<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Root {

    public function action_index() {
    	$this->template->page_id = "home";
        $this->template->title = "";
        $this->template->description = "";
    }

	public function action_acesso() {
		if ($_POST) {
			$type = Input::post('type', null);
			$value = Input::post('value', null);

			if($type){
				if($type == 'ecomission'){
					Controller::redirect('http://vgp.viagreen.org.br/ecoemission/'.$value);
				} elseif($type == 'vgp') {
					Controller::redirect('http://vgp.viagreen.org.br/'.$value);
				}
			} else {
				Controller::redirect(strtolower(Request::current()->controller()).'/index');
			}
            
        } else {
            $this->template->content->item = $item;
        }
    }
}

