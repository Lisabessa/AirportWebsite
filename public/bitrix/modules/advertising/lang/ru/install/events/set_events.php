<?
$MESS ['ADV_BANNER_STATUS_CHANGE_NAME'] = "��������� ������ �������";
$MESS ['ADV_BANNER_STATUS_CHANGE_DESC'] = "#EMAIL_TO# - EMail ���������� ��������� (#OWNER_EMAIL#)
#ADMIN_EMAIL# - EMail ������������� ������� ���� \"�������� ��������\" � \"�������������\"
#ADD_EMAIL# - EMail ������������� ������� ����� ���������� ��������� ���������
#STAT_EMAIL# - EMail ������������� ������� ����� ��������� �������� ��������
#EDIT_EMAIL# - EMail ������������� ������� ����� ����������� ��������� ����� ���������
#OWNER_EMAIL# - EMail ������������� ������� ����� ���� ����� �� ��������
#BCC# - ������� ����� (#ADMIN_EMAIL#)
#ID# - ID �������
#CONTRACT_ID# - ID ���������
#CONTRACT_NAME# - ��������� ���������
#TYPE_SID# - ID ����
#TYPE_NAME# - ��������� ����
#STATUS# - ������
#STATUS_COMMENTS# - ����������� � �������
#NAME# - ��������� �������
#GROUP_SID# - ������ �������
#INDICATOR# - ������������ �� ������ �� ����� ?
#ACTIVE# - ���� ���������� ������� [Y | N]
#MAX_SHOW_COUNT# - ������������ ���������� ������� �������
#SHOW_COUNT# - ������� ��� ������ ��� ������� �� �����
#MAX_CLICK_COUNT# - ������������ ���������� ������ �� ������
#CLICK_COUNT# - ������� ��� �������� �� ������
#DATE_LAST_SHOW# - ���� ���������� ������ �������
#DATE_LAST_CLICK# - ���� ���������� ����� �� ������
#DATE_SHOW_FROM# - ���� ������ ������ �������
#DATE_SHOW_TO# - ���� ��������� ������ �������
#IMAGE_LINK# - ������ �� ����������� �������
#IMAGE_ALT# - ����� ����������� ��������� �� �����������
#URL# - URL �� �����������
#URL_TARGET# - ��� ���������� URL �����������
#CODE# - ��� �������
#CODE_TYPE# - ��� ���� ������� (text | html)
#COMMENTS# - ����������� � �������
#DATE_CREATE# - ���� �������� �������
#CREATED_BY# - ��� ��� ������ ������
#DATE_MODIFY# - ���� ��������� �������
#MODIFIED_BY# - ��� ������� ������
";
$MESS ['ADV_BANNER_STATUS_CHANGE_SUBJECT'] = "[BID##ID#] #SITE_NAME#: ��������� ������ ������� - [#STATUS#]";
$MESS ['ADV_BANNER_STATUS_CHANGE_MESSAGE'] = "������ ������� # #ID# ��������� �� [#STATUS#].

>=================== ��������� ������� ===============================

������   - [#ID#] #NAME#
�������� - [#CONTRACT_ID#] #CONTRACT_NAME#
���      - [#TYPE_SID#] #TYPE_NAME#
������   - #GROUP_SID#

----------------------------------------------------------------------

����������: #INDICATOR#

������    - [#DATE_SHOW_FROM# - #DATE_SHOW_TO#]
�������   - #SHOW_COUNT# / #MAX_SHOW_COUNT# [#DATE_LAST_SHOW#]
��������  - #CLICK_COUNT# / #MAX_CLICK_COUNT# [#DATE_LAST_CLICK#]
���� ���. - [#ACTIVE#]
������    - [#STATUS#]
�����������:
#STATUS_COMMENTS#
----------------------------------------------------------------------

����������� - [#IMAGE_ALT#] #IMAGE_LINK#
URL         - [#URL_TARGET#] #URL#

���: [#CODE_TYPE#]
#CODE#

>=====================================================================

������  - #CREATED_BY# [#DATE_CREATE#]
������� - #MODIFIED_BY# [#DATE_MODIFY#]

��� ��������� ���������� ������� �������������� �������:
http://#SERVER_NAME#/bitrix/admin/adv_banner_edit.php?ID=#ID#&CONTRACT_ID=#CONTRACT_ID#&lang=#LANGUAGE_ID#

������ ������������� �������������.
";
$MESS ['ADV_CONTRACT_INFO_NAME'] = "��������� ���������� ���������";
$MESS ['ADV_CONTRACT_INFO_DESC'] = "#MESSAGE# - ���������
#EMAIL_TO# - EMail ���������� ��������� (#OWNER_EMAIL#)
#ADMIN_EMAIL# - EMail ������������� ������� ���� \"�������� ��������\" � \"�������������\"
#ADD_EMAIL# - EMail ������������� ������� ����� ���������� ��������� ���������
#STAT_EMAIL# - EMail ������������� ������� ����� ��������� ���������� �������� ��������
#EDIT_EMAIL# - EMail ������������� ������� ����� ����������� ��������� ����� ���������
#OWNER_EMAIL# - EMail ������������� ������� ����� ���� ����� �� ��������
#BCC# - ������� ����� (#ADD_EMAIL#)
#ID# - ID ���������
#INDICATOR# - ������������ �� ������� ��������� �� ����� ?
#ACTIVE# - ���� ���������� ��������� [Y | N]
#NAME# - ��������� ���������
#DESCRIPTION# - �������� ���������
#MAX_SHOW_COUNT# - ������������ ���������� ������� ���� �������� ���������
#SHOW_COUNT# - ������� ��� � ����� �������� ������� ���������
#MAX_CLICK_COUNT# - ������������ ���������� ������ �� ��� ������� ���������
#CLICK_COUNT# - ���������� ������ �� ��� ������� ���������
#BANNERS# - ���������� �������� ���������
#DATE_SHOW_FROM# - ���� ������ ������ ��������
#DATE_SHOW_TO# - ���� ��������� ������ ��������
#DATE_CREATE# - ���� �������� ���������
#CREATED_BY# - ��� ��� ������ ��������
#DATE_MODIFY# - ���� ��������� ���������
#MODIFIED_BY# - ��� ��� ������� ��������
";
$MESS ['ADV_CONTRACT_INFO_SUBJECT'] = "[CID##ID#] #SITE_NAME#: ��������� ���������� ���������";
$MESS ['ADV_CONTRACT_INFO_MESSAGE'] = "#MESSAGE#
��������: [#ID#] #NAME#
#DESCRIPTION#
>================== ��������� ��������� ==============================

����������: #INDICATOR#

������    - [#DATE_SHOW_FROM# - #DATE_SHOW_TO#]
��������  - #SHOW_COUNT# / #MAX_SHOW_COUNT#
��������  - #CLICK_COUNT# / #MAX_CLICK_COUNT#
���� ���. - [#ACTIVE#]

��������  - #BANNERS#
>=====================================================================

������  - #CREATED_BY# [#DATE_CREATE#]
������� - #MODIFIED_BY# [#DATE_MODIFY#]

��� ��������� ���������� ��������� �������������� �������:
http://#SERVER_NAME#/bitrix/admin/adv_contract_edit.php?ID=#ID#&lang=#LANGUAGE_ID#

������ ������������� �������������.
";
?>