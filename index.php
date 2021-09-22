<?php
session_start();
if (!key_exists('table', $_SESSION) || sizeof($_SESSION["table"]) == 0) {
    $_SESSION['table'] = array();
}

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <script defer src="js/painter.js"></script>
    <script defer src="js/jquery-3.6.0.min.js"></script>
    <script defer src="js/validator.js"></script>
</head>
<body>
<div>
    <header>
        <h1>Проверка попадания точки на заданную область</h1>
        <p>
            Макаров Ньургун Михайлович P3214
            <a class="link" href="https://github.com/Rvze" target="_blank">
                <img alt=github src="img/github.png">
            </a>
            <br> Вариант: 14111
        </p>
    </header>
</div>
<div class="content">
    <div class="block-column1">
        <div class="block-item">
            <canvas id="coordinate" height="500px" width="500px"
            ></canvas>
        </div>
    </div>
    <div class="block-column2">
        <div class="block-items">
            <form class="form" method="POST" id="_form" action="php/check.php" name="form">
                <table class="item-x" id="_x">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Координата X:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="-5" form="_form" id="x">-5
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="-4" form="_form" id="x">-4
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="-3" form="_form" id="x">-3
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="-2" form="_form" id="x">-2
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="-1" form="_form" id="x">-1
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="0" form="_form" id="x">0
                            </label></td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="1" form="_form" id="x">1
                            </label></td>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="2" form="_form" id="x">2
                            </label></td>
                        <td>
                            <label>
                                <input class="x" type="radio" name="x" value="3" form="_form" id="x">3
                            </label></td>
                    </tr>
                    </tbody>
                </table>
                <div class="item-y">
                    <label>Координата Y:
                        <input class="y" size="12px" id="y" name="y" form="_form" type="text"
                               maxlength="8"
                               placeholder="от -5 до 5" data-rule="number">
                    </label>
                </div>
                <div class="item-radius">
                    <label>
                        Радиус R:
                        <input class="r" size="12px" id="r" name="r" form="_form" type="text" maxlength="8"
                               placeholder="от 2 до 5" data-rule="number">
                    </label>
                </div>


                <button class="send" type="submit" form="_form" value="submit" name="submit" id="submit">Отправить
                </button>
                <button class="reset" type="reset" form="_form">Сбросить</button>
                <button class="clear" type="submit" form="_form" name="clear">Очистить таблицу</button>


            </form>
        </div>
        <div class="table">

            <table class="mobile-table">
                <thead>
                <tr>
                    <td>X</td>
                    <td>Y</td>
                    <td>R</td>
                    <td>Попал?</td>
                    <td>Время</td>
                    <td>Время выполнения</td>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($_SESSION['table'] as $value) {
                    echo "<tr>
                <td> $value[0]</td>
                <td> $value[1]</td>
                <td> $value[2]</td>
                <td> $value[3]</td>
                <td> $value[4]</td>
                <td> $value[5]</td>
            </tr>";
                }
                ?>
                </tbody>
            </table>


        </div>
    </div>


</div>
</body>
</html>