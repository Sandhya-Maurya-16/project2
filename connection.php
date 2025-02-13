<?php
// mysqli_connect(hostname,username,password,database_name);
$con = mysqli_connect('localhost','root','','app25');
// if($con){
//     echo "Connection Stablished";
// }else{
//     echo "Something Went worng";
//     echo mysqli_connect_error();//yh database nhi milne pr error ka reason dega 
// }
// $sql ="create table users (id int(20) primary key,name varchar(20), email varchar(50))";
// echo mysqli_query($con,$sql);//yah 1 aur 0 return krega jisse pta chalega ki query run ki ya nhi

// **************************************dubara table add krne pr***********************************88
// $sql ="create table users (id int(20) primary key,name varchar(20), email varchar(50))";
// if(mysqli_query($con,$sql)){
//     echo "Table created";
// }
// else{
//     echo mysqli_error($con);
// }
// **************************************************************************************888
// $sql = "insert into users(id,name,email) values(3,'anchal','anchal@gmail.com')";
// if(mysqli_query($con,$sql)){
//         echo "<br>Data inserted successfully";
//     }
//     else{
//         echo mysqli_error($con);
//     }

// **************************************************************************************888
// $sql = "insert into users(id,name,email) values(4,'Anjali','Anjali@gmail.com');";
// $sql .= "insert into users(id,name,email) values(5,'sushma','sushma@gmail.com');";
// $sql .= "insert into users(id,name,email) values(6,'vibha','vibha@gmail.com');";
// echo mysqli_multi_query($con,$sql);//ek sath multiple query run krane ke liye  


// ************************************************last inserted id**************************************888
// $sql = "insert into users(name,email) values('Anjli','Anjali@gmail.com');";
// // echo mysqli_query($con,$sql);//ek sath multiple query run krane ke liye  
// if(mysqli_query($con,$sql)){
//     echo mysqli_insert_id($con);
// }
// else{
//     echo "Something Went worng";
// }

// **************************************************************************
// $sql = "delete from users where id=3";
//         echo mysqli_query($con,$sql);
//         echo mysqli_affected_rows($con);//kisi row pr kya affect pd rha hai current query ka
 
// **************************************************************************
$sql = "select * from users";
$result = mysqli_query($con,$sql);
echo mysqli_num_rows($result);//kisi table me kitne row  hai 
echo "<pre>";
// print_r(mysqli_fetch_all($result,MYSQLI_ASSOC)[0]);//yh kisi personal index ka data find out krega 
// **************************************************************************

// print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));//yh pura data fetch krega yh field aur value ka pair bnakr return krega like associative array
// **************************************************************************

// print_r(mysqli_fetch_all($result,MYSQLI_NUM));//yh pura data fetch krega pr key ke place pr number show krega nki fields like id, name,email yh bydefalts hota hai
// **************************************************************************

// print_r(mysqli_fetch_all($result,MYSQLI_BOTH));//yh pura data fetch krega aur yh MYSQLI_ASSOC and MYSQLI_NUM dono result show krega .
// **************************************************************************

print_r(mysqli_fetch_assoc($result));
// while($record = mysqli_fetch_assoc($result))
while($record = mysqli_fetch_assoc($result))

{
    // print_r($record);
    print_r($record['name']);

}
?>