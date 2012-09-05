<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
class Estado extends CI_Controller {
    public function _construct(){
        
        //echo base_url().'----';//die('----');
    }
    
    public function index(){
        $this->load->library('template');
        $estado = $this->uri->segment(3);
       
    }
    public function distritos(){
        $estado = $this->uri->segment(3);
        echo $estado;
    }
    
    public function descripcion(){
        $estado = $this->uri->segment(3);
        $data['nombreEstado'] = $estado;
        $this->load->view('descripcionMapa',$data);
    }
}
?>
