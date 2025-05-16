<?php

/* 
O JWT é um token constituído por 3 partes:

Header
Payload
Signature

HEADER - é uma string JSON encriptada com BASE64.
Ele especifica que algoritmo criptográfico foi usado
para gerar a assinatura e o tipo de token (que é sempre a expressão JWT)

PAYLOAD - também é um BASE64. Contém os campos (também conhecidos por claims)

Existem claims que são pré-definidas pelo sistema: (Registered Claims)
    
    iat - timestamp da criação do token
    nbf - timestamp de quando o token deve passar a ser considerado válido.
            Deve ser igual ou superior ao iat
    exp - timestamp de expiração do token. Deve ser superior ao iat e nbf

    existem mais algumas, mas não é muito importante entrar em detalhes avançados.

Existem claims que não são pré-definidas pelo sistema (Public Claims)
    Estas podem ser definidas pelo programador. Só não podem ter o mesmo nome que
    as claims registadas (pré-definidas)
    
    Tradicionalmente no Payload vvão as informações de usuário da API.

SIGNATURE - É um mecanismo criptográfico desenhado para tornar os dados seguros.
    A signature assegura a integridade do JWT e que o token não foi alterado maliciosamente.
    A assinatura é uma combinação de 3 coisas: o header, o paylod e um valor secreto.

    NOTA: o código usado na signature deve ter 32 ou mais caracteres para ser robusto.
*/