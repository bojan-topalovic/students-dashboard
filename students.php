<?php  include_once 'init.php';

class Student {
    
    protected static $db_table_fields = array('student','school_board','student_name','grade1','grade2','grade3','grade4','average','final_result');
    public $student;
    public $school_board;
    public $student_name;
    public $grade1;
    public $grade2;
    public $grade3;
    public $grade4;
    public $average;
    public $final_result;
    
    public static function find_all(){   
    return static::find_by_query("SELECT * FROM students " );
    }   
    
    public static function find_by_id($student) {
    global $database;    
    $the_result_array = static::find_by_query("SELECT * FROM students WHERE student = $student LIMIT 1");    
    return !empty($the_result_array) ? array_shift($the_result_array) : false;       
    }
    
    public static function find_by_query($sql){
    global $database;     
    $result_set = $database->query($sql); 
    $the_object_array = array();   
    while($row = mysqli_fetch_array($result_set)){    
    $the_object_array[] = static::instantation($row);       
    }             
    return $the_object_array;           
    }
    
    public static function instantation($the_record){   
    $calling_class = get_called_class();       
    $the_object = new $calling_class;              
    foreach($the_record as $the_attribute=>$value){           
    if($the_object->has_the_attribute($the_attribute)){                       
    $the_object->$the_attribute = $value;                  
    }
    }       
        return $the_object;         
    }    
    private function has_the_attribute($the_attribute){       
    $object_properties = get_object_vars($this);
    return array_key_exists($the_attribute, $object_properties);       
    }
  
     public function update(){        
        global $database;       
        $sql = "UPDATE students ";
        $sql .= "SET school_board = '" . $this->school_board . "', ";
        $sql .= "grade1 = '" . $this->grade[0] . "', ";
        $sql .= "grade2 = '" . $this->grade[1] . "', ";
        $sql .= "grade3 = '" . $this->grade[2] . "', ";
        $sql .= "grade4 = '" . $this->grade[3] . "', ";
        $sql .= "average = '" . $this->average . "', ";
        $sql .= "final_result = '" . $this->final_result . "' ";
        $sql .= "WHERE student = " . $database->escape_string($this->student);
        
        $database->query($sql);
        return(mysqli_affected_rows($database->connection));
    }
       
    public function create(){
        global $database;       
        $sql = "INSERT INTO students (student_name)";
        $sql .= " VALUES ('";
        $sql .= $database->escape_string($this->student_name) . "')";     
      
        if($database->query($sql)) {
            $this->student = $database->the_insert_id();
            return $this->student;           
        } else {
            return false;
        }      
    }    
}   
    

    $stud = new Student();
    if(isset($_POST['insert_name'])) {        
       if($stud) {     
        $stud->student_name  =  $_POST['student_name']; 
        
        $stud->create();
   }  
}
 if(isset($_POST['send'])) {        
       if($stud) {
        $stud->school_board  =  $_POST['school_board'];    
        $stud->grade[0]  =  $_POST['grade1'];
        $stud->grade[1]  =  $_POST['grade2'];
        $stud->grade[2]  =  $_POST['grade3'];
        $stud->grade[3]  =  $_POST['grade4'];
        $stud->student   =  $_POST['student'];
        $stud->update();
        
        if($stud->school_board === "CSM"){
          
            $number_of_grades = 0;
            $sum_of_grades = 0;
            for($i=0; $i<=3; $i++){
            if($stud->grade[$i]>0){
            $number_of_grades++; 
            $sum_of_grades += $stud->grade[$i];
            }
        }
        $stud->average = $sum_of_grades/$number_of_grades;
        if($stud->average>=7){
            $stud->final_result = "PASS";
        } else {
            $stud->final_result = "FAIL";
        }
        $stud->update();
        }
        
                if($stud->school_board === "CSMB"){

                $number_of_grades = 0;
                $sum_of_grades = 0;
                $min_grade = $stud->grade[0];
                for($i=1; $i<=3; $i++){
                    if($stud->grade[$i]>0){
                    $number_of_grades++; 
                    $sum_of_grades += $stud->grade[$i];
                        if($min_grade > $stud->grade[$i]){
                        $min_grade = $stud->grade[$i];
                        }
                    }
                }
                if($number_of_grades>2){
                    $sum_of_grades -= $min_grade;
                    $number_of_grades--;
                }
                $stud->average =  $sum_of_grades/$number_of_grades;
                 if(max($stud->grade[0],$stud->grade[1],$stud->grade[2],$stud->grade[3])>8){
                $stud->final_result = "PASS";
                } else {
                $stud->final_result = "FAIL";
                }               
        $stud->update();
        } 
   }
   
}


?>







