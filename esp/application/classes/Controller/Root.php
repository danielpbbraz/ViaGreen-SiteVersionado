<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Root extends Kohana_ControllerRoot {
    public $session = TRUE;
    public $params = array(
        'css_external'  => array(),
        'css'           => array('main.less'),
        'js_external'   => array(),
        'js'            => array(
            'vendor/jquery-1.11.2.min.js',
            'vendor/jquery.easing.1.3.js',
            'vendor/TweenMax.min.js',
            'vendor/ScrollToPlugin.min.js',
            'vendor/ScrollMagic.min.js',
            'vendor/animation.gsap.min.js',
            'vendor/jquery.mousewheel-3.0.6.pack.js',
            'vendor/jquery.fancybox.pack.js',
            'vendor/slick.js',
            'vendor/jquery.dropdownPlain.js',
            'vendor/jquery.validate.min.js',
            'vendor/jquery.mask.min.js',
            'vendor/jquery.matchHeight.js',
            'vendor/svg4everybody.js',
            'vendor/share.js',
            'vendor/jssor.js',
            'vendor/jssor.slider.js',
            'vendor/jquery.waitforimages.min.js',
            'main.js'
        ),
    );

    protected function send_mail($para, $assunto, $mensagem, $debug_mensagem = false, $responderPara = null, $arquivo = null){
        if($debug_mensagem) {
            echo '<p>Assunto: '.$assunto.'</p>';
            echo $mensagem;
            exit();
        }

        require_once('vendor/phpmailer/PHPMailerAutoload.php');
        $mail = new PHPMailer;
        $mail->From       = 'no-reply@viagreen.com.br';
        $mail->FromName   = utf8_decode('Via Green');
        $mail->Subject    = utf8_decode($assunto);
        $mail->Body       = utf8_decode($mensagem);
        $mail->isHTML(true);

        if($arquivo != null){
            $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
        }

        foreach($para as $item){
            $mail->addAddress($item);
        }

        if($responderPara != null){
            $mail->addReplyTo($responderPara);
        } else {
            $mail->addReplyTo($mail->From);
        }

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return true;
        }
    }

    public function before(){
        $this->session = Session::instance();

        parent::before();
    }
}
