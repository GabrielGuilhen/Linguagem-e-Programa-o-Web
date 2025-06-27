<?php

// Classe que representa um item do patrimônio
class ItemPatrimonio {
    private $id;
    private $tipo;
    private $marca;
    private $localizacao;
    private $estado;
    private $dataAquisicao;

    // Construtor
    public function __construct($id = null, $tipo = '', $marca = '', $localizacao = '', $estado = '', $dataAquisicao = '') {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->localizacao = $localizacao;
        $this->estado = $estado;
        $this->dataAquisicao = $dataAquisicao;
    }

    // Get the value of id
    public function getId(): ?int
    {
        return $this->id;
    }

    // Set the value of id
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    // Get the value of tipo
    public function getTipo(): string
    {
        return $this->tipo;
    }

    // Set the value of tipo
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }

    // Get the value of marca
    public function getMarca(): string
    {
        return $this->marca;
    }

    // Set the value of marca
    public function setMarca(string $marca): self
    {
        $this->marca = $marca;
        return $this;
    }

    // Get the value of localizacao
    public function getLocalizacao(): string
    {
        return $this->localizacao;
    }

    // Set the value of localizacao
    public function setLocalizacao(string $localizacao): self
    {
        $this->localizacao = $localizacao;
        return $this;
    }

    // Get the value of estado
    public function getEstado(): string
    {
        return $this->estado;
    }

    // Set the value of estado
    public function setEstado(string $estado): self
    {
        $this->estado = $estado;
        return $this;
    }

    // Get the value of dataAquisicao
    public function getDataAquisicao(): string
    {
        return $this->dataAquisicao;
    }

    // Set the value of dataAquisicao
    public function setDataAquisicao(string $dataAquisicao): self
    {
        $this->dataAquisicao = $dataAquisicao;
        return $this;
    }
}
