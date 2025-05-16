<?php

/*
    Este é um exemplo muito simples do que pode ser uma api com vários endpoints, mas sem qualquer mecanismo de autenticação e sem controle de erros.
    Vamos seguir apenas os seguintes princípios:
    1. Qualquer cliente pode acessar os endpoints através da URL;
    2. Cada endpoint deve ser no formato JSON;

    http://localhost/php-api/api/get_status
    http://localhost/php-api/api/get_all_animals
    http://localhost/php-api/api/get_animals
    http://localhost/php-api/api/get_animals?max=5
*/

