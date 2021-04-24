<?php

namespace GamaAcademy\Vacina\Model;

use GamaAcademy\Vacina\Api\Data\VacinaInterface;
use Magento\Framework\Model\AbstractModel;

class Vacina extends AbstractModel implements VacinaInterface
{
    protected $_eventPrefix = 'gamaacademy_vacina';

    /**
     * Construct.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\GamaAcademy\Vacina\Model\ResourceModel\Vacina::class);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->getData(self::ID);
    }

    /**
     * @return bool
     */
    public function getDisponivel(): ?bool
    {
        return $this->getData(self::DISPONIVEL);
    }

    /**
     * @return string
     */
    public function getNome(): ?string
    {
        return $this->getData(self::NOME);
    }

    /**
     * @return string
     */
    public function getFabricante(): ?string
    {
        return $this->getData(self::FABRICANTE);
    }

    /**
     * @return string
     */
    public function getLaboratorio(): ?string
    {
        return $this->getData(self::LABORATORIO);
    }

    /**
     * @return float
     */
    public function getEficacia(): ?float
    {
        return $this->getData(self::EFICACIA);
    }

    /**
     * @return int
     */
    public function getNroDoses(): ?int
    {
        return $this->getData(self::NRO_DOSES);
    }

    /**
     * @return string
     */
    public function getPais(): ?string
    {
        return $this->getData(self::PAIS);
    }

    /**
     * @return string|null
     */
    public function getDataCriacao(): ?string
    {
        return $this->getData(self::DATA_CRIACAO);
    }

    /**
     * @return string|null
     */
    public function getDataAtualizacao(): ?string
    {
        return $this->getData(self::DATA_ATUALIZACAO);
    }

    /**
     * @param int $id
     * @return VacinaInterface
     */
    public function setId($id): VacinaInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @param bool $disponivel
     * @return VacinaInterface
     */
    public function setDisponivel($disponivel): VacinaInterface
    {
        return $this->setData(self::DISPONIVEL, $disponivel);
    }

    /**
     * @param string $nome
     * @return VacinaInterface
     */
    public function setNome($nome): VacinaInterface
    {
        return $this->setData(self::NOME, $nome);
    }

    /**
     * @param string $fabricante
     * @return VacinaInterface
     */
    public function setFabricante($fabricante): VacinaInterface
    {
        return $this->setData(self::FABRICANTE, $fabricante);
    }

    /**
     * @param string $laboratorio
     * @return VacinaInterface
     */
    public function setLaboratorio($laboratorio): VacinaInterface
    {
        return $this->setData(self::LABORATORIO, $laboratorio);
    }

    /**
     * @param float $eficacia
     * @return VacinaInterface
     */
    public function setEficacia($eficacia): VacinaInterface
    {
        return $this->setData(self::EFICACIA, $eficacia);
    }

    /**
     * @param int $nroDoses
     * @return VacinaInterface
     */
    public function setNroDoses($nroDoses): VacinaInterface
    {
        return $this->setData(self::NRO_DOSES, $nroDoses);
    }

    /**
     * @param string $pais
     * @return VacinaInterface
     */
    public function setPais($pais): VacinaInterface
    {
        return $this->setData(self::PAIS, $pais);
    }

    /**
     * @param string $dataCriacao
     * @return VacinaInterface
     */
    public function setDataCriacao($dataCriacao): VacinaInterface
    {
        return $this->setData(self::DATA_CRIACAO, $dataCriacao);
    }

    /**
     * @param string $dataAtualizacao
     * @return VacinaInterface
     */
    public function setDataAtualizacao($dataAtualizacao): VacinaInterface
    {
        return $this->setData(self::DATA_ATUALIZACAO, $dataAtualizacao);
    }
}

