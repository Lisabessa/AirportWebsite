<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� �������");
?><?$APPLICATION->IncludeComponent("bitrix:iblock.element.add", ".default", array(
	"NAV_ON_PAGE" => "10",
	"USE_CAPTCHA" => "N",
	"USER_MESSAGE_ADD" => "���� ������� ���������. ����� �������� ����������, ����� ������� ������� � ���������� �� ����� ����� �������.",
	"USER_MESSAGE_EDIT" => "���� ������� ���������",
	"DEFAULT_INPUT_SIZE" => "30",
	"RESIZE_IMAGES" => "N",
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "#NATIONAL_NEWS_IBLOCK_ID#",
	"PROPERTY_CODES" => array(
		0 => "NAME",
		1 => "PREVIEW_TEXT",
		2 => "PREVIEW_PICTURE",
	),
	"PROPERTY_CODES_REQUIRED" => array(
		0 => "NAME",
		1 => "PREVIEW_TEXT",
	),
	"GROUPS" => array(
		0 => "1",
		1 => "#GROUPS_ID#",
	),
	#STATUS_SETTINGS#
	"ALLOW_EDIT" => "Y",
	"ALLOW_DELETE" => "Y",
	"ELEMENT_ASSOC" => "CREATED_BY",
	"MAX_USER_ENTRIES" => "50",
	"MAX_LEVELS" => "100000",
	"LEVEL_LAST" => "Y",
	"MAX_FILE_SIZE" => "1000000",
	"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
	"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/nationalnews/add_news/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CUSTOM_TITLE_NAME" => "",
	"CUSTOM_TITLE_TAGS" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
	"CUSTOM_TITLE_IBLOCK_SECTION" => "",
	"CUSTOM_TITLE_PREVIEW_TEXT" => "�����",
	"CUSTOM_TITLE_PREVIEW_PICTURE" => "�����������",
	"CUSTOM_TITLE_DETAIL_TEXT" => "",
	"CUSTOM_TITLE_DETAIL_PICTURE" => "",
	"SEND_EMAIL" => "Y",
	"EMAIL_TO" => "#EMAIL_TO#",
	"SUBJECT" => "��������� ����� �������� �������",
	"EVENT_MESSAGE_ID" => array(),
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>