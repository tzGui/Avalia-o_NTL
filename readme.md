# Avaliação NTL

Veja o vídeo aqui: [Vídeo de utilização do sistema](https://youtu.be/FgKYM4nRBU4)

## Índice

- [HTML & Bootstrap](#html--bootstrap)
- [Validações](#validações)
- [Banco de Dados](#banco-de-dados)

### HTML & Bootstrap

O formulário foi construído utilizando apenas HTML e BootStrap. No entanto, apesar das tentativas, ele não ficou idêntico ao da imagem, pois o placeholder, nesta versão do Bootstrap (5.3.3), apresentou um conflito com o tema mesmo a letra ficando em tema claro.

### Validações

As validações foram realizadas tanto no front-end quanto no back-end, incluindo: campos obrigatórios, formato de número de telefone, formato de email e idade negativa.

### Banco de Dados

A conexão com o banco de dados foi feita utilizando PHP, e o banco escolhido foi MySQL.

## Como usar?

### Passo a Passo para Clonar e Executar o Programa

1. **Clone o repositório**:  
   Abra o terminal e execute o seguinte comando:
   ```bash
   git clone https://github.com/tzGui/Avalia-o_NTL.git

2. **Configure o ambiente**:

Certifique-se de que você tenha um servidor web instalado, como o XAMPP e inicie o servidor.
Coloque o projeto na pasta de desenvolvimento local do seu servidor, como a pasta htdocs no XAMPP.
Crie o banco de dados:

3. **Acesse phpMyAdmin**:
Crie um novo banco de dados com o nome especificado no arquivo de configuração.
Importe o arquivo SQL incluído no projeto para configurar as tabelas.

4. **Acesse o sistema**:
No navegador, digite o endereço: http://localhost/AvaliaçãoNTL/cad_funcionario.html
