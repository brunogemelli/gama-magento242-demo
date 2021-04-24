<?php

namespace GamaAcademy\Vacina\Api\Data;

interface VacinaInterface
{
    const ID                = 'id';
    const DISPONIVEL        = 'disponivel';
    const NOME              = 'nome';
    const FABRICANTE        = 'fabricante';
    const LABORATORIO       = 'laboratorio';
    const EFICACIA          = 'eficacia';
    const NRO_DOSES         = 'nro_doses';
    const PAIS              = 'pais';
    const DATA_CRIACAO      = 'data_criacao';
    const DATA_ATUALIZACAO  = 'data_atualizacao';

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return bool|null
     */
    public function getDisponivel(): ?bool;

    /**
     * @return string|null
     */
    public function getNome(): ?string;

    /**
     * @return string|null
     */
    public function getFabricante(): ?string;

    /**
     * @return string|null
     */
    public function getLaboratorio(): ?string;

    /**
     * @return float|null
     */
    public function getEficacia(): ?float;

    /**
     * @return int|null
     */
    public function getNroDoses(): ?int;

    /**
     * @return string|null
     */
    public function getPais(): ?string;

    /**
     * @return string|null
     */
    public function getDataCriacao(): ?string;

    /**
     * @return string|null
     */
    public function getDataAtualizacao(): ?string;

    /**
     * @param int $id
     * @return VacinaInterface
     */
    public function setId($id): VacinaInterface;

    /**
     * @param bool $disponivel
     * @return VacinaInterface
     */
    public function setDisponivel($disponivel): VacinaInterface;

    /**
     * @param string $nome
     * @return VacinaInterface
     */
    public function setNome($nome): VacinaInterface;

    /**
     * @param string $fabricante
     * @return VacinaInterface
     */
    public function setFabricante($fabricante): VacinaInterface;

    /**
     * @param string $laboratorio
     * @return VacinaInterface
     */
    public function setLaboratorio($laboratorio): VacinaInterface;

    /**
     * @param float $eficacia
     * @return VacinaInterface
     */
    public function setEficacia($eficacia): VacinaInterface;

    /**
     * @param int $nroDoses
     * @return VacinaInterface
     */
    public function setNroDoses($nroDoses): VacinaInterface;

    /**
     * @param string $pais
     * @return VacinaInterface
     */
    public function setPais($pais): VacinaInterface;

    /**
     * @param string $dataCriacao
     * @return VacinaInterface
     */
    public function setDataCriacao($dataCriacao): VacinaInterface;

    /**
     * @param string $dataAtualizacao
     * @return VacinaInterface
     */
    public function setDataAtualizacao($dataAtualizacao): VacinaInterface;
}
