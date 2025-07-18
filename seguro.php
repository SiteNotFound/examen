<?php
require_once 'tipoSeguro.php';

class Seguro {
    private string $nombre;
    private TipoSeguro $tipoSeguro;
    private float $valorCobertura;
    private float $precio;
    private array $coberturas;

    public function __construct(string $nombre, TipoSeguro $tipoSeguro, float $valorCobertura, float $precio, array $coberturas){
        $this->nombre = $nombre;
        $this->tipoSeguro = $tipoSeguro;
        $this->valorCobertura = $valorCobertura;
        $this->precio = $precio;
        $this->coberturas = $coberturas;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getTipoSeguro(): TipoSeguro {
        return $this->tipoSeguro;
    }

    public function getValorCobertura(): float {
        return $this->valorCobertura;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getCoberturas(): array {
        return $this->coberturas;
    }

    public function __tostring(): string {
        return "Seguro: {$this->nombre}, Tipo: {$this->tipoSeguro->name}, Cobertura: {$this->valorCobertura}, Precio: {$this->precio}, Coberturas: " . implode(', ', $this->coberturas);
    }    
}
