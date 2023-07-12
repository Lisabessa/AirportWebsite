<?php

namespace SC;

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

use \Bitrix\Main\Page\Asset,
    \Bitrix\Main\Loader;

/**
 * Класс для работы с Heighload-блоками
 *
 */
class HLblock
{

    private $_aHLblocksId = array();

    public function __construct()
    {
        if (!Loader::IncludeModule("highloadblock")) {
            throw new Exception("Не найден модуль хайлоадблоков");
        }
        $this->_getAllHLblockId();
    }

    /**
     * Возвращает список всех HL-блоков системы
     *
     * @throws Exception
     */
    public function getAll()
    {

        $aResult = $this->_getList();

        return $aResult;
    }

    /**
     * Возвращает список HL-блоков по фильтру
     *
     * @param array $aFilter - массив фильтра
     * @return array
     */
    private function _getList($aFilter = array())
    {

        $aResult = array();
        $oHlblocks = HL\HighloadBlockTable::getList(array("filter" => $aFilter));
        while ($aHlblocks = $oHlblocks->fetch()) {
            $aResult[$aHlblocks["NAME"]] = $aHlblocks;
        }

        return $aResult;
    }

    /**
     * Получает список ID всех HL-блоков системы
     *
     */
    private function _getAllHLblockId()
    {

        $aResult = $this->_getList();
        foreach ($aResult as $aItem) {
            $this->_aHLblocksId[$aItem["NAME"]] = $aItem["ID"];
        }
    }

    /**
     * Возвращает ID HL-блока по его имени
     *
     * @param string $iHLblockName
     * @return int
     */
    public function getIdByName($iHLblockName)
    {

        $iIblockId = 0;
        if (isset($this->_aHLblocksId[$iHLblockName]) && $this->_aHLblocksId[$iHLblockName] != "") {
            $iIblockId = $this->_aHLblocksId[$iHLblockName];
        } else {
            $this->_getAllHLblockId();
            if (isset($this->_aHLblocksId[$iHLblockName]) && $this->_aHLblocksId[$iHLblockName] != "") {
                $iIblockId = $this->_aHLblocksId[$iHLblockName];
            }
        }

        return $iIblockId;
    }

    /**
     *  Возвращает имя HL-блока по его ID
     *
     * @param int $iHLblockId
     * @return mixed
     */
    public function getNameById($iHLblockId)
    {

        $aFilter = array("ID" => $iHLblockId);
        $aHLblocks = $this->_getList($aFilter);

        if (isset($aHLblocks) && $aHLblocks) {
            $aHLBlock = current($aHLblocks);
            return $aHLblocks['NAME'];
        } else {
            return false;
        }
    }

    /**
     *  Возвращает экземпляра класса
     *
     * @param string $HLBlockCode
     * @return \Bitrix\Main\ORM\Data\DataManager
     * @throws \Bitrix\Main\SystemException
     */
    public function GetEntityDataClass(string $HLBlockCode): string
    {
        $HLBlockId = $this->getIdByName($HLBlockCode);
        $HLBlock = HL\HighloadBlockTable::getById($HLBlockId)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($HLBlock);
        return $entity->getDataClass();
    }

    /**
     * @param $hlblockName
     * @return \Bitrix\Main\ORM\Data\DataManager
     */
    public function getDataManager($hlblockName)
    {
        return $this->GetEntityDataClass($hlblockName);
    }

    /**
     * @param $hlblockName
     * @param $fields
     * @return int|void
     * @throws \Exception
     */
    public function addElement($hlblockName, $fields)
    {
        $dataManager = $this->getDataManager($hlblockName);
        $result = $dataManager::add($fields);

        if ($result->isSuccess()) {
            return $result->getId();
        }

        $message = $result->getErrors();

        throw new \Exception($message = is_array($message) ? implode(', ', $message) : $message);
    }

    /**
     * @param $hlblockName
     * @param array $params
     * @return array|void
     * @throws \Exception
     */
    public function getElements($hlblockName, $params = [])
    {
        $dataManager = $this->getDataManager($hlblockName);

        return $dataManager::getList($params)->fetchAll();
    }

    /**
     * @param $hlblockName
     * @param array $params
     * @return array|false|mixed
     * @throws \Exception
     */
    public function getElement($hlblockName, $params = [])
    {
        $dataManager = $this->getDataManager($hlblockName);

        return $dataManager::getList($params)->fetch();
    }

    public function updateElement($hlblockName, $primary, $data)
    {
        $dataManager = $this->getDataManager($hlblockName);

        return $dataManager::update($primary, $data);

    }

    public function deleteElement($hlblockName, $primary)
    {
        $dataManager = $this->getDataManager($hlblockName);
        return $dataManager::delete($primary);
    }

}
