<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� �����");
?> 
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "personal", Array(
	"USE_CAPTCHA" => "Y",	// ������������ ������ �� �������������� ��������� (CAPTCHA) ��� ���������������� �������������
	"OK_TEXT" => "�������, ���� ��������� ����������.",	// ���������, ��������� ������������ ����� ��������
	"EMAIL_TO" => "",	// E-mail, �� ������� ����� ���������� ������
	"REQUIRED_FIELDS" => array(	// ������������ ���� ��� ����������
		0 => "NAME",
		1 => "EMAIL",
		2 => "MESSAGE",
	),
	"EVENT_MESSAGE_ID" => "",	// �������� ������� ��� �������� ������
	),
	false
);?>

<h1>���������� ����������</h1>
 
<div class="hr"></div>
 
<ul> 	 
  <li>E-mail: <a href="mailto:19Victoria84@gmail.com">19Victoria84@gmail.com</a>.</li>
 
  <li>Skype: Fadeeva_Victoria.</li>
 </ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>