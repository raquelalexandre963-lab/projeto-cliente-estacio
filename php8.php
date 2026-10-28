<?php
class Fruta
{
    public function __construct(
        private string $nome = "",
        private string $tipo = ""
    ) {}

    public function setNome(string $nome): void { $this->nome = $nome; }
    public function getNome(): string { return $this->nome; }
    public function setTipo(string $tipo): void { $this->tipo = $tipo; }
    public function getTipo(): string { return $this->tipo; }
}