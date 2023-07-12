<?

namespace SC;

use Bitrix\Main\Loader;
use CIBlockElement;
use CIBlockSection;

class Section
{

    public function __construct()
    {
        if ( !Loader::includeModule( "iblock" ) ) {
            throw new Exception( "The infoblocks module was not found!" );
        }
    }

    /**
     * Get the ID section from the code section
     *
     * @param  array  $arParams
     *
     * @return integer
     * */
    public static function getSectionId(
        $arParams
        = [
            'IBLOCK_ID'    => 0,
            'IBLOCK_TYPE'  => 'TYPE',
            'SECTION_CODE' => 'CODE',
            'SITE_ID'      => 's0',
        ]
    ): int {
        $res = CIBlockSection::GetList( [], [
                                              'IBLOCK_ID'         => $arParams["IBLOCK_ID"],
                                              'IBLOCK_TYPE'       => $arParams["IBLOCK_TYPE"],
                                              'CODE'              => $arParams["SECTION_CODE"],
                                              'SITE_ID'           => $arParams["SITE_ID"],
                                              "CHECK_PERMISSIONS" => "N",
                                              "ACTIVE"            => "Y",
                                          ]
        );

        $result = $res->Fetch()["ID"];

        if ( !isset( $result ) ) {
            $result = 0;
        }

        return $result;
    }

    /**
     * Get the ID of an element from a section by the code of the section itself
     *
     * @param  array  $arParams
     *
     * @return integer
     * */
    public static function getSectionElement(
        $arParams
        = [
            'IBLOCK_ID'    => 0,
            'IBLOCK_TYPE'  => 'TYPE',
            'SECTION_ID'   => null,
            'SECTION_CODE' => 'CODE',
            'SITE_ID'      => 's0',
        ]
    ): int {
        if ( isset( $arParams["SECTION_ID"] ) || $arParams["SECTION_ID"] == null ) {
            $sectionId = Section::getSectionId(
                [
                    'IBLOCK_ID'    => $arParams["IBLOCK_ID"],
                    'IBLOCK_TYPE'  => $arParams["IBLOCK_TYPE"],
                    'SECTION_CODE' => $arParams["SECTION_CODE"],
                    'SITE_ID'      => $arParams["SITE_ID"],
                ]
            );
        }

        $arSelect = [ "ID" ];
        $arFilter = [
            'IBLOCK_ID'         => $arParams["IBLOCK_ID"],
            'IBLOCK_TYPE'       => $arParams["IBLOCK_TYPE"],
            "CHECK_PERMISSIONS" => "N",
            "SECTION_ID"        => $sectionId ?? $arParams["SECTION_ID"],
            "ACTIVE"            => "Y",
        ];
        $res = CIBlockElement::GetList(
            [],
            $arFilter,
            false,
            [ "nPageSize" => 1 ],
            $arSelect
        );

        if ( $ob = $res->GetNextElement() ) {
            $result = $ob->GetFields()["ID"];
        } else {
            $result = 0;
        }

        return $result;
    }

    /**
     * Get the fields section from the code section or id section
     *
     * @param  array  $arParams
     *
     * @return array
     * */
    public static function getSectionFields(
        $arParams
        = [
            'IBLOCK_ID'    => 0,
            'IBLOCK_TYPE'  => 'TYPE',
            'SECTION_CODE' => 'CODE',
            'SITE_ID'      => 's0',
        ]
    ): array {
        $sectionId = Section::getSectionId(
            [
                'IBLOCK_ID'    => $arParams["IBLOCK_ID"],
                'IBLOCK_TYPE'  => $arParams["IBLOCK_TYPE"],
                'SECTION_CODE' => $arParams["SECTION_CODE"],
                'SITE_ID'      => $arParams["SITE_ID"],
            ]
        );

        $arFilter = [
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "ID"        => $sectionId,
        ];

        $arResults = CIBlockSection::GetList( [ "SORT" => "ASC" ], $arFilter,
                                              false, [ "UF_*" ]
        );

        if ( $arResult = $arResults->Fetch() ) {
            $result = $arResult;
        } else {
            $result = [];
        }

        return $result;
    }

}
