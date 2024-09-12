SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `preco_custo` decimal(10,2) NOT NULL,
  `preco_venda` decimal(10,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `qtd_inteiro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produtos` (`id`, `descricao`, `fabricante`, `preco_custo`, `preco_venda`, `imagem`, `qtd_inteiro`) VALUES
(4, 'Caneta Bic', 'Bic', 0.50, 2.00, 'https://images.tcdn.com.br/img/img_prod/1055332/caneta_esferografica_bic_cristal_dura_1_0mm_azul_1un_635_2_19902f00739ce3af83bcf966b5df9633.jpg', 5),
(5, 'Garrafa', 'Crystal', 0.10, 1.50, 'https://acdn.mitiendanube.com/stores/001/218/477/products/agua-mineral-natural-crystal-sem-gas-com-1l1-e46f7be820fc363ee016570256327109-640-0.jpg', 10),
(6, 'Relógio', 'Casio W59', 40.00, 100.00, 'https://m.media-amazon.com/images/I/31t1xh+uWML._AC_.jpg', 10);

ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
