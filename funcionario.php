<?php
class Funcionario
{
    private $id;
    private $nome;
    private $idade;
    private $condicoesMedicas;
    private $alergias;
    private $telefoneContato;
    private $emailContato;

    public function __construct($id, $nome, $idade, $condicoesMedicas, $alergias, $telefoneContato, $emailContato)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->condicoesMedicas = $condicoesMedicas;
        $this->alergias = $alergias;
        $this->telefoneContato = $telefoneContato;
        $this->emailContato = $emailContato;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getCondicoesMedicas()
    {
        return $this->condicoesMedicas;
    }

    public function getAlergias()
    {
        return $this->alergias;
    }

    public function getTelefoneContato()
    {
        return $this->telefoneContato;
    }

    public function getEmailContato()
    {
        return $this->emailContato;
    }
}

function coletarInformacoesFuncionario()
{
    echo "Digite o ID do funcionário: ";
    $id = trim(fgets(STDIN));

    echo "Digite o nome do funcionário: ";
    $nome = trim(fgets(STDIN));

    echo "Digite a idade do funcionário: ";
    $idade = trim(fgets(STDIN));

    echo "Digite as condições médicas do funcionário: ";
    $condicoesMedicas = trim(fgets(STDIN));

    echo "Digite as alergias do funcionário: ";
    $alergias = trim(fgets(STDIN));

    echo "Digite o telefone de contato do funcionário: ";
    $telefoneContato = trim(fgets(STDIN));

    echo "Digite o e-mail de contato do funcionário: ";
    $emailContato = trim(fgets(STDIN));

    return new Funcionario($id, $nome, $idade, $condicoesMedicas, $alergias, $telefoneContato, $emailContato);
}

function exibirInformacoesFuncionario($funcionario)
{
    echo "ID: " . $funcionario->getId() . PHP_EOL;
    echo "Nome: " . $funcionario->getNome() . PHP_EOL;
    echo "Idade: " . $funcionario->getIdade() . PHP_EOL;
    echo "Condições Médicas: " . $funcionario->getCondicoesMedicas() . PHP_EOL;
    echo "Alergias: " . $funcionario->getAlergias() . PHP_EOL;
    echo "Telefone de Contato: " . $funcionario->getTelefoneContato() . PHP_EOL;
    echo "E-mail de Contato: " . $funcionario->getEmailContato() . PHP_EOL;
}

$funcionarios = [];

while (true) {
    echo "Escolha uma opção:\n";
    echo "1. Adicionar funcionário\n";
    echo "2. Exibir informações do funcionário\n";
    echo "3. Sair\n";
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            $funcionario = coletarInformacoesFuncionario();
            $funcionarios[$funcionario->getId()] = $funcionario;
            echo "Funcionário adicionado com sucesso!\n";
            break;
        case 2:
            echo "Digite o ID do funcionário: ";
            $id = trim(fgets(STDIN));
            if (isset($funcionarios[$id])) {
                exibirInformacoesFuncionario($funcionarios[$id]);
            } else {
                echo "Funcionário não encontrado.\n";
            }
            break;
        case 3:
            exit("Saindo do sistema...\n");
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
}
?>
