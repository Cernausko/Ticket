<?php

if(isset($_POST['asmens_kodas'],$_POST['vardas_pavarde'],$_POST['iskur_skrenda'], $_POST['ikur_skrenda'],$_POST['kaina'], $_POST['bagazas'], $_POST['pastabos'])) {
    $asmens_kodas = $_POST['asmens_kodas'];
    $vardas_pavarde = $_POST['vardas_pavarde'];
    $iskur_skrenda = $_POST['iskur_skrenda'];
    $ikur_skrenda = $_POST['ikur_skrenda'];
    $kaina = $_POST['kaina'];
    $bagazas = $_POST['bagazas'];
    $pastabos = $_POST['pastabos'];
}
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplane Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .ticket {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 1100px;
            margin: 0 auto;
        }
        .info{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .left-info,
        .right-info {
            flex: 1;
            background-color: #d4d4d4;
        }
        .ticket .arrow {
            color: #d4d4d4;
            margin: 0 5px;
        }
        .ticket p {
            margin: 5px 0;
        }
        .right-info {
            padding: 0 20px;
        }          

        .title-text {
            padding: 10px;
            color: #4d64a3;
            align-self: flex-start;
            font-size: 20px;
            font-weight: 600;
        }


        .flight{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px 0;
            background-color: white;
        }
        .date{
            padding-top: 5px;
            padding-left: 20px;
            padding-bottom: 20px;
            font-size: 20px;
            font-weight: 600;
            width: 140px;
        }
        .name_surname{
            width: 100px;
            font-weight: 600;
            color:#8a8a8a;
            padding: 0 50px;
        }
        .airports{
            width: 300px;
            font-weight: 600;
            color:#404047;
        }
        .time{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: white;
            padding: 20px;
        }

        .time i{
            padding-top: 20px;
        }
        .from{
            font-size: 15px;
        }
        .from p{
            font-size: 20px;
        }
        .time p{
            font-size: 20px;
        }
        .note{
            color: blue;
            align-self: flex-end;
            background-color: white;
            padding: 10px;
            margin-top: auto;
        }
        .note arrow{
            color: blue;
        }
        .alert{
            color: #78714f;
            font-weight: 600;
        }
        .baggage-full{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            color: blue;
        }
        .baggage{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 0 10px;
        }
        .inspection{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 0 10px;
        }
        .tax{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .price{
            text-align: right;
        }
        .price span{
            font-size: 30px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="info">
            <div class="left-info">
            <p class='title-text'>$iskur_skrenda - $ikur_skrenda</p>
                <div class="flight">
                    <p class='date'>1. Feb. 2018</p>
                    <p class='name_surname'>$vardas_pavarde</p>
                    <p class='airports'>Franz Josef StrauB (MUC)</br> Sir Donald Sangster Intl. (MBJ)</p>
                </div>
                <div class="time">
                    <span class='from'><p>12:20 Uhr</p>$iskur_skrenda</span> 
                    <i class='fas fa-long-arrow-alt-right arrow'></i>
                    <span class='from'><p>12:20 Uhr</p>$ikur_skrenda</span>
                    <p>13Std. 30Min., Direct/Nonstop</p>
                </div>
                <p class='note'>Bilietas nėra gražinamas daugiau informacijos žemiau<i i class='fas fa-arrow-down down-arrow'></i></p>
            </div>
            <div class="right-info">
                <h2>Informacija</h2>
                <p class='alert'><i class="fas fa-exclamation-circle"></i> Dėmesio: skrydis nukeliamas 16.02.2018</h2>
                    <div class='baggage-full'>
                        <p>Bagažas 1: Patikra<i i class='fas fa-arrow-up up-arrow'></i></p>
                        <p>30.73€</p>
                    </div>
                    <div class='baggage'>
                        <p>Bagažas: $bagazas kg</p>
                        <p>30.00€</p>
                    </div>
                    <div class='inspection'>
                        <p>Bagažo patikrinimas:</p>
                        <p>0.73€</p>
                    </div>
                    <div class='tax'>
                        <p>Bilietas:</p>
                        <p>100.00€</p>
                    </div>
                    <p class='price'>Kaina: <span>$kaina €</span></p>
                    <p>Kaina yra rodoma eurais</p>
            </div>
        </div>
    </div>
</body>
</html>
HTML;
?>