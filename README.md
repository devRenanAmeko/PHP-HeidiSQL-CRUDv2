Arquivo database.php
- Classe Database:
Implementa uma classe para gerenciar a conexão com o banco de dados MySQL usando PDO.
- Propriedades privadas:
_host, _database, _username, _password, _return_type: Armazenam as configurações de conexão e o tipo de retorno (objetos ou array associativo).
- Construtor:
Recebe configurações de conexão e um parâmetro opcional para definir o tipo de retorno. O tipo de retorno padrão é objeto (PDO::FETCH_OBJ), mas pode ser alterado para array associativo (PDO::FETCH_ASSOC).
- Método execute_query:
Executa consultas SQL que retornam resultados (ex: SELECT).
Prepara e executa a query usando PDO::prepare e PDO::execute.
Retorna os resultados da consulta ou um erro em caso de falha.
- Método execute_non_query:
Executa consultas SQL que não retornam resultados (ex: INSERT, UPDATE, DELETE).
Inicia uma transação, executa a query e comita a transação em caso de sucesso ou faz rollback em caso de erro.
- Método privado _result:
Formata e retorna um objeto com o status da operação (sucesso ou erro), a mensagem, o SQL executado, os resultados, o número de linhas afetadas e o último ID inserido.

Arquivo index.php
- Interface HTML:
Formulário de registro de clientes com campos para nome e email.
A interface usa Bootstrap para estilização e contém um botão para enviar o formulário e outro para ver os resultados.
O formulário envia os dados para o arquivo tratar.php via método POST.

Arquivo results.php
- Apresentação dos Resultados:
Usa a classe Database para buscar dados da tabela clientes.
Exibe os resultados em um layout Bootstrap, mostrando nome e email de cada cliente em cards.
Caso não haja clientes, uma mensagem de aviso é exibida.
Inclui botões para remover um cliente ou editar os dados de um cliente.
Um botão para voltar à página de registro também está disponível.

Arquivo edit.php
- Edição de Clientes:
Carrega os dados do cliente a ser editado com base no ID fornecido.
Apresenta um formulário pré-preenchido com os dados atuais do cliente.
Permite a edição do nome e email, enviando os dados para o arquivo update.php via método POST.

Arquivo update.php
- Atualização de Dados:
Recebe os dados do cliente via método POST.
Usa a classe Database para atualizar os dados do cliente na tabela clientes.
Após a atualização, redireciona automaticamente de volta para a página de resultados (results.php).

Arquivo tratar.php
- Tratamento do Formulário:
Recebe os dados do formulário via método POST.
Usa a classe Database para inserir um novo cliente na tabela clientes.
Após a inserção, redireciona automaticamente de volta para o formulário (index.php).

Arquivo remove.php
- Remoção de Clientes:
Recebe o ID do cliente a ser removido via método GET.
Usa a classe Database para excluir o cliente da tabela clientes.
Após a remoção, redireciona automaticamente de volta para a página de resultados (results.php), onde os dados atualizados serão exibidos.

Arquivo os_meus_clientes.sql
- Script de Banco de Dados:
Cria o banco de dados os_meus_clientes e a tabela clientes com colunas id, nome, email e created_at.
Insere registros de exemplo na tabela clientes.
Define o charset como utf8mb4 para garantir suporte a todos os caracteres, incluindo emojis.
