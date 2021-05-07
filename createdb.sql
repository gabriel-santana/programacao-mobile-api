create table `ong` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`nome` varchar(40),
`desc` varchar(200),
`imagem` varchar(1000),
`site` varchar(100),
`cnpj` varchar(20),
`pix` varchar(100),
PRIMARY KEY (`id`)
)

create table `contato` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`id_ong` int(11) NOT NULL,
`nome` varchar(100),
`email` varchar(200),
`telefone` varchar(15),
PRIMARY KEY (`id`),
  CONSTRAINT `FK_ong_contato`
  FOREIGN KEY (`id_ong`) REFERENCES `ong` (`id`) 
)



INSERT INTO ong
(nome, `desc`, imagem, site, cnpj, pix)
VALUES('Criança Feliz', 'Nossa ONG tem o obetivo de fazer as crianças felizes, através de sua doação!', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHhtHLSZVmpUNJCS4YVf0VniOQBVIZFqyltY7Z6MLuIWrbl0hxAv8Ak5bpPsUHypzF7jc&usqp=CAU', 'https://redeglobo.globo.com/rpc/', '99.999.999/0001-99', '99.999.999/0001-99');


INSERT INTO contato
(id_ong, nome, email, telefone)
VALUES(1, 'Marcelo Chamuska', 'marcelo.cham@hotmail.com', '(41)99999-9999');




INSERT INTO ong
(nome, `desc`, imagem, site, cnpj, pix)
VALUES('Lar de Idosos Santa Mônica', 'Nossa ONG tem o obetivo de fazer as idosos felizes, através de sua doação!', 'https://htec.com.br/wp-content/uploads/2019/07/ong-1100x480.png', 'https://www.spacex.com/', '99.999.999/0001-99', '99.999.999/0001-99');


INSERT INTO contato
(id_ong, nome, email, telefone)
VALUES(2, 'Ana Maria Monica', 'maria.monica@hotmail.com', '(41)99999-9999');