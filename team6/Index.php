<?php
require("config.php");  //Inserting config  
require("functions.php"); //Inserting functions 
require("header.php"); //Inserting header
require("bar.php"); //Inserting navigation bar
session_start();
?>
<!DOCTYPE html> 
<! – start of the nav–>
<section id="home-section" class="hero">
<div class="home-slider owl-carousel">
<div class="slider-item js-fullheight">
<div class="overlay"></div>
<div class="container-fluid p-0">
<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
<img class="one-third order-md-last img-fluid" src="images/bg_1.png" alt="">
<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
<div class="text">
<span class="subheading">#foreveryoung</span>
<div class="horizontal">
<h1 class="mb-4 mt-3">Добро пожаловать в магазин ForeverYoung!</h1>
<p class="mb-4">ОДЕЖДА ИЗ ЮЖНОЙ КОРЕИ</p>
<p><a href="http://f70792o2.beget.tech/contact.html" class="btn-custom">Узнать больше о магазине</a></p>
</div> </div> </div> </div> </div> </div>
<div class="slider-item js-fullheight"> /*add the slider css item*/
<div class="overlay"></div>
<div class="container-fluid p-0">
<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
<img class="one-third order-md-last img-fluid" src="images/bg_2.png" alt="">
<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
<div class="text">
<span class="subheading">#foreveryoung</span>
<div class="horizontal">
<h1 class="mb-4 mt-3">Актуальные новинки и тренды 2020 года</h1>
<p class="mb-4">Поставляем все вещи прямо из Сеула в г.Кокшетау</p> /*text in header*/
<p><a href="products.php" class="btn-custom">Познакомиться с коллекцией</a></p>
</div> </div> </div> </div> </div> </div> </div>
</section>
</section>
<section class="ftco-section bg-light"> /*creating section with needed color and size*/
<div class="container">
<div class="row justify-content-center mb-3 pb-3">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">CКИДКИ %</h2>
</div>
<div id="text"></div><div id="cursor">
</div> </div> </div>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.png" alt=" "> /*link to another page*/
<span class="status">50%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3">
<div class="d-flex">
<div class="cat">
<span>цвет: хаки</span>
</div> </div>
<h3><a href="#">Рубашка</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">8000₸</span><span class="price-sale">4000₸</span></p> </div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span><i class="ion-ios-cart ml-1"></i></span></a>
</p> </div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.png" alt=" ">
<span class="status">20%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3"> /*representation of the text*/
<div class="d-flex">
<div class="cat">
<span>цвет: бежевый</span>
</div> </div>
<h3><a href="#">Пиджак</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">9500₸</span><span class="price-sale">7600₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span><i class="ion-ios-cart ml-1"></i></span></a> /*link to another page*/
</p>
</div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.png" alt=" ">
<span class="status">30%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3"> /*changing the style of the text*/
<div class="d-flex">
<div class="cat">
<span>цвет: черный</span>
</div> </div>
<h3><a href="#">Костюм</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">13000₸</span><span class="price-sale">9100₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span><i class="ion-ios-cart ml-1"></i></span></a>
</p>
</div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.png" alt=" "> /*adding image file*/
<span class="status">50%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3">
<div class="d-flex">
<div class="cat">
<span>цвет: серый</span>
</div> </div>
<h3><a href="#">Юбка</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">8700₸</span><span class="price-sale">4350₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span><i class="ion-ios-cart ml-1"></i></span></a>
</p> </div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column"> /*placing the items in a column*/
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.png" alt=" ">
<span class="status">30%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3">
<div class="d-flex">
<div class="cat">
<span>цвет: хаки/бежевый</span>
</div> </div>
<h3><a href="#">Тренч</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">17000₸</span><span class="price-sale">11900₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span><i class="ion-ios-cart ml-1"></i></span></a>
</p> </div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.png" alt=" ">
<span class="status">10%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3">
<div class="d-flex">
<div class="cat">
<span>цвет: изумрудный</span>
</div> </div>
<h3><a href="#">Костюм</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">13000₸</span><span class="price-sale">11700₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span>
<i class="ion-ios-cart ml-1"></i></span></a>
</p> </div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.png" alt=" ">
<span class="status">20%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3">
<div class="d-flex">
<div class="cat">
<span>цвет: бежевый</span>
</div> </div>
<h3><a href="#">Кардиган</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">9900₸</span><span class="price-sale">7920₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span>
<i class="ion-ios-cart ml-1"></i></span></a>
</p> </div> </div> </div>
<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
<div class="product d-flex flex-column">
<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.png" alt=" ">
<span class="status">40%</span>
<div class="overlay"></div>
</a>
<div class="text py-3 pb-4 px-3">
<div class="d-flex">
<div class="cat">
<span>цвет: белый</span>
</div> </div>
<h3><a href="#">Рубашка</a></h3>
<div class="pricing">
<p class="price"><span class="mr-2 price-dc">12100₸</span><span class="price-sale">7260₸</span></p>
</div>
<p class="bottom-area d-flex px-3">
<a href="products.php" class="buy-now text-center py-2">Перейти в магазин<span>
<i class="ion-ios-cart ml-1"></i></span></a>
</p> </div> </div> </div> </div> </div>
</section>  /*end of the section*/
<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
<div class="row no-gutters">
<div class="col-lg-4">
<div class="choose-wrap divider-one img p-5 d-flex align-items-center" style="background-image: url(images/choose-1.jpg);">
<div class="text text-center text-black px-7">
<span class="subheading">Наша коллекция</span>
<h2>Одежды</h2>
<p><a href="products.php" class="btn btn-black px-3 py-2">Перейти в магазин</a></p> /*link to another page*/
</div> </div> </div>
<div class="col-lg-8">
<div class="row no-gutters choose-wrap divider-two align-items-stretch">
<div class="col-md-12">
<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(images/choose-4.jpg);">
<div class="col-md-7 d-flex align-items-center">
<div class="text text-black px-5">
<span class="subheading">наша коллекция</span>
<h2>Сумок</h2> /*heading*/
<p><a href="products.php" class="btn btn-black px-3 py-2">перейти в магазин</a></p>
</div> </div> </div> </div>
<div class="col-md-12">
<div class="row no-gutters">
<div class="col-md-6">
<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(images/choose-2.jpg);">
<div class="col-md-8 d-flex align-items-end">
<div class="text text-white px-5">
<span class="subheading">узнай больше о</span> /*subheading*/
<h2>forever young</h2>
<p><a href="products.php" class="btn btn-black px-3 py-2">перейти</a></p>
</div> </div> </div> </div>
<div class="col-md-6">
<div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(images/choose-3.jpg);">
<div class="text text-center text-black px-5">
<span class="subheading">Наша коллекция</span>
<h2>Украшений</h2>
<p><a href="products.php" class="btn btn-black px-3 py-2">Перейти в магазин</a></p>
</div> </div> </div> </div> </div> </div> </div> </div> </div>
</section>  
/*the end of the section*/
<section class="ftco-section testimony-section">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="services-flow">
<div class="services-2 p-4 d-flex ftco-animate">
<div class="icon">
<span class="flaticon-bag"></span>
</div>
<div class="text">
<h3>Широкий выбор товаров</h3>
<p class="mb-0">Наш магазин предлагает огромный выбор качественных вещей, обуви и аксессуаров</p>
</div> </div>
<div class="services-2 p-4 d-flex ftco-animate">
<div class="icon">
<span class="flaticon-heart-box"></span>
</div>
<div class="text">
<h3>Выгодные предложения</h3>
<p class="mb-0">Акции, конкурсы, скидки - все это вы найдете у нас </p>
</div> </div>
<div class="services-2 p-4 d-flex ftco-animate">
<div class="icon">
<span class="flaticon-payment-security"></span>
</div>
<div class="text">
<h3>Способы оплаты</h3>
<p class="mb-0">Клиенты могут оплатить покупки наличными или используя карты - MasterCard и Visa</p> /*paraghraph*/
</div> </div>
<div class="services-2 p-4 d-flex ftco-animate">
<div class="icon">
<span class="flaticon-customer-service"></span>
</div>
<div class="text">
<h3>Связь с клиентами</h3>
<p class="mb-0">Клиенты могут задавать интересующие их вопросы в наших социальных сетях</p>
</div> </div> </div> </div>
<div class="col-lg-7">
<div class="heading-section ftco-animate mb-5">
<h2 class="mb-4">Отзывы наших клиентов</h2>
<p>Вы так же можете написать свой отзыв нам на WhatsApp или в комментариях в Instagram </p>
</div>
<div class="carousel-testimony owl-carousel">
<div class="item">
<div class="testimony-wrap">
<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
</div>
<div class="text">
<p class="mb-4 pl-4 line">Купила футболочку. Очень понравилась! Цвет и форма полностью как на картинке! </p>
<p class="name">Алуа Селимжанова</p>
<span class="position">Покупатель</span>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)"> /*image of the customer*/
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
</div>
<div class="text">
<p class="mb-4 pl-4 line">Очень нравится ваш магазин! Вещи всегда качественные и персонал доброжелательный!</p>
<p class="name">Зарина Бегалина</p>
<span class="position">Покупатель</span>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
</div>
<div class="text">
<p class="mb-4 pl-4 line">Купила в первый раз в вашем магазине джинсы, очень понравились! Ношу с удовольствием! Спасибо!</p>
<p class="name">Камила Мухамадиева</p>
<span class="position">Покупатель</span>
</div> </div> </div> </div> </div> </div> </div> </section> </div>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="js/jquery.min.js"></script> //compressed version for saving bandwidth
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> //javascript code necessary for running Bootstrap
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script> //code that would instantiate and use the plugins
<script src="js/label.js"></script>
</body>
</html>
