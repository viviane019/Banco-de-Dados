-- Criar BCD
create database Pizzaria;

-- Ativar Banco
 use Pizzaria;
 
-- Criar Tabelas
create table Cliente (
Id_Clientes int,
Telefone int,
Pagamento int,
endereco varchar(255)
);         

create table Atendente (
Id_Atendente int, 
Pagamento_Atendente int,
Receber_Pedido varchar(255),
Finalizar_Pedido int 
);         

create table Administrador (
Id_Administrador int,
Realizar_Pedido varchar(255),
Gerenciar_Funcionarios varchar(255),
Administar_Estoque varchar(255),
cancelar_Pedido varchar(255)
);         

create table Pizza (
Id_Pizza int,
Nome_Pizza varchar(255),
Ingredientes varchar(255),
Sabores varchar(255)
);
        select * from Cliente;
