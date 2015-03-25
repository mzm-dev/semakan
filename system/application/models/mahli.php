<?php
class MAhli extends Model{
    function MAhli(){
        parent::Model();
    }

    
    
    function getAhli($no_kp)
    {
        $data = array(); 
        //$no_kp = $this->input->post('NO_KP');
       
		$this->db->where('no_kp',$no_kp);
		$Q = $this->db->get('ahli');
		
		 if($Q->num_rows() > 0){
            $data = $Q->row_array();
        }
        return $data;
    }
    
    
   
 }

?>
