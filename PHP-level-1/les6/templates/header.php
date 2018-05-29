<?php
  echo
'<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Index</title>
  <link rel="stylesheet" href="styles/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="styles/main.css">
  
</head>

<div class="header">
    <div class="container header_flex">
      <a class="logo" href="index.html">
        <img src="img/logo.png" alt="logo"><span>BRAN</span><span class="d">D</span></a>
      
      <!--Browse-->
      
      <form>
        <select class="browse">
          <option value="" selected>browse</option>
          <option value="" disabled>WOMEN</option>
          <option value="">Dresses</option>
          <option value="">Tops</option>
          <option value="">Sweaters/Knits</option>
          <option value="">Jackets/Coats</option>
          <option value="">Blazers</option>
          <option value="">Denim</option>
          <option value="">Leggings/Pants</option>
          <option value="">Skirts/Shorts</option>
          <option value="">Accessories</option>
          <option value="" disabled>MEN</option>
          <option value="">Tees/Tank tops</option>
          <option value="">Shirts/Polos</option>
          <option value="">Sweaters</option>
          <option value="">Sweatshirts/Hoodies</option>
          <option value="">Blazers</option>
          <option value="">Jackets/vests</option>
        </select>
        <input type="search" class="search" placeholder="Search for Item...">
        <a href="#" class="button_search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
      </form>
      <a href="cart.html" class="cart"><img src="img/cart.png" alt="cart"></a>
      <a href="#" class="my_account">
        My Account <i class="fa fa-caret-down" aria-hidden="true"></i>
      </a>
    
    </div>
  </div>
  
  <!--Menu-->
  
  <div class="container">
    <nav>
      <ul class="nav">
        <li><a href="index.html">HOME</a></li>
        <li><a href="product.html">MAN</a></li>
        <li><a href="product.html">WOMEN</a></li>
        <li><a href="product.html">KIDS</a></li>
        <li><a href="product.html">ACCOSERIESE</a></li>
        <li><a href="product.html">FEATURED</a></li>
        <li><a href="product.html">HOT DEALS</a></li>
        
        <!--Mega Menu-->
        
        <li class="mega_menu">
          <ul class="flex_mega_menu">
            <li class="women">
              <span>WOMEN</span>
              <ul>
                <li><a href="product.html">Dresses</a></li>
                <li><a href="product.html">Tops</a></li>
                <li><a href="product.html">Sweaters/Knits</a></li>
                <li><a href="product.html">Jackets/Coats</a></li>
                <li><a href="product.html">Blazers</a></li>
                <li><a href="product.html">Denim</a></li>
                <li><a href="product.html">Leggings/Pants</a></li>
                <li><a href="product.html">Skirts/Shorts</a></li>
                <li><a href="product.html">Accessories</a></li>
              </ul>
            </li>
            <li class="women">
              <span>WOMEN</span>
              <ul>
                <li><a href="product.html">Dresses</a></li>
                <li><a href="product.html">Tops</a></li>
                <li><a href="product.html">Sweaters/Knits</a></li>
                <li><a href="product.html">Jackets/Coats</a></li>
              </ul>
            </li>
            <li class="women">
              <span>WOMEN</span>
              <ul>
                <li><a href="product.html">Dresses</a></li>
                <li><a href="product.html">Tops</a></li>
                <li><a href="product.html">Sweaters/Knits</a></li>
              </ul>
            </li>
            <li class="women">
              <span>WOMEN</span>
              <ul>
                <li><a href="product.html">Dresses</a></li>
                <li><a href="product.html">Tops</a></li>
                <li><a href="product.html">Sweaters/Knits</a></li>
                <li><a href="product.html">Jackets/Coats</a></li>
              </ul>
            </li>
            <li class="super_sale">
              <a href="product.html">SUPER SALE!</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>';
?>