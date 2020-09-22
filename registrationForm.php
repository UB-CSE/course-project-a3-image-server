<!-- Sean Jones -->
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            padding: 20px;
            background-color: white;
        }

        input[type=text], input[type=password]{
            width: 100%;
            padding: 10px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus{
            background-color: #ddd;
            outline: none;
        }

        hr{
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn{
            background-color: greenyellow;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover{
            opacity: 1;
        }

        a {
            color: dodgerblue;
        }

        .signin{
            background-color: #f1f1f1;
            text-align: center;
        }

    </style>
</head>
<body>
    <form action="action_page.php">
        <div class="container">
            <h1>Register</h1>
            <p>Please complete this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>
            <button type="submit" class="registerbtn">Register</button>
            </div>
            <div class="container signin">
                <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
    </form>
</body>
</html>


