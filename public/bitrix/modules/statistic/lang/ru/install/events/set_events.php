<?
$MESS ['STATISTIC_ACTIVITY_EXCEEDING_NAME'] = "���������� ������ ����������";
$MESS ['STATISTIC_ACTIVITY_EXCEEDING_DESC'] = "#ACTIVITY_TIME_LIMIT# - �������� �������� �������
#ACTIVITY_HITS# - ���-�� ����� �� �������� �������� �������
#ACTIVITY_HITS_LIMIT# - ������������ ���-�� ����� �� �������� �������� ������� (����� ����������)
#ACTIVITY_EXCEEDING# - ���������� ���-�� �����
#CURRENT_TIME# - ������ ���������� (����� �� �������)
#DELAY_TIME# - ������������ ����������
#USER_AGENT# - UserAgent
#SESSION_ID# - ID ������
#SESSION_LINK# - ������ �� ������
#SERACHER_ID# - ID ����������
#SEARCHER_NAME# - ������������ ����������
#SEARCHER_LINK# - ������ �� ������ ����� ����������
#VISITOR_ID# - ID ����������
#VISITOR_LINK# - ������ �� ������� ����������
#STOPLIST_LINK# - ������ ��� ���������� ���������� � ����-����
";
$MESS ['STATISTIC_DAILY_REPORT_NAME'] = "���������� ���������� �����";
$MESS ['STATISTIC_DAILY_REPORT_DESC'] = "#EMAIL_TO# - email �������������� �����
#SERVER_TIME# - ����� �� ������� � ������ ������� ������
#HTML_HEADER# - �������� ���� HTML + CSS �����
#HTML_COMMON# - ������� ������������ ����� (����, ������, �����, ����������, �������) (HTML)
#HTML_ADV# - ������� ��������� �������� (TOP 10) (HTML)
#HTML_EVENTS# - ������� ����� ������� (TOP 10) (HTML)
#HTML_REFERERS# - ������� ����������� ������ (TOP 10) (HTML)
#HTML_PHRASES# - ������� ��������� ���� (TOP 10) (HTML)
#HTML_SEARCHERS# - ������� ���������� ����� (TOP 10) (HTML)
#HTML_FOOTER# - �������� ���� HTML
";
$MESS ['STATISTIC_DAILY_REPORT_SUBJECT'] = "#SERVER_NAME#: ���������� ����� (#SERVER_TIME#)";
$MESS ['STATISTIC_DAILY_REPORT_MESSAGE'] = "#HTML_HEADER#
<font class='h2'>���������� ���������� ����� <font color='#A52929'>#SITE_NAME#</font><br>
������ �� <font color='#0D716F'>#SERVER_TIME#</font></font>
<br><br>
<a class='tablebodylink' href='http://#SERVER_NAME#/bitrix/admin/stat_list.php?lang=#LANGUAGE_ID#'>http://#SERVER_NAME#/bitrix/admin/stat_list.php?lang=#LANGUAGE_ID#</a>
<br>
<hr><br>
#HTML_COMMON#
<br>
#HTML_ADV#
<br>
#HTML_REFERERS#
<br>
#HTML_PHRASES#
<br>
#HTML_SEARCHERS#
<br>
#HTML_EVENTS#
<br>
<hr>
<a class='tablebodylink' href='http://#SERVER_NAME#/bitrix/admin/stat_list.php?lang=#LANGUAGE_ID#'>http://#SERVER_NAME#/bitrix/admin/stat_list.php?lang=#LANGUAGE_ID#</a>
#HTML_FOOTER#
";
$MESS ['STATISTIC_ACTIVITY_EXCEEDING_SUBJECT'] = "#SERVER_NAME#: �������� ����� ����������";
$MESS ['STATISTIC_ACTIVITY_EXCEEDING_MESSAGE'] = "�� ����� #SERVER_NAME# ���������� �������� ������������� ����� ����������.

������� � #CURRENT_TIME# ���������� ������������ �� #DELAY_TIME# ���.

����������  - #ACTIVITY_HITS# ����� �� #ACTIVITY_TIME_LIMIT# ���. (����� - #ACTIVITY_HITS_LIMIT#)
����������  - #VISITOR_ID#
������      - #SESSION_ID#
���������   - [#SERACHER_ID#] #SEARCHER_NAME#
UserAgent   - #USER_AGENT#

>===============================================================================================
��� ���������� � ����-���� �������������� ������������� �������:
http://#SERVER_NAME##STOPLIST_LINK#
��� ��������� ������ ���������� �������������� ������������� �������:
http://#SERVER_NAME##SESSION_LINK#
��� ��������� �������� ���������� �������������� ������������� �������:
http://#SERVER_NAME##VISITOR_LINK#
��� ��������� ���������� ����� ���������� �������������� ������������� �������:
http://#SERVER_NAME##SEARCHER_LINK#
";
?>