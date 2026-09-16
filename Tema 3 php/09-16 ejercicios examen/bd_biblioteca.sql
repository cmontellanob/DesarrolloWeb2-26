CREATE DATABASE IF NOT EXISTS bd_biblioteca;
USE bd_biblioteca;

DROP TABLE IF EXISTS libros;

CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    autor VARCHAR(150) NOT NULL,
    anio INT NOT NULL,
    editorial VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO libros (titulo, autor, anio, editorial) VALUES
('Introducción a la Informática', 'Michael Miller', 2015, 'Pearson'),
('Arquitectura de Computadoras', 'Patricio Quiroga', 2010, 'Alfaomega'),
('Curso Android', 'Maestros Web', 2018, 'Castellana'),
('Fundamentos de Programación', 'Luis Joyanes Aguilar', 2008, 'McGraw-Hill'),
('Redes de Computadoras', 'Andrew Tanenbaum', 2012, 'Pearson'),
('Base de Datos', 'Abraham Silberschatz', 2014, 'McGraw-Hill'),
('Ingeniería de Software', 'Ian Sommerville', 2011, 'Addison-Wesley'),
('Sistemas Operativos', 'William Stallings', 2013, 'Pearson'),
('Inteligencia Artificial', 'Stuart Russell', 2016, 'Pearson'),
('Desarrollo Web con PHP y MySQL', 'Luke Welling', 2017, 'Anaya Multimedia');
