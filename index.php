<!DOCTYPE html>
<?php include_once 'init.php'; 

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="row">
        <div class="col-md-10" style="border: 1px solid blue; padding-left: 30px; max-width: 800px">
    <div>
        <h4>STUDENT GRADES FOR STUDENTS ENROLLED IN DATABASE</h4>
           
        <form method="post" action="students.php">
        
    Student : <input type="text" name="student" required size="10" maxlength="10"> <span style="color:red"> * </span>
    <br><br>
    School Board: <span style="color:red"> * </span><br>
    CSM : <input type="radio" name="school_board" value="CSM" style="margin-left: 15px"/><br>   
    CSMB : <input type="radio" name="school_board" value="CSMB"  />
    
     
<!--     
    <span style="float: right; margin-right: 25px"><i>Student : </i>    
        <input size="40" maxlength="40" placeholder="Do not enter name">
    </span>
-->    
    <br><br>
    Grade 1: <input type="number" name="grade1" required size="5" maxlength="5" min="5" max="10"><span style="color:red"> * </span>
<!--
    <span style="margin-left: 15px">Confirm : </span>
       <input type="checkbox" name="check" value="Yes">
-->    
<!-- 
    <span style="float: right; margin-right: 25px"><i>School Board : </i>   
        <input size="40" maxlength="40" placeholder="Do not enter name">
    </span>
-->    
    <br><br>
    
    
    <?php for($i=2; $i<=4; $i++): ?>    
    <?php echo "Grade " . $i . ";" ?> <input type="number" name="grade<?php echo $i; ?>" size="5" maxlength="5" min="5" max="10">
    <span style="color:red"></span>
<!--
    <span style="margin-left: 25px">Confirm : </span>
      <input type="checkbox" name="check" value="Yes">    
--> 
    <br><br> 
    <?php endfor; ?>
      
          <input type="submit" name="send" value="Input grades" />
       <span style="color:red; margin-left: 25px">Required field *</span>
     <br><br>
    <input type="reset" value="Reset" />
      <br>
       <hr>
        </form>
    </div>
        
      <div>
         <h4>INSERT NEW STUDENT IN DATABASE</h4>
      <form method="post" action="students.php">
       
    Name: <input type="text" name="student_name" required size="40" maxlength="40" placeholder="Insert name and second name" ><span style="color:red"> * </span><br><br>
    
    
    <input type="submit" name="insert_name" value="Add student"/>
       <span style="color:red; margin-left: 25px">Required field *</span>
    <br><br>
  
 </form>
      
      </div>  
        </div> 
             
        
    </body>
    

</html>
