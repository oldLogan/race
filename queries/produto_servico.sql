SELECT * FROM produto_servico;

SELECT * FROM produto_servico WHERE id_servico = 4;
UPDATE produto_servico SET ordem = 5 WHERE id_servico = 1; -- Simulador
UPDATE produto_servico SET ordem = 2 WHERE id_servico = 4; -- Exame aptidão fisica e Mental
UPDATE produto_servico SET ordem = 3 WHERE id_servico = 5; -- Exame Toxicológico
UPDATE produto_servico SET ordem = 6 WHERE id_servico = 8; -- Curso Prático de Direção Veicular
UPDATE produto_servico SET ordem = 4 WHERE id_servico = 9; -- Curso Teórico-Técnico
UPDATE produto_servico SET ordem = 1 WHERE id_servico = 19; -- Biometria
UPDATE produto_servico SET ordem = 2 WHERE id_servico = 20; -- Clinica - Exames + taxas
UPDATE produto_servico SET ordem = 6 WHERE id_servico = 21; -- Curso Prático Moto
