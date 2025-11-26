<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Successful</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        body{
            background: #0a0a0a;
            color: #e1e1e1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
        }

        .box{
            animation: fadeIn 0.8s ease-in-out;
        }

        h1{
            font-size: 85px;
            color: #22ff88;
            text-shadow: 0px 0px 12px #22ff88;
            animation: glow 1.8s infinite alternate;
        }

        h3{
            font-size: 24px;
            margin-top: -10px;
            color: #61ffb1;
        }

        button{
            margin-top: 25px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            color: #000;
            background: #22ff88;
            transition: 0.3s;
        }

        button:hover{
            background: #00c76d;
            color: #fff;
            box-shadow: 0px 0px 10px #00c76d;
        }

        @keyframes glow{
            from { text-shadow: 0px 0px 5px #22ff88; }
            to { text-shadow: 0px 0px 25px #22ff88; }
        }

        @keyframes fadeIn{
            from {opacity: 0; transform: scale(0.7);}
            to {opacity: 1; transform: scale(1);}
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>✔</h1>
        <h3>Sign Up Successful!</h3>

        <form action="tes.php">
            <button type="submit">Go to Login</button>
        </form>
    </div>
</body>
</html>
