<?php
namespace dstuecken\WdAlerts;

/**
 * Class Config
 *
 * @copyright Dennis Stücken <dstuecken@me.com>
 * @licence MIT
 *
 * @package dstuecken\WdAlerts
 */
class Config
{
    /**
     * Array of multi dimensional config variables
     *
     * @var array
     */
    private $config;

    /**
     * Get config variable
     *
     * @param string $section
     * @param string $key
     *
     * @return string
     */
    public function get($section, $key)
    {
        if (isset($this->config[$section][$key])) {
            return $this->config[$section][$key];
        }

        return null;
    }

    /**
     * Get options key
     *
     * @param string $key
     *
     * @return string
     */
    public function getOption($key)
    {
        return $this->get('options', $key);
    }

    /**
     * Config constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }
}