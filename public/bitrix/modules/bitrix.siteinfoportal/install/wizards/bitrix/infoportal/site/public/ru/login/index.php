<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("���� �� ����");
?>
<p class="notetext">�� ���������������� � ������� ��������������.</p>

<p><a href="/">��������� �� ������� ��������</a></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>