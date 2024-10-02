Essa aplicação fornece um sistema simples para registro de clientes com visualização dos dados inseridos, utilizando PHP, MySQL e PDO para interações com o banco de dados.

Arquivo database.php
-Classe Database: Implementa uma classe para gerenciar a conexão com o banco de dados MySQL usando PDO.
-Propriedades privadas: _host, _database, _username, _password, _return_type: Armazenam as configurações de conexão e o tipo de retorno (objetos ou array associativo).
-Construtor: Recebe configurações de conexão e um parâmetro opcional para definir o tipo de retorno. O tipo de retorno padrão é objeto (PDO::FETCH_OBJ), mas pode ser alterado para array associativo (PDO::FETCH_ASSOC).
-Método execute_query: Executa consultas SQL que retornam resultados (ex: SELECT). 
Prepara e executa a query usando PDO::prepare e PDO::execute.
Retorna os resultados da consulta ou um erro em caso de falha.
-Método execute_non_query: Executa consultas SQL que não retornam resultados (ex: INSERT, UPDATE, DELETE).
Inicia uma transação, executa a query e comita a transação em caso de sucesso ou faz rollback em caso de erro.
-Método privado _result: Formata e retorna um objeto com o status da operação (sucesso ou erro), a mensagem, o SQL executado, os resultados, o número de linhas afetadas, e o último ID inserido.

