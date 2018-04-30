<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Crona-group</title>
</head>
<body>
<header class="header ">
    <div class="video-content">
        <div class="vimeo-video" style="padding:56.25% 0 0 0;position:relative;">
            <iframe class="vimeo_player" id="vimeo_player"
                    src="https://player.vimeo.com/video/67658001?autoplay=1&loop=1&title=0&byline=0&portrait=0"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                    webkitallowfullscreen mozallowfullscreen allowfullscreen>
                {{csrf_field()}}
            </iframe>
            <script>
                var iframe = document.querySelector('#vimeo_player');
                var player = new Vimeo.Player(iframe);
                player.setVolume(0);
            </script>
            <div class="overlay-background"></div>
        </div>
        <div class=" main-content_blog">

            <div class="main-content-title">Крона Групп</div>
            <div class="main-content-decription">Крона Групп – центр сертификации продукции, профессиональный,
                надежный партнер для участников ВЭД, имеющий опыт сертификации любых видов продукции
            </div>
            <div class="main-content-price"><a href="" class="main-content-price-href">Узнать
                    стоимость</a></div>
        </div>
    </div>
    <div class="header-container">
        <div class="inner-header">
            <a class="inner-brand" href="/">Крона Групп</a>
            <span class="inner-title">Центр сертификации продукции</span>
        </div>
        <div class="inner-navigation">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#"> Главная </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> О нас </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Услуги </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Инфо</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Онлайн заявка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Контакты</a>
                </li>
            </ul>
        </div>
        <div class="extra-nav">
            <ul class="extra-nav_points">
                <li>ZZZ</li>
                <li> X</li>
            </ul>

        </div>
    </div>

</header>
<main class="main-content">


    <div class="section-about">
        <div class="section-about__title"> Оформляем</div>
        <div class="section-about__content">
            <div class="section-about__item">
                <div class="section-about__item-title">Сертификаты соответствия тех. рглентму ТС</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Декларации соответствия тех. рглентму ТРТС</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Добровольные сертификаты соответствия ГОСТ Р</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Оформление информационных писем
                </div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Сертификаты ИСО</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Декларации соответствия ГОСТ Р</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Разработка технических условий</div>
                <img class="section-about__item-img" src="" alt="">
            </div>

            <div class="section-about__item">
                <div class="section-about__item-title">Оформление протоколов испытаний</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Оформление протоколов испытаний</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
            <div class="section-about__item">
                <div class="section-about__item-title">Оформление протоколов испытаний</div>
                <img class="section-about__item-img" src="" alt="">
            </div>
        </div>
        <div class="content-work container">

            <div class="content-work__desc">
                <p><span style="font-weight: bold">Центр сертификации продукции - Крона Групп </span>, рад
                    предложить
                    Вам
                    полный
                    комплекс
                    услуг по
                    сертификации, декларированию и испытанию продукции и оборудования любой отрасли.
                    Благодаря профессиональному и оперативному подходу, плотному сотрудничеству с
                    государственными органами, лабораториями, научно-исследовательскими институтами и
                    четкому соблюдению законодательства, мы обеспечиваем быстрое и качественное оформление
                    пакета документов.
                <p> Если Вам нужен эффективный результат, комплексное решение и оперативность выполнения –
                    позвоните в наш Центр Сертификации.
                    Мы рады видеть Вас в компании, где ценят Ваше время и отвечают за качество выполняемых
                    услуг! </p>
            </div>
        </div>
    </div>
    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, aspernatur distinctio, dolorem
        ducimus esse est excepturi inventore ipsum, praesentium provident temporibus. Alias, consectetur dicta
        eaque quas quo reiciendis voluptatem.
    </div>


    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput"
                   placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2"
                   placeholder="Another input">
        </div>
    </form>

</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>
</html>





