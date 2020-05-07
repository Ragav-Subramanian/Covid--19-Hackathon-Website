<!DOCTYPE html>
<html>

<head>
    <title>Registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <style>
        body,
        div,
        h1,
        form,
        input,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }

        h1 {
            padding: 10px 0;
            font-size: 32px;
            color: #4ADA75;
            font-weight: 300;
            text-align: center;
        }

        p {
            font-size: 12px;
        }

        hr {
            color: #a9a9a9;
            opacity: 0.3;
        }

        .main-block {
            max-width: 340px;
            min-height: 360px;
            padding: 10px 0;
            margin: 50px auto;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
        }

        form {
            margin: 0 30px;
        }

        label#icon {
            margin: 0;
            border-radius: 5px 0 0 5px;
        }

        input[type=text],
        input[type=password] {
            width: calc(100% - 57px);
            height: 36px;
            margin: 13px 0 0 -5px;
            padding-left: 10px;
            border-radius: 0 5px 5px 0;
            border: solid 1px #cbc9c9;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
            background: #fff;
        }

        input[type=password] {
            margin-bottom: 15px;
        }

        #icon {
            display: inline-block;
            padding: 9.3px 15px;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
            background: #4ADA75;
            color: #fff;
            text-align: center;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border-radius: 5px;
            border: none;
            background: #4ADA75;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }

        button:hover {
            background: #4ADA75;
        }
    </style>
</head>

<body class="main-home">
    <div class="main-block">
        <h1>Registration form</h1>
        <form action="../includes/register.php" method="post">

            <hr>
            <label id="icon" for="username"><i class="fas fa-user"></i></label>
            <input type="text" name="username" id="username" placeholder="Username" required />
            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="password" placeholder="Password" required />
            <label id="icon" for="re-password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="re-password" id="re-password" placeholder="Re-type Password" required />
            <hr>
            <div class="btn-block">
                <button type="submit" name="signup">Register</button>
            </div>
            </form> <br>&nbsp;&nbsp;&nbsp;
    </div>

</body>

</html>