<?php

/****CALCULATOR PROJECT STARTED ON 13/6/20 AT 12:28AM ****/ 

if ($_POST)
{
    // DEFINE VARIABLES HERE
    
    $number_1 = $_REQUEST['number_1'];
    $number_2 = $_REQUEST['number_2'];
    
    
    //State the conditional statement here
    
    if ($_POST['math_Sign'] == 'addition')
    {
        $result =$_POST['number_1'] + $_POST['number_2'];
        
    }
    if ($_POST['math_Sign'] == 'subtraction')
    {
        $result =$_POST['number_1'] - $_POST['number_2'];
        
    }
    if ($_POST['math_Sign'] == 'multiplication')
    {
        $result =$_POST['number_1'] * $_POST['number_2'];
        
    }
    if ($_POST['math_Sign'] == 'division')
    {
        $result =$_POST['number_1'] - $_POST['number_2'];
        
    } 
    if ($_POST['math_Sign'] == 'square')
    {
        $result =$_POST['number_1'] * $_POST['number_1'];
        
    }
    if ($_POST['math_Sign'] == 'cube')
    {
        $result =$_POST['number_1'] * $_POST['number_1'] * $_POST['number_1'];
        
    }
    if ($_POST['math_Sign'] == 'percentage')
    {
        $result =$_POST['number_1'] / 100 * $_POST['number_2'];
        
    }
    if ($_POST['math_Sign'] == 'squareroot')
    {
        $result = pow($number_1,(1.0/2.0));
        
    }
    
     if ($_POST['math_Sign'] == 'cuberoot')
    {
        $result = pow($number_1,(1.0/3.0));
        
    }
    
    
}
    


?>

                        <!-- CALCULATOR FRONTEND HERE -->
<html>
    <div align="center;" style="box-sizing: border-box; border-style: dashed; width:500px; height:500px;" >
    
    <hr />
    <h3 style="text-align: center; color: #0080ff;"> 
    BASIC CALCULATOR
        </h3>
    <hr />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div align="center">
    <form method="post">
    <label>Enter two numbers</label><br>
    <input type="text" name="number_1" /> <br>
       <select name="math_Sign">
           <option value=" ">Select a Math Sign</option>
            <option value="addition">+ (Add)</option>
        <option value="subtraction">- (Subtract)</option>
        <option value="multiplication">* (Multiply)</option>
        <option value="division">/ (Divide)</option>
        <option value="square">X^2 (Square)</option>
        <option value="cube">X^3 (Cube)</option>
        <option value="squareroot">(Square root)</option>
        <option value="cuberoot">(Cube root)</option>
         <option value="percentage">% (Percent of)</option>
        
        
        
        </select>
        <br />
    <input type="text" name="number_2" />
        <br />
        <button type="submit" name="submit" class="btn btn-outline-primary">Calculate</button>
    
    
    
    </form>
    <!-- Start of output-->
    <div class="alert alert-success" role="alert">
  <?php echo "The answer is  {$result} "; ?>
</div>

    <!--End of output-->
    </div>
    
<br />
<br />
<div align="center">
    <img src="Fire%20Gist%20logo.png" width="50px;" height="50px;" class="rounded" alt="FireGist image">
<footer class="alert alert-warning">Copyright 2020.. FireGist systems
        All rights reserved</footer>
</div>
</div>
</html>
