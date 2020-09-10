<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talentos extends MX_Controller {

    private $Dados;
    private $_location = "obrigado";
    
    public function __construct() {
        parent::__construct();         
    }

    public function index() {
         $this->loadPage('talentos/paginas/index');
    }

    public function save(){
        if($this->input->post()==null){
           header("Location:/".base_url("talentos"));
           exit(); 
        }
        if($this->sendEmail($this->input->post())){
            header('Location:'.$this->_location);
        }else{
            die('Não foi possivel cadatrar, tente novamente mais Tarde.');
        }
    }

    public function obrigado(){
          $this->loadPage('talentos/paginas/obrigado');           
    }

/*
* ****************************************************************************************************************************************************
* METODOS PRIVADOS :
* ****************************************************************************************************************************************************
*/

    private function sendEmail($data) {     
        $mensagem = '<ul>
                        <li><b>_nome:</b>'.$data['_nome'].'</li>
                        <li><b>_dataNascimento:</b>'.$data['_dataNascimento'].'</li>
                        <li><b>_estadoCivil:</b>'.$data['_estadoCivil'].'</li>
                        <li><b>_nFilhos:</b>'.$data['_nFilhos'].'</li>
                        <li><b>_telefone:</b>'.$data['_telefone'].'</li>
                        <li><b>_nascionalidade:</b>'.$data['_nascionalidade'].'</li>
                        <li><b>_naturalidade:</b>'.$data['_naturalidade'].'</li>
                        <li><b>_endereco  :</b>'.$data['_endereco'].'</li>
                        <li><b>_bairroCidade  :</b>'.$data['_bairroCidade'].'</li>
                        <li><b>_cnh:</b>'.$data['_cnh'].'</li>
                        <li><b>_rg:</b>'.$data['_rg'].'</li>
                        <li><b>_cpf:</b>'.$data['_cpf'].'</li>
                        <li><b>_contaItau:</b>'.$data['_contaItau'].'</li>
                        <li><b>_conheceAlguemQueTrabalhouNaEmpresa:</b>'.$data['_conheceAlguemQueTrabalhouNaEmpresa'].'</li>
                        <li><b>_quemTrabalhaNaEmpresa:</b>'.$data['_quemTrabalhaNaEmpresa'].'</li>
                        <li><b>_disponibilidadeHorario:</b>'.$data['_disponibilidadeHorario'].'</li>
                        <li><b>_motivacaoAprofundarConhecimento:</b>'.$data['_motivacaoAprofundarConhecimento'].'</li>
                        <li><b>_areaPretendida:</b>'.$data['_areaPretendida'].'</li>
                        <li><b>_faleDeVoce:</b>'.$data['_faleDeVoce'].'</li>
                    </ul>';
        $this->email->from("easyseg@easyseg.com", "LAEAD");
        $this->email->to("desenvolvimento@grupovolpato.com", $data['_nome']);
        $this->email->subject("FORMULARIO PAGINA : BANCO TALENTOS");
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