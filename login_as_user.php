<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Music player hackthon</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet">

</head>
<body>

<div class="header">
  <div class="container">
<div class="navbar">
    <div class="logo">
     <a href=""><img src="" width="180px" height="170px" ></a>
</div>
 

</div>
<!--accpage-->
<!---accountpage--->
<div class="account-page">

  <div class="row">
    <div class="col-2">
      
      
      </div>
    <div class="col-2">
     <div class="box">
      <div class="form-container">
         <div class="form-btn">
               <span>Login With User Name</span>
             </div>
             <form method="POST" action="login_as_user.php">

              <input type="text" placeholder="username" name="username" required><br>
              <input type="password" placeholder="password" name="password" required><br>
              <button type="submit" class="btn" name="login_Btn" >Login</button><br> 
              <a href=" ">forgot password</a>
            </form>
            
              <div class="gmail">  
                <div class="sign_in_option">
                    <img src="https://th.bing.com/th/id/R.27fa9f7a7ce6789c74f3679be56786c8?rik=WDHNyAbYR8o9ww&riu=http%3a%2f%2f1000logos.net%2fwp-content%2fuploads%2f2016%2f11%2fNew-Google-Logo.jpg&ehk=gjUdHM5UOpzw4LQK5sTxmU3og4RMq7V%2fCR4l%2b%2fMJULc%3d&risl=&pid=ImgRaw&r=0" alt=" login with gmail">
                    <pre >
                       <a  style="color:white;" href="glog_in.html"> Sign-in/Log-in with gmail
                    </a>
                    </pre>
                </div>
            </div>
            
      </div>
    </div>

    
  
  </div>
</div>


</div>

</div>
</div>




<!---footer-->
 <div class="footer">
  <div class="container">
    <div class="row"> 

      <div class="footer-col1">
        <h4>Download our app</h4>
        <p>Download app for android and ios mobile phone.</p>
      </div>

      <div class="footer-col2">
        <img src="" width="120px" >
        <p></p>
      </div>

      <div class="footer-col3">
         <h4>useful links</h4>
         <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
         </ul>
     </div>


     <div class="footer-col4">
      <h4>Follow us</h4>
      <ul>
       <li>Instagram</li>
       <li>Facebook</li>
       <li>Twitter</li>
       <li>Linkdin</li>
      </ul>
  </div>
    </div>

    <hr>
    
    <p class="Copyright">Copyright 2023-Rounak Runwal</p>
    
  </div>
 </div>


</body>

   
</html>
<?php 
 $conn=mysqli_connect("localhost","root","");
 if(isset($_POST['login_Btn']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM  websitelogin.login_details WHERE username='$username'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    $resultPassword = $row['password'];
    if($password == $resultPassword)
    {
      header('Location:music player hackthon/normal.html');
    }else{
      echo "<script>alert('login unsuccessful');

      </script>";
    }
  }
}
?>