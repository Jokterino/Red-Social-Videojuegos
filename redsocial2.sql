-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2022 a las 02:01:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idPublicacion` int(11) NOT NULL,
  `comentario` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `registrado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `idUsuario`, `idPublicacion`, `comentario`, `registrado`) VALUES
(5, 1, 8, 'Igual mi querido amigo :c', '2022-07-05 08:12:15'),
(7, 2, 9, 'Me reencanta ese juego', '2022-07-05 07:06:06'),
(9, 5, 8, 'Cuando salga será el juegazo del año', '2022-07-05 10:15:07'),
(10, 5, 11, 'Para que se la deleteen en 2s', '2022-07-05 10:15:54'),
(11, 3, 9, 'Opino lo mismo', '2022-07-05 23:57:42'),
(14, 3, 16, 'adsljkas', '2022-07-18 22:04:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `puntuacion` text COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `creador` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripción` text COLLATE utf8_spanish2_ci NOT NULL,
  `cantidadJugadores` int(11) NOT NULL,
  `fotoJuego` text COLLATE utf8_spanish2_ci NOT NULL,
  `fotoGameplay1` text COLLATE utf8_spanish2_ci NOT NULL,
  `fotoGameplay2` text COLLATE utf8_spanish2_ci NOT NULL,
  `fotoGameplay3` text COLLATE utf8_spanish2_ci NOT NULL,
  `video` text COLLATE utf8_spanish2_ci NOT NULL,
  `espMin` text COLLATE utf8_spanish2_ci NOT NULL,
  `espMax` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`idJuego`, `Nombre`, `puntuacion`, `categoria`, `creador`, `descripción`, `cantidadJugadores`, `fotoJuego`, `fotoGameplay1`, `fotoGameplay2`, `fotoGameplay3`, `video`, `espMin`, `espMax`) VALUES
