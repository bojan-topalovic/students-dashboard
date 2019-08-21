<!DOCTYPE html>
<html>
<?php   include_once 'init.php';

    $students = Student::find_all();

    if(empty($_GET['student'])){
 //       redirect("students.php");
    } else {
        $stud = Student::find_by_id($_GET['student']);
    }    
    ?>                                                                                                             
                                 <a href="student.php?student=<?php echo $stud->student; ?>"></a>
        <div class="conteiner-fluid">                         
                                 <div class="row">                       
                                 <div class="col-md-3" style="border: 1px solid blue; width:250px"> 
                                                                         
                                        <td>Student id : <?php echo $stud->student . '<br>'; ?></td>
                                        <td>School board : <?php echo $stud->school_board . '<br>'; ?></td>
                                        <td>Student name : <?php echo $stud->student_name . '<br>'; ?></td>
                                        <td>Grade 1 : <?php echo $stud->grade1 . '<br>'; ?></td>
                                        <td>Grade 2 : <?php echo $stud->grade2 . '<br>'; ?></td>
                                        <td>Grade 3 : <?php echo $stud->grade3 . '<br>'; ?></td>
                                        <td>Grade 4 : <?php echo $stud->grade4 . '<br>'; ?></td>
                                        <td>Average : <?php echo $stud->average . '<br>'; ?></td>
                                        <td>Final result : <?php echo $stud->final_result . '<br>'; ?></td>
                                        
                                 </div>                                                                  
   
    <div class="col-md-3">
        <?php

        if($stud->school_board === "CSM" ){
                $stud->student;
                $stud->school_board;
                $stud->student_name;        
                $stud->grade1;        
                $stud->grade2;        
                $stud->grade3;        
                $stud->grade4;
                $stud->average;        
                $stud->final_result;       

        $myJSON = json_encode($stud);
        echo "JSON format" . '<br>';
        echo $myJSON;
            }
        ?>
    </div>
                                 
                                 
        <div class="col-md-3">              
                                 
                                 
          <?php
           if($stud->school_board === "CSMB" ){
               echo "XML FORMAT".'<br>';
        ("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>";
        echo "<note>";
        echo "<id>Student id : $stud->student;</id>" . '<br>';       
        echo "<board>School board : $stud->school_board;</board>" . '<br>';
        echo "<name>Student name : $stud->student_name;</name>". '<br>';
        echo "<grade1>Grade 1 : $stud->grade1;</grade1>" . '<br>';
        echo "<grade2>Grade 2 : $stud->grade2;</grade2>" . '<br>';
        echo "<grade3>Grade 3 : $stud->grade3;</grade3>" . '<br>';
        echo "<grade4>Grade 4 : $stud->grade4;</grade4>" . '<br>';
        echo "<average>Average : $stud->average;</average>" . '<br>';
        echo "<final_result>Final result : $stud->final_result</final_result>";
        echo "</note>";
           }
?>                        
                                 
                                 
                                 
                                 
        </div>
                                 
    </div>                   
        </div>                             
</html> 