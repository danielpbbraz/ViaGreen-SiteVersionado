<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contato extends Controller_Root {

    public function action_index() {
    	$this->template->page_id = "contact";

    	if ($_POST) {
            $name    = isset($_POST['name']) ? trim($_POST['name']) : '';
            $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
            $tel     = isset($_POST['tel']) ? trim($_POST['tel']) : '';
            $message = isset($_POST['message']) ? trim($_POST['message']) : '';

            $view          = View::factory("shared/email/contato");
            $view->name    = $name;
            $view->email   = $email;
            $view->tel     = $tel;
            $view->message = $message;
            $corpo_email   = $view->render();

            $emails = array('comercial@viagreen.org.br');

            $this->send_mail($emails, 'Via Green | Sustainable Logistics - Contato', $corpo_email, false);
            $this->session->set('success', Kohana::$config->load('messages.send_email_success'));
        }
    }
}