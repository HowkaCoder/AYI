<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Portfolio </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /></head>
<body>
<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#">Портфо<span>лио.</span></a></div>
        <ul class="menu">
            <li><a href="#home">Главная</a></li>
            <li><a href="#about">Обо мне</a></li> 
            <li><a href="#services">Услуги</a></li>
            <li><a href="#skills">Навыки</a></li>
            <li><a href="#teams">Команда</a></li>
            <li><a href="#contact">Контакты</a></li>
            <li><a href="<?php echo e(route('en')); ?>">En</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars" aria-hidden="true"></i>
        </div>
    </div>
</nav>

<!-- home  -->
<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Привет , меня зовут</div>
            <div class="text-2">Давран Хожаниязов</div>
            <div class="text-3">И я <span>Программист</span></div>
            <a href="#">Найми меня</a>
        </div>
    </div>
</section>


<!-- About -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">Обо мне</h2>
        <div class="about-content">
            <div class="column left">
                <img src="images/davran.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text">Я Давран и  я <span>Программист</span></div>
                <p>Привет , меня зовут Давран. Мне 15 и я интересуюсь разработкой веб-сайтов и приложении. Для меня программирование это не просто трудовой процесс, но ещё творчество и увлечение. Кроме этого я интересуюсь бизнес-стартапами . маркетингом и т.д. Мое хобби это писать коды(фиксить баги) , изучение английского языка  , рисование , просмотр аниме и т.д. Высокая степень ответственности за реализацию проектов. Всегда стараюсь найти более короткие и эффективные пути. Очень общительный оптимист , можно сказать экстраверт . Дружелюбный , всегда стараюсь находить верных друзей и расширить мои круг друзей . Всегда стараюсь развиваться и не стоять на месте , развиваться всехсторонно . Буду рад со всеми поработать</p>
                <a href="#">Скачать резюме</a>
            </div>
        </div>

    </div>
</section>

<!-- Service  -->
<section class="services" id="services">
    <div class="max-width">
        <h2 class="title">Мои услуги</h2>
        <div class="serv-content">
            <div class="card">
            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <div class="text">Web программирование</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem error iste quasi illo assumenda ipsam!</p>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <i class="fas fa-chart-line"></i>
                    <div class="text">Реклама</div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem error iste quasi illo assumenda ipsam!</p>
                </div>
            </div>

            
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div class="text">Программное обеспечение</div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem error iste quasi illo assumenda ipsam!</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Skiils  -->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">Мои навыки</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">Мои навыки и опыт</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate adipisci corporis facere illo amet qui animi quod sed molestiae est alias exercitationem laborum fuga iusto totam aliquid provident maxime, neque modi nobis debitis explicabo! Nihil odit exercitationem nostrum repellat minus modi dignissimos! Rerum explicabo dignissimos ea repellat sit alias animi, adipisci vitae repudiandae fugiat culpa saepe maiores commodi natus!</p>                    
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span>70%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span>70%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>JS</span>
                        <span>80%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>90%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MySQL</span>
                        <span>70%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- teams  -->
<section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title">Моя команда</h2>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                    <img src="images/ilon.jpg" alt="">
                    <div class="text">Имя</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/uorren-baffet-ne-vremja-dlja-obligacii-vo-chto-seichas-investirovat.-photo-big.jpg" alt="">
                    <div class="text">Имя</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/davran.jpg" alt="">
                    <div class="text">Имя</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/866445.jpg" alt="">
                    <div class="text">Имя</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="images/gettyimages-501128855-612x612.jpg" alt="">
                    <div class="text">Имя</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- contact -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Свяжитесь со мной</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in touch</div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, omnis debitis. Recusandae laudantium libero neque, eligendi laboriosam maxime sunt nam, quos architecto nulla veniam esse maiores iusto mollitia ipsa. Laudantium assumenda, rerum eius repellendus amet officia doloribus exercitationem minima autem?</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Имя</div>
                            <div class="sub-title">Давран Хожаниязов</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Адрес</div>
                            <div class="sub-title">Нукус , Узбекистан</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">kastiilbot12@gmail.com</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="column right">
                <div class="text">Напишите мне</div>
                <form action="php/email.php" method="post">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="name" placeholder="Имя" required>
                        </div>
                        
                        <div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Тема сообщения" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="text"  cols="30" rows="10" placeholder="сообщения......" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Отправить сообщения</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- footer  -->
<footer>
    <span>Created By <a href="#"> Me </a> | <span class="far fa-copyright"></span> 2022 All rights reserved </span>
</footer>





<script src="script.js"></script>
</body>
</html><?php /**PATH C:\OpenServer\domains\portfolio\AYI\API\resources\views/index_ru.blade.php ENDPATH**/ ?>