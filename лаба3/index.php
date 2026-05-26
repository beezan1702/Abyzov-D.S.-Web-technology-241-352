<?php
$student_name = "Абызов Дмитрий Сергеевич";   
$group = "241-352";                        
$lab_number = 3;

if (!isset($_GET['store'])) {
    $store = '';
} else {
    $store = $_GET['store'];
}

if (!isset($_GET['clicks'])) {
    $clicks = 0;
} else {
    $clicks = (int)$_GET['clicks']; 
}

if (isset($_GET['key'])) {
    $key = $_GET['key'];     

    if ($key == 'reset') {
        $store = '';
    }
    else {
        $store .= $key;        
    }
    $clicks++;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа № <?php echo $lab_number ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="fot/logo.png" style="height: 50px;">
    </div>
    <div class="student-info">
        <p><strong>ФИО:</strong><?php echo$student_name ?></p>
        <p><strong>Группа:</strong><?php echo $group ?></p>
        <p><strong>Лабораторная работа</strong> № <?php echo $lab_number ?></p>
    </div>
</header>

<main class="main">
    <div class="result-window">
        <?php echo htmlspecialchars($store);?>
    </div>

    <div class="buttons-container">
        <?php
        for ($digit = 0; $digit <= 9; $digit++) {
            echo '<a href="?key=' . $digit 
                 . '&store=' . urlencode($store) 
                 . '&clicks=' . $clicks 
                 . '" class="digit-button">' . $digit . '</a>';
        }
        ?>

        <a href="?key=reset&store=<?php echo urlencode($store); ?>&clicks=<?php echo $clicks; ?>" 
           class="reset-button">СБРОС</a>
    </div>
</main>

<footer class="footer">
    <p>Нажатий всего: <?php echo $clicks; ?></p>
</footer>

</body>
</html>