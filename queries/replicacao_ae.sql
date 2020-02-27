SELECT * FROM empresa WHERE id = 148;
UPDATE EMPRESA SET BAIRRO = 13 WJERE ID = 148;

SELECT * FROM empresa_produto WHERE id_empresa = 148;

/* AUTOESCOLA REGIONAL SUDOESTE */
INSERT INTO empresa (id_empresa_tipo, nome, nomefantasia, cnpj, razaosocial, representante, inscricao_estadual, 
descricao,email, imagem, googlemaps, telefone, celular, endereco, cep, id_bairro, id_cidade, id_estado, login, 
senha, DATA, ativado, localizacao) 
VALUES('1','Auto Escola Regional','Auto Escola Regional','18.966.780/0011-94','Centro de formação de condutores B Regional EIRELI','Cesar medeiros dos Santoss','\'',
'','contatosregional@gmail.com',NULL,NULL,'(61) 3234-3195','(61) 92368-805','Q SHC/AO/S EQ 04/05 Bloco B 13 Loja 15 Subsolo','70660-049','13','2','7','cfcregional1',
'e10adc3949ba59abbe56e057f20f883e','2019-04-08 09:03:26','1','');


INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('157','13','1589.00',NULL,'2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('157','14','1989.00',NULL,'2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('157','10','2050.00',NULL,'2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('157','11','752.00',NULL,'2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('157','12','1210.00',NULL,'2019-04-08 13:21:09','1');


INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('166','13','9','Curso Teórico-Técnico','300.00', '4','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`)  VALUES('166','13','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('166','13','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('166','13','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('167','14','1','Simulador','350.00','5','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('167','14','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('167','14','9','Curso Teórico-Técnico','350.00','4','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('167','14','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('167','14','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','1','Simulador','300.00','5','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','9','Curso Teórico-Técnico','300.00','4','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','21','Curso Prático Moto','200.00','6','1','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','20','Clinica - Exames + taxas','745.00','2','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('169','11','20','Clinica - Exames + taxas','447.00','2','0','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('169','11','21','Curso Prático Moto','300.00','6','1','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('170','12','1','Simulador','240.00','5','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('170','12','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('170','12','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('170','12','20','Clinica - Exames + taxas','465.00','2','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('168','10','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('169','11','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('170','12','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('166','13','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('167','14','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
/* ######################################################################################################################################################################################################### */


SELECT * FROM empresa WHERE id = 158;

SELECT * FROM empresa_produto WHERE id_empresa = 158;

/* AUTOESCOLA REGIONAL CRUZEIRO */
INSERT INTO empresa (id_empresa_tipo, nome, nomefantasia, cnpj, razaosocial, representante, inscricao_estadual, 
descricao,email, imagem, googlemaps, telefone, celular, endereco, cep, id_bairro, id_cidade, id_estado, login, 
senha, DATA, ativado, localizacao) 
VALUES('1','Auto Escola Regional','Auto Escola Regional','18.966.780/0021-94','Centro de formação de condutores B Regional EIRELI','Cesar medeiros dos Santoss','\'',
'','contatosregional@gmail.com',NULL,NULL,'(61) 3234-3195','(61) 92368-805','Q SHC/AO/S EQ 04/05 Bloco B 13 Loja 15 Subsolo','70660-049','17','2','7','cfcregional2',
'e10adc3949ba59abbe56e057f20f883e','2019-04-08 09:03:26','1','');



INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('158','13','1589.00',NULL,'2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('158','14','1989.00',NULL,'2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('158','10','2050.00',NULL,'2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('158','11','752.00',NULL,'2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('158','12','1210.00',NULL,'2019-04-08 13:21:09','1');


INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('171','13','9','Curso Teórico-Técnico','300.00', '4','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`)  VALUES('171','13','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('171','13','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('171','13','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('172','14','1','Simulador','350.00','5','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('172','14','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('172','14','9','Curso Teórico-Técnico','350.00','4','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('172','14','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('172','14','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','1','Simulador','300.00','5','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','9','Curso Teórico-Técnico','300.00','4','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','21','Curso Prático Moto','200.00','6','1','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','20','Clinica - Exames + taxas','745.00','2','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('174','11','20','Clinica - Exames + taxas','447.00','2','0','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('174','11','21','Curso Prático Moto','300.00','6','1','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('175','12','1','Simulador','240.00','5','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('175','12','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('175','12','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('175','12','20','Clinica - Exames + taxas','465.00','2','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('173','10','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('174','11','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('175','12','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('171','13','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('172','14','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
/* ######################################################################################################################################################################################################### */


SELECT * FROM empresa WHERE id = 159;

SELECT * FROM empresa_produto WHERE id_empresa = 159;

/* AUTOESCOLA REGIONAL GUARÁ */
INSERT INTO empresa (id_empresa_tipo, nome, nomefantasia, cnpj, razaosocial, representante, inscricao_estadual, 
descricao,email, imagem, googlemaps, telefone, celular, endereco, cep, id_bairro, id_cidade, id_estado, login, 
senha, DATA, ativado, localizacao) 
VALUES('1','Auto Escola Regional','Auto Escola Regional','18.966.780/0031-94','Centro de formação de condutores B Regional EIRELI','Cesar medeiros dos Santoss','\'',
'','contatosregional@gmail.com',NULL,NULL,'(61) 3234-3195','(61) 92368-805','Q SHC/AO/S EQ 04/05 Bloco B 13 Loja 15 Subsolo','70660-049','5','2','7','cfcregional3',
'e10adc3949ba59abbe56e057f20f883e','2019-04-08 09:03:26','1','');


INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('159','13','1589.00',NULL,'2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('159','14','1989.00',NULL,'2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('159','10','2050.00',NULL,'2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('159','11','752.00',NULL,'2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('159','12','1210.00',NULL,'2019-04-08 13:21:09','1');



INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('176','13','9','Curso Teórico-Técnico','300.00', '4','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`)  VALUES('176','13','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('176','13','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('176','13','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('177','14','1','Simulador','350.00','5','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('177','14','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('177','14','9','Curso Teórico-Técnico','350.00','4','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('177','14','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('177','14','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','1','Simulador','300.00','5','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','9','Curso Teórico-Técnico','300.00','4','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','21','Curso Prático Moto','200.00','6','1','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','20','Clinica - Exames + taxas','745.00','2','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('179','11','20','Clinica - Exames + taxas','447.00','2','0','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('179','11','21','Curso Prático Moto','300.00','6','1','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('180','12','1','Simulador','240.00','5','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('180','12','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('180','12','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('180','12','20','Clinica - Exames + taxas','465.00','2','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('178','10','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('179','11','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('180','12','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('176','13','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('177','14','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
/* ######################################################################################################################################################################################################### */


SELECT * FROM empresa WHERE id = 160;

SELECT * FROM empresa_produto WHERE id_empresa = 160;

/* AUTOESCOLA REGIONAL ASA SUL */
INSERT INTO empresa (id_empresa_tipo, nome, nomefantasia, cnpj, razaosocial, representante, inscricao_estadual, 
descricao,email, imagem, googlemaps, telefone, celular, endereco, cep, id_bairro, id_cidade, id_estado, login, 
senha, DATA, ativado, localizacao) 
VALUES('1','Auto Escola Regional','Auto Escola Regional','18.966.780/0041-94','Centro de formação de condutores B Regional EIRELI','Cesar medeiros dos Santoss','\'',
'','contatosregional@gmail.com',NULL,NULL,'(61) 3234-3195','(61) 92368-805','Q SHC/AO/S EQ 04/05 Bloco B 13 Loja 15 Subsolo','70660-049','2','2','7','cfcregional4',
'e10adc3949ba59abbe56e057f20f883e','2019-04-08 09:03:26','1','');


INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('160','13','1589.00',NULL,'2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('160','14','1989.00',NULL,'2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('160','10','2050.00',NULL,'2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('160','11','752.00',NULL,'2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto` (`id_empresa`, `id_produto`, `valor`, `descricao`, `data`, `ativado`) VALUES('160','12','1210.00',NULL,'2019-04-08 13:21:09','1');


INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('181','13','9','Curso Teórico-Técnico','300.00', '4','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`)  VALUES('181','13','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('181','13','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('181','13','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:09:52','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('182','14','1','Simulador','350.00','5','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('182','14','8','Curso Prático de Direção Veicular','400.00','6','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('182','14','9','Curso Teórico-Técnico','350.00','4','1','1','1','1.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('182','14','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('182','14','20','Clinica - Exames + taxas','684.00','2','0','0','0','0.00','2019-04-08 09:13:01','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','1','Simulador','300.00','5','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','9','Curso Teórico-Técnico','300.00','4','1','1','1','1.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','21','Curso Prático Moto','200.00','6','1','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','20','Clinica - Exames + taxas','745.00','2','0','0','0','0.00','2019-04-08 09:14:59','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('184','11','20','Clinica - Exames + taxas','447.00','2','0','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('184','11','21','Curso Prático Moto','300.00','6','1','0','0','0.00','2019-04-08 13:19:41','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('185','12','1','Simulador','240.00','5','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('185','12','8','Curso Prático de Direção Veicular','300.00','6','1','1','1','1.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('185','12','19','Biometria ','200.00','1','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('185','12','20','Clinica - Exames + taxas','465.00','2','0','0','0','0.00','2019-04-08 13:21:09','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('183','10','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('184','11','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('185','12','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('181','13','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
INSERT INTO `empresa_produto_servico` (`id_empresa_produto`, `id_produto`, `id_servico`, `titulo`, `valor`,
 `ordem`, `tem_aula`, `qtd_aula`, `tempo_aula`, `valor_aula_extra`, `data`, `ativado`) VALUES('182','14','23','Taxa de Serviço','5.00','7','0','0','0','0.00','2019-04-17 13:33:33','1');
/* ######################################################################################################################################################################################################### */


