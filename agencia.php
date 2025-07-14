<?php
require_once 'seguro.php';
require_once 'tipoSeguro.php';

class Agencia {
    private array $seguros;

    public function __construct(array $seguros) {
        $this->seguros = $seguros;
    }

    public function getSeguros(): array {
        return $this->seguros;
    }

    public function buscarSeguroMasCaro(): Seguro {       
        $seguroMasCaro = $this->seguros[0];
        foreach ($this->seguros as $seguro) {
            if ($seguro->getPrecio() > $seguroMasCaro->getPrecio()) {
                $seguroMasCaro = $seguro;
            }
        }
        return $seguroMasCaro;
    }

    public function buscarTipoSeguro(TipoSeguro $tipoSeguroBuscado): array {
        $resultado = [];
        foreach ($this->seguros as $seguro) {
            if ($seguro->getTipoSeguro() === $tipoSeguroBuscado) {
                $resultado[] = $seguro;
            }
        }
        return $resultado;
    }
}