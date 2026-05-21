<?php

$pageTitle = "Абызов Д. С. , группа 241-352 Лабораторная работа № А‐1";

$currentPage = "index";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">,
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <a href="<?php echo "index.php"; ?>"><?php echo ($currentPage == "index" ? '->Главная' : '>Главная'); ?></a>

        <a href="<?php echo "nature.php"; ?>"><?php echo ($currentPage == "nature" ? ' ->About us' : '>About us'); ?></a>

        <a href="<?php echo "gallery.php"; ?>"><?php echo ($currentPage == "gallery" ? ' ->Gallery' : '>Gallery'); ?></a>
    </nav>
</header>

<main>
    <h1>Добро пожаловать на мой сайт</h1>
    
    <h2>Знание</h2>
    <p>Знание — это проверенный на практике результат познания, отражающий объективную реальность. Оно выходит за рамки простого набора фактов, включая в себя понимание причинно-следственных связей и закономерностей. Истинное знание служит надёжным инструментом для ориентации в мире, помогает принимать обоснованные решения и способствует личностному и общественному развитию. Без стремления к знаниям невозможен ни научный прогресс, ни духовное взросление человека.</p>
    
    <h2>Таблица</h2>
    <table>
       
        <?php
        echo '<tr><td><strong>Имя</strong></td><td><strong>Фамилия</strong></td><td><strong>Отчество</strong></td></tr>';
        ?>
        
        <tr>
            <td><?php echo "Абызов"; ?></td>
            <td><?php echo "Дмитрий"; ?></td>
            <td><?php echo "Сергеевич"; ?></td>
        </tr>
        <tr>
            <td><?php echo "Иванов"; ?></td>
            <td><?php echo "Иван"; ?></td>
            <td><?php echo "Иванович"; ?></td>
        </tr>
    </table>

    <h2>Динамическая фотография </h2>
    <div class="gallery">
        <?php
        $second = date('s');
        if ($second % 2 === 0) {
            $photo = "fot/photo3.jpg";
        } else {
            $photo = "fot/photo2.jpg";
        }
        echo '<img src="' . $photo . '" alt="" width="300">';
        ?>
        <img src="fot/photo1.jpg" alt="Статический пейзаж" width="300">
    </div>
    
    <p> Текущая секунда: <?php echo date('s'); ?>. 
    Тигр — крупное хищное млекопитающее семейства кошачьих, один из пяти видов рода пантер, принадлежащего к подсемейству больших кошек. Это один из крупнейших наземных хищников, уступающий по массе лишь белому и бурому медведям. 
</p>
</main>

<footer>
    Сформировано <?php echo date('d.m.Y') . " в " . date('H:i:s'); ?>
</footer>

</body>
</html>\