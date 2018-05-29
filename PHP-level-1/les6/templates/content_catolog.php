<?php
  echo
    "<div class='new_arrivals_header'>
    <div class='container new_arrivals_flex'>
      <h1>NEW ARRIVALS</h1>

      <!--Bread Crumbs-->

      <ul class='bread_crumbs'>
        <li><a href='index.html'>HOME / </a></li>
        <li><a href='#'>MEN / </a></li>
        <li class='active_crumb'><a href='#'>NEW ARRIVALS </a></li>
      </ul>
    </div>
  </div>";
  include 'templates/left_menu.php';
  echo
    "<!--			Filter Top-->

		<div class='filter_top'>
			<div class='trending_now'>
				<p>Trending now</p>
				<a href='#'>Bohemian </a> |
				<a href='#'>Floral </a> |
				<a href='#'>Lace</a>
				<a href='#'>Floral </a> |
				<a href='#'>Lace </a> |
				<a href='#'>Bohemian</a>
			</div>


			<div class='size'>
				<p>size</p>
				<form method='post'>
					<div class='size_checkbox'>
						<input type='checkbox' name='xxs'><span>XXS</span>
						<input type='checkbox' name='xs'><span>XS</span>
						<input type='checkbox' name='s'><span>S</span>
						<input type='checkbox' name='m'><span>M</span>
						<input type='checkbox' name='l'><span>L&ensp;&thinsp;&thinsp;&thinsp;&thinsp;</span>
						<input type='checkbox' name='xl'><span>XL</span>
						<input type='checkbox' name='xxl'><span>XXL</span>
					</div>

					<p>price</p>
					<!--					<input type='range' min='10' max='99999'>-->
				</form>
			</div>

			<div class='sort'>
				<div class='sort_by'>
					Sort By
					<select>
					<option selected>Name</option>
				</select>
				</div>
				<div class='show_items'>
					Show
					<select>
					<option selected>09</option>
				</select>
				</div>
			</div>
		</div>
    <div class='Featured_Items new_arrivals'>";
?>
    <? $new_arrivals = new_arrivals();?>
    <? foreach ($new_arrivals as $item) : ?>
			<div class='item'>
        <a href="<?=$item['src']?>">
        <img src="<?=$item['photo']?>" alt="<?=$item['name']?>"><strong><?=$item['name']?><span>$<?=$item['coast']?></span></strong></a>
        <a href='#' class='add_to_cart'><img src='img/cart_wite.png' alt='cart'>Add to Cart</a>
        <a href='#' class='button_refresh'><img src='img/forma-1.png' alt='re'></a>
        <a href='#' class='button_favorite'><img src='img/button_favorite.png' alt='fav'></a>
			</div>
    <? endforeach; ?>
<? echo
	"</div>
	<div class='pages'>
	<p># страниц с товарами</p><a href='#'>View All</a></div>
</div>"
?> 




