<?

namespace SC;

use \Bitrix\Main\Loader;

class Iblock
{

    private $_aIblocksId = array();

    public function __construct()
    {
        if (!Loader::includeModule("iblock")) {
            throw new Exception("Не найден модуль инфоблоков");
        }
        $this->_getAllIblockId();
    }

    /**
     * возвращает список всех ИБ системы
     *
     * @throws Exception
     */
    public function getAll()
    {
        $aFilter = array("CHECK_PERMISSIONS" => "N");
        $aResult = $this->_getList(array(), $aFilter);
        return $aResult;
    }

    private function _getList($aOrder = array(), $aFilter = array())
    {
        $aResult = array();
        $oDbRes = \CIBlock::GetList($aOrder, $aFilter, false);
        while ($aDbRes = $oDbRes->fetch()) {
            $oProperty = \CIBlockProperty::GetList(array(), array("ACTIVE" => "Y", "IBLOCK_ID" => $aDbRes["ID"]));
            while ($aFields = $oProperty->GetNext()) {
                $aDbRes["PROPERTY"][$aFields["CODE"]] = $aFields;
            }
            $aResult[$aDbRes["CODE"]] = $aDbRes;
        }
        return $aResult;
    }

    private function _getAllIblockId()
    {
        $aFilter = array("CHECK_PERMISSIONS" => "N", "ACTIVE" => "Y");
        $aResult = $this->_getList(array(), $aFilter);
        foreach ($aResult as $aItem) {
            $this->_aIblocksId[$aItem["CODE"]] = $aItem["ID"];
        }
    }

    public function getIdByCode($iIblockCode)
    {
        $iIblockId = 0;
        if (isset($this->_aIblocksId[$iIblockCode]) && $this->_aIblocksId[$iIblockCode] != "") {
            $iIblockId = $this->_aIblocksId[$iIblockCode];
        } else {
            $this->_getAllIblockId();
            if (isset($this->_aIblocksId[$iIblockCode]) && $this->_aIblocksId[$iIblockCode] != "") {
                $iIblockId = $this->_aIblocksId[$iIblockCode];
            }
        }
        return $iIblockId;
    }

    public function getCodeById($iElementId)
    {
        $aFilter = array("CHECK_PERMISSIONS" => "N", "ACTIVE" => "Y", "ID" => $iElementId);
        return $this->_getList(array(), $aFilter);
    }
}
