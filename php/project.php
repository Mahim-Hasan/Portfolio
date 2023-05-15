<html>
    <body>
<?php

$con=mysqli_connect('localhost','root','');
     

if(!$con){
    echo 'not connected';
}
     else
        {
            echo 'connected';
        }
        
if (!mysqli_select_db($con,'details')){
    echo 'not selected';
}
        else
        {
           echo 'selected';
               
        }
        
  
 if(isset($_POST["submit"])){
    $n1=$_POST['name'];
    $n2=$_POST['email'];
	$n3=$_POST['number'];
    mysqli_query($con,"INSERT INTO we(name,email,number) VALUES ('$n1','$n2','$n3')");
    
}
        
if(isset($_POST["delete"])){
    $n1=$_POST['name'];
    $n2=$_POST['email'];
	$n3=$_POST['number'];
    mysqli_query($con,"delete from we where name='$n1'");
    
}
if (isset($_POST['update'])) {
	$n1=$_POST['name'];
    $n2=$_POST['email'];
	$n3=$_POST['number'];
	
	mysqli_query($con, "UPDATE we SET name='$n1', email='$n2' ,number='$n3' WHERE id=3");}
?>

    </body>
</html>