<?php
$pageTitle = "Абызов Д. С. , группа 241-352 Лабораторная работа № А‐1";
$currentPage = "gallery";
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
        <a href="<?php echo "index.php"; ?>"><?php echo ($currentPage == "index" ?  '->Главная': '>Главная'); ?></a>
        <a href="<?php echo "nature.php"; ?>"><?php echo ($currentPage == "nature" ?  '->About us' : '>About us'); ?></a>
        <a href="<?php echo "gallery.php"; ?>"><?php echo ($currentPage == "gallery" ? ' ->Gallery' : '>Gallery'); ?></a>
    </nav>
</header>

<main>
    <h1>Фотогалерея</h1>
    
    <h2>Изменяющиеся изображения</h2>
    <p>На этой странице вы можете наблюдать, как PHP автоматически выбирает фотографию в зависимости от чётности текущей секунды. Обновите страницу несколько раз - картинка будет меняться.</p>
    
    <h2>Таблица: параметры фотографий</h2>
    <table>
        <?php
        echo '<tr><td><strong>Фото</strong></td><td><strong>Разрешение</strong></td><td><strong>Описание</strong></td></tr>';
        ?>
        <tr>
            <td><?php echo "Переменное"; ?></td>
            <td><?php echo "В зависимости от фото"; ?></td>
            <td><?php echo "Зависит от секунды"; ?></td>
        </tr>
    </table>

    <h2>Динамическая и статическая фотографии</h2>
    <div class="gallery">
        <?php
        $second = date('s');
         if ($second % 2 == 0) {
            $photo = "fot/photo2.jpg";
        } else {
            $photo = "fot/photo3.jpg";
        }
        echo '<img src="' . $photo . '" alt="Меняющаяся" width="300">';
        ?>
        <img src="fot/photo1.jpg" alt="Постоянная" width="300">
    </div>
    
    <p>Тигр — крупное хищное млекопитающее семейства кошачьих, один из пяти видов рода пантер, принадлежащего к подсемейству больших кошек. Это один из крупнейших наземных хищников, уступающий по массе лишь белому и бурому медведям.</p>
</main>

<footer>
    Сформировано <?php echo date('d.m.Y') . " в " . date('H:i:s'); ?>
</footer>

</body>
</html>