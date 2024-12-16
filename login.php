
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            margin:10px;
            
            background-color:white;
            color:white;
            width:100px;
            padding: 10px;
            border-radius: 10px;
        }
        body{
            text-align: center;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
         
         .c3{
            position: absolute;
            top:150px;
            left:976px;
         }  
         .c4{
            background-image: url('ArijitSingh.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            top:0px;
            left:183px;
            
            border-radius:50px;
            height:600px ;
            width:600px;

         }
           /* #loginuser{
            width:70px;
            height:40px;
           } */

           
           input[type='text']{
                background-color:white;
                color:black; 
           } 
        
        
        img{
            float: left;
            height:400px;
            width:400px;
        }
        *{
            background-color: black;
            color:white;

        }
       /* .text{
        position: relative;
        top:531px;
        left:-286px;
        font-size: 40px;
       } */
       /* #ok{
        display: none;
       } */
       .final img{
        height:69px;
        width:300px;
        position:relative;
        top:70px;
        left:938px;
       }
       /* #sub1{
        background-color:white;
        color:black;
       } */
    </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        
</head>
<body>
    <div class="final">
        <img src="final.webp">
    </div>

    <div class="c4">
        
        
    </div>
    <!-- <div class="text">
        <p>All your music Anywhere</p>
        <p></p>
    </div> -->


    

    
    <div class="c3">
        <h3 style="margin-bottom:20px">SignUp</h3>
        <form action="process.php" method="post">
            <p>Enter your name:</p>
            <input id="name" placeholder="Enter your name" name="uname" type="text">
            <br>
            <br>
            <p>Enter Email id:</p>
            <input id="email" placeholder="Enter your email id" name="wynkemail" type="text">
            <br>
            <br>
            <p>Enter password</p>
            <input id="password" placeholder="Enter your password" name="wynkpassword" type="password">
            <br>
            <br>
            <p>Re-Confirm password</p>
            <input id="confirm_password" placeholder="Re-Confirm your password" name="confirm_password" type="password">
            <br>
            <br>
           <a href="wynk.php"> <input type="submit" value="Signup" name="submit" id="subuser"></a>
        </form>
        <br>
        Already have an account <a href="login1.php"> Login</a>
    </div>
    

    <script >
      
       
    </script>
</body>
</html>
<!-- <h2 id="welc">Login/Sign Up</h2>
        <p id="dis1">Get a personalised experience, and access all your music</p>
        <p id="dis2">Enter Name:</p>
            <input id="user" type="text" placeholder="Enter Your Name" name="name">
        <br>
        <br>
        <p id="dis3">Enter Password:</p>
        <input id="password" type="password" placeholder="Enter Your Password"  name="pass">
        <br>
        <br>
        <p
        <a href="wynk.html"><button id="ok">Ok</button></a>
        <button id="login" type="button">Login</button> -->
            <!-- <div class="c3">
        <h2 id="welc">Login/Sign Up</h2>
        <p>Get a personalised experience, and access all your music</p>
        <p>Enter UserName:</p>
            <input id="user" type="text">
        <br>
        <br>
        <p>Enter Password:</p>
        <input type="password">
        <br>
        <br>
        <button id="login">Login</button>
    </div> -->
