SELECT 	eps.id, eps.id_empresa_produto, e.nome, e.descricao, eps.id_produto, pr.titulo, eps.id_servico, eps.titulo, eps.valor, eps.ordem, eps.tem_aula, eps.qtd_aula, eps.tempo_aula, 
	eps.valor_aula_extra, eps.ativado	 
	FROM 
	drivycar_prod.empresa_produto_servico AS eps
	JOIN drivycar_prod.empresa AS e ON eps.id_empresa_produto = e.id
	JOIN drivycar_prod.empresa_produto AS ep ON ep.id_produto = eps.id_produto
	JOIN drivycar_prod.produto AS pr ON eps.id_produto = pr.id
	;


SELECT * FROM empresa_produto_servico;

SELECT * FROM empresa;

SELECT * FROM produto;

SELECT TABLE_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE COLUMN_NAME = 'id_empresa_produto' AND TABLE_SCHEMA = 'drivycar_prod';

SELECT * FROM bairros;

 DELETE FROM bairros WHERE id BETWEEN 43 AND 44;
 
 -- delete from empresa where id in(123,124,125,126);

UPDATE bairros SET descricao = "Águas Claras" WHERE id = 6;

UPDATE empresa SET ativado = 0 WHERE id = 19;

SELECT * FROM cidades;

-- delete from cidades where id = 9;

SELECT * FROM estados;

SELECT * FROM cliente;

-- delete from cliente where id = 39;

/*listarComProdutos <<< C:\xampp\htdocs\drivycar\application\models\Empresas_model.php >>> */
SELECT e.id AS id_empresa, e.nomefantasia, p.titulo, p.descricao, ep.valor 
		 FROM empresa AS e 
		 JOIN empresa_produto AS ep ON  ep.id_empresa = e.id AND ep.ativado = 1 
		 JOIN produto AS p ON p.id = ep.id_produto AND p.ativado = 1
		 WHERE e.ativado = 1
		 AND e.id = 124;

SELECT * FROM empresa;
SELECT * FROM empresa_produto_servico;

SELECT * FROM produto_servico;

SELECT * FROM servico;

SELECT eps.id_empresa_produto AS id, e.nome, e.descricao, pr.titulo AS prod_nme, ep.valor AS vlr_prod, eps.titulo AS serv_nme, 
	eps.valor AS vlr_serv, ep.id_empresa
		 FROM empresa e 
		 JOIN empresa_produto_servico eps ON eps.id_empresa_produto = e.id  
		 JOIN produto AS pr ON eps.id_produto = pr.id	
		 JOIN empresa_produto AS ep ON eps.id_empresa_produto = ep.id_empresa
		 WHERE eps.id_empresa_produto = 124
		 AND eps.ativado = 1;

SELECT * FROM empresa_produto;

SELECT * FROM empresa;

SELECT e.id, es.id AS id_empresa_servico, e.nomefantasia, s.titulo, s.descricao, es.valor 
		 FROM empresa AS e 
		 JOIN empresa_produto_servico AS es ON es.id_empresa_produto = e.id 
		 JOIN servico AS s ON s.id = es.id_servico 
		 JOIN empresa_produto AS ep ON ep.id_empresa = es.id_empresa_produto 
		WHERE es.id_produto = 14
		;


/* buscaEmpresaProdutoPorProduto */
SELECT e.*, ep.id AS id_empresa_produto, ep.valor, p.titulo 
		 FROM empresa AS e 
		 JOIN empresa_produto ep ON ep.id_empresa = e.id AND ep.ativado = 1 
		 JOIN produto AS p ON p.id = ep.id_produto AND p.ativado = 1 
		 WHERE p.id = 13
		 AND e.ativado = 1;
		 
		 
/* buscaPorProduto */
 SELECT e.* 
		 FROM empresa AS e 
		 JOIN empresa_produto es ON es.id_empresa = e.id AND es.ativado = 1 
		 -- join produto_servico ps on ps.id_servico = es.id_produto and ps.ativado = 1 
		 -- join produto as p on p.id = ps.id_produto and p.ativado = 1 
		 JOIN bairros AS b ON b.id = e.id_bairro AND b.ativado = 1 
		 JOIN cidades AS c ON c.id = e.id_cidade AND c.ativado = 1 
		 WHERE p.id = 13
		 AND e.ativado = 1;
	
		 
SELECT * FROM empresa;

SELECT e.nome AS EMPRESA, uf.sigla AS UF, uf.id AS ID_UF, ci.descricao AS CIDADE, ci.id AS ID_CITY, ba.descricao AS BAIRRO, ba.id AS ID_BAIRRO
FROM empresa AS e
INNER JOIN estados AS uf ON uf.id = e.id_estado
INNER JOIN cidades AS ci ON ci.id_estado = e.id_estado
INNER JOIN bairros AS ba ON ba.id_cidade = e.id_cidade
WHERE e.id = 134;

SELECT * FROM empresa_produto;

SELECT * FROM empresa_produto_servico WHERE id_empresa_produto = 100;

/* listarPorFiltro */
SELECT e.id, es.id AS id_empresa_servico, e.nomefantasia, s.titulo, s.descricao, es.valor 
		 FROM empresa AS e 
		 JOIN empresa_produto_servico AS es ON es.id_empresa_produto = e.id AND es.ativado = 1 
		 JOIN servico AS s ON s.id = es.id_servico AND s.ativado = 1 
		 JOIN empresa_produto AS ep ON ep.id_empresa = es.id_empresa_produto AND es.ativado = 1 
		--  where e.id_empresa_tipo $filtro["id_empresa_tipo"]);
		-- if es.id_servico != "0"
			-- where s.id > 0
		-- where  e.id_bairro  = 2
		WHERE e.id_cidade = 2
	AND e.id_estado = 7
		 AND e.ativado = 1;

SELECT * FROM servico;

DELETE FROM servico WHERE id = 17;

SELECT * FROM empresa_produto_servico;

SELECT * FROM cliente;

UPDATE empresa SET ativado = 0 WHERE id IN (20,21,22,24,25,26,28,29,30,36,37,38,39,40,41,42,43,44,45,46,47,
48,49,50,51,52,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,
91,925,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,127,128,133,135,136,142);

UPDATE empresa SET ativado = 1 WHERE id IN (20);
DELETE FROM empresa WHERE id = 30;

SELECT * FROM bairros;


select * from cidades;
delete from  cidades where id = '13';
select * from bairros where id_cidade = 13;
select * from bairros;
delete from bairros where id = 46;

select * from empresa where id = 150;

update empresa set id_empresa_tipo = 2 where id = 150;

select * from empresa;

delete from empresa where id = 151;

select * from cliente where login = 'marco'; 
select * from cliente;

e10adc3949ba59abbe56e057f20f883e
