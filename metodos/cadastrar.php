<?php

class CadastroImoveis {

    private $quartos;
        public function getQuartos() {
            return $this->quartos;
        }

    private $valor;
        public function getValor() {
            return $this->valor;
        }

    private $endereco; 
        public function getEndereco() {
            return $this->endereco;
        }

    private $quintal; 
        public function getQuintal() {
            return $this->quintal;
        }

    private $condominio;
        public function getCondominio() {
            return $this->condominio;
        }

    public function __construct ($quartos, $valor, $endereco, $quintal, $condominio) {
        $this->quartos    = $quartos;
        $this->valor      = $valor;
        $this->endereco   = $endereco;
        $this->quintal    = $quintal; 
        $this->condominio = $condominio;
    }

}