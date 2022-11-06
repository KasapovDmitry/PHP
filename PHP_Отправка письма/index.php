<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
    <h1>Работа с формами</h1>
    <section>
        <form action="script.php" method="post">
            <div><label for="">Name: <input type="text" name="name" value="Pupkin"></label> </div>
            <div><label for="">Email: <input type="text" name="email" value="ceburek01@gmail.com"></label> </div>
            <div><label for="">Phone: <input type="text" name="phone" value="89182190011"></label> </div>
            <div><label for="">Message: <input type="text" name="message" value="hello"></label> </div>
            <div><input type="submit" "value="Push" onclick = "myFunction()"> </div>
        </form>
        <?php echo $a; ?>
    </section>
</div>
</body>
</html>