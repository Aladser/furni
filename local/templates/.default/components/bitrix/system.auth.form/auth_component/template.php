<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	CJSCore::Init();
?>

<div class="bx-system-auth-form">

<?if($arResult["FORM_TYPE"] == "login"):?>

	<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
		<div class="hd_loginform">
			<span class="hd_title_loginform">Войти на сайт</span>
			<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
				<?if($arResult["BACKURL"] <> ''):?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
				<?endif?>
				<?foreach ($arResult["POST"] as $key => $value):?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?endforeach?>
				<input type="hidden" name="AUTH_FORM" value="Y" />
				<input type="hidden" name="TYPE" value="AUTH" />

				<input name="USER_LOGIN" placeholder="Логин" type="text">
				<input name="USER_PASSWORD" placeholder="Пароль" type="password">			
				<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="hd_forgotpassword">Забыли пароль</a>
				
				<div class="head_remember_me" style="margin-top: 10px">
					<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
					<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
				</div>				
				<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
			</form>
			<span class="hd_close_loginform">Закрыть</span>
		</div>
	</span>

<?
else:
?>
			
	<span class="hd_sing">
		<?=$arResult["USER_NAME"]?>
		<a href="<?=$arResult["PROFILE_URL"]?>">[<?=$arResult["USER_LOGIN"]?>]</a> 
	</span><br>
	<a href="<?=$arResult['LOGOUT_LINK']?>" class="hd_signup">Выйти</a>										

<?endif?>
</div>
