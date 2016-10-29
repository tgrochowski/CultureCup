<?php require_once "./back/back.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script
                src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <div id="start">
            <div class="tekst">CultureDate</div>
            <div id="logo"></div>
            <div id="bt1" class="button">ZACZYNAMY!</div>
        </div>
        <div id="main" class="hidden">
            <div class="tekst">Gdzie dziś wyruszamy?</div>
            <input type="number" id="kasa" min="0" placeholder="ile masz pieniedzy?"/>
            <div class="tekst" id="preferences">preferencje</div>
            <div id="types-list">
                <ul>
                <li>
                    <label for="film">Film</label>
                    <input id="film" type="radio" name="type" value="film"/>
                </li>
                <li>
                    <label for="cafe">Cafe</label>
                    <input id="cafe" type="radio" name="type" value="film"/>
                </li>
                <li>
                    <label for="food">Food</label>
                    <input id="food" type="radio" name="type" value="film"/>
                </li>
                <li>
                    <label for="museum">Museum</label>
                    <input id="museum" type="radio" name="type" value="film"/>
                </li>
                <li>
                    <label for="theatre">Theatre</label>
                    <input id="theatre" type="radio" name="type" value="film"/>
                </li>
                </ul>
            </div>
            <div id="map"></div>
            <script src="map.js"></script>
            <button id="getData"></button>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkd-J0b0vERWrzzQR5_yfhMMKwOxJbL6g&callback=initMap">
            </script>
        </div>
    </body>
</html>