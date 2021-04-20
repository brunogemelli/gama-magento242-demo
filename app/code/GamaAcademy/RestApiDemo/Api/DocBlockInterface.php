<?php

namespace GamaAcademy\RestApiDemo\Api;

interface DocBlockInterface
{
    /**
     * @param string $param
     * @return string
     */
    public function getSomeData($param);
}
