<?
define('NEED_AUTH', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователь");

if (isset($_REQUEST['backurl']) && strlen($_REQUEST['backurl']> 0)) {
    LocalREdirect($backurl);
}
?>

<p>Успешная авторизация</p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>