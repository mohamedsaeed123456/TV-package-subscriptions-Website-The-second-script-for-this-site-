
<?php



if(isset($_POST['submit'])) {
include 'connection.php';
$username=stripcslashes($_POST['username']);
$password=stripcslashes($_POST['password']);

$result=mysqli_query($link,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");
$row=mysqli_fetch_array($result);
          if($row['username']==$username && $row['password'] == $password){
        	      echo "<script>alert('تم تسجيل الدخول الي لوحة التحكم بنجاح'); 
        	      window.location.href='panel.php';
        	      </script>";
          }
         else{
        	      echo "<script>alert('تاكد من بيانات الدخول الي لوحة التحكم')</script>";
          }

    }
   
      

?>

<html>
    <head>
        <title>تسجيل الدخول للوحة التحكم</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    
   

        
    </nav>
     
    <div class="box">
        
        <h2>تسجيل الدخول</h2>
        
        <form method="post">
            
            <div class="inputBox">
             <input type="username" id="username" name="username" required="">
             <label>اسم المستخدم</label>
            </div>
            <div class="inputBox" >
                <input type="password"id="password" name="password" required="">
                <label>كلمة المرور</label>
            </div>
            <input type="submit" name="submit" value="تسجيل الدخول">
        </form>
    </div>

    
    
</body>    
</html>