(1, 'Hollow Knight', '5,0', 2, 'Team Cherry', '¡Forja tu propio camino en Hollow Knight! Una aventura de acción épica a través de un vasto reino en ruinas de insectos y héroes. Explora cavernas retorcidas, lucha contra criaturas contaminadas y hazte amigo de bichos extraños, todo en un estilo 2D clásico dibujado a mano.', 1, 'img/imgJuegos/HollowKnight.jpg', 'img/imgJuegos/HK/Gameplay1.jpg', 'img/imgJuegos/HK/Gameplay2.jpg', 'img/imgJuegos/HK/Gameplay3.jpg', 'https://www.youtube.com/embed/UAO2urG23S4', 'MÍNIMO:<br>\r\nSO: Windows 7 (64bit)<br>\r\nProcesador: Intel Core 2 Duo E5200<br>\r\nMemoria: 4 GB de RAM<br>\r\nGráficos: GeForce 9800GTX+ (1GB)<br>\r\nDirectX: Versión 10<br>\r\nAlmacenamiento: 9 GB de espacio disponible<br>\r\nNotas adicionales: 1080p, 16:9 recomendado<br>', 'RECOMENDADO:<br>\r\nSO: Windows 10 (64bit)<br>\r\nProcesador: Intel Core i5<br>\r\nMemoria: 8 GB de RAM<br>\r\nGráficos: GeForce GTX 560<br>\r\nDirectX: Versión 11<br>\r\nAlmacenamiento: 9 GB de espacio disponible<br>\r\nNotas adicionales: 1080p, 16:9 recomendado<br>'),
(2, 'Cyberpunk 2077', '4,3', 1, 'CD PROJEKT RED', 'Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en el futuro sombrío de Night City, una peligrosa megalópolis obsesionada con el poder, el glamur y las incesantes modificaciones corporales.', 1, 'img/imgJuegos/CyberPunk.jpg', 'img/imgJuegos/CP/Gameplay1.jpg', 'img/imgJuegos/CP/Gameplay2.jpg', 'img/imgJuegos/CP/Gameplay3.jpg', 'https://www.youtube.com/embed/qIcTM8WXFjk', 'MÍNIMO:<br>\r\nRequiere un procesador y un sistema operativo de 64 bits\r\nASI QUE: Windows 10<br>\r\nProcesador:Intel Core i5-3570K o AMD FX-8310<br>\r\nMemoria: 8 GB de RAM<br>\r\nGráficos:NVIDIA GeForce GTX 970 o AMD Radeon RX 470<br>\r\nDirectX: Versión 12<br>\r\nAlmacenamiento: 70 GB de espacio disponible<br>\r\nNotas adicionales: En este juego te encontrarás con una variedad de efectos visuales que pueden provocar convulsiones o pérdida del conocimiento en una minoría de personas. Si usted o alguien que conoce experimenta alguno de los síntomas anteriores mientras juega, deténgase y busque atención médica de inmediato.', 'RECOMENDADO:<br>\r\nRequiere un procesador y un sistema operativo de 64 bits<br>\r\nASI QUE: Windows 10\r\nProcesador: Intel Core i7-4790 o AMD Ryzen 3 3200G<br>\r\nMemoria: 12 GB de RAM<br>\r\nGráficos: GTX 1060 6GB / GTX 1660 Super o Radeon RX 590 <br>\r\nDirectX: Versión 12<br>\r\nAlmacenamiento:70 GB de espacio disponible <br>\r\nNotas adicionales: SSD recomendado'),
(3, 'Resident Evil 7 Biohazard', '3,3', 4, 'CAPCOM Co., Ltd.', 'El miedo y el aislamiento se filtran a través de las paredes de una granja sureña abandonada. \"7\" marca un nuevo comienzo para el horror de supervivencia con la \"Vista aislada\" de la nueva perspectiva visceral en primera persona.', 1, 'img/imgJuegos/ResidentEvil.jpg', 'img/imgJuegos/REB/Gameplay1.jpg', 'img/imgJuegos/REB/Gameplay2.jpg', 'img/imgJuegos/REB/Gameplay3.jpg', 'https://www.youtube.com/embed/W1OUs3HwIuo', 'MÍNIMO:<br>\r\nRequiere un procesador y un sistema operativo de 64 bits<br>\r\nASI QUE:WINDOWS® 10 (se requiere 64 bits)<br>\r\nProcesador: Intel® Core™ i5-4460, 2,70 GHz o AMD FX™-6300 o superior<br>\r\nMemoria: 8 GB de RAM<br>\r\nGráficos: NVIDIA® GeForce® GTX 960 o AMD Radeon™ RX 460<br>\r\nDirectX: Versión 12<br>\r\nAlmacenamiento: 24 GB de espacio disponible<br>\r\nTarjeta de sonido: Compatible con DirectSound (debe ser compatible con DirectX® 9.0c o superior)<br>\r\nNotas adicionales: Objetivo de especificación de hardware 1080P/30FPS. Puede requerir una reducción en la configuración de calidad de textura o apagar la transmisión de textura debido a los altos requisitos de VRAM. *Se requiere conexión a Internet para la activación del juego.', 'RECOMENDADO:<br>\r\nRequiere un procesador y un sistema operativo de 64 bits<br>\r\nASI QUE:WINDOWS® 10 (se requiere 64 bits)<br>\r\nProcesador: Intel® Core™ i7 3770 3,4 GHz o AMD equivalente o superior<br>\r\nMemoria: 8 GB de RAM<br>\r\nGráficos: NVIDIA® GeForce® GTX 1060 con 3 GB de VRAM<br>\r\nDirectX: Versión 12<br>\r\nAlmacenamiento: 24 GB de espacio disponible<br>\r\nTarjeta de sonido: Compatible con DirectSound (debe ser compatible con DirectX® 9.0c o superior)<br>\r\nNotas adicionales: Objetivo de especificación de hardware 1080P/60FPS. *Se requiere conexión a Internet para la activación del juego.'),
(4, 'It Takes Two', '3,7', 3, 'Hazelight', 'Emprende el viaje más alocado de tu vida en It Takes Two. Invita a un amigo a unirse gratis con el Pase de amigo* y trabajen en conjunto para afrontar una gran variedad de desafíos de juego alegremente disruptivos.', 2, 'img/imgJuegos/ItTakesTwo.jpg', 'img/imgJuegos/ITT/Gameplay1.jpg', 'img/imgJuegos/ITT/Gameplay2.jpg', 'img/imgJuegos/ITT/Gameplay3.jpg', 'https://www.youtube.com/embed/s-i_ys7VauE', 'MÍNIMO:<br>\r\nRequiere un procesador y un sistema operativo de 64 bits<br>\r\nSO: Windows 8.1 64-bit or Windows 10 64-bit<br>\r\nProcesador: Intel Core i3-2100T or AMD FX 6100<br>\r\nMemoria: 8 GB de RAM<br>\r\nGráficos: Nvidia GeForce GTX 660 or AMD R7 260x<br>\r\nDirectX: Versión 11<br>\r\nRed: Conexión de banda ancha a Internet<br>\r\nAlmacenamiento: 50 GB de espacio disponible<br>', 'RECOMENDADO:<br>\r\nRequiere un procesador y un sistema operativo de 64 bits<br>\r\nSO: Windows 8.1 64-bit or Windows 10 64-bit<br>\r\nProcesador: Intel Core i5 3570K or AMD Ryzen 3 1300x<br>\r\nMemoria: 16 GB de RAM<br>\r\nGráficos: Nvidia GeForce GTX 980 or AMD R9 290X<br>\r\nDirectX: Versión 11<br>\r\nRed: Conexión de banda ancha a Internet<br>\r\nAlmacenamiento: 50 GB de espacio disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `idLike` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idPublicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`idLike`, `idUsuario`, `idPublicacion`) VALUES
(1, 2, 8),
(2, 1, 9),
(3, 1, 8),
(4, 2, 9),
(47, 5, 11),
(48, 5, 8),
(49, 6, 9),
(50, 6, 14),
(51, 3, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idNotificacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idUsuarioAccion` int(11) NOT NULL,
  `idTipoNotificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`idNotificacion`, `idUsuario`, `idUsuarioAccion`, `idTipoNotificacion`) VALUES
(1, 1, 3, 1),
(2, 1, 3, 2),
(4, 2, 5, 2),
(6, 2, 5, 1),
(8, 1, 3, 2),
(9, 1, 6, 2),
(10, 1, 6, 1),
(12, 2, 3, 2),
(13, 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreCompleto` varchar(255) NOT NULL,
  `fotoPerfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `idUsuario`, `nombreCompleto`, `fotoPerfil`) VALUES
(1, 1, 'Dennis Alexander Tulen Martel', 'img/imgPerfil/spacei.png'),
(2, 2, 'Gustavo Ariel Martel Guinea', 'img/imgPerfil/hollow.jpg'),
(9, 3, 'Johan Tataje', 'img/imgPerfil/totodile.PNG'),
(10, 5, 'Pepe Lucho', 'img/imgPerfil/jumpking.jpg'),
(11, 6, 'Jose Lopez', 'img/imgPerfil/GoW.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `idPublicacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `descripcion` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `registrado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idPublicacion`, `idUsuario`, `descripcion`, `foto`, `num_likes`, `registrado`) VALUES
(8, 2, 'Ya quiero que salga Silksong T_T', 'img/imgPublicacion/silksong.jpg', 4, '2022-07-17 01:59:23'),
(9, 1, 'Megaman x4 es uno de mis juegos preferidos :D', 'img/imgPublicacion/megaman-x4.png', 3, '2022-07-06 01:35:43'),
(11, 3, 'Nueva Campeona de Lol y es ADC :)', 'img/imgPublicacion/Nilah.jpg', 1, '2022-07-17 20:01:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacion`
--

CREATE TABLE `puntuacion` (
  `idPuntuacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `calificacion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `puntuacion`
--

INSERT INTO `puntuacion` (`idPuntuacion`, `idUsuario`, `idJuego`, `calificacion`) VALUES
(1, 3, 3, 4),
(3, 3, 1, 5),
(11, 3, 4, 5),
(42, 3, 2, 5),
(77, 3, 2, 4),
(78, 3, 2, 4),
(79, 3, 3, 5),
(80, 3, 4, 5),
(81, 3, 4, 1),
(82, 3, 2, 4),
(83, 3, 1, 5),
(84, 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiponotificaciones`
--

CREATE TABLE `tiponotificaciones` (
  `idTipoNotificacion` int(11) NOT NULL,
  `tipoNotificacion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nombreNotificacion` longtext COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tiponotificaciones`
--

INSERT INTO `tiponotificaciones` (`idTipoNotificacion`, `tipoNotificacion`, `nombreNotificacion`) VALUES
(1, 'like', 'le ha dado like a tu publicacion'),
(2, 'comentario', 'ha comentado tu publicacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `registrado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `email`, `contrasena`, `registrado`) VALUES
(1, 'dennis', 'dennis@gmail.com', '$2y$10$6BAjlUiLVpsc7ZdDx4aaBOi3mwZpyAOVk9/m/ZK3jOwlflJo/Wbcu', '2020-07-11 17:53:17'),
(2, 'gustavo', 'gustavo@gmail.com', '$2y$10$evO03MWUMBCXfYfnYaOvsucoqQFk7y756G4A1tj2F29qIY7VSlINK', '2020-07-13 17:40:57'),
(3, 'johan', 'jokteck@gmail.com', '$2y$10$0ycYdBOH.GlWjmjbkgwbuexJ96Du44TnGcZOImGnZqeaFQJKSSjie', '2022-07-05 07:24:40'),
(4, 'lolo', 'usuario@gmail.com', '$2y$10$KpLueU6dHgvl8Ts.7mUbo.vGeR/9cT5LTisY/nxta2.kDUIZcIEgS', '2022-07-05 08:24:04'),
(5, 'Pepe', 'usuario1@gmail.com', '$2y$10$1TaTTblFecui5CXPMCfATulm4chzSBneOQJN8DzTpK6tq6.yUcTJ2', '2022-07-05 08:28:20'),
(6, 'jose', '1610479@utp.edu.pe', '$2y$10$GYEe.KxuaD9FNaOCrpFjNOTo02X6Q6z5Vp/1NQoCLP6UYftswBxaC', '2022-07-06 01:32:55'),
(7, 'GeraldoPiña', 'usuario5@gmail.com', '$2y$10$RQbb/SfUUm9hgFaiTgV32OaKIBZFi4loEH8ZFrtq0BnXtRkrOI1wW', '2022-07-18 23:23:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPublicacion` (`idPublicacion`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`idJuego`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`idLike`),
  ADD KEY `idPublicacion` (`idPublicacion`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idNotificacion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idUsuarioAccion` (`idUsuarioAccion`),
  ADD KEY `idTipoNotificacion` (`idTipoNotificacion`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idPublicacion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `numLikes` (`num_likes`);

--
-- Indices de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD PRIMARY KEY (`idPuntuacion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idJuego` (`idJuego`);

--
-- Indices de la tabla `tiponotificaciones`
--
ALTER TABLE `tiponotificaciones`
  ADD PRIMARY KEY (`idTipoNotificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `idLike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `idNotificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idPublicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  MODIFY `idPuntuacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `tiponotificaciones`
--
ALTER TABLE `tiponotificaciones`
  MODIFY `idTipoNotificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
