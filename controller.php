<?php
public function class_box()
    {
        if($this->input->post('type') == ""){
             $class_info =  $this->db->get('class')->result_array();
             foreach ($class_info as $class_info_key => $class_info_value) {
                echo '<option value="'.$class_info_value['class_id'].'">'.$class_info_value['name'].'</option>';
             } 
        }elseif ($this->input->post('type') == "studentdata") {
                $class_id = $this->input->post('id');
            $student_info =  $this->db->get_where('student', array('class_id' => $class_id))->result_array();            
           foreach ($student_info as $student_info_key => $student_info_value) {
                echo '<option value="'.$student_info_value['student_id'].'">'.$student_info_value['name'].'</option>';
            }  
        }                
    }

?>
