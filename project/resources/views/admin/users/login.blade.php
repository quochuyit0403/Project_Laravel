<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;1,600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(/template/admin/dist/img/beach2.jpeg);
            background-size: cover; /* Kích thước ảnh sao cho nó phù hợp với cửa sổ trình duyệt */
            background-position: center; /* Canh ảnh nền giữa trung tâm */
            background-repeat: no-repeat;
        }

        .box {
            position: relative;
            width: 380px;
            height: 430px;
            background-color: rgb(23, 4, 58);
            border-radius: 10px;
            overflow: hidden;
        }

        .box::before {
            content: '';
            position: absolute;
            width: 380px;
            height: 430px;
            top: -50%;
            left: -50%;
            background: linear-gradient(0deg, transparent,
            transparent, rgb(252, 118, 29), rgb(252, 118, 29),rgb(252, 118, 29));
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 5s linear infinite;
        }

        .box::after {
            content: '';
            position: absolute;
            width: 380px;
            height: 430px;
            top: -50%;
            left: -50%;
            background: linear-gradient(0deg, transparent,
            transparent, rgb(254, 254, 254), rgb(254, 254, 254),rgb(254, 254, 254));
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 5s linear infinite;
            animation-delay: -3s;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .box form {
            position: absolute;
            inset: 4px;
            background: rgb(23, 4, 58);
            padding: 50px 40px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        .box form h2 {
            color: white;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
            font-weight: bolder;
            font-size: 30px;
        }

        .box form .inputBox {
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .box form .inputBox input {
            position: relative;
            width: 100%;
            padding: 10px;
            border: none;
            background: transparent;
            outline: none;
            box-shadow: none;
            color: black;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }

        .box form .inputBox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            color: white;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .box form .inputBox input:valid ~ span,
        .box form .inputBox input:focus ~ span {
            color: white;
            font-size: 0.8em;
            transform: translateY(-43px);
        }

        .box form .inputBox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 0.5px;
            background: white;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .box form .inputBox input:valid ~ i,
        .box form .inputBox input:focus ~ i {
            height: 43px;
            
        }

        .box form .links {
            display: flex;
            justify-content: space-between;
        }

        .box form .links a {
            margin: 10px 0;
            font-size: 0.8em;
            color: white;
            text-decoration: none;
            margin-top: 20px;
        }

        .box form .links a:hover {
            color: rgb(167, 167, 167);
            transition: all 0.2s ease;
        }

        .box form input[type='submit'] {
            border: none;
            outline: none;
            padding: 10px 25px;
            background: rgb(59, 156, 231);
            cursor: pointer;
            font-size: 0.9rem;
            border-radius: 4px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
        }

        .box form input[type='submit']:hover {
            opacity: 0.8;
            transition: all 0.5s ease;
        }

        /* Ni là css cho alert*/
        .alert-text {
            color: white !important;
        }
    </style>
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form action="/admin/users/login/travel" method="post">
            <h2>SIGN IN</h2>
            <div class="inputBox">
                <input type="text" required="required" name="email">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <br>
            @include('admin.alert', ['class' => 'alert-text'])
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#">Sign Up</a>
            </div>
            <input type="submit" value="LOGIN">
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
        </form>
    </div>
</body>
</html>