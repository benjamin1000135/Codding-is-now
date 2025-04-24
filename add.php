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

}


h1{
    text-align: center;
    color:blue;
}
.container{
    margin-top: 10%;
    width: 35%;
    border:4px solid #076993;
    border-radius: 20px;
    height: 50%;
    margin-left: 35%;
    background-image:url(==.jpg);
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size:70% 70%;

    
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
    color:blue;
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
    width: 47%;
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



.input0{
    width: 51.6%;
    font-size: 18px;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}




    </style>
</head>
<body>
    <div class="container">
    <h1>ADD NEW</h1>
        <form action="connect.php" method="POST">
            <div>
                <label for="">Name</label>
                <input class="input0" type="text" name="name" placeholder="Enter Name">
            </div>
            <div>
                <label for="">School</label>
                <input class="input" type="email" name="email" placeholder="enter School">
            </div>
            
            
            <div>
                <label for="">Amount</label>
                <input class="input1" type="email" name="email" placeholder="enter Amount">
            </div>
            


            <div class="btn">      
      <button><a href="mn.php" id="showLogin">Add</a></button>

            </div>
        </form>
    </div>
</body>
</html>