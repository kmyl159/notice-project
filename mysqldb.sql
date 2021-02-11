CREATE TABLE noticia (
	id INT(11) NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(20) NOT NULL,
  categoria VARCHAR(20) NOT NULL,
  conteudo VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO noticia(titulo,categoria,conteudo) 
VALUES ('ferido no trânsito','acidente','homem dorme no volante e causa acidente'),
('Mondial','esportes','palmeiras ganhou o mondial');