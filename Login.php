<head>
    <title>
       Login
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

    
<form action="">
    
        <h1>
            Login Here!
        </h1>
    
    <div class="input-group">
        <label for="">Username</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label for="">Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <button type="submit" name="register">Login</button>
    </div>
        <p>
            Not yet a member? <a href="Sign Up.php">Register Now</a>
        </p>
    </form>
</body>