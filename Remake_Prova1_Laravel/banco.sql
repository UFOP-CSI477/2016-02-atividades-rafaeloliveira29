-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 09, 2017 at 01:34 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `provas`
--

-- --------------------------------------------------------

--
-- Table structure for table `atletas`
--

CREATE TABLE `atletas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atletas`
--

INSERT INTO `atletas` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Maria Silva', 'silva', '4620'),
(2, 'José Santos', 'santos', '4298'),
(3, 'Antônio Oliveira', 'oliveira', '4631'),
(4, 'João Souza', 'souza', '3262'),
(5, 'Francisco Pereira', 'pereira', '3415'),
(6, 'Ana Costela', 'costela', '4291'),
(7, 'Luiz Carvalho', 'carvalho', '4211'),
(8, 'Paulo Almeida', 'almeida', '3181'),
(9, 'Carlos Ferreira', 'ferreira', '4272'),
(10, 'Manoel Ribeiro', 'ribeiro', '4817'),
(11, 'Pedro Rodrigues', 'rodrigues', '4270'),
(12, 'Francisca Gomes', 'gomes', '3898'),
(13, 'Marcos Lima', 'lima', '3683'),
(14, 'Raimundo Martins', 'martins', '3723'),
(15, 'Sebastião Rocha', 'rocha', '4563'),
(16, 'Antônia Alves', 'alves', '4649'),
(17, 'Marcelo Araújo', 'araujo', '4557'),
(18, 'Jorge Xavier', 'xavier', '3837'),
(19, 'Márcia Barbosa', 'barbosa', '4516'),
(20, 'Geraldo Castro', 'castro', '4069'),
(21, 'Adriana Fernandes', 'fernandes', '3796'),
(22, 'Sandra Melo', 'melo', '3773'),
(23, 'Luis Azevedo', 'azevedo', '4477'),
(24, 'Fernando Barros', 'barros', '4070'),
(25, 'Fabio Cardoso', 'cardoso', '3916'),
(26, 'Roberto Correia', 'correia', '4371'),
(27, 'Márcio Cunha', 'cunha', '3109'),
(28, 'Edson Dias', 'dias', '3431'),
(29, 'André Mesquita', 'mesquita', '4828');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `data` varchar(10) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `preco`, `data`, `created_at`, `updated_at`) VALUES
(1, 'COPA 2017 MOUNTAIN BIKE', '120.00', '2017-05-21', NULL, NULL),
(2, 'BIKE ENDURO DE MARIANA', '75.00', '2017-04-09', NULL, NULL),
(3, 'IRON BIKER BRASIL 2017', '400.00', '2017-09-16', NULL, NULL),
(4, 'TROFEU REI DA MONTANHA', '80.00', '2017-06-04', NULL, NULL),
(5, 'MARATONA INTERNACIONAL ESTRADA REAL', '150.00', '2017-04-23', NULL, NULL),
(6, '20o. PEDAL DAS LULUZINHAS', '10.00', '2017-02-10', NULL, NULL),
(7, 'GOLDEN BIKER 2017', '180.00', '2017-05-20', NULL, NULL),
(8, 'CIMTB - COPA INTERNACIONAL DE MTB', '200.00', '2017-08-20', NULL, NULL),
(9, 'DESAFIO MINEIRO DE MARATONA 2017', '120.00', '2017-07-09', NULL, NULL),
(10, 'XTERRA CAMP OURO PRETO 2017', '170.00', '2017-07-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `atleta_id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `data` varchar(10) DEFAULT NULL,
  `pago` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registros`
--

INSERT INTO `registros` (`id`, `atleta_id`, `evento_id`, `data`, `pago`) VALUES
(1, 1, 1, '2017-05-21', b'1'),
(2, 15, 4, NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafael', 'rafael@hotmail.com', '$2y$10$tGZ6qYaLEc8POAiBoa.33.Cx5zAtgP/bOVL91HjCZNByIFDyEz3B6', 'N9LONXc6kExXgDnAKU6fdHT1L3LvLYzBjYWbNI32LiM2v6G37W3JJhYpZpky', '2017-03-05 06:23:12', '2017-03-05 06:23:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atletas`
--
ALTER TABLE `atletas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_registros_has_eventos` (`evento_id`),
  ADD KEY `idx_registros_has_atletas` (`atleta_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atletas`
--
ALTER TABLE `atletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `fk_registros_has_atletas` FOREIGN KEY (`atleta_id`) REFERENCES `atletas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registros_has_eventos` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
