<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Clone</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial,sans-serif;
            background:#f5f5f5;
        }

        nav{
            background:white;
            padding:20px 50px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .logo{
            font-size:32px;
            font-weight:bold;
        }

        .links a{
            text-decoration:none;
            color:black;
            margin-left:25px;
            font-weight:bold;
        }

        .links a:hover{
            color:#0066ff;
        }

        .hero{
            height:90vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
            background:linear-gradient(to right,#ffffff,#dbe8ff);
            padding:20px;
        }

        .hero img{
            width:350px;
            margin-bottom:30px;
            transition:0.3s;
        }

        .hero img:hover{
            transform:scale(1.05);
        }

        .hero h1{
            font-size:70px;
            margin-bottom:20px;
        }

        .hero p{
            font-size:24px;
            color:#555;
            margin-bottom:30px;
        }

        .btn{
            background:black;
            color:white;
            padding:15px 35px;
            border-radius:40px;
            text-decoration:none;
            font-size:18px;
        }

        .btn:hover{
            background:#0066ff;
        }

    </style>

</head>
<body>

<nav>

    <div class="logo">
        SAMSUNG
    </div>

    <div class="links">
        <a href="/phones">Phones</a>
        <a href="/tablets">Tablets</a>
        <a href="/watches">Watches</a>
        <a href="/tvs">TVs</a>
        <a href="/support">Support</a>
    </div>

</nav>

<section class="hero">

   <img src="https://i.ibb.co/hF4pkQsj/dsdsdsd-removebg-preview.png" alt="dsdsdsd removebg preview" border="0"></a>Samsung Phone

    <h1>Galaxy AI</h1>

    <p>Welcome to the future of Samsung technology</p>

    <a class="btn" href="/phones">Shop Phones</a>

</section>

</body>
</html>