# Projeto Cliente Estácio

Projeto de conexão PHP + MySQL usando PDO, desenvolvido para a disciplina de Desenvolvimento Web - Estácio.

🔗 **Deploy:** https://projeto-cliente-estacio.vercel.app
🔗 **Teste XAMPP:** https://projeto-cliente-estacio.vercel.app/xampp.php

---

### php8.php - Classe Fruta com PHP 8 (Constructor Promotion)

```php
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
```

### fruta.php

```php
<?php
require_once 'php8.php';

$fruta = new Fruta();
$fruta->setNome("Maçã");
$fruta->setTipo("Fuji");

echo "Fruta: " . $fruta->getNome() . " - Tipo: " . $fruta->getTipo();
?>
```
