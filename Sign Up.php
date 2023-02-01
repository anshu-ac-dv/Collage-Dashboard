<head>
    <title>
        Sign Up
    </title>


    <style>
        form{
            width: 50%;
            margin: 0px auto;
            padding: 20px;
            margin-top: 20px;
            border: 2px solid gray;
            background-color: white;
            border-radius: 10px 10px 10px 10px;
        }
        .input-group{
            margin: 10px 0px 10px 0px;
        }
        .input-group label{
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input{
            height: 40px;
            width: 100%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        .input-group button{
            padding: 10px;
            font-size: 15px;
            color: white;
            background-color: blue;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<?php
    include"Header.php";
    ?>


    
<form action="/gpgopalganj/Sign Up.php" method="post" >
    
        <h1>
            Register Here!
        </h1>
    
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="text" name="password">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="text" name="cpassword">
    </div>
    <div class="input-group">
        <button type="submit" name="register">Register</button>
    </div>
        <p>
            Already a member? <a href="Login.php">Login</a>
        </p>
    </form>
</body>