SELECT * FROM drivycar_prod.produto_servico;
SELECT pi.id, pi.ordem, pi.id_servico, s.titulo, s.id_empresa_tipo, s.tem_aula, s.valor 
		FROM produto_servico PI 
		JOIN servico AS s ON s.id = pi.id_servico AND s.ativado = 1 
		WHERE pi.ativado = 1;

-- buscaServicoPorEmpresaTipoEproduto        

SELECT pi.id, pi.ordem, pi.id_servico, s.titulo, s.id_empresa_tipo, s.tem_aula, s.id AS id_servico
		 FROM produto_servico PI 
		 JOIN servico AS s ON s.id = pi.id_servico AND s.ativado = 1 
        -- join empresa_produto as ep on pi.id_produto = ep.id_produto
      --   join empresa_produto_servico as eps on ep.id_produto = eps.id_produto
		 WHERE pi.id_produto >= 1
		 AND s.id_empresa_tipo >= 1
		 AND pi.ativado = 1;
         
ALTER TABLE servico DROP COLUMN valor;
-- ep.id_empresa = eps.id_empresa_produto

SELECT pr.titulo, e.nome, pr.ativado, ps.ativado
FROM produto AS pr
JOIN produto_servico AS ps ON pr.id = ps.id_produto
JOIN empresa_produto AS ep ON pr.id = ep.id_produto
JOIN empresa AS e ON e.id = ep.id_empresa;


/*C:\xampp\htdocs\drivycar\application\models\Empresa_servico_model.php
listaPorEmpresa L 7
*/
SELECT empresa_produto_servico.*, produto.titulo 
		 FROM empresa_produto_servico
		 JOIN produto ON produto.id = empresa_produto_servico.id_produto 
		 WHERE empresa_produto_servico.id_empresa_produto >= 1;

         
SELECT p.titulo AS Produto, e.nome AS nome, et.descricao  AS Tipo
		 FROM empresa_produto AS ep 
		   JOIN empresa AS e ON ep.id_empresa = e.id
           JOIN produto AS p ON p.id = ep.id_produto
           JOIN empresa_tipo AS et ON e.id_empresa_tipo = et.id
		 WHERE e.id >= 1
		 AND p.ativado = 1;
         
         
SELECT e.*, ep.id AS id_empresa_produto, ep.valor, p.titulo 
		 FROM empresa AS e
		 JOIN empresa_produto ep ON ep.id_empresa = e.id AND ep.ativado = 1 
		 JOIN produto AS p ON p.id = ep.id_produto AND p.ativado = 1 
		 WHERE p.id >= 1
		 AND e.ativado = 1;
         
         
SELECT e.*, ep.id AS id_empresa_produto, ep.valor, p.titulo, eps.valor 
		 FROM empresa AS e
		 JOIN empresa_produto ep ON ep.id_empresa = e.id AND ep.ativado = 1 
		 JOIN produto AS p ON p.id = ep.id_produto AND p.ativado = 1 
         JOIN empresa_produto_servico AS eps ON eps.id_empresa_produto = ep.id
		 WHERE p.id >= 1
         AND eps.valor <> 0
		 AND e.ativado = 1;
         
/* buscaServicoPorEmpresa */         
SELECT * FROM empresa_produto ep 
		 JOIN empresa_produto_servico ps ON ps.id_empresa_produto = ep.id AND ps.ativado = 1 
		 WHERE ep.id_empresa >= 1
		 AND ep.ativado = 1;
 
 /* listarPorFiltro */
SELECT e.id, es.id AS id_empresa_servico, e.nomefantasia, es.titulo,  es.valor 
		 FROM empresa AS e 
		 JOIN empresa_produto_servico AS es ON es.id_empresa_produto = e.id AND es.ativado = 1 
		 JOIN servico AS s ON s.id = es.id_servico AND s.ativado = 1
  --       join empresa_produto as ep on ep.id_empresa = es.id_empresa_produto and es.ativado = 1
		WHERE es.id >= 1 
		AND e.ativado = 1
        GROUP BY es.id_produto;         

/*C:\xampp\htdocs\drivycar\application\models\Empresa_servico_model.php
listaPorEmpresa L 7
*/
SELECT empresa_produto_servico.*, produto.titulo 
		 FROM empresa_produto_servico
		 JOIN produto ON produto.id = empresa_produto_servico.id_produto 
		 WHERE empresa_produto_servico.id_empresa_produto >= 127;


SELECT id_empresa_produto AS id_empresa, titulo, id_servico, id_produto, valor
FROM empresa_produto_servico
WHERE DATA >= '2019-03-17'
ORDER BY id_empresa;

/*  Troca de Serviços  */
SELECT * FROM empresa_produto WHERE id_empresa = 134; 
SELECT * FROM produto;
SELECT * FROM empresa_produto_servico WHERE id_empresa_produto = 100;

UPDATE empresa_produto_servico SET id_servico = 21 WHERE id = 199;
UPDATE empresa_produto_servico SET titulo = "Curso Prático Moto" WHERE id = 199;

SELECT * FROM empresa WHERE nomefantasia LIKE "Cfc Ab Federal";

SELECT * FROM empresa WHERE id IN (23,121);

SELECT * FROM bairros WHERE id IN (33,34);

SELECT * FROM servico;
