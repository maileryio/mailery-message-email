<?php

namespace Mailery\Template\Email\Provider;

class EditorConfigs
{
    /**
     * @var array
     */
    private array $configs;

    /**
     * @param array $configs
     */
    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    /**
     * @return array
     */
    public function getConfigs(): array
    {
        return $this->configs;
    }
}
