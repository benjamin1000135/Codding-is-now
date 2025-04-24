<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

*{
    box-sizing: border-box;
}
body{
   
    height:100%;
    width: 100%;
    margin-top: 20px;
    margin-left: 0%;
    margin-right: 0%;
    background-image:url(==.jpg);
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size:100% 100%;

}


h1{
    text-align: center;
}
.container{
    margin-top: 10%;
    width: 35%;
    border:4px solid rgb(25, 240, 25);
    border-radius: 20px;
    height: 50%;
    margin-left: 35%;
    background-image:linear-gradient(to right, yellow,white,yellow); 
    

}

.container img{

    width: 100%;
}

.input{
    margin-top: 70%;
    width: 50%;
    padding: 5px;
    margin: 8px;
    border: 1.2px solid #0ec729;
    font-size: 18px;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;

    }
::placeholder{
    text-align: center;
}
.gendercontainer{
   text-align: inline;
    font-size: 18px;
}
.gender1{
    width:10%;
}



label{
    margin-left: 13%;
    font-weight: bold;
    padding: 10px;
    font-size: 22px;
    }
.btn{
    text-align: center;
    margin: 10px;
    cursor: pointer;
}
button{
    padding: 5px;
    width: 20%;
    border-radius: 10px;
    background-color: rgb(242, 220, 20);
    font-size: 18px;
}
.input1{
    width: 44%;
    font-size: 18px;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}


.btn button a{
    text-decoration:none;
}

.btn h3 a{
    text-decoration:none;
}

.btn h3 a:hover{

color:red;

}



    </style>
</head>
<body>
    <div class="container">
    <h1>LOGIN</h1>
        <form action="connect.php" method="POST">
            <div>
                <label for="">Name</label>
                <input class="input" type="text" name="name" placeholder="Enter your name">
            </div>
            <div>
                <label for="">Email</label>
                <input class="input" type="email" name="email" placeholder="enter your email">
            </div>
            <div class="gendercontainer">
                <label for="">Gender</label>
                <input class="gender1" type="radio" name="gender" values="m">Male 
                <input class="gender1" type="radio" name="gender" values="f">Female
            </div>
            
            <div>
                <label for="">Moble</label>
                <input  class="input" type="number" name="mobile" placeholder="enter your mobile">
            </div>
            <div>
                <label for="">Password</label>
                <input class="input1" type="password" name="password" placeholder="enter your password">
            </div>
            <div class="btn">      
      <button><a href="manzi.php" id="showLogin">login</a></button>
      <h3>Don't have an account? <a href="register.php" id="showRegister"> Register here</a></h3>

            </div>
        </form>
    </div>
</body>
</html>

<script>

document.getElementById('loginButton').addEventListener('click', function() {
      const name= document.getElementById('name').value;
      const email= document.getElementById('email').value;
      const mobile= document.getElementById('mobile').value;
      const password= document.getElementById('password').value;


      if ((name && email),(mobile&&password)) {
        document.getElementById('loginSection').style.display = 'none';
        document.getElementById('betSection').style.display = 'block';
        alert('Logged in successfully');
      } else {
        alert('Please enter both name,email,mobile,password');
      }
    });



    /*background-repeat:no-repeat;
    background-attachment: fixed;
    background-size:100% 100%;*/

</script>



