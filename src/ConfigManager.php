<?php

namespace C3\PhpDevServer;

class ConfigManager
{
    /**
     * @var array
     */
    protected $composerJson;

    /**
     * @var array
     */
    protected $config = [
        'port' => 55555,
        'webDirectory' => 'public',
        'tlsEnabled' => false,
        'p12File' => null,
    ];

    public function __construct($composerJson)
    {
        $this->composerJson = json_decode($composerJson, true);
        if (!empty($this->composerJson['extra']['clubdrei/php-dev-server']) && is_array($this->composerJson['extra']['clubdrei/php-dev-server'])) {
            $this->config = array_replace_recursive($this->config, $this->composerJson['extra']['clubdrei/php-dev-server']);
        }
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return (int)$this->config['port'];
    }

    /**
     * @return string
     */
    public function getWebDirectory()
    {
        return (string)$this->config['webDirectory'];
    }

    /**
     * @return bool
     */
    public function isTlsEnabled()
    {
        return (bool)$this->config['tlsEnabled'];
    }

    /**
     * @return string|null
     */
    public function getP12File()
    {
        return $this->config['p12File'];
    }
}
