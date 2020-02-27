/* 1° Habilitação Categoria AB */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (97,10,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* Adição da Categoria "A" */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (98,11,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* Adição da Categoria "B" */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (99,12,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* 1° Habilitação Categoria A */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (112,13,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* 1° Habilitação Categoria B */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (96,14,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* Mudança Categoria C */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (117,15,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* Mudança Categoria D */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (118,16,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

/* Mudança Categoria E */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (119,17,23, "Taxa de Serviço", "5.00", 7,0,0,0,"0.00","2019-04-17 13:33:33",1);

SELECT * FROM empresa_produto WHERE id_empresa = 44;

UPDATE empresa_produto SET valor = "1360.00" WHERE id = 99;
UPDATE empresa_produto SET valor = "2139.00" WHERE id = 96;
UPDATE empresa_produto SET valor = "802.08" WHERE id = 98;
UPDATE empresa_produto SET valor = "1755.00" WHERE id = 97;
UPDATE empresa_produto SET valor = "800.00" WHERE id = 116;

UPDATE empresa_produto SET valor = "1950.92" WHERE id = 117;
UPDATE empresa_produto SET valor = "1950.92" WHERE id = 118;
UPDATE empresa_produto SET valor = "2150.92" WHERE id = 119;

SELECT * FROM empresa;
SELECT * FROM empresa_produto_servico WHERE id_empresa_produto IN (117,118,119) AND valor = "195.00";


UPDATE empresa_produto_servico SET id_servico = 5, titulo = "Exame Toxicológico", ordem = 3 WHERE id = 283;





/* Toxicologico - Mudança Categoria D */
INSERT INTO empresa_produto_servico (`id_empresa_produto`,`id_produto`,`id_servico`,`titulo`,
`valor`,`ordem`,`tem_aula`,`qtd_aula`,`tempo_aula`,`valor_aula_extra`,`data`,`ativado`) 
VALUES (141,16,5, "Exame Toxicológico", "199.00", 3,0,0,0,"0.00","2019-04-17 13:33:33",1);





SELECT * FROM empresa_produto WHERE id_empresa = 44;

UPDATE empresa_produto SET valor = "1355.00" WHERE id = 99;
UPDATE empresa_produto SET valor = "2134.00" WHERE id = 96;
UPDATE empresa_produto SET valor = "797.08" WHERE id = 98;
UPDATE empresa_produto SET valor = "1750.00" WHERE id = 97;


UPDATE empresa_produto SET valor = "800.00" WHERE id = 116;

UPDATE empresa_produto SET valor = "1950.92" WHERE id = 117;
UPDATE empresa_produto SET valor = "1950.92" WHERE id = 118;
UPDATE empresa_produto SET valor = "2150.92" WHERE id = 119;

SELECT * FROM empresa;
SELECT * FROM empresa_produto_servico WHERE id_servico = 23;


SELECT * FROM empresa_produto WHERE id IN( '94','96','97','98','99','100','101','102','103','104','106','107','108','109','110','112','113','114',
 '115','116','117','118','119','120','121','122','123','124','125','127','128','129','130','131','138',
 '139','140','141','142','143','144','145','146','147','148','166','167','168','169','170','171','172',
 '173','174','175','176','177','178','179','180','181','182','183','184','185');
 
 
 
 
 
UPDATE `empresa_produto` SET  `valor` = '200.00' WHERE id = 148;
UPDATE `empresa_produto` SET  `valor` = '1300.00' WHERE id = 99;
UPDATE `empresa_produto` SET  `valor` = '2129.00' WHERE id = 96;
UPDATE `empresa_produto` SET  `valor` = '792.08' WHERE id = 98;
UPDATE `empresa_produto` SET  `valor` = '1745.00' WHERE id = 97;
UPDATE `empresa_produto` SET  `valor` = '1140.00' WHERE id = 100;
UPDATE `empresa_produto` SET  `valor` = '2190.00' WHERE id = 101;
UPDATE `empresa_produto` SET  `valor` = '2645.00' WHERE id = 102;
UPDATE `empresa_produto` SET  `valor` = '914.00' WHERE id = 103;
UPDATE `empresa_produto` SET  `valor` = '1589.00' WHERE id = 104;
UPDATE `empresa_produto` SET  `valor` = '1884.00' WHERE id = 106;
UPDATE `empresa_produto` SET  `valor` = '2145.00' WHERE id = 107;
UPDATE `empresa_produto` SET  `valor` = '800.00' WHERE id = 108;
UPDATE `empresa_produto` SET  `valor` = '1630.00' WHERE id = 109;
UPDATE `empresa_produto` SET  `valor` = '1784.00' WHERE id = 110;
UPDATE `empresa_produto` SET  `valor` = '1113.69' WHERE id = 112;
UPDATE `empresa_produto` SET  `valor` = '1814.69' WHERE id = 113;
UPDATE `empresa_produto` SET  `valor` = '1245.92' WHERE id = 114;
UPDATE `empresa_produto` SET  `valor` = '2367.11' WHERE id = 115;
UPDATE `empresa_produto` SET  `valor` = '795.00' WHERE id = 116;
UPDATE `empresa_produto` SET  `valor` = '1945.92' WHERE id = 117;
UPDATE `empresa_produto` SET  `valor` = '1945.92' WHERE id = 118;
UPDATE `empresa_produto` SET  `valor` = '2145.92' WHERE id = 119;
UPDATE `empresa_produto` SET  `valor` = '1986.00' WHERE id = 120;
UPDATE `empresa_produto` SET  `valor` = '2248.00' WHERE id = 121;
UPDATE `empresa_produto` SET  `valor` = '1461.00' WHERE id = 122;
UPDATE `empresa_produto` SET  `valor` = '799.00' WHERE id = 123;
UPDATE `empresa_produto` SET  `valor` = '1515.00' WHERE id = 124;
UPDATE `empresa_produto` SET  `valor` = '1835.00' WHERE id = 125;
UPDATE `empresa_produto` SET  `valor` = '1584.00' WHERE id = 127;
UPDATE `empresa_produto` SET  `valor` = '1984.00' WHERE id =128;
UPDATE `empresa_produto` SET  `valor` = '2045.00' WHERE id = 129;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 130;
UPDATE `empresa_produto` SET  `valor` = '1205.00' WHERE id = 131;
UPDATE `empresa_produto` SET  `valor` = '2195.00' WHERE id = 138;
UPDATE `empresa_produto` SET  `valor` = '1900.00' WHERE id = 139;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 140;
UPDATE `empresa_produto` SET  `valor` = '1888.00' WHERE id = 141;
UPDATE `empresa_produto` SET  `valor` = '1115.00' WHERE id = 142;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 143;
UPDATE `empresa_produto` SET  `valor` = '2195.00' WHERE id = 144;
UPDATE `empresa_produto` SET  `valor` = '1900.00' WHERE id = 145;
UPDATE `empresa_produto` SET  `valor` = '1115.00' WHERE id = 146;
UPDATE `empresa_produto` SET  `valor` = '1888.00' WHERE id = 147;
UPDATE `empresa_produto` SET  `valor` = '1584.00' WHERE id = 166;
UPDATE `empresa_produto` SET  `valor` = '1984.00' WHERE id = 167;
UPDATE `empresa_produto` SET  `valor` = '2045.00' WHERE id = 168;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 169;
UPDATE `empresa_produto` SET  `valor` = '1205.00' WHERE id = 170;
UPDATE `empresa_produto` SET  `valor` = '1584.00' WHERE id = 171;
UPDATE `empresa_produto` SET  `valor` = '1984.00' WHERE id = 172;
UPDATE `empresa_produto` SET  `valor` = '2045.00' WHERE id = 173;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 174;
UPDATE `empresa_produto` SET  `valor` = '1205.00' WHERE id = 175;
UPDATE `empresa_produto` SET  `valor` = '1584.00' WHERE id = 176;
UPDATE `empresa_produto` SET  `valor` = '1984.00' WHERE id = 177;
UPDATE `empresa_produto` SET  `valor` = '2045.00' WHERE id = 178;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 179;
UPDATE `empresa_produto` SET  `valor` = '1205.00' WHERE id = 180;
UPDATE `empresa_produto` SET  `valor` = '1584.00' WHERE id = 181;
UPDATE `empresa_produto` SET  `valor` = '1984.00' WHERE id = 182;
UPDATE `empresa_produto` SET  `valor` = '2045.00' WHERE id = 183;
UPDATE `empresa_produto` SET  `valor` = '747.00' WHERE id = 184;
UPDATE `empresa_produto` SET  `valor` = '1205.00' WHERE id = 185;

SELECT * FROM empresa WHERE nomefantasia LIKE "%%%%Express";