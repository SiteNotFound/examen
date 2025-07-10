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

    public function mostrarInfo(): string {
        return '<br> Nombre: '. $this->nombre . '<br> Tipo seguro: '. $this->tipoSeguro->value . '<br> Valor cobertura: '. $this->valorCobertura . '<br> Precio: '. $this->precio . '<br> Coberturas: '. implode(',', $this->coberturas);
    }
    
}

function buscarSeguroMasCaro($seguros){
    $masCaro = $seguros[0];
    foreach ($seguros as $seguro){
        if ($seguro->getPrecio() > $masCaro->getPrecio()){
            $masCaro = $seguro;
        }
    }
    return $masCaro;
}

function buscarTipoSeguro($seguros, TipoSeguro $tipoSeguroBuscado){
    $resultado = [];
    foreach($seguros as $seguro){
        if($seguro->getTipoSeguro() == $tipoSeguroBuscado)
        $resultado[] = $seguro;
    }
    return $resultado;
}