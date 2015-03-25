<?php
class Semakan extends Controller{
    	
	function Semakan(){
        parent::Controller();
        
    }

    function index(){
        if($this->input->post('NO_KP')){
            $this->load->model('MAhli');
            $this->load->model('MRekod_Byrn');
            $data['semak'] = $this->MAhli->getAhli($this->input->post('NO_KP'));
            if(!empty( $data['semak'])){
            $data['rekod_byrn'] = $this->MRekod_Byrn->getRekodAhli($data['semak']['no_ahli']);
            }
            
            if(!empty ($data['semak'])){
                $data['hasil_sem'] = 'ada';
            }else{
                $data['hasil_sem'] = 'tiada';
            }
        }
        
        $data['title'] = 'Semakan Keahlian PESIMA';
        $data['main'] = 'frm_semak.php';
        $this->load->view('template', $data);
        
    }
    
    
	
	
	
}
