<?php
include('../includes/connect.php');
if(isset($_POST['insert_gen'])){
    $generic_title=$_POST['gen_title'];

    //select data from database
    $select_query="Select * from generic where generic_title='$generic_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This generic is present inside the database')</script>";
    }else{

    $insert_query="insert into generic(generic_title) values ('$generic_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Generic has been inserted successfully')</script>" ;   
    }
}
}
?>




<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name ="gen_title" 
        placeholder="Insert generics" aria-label="Generics" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info p-2 my-3 border-0" name ="insert_gen" 
        value="Insert Generics"> 
    </div>
</form>