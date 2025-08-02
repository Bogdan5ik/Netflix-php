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
$film1 = [
    "name" => "Downtown Abbey",
    "description" => "Этот сериал, обножающий снобизм и интриганство внутри исчезающей классовой системы Англии, рассказывает о событяих жизни семьи Кроули и её слуг.",
    "year" => 2015,
    "image" => "downtownabbey.webp",
];
$film2 = [
    "name" => "Ыаллыылар",
    "description" => "Увувава мися вава, уаоу грееееем, лак магост вавагася грааааа.",
    "rate" => "69 / 10",
    "image" => "film1.jpg",
];
$film3 = [
    "name" => "Казахи против пришельцев",
    "description" => "Казахи сражаются против прищельцев.",
    "rate" => "52 / 10",
    "image" => "film2.jpg",
];
$film4 = [
    "name" => "Базар жок, Мексика!",
    "description" => "Мексика очень хорошая страна! Так говорили все казахи.",
    "rate" => "1488 / 10",
    "image" => "film3.jpg",
];
$film5 = [
    "name" => "Гари Поттер",
    "description" => "Гари Поттер сражаеться со злом сильным",
    "rate" => "10 / 10",
    "image" => "film4.jpg",
];

$film6 = [
    "name" => "Призрачный Гончик",
    "description" => "Человек получает проклятие, и по ночам становиться Призрачным Гончиком.",
    "rate" => "1 / 10",
    "image" => "film5.jpg",
];
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

    <div class="col-12" style="height: 80%; background-Image: url(<?php echo $film1['image'] ?>); background-size: 100% 100%; padding-top: 170px; padding-left: 100px; position: absolute;">
        <div class="col-3 text-light">
            <h1><?php echo $film1['name'] ?></h1>
            <h4><?php echo $film1['description'] ?></h4>
            <p>Год выпуска:<?php echo $film1['year'] ?></p>
            <button style="background: white; border-radius: 5px; width: 100px; height: 40px;">Смотреть</button>
            <button style="background: gray; border-radius: 5px; width: 100px; height: 40px;">Подробнее</button>
        </div>
    </div>

    <div class="col-12" style="height: 50%; position: absolute; top: 86.5%;">

        <div class="col align-items-center d-flex" style="height: 10%; background: gray;">
            <h1 class="text-light">TOP-5 лучших фильмов по версии чат гпт</h1>
        </div>
        
        <div class="col d-flex" style="height: 90%; background: gray;">

        <div class="col-2" style="">
            <div class="col justify-content-center d-flex" style="height: 50%;">
                 <img src="<?php echo $film2['image'] ?>" alt="">
            </div>

            <div class="col" style="height: 50%; color: white;">
                <h1><?php echo $film2['name'] ?></h1>
                <h4><?php echo $film2['description'] ?></h4> <br>
                <h4>рейтинг: <?php echo $film2['rate'] ?></h4>
            </div>
        </div>



        <div class="col-2" style="margin-left: 3%;" style="">
            <div class="col justify-content-center d-flex" style="height: 50%;">
                 <img src="<?php echo $film3['image'] ?>" alt="">
            </div>

            <div class="col" style="height: 50%; color: white;">
                <h1><?php echo $film3['name'] ?></h1>
                <h4><?php echo $film3['description'] ?></h4> <br>
                <h4>рейтинг: <?php echo $film3['rate'] ?></h4>
            </div>
        </div>



        <div class="col-2" style="margin-left: 3%;" style="">
            <div class="col justify-content-center d-flex" style="height: 50%;">
                 <img src="<?php echo $film4['image'] ?>" alt="">
            </div>

            <div class="col" style="height: 50%; color: white;">
                <h1><?php echo $film4['name'] ?></h1>
                <h4><?php echo $film4['description'] ?></h4> <br>
                <h4>рейтинг: <?php echo $film4['rate'] ?></h4>
            </div>
        </div>

        <div class="col-2" style="margin-left: 3%;" style="">
            <div class="col justify-content-center d-flex" style="height: 50%;">
                 <img src="<?php echo $film5['image'] ?>" alt="">
            </div>

            <div class="col" style="height: 50%; color: white;">
                <h1><?php echo $film5['name'] ?></h1>
                <h4><?php echo $film5['description'] ?></h4> <br>
                <h4>рейтинг: <?php echo $film5['rate'] ?></h4>
            </div>
        </div>

        <div class="col-2" style="margin-left: 3%;" style="">
            <div class="col justify-content-center d-flex" style="height: 50%;">
                 <img src="<?php echo $film6['image'] ?>" alt="">
            </div>

            <div class="col" style="height: 50%; color: white;">
                <h1><?php echo $film6['name'] ?></h1>
                <h4><?php echo $film6['description'] ?></h4> <br>
                <h4>рейтинг: <?php echo $film6['rate'] ?></h4>
            </div>
        </div>

        


        </div>
    </div>
    </body>

</html>
