<?
$MESS["SECURITY_SITE_CHECKER_EnvironmentTest_NAME"] = "�������� �������� ���������";
$MESS["SECURITY_SITE_CHECKER_SESSION_DIR"] = "���������� �������� ������ ������ �������� ��� ���� ��������� �������������";
$MESS["SECURITY_SITE_CHECKER_SESSION_DIR_DETAIL"] = "��� ����� ��������� ������/�������� ���������� ������, ����� ������� ������ ����������� ��������";
$MESS["SECURITY_SITE_CHECKER_SESSION_DIR_RECOMMENDATION"] = <<<'html'
��������� ��������� �������� ����� ��� ������� ���������� �������� ���� �������� �������� ������ � ��: <a href="/bitrix/admin/security_session.php">������ ������</a>
html;
$MESS["SECURITY_SITE_CHECKER_SESSION_DIR_ADDITIONAL"] = <<<'html'
���������� �������� ������: #DIR#<br>
�����: #PERMS#
html;
$MESS["SECURITY_SITE_CHECKER_COLLECTIVE_SESSION"] = "���������������� � ���������� �������� ������ ��������� ������ ������ ��������";
$MESS["SECURITY_SITE_CHECKER_COLLECTIVE_SESSION_DETAIL"] = "��� ����� ��������� ������/�������� ���������� ������, ����� ������� ������ ����������� ��������";
$MESS["SECURITY_SITE_CHECKER_COLLECTIVE_SESSION_RECOMMENDATION"] = "������� ���������� �������� ���� �������� �������� ������ � ��: <a href=\"/bitrix/admin/security_session.php\">������ ������</a>";
$MESS["SECURITY_SITE_CHECKER_COLLECTIVE_SESSION_ADDITIONAL_OWNER"] = <<<'html'
�������: �������� ����� ���������� �� �������� ������������<br>
����: #FILE#<br>
UID ��������� �����: #FILE_ONWER#<br>
UID �������� ������������: #CURRENT_OWNER#<br>
html;
$MESS["SECURITY_SITE_CHECKER_COLLECTIVE_SESSION_ADDITIONAL_SIGN"] = <<<'html'
�������: ���� ������ �� �������� ������� �������� �����<br>
����: #FILE#<br>
������� �������� �����: #SIGN#<br>
���������� �����: <pre>#FILE_CONTENT#</pre>
html;
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PHP"] = "PHP ������� ����������� � ���������� �������� ����������� ������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PHP_DETAIL"] = "������������ ������ �������� � ���������� ���������� ���� ������, ���� ��� �������� ������������� ������ �������� ������ �������� ��� ����� ��������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PHP_RECOMMENDATION"] = "��������� ��������� ���-������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PHP_DOUBLE"] = "PHP ������� � ������� ����������� (eg php.lala) ����������� � ���������� �������� ����������� ������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PHP_DOUBLE_DETAIL"] = "������������ ������ �������� � ���������� ���������� ���� ������, ���� ��� �������� ������������� ������ �������� ������ �������� ��� ����� ��������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PHP_DOUBLE_RECOMMENDATION"] = "��������� ��������� ���-������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PY"] = "Py ������� ����������� � ���������� �������� ����������� ������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PY_DETAIL"] = "������������ ������ �������� � ���������� ���������� ���� ������, ���� ��� �������� ������������� ������ �������� ������ �������� ��� ����� ��������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_EXECUTABLE_PY_RECOMMENDATION"] = "��������� ��������� ���-������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_HTACCESS"] = ".htaccess ����� �� ������ �������������� Apache � ���������� �������� ����������� ������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_HTACCESS_DETAIL"] = "������������ ������ �������� � ���������� ���������� ���� ������, ���� ��� �������� ������������� ������ �������� ������ �������� ��� ����� ��������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_HTACCESS_RECOMMENDATION"] = "��������� ��������� ���-������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_NEGOTIATION"] = "Apache Content Negotiation �������� � ���������� �������� ����������� ������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_NEGOTIATION_DETAIL"] = "Apache Content Negotiation �� ������������ ��� �������������, �.�. ����� ������� ���������� XSS ���������";
$MESS["SECURITY_SITE_CHECKER_UPLOAD_NEGOTIATION_RECOMMENDATION"] = "��������� ��������� ���-������";
$MESS["SECURITY_SITE_CHECKER_PHP_PRIVILEGED_USER"] = "PHP �������� �� ����� ������������������ ������������";
$MESS["SECURITY_SITE_CHECKER_PHP_PRIVILEGED_USER_DETAIL"] = "������ PHP �� ����� ������������������ ������������ (��������, root) ����� ��������� �� ������������ ������ �������";
$MESS["SECURITY_SITE_CHECKER_PHP_PRIVILEGED_USER_RECOMMENDATION"] = "���������������� ������ ����� �������, ����� PHP ������� �� ����� �������������������� ������������";
$MESS["SECURITY_SITE_CHECKER_PHP_PRIVILEGED_USER_ADDITIONAL"] = "#UID#/#GID#";
$MESS["SECURITY_SITE_CHECKER_BITRIX_TMP_DIR"] = "��������� ����� �������� � �������� �������� ���������� �������";
$MESS["SECURITY_SITE_CHECKER_BITRIX_TMP_DIR_DETAIL"] = "�������� ��������� ������, ����������� ��� ������������� CTempFile, � �������� �������� ���������� ������� �� ������������� � ����� � ����� ��� ������.";
$MESS["SECURITY_SITE_CHECKER_BITRIX_TMP_DIR_RECOMMENDATION"] = <<<'html'
���������� ���������� ��������� "BX_TEMPORARY_FILES_DIRECTORY" � "bitrix/php_interface/dbconn.php" � ��������� ������������ ����.<br>
��������� ��������� ����:<br>
1. �������� ���������� ��� ����� �������. ��������, ��� ����� ���� "/home/bitrix/tmp/www"<br>
2. �������� ��. ��� ����� ��������� ��������� ��������:
<pre>
mkdir -p -m 700 /������/����/�/����������
</pre>
3. � ����� "bitrix/php_interface/dbconn.php" ���������� ��������������� ���������, ����� ������� ������ ������������ ��� ����������:
<pre>
define("BX_TEMPORARY_FILES_DIRECTORY", "/������/����/�/����������");
</pre>
html;
$MESS["SECURITY_SITE_CHECKER_BITRIX_TMP_DIR_ADDITIONAL"] = "������� ����������: #DIR#";
?>
