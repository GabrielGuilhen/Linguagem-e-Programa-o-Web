-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS `patrimonio_mvc_novo`;

-- Usar o banco
USE `patrimonio_mvc_novo`;

-- Tabela bens_imoveis (dados fixos)
CREATE TABLE `bens_imoveis` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome_da_escola` VARCHAR(100) NOT NULL,
    `localizacao` VARCHAR(200) NOT NULL,
    `tamanho_em_m2` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserir dados fixos em bens_imoveis
INSERT INTO `bens_imoveis` (`nome_da_escola`, `localizacao`, `tamanho_em_m2`) VALUES
('Escola Municipal Cora Coralina', 'Rua das Rosas, 325 - Jardim das Flores', 1200),
('CMEI Novo Horizonte', 'Rua Luiz Carlos A. Pinheiro, 434 - Jardim Novo Horizonte', 800),
('CMEI Zilda Arns', 'Rua Barão da Serra Negra, 2169 - Parque Residencial Morumbi II', 600),
('CMEI Vila Esmeralda', 'Rua Potiguaras, 2518 - Vila Esmeralda', 700),
('CMEI Vítor Basso', 'Rua Engenho Novo, 299 - Parque Imperatriz', 900),
('Escola Municipal Cândido Portinari', 'Rua Eduardo Corrêa - Morumbi', 1500),
('CMEI Dona Brida', 'Rua Dona Brida - Loteamento Dona Brida', 650),
('CMEI Maricota Basso', 'Rua Maricota Basso - Jardim São Paulo', 750),
('Escola Municipal Carlos Gomes', 'Rua Carlos Gomes - Campos do Iguaçu', 1300),
('Escola Municipal Duque de Caxias', 'Rua Duque de Caxias - Centro', 1400),
('Escola Municipal Arnaldo Isidoro', 'Rua Arnaldo Isidoro - Vila A', 1100),
('Escola Municipal João XXIII', 'Rua João XXIII - Três Lagoas', 1600),
('Escola Municipal Eloi Lohmann', 'Rua Eloi Lohmann - Três Lagoas', 1200),
('Escola Municipal Josinete Holler', 'Rua Josinete Holler - Vila A', 1000),
('Escola Municipal Altair Ferrais da Silva', 'Rua Altair Ferrais da Silva - Jardim Ipê', 1700),
('CMEI Ozires Santos', 'Rua Ozires Santos - Bubas', 550),
('Escola Municipal Três Bandeiras', 'Rua Três Bandeiras - Três Bandeiras', 1800),
('Escola Municipal Cora Coralina', 'Rua Cora Coralina - Morumbi III', 1300),
('CMEI Viviane Jara Benitez', 'Rua Viviane Jara Benitez - Bubas', 600),
('Escola Municipal Vinicius de Moraes', 'Rua das Rosas, 325 - Jardim das Flores', 1400),
('CMEI Vila Esmeralda', 'Rua Potiguaras, 2518 - Vila Esmeralda', 700),
('Escola Municipal Carlos Gomes', 'Rua Carlos Gomes - Campos do Iguaçu', 1300),
('CMEI Maricota Basso', 'Rua Maricota Basso - Jardim São Paulo', 750),
('Escola Municipal Cândido Portinari', 'Rua Cândido Portinari - Jardim Petrópolis', 1500),
('CMEI Dona Brida', 'Rua Dona Brida - Loteamento Dona Brida', 650),
('Escola Municipal Arnaldo Isidoro', 'Rua Arnaldo Isidoro - Vila A', 1100),
('Escola Municipal João XXIII', 'Rua João XXIII - Três Lagoas', 1600),
('Escola Municipal Eloi Lohmann', 'Rua Eloi Lohmann - Três Lagoas', 1200),
('Escola Municipal Josinete Holler', 'Rua Josinete Holler - Vila A', 1000),
('Escola Municipal Altair Ferrais da Silva', 'Rua Altair Ferrais da Silva - Jardim Ipê', 1700),
('CMEI Ozires Santos', 'Rua Ozires Santos - Bubas', 550),
('Escola Municipal Três Bandeiras', 'Rua Três Bandeiras - Três Bandeiras', 1800),
('Escola Municipal Cora Coralina', 'Rua Cora Coralina - Morumbi III', 1300),
('CMEI Viviane Jara Benitez', 'Rua Viviane Jara Benitez - Bubas', 600),
('Escola Municipal Vinicius de Moraes', 'Rua Vinicius de Moraes - Jardim das Flores', 1400),
('CMEI Vila Esmeralda', 'Rua Vila Esmeralda - Vila Esmeralda', 700),
('Escola Municipal Carlos Gomes', 'Rua Carlos Gomes - Campos do Iguaçu', 1300),
('CMEI Maricota Basso', 'Rua Maricota Basso - Jardim São Paulo', 750),
('Escola Municipal Cândido Portinari', 'Rua Cândido Portinari - Jardim Petrópolis', 1500),
('CMEI Dona Brida', 'Rua Dona Brida - Loteamento Dona Brida', 650),
('Escola Municipal Arnaldo Isidoro', 'Rua Arnaldo Isidoro - Vila A', 1100),
('Escola Municipal João XXIII', 'Rua João XXIII - Três Lagoas', 1600),
('Escola Municipal Eloi Lohmann', 'Rua Eloi Lohmann - Três Lagoas', 1200),
('Escola Municipal Josinete Holler', 'Rua Josinete Holler - Vila A', 1000),
('Escola Municipal Altair Ferrais da Silva', 'Rua Altair Ferrais da Silva - Jardim Ipê', 1700),
('CMEI Ozires Santos', 'Rua Ozires Santos - Bubas', 550),
('Escola Municipal Três Bandeiras', 'Rua Três Bandeiras - Três Bandeiras', 1800),
('Escola Municipal Cora Coralina', 'Rua Cora Coralina - Morumbi III', 1300),
('CMEI Viviane Jara Benitez', 'Rua Viviane Jara Benitez - Bubas', 600),
('Escola Municipal Vinicius de Moraes', 'Rua Vinicius de Moraes - Jardim das Flores', 1400),
('CMEI Vila Esmeralda', 'Rua Vila Esmeralda - Vila Esmeralda', 700);
