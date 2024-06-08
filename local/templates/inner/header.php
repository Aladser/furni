<?	
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta charset="utf-8">
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$template_folder='/local/templates/inner'?>
	<script type="text/javascript" src="<?=$template_folder?>/js/jquery-1.8.2.min.js" defer></script>
	<script type="text/javascript" src="<?=$template_folder?>/js/slides.min.jquery.js" defer></script>
	<script type="text/javascript" src="<?=$template_folder?>/js/jquery.carouFredSel-6.1.0-packed.js" defer></script>
	<script type="text/javascript" src="<?=$template_folder?>/js/functions.js" defer></script>

</head>
<body>
	<!--АДМИНКА-->
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tbody><tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br>	
							время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text">
									<input type="submit" value="">
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<a href="" class="hd_singin">Войти на сайт</a><br>
							<a href="" class="hd_signup">Зарегистрироватся</a>
						</td>
					</tr>
				</tbody></table>
				<!--ВЕРХНЕЕ МЕНЮ-->
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main_menu",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => "main_menu",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					)
				);?>
			</div>
		</div>
		
		<!--- // end header area --->
		<div class="bc_breadcrumbs">
			<ul>
				<li><a href="">Каталог</a></li>
				<li><a href="">Мебель</a></li>
				<li><a href="">Выставки и события</a></li>
			</ul>
			<div class="clearboth"></div>
		</div>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
