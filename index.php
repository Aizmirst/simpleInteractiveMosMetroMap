<?php
    include "db/connect_db.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Московский метрополитен</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script/main.js"></script>
</head>

<body>
    <div class="map">
        
    </div>
    <div id="popup" class="popup">
        <a href="#" class="popup_area"></a>
        <div class="popup_body">
            <div class="popup_content">
                <a href="#" class="popup_close">X</a>
                <div id="popData" class="popup_title">Бульвар</div>
                <div class="popup_text">Станция метро</div>
            </div>
        </div>
    </div>
</body>

</html>