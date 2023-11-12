create database projeto_formy;
use projeto_formy;

create table TBUsuario
(
    id_usuario  int(6) auto_increment primary key,
    senha       varchar(30) not null,
    email       varchar(30) not null,
    nome        varchar(30) not null,
    cpf        char(11) not null,
    bio         text(500),
    imagem      varchar(100),
    is_profesor boolean     default TRUE,
    is_aluno    boolean     default TRUE,
);

<<<<<<< HEAD
/*insert into TBUsuario values (2, '1234', 'gabriel.2317@hotmail.com', 'Gabriel Oleriano Candido', '09895749970', null, null, False,
True, 1, 1);*/
create table TBCatQuestionario
(
    id_cat    int(6) primary key,
    nome_desc varchar(30)  not null,
    descricao varchar(200) not null
);

insert into TBCatQuestionario (id_cat, nome_desc, descricao)
values (1, 'Matemática', 'Questionário de questões sobre matemática');
insert into TBCatQuestionario (id_cat, nome_desc, descricao)
values (2, 'História', 'Questionário de questões sobre matemática');
insert into TBCatQuestionario (id_cat, nome_desc, descricao)
values (3, 'Geografia', 'Questionário de questões sobre matemática');
insert into TBCatQuestionario (id_cat, nome_desc, descricao)
values (4, 'Química', 'Questionário de questões sobre matemática');
insert into TBCatQuestionario (id_cat, nome_desc, descricao)
values (5, 'Física', 'Questionário de questões sobre matemática');

=======
>>>>>>> 0c4e7f8faad9253753dcda57dcf3b844bed078d7
create table TBFormulario
(
    id_formulario int(6) auto_increment primary key,
    nome          varchar(100)  not null,
    imagem        varchar(100) null,
    dat_criacao   date          not null,
    pergunta      varchar(255) null,
    resposta      varchar(255) null,
    id_usuario    int(6) references TBUsuario
);

<<<<<<< HEAD
/*insert into TBFormulario values (1, 'Cálculo Integral', './Cálculo integral.jpg', '2023-11-12', 1);
insert into TBFormulario values (2, 'História do Brasil', './historia.jpg', '2023-08-15', 2);*/
=======
>>>>>>> 0c4e7f8faad9253753dcda57dcf3b844bed078d7

