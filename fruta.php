<?php
class Fruta
{
    // Propriedades da Classe
    private string $nome;
    private string $tipo;

    // Setter e Getter para nome
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    // Setter e Getter para tipo
    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}

// Exemplo de uso:
$fruta1 = new Fruta();
$fruta1->setNome("Maçã");
$fruta1->setTipo("Climatérica");

echo "Nome: " . $fruta1->getNome() . "<br>";
echo "Tipo: " . $fruta1->getTipo();
?>