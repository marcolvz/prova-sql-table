CREATE TABLE IF NOT EXISTS `persone` (
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `annoNascita` INT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `persone` (`nome`, `cognome`, `annoNascita`) VALUES
('Giuseppe', 'Musso', 1968),
('Maria', 'Cerrato', 1972),
('Andrea', 'Ferrero', 1991),
('Marco', 'Viarengo', 1989),
('Francesco', 'Fassio', 2000);
