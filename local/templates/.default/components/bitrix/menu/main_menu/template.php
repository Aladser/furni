<?
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$APPLICATION->SetAdditionalCSS($this->GetFolder()."/template_style.css");
?>

<style>
	.main-menu__item-text {padding: 0px 41.6667px;}
	.main-menu__item-image {
		background-image: url("favicon.png");
		background-repeat: no-repeat;
		background-size: cover;
		margin: 0.3rem;
	}
</style>

<div class="nv_topnav"><ul>
	
	<? $previousLevel = 0; ?>
	<?foreach($arResult as $arItem):?>
		<!-- закрытие тегов вложенного меню -->
		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

		<?if ($arItem["IS_PARENT"]):?>
			<!-- элементы верхнего меню c вложенным меню -->
			<li>
				<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?> root-item-selected<?else:?> root-item<?endif?>">
					<span class="main-menu__item-text"> <?=$arItem["TEXT"]?> </span> 	
				</a>
				<ul>

		<?else:?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<!-- элементы верхнего меню без вложенного меню -->
				<li>
					<a href="<?=$arItem["LINK"]?>" <?if(isset($arItem['PARAMS']['IMAGE'])):?> class='main-menu__item-image' <?endif?> > 
						<span class="main-menu__item-text"> <?=$arItem["TEXT"]?> </span>
					</a>
				</li>
			<?else:?>
				<!-- элементы вложенного меню -->
				<li class="<?if ($arItem["SELECTED"]):?>item-selected<?endif?>">
					<a href="<?=$arItem["LINK"]?>"> <?=$arItem["TEXT"]?> </a>
				</li>
			<?endif?>
		<?endif?>

		<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
	<?endforeach?>
	<div class="clearboth"></div>

</ul></div>
<div class="menu-clear-left"></div>
