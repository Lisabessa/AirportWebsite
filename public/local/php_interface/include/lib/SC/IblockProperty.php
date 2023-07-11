<?php

namespace SC;

use Bitrix\Main\Loader;

/**
 * Класс для работы со свойствами инфоблока
 */
class IblockProperty
{
    /**
     * Метод получает варианты значений свойства инфоблока типа список по его символьному коду
     * @param $sPropertyCode
     * @param $iIBlockId
     * @param $sort
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    public function getEnumList($sPropertyCode, $iIBlockId = false, $sort = ["DEF" => "DESC", "SORT" => "ASC"])
    {
        if (!Loader::IncludeModule("iblock")) return false;

        // Получим значения доп.классов
        $aFilter = [
            'PROPERTY_ID' => $sPropertyCode,
        ];
        if ($iIBlockId) {
            $aFilter['IBLOCK_ID'] = $iIBlockId;
        }
        $oResPropertyEnum = \CIBlockPropertyEnum::GetList(
            $sort,
            $aFilter
        );
        $aEnumClassList = array();
        while ($aEnum = $oResPropertyEnum->GetNext()) {
            $aEnumClassList [$aEnum['ID']] = $aEnum;
        }

        return $aEnumClassList;
    }

    /**
     * Метод получает id значения свойства инфоблока типа список по его символьному коду
     * @param string $sPropertyCode
     * @param string $sXmlId
     * @param bool $IBlockId
     * @return bool|int|string
     */
    public static function getEnumListValueByXml($sPropertyCode, $sXmlId, $iIBlockId = false)
    {
        $aValueList = self::getEnumList($sPropertyCode, $iIBlockId);

        foreach ($aValueList as $iKey => $aValue) {
            if ($aValue["XML_ID"] == $sXmlId) {
                return $iKey;
            }
        }

        return false;
    }

    /**
     * Метод получает id значения свойства инфоблока типа список по его символьному коду
     * @param string $sPropertyCode
     * @param int $iId
     * @param bool $IBlockId
     * @return bool|int|string
     */
    public static function getEnumListArrayById($sPropertyCode, $iId, $iIBlockId = false)
    {
        $aValueList = self::getEnumList($sPropertyCode, $iIBlockId);

        foreach ($aValueList as $iKey => $aValue) {
            if ($aValue['ID'] == $iId) {
                return $aValue;
            }
        }

        return false;
    }

    /**
     * Метод получает значение свойства инфоблока типа список по его id
     * @param string $sPropertyCode
     * @param string $iId
     * @param bool $IBlockId
     * @return bool|int|string
     */
    public static function getEnumListXmlById($sPropertyCode, $iId, $iIBlockId = false)
    {
        $aValueList = self::getEnumList($sPropertyCode, $iIBlockId);

        foreach ($aValueList as $iKey => $aValue) {
            if ($aValue['ID'] == $iId) {
                return $aValue['XML_ID'];
            }
        }

        return false;
    }

    /**
     * Метод получает значение свойства инфоблока типа список по его id
     * @param string $sPropertyCode
     * @param string $sXml
     * @param bool $IBlockId
     * @return bool|int|string
     */
    public static function getEnumListIdByXml($sPropertyCode, $sXml, $iIBlockId = false)
    {
        $aValueList = self::getEnumList($sPropertyCode, $iIBlockId);

        foreach ($aValueList as $iKey => $aValue) {
            if ($aValue['XML_ID'] == $sXml) {
                return $aValue['ID'];
            }
        }

        return false;
    }

    /**
     * Метод получает значение свойства инфоблока типа список по его id
     * @param string $sPropertyCode
     * @param string $sValue
     * @param bool $IBlockId
     * @return bool|int|string
     */
    public static function getEnumListIdByValue($sPropertyCode, $sValue, $iIBlockId = false)
    {
        $aValueList = self::getEnumList($sPropertyCode, $iIBlockId);

        foreach ($aValueList as $iKey => $aValue) {
            if ($aValue['VALUE'] == $sValue) {
                return $aValue['ID'];
            }
        }

        return false;
    }
}
