<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>
<?php
$key1 = [
    "name" => "Downtown Abbey",
    "description" => "Этот сериал, обножающий снобизм и интриганство внутри исчезающей классовой системы Англии, рассказывает о событяих жизни семьи Кроули и её слуг.",
    "year" => 2015,
    "image" => "downtownabbey.webp",
] 

?>
 <!--шапка-->
 <div class="bg-dark p-3 col-12">
        <div class="row">
            <div class="col-1">
                <img src="logo.png" alt="" class="w-100">
            </div>
            <div class="col-7 pt-2">
                <a href="" class="text-light ml-3 text-decoration-none">Главная</a>
                <a href="" class="text-light ms-3 text-decoration-none">Сериалы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Фильмы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Новые и популярные</a>
                <a href="" class="text-light ms-3 text-decoration-none">Мой список</a>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>

    <div class="col-12" style="height: 673px; background-Image: url(<?php echo $key1['image'] ?>); background-size: 100% 100%; padding-top: 170px; padding-left: 100px;">
        <div class="col-3 text-light">
            <h1><?php echo $key1['name'] ?></h1>
            <h4><?php echo $key1['description'] ?></h4>
            <p>Год выпуска:<?php echo $key1['year'] ?></p>
            <button style="background: white; border-radius: 5px; width: 100px; height: 40px;">Смотреть</button>
            <button style="background: gray; border-radius: 5px; width: 100px; height: 40px;">Подробнее</button>
        </div>
    </div>
    </body>
</html>