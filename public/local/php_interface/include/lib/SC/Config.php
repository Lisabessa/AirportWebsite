<?

namespace SC;

use SC\Iblock,
    SC\HLblock;

class Config
{

    private static $_oInstance;
    private $_aParams;

    public function __construct()
    {
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    /**
     * получение экземпляра класса
     *
     * @return Config
     */
    public static function getInstance()
    {

        if (!(isset(static::$_oInstance) && static::$_oInstance)) {

            //похардкодим путь до конфига
            static::$_oInstance = new self();
            static::$_oInstance->init();
        }

        return static::$_oInstance;
    }


    /**
     * Инициализация конфига
     */
    public function init()
    {
        $aConfig = [];

        /**
         * Чтение конфигурационного файла, если он есть
         */
        $sConfigPath = dirname(dirname($_SERVER['DOCUMENT_ROOT'])) . DIRECTORY_SEPARATOR . 'conf' . DIRECTORY_SEPARATOR . "config.ini";
        if (file_exists($sConfigPath) && is_readable($sConfigPath)) {
            $aConfig = parse_ini_file($sConfigPath, true);
        }

        /**
         * Запись в конфиг информации о:
         *  - имеющихся инфоблоках
         *  - имеющихся HL-блоках
         */
        try {
            $oIblock = new Iblock();
            $oHLblock = new HLblock();
            $aConfig = array_merge($aConfig, array('IBLOCK' => $oIblock->getAll(), "HLBLOCK" => $oHLblock->getAll()));
        } catch (Exception $e) {
            //логировать
        }

        $this->setParams($aConfig);
    }


    /**
     * сеттер для параметров
     *
     * @param array $aParams
     */
    public function setParams(array $aParams)
    {
        $this->_aParams = array_merge((array)$this->_aParams, $aParams);
        return static::$_oInstance;
    }


    /**
     * сеттер для параметра
     *
     * @return string|boolean
     */
    public function setParam($sName = '', $mValue)
    {
        $this->_aParams[$sName] = $mValue;
        return static::$_oInstance;
    }


    /**
     * геттер для параметров
     *
     * @return array
     */
    public function getParams()
    {
        return $this->_aParams;
    }


    /**
     * геттер для параметра
     *
     * @return string|boolean
     */
    public function getParam($sConfigName = '')
    {
        if (isset($sConfigName) && $sConfigName) {
            return $this->_aParams[$sConfigName];
        } else {
            return false;
        }
    }

    /**
     * Метод возвращает идентификатор инфоблока по символьному коду
     *
     * @return string|boolean
     */
    public function getIblockIdByCode($sConfigName)
    {
        if (isset($sConfigName) && $sConfigName && !empty($sConfigName)) {
            return $this->_aParams['IBLOCK'][$sConfigName]['ID'];
        } else {
            return false;
        }
    }

}
