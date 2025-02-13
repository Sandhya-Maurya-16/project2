<?php
$con = mysqli_connect('localhost','root','','task');
if($con){
    echo "Connection stablished";
}
else{
    echo "Some error";
    echo mysqli_connect_error();
}
// $sql ="create table tbl_task (id int(20) primary key,name varchar(20), email varchar(50))";
// echo mysqli_query($con,$sql);
// $sql ="create table tbl1_task (id int(20) primary key,name varchar(20), email varchar(50))";
// echo mysqli_query($con,$sql);
// $sql ="create table tbl2_task (id int(20) primary key,name varchar(20), email varchar(50))";
// echo mysqli_query($con,$sql);
// $sql ="create table tbl3_task (id int(20) primary key,name varchar(20), email varchar(50))";
// echo mysqli_query($con,$sql);
// $sql ="create table tbl4_task (id int(20) primary key,name varchar(20), email varchar(50))";
// echo mysqli_query($con,$sql);
// ************************************************************************************************

// $sql = "insert into tbl_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl_task(name,email) values('sushma','sushma@gmail.com');";
// echo mysqli_multi_query($con,$sql);//ek sath multiple query run krane ke liye 

// $sql = "insert into tbl1_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl1_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl1_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl1_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl1_task(name,email) values('Anjali','Anjali@gmail.com');";
// echo mysqli_multi_query($con,$sql);//ek sath multiple query run krane ke liye 

// $sql = "insert into tbl2_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl2_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl2_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl2_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl2_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl3_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl3_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl3_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl3_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl3_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl4_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl4_task(name,email) values('sushma','sushma@gmail.com');";
// $sql .= "insert into tbl4_task(name,email) values('vibha','vibha@gmail.com');";
// $sql .= "insert into tbl4_task(name,email) values('Anjali','Anjali@gmail.com');";
// $sql .= "insert into tbl4_task(name,email) values('sushma','sushma@gmail.com');";
// echo mysqli_multi_query($con,$sql);//ek sath multiple query run krane ke liye  


// ************************************************last inserted id**************************************888
// $sql = "insert into tbl_task(name,email) values('Anjli','Anjali@gmail.com');";
// echo mysqli_query($con,$sql);//ek sath multiple query run krane ke liye  
// if(mysqli_query($con,$sql)){
//     echo mysqli_insert_id($con);
// }
// else{
//     echo "Something Went worng";
// }

?>