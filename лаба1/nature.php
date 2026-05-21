<?php
$pageTitle = "Абызов Д. С. , группа 241-352 Лабораторная работа № А‐1";
$currentPage = "nature";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <a href="<?php echo "index.php"; ?>"><?php echo ($currentPage == "index" ? ' ->Главная' : '>Главная'); ?></a>
        <a href="<?php echo "nature.php"; ?>"><?php echo ($currentPage == "nature" ? '->About us' : '>About us'); ?></a>
        <a href="<?php echo "gallery.php"; ?>"><?php echo ($currentPage == "gallery" ? ' ->Gallery' : '>Gallery'); ?></a>
    </nav>
</header>

<main>
    <h1>Про нас</h1>
    
    <h2>Автор работы</h2>
    <p>Я Абызов Дмитрий Сергеевич, студент московского политех, перевелся из университета МЭИ. Мне 19 лет, живу в городе Реутов Московской области.Московский политехнический университет (Московский Политех) — государственный инженерно-технологический вуз Москвы. Создан в 2016 году путём реорганизации и объединения отраслевых вузов Москвы (включая МГТУ «МАМИ» и университет печати им. И. Фёдорова)</p>
    
    <h2>Таблица: природные зоны</h2>
    <table>
        
        <?php
        echo '<tr><td><strong>Зона</strong></td><td><strong>Климат</strong></td><td><strong>Примеры</strong></td></tr>';
        ?>
        
        <tr>
            <td><?php echo "Тайга"; ?></td>
            <td><?php echo "Холодный, влажный"; ?></td>
            <td><?php echo "Ель, сосна, медведь"; ?></td>
        </tr>
    </table>

    <h2>Фотография(переменная)</h2>
    <div class="gallery">
        <?php
        $second = date('s');
        if ($second % 2 == 0) {
            $photo = "fot/photo2.jpg";
        } else {
            $photo = "fot/photo3.jpg";
        }
        echo '<img src="' . $photo . '" alt="Динамическое фото" width="300">';
        ?>
        <img src="fot/photo1.jpg" alt="Обычное фото" width="300">
    </div>
    
    <p>Тигр — крупное хищное млекопитающее семейства кошачьих, один из пяти видов рода пантер, принадлежащего к подсемейству больших кошек. Это один из крупнейших наземных хищников, уступающий по массе лишь белому и бурому медведям. 
</p>
</main>

<footer>
    Сформировано <?php echo date('d.m.Y') . " в " . date('H:i:s'); ?>
</footer>

</body>
</html>