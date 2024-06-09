<?
$arResult['LOGOUT_LINK'] = $APPLICATION->GetCurPageParam("logout=yes&".bitrix_sessid_get(), array(
	"login",
	"logout",
	"register",
	"forgot_password",
	"change_password")
);
