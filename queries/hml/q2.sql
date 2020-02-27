

DELETE FROM cliente WHERE id = 48;

SELECT * FROM cliente;

SELECT * FROM empresa WHERE id = 31;

SELECT * FROM empresa_tipo;

SELECT * FROM empresa;

SELECT * FROM cliente WHERE login = 'marco'; 
SELECT * FROM cliente;


e10adc3949ba59abbe56e057f20f883e

UPDATE cliente SET senha = 'e10adc3949ba59abbe56e057f20f883e' WHERE id = 44;

SELECT * FROM `cliente_produto_pagamento`;

SELECT * FROM cliente_produto;
SELECT * FROM cliente_produto cp 
        JOIN produto AS p ON p.id = cp.id_produto AND p.ativado = 1
      WHERE  cp.id_cliente = 58;
      
      
SELECT * FROM servico;