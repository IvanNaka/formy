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


