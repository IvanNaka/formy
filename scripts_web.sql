create database projeto_formy;
use projeto_formy;


create table TBCurso
(
    id_curso  int(6) primary key,
    nome_desc varchar(30) not null
);

insert into TBCurso (id_curso, nome_desc)
values (1, 'Engenharia de Software');
insert into TBCurso (id_curso, nome_desc)
values (2, 'Sistemas de Informação');
insert into TBCurso (id_curso, nome_desc)
values (3, 'Ciência da Computação');
insert into TBCurso (id_curso, nome_desc)
values (4, 'Jogos digitais');
insert into TBCurso (id_curso, nome_desc)
values (5, 'TADS');

create table TBInstituicaoEns
(
    id_ie     int(6) primary key,
    nome_desc varchar(30) not null
);

insert into TBInstituicaoEns (id_ie, nome_desc)
values (1, 'PUCPR');
insert into TBInstituicaoEns (id_ie, nome_desc)
values (2, 'UTFPR');
insert into TBInstituicaoEns (id_ie, nome_desc)
values (3, 'UFPR');
insert into TBInstituicaoEns (id_ie, nome_desc)
values (4, 'Universidade Positivo');
insert into TBInstituicaoEns (id_ie, nome_desc)
values (5, 'Universidade Tuiuti');

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
    id_curso    int(6) references TBCurso,
    id_ie       int(6) references TBInstituicaoEns
);




