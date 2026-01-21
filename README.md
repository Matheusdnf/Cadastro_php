# 👥 Sistema de Cadastro de Pessoas

Este projeto é um **Case Técnico** desenvolvido para demonstração de habilidades em desenvolvimento Web para a vaga de Estágio. O sistema consiste em um CRUD (Create, Read, Update, Delete) funcional, focado em boas práticas de organização e experiência do usuário.

## 🛠️ Tecnologias Utilizadas

- **Frontend:** HTML5, CSS e JavaScript.
- **Backend:** PHP.
- **Banco de Dados:** MySQL.

## 📋 Pré-requisitos

Para executar este projeto, você precisará ter instalado em sua máquina:

- [PHP (versão 8.0 ou superior)](https://www.php.net/downloads.php)
- [MySQL Server](https://dev.mysql.com/downloads/installer/)
- [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)

## 🚀 Como Executar o Projeto

### 1. Preparar o Banco de Dados

1. Abra o seu cliente MySQL (Workbench ou Terminal).
2. Execute o script contido no arquivo `database.sql` para criar a estrutura necessária.

### 2. Configurar Variáveis de Ambiente

O projeto utiliza um arquivo de configuração para conectar ao banco de dados.

1. Localize o arquivo `.env-example`.
2. Renomeie-o para `.env` (ou ajuste os dados diretamente no arquivo `config/database.php`).
3. Preencha com as suas credenciais locais:
   ```env
   DB_HOST=localhost
   DB_NAME=nome_do_seu_banco
   DB_USER=seu_usuario
   DB_PASS=sua_senha
   ```
### ⚠️ Configuração Importante do PHP
Para que o PHP consiga se comunicar com o banco de dados MySQL, você deve garantir que a extensão **PDO MySQL** esteja habilitada no seu arquivo de configuração do PHP:

1. Localize o seu arquivo `php.ini`.
2. Procure pela linha `;extension=pdo_mysql`.
3. Remova o ponto e vírgula (`;`) do início da linha para ativá-la:
   ```ini
   extension=pdo_mysql
