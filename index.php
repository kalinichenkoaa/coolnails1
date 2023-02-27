<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <nav> 
                <ul class="ul_menu_left">
                    <li><a href="#news">Новости</a></li>
                    <li class="li_left"><a href="#services">Услуги</a></li>
                </ul>
                <div class="logo">
                    <a href="index.html"><img src="images/logo1.png" alt="логотип"></a>
                </div>
                <ul class="ul_menu_right">
                    <li class="li_right"><a href="company.html">О нас</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
            </nav>
            
        </div>
        <div class="container">
            <div class="banner"> 
            <div>
                <img class="photo_banner" src="images/fon2.png" alt="банер 1">
                <img class="photo_banner" src="images/fon4.png" alt="банер 2">
                <img class="photo_banner" src="images/fon3.png" alt="банер 3">
                <img class="photo_banner" src="images/fon4.png" alt="банер 4">
            </div>
           
                <div class="banner_text">
                    <div class="text_banner">Get your beautiful MANICURE</div>
                    <div class="text_banner">which is PERFECT for your image</div>
                    <div class="text_banner">already TODAY</div>
                    <div class="banner_button">
                        <a href="#"><button class="button_banner1">Записаться</button></a>
                        <a href="#"><button class="button_banner">Отзывы</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="news">
            <div class="container">
                <h2>Новости</h2>
                <div class="news_blok">
                    <?php
                        $db_host='localhost'; // ваш хост
                        $db_name='diplom'; // ваша бд
                        $db_user='root'; // пользователь бд
                        $db_pass=''; // пароль к бд
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
                        $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
                        $mysqli->set_charset("utf8mb4"); // задаем кодировку

                        $result = $mysqli->query('SELECT * FROM `news` ORDER BY `id` DESC LIMIT 3'); // запрос на выборку
                        while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
                        { ?>
                            <div class="blok_news">
                                <div class="news_img"><img src="images/<?= $row['image']?>"></div>
                                <div class="news_text">
                                    <h3 class="news_text_header"><?= $row['header']?></h3>
                                    <p class="news_text_explanation"><?= $row['short_text']?></p>
                                    <a href="news.html"><button class="button_news">Подробнее</button></a>
                                </div>
                            </div>
                        <?php
                        }
                    ?>
                    
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
               
                <div class="services_blok">
                    <div class="blok_services">
                        <p>Рыба в веб-дизайне — временное наполнение макета страницы для имитации её законченного вида. У дизайнера не всегда есть под рукой материалы, которые планируется публиковать на веб-сайте и поэтому нужн</p>
                        <a href="#"><button class="button_services">Посмотреть прайс</button></a>
                    </div>
                    <div class="blok_services1">
                        <h2>Услуги</h2>
                        <div class="blok_services_top">
                            <?php
                                $db_host='localhost'; // ваш хост
                                $db_name='diplom'; // ваша бд
                                $db_user='root'; // пользователь бд
                                $db_pass=''; // пароль к бд
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
                                $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
                                $mysqli->set_charset("utf8mb4"); // задаем кодировку

                                $result = $mysqli->query('SELECT * FROM `services` ORDER BY `id` LIMIT 0, 3'); // запрос на выборку
                                while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
                                { ?>
                                    <div class="services_blok_top">
                                        <div class="services_img"><img src="images/<?= $row['image']?>"></div>
                                        <div class="services_text">
                                            <h3 class="services_text_header"><?= $row['header']?></h3>
                                            <p class="services_price">От&nbsp; <?= $row['price']?>&nbsp; руб.</p>
                                            <a href="services.html"><button class="button_services">Подробнее</button></a>
                                        </div>
                                    </div>
                                <?php
                                }
                            ?>
                        </div>
                        <div class="blok_services_button">
                            <?php
                                $db_host='localhost'; // ваш хост
                                $db_name='diplom'; // ваша бд
                                $db_user='root'; // пользователь бд
                                $db_pass=''; // пароль к бд
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
                                $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
                                $mysqli->set_charset("utf8mb4"); // задаем кодировку

                                $result1 = $mysqli->query('SELECT * FROM `services` ORDER BY `id` LIMIT 3, 3'); // запрос на выборку
                                while($row = $result1->fetch_assoc())// получаем все строки в цикле по одной
                                { ?>
                                    <div class="services_blok_top">
                                        <div class="services_img"><img src="images/<?= $row['image']?>"></div>
                                        <div class="services_text">
                                            <h3 class="services_text_header"><?= $row['header']?></h3>
                                            <p class="services_price">От&nbsp; <?= $row['price']?>&nbsp; руб.</p>
                                            <a href="services.html"><button class="button_services">Подробнее</button></a>
                                        </div>
                                    </div>
                                <?php
                                }
                            ?>
                        </div>
                        <div class="blok_services_button1">
                            <?php
                                $db_host='localhost'; // ваш хост
                                $db_name='diplom'; // ваша бд
                                $db_user='root'; // пользователь бд
                                $db_pass=''; // пароль к бд
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
                                $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
                                $mysqli->set_charset("utf8mb4"); // задаем кодировку

                                $result2 = $mysqli->query('SELECT * FROM `services` ORDER BY `id` LIMIT 6, 3'); // запрос на выборку
                                while($row = $result2->fetch_assoc())// получаем все строки в цикле по одной
                                { ?>
                                    <div class="services_blok_top">
                                        <div class="services_img"><img src="images/<?= $row['image']?>"></div>
                                        <div class="services_text">
                                            <h3 class="services_text_header"><?= $row['header']?></h3>
                                            <p class="services_price">От&nbsp; <?= $row['price']?>&nbsp; руб.</p>
                                            <a href="services.html"><button class="button_services">Подробнее</button></a>
                                        </div>
                                    </div>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about_company">
            <div class="container">
                <h2>О нас</h2>
                <div class="company_information">
                    <div class="company_specifications_left">
                        <div class="company_specifications">
                            <h3>Гарантия</h3>
                            <p>Мы предоставляем гарантию на стойкое покрытие гель-лаком и гелем в течение 7 дней после нанесения.</p>
                        </div>
                        <div class="company_specifications">
                            <h3>Расположение</h3>
                            <p>Наш салон находится по адресу Юрша 100</p>
                        </div>
                        <div class="company_specifications">
                            <h3>Опоздание на услуги</h3>
                            <p>При опоздании более чем на 10 минут мастер оставляет за собой права отказать в оказание услуги</p>
                        </div>
                    </div>
                    <div class="information_company">
                        <img src="images/company.jpg" alt="company">
                    </div>
                    <div class="company_specifications_right">
                        <div class="company_specifications">
                            <h3>Стоимость</h3>
                            <p>Приемлемые цены за услуги</p>
                        </div>
                        <div class="company_specifications">
                            <h3>Доступность</h3>
                            <p>Салон находится в хорошо доступном месте</p>
                        </div>
                        <div class="company_specifications">
                            <h3>Отмена записи</h3>
                            <p>При первой отмене записи менее чем за 3 часа до ее начала, последующую запись мы сможем оформить только по предоплате в размере 500₽.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer">
                <img src="images/logo1.png" alt="логотип" class="logo_img">
                <ul class="ul_menu_footer">
                    <li><a href="#news">Новости</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="company.html">О нас</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
                <div class="social_network">
                    <p>Следите за нами</p>
                    <a href="https://vk.com/oduvanchik_16"><img src="images/VK.png" alt="vk"></a>
                </div>
            </div>     
        </div>
    </footer>
</body>
</html>