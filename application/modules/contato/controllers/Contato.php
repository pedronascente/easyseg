<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends MX_Controller {

    private $Dados;
    
    private $_location = "contato/obrigado";
    private $_location_error = "error";
    
    public function __construct() {
       parent::__construct();         
    }

    public function index() {
        $this->loadPage('contato/paginas/index');
    }

    public function save(){
        $url=base_url();
        if($this->input->post()==null){
           header('Location:'.$url.'contato');
           exit(); 
        }
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function obrigado(){
        $this->loadPage('contato/paginas/obrigado');           
    }

    /*
    * ****************************************************************************************************************************************************
    * METODOS PRIVADOS :
    * ****************************************************************************************************************************************************
    */

    private function sendEmail($data) {      
        $mensagem = '<ul>
                        <li><b>Nome :</b>'.$data['_nome'].'</li>
                        <li><b>Email :</b>'.$data['_email'].'</li>
                        <li><b>Telefone :</b>'.$data['_telefone'].'</li>
                        <li><b>Mensagem :</b>'.$data['_menssagem'].'</li>
                        <li><b>Origem : </b>'.$data['_origem'].'</li>
                    </ul>';
        $this->email->from("easyseg@easyseg.com","LAEAD");
        $this->email->to("desenvolvimento@grupovolpato.com", $data['_nome']);
        $this->email->subject("FORMULARIO PAGINA : CONTATO");
        $this->email->message($mensagem);
        return $this->email->send();      
    }

    private function loadPage($moduleRoute, $parameters = '') {
        $data['assets'] = $this->loadAssets($moduleRoute);
        $data['content'] = $this->load->view($moduleRoute, $parameters, TRUE);
        $this->load->view('page', $data);
    }

    private function loadAssets($moduleRoute) {
        $url = base_url();

        $_css_index= '<!-- BASE CSS -->
        <link href="'.$url.'/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/style.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/menu.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/responsive.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/elegant_font.min.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/fontello.min.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/magnific-popup.min.css" rel="stylesheet">

        <!-- LayerSlider stylesheet -->
        <link href="'.$url.'/assets/css/layerslider.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="'.$url.'/assets/css/grey.css" rel="stylesheet">';

         $javaScript_default =' <!-- Common scripts -->
        <script src="'.$url.'/assets/js/jquery-2.2.4.min.js"></script>
        <script src="'.$url.'/assets/js/common_scripts_min.js"></script>
        <script src="'.$url.'/assets/js/functions.js"></script>

        <!-- LayerSlider script files -->
        <script src="'.$url.'/assets/js/greensock.js"></script>
        <script src="'.$url.'/assets/js/layerslider.transitions.js"></script>
        <script src="'.$url.'/assets/js/layerslider.kreaturamedia.jquery.js"></script>
        <script src="'.$url.'/assets/js/slider_func.js"></script>
        
        <!-- Specific scripts -->
        <script src="'.$url.'/assets/js/jquery.validate.js"></script>
        <script src="'.$url.'/assets/js/jquery.stepy.min.js"></script>
        <script src="'.$url.'/assets/js/quotation-validate.js"></script>';      

        return array(
            'css' => $_css_index,
            'javaScriptHeader' => '',
            'javaScriptFooter' => $javaScript_default
        );
    }
}