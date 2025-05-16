<?php

/*
Uma outra forma de autenticação numa API acontece através
de JSON Web Tokens, mais conhecidos pela abreviatura de JWT.

Com este sistema, o fluxo funciona da seguinte forma:
1. o cliente envia um pedido de login à API.
2. A API vai receber os dados de login e vai verificar se o usuário é válido.
3. Se o usuário é válido, é criado um token pela API e é devolvido ao cliente.
4. Em todos os pedidos que o cliente fizer, esse token deve ser passado num header.
5. Os endpoints da API vão sempre validar se o token enviado no pedido é válido e
    enviar a resposta desejada para o cliente.
*/