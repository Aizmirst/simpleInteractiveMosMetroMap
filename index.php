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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/main.js"></script>
    <script>
        function reply(id){
            // id.preventDefault();
            var name = id;
            // console.log(name);
            $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    dataType: "json",
                    data: {name:name},
                    success: function(result){
                        // console.log(JSON.parse(result)); //вроде ошибка
                        // console.log(json_encode(result));
                        // json_encode(result); //выдает ошибку
                        console.log(result);
                        var goods = result;
                        // json_decode(goods); выдает ошибку
                        console.log(goods);

                        $('#popTitle').html(goods);
                    }
                });
        }

        //Не работает
        // $(document).ready(function(){
        //     $('a').on('click', function(){
        //         var name = $('a.data-name').val();
        //         $.ajax({
        //             type: "POST",
        //             url: "ajax.php",
        //             data: name,
        //             success: function(result){
        //                 $('#popData').html(result);
        //             }
        //         });
        //     })
        // })


        //on или target или onclick выдают ошибки
        // $(function(){
        //     $('#dot').target(function(e){
        //         e.preventDefault();
        //         alert(e);
        //         var data = $(this).serialize();
        //         $.ajax({
        //             type: "POST",
        //             url: "ajax.php",
        //             data: data,
        //             success: function(result){
        //                 $('#popData').html(result);
        //             }
        //         });
        //     });
        // });
    </script>
    <!-- onclick="reply(this.id)" -->
</head>

<body>
    <div class="map">
        <svg viewBox="0 0 2738.0283 3414.0845">
            <a href="#popup" id="Бульвар Рокоссовского" onclick="reply(this.id)" name-station = "Бульвар Рокоссовского" name-line = "Сокольническая линия">
                <path class="redLine" d="m 2169.5706,706.49544 a 16.353001,16.616758 0 0 1 -22.7761,-4.05547 16.353001,16.616758 0 0 1 3.9842,-23.14465 16.353001,16.616758 0 0 1 22.7784,4.0413 16.353001,16.616758 0 0 1 -3.9701,23.14713 l -9.4083,-13.59129 z">
            </a>
        </svg>
        <img src="images/mosMetro.png" alt="">
    </div>
    <div id="popup" class="popup">
        <a href="#" class="popup_area"></a>
        <div class="popup_body">
            <div class="popup_content">
                <a href="#" class="popup_close">X</a>
                <div id="popTitle" class="popup_title"></div>
                <div id="popLine" class="popup_text">Станция метро</div>
                <div class="popup_text">Станция метро</div>
            </div>
        </div>
    </div>
</body>

</html>