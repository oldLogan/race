SELECT * FROM cliente_produto_servico;

SELECT * FROM cliente; -- 54
SELECT * FROM cliente_produto WHERE id_cliente = 54; -- 12

SELECT * FROM cliente_produto_servico WHERE id_cliente_produto = 12; -- 4B8887929F

/* buscarProdutoServicosPorChave */
SELECT cps.*, ae.horario, ae.data_event, e.nomefantasia, e.telefone, e.endereco, sr.id_empresa_tipo, eps.valor, eps.tem_aula, t.id AS id_turma, t.codigo, t.data_inicio, 
t.data_fim, t.hora_inicio, t.hora_fim, t.id_turma_pauta, (SELECT 1 FROM turma_chamada tc WHERE tc.id_turma_pauta = t.id_turma_pauta LIMIT 1) AS tem_grade 
        FROM cliente_produto_servico cps
        JOIN empresa_produto_servico AS eps ON eps.id = cps.id_empresa_produto_servico AND eps.ativado = 1 
        JOIN empresa_produto AS ep ON ep.id = cps.id_empresa_produto AND ep.ativado = 1
        JOIN empresa AS e ON e.id = ep.id_empresa AND e.ativado = 1
        JOIN servico AS sr ON sr.id = cps.id_servico

        LEFT JOIN (SELECT t.*, tp.id_cliente, tp.id AS id_turma_pauta FROM turma_pauta tp INNER JOIN turma t ON t.id = tp.id_turma AND t.ativado = 1 WHERE tp.ativado = 1)
		t ON t.id_cliente = cps.id_cliente AND t.id_empresa_produto_servico = cps.id_empresa_produto_servico

        LEFT JOIN agenda AS a ON a.id_empresa_produto_servico = cps.id_empresa_produto_servico AND a.ativado = 1
        LEFT JOIN agenda_evento AS ae ON ae.id_agenda = a.id AND ae.id_cliente = cps.id_cliente

        WHERE cps.chave = '83F552E58A'
        ORDER BY cps.ordem;
        
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;
 UPDATE cliente_produto_servico SET ordem = WHERE id = ;

SELECT * FROM servico;

UPDATE servico SET tem_aula = 0, ordem = 7 WHERE id = 23;

SELECT * FROM produto_servico WHERE id_servico = 23;

UPDATE produto_servico SET ordem = 7 WHERE id_servico = 23;


SELECT * FROM servico;

SELECT * FROM cliente_produto_servico;

SELECT * FROM produto_servico;
SELECT * FROM produto_servico WHERE id IN (2,17,22);
