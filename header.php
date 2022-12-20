<?php 

   $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>B2B Landing</title>
</head>
<body id="up">

<header class="header sticky z-40">
   <div class="header-img absolute">
      <img src="./assets/images/header-bg.png" alt="">
   </div>
   <div class="container flex items-center justify-between mx-auto">
      <div class="logo">
         <a class="block" href="index.php">
            <img src="./assets/images/logo.png" alt="">
         </a>
      </div>
      <nav class="nav">
         <ul class="flex items-center">
            <li class="relative">
               <a class="block relative" href="brands.php">
                  Hakkımızda
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="brands.php">
                  Neden Biz?
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="product.php">
                  Ürünler
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="product2.php">
                  Ürünler2
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="">
                  S.S.S
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="contact.php">
                  İletişim
               </a>
            </li>
         </ul>
      </nav>
      <div class="user-action">
         <ul class="flex items-center">
            <li class="relative">
               <a class="flex items-center" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M87.956 73.232A44.292 44.292 0 0 0 94.5 50.001V50a44.293 44.293 0 0 0-6.544-23.232l-.024-.039a44.502 44.502 0 0 0-75.864 0l-.024.039a44.513 44.513 0 0 0 0 46.464l.025.04a44.502 44.502 0 0 0 75.863-.001ZM55.688 86.873a10.814 10.814 0 0 1-2.89 1.996 6.521 6.521 0 0 1-5.597 0 13.621 13.621 0 0 1-5.048-4.442 39.775 39.775 0 0 1-5.747-12.471q6.79-.418 13.594-.426 6.801 0 13.595.426a50.198 50.198 0 0 1-2.438 6.712 25.803 25.803 0 0 1-5.469 8.205ZM10.587 52.5h17.949a88.305 88.305 0 0 0 1.623 14.914q-7.36.648-14.682 1.78a39.23 39.23 0 0 1-4.89-16.694Zm4.89-21.693q7.319 1.134 14.687 1.78A88.15 88.15 0 0 0 28.538 47.5H10.587a39.23 39.23 0 0 1 4.89-16.693Zm28.835-17.68a10.811 10.811 0 0 1 2.89-1.996 6.521 6.521 0 0 1 5.597 0 13.621 13.621 0 0 1 5.048 4.442 39.775 39.775 0 0 1 5.747 12.471q-6.79.418-13.594.426-6.801 0-13.595-.426a50.19 50.19 0 0 1 2.438-6.712 25.803 25.803 0 0 1 5.469-8.205ZM89.413 47.5H71.464a88.312 88.312 0 0 0-1.623-14.914q7.36-.648 14.682-1.78a39.23 39.23 0 0 1 4.89 16.694ZM35.188 67.025a82.696 82.696 0 0 1-1.65-14.525h32.925a82.678 82.678 0 0 1-1.647 14.526q-7.4-.486-14.816-.496-7.41 0-14.812.495Zm29.624-34.05a82.702 82.702 0 0 1 1.65 14.525H33.538a82.68 82.68 0 0 1 1.647-14.526q7.4.486 14.816.496 7.41 0 14.812-.496Zm6.65 19.525h17.951a39.23 39.23 0 0 1-4.89 16.693q-7.32-1.134-14.687-1.78A88.146 88.146 0 0 0 71.462 52.5Zm10.063-26.295q-6.4.923-12.837 1.462a57.018 57.018 0 0 0-2.975-8.396 35.48 35.48 0 0 0-4.14-7.045 39.492 39.492 0 0 1 19.952 13.979ZM22.07 22.069a39.487 39.487 0 0 1 16.356-9.843c-.094.122-.19.238-.282.361a45.643 45.643 0 0 0-6.822 15.08q-6.438-.545-12.846-1.462a39.825 39.825 0 0 1 3.594-4.136Zm-3.594 51.726q6.399-.923 12.837-1.462a57.018 57.018 0 0 0 2.975 8.396 35.484 35.484 0 0 0 4.14 7.045 39.492 39.492 0 0 1-19.952-13.979Zm59.456 4.136a39.486 39.486 0 0 1-16.356 9.843c.094-.122.19-.238.282-.361a45.643 45.643 0 0 0 6.822-15.08q6.438.545 12.846 1.462a39.825 39.825 0 0 1-3.594 4.136Z" data-original="#000000" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"/></svg>
                  <span class="block">TR</span>
               </a>
               <div class="action-drop absolute">
                  <ul>
                     <li><a class="block" href="">Türkçe</a></li>
                     <li><a class="block" href="">English</a></li>
                     <li><a class="block" href="">عربي</a></li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
   </div>
</header>