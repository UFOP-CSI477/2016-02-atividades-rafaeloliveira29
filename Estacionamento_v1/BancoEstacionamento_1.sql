-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 11, 2017 at 07:29 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10
--usuario:tpfinal
--senha:123456
--Rafael Souza Oliveira 
--Michel Wagner Ferreira
--Sistema de Estacionamento

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Estacionamento_1`
--
CREATE DATABASE IF NOT EXISTS `Estacionamento_1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Estacionamento_1`;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_08_182934_create_veiculos_temp_table', 1),
(4, '2017_03_08_193246_create_veiculos_rel_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'joaozinho das couves', 'couves@estacionamento.com', '$2y$10$SaDDVFUXHm0QaTCUYVTYUuQHlO9qJYWjCBSWosGkl3htarpABQYd2', 'gEoSJDfZFvziypJUTZVcYZjgolsiYRfJ8tK1jurEYuzTtZnGMDrzzKCEGZ3d', '2017-03-09 00:21:50', '2017-03-09 00:21:50'),
(2, 'Joao Winchester', 'winchester@hotmail.com', '$2y$10$l34XoEIPOUJlR9omUsRDxO2dbFQcAcXVCtIamcaoQBlG2KU2gzc1W', 'PtROnA36RY0hXYOYhQTA8oddU87XCfHcGASFW8g1Qktt2wVTZtxEsehzE2Tb', '2017-03-09 20:24:16', '2017-03-09 20:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `veiculos_temp`
--

CREATE TABLE `veiculos_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `veiculo_placa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veiculo_modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veiculo_tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempo_estadia` int(11) DEFAULT NULL,
  `operador_responsavel` text COLLATE utf8mb4_unicode_ci,
  `valor_pago` float DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `veiculos_temp`
--

INSERT INTO `veiculos_temp` (`id`, `veiculo_placa`, `veiculo_modelo`, `veiculo_tipo`, `tempo_estadia`, `operador_responsavel`, `valor_pago`, `updated_at`, `created_at`, `status`) VALUES
(24, 'test22', 'teste', 'passeio', 76, 'joaozinho das couves', 456, '2017-03-11 03:24:30', '2017-03-11 02:07:23', 0),
(25, 'HHH-4983', 'camaro', 'Amarelo', 2, 'joaozinho das couves', 12, '2017-03-11 02:46:21', '2017-03-11 02:13:02', 0),
(26, 'KKK-1222', 'Camaro', 'Verde', 0, 'joaozinho das couves', 0, '2017-03-11 02:42:13', '2017-03-11 02:16:00', 0),
(27, 'wqeqw', 'wqeqw', 'ewqe', 5, 'joaozinho das couves', 30, '2017-02-02 01:37:30', '2017-02-09 01:31:52', 0),
(28, 'HHH-4933', 'Chrysler', 'Espacial', 0, 'joaozinho das couves', 0, '2017-02-09 02:26:10', '2017-02-22 03:26:03', 0),
(29, 'teste', 'teste', 'tres', 0, 'joaozinho das couves', 0, '2017-03-11 04:18:26', '2017-03-11 03:26:39', 0),
(30, 'Veiculo Teste', 'teste', 'teste', 0, 'joaozinho das couves', 0, '2017-03-11 04:04:56', '2017-03-11 04:04:35', 0),
(31, 'sdasds', 'sasa', 'sasasa', 0, 'joaozinho das couves', 0, '2017-03-11 04:25:46', '2017-03-11 04:25:43', 0),
(32, 'sadas', 'dsadas', 'dsadas', 0, 'joaozinho das couves', 0, '2017-03-11 04:27:12', '2017-03-11 04:25:52', 0),
(33, 'sadas', 'dasdsa', 'sadas', 0, 'joaozinho das couves', 0, '2017-03-11 04:32:50', '2017-03-11 04:31:26', 0),
(34, 'sadsa', 'dsadas', 'dsa', 0, 'joaozinho das couves', 0, '2017-05-17 04:37:26', '2017-05-25 04:37:22', 0),
(35, 'tete', 'tete', 'tete', 0, 'joaozinho das couves', 0, '2017-03-11 04:38:34', '2017-03-11 04:38:30', 0),
(36, 'dsadsa', 'sadas', 'dsadas', 1, 'joaozinho das couves', 6, '2017-03-11 04:40:21', '2017-03-11 04:39:15', 0),
(37, 'LLL4446', 'rasa', 'rasa', 6, 'joaozinho das couves', 36, '2017-03-11 04:47:46', '2017-03-11 04:41:38', 0),
(38, 'rasar', 'saad', 'sa', 4, 'joaozinho das couves', 24, '2017-03-11 04:54:08', '2017-03-11 04:49:10', 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `veiculos_temp`
--
ALTER TABLE `veiculos_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `veiculos_temp`
--
ALTER TABLE `veiculos_temp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;