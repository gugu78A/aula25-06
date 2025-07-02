DROP DATABASE IF EXISTS ifsp_inventario;
CREATE DATABASE ifsp_inventario;
USE ifsp_inventario;
CREATE TABLE inventario_computadores
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
codigo_patrimonio VARCHAR(050), -- codigo do patrimonio do computador
descricao VARCHAR(500), -- descrição computador
marca VARCHAR(100), -- marca computador
modelo VARCHAR(100), -- modelo computador
armazenamento INT, -- capacidade HD em megabytes
memoria INT, -- capacidade memória em megabytes
processador VARCHAR(100), -- processador computador
possui_placa_video BOOL, -- possui placa de vídeo externa sim/não
placa_video VARCHAR(100), -- descrição da placa de vídeo
sistema_operacional VARCHAR(050) -- SO instalado
);
select * from inventario_computadores;