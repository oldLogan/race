SELECT * FROM servico;

/*  Troca de Serviços  */
SELECT * FROM empresa_produto WHERE id_empresa = 134; 
SELECT * FROM produto;
SELECT * FROM empresa_produto_servico WHERE id_empresa_produto = 100;

UPDATE empresa_produto_servico SET id_servico = 21 WHERE id = 199;
UPDATE empresa_produto_servico SET titulo = "Curso Prático Moto" WHERE id = 199;

