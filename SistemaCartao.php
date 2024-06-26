<?php

// Classe SistemaCartao para gerenciar as operações do sistema
class SistemaCartao
{
    private $funcionarios = [];

    public function adicionarFuncionario($funcionario)
    {
        $this->funcionarios[$funcionario->getId()] = $funcionario;
    }

    public function gerarCartaoFuncionario($id)
    {
        if (isset($this->funcionarios[$id])) {
            $funcionario = $this->funcionarios[$id];
            echo "----------------------------------------\n";
            echo "Cartão de Informações do Funcionário\n";
            echo "----------------------------------------\n";
            echo "ID: " . $funcionario->getId() . PHP_EOL;
            echo "Nome: " . $funcionario->getNome() . PHP_EOL;
            echo "Idade: " . $funcionario->getIdade() . PHP_EOL;
            echo "Telefone de Contato: " . $funcionario->getContato()->getTelefone() . PHP_EOL;
            echo "E-mail de Contato: " . $funcionario->getContato()->getEmail() . PHP_EOL;
            echo "Condições Médicas: " . $funcionario->getSaude()->getCondicoesMedicas() . PHP_EOL;
            echo "Alergias: " . $funcionario->getSaude()->getAlergias() . PHP_EOL;
            echo "----------------------------------------\n";
        } else {
            echo "Funcionário não encontrado.\n";
        }
    }

    public function coletarInformacoesFuncionario()
    {
        echo "Digite o ID do funcionário: ";
        $id = trim(fgets(STDIN));

        echo "Digite o nome do funcionário: ";
        $nome = trim(fgets(STDIN));

        echo "Digite a idade do funcionário: ";
        $idade = trim(fgets(STDIN));

        echo "Digite o telefone de contato do funcionário: ";
        $telefone = trim(fgets(STDIN));

        echo "Digite o e-mail de contato do funcionário: ";
        $email = trim(fgets(STDIN));

        echo "Digite as condições médicas do funcionário: ";
        $condicoesMedicas = trim(fgets(STDIN));

        echo "Digite as alergias do funcionário: ";
        $alergias = trim(fgets(STDIN));

        $contato = new Contato($telefone, $email);
        $saude = new Saude($condicoesMedicas, $alergias);
        $funcionario = new Funcionario($id, $nome, $idade, $contato, $saude);

        $this->adicionarFuncionario($funcionario);
        echo "Funcionário adicionado com sucesso!\n";
    }

    public function menu()
    {
        while (true) {
            echo "Escolha uma opção:\n";
            echo "1. Adicionar funcionário\n";
            echo "2. Gerar cartão de informações do funcionário\n";
            echo "3. Sair\n";
            $opcao = trim(fgets(STDIN));

            switch ($opcao) {
                case 1:
                    $this->coletarInformacoesFuncionario();
                    break;
                case 2:
                    echo "Digite o ID do funcionário: ";
                    $id = trim(fgets(STDIN));
                    $this->gerarCartaoFuncionario($id);
                    break;
                case 3:
                    exit("Saindo do sistema...\n");
                default:
                    echo "Opção inválida. Tente novamente.\n";
            }
        }
    }
}
