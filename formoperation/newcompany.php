<?php
// print_r($_POST);
$con = mysqli_connect('localhost','root','','app25_crud');
// if($con){
//     echo "hello";
// }
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
    echo "<script>
    alert('Please Enter your name');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['fname'])){
    echo "<script>
    alert('Please Enter your father\'s name');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['mname'])){
    echo "<script>
    alert('Please Enter your mother\'s name');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['date'])){
    echo "<script>
    alert('Please Enter your DOB');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['gender'])){
    echo "<script>
    alert('Please Enter your gender');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['hobby'])){
    echo "<script>
    alert('Please Enter your hobby');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['district'])){
    echo "<script>
    alert('Please Enter your district');
    window.location.href='company.php';
    </script>";
    }elseif(empty($_POST['massege'])){
    echo "<script>
    alert('Please Enter your massege');
    window.location.href='company.php';
    </script>";
}else{
 $name=$_POST['name'];
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $date=$_POST['date'];
 $gender=$_POST['gender'];
 $hobby=implode(',',$_POST['hobby']);
 $district=$_POST['district'];
 $massege=$_POST['massege'];
 $sql = "insert into personal(name,fname,mname,date,gender,hobby,district,massege) values('$name','$fname','$mname','$date','$gender','$hobby','$district','$massege')";
echo mysqli_query($con,$sql);
if(mysqli_query($con,$sql)){
    echo "<script>
    alert('Data inserted successfully');
    window.location.href='readcmp.php';
    </script>";
}    
}
}
?>