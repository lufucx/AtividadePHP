SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Caju', 'cajucomputador123@gmail.com', 123),
(2, 'Geovani', 'geovanifranca76@gmail.com', 123),
(3, 'Bernardo', 'bernardolaurindo2006@gmail.com', 123),
(4, 'Sostenis', 'sostenismarinhatiro@gmail.com', 123),
(5, 'Mara', 'maramulherdemarinheiro@gmail.com', 123);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
