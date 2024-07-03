Create database bd_biblioteca;
use bd_biblioteca;

CREATE TABLE usuario(
id INT AUTO_INCREMENT,
Nome VARCHAR (50),
Email VARCHAR (50),
Telefone VARCHAR (50),
Cidade VARCHAR (50),
Estado VARCHAR (50),
Endereco VARCHAR (50),
Rg VARCHAR (50),
Senha VARCHAR (32),
Tipo VARCHAR(30),

CONSTRAINT pk_usuario PRIMARY KEY (id)
);
Insert into usuario (Nome, Email, Senha,Tipo) values ('admin', 'admin@gmail.com',md5('123'),'admin');
CREATE TABLE categoria(
cod VARCHAR (50) NOT NULL,
Nome VARCHAR (50),

CONSTRAINT pk_categoria PRIMARY KEY (cod)
);

CREATE TABLE livro(
Id INT AUTO_INCREMENT,
Capa VARCHAR(1000) NOT NULL,
ISBN VARCHAR(100),
Titulo VARCHAR(100),
Edicao VARCHAR (50),
Editora VARCHAR (50),
Autor VARCHAR (50),
CodCategoria VARCHAR (50),
Idioma VARCHAR(30),
Paginas integer,
Descricao varchar(1000),

CONSTRAINT pk_livro PRIMARY KEY (Id)
);


CREATE TABLE emprestimo(
Id INT PRIMARY KEY AUTO_INCREMENT,
NomeUsuario VARCHAR(100),
RgUsuario VARCHAR (50),
DataEmpréstimo VARCHAR (50),
DataDevolucao VARCHAR (50),
ISBN VARCHAR (100),
IdLivro integer,

CONSTRAINT fk_livro FOREIGN KEY (IdLivro) REFERENCES livro (Id)
);



INSERT INTO categoria (cod, Nome) VALUES ('CFAN','Fantasia');
INSERT INTO categoria (cod, Nome) VALUES ('CACO','Ação');
INSERT INTO categoria (cod, Nome) VALUES ('CROM','Romance');
INSERT INTO categoria (cod, Nome) VALUES ('CBIO','Biografia');
INSERT INTO categoria (cod, Nome) VALUES ('CTER','Terror');
INSERT INTO categoria (cod, Nome) VALUES ('CFIC','Ficção Científica');
INSERT INTO categoria (cod, Nome) VALUES ('CLGB','LGBTQIA+');
INSERT INTO categoria (cod, Nome) VALUES ('CSUS','Suspense');
INSERT INTO categoria (cod, Nome) VALUES ('CINF','Infantil');
INSERT INTO categoria (cod, Nome) VALUES ('CAJD','Autoajuda');
INSERT INTO categoria (cod, Nome) VALUES ('CGAS','Gastronomia');
INSERT INTO categoria (cod, Nome) VALUES ('CREL','Religião e Espiritualidade');
INSERT INTO categoria (cod, Nome) VALUES ('CFAM','Família');
INSERT INTO categoria (cod, Nome) VALUES ('CTEC','Tecnologia');
INSERT INTO categoria (cod, Nome) VALUES ('CCIE','Ciência');
INSERT INTO categoria (cod, Nome) VALUES ('COUT','Outros');

INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/P1m3lup.jpg', '8555340942', 'Vermelho, branco e sangue azul', 1, 'Seguinte', 'Casey Mcquiston','CLGB', 'Português', 392,'Quando sua mãe foi eleita presidenta dos Estados Unidos, Alex Claremont-Diaz se tornou o novo queridinho da mídia norte-americana. Bonito, carismático e com personalidade forte, Alex tem tudo para seguir os passos de seus pais e conquistar uma carreira na política, como tanto deseja. Mas quando sua família é convidada para o casamento real do príncipe britânico Philip, Alex tem que encarar o seu primeiro desafio diplomático: lidar com Henry, irmão mais novo de Philip, o príncipe mais adorado do mundo, com quem ele é constantemente comparado ― e que ele não suporta.
O encontro entre os dois sai pior do que o esperado, e no dia seguinte todos os jornais do mundo estampam fotos de Alex e Henry caídos em cima do bolo real, insinuando uma briga séria entre os dois. Para evitar um desastre diplomático, eles passam um fim de semana fingindo ser melhores amigos e não demora para que essa relação evolua para algo que nenhum dos dois poderia imaginar ― e que não tem nenhuma chance de dar certo. Ou tem?');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/Bz0g1AB.jpg', '8501112518', 'É Assim que Acaba', 32, 'Galera', 'Colleen Hoover', 'CROM', 'Português', 368,'Em É assim que acaba, Colleen Hoover nos apresenta Lily, uma jovem que se mudou de uma cidadezinha do Maine para Boston, se formou em marketing e abriu a própria floricultura. E é em um dos terraços de Boston que ela conhece Ryle, um neurocirurgião confiante, teimoso e talvez até um pouco arrogante, com uma grande aversão a relacionamentos, mas que se sente muito atraído por ela.
Quando os dois se apaixonam, Lily se vê no meio de um relacionamento turbulento que não é o que ela esperava. Mas será que ela conseguirá enxergar isso, por mais doloroso que seja?
É assim que acaba é uma narrativa poderosa sobre a força necessária para fazer as escolhas certas nas situações mais difíceis. Considerada a obra mais pessoal de Hoover, o livro aborda sem medo alguns tabus da sociedade para explorar a complexidade das relações tóxicas, e como o amor e o abuso muitas vezes coexistem em uma confusão de sentimentos.');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/BRCOI72.jpg', '6559811395', 'É Assim que Começa', 1, 'Galera', 'Colleen Hoover','CROM', 'Português', 336,'Lily Bloom continua administrando uma floricultura. Seu ex-marido abusivo, Ryle Kincaid, ainda é um    cirurgião. Mas agora os dois estão oficialmente divorciados e dividem a guarda da filha, Emerson.
Quando Lily esbarra em Atlas ― com quem não fala há quase dois anos ―, parece que finalmente chegou o momento de retomar o relacionamento da adolescência, já que ele também está solteiro e parece retribuir os sentimentos de Lily. Mas apesar de divorciada, Lily não está exatamente livre de Ryle. Culpando Atlas pelo fim de seu casamento, Ryle não está nada disposto a aceitar o novo relacionamento de Lily, ainda mais com Atlas, o último homem que aceitaria ver perto de sua filha e da ex-esposa.
Alternando entre os pontos de vista de Atlas e Lily, É assim que começa retoma logo após o epílogo de É assim que acaba. Revelando mais sobre o passado de Atlas e acompanhando a jornada de Lily para abraçar a sua segunda chance, no amor enquanto lida com um ex-marido ciumento, É assim que começa prova que ninguém entrega uma leitura mais emocionante do que Colleen Hoover.');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/3U7eafF.jpg', '6555653302', 'A hipótese do amor ', 1, 'Editora Arqueiro', 'Ali Hazelwood','CROM', 'Português', 336,'Olive Smith, aluna do doutorado em Biologia da Universidade Stanford, acredita na ciência – não em algo incontrolável como o amor.
Depois de sair algumas vezes com Jeremy, ela percebe que sua melhor amiga gosta dele e decide juntá-los. Para mostrar que está feliz com essa escolha, Olive precisa ser convincente: afinal, cientistas exigem provas.
Sem muitas opções, ela resolve inventar um namoro de mentira e, num momento de pânico, beija o primeiro homem que vê pela frente.
O problema é que esse homem é Adam Carlsen, um jovem professor de prestígio – conhecido por levar os alunos às lágrimas. Por isso, Olive fica chocada quando o tirano dos laboratórios concorda em levar adiante a farsa e fingir ser seu namorado.
De repente, seu pequeno experimento parece perigosamente próximo da combustão e aquela pequena possibilidade científica, que era apenas uma hipótese sobre o amor, transforma-se em algo totalmente inesperado.');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/GK1B0pj.jpg', '8535932569', 'Pessoas normais', 1, 'Companhia das Letras', 'Sally Rooney','CROM', 'Português', 264,'Na escola, no interior da Irlanda, Connell e Marianne fingem não se conhecer. Ele é a estrela do time de futebol, ela é solitária e preza por sua privacidade. Mas a mãe de Connell trabalha como empregada na casa dos pais de Marianne, e quando o garoto vai buscar a mãe depois do expediente, uma conexão estranha e indelével cresce entre os dois adolescentes ― contudo, um deles está determinado a esconder a relação.
Um ano depois, ambos estão na universidade, em Dublin. Marianne encontrou seu lugar em um novo mundo enquanto Connell fica à margem, tímido e inseguro. Ao longo dos anos da graduação, os dois permanecem próximos, como linhas que se encontram e separam conforme as oportunidades da vida. Porém, enquanto Marianne se embrenha em um espiral de autodestruição e Connell começa a duvidar do sentido de suas escolhas, eles precisam entender até que ponto estão dispostos a ir para salvar um ao outro. Uma história de amor entre duas pessoas que tentam ficar separadas, mas descobrem que isso pode ser mais difícil do que tinham imaginado.');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/0AZfE2Q.jpg', '6555320575', 'Jogos vorazes', 1, 'Rocco Jovens Leitores', 'Suzanne Collins','CDIS', 'Português', 400,'Na abertura dos Jogos Vorazes, a organização não recolhe os corpos dos combatentes caídos e dá tiros de canhão até o final. Cada tiro, um morto. Onze tiros no primeiro dia. Treze jovens restaram, entre eles, Katniss. Para quem os tiros de canhão serão no dia seguinte?... Após o fim da América do Norte, uma nova nação chamada Panem surge. Formada por doze distritos, é comandada com mão de ferro pela Capital. Uma das formas com que demonstra seu poder sobre o resto do carente país é com Jogos Vorazes, uma competição anual transmitida ao vivo pela televisão, em que um garoto e uma garota de doze a dezoito anos de cada distrito são selecionados e obrigados a lutar até a morte! Para evitar que sua irmã seja a mais nova vítima do programa, Katniss se oferece para participar em seu lugar. Vinda do empobrecido Distrito 12, ela sabe como sobreviver em um ambiente hostil. Peeta, um garoto que ajudou sua família no passado, também foi selecionado. Caso vença, terá fama e fortuna. Se perder, morre. Mas para ganhar a competição, será preciso muito mais do que habilidade. Até onde Katniss estará disposta a ir para ser vitoriosa nos Jogos Vorazes? Best-seller da Veja, a trilogia Jogos Vorazes foi adaptada para o cinema e estrelada por Jennifer Lawrence.');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('https://i.imgur.com/bvucN8v.jpg', '8525067423', 'A cinco passos de você', '1', 'Alt', 'Mikki Daughtry e Rachael Lippincott','CROM',288,'Stella Grant gosta de estar no controle. Ela parece ser uma adolescente típica, mas em sua rotina há listas de tarefas e inúmeros remédios que ela deve tomar para controlar a fibrose cística, uma doença crônica que impede que seus pulmões funcionem como deveriam. Suas prioridades são manter seus pais felizes e conseguir um transplante – e uma coisa não existe sem a outra. Mas para ganhar pulmões novos, Stella precisa seguir seu tratamento à risca e eliminar qualquer chance de infecção, o que significa que ela não pode ficar a menos que dois metros de distância – ou seis passos – de outros pacientes com a doença. O primeiro item é fácil para ela, mas o segundo pode se provar mais difícil do que ela esperava.
O único controle que Will Newman deseja é o de sua própria vida. Ele não dá a mínima para o novo tratamento experimental para o qual foi selecionado e não aguenta mais a pressão de sua mãe para que melhore. Prestes a completar dezoito anos, ele mal pode esperar para finalmente se livrar das máquinas e hospitais, usando o pouco de vida que ainda lhe resta para conhecer o mundo. Stella e Will são muito diferentes. Ao mesmo tempo, a doença que os une não é a única coisa que têm em comum. Eles têm que ficar a cinco passos um do outro, mas, conforme a conexão entre os dois aumenta, a vontade de burlar a distância física parece insuportável. Um grande amor vale um passo roubado');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('', '', '', '', '', '','');
INSERT INTO `livro`( `Capa`, `ISBN`, `Titulo`, `Edicao`, `Editora`, `Autor`, `CodCategoria`,  `Idioma`, `Paginas`, `Descricao`) VALUES ('', '', '', '', '', '','');