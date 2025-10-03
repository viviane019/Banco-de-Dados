-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Aluno (
Nome_Aluno  varchar(255),
email varchar(255),
data_Nascimento  date,
Id_Aluno  int primary key alto increment  PRIMARY KEY
)

CREATE TABLE Curso (
Id_Curso int primar key alto increment  PRIMARY KEY,
Titulo Varchar(255),
Descricao Varchar(255),
Carga_Horaria int(5),
Status varchar(255)
)

CREATE TABLE Incri��es  (
Id_Incri�oes int primary  key  alto increment  PRIMARY KEY,
Data_Inscricao date,
Aluno_Id varchar(255),
Curso_Id int  fk
)

CREATE TABLE Avalia��es (
Id_Avaliacoes int primary key alto increment  PRIMARY KEY,
Incricoes_Id chave estrangeira ,
Nota Decimal ,
Comentario  Texto(1),
Id_Incri�oes int primary  key  alto increment ,
FOREIGN KEY(Id_Incri�oes) REFERENCES Incri��es  (Id_Incri�oes)
)

CREATE TABLE      Faz      (
Id_Incri�oes int primary  key  alto increment ,
Id_Aluno  int primary key alto increment ,
FOREIGN KEY(Id_Incri�oes) REFERENCES Incri��es  (Id_Incri�oes),
FOREIGN KEY(Id_Aluno ) REFERENCES Aluno (Id_Aluno)
)

CREATE TABLE Refere-se (
Id_Incri�oes int primary  key  alto increment ,
Id_Curso int primar key alto increment ,
FOREIGN KEY(Id_Incri�oes) REFERENCES Incri��es  (Id_Incri�oes),
FOREIGN KEY(Id_Curso) REFERENCES Curso (Id_Curso)
)

