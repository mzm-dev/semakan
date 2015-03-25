<?php
class MRekod_Byrn extends Model{
    function MRekod_Byrn(){
        parent::Model();
    }

    
    
    function getRekodAhli($no_ahli)
    {
        $data = array(); 
        //$no_kp = $this->input->post('NO_KP');
       
		$this->db->where('no_ahli',$no_ahli);
		$Q = $this->db->get('rekod_byrn');
		
		if($Q->num_rows() > 0){
           foreach($Q->result_array() as $row){
            $data[] = $row;
            }
        }
        return $data;
    }
    
    
   
 }

?>

