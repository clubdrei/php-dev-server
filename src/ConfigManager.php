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
        'port' => 15200,
        'webDirectory' => 'public',
    ];

    public function __construct($composerJson)
    {
        $this->composerJson = json_decode($composerJson, true);
        if (!empty($this->composerJson['extra']['clubdrei/php-dev-server']) && is_array($this->composerJson['extra']['clubdrei/php-dev-server'])) {
            $this->config = array_replace_recursive($this->config, $this->composerJson['extra']['clubdrei/php-dev-server']);
        }
    }

    public function getPort()
    {
        return $this->config['port'];
    }

    public function getWebDirectory()
    {
        return $this->config['webDirectory'];
    }
}
