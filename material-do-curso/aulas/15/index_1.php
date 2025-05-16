<?php

/*
Vamos começar por preparar a base de dados que vai alimentar a nossa API.
Vamos usar uma base de dados simples que contém apenas uma tabela de clientes.
É a mesma tabela de clientes usada no módulo de SQL.
Além da tabela de clientes, temos uma outra tabela com 3 clientes da API
já registados. Podemos usar qualquer um deles para testar a nossa autenticação
e uso da API.

cliente1 - passcliente1
cliente2 - passcliente2
cliente3 - passcliente3

1. Vamos importar o SQL através do Heidisql.
2. Vamos definir um utilizador e palavra-passe com permissões para a base de dados.

O ficheiro SQL está disponível nos recursos deste módulo.

user: user_udemy_clientes
pass: wic1pOg78OHOVO3Az5zu4E1eLIzEVI

Vamos usar a classe de acesso à base de dados MySQL que também está disponível
nos recursos deste módulo.

Vamos usar HTTP Basic Auth para fazer a autenticação dos clientes na API.
Iremos criar vários exemplos de endpoints para execução de operações CRUD.

Mas como vamos testar a nossa API?
Vamos conhecer o Postman e o Thunder Client
*/