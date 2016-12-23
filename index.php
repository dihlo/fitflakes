<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fitflakes
 */

get_header(); ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FitFlakes</title>
    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Roboto:400,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Philosopher|Russo+One&amp;subset=cyrillic" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid">
      <div id="home" class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 background_img">
         <nav id="menu" class="navbar navbar-default navbar-fixed-top navbar-inverse">
           <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">FitFlakes</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li ><a href="#about">О нас <span class="sr-only">(current)</span></a></li>
                  <li><a href="#products_us">Наши продукты</a></li>
                  <li><a href="#">Заказать</a></li>
                  <li><a href="#contacts_us">Контакты</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div id="fitflakes_landing" class="">          
            <h1 class="h1_text">Fit Flakes</h1>
            <h2 class="h2_text_logo">Полезная Гранола</h2>  
          </div>
          <div class="do_zakaz">
            <div class="margin-top-a"></div>
            <a href="#">ЗАКАЗАТЬ</a>
          </div>          
          <div class="button_down">
            <a href="#"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> </a>
          </div>
        </div>
      </div>
      <div id="about" class="row about_ingridient"> 
        <div class="col-xs-12 col-md-12 col-lg-12">
          <h2 class="logo about_1 about_text_color">Из чего сделан Fit Flakes</h2>
          <div class="border_icon">
            <i class="fa fa-leaf fa-4x i_zindex about_icon_color" aria-hidden="true"></i>
            <div class="line_center_left about_stick_color"></div>
            <div class="line_center_right about_stick_color"></div>               
          </div>         
          <div class="row">
            <div class="food_33 nuts_img_parent">
              <img class='nuts_img' src="images/nuts.png" alt="">       
            </div>
            <div class="food_33">
              <img src="images/honey.png" alt=""> 
            </div>
            <div class="food_33 zlaki_img_parent">
              <img class='zlaki_img' src="images/zlaki.png" alt="">       
            </div>
          </div>
          <div class="food">
            <div class="food_33 col-xs-12 nuts_p_parent">
              <p class='nuts_p'>Орехи</p>          
            </div>
            <div class="food_33 col-xs-12">
              <p>Мёд</p>  
            </div>
            <div class="food_33 col-xs-12 nuts_p_zlaki">
              <p class='zlaki_p'>Злаки</p>       
            </div>
          </div>              
        </div>
      </div>
      <div class="row about_healt">
        <h2 class="logo about_1 about_white">Что Вам даст Fit Flakes</h2>
        <div class="col-xs-12 col-md-3 col-lg-3 healt_center_img">
          <img class='' src="images/1.png" alt="">
          <p>Улушает обмен веществ</p>
          <span>При употреблении гранолы сокращается чувство голода, что позволяет меньше есть в течении дня</span>
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3 healt_center_img">
          <img src="images/2.png" alt="">
          <p>Полезно для пищеварения</p>
          <span>Цельные зерна и натуральные орехи содержат пищевые волокна, которые помогают регулировать пищеварение. Растворимые волокна так же снимают уровень плохого холестерина</span>
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3 healt_center_img">
          <img src="images/3.png" alt="">
          <p>Много витаминов</p>
          <span>Гранола хороший источник полезных жиров, который содержит орехи и семена. Содержит почти все минералы, которые необходимы нам для нашего здоровья.</span>
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3 healt_center_img">
          <img class='' src="images/4.png" alt="">
          <p>Без сахара</p>
          <span>Полностью натуральный продукт и содержит больше витаминов и минералов, чем рафинированные продукты</span>
        </div>               
      </div>       
      <div class="row products_all">
        <div id="products_us" class="vkusi">
          <h2 class="vkusi_h2 logo about_1 products_name_razdel">Вкусы FitFlakes</h2>
        </div>
          <div class="border_icon">
          <i class="fa fa-map-o fa-4x i_zindex" aria-hidden="true"></i>
          <div class="line_center_left about_stick_color"></div>
          <div class="line_center_right about_stick_color"></div>                
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 products">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 products_row_1">
              <div class="col-xs-12 col-md-4 col-lg-4 products_row_1">
                <img src="images/Chocoblast.jpg" alt="Chocoblast">
                <h3>Chocoblast</h3>
                <p>Орехи, 4 злака, шоколад, и еще что-то</p>   
              </div>                          
              <div class="col-xs-12 col-md-4 col-lg-4 products_row_1">
                <img src="images/Energini.jpg" alt="Energini">
                <h3>Energini</h3>
                <p>Орехи, 4 злака, шоколад, и еще что-то</p>   
              </div>                 
              <div class="col-xs-12 col-md-4 col-lg-4 products_row_1">
                <img src="images/Kissberry.jpg" alt="Kissberry">
                <h3>Kissberry</h3>
                <p>Орехи, 4 злака, шоколад, и еще что-то</p>   
              </div>                       
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 products_row_1">
              <div class="col-xs-12 col-md-4 col-lg-4 products_row_1">
                <img src="images/Strawberrycious.jpg" alt="Chocoblast">
                <h3>Strawberrycious</h3>
                <p>Орехи, 4 злака, шоколад, и еще что-то</p>   
              </div>              
              <div class="col-xs-12 col-md-4 col-lg-4 products_row_1">
                <img class='animated flipInX delay-250' src="images/Tropicana.jpg" alt="Energini">
                <h3>Tropicana.jpg</h3>
                <p>Орехи, 4 злака, шоколад, и еще что-то</p>   
              </div>                
              <div class="col-xs-12 col-md-4 col-lg-4 products_row_1">
                <img src="images/BeautyDazzle.jpg" alt="Kissberry">
                <h3>BeautyDazzle</h3>
                <p>Орехи, 4 злака, шоколад, и еще что-то</p>   
              </div>                      
            </div>            
          </div>                      
        </div>
      </div>
      <div class="row">
        <div id="contacts_us" class="contacts_us text-center col-xs-12 col-md-12 col-lg-12">
            <h2 class="logo about_2 form_connect">Свяжитесь с нами</h2>
            <form action="">
              <p><input type="text" class="form_connect_input" placeholder="Ваше Имя"></p>
              <p><input type="text" class="form_connect_input" placeholder="E-mail"></p>
              <p>
                <textarea class="form_connect_input" name="your-message" cols="40" rows="7" aria-invalid="false" placeholder="Сообщение"></textarea> 
              </p>
              <button class="btn btn-success" type="submit"><strong>ОТПРАВИТЬ</strong></button>
            </form>
        </div>
      </div>  
      <div class="row">
        <footer class="bs-docs-footer col-xs-12 col-md-12 col-lg-12">
          <div class="container">
            <p>
              <a href="https://www.instagram.com/fit_flakes/">
                <i class="footer_icon_color fa fa-instagram fa-3x" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="footer_icon_color fa fa-whatsapp fa-3x" aria-hidden="true"></i><p class="phone_h1">+7 914 287 45 30</p>
              </a>
            </p>
            <hr>
            <p>Created by: Бугаев dihlo Андрей &copy; e-mail: dihlo1@yandex.ru</p>
          </div>
        </footer>         
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>

<?php
get_footer();
