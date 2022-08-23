-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2018 a las 15:56:35
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tramitedocumentario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nombrearea` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcionarea` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombrearea`, `descripcionarea`) VALUES
(1, 'Área de Informática', 'El área de informática ................')
-- (2, 'Gerencia General', 'La oficina de gerencia general'),
-- (3, 'Mesa de Partes', 'sdkfadqwkeqeqw'),
-- (4, 'Dirección Académica', 'Encargada de'),
-- (5, 'Dirección General', 'Es la direccion'),
-- (10, 'Finalización Documento', ''),
-- (11, 'Área de Innovación Tecnológica', 'Es el área encargada de la búsqueda e implementación de nuevas tecnologías jnjasdjasjdnanjdjasmdckmasmkcmk kmamk vakmadkmdcmkcsdmksmkcdkmsdckmsdcmksdckmsdkcmf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b79a8c9fb622d2bbe5194a782b9cd042', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', 1519221665, 'a:5:{s:9:"user_data";s:0:"";s:7:"nombres";s:5:"admin";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:6:"logado";b:1;}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `iddocumento` int(11) NOT NULL,
  `tipodocumento_id` int(11) NOT NULL,
  `nombredocumento` varchar(45) NOT NULL,
  `descripciondocumento` varchar(45) DEFAULT NULL,
  `estado` varchar(1) NOT NULL,
  `dnisolicitante` varchar(8) NOT NULL,
  `emailsolicitante` text NOT NULL,
  `apellidopaternosolicitante` varchar(25) NOT NULL,
  `apellidomaternosolicitante` varchar(25) NOT NULL,
  `nombressolicitante` varchar(50) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `observaciones` text,
  `archivodocumento` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

-- INSERT INTO `documentos` (`iddocumento`, `tipodocumento_id`, `nombredocumento`, `descripciondocumento`, `estado`, `dnisolicitante`, `emailsolicitante`, `apellidopaternosolicitante`, `apellidomaternosolicitante`, `nombressolicitante`, `fechainicio`, `fechafin`, `observaciones`, `archivodocumento`) VALUES
-- (1, 1, 'TMICE-1', 'asdkknadkadkm', 'F', '87654321', 'mmmm@hotmail.com', 'perez', 'juares', 'pablo', '2017-12-24', '2017-12-28', 'asdkm', ''),
-- (2, 1, 'asdkma', 'asdsak', 'T', '821381', 'jasdnjsa', 'asnjdajn', 'asdjna', 'sajdnan', '2017-12-24', '2017-12-24', 'asjdanjsdja', ''),
-- (3, 1, '234nsda', 'askmdmkas', 'T', 'askmdakm', 'asdkma', 'askdam', 'asdkma', 'sakdmas', '2017-12-24', '2017-12-24', 'askdm', ''),
-- (4, 1, 'asd', 'asda', 'T', 'adsk', 'adhj', 'jasd', 'asjndaj', 'ajndja', '2017-12-24', '2017-12-24', 'kasdmka', ''),
-- (5, 1, 'askmdaskm', 'askmdsakm', 'T', '3248', '2138', '13w', 'ajdaij', 'sadijas', '2017-12-25', '2017-12-25', 'sdjaski', ''),
-- (6, 1, 'asd', 'sakdasmk', 'T', '1237', '12318', '1238', '1238', '128321', '2017-12-26', '2017-12-26', 'asdnans', ''),
-- (7, 1, 'asdsa', 'sdanjkanmj', 'T', '12312', '123', '123', '1231', '123124', '2017-12-26', '2017-12-26', '1241', ''),
-- (8, 1, 'dnjsaj', 'ajndsaj', 'T', 'asjn', 'sadjn', 'sadjnas', 'adsjnas', 'jsdanjasd', '2017-12-26', '2017-12-26', 'asdjn', ''),
-- (9, 1, 'ad', 'dadk', 'T', 'e123', '21', 'ASDAKM', 'ASDK', 'DSAKD', '2017-12-26', '2017-12-26', 'ASKMDKA', ''),
-- (10, 1, 'asdok', 'isajdi', 'T', 'saod', 'ooak', 'aso', 'dasok', 'asod', '2017-12-26', '2017-12-26', 'ijdasia', ''),
-- (11, 1, 'ajdsja', 'adkm', 'T', 'sanjdj', 'asjndjna', 'asjnjdasjn', 'sajnasjnd', 'asjndas', '2017-12-26', '2017-12-26', 'ksadkm', ''),
-- (12, 1, 'askda', 'ksadkm', 'T', 'sdkm', 'sakdm', 'sadkm', 'dskm', 'asdkm', '2017-12-26', '2017-12-26', 'asmdka', ''),
-- (13, 1, '1234321', '123', 'T', '2137', '1237', '1237', '123721', '127', '2017-12-26', '2017-12-26', '12371', ''),
-- (14, 1, 'asdk', 'askd', 'T', 'dakm', 'sakmd', 'sdka', 'askm', 'skak', '2017-12-26', '2017-12-26', 'asdkm', ''),
-- (15, 1, 'asdk', 'kadksm', 'T', 'asda', 'askmd', 'sadkm', 'asdkm', 'asdkm', '2017-12-26', '2017-12-26', 'asdkmas', ''),
-- (16, 1, 'asdmk', 'asdkm', 'T', 'aksdm', 'sak', 'sakmd', 'dsak', 'asdkm', '2017-12-26', '2017-12-26', 'asdk', ''),
-- (17, 1, 'asdk', 'asdkm', 'T', 'sdakm', 'sadmk', 'asdkm', 'sdk', 'sdak', '2017-12-26', '2017-12-26', 'askdm', ''),
-- (18, 1, 'asd', 'asdkm', 'T', 'asdkm', 'sdkma', 'sadkm', 'sadkm', 'sdakm', '2017-12-26', '2017-12-26', 'asdk', ''),
-- (19, 1, 'asdk', 'adskm', 'T', 'sdakm', 'asa', 'asdkm', 'sdakm', 'askdm', '2017-12-26', '2017-12-26', 'sakm', ''),
-- (20, 1, 'sad', 'sadik', 'T', 'sadji', 'dsaij', 'saij', 'saij', 'sdaij', '2017-12-26', '2017-12-26', 'daij', ''),
-- (21, 1, 'asdk', 'sadk', 'T', 'sdka', 'sdak', 'dask', 'asdk', 'sdnk', '2017-12-26', '2017-12-26', 'saknd', ''),
-- (22, 1, 'asd', 'asdmk', 'T', 'dskma', 'dsakm', 'dsakm', 'dswakm', 'sadm', '2017-12-26', '2017-12-26', 'skam', ''),
-- (23, 1, 'asdk', 'sakm', 'T', 'sakm', 'sdakm', 'dakm', 'dsak', 'sadkm', '2017-12-26', '2017-12-26', 'akmd', ''),
-- (24, 1, 'asdkm', 'asdji', 'T', 'sdakm', 'sdakm', 'sadkm', 'sdakm', 'sdakm', '2017-12-26', '2017-12-26', 'asd', ''),
-- (25, 1, 'asd', 'sa', 'T', 'asijd', 'saijd', 'saij', 'dsiaj', 'dsaij', '2017-12-26', '2017-12-26', 'dsij', ''),
-- (26, 1, 'asdji', 'asdji', 'T', 'sadji', 'sdai', 'qsdiaj', 'dsaij', 'sdaij', '2017-12-26', '2017-12-26', 'sdaij', ''),
-- (27, 1, 'sadk', 'sdakm', 'T', 'kmdsak', 'sdamk', 'd', 'ksdakm', 'sdakm', '2017-12-26', '2017-12-26', 'dfaskm', ''),
-- (28, 1, 'asd', 'sad', 'T', 'sakd', 'sakmd', 'sdamk', 'sadkm', 'sadkm', '2017-12-26', '2017-12-26', 'adskm', ''),
-- (29, 1, 'sakd', 'sakdm', 'T', 'sadkm', 'sadkm', 'dsakm', 'asdkm', 'sadkm', '2017-12-26', '2017-12-26', 'sadkm', ''),
-- (30, 1, 'sadkm', 'sadkm', 'T', 'asdkm', 'sadkm', 'sdakm', 'dsakm', 'sdakm', '2017-12-26', '2017-12-26', 'asdkm', ''),
-- (31, 1, 'sad,l', 'dsl,a', 'T', 'sadl,', 'sadl,', 'dsal,', 'sa', 'asd', '2017-12-26', '2017-12-26', 'dsal,', ''),
-- (32, 1, 'NTP-25', 'dasmk', 'T', 'akdm', 'sadkm', 'asdkm', 'asdkm', 'asdkm', '2017-12-26', '2017-12-26', 'adsk', ''),
-- (33, 1, 'asd', 'ksadkm', 'T', 'sdakm', 'sadkm', 'sadkm', 'sdakm', 'sadkm', '2017-12-26', '2017-12-26', 'asdkm', ''),
-- (34, 2, 'TMN-100', 'aijsadjiijasda', 'T', '93232948', 'jjkdsfks@jkjjadosa', 'sdkmfdsk', 'samkd', 'asdkm', '2017-12-27', '2017-12-27', 'skdfsdf', ''),
-- (35, 2, 'TMN-20', 'estoy solicitando mi traslado', 'T', '81832713', 'ajsdnja', 'sadak', 'sdakm', 'dakm', '2017-12-27', '2017-12-27', 'entrego 2 documentos', ''),
-- (36, 2, 'TMN-21', 'Documento presentado ...........', 'T', '99999999', 'hhhh@nose.com', 'solis', 'tarantino', 'Jose', '2017-12-28', '2017-12-28', 'Izquierda y derecha', ''),
-- (37, 2, 'TMN-34', 'askmdask', 'T', 'asdmk', 'sadkm', 'sdakm', 'dsak', 'dsakm', '2017-12-28', '2017-12-28', 'adskm', ''),
-- (38, 1, 'TMICE-2', 'bla bla', 'T', '213717', 'wdab', 'dsab', 'asdbh', 'adsbh', '2017-12-29', '2017-12-29', 'asbdhhb', ''),
-- (39, 1, 'TMICE-3', 'no se', 'T', '233242', 'wad', 'sa', 'e', 'dsa', '2017-12-29', '2017-12-29', 'sdaunuds', ''),
-- (40, 1, 'TM-1245', 'askdmk', 'T', 'dskam', 'sdakm', 'daskm', 'dsakm', 'dsakm', '2017-12-29', '2017-12-29', 'dakdfmakmdf', ''),
-- (41, 1, 'TMICE-4', 'aksd', 'T', 'sdkma', 'sdakm', 'dsakm', 'asdmk', 'sadkm', '2017-12-29', '2017-12-29', 'sdakm', ''),
-- (42, 1, 'sadka', 'samkd', 'T', 'dskam', 'dskam', 'dakm', 'dsakm', 'dsakm', '2017-12-29', '2017-12-29', 'daskm', ''),
-- (43, 2, 'adsdjia', 'dsako', 'T', 'dsaok', 'dsaok', 'dasok', 'dao', 'sadok', '2017-12-29', '2017-12-29', 'dsaok', ''),
-- (44, 1, 'asdk', 'ask', 'T', 'daskm', 'asdkm', 'sakm', 'dks', 'sdkm', '2017-12-29', '2017-12-29', 'dakms', ''),
-- (45, 2, 'TMN-50', 'Prueba Completa', 'F', '3248281', 'nose@youtube.com', 'jajaja', 'huyy', 'paique', '2017-12-29', '2017-12-29', 'jajaja', ''),
-- (46, 3, 'TMI-1', 'El alumno Luis Pilco solicita .......', 'T', '56789345', 'luispilco@hotmail.com', 'Pilco', 'Paz', 'Luis', '2017-12-29', '2017-12-29', 'Se adjuntaron dos copias de certificado de estudios', ''),
-- (47, 3, 'TMI-2', 'El alumno Juarez Luis', 'F', '8721361', 'luispilco@hotmail.com', 'Pilco', 'Paz', 'Luis', '2017-12-29', '2017-12-29', 'Se adjuntaron 2 copias', ''),
-- (48, 4, 'MICF-1', 'El señor bla bla bla', 'F', '67897322', 'bla@alumnos.com', 'bla', 'bla', 'bla', '2017-12-31', '2017-12-31', 'agrego 2 documentos', ''),
-- (49, 5, 'RE-1', 'El alumno pablo marmol desea reiniciar sus es', 'F', '77777777', 'pablo@bellasartes.com', 'marmol', 'juarez', 'pablo', '2018-01-06', '2018-01-07', 'Adjunto 2 fotos tamaño carnet', ''),
-- (50, 1, 'TMICE-5', 'adkdasmkmas', 'T', 'asdkm', 'sdakm', 'dsakm', 'daskm', 'daskm', '2018-02-01', '2018-02-01', 'adkm', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/arquivos/02-02-2018/ff377f161b612274a2abc4215709b566.jpg'),
-- (51, 1, 'TMICE-6', 'asadsl,', 'T', 'asdkm', 'sdakm', 'dsakm', 'daskm', 'daskm', '2018-02-01', '2018-02-01', 'asda', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/arquivos/02-02-2018/e47710afccf125e056ee78d02a9d85ca.jpg'),
-- (52, 1, 'TMICE-7', 'asadsl, xasd', 'T', 'asdkm', 'sdakm', 'dsakm', 'daskm', 'daskm', '2018-02-01', '2018-02-01', 'asda', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/arquivos/02-02-2018/a36d11a8d0b75acd2bbf58a06d49b077.jpg'),
-- (53, 1, 'TMICE-8', 'asmkdakmk', 'T', 'sdakm', 'asdkm', 'adkm', 'akdsm', 'adks', '2018-02-01', '2018-02-01', 'sdkmkaadkm', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/arquivos/02-02-2018/c7862f7df667e53206f9fc09da38cd4e.pdf'),
-- (54, 1, 'asmkdamksdakm', 'dakm', 'T', 'kmda', 'dakm', 'dsamk', 'dasmk', 'dasmk', '2018-02-01', '2018-02-01', 'akmsdk', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/arquivos/02-02-2018/84d850cd614bb37e3bf54c059348ca37.jpg'),
-- (55, 1, 'TMICE-9', 'sakmdakdma', 'T', 'dsakm', 'dsakm', 'dsakm', 'sdkma', 'akmdakm', '2018-02-01', '2018-02-01', 'asdkm', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/arquivos/02-02-2018/26843a9025cef9f2685025b4ad91568d.jpg'),
-- (56, 1, 'TMICE-10', 'amsdaks', 'T', 'dskam', 'damk', 'dsakm', 'dskam', 'dsakm', '2018-02-01', '2018-02-01', 'dasmk', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/02-02-2018/dd35c0caa3989d6ebe32ef3c26110282.jpg'),
-- (57, 1, 'TMICE-12', 'sdamk', 'T', 'kdmas', 'sakm', 'dsakm', 'sadkm', 'daskm', '2018-02-01', '2018-02-01', 'kdsam', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/02-02-2018/e9eae5deb245778bd8c18736ccc0ba36.pdf'),
-- (58, 1, 'MICF-2', 'skdfmksdkfmsmk', 'T', 'sdamk', 'dsakm', 'dsakm', 'dsakm', 'dsakm', '2018-02-03', '2018-02-03', 'skmfdkmds', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/03-02-2018/e328e4d5066b0f722ffba3931f6dfd17.pdf'),
-- (59, 2, 'TMN-13', 'ASMKDASMKAS', 'T', 'asdkm', 'msda', 'asdmk', 'sdakm', 'dsakm', '2018-02-10', '2018-02-10', 'asdmk', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/10-02-2018/44459331e59b1eb881a3b1508b8bef8e.jpg'),
-- (60, 1, 'TMICE-14', 'sadkmak', 'F', 'sdanj', 'sdanj', 'sadjn', 'dsan', 'sdajn', '2018-02-10', '2018-02-10', 'asdma', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/10-02-2018/88f703f7b8ccd911fba41ad876b8aa09.jpg'),
-- (61, 3, 'TMI-10', 'SADASMKDKM', 'T', 'SDKMA', 'DSKM', 'DSMK', 'DASK', 'SDAKM', '2018-02-10', '2018-02-10', 'DSAKM', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/10-02-2018/4eb6bbd0169fd92a95a39ff20d5f4218.jpg'),
-- (62, 3, 'TMI-11', 'SNJDJANJDNJA', 'T', 'SDANJ', 'DSAN', 'DSAJ', 'DSAJN', 'SADNJ', '2018-02-12', '2018-02-12', 'DAJNS', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/12-02-2018/0a19d671f3613f0b38b54e002a4d8149.jpg'),
-- (63, 2, 'asdmk', 'sadkm', 'T', 'sdkm', 'dsakm', 'adskm', 'asdkm', 'sdakm', '2018-02-19', '2018-02-19', 'asdkm', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/archivos/20-02-2018/'),
-- (64, 2, 'askmdsak', 'askmdsak', 'F', 'dsakm', 'dsakm', 'dakm', 'sdkma', 'dakm', '2018-02-19', '2018-02-21', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idPermiso` int(11) NOT NULL,
  `nombrecargo` varchar(80) NOT NULL,
  `permisos` text,
  `estadopermiso` tinyint(1) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idPermiso`, `nombrecargo`, `permisos`, `estadopermiso`, `fechacreacion`) VALUES
(1, 'Administrador', 'a:24:{s:5:"aArea";s:1:"1";s:5:"eArea";s:1:"1";s:5:"dArea";s:1:"1";s:5:"vArea";s:1:"1";s:14:"aTipodocumento";s:1:"1";s:14:"eTipodocumento";s:1:"1";s:14:"dTipodocumento";s:1:"1";s:14:"vTipodocumento";s:1:"1";s:10:"aDocumento";s:1:"1";s:10:"eDocumento";s:1:"1";s:10:"dDocumento";s:1:"1";s:10:"vDocumento";s:1:"1";s:21:"aSeguimientodocumento";s:1:"1";s:21:"eSeguimientodocumento";s:1:"1";s:21:"dSeguimientodocumento";s:1:"1";s:21:"vSeguimientodocumento";s:1:"1";s:8:"cUsuario";s:1:"1";s:8:"cpermiso";s:1:"1";s:7:"cBackup";s:1:"1";s:5:"rArea";s:1:"1";s:14:"rTipodocumento";s:1:"1";s:10:"rDocumento";s:1:"1";s:21:"rSeguimientodocumento";s:1:"1";s:12:"eSeguimiento";s:1:"1";}', 1, '2014-09-03')
-- (2, 'Jefe', 'a:35:{s:5:"aArea";s:1:"1";s:5:"eArea";s:1:"1";s:5:"dArea";s:1:"1";s:5:"vArea";s:1:"1";s:14:"aTipodocumento";s:1:"1";s:14:"eTipodocumento";s:1:"1";s:14:"dTipodocumento";s:1:"1";s:14:"vTipodocumento";s:1:"1";s:10:"aDocumento";s:1:"1";s:10:"eDocumento";s:1:"1";s:10:"dDocumento";s:1:"1";s:10:"vDocumento";s:1:"1";s:3:"aOs";s:1:"1";s:3:"eOs";s:1:"1";s:3:"dOs";s:1:"1";s:3:"vOs";b:0;s:21:"aSeguimientodocumento";s:1:"1";s:21:"eSeguimientodocumento";s:1:"1";s:21:"dSeguimientodocumento";s:1:"1";s:21:"vSeguimientodocumento";s:1:"1";s:11:"aLancamento";s:1:"1";s:11:"eLancamento";s:1:"1";s:11:"dLancamento";s:1:"1";s:11:"vLancamento";s:1:"1";s:8:"cUsuario";s:1:"1";s:9:"cEmitente";s:1:"1";s:10:"cPermissao";s:1:"1";s:7:"cBackup";s:1:"1";s:5:"rArea";s:1:"1";s:14:"rTipodocumento";s:1:"1";s:10:"rDocumento";s:1:"1";s:3:"rOs";s:1:"1";s:6:"rVenda";s:1:"1";s:11:"rFinanceiro";s:1:"1";s:12:"eSeguimiento";s:1:"1";}', 1, '2017-12-06'),
-- (3, 'Secretario', 'a:39:{s:8:"aCliente";b:0;s:8:"eCliente";b:0;s:8:"dCliente";b:0;s:8:"vCliente";b:0;s:8:"aProduto";b:0;s:8:"eProduto";b:0;s:8:"dProduto";b:0;s:8:"vProduto";b:0;s:8:"aServico";s:1:"1";s:8:"eServico";b:0;s:8:"dServico";b:0;s:8:"vServico";s:1:"1";s:3:"aOs";b:0;s:3:"eOs";b:0;s:3:"dOs";b:0;s:3:"vOs";b:0;s:6:"aVenda";b:0;s:6:"eVenda";b:0;s:6:"dVenda";b:0;s:6:"vVenda";s:1:"1";s:8:"aArquivo";b:0;s:8:"eArquivo";b:0;s:8:"dArquivo";b:0;s:8:"vArquivo";b:0;s:11:"aLancamento";b:0;s:11:"eLancamento";b:0;s:11:"dLancamento";b:0;s:11:"vLancamento";b:0;s:8:"cUsuario";b:0;s:9:"cEmitente";b:0;s:10:"cPermissao";b:0;s:7:"cBackup";b:0;s:8:"rCliente";b:0;s:8:"rProduto";b:0;s:8:"rServico";b:0;s:3:"rOs";b:0;s:6:"rVenda";b:0;s:11:"rFinanceiro";b:0;s:12:"eSeguimiento";s:1:"1";}', 1, '2017-12-28'),
-- (4, 'Ayudante', 'a:39:{s:8:"aCliente";b:0;s:8:"eCliente";b:0;s:8:"dCliente";b:0;s:8:"vCliente";b:0;s:8:"aProduto";b:0;s:8:"eProduto";b:0;s:8:"dProduto";b:0;s:8:"vProduto";b:0;s:8:"aServico";s:1:"1";s:8:"eServico";b:0;s:8:"dServico";b:0;s:8:"vServico";s:1:"1";s:3:"aOs";b:0;s:3:"eOs";b:0;s:3:"dOs";b:0;s:3:"vOs";b:0;s:6:"aVenda";b:0;s:6:"eVenda";b:0;s:6:"dVenda";b:0;s:6:"vVenda";s:1:"1";s:8:"aArquivo";b:0;s:8:"eArquivo";b:0;s:8:"dArquivo";b:0;s:8:"vArquivo";b:0;s:11:"aLancamento";b:0;s:11:"eLancamento";b:0;s:11:"dLancamento";b:0;s:11:"vLancamento";b:0;s:8:"cUsuario";b:0;s:9:"cEmitente";b:0;s:10:"cPermissao";b:0;s:7:"cBackup";b:0;s:8:"rCliente";b:0;s:8:"rProduto";b:0;s:8:"rServico";b:0;s:3:"rOs";b:0;s:6:"rVenda";b:0;s:11:"rFinanceiro";b:0;s:12:"eSeguimiento";s:1:"1";}', 1, '2017-12-29'),
-- (5, 'askdsak', 'a:24:{s:5:"aArea";b:0;s:5:"eArea";b:0;s:5:"dArea";b:0;s:5:"vArea";s:1:"1";s:14:"aTipodocumento";b:0;s:14:"eTipodocumento";b:0;s:14:"dTipodocumento";b:0;s:14:"vTipodocumento";s:1:"1";s:10:"aDocumento";b:0;s:10:"eDocumento";b:0;s:10:"dDocumento";b:0;s:10:"vDocumento";s:1:"1";s:21:"aSeguimientodocumento";b:0;s:21:"eSeguimientodocumento";b:0;s:21:"dSeguimientodocumento";b:0;s:21:"vSeguimientodocumento";s:1:"1";s:8:"cUsuario";b:0;s:8:"cpermiso";b:0;s:7:"cBackup";b:0;s:5:"rArea";b:0;s:14:"rTipodocumento";b:0;s:10:"rDocumento";b:0;s:21:"rSeguimientodocumento";b:0;s:12:"eSeguimiento";b:0;}', 1, '2018-02-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientodocumento`
--

CREATE TABLE `seguimientodocumento` (
  `idseguimientodocumento` int(11) NOT NULL,
  `iddocumento` int(11) NOT NULL,
  `dniaprobacion` varchar(45) DEFAULT NULL,
  `idareaactual` int(11) NOT NULL,
  `idareasiguiente` int(11) NOT NULL,
  `observaciones` longtext,
  `fechainicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `estadotramite` tinytext NOT NULL,
  `permiso` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimientodocumento`
--

-- INSERT INTO `seguimientodocumento` (`idseguimientodocumento`, `iddocumento`, `dniaprobacion`, `idareaactual`, `idareasiguiente`, `observaciones`, `fechainicio`, `fechafin`, `estadotramite`, `permiso`) VALUES
-- (95, 48, '78976543', 4, 10, 'agrego 2 documentos', '2017-12-31', '2017-12-31', 'F', 0),
-- (87, 45, '48438728', 1, 3, 'jajaja', '2017-12-29', '2017-12-29', 'F', 1),
-- (88, 45, '73284131', 3, 10, 'jajaja', '2017-12-29', '2017-12-29', 'F', 0),
-- (89, 46, '73284131', 3, 0, 'Se adjuntaron dos copias de certificado de estudios', '2017-12-29', '0000-00-00', 'T', 0),
-- (90, 47, '48438728', 1, 4, 'Se adjuntaron 2 copias', '2017-12-29', '2017-12-29', 'F', 0),
-- (91, 47, '78976543', 4, 5, 'Se adjuntaron 2 copias', '2017-12-29', '2017-12-29', 'F', 0),
-- (92, 47, '123456789', 5, 10, 'Se adjuntaron 2 copias', '2017-12-29', '2017-12-29', 'F', 0),
-- (93, 48, '48438728', 1, 5, 'agrego 2 documentos', '2017-12-31', '2017-12-31', 'F', 0),
-- (79, 1, '48438728', 1, 3, 'asbdhhb', '2017-12-29', '2017-12-29', 'F', 1),
-- (71, 1, '48438728', 1, 10, 'asdkm', '2017-12-03', '2017-12-28', 'F', 0),
-- (94, 48, '123456789', 5, 4, 'agrego 2 documentos', '2017-12-31', '2017-12-31', 'F', 0),
-- (74, 0, '48438728', 1, 0, 'Izquierda y derecha', '2017-12-28', '0000-00-00', 'F', 0),
-- (75, 0, '48438728', 1, 0, 'Izquierda y derecha', '0000-00-00', '0000-00-00', 'T', 0),
-- (76, 2, '48438728', 1, 3, 'adskm', '2017-12-28', '2017-12-28', 'F', 0),
-- (77, 0, '48438728', 1, 0, 'adskm', '0000-00-00', '0000-00-00', 'T', 0),
-- (78, 0, '48438728', 1, 0, 'adskm', '2017-12-28', '0000-00-00', 'T', 0),
-- (96, 49, '48438728', 1, 2, 'Adjunto 2 fotos tamaño carnet', '2018-01-06', '2018-01-06', 'F', 0),
-- (97, 49, '98765432', 2, 4, 'Adjunto 2 fotos tamaño carnet', '2018-01-06', '2018-01-06', 'F', 0),
-- (98, 49, '78976543', 4, 10, 'Adjunto 2 fotos tamaño carnet', '2018-01-06', '2018-01-07', 'F', 0),
-- (99, 50, '48438728', 1, 0, 'adkm', '2018-02-01', '0000-00-00', 'T', 0),
-- (100, 51, '48438728', 1, 0, 'asda', '2018-02-01', '0000-00-00', 'T', 0),
-- (101, 52, '48438728', 1, 0, 'asda', '2018-02-01', '0000-00-00', 'T', 0),
-- (102, 53, '48438728', 1, 0, 'sdkmkaadkm', '2018-02-01', '0000-00-00', 'T', 0),
-- (103, 54, '48438728', 1, 0, 'akmsdk', '2018-02-01', '0000-00-00', 'T', 0),
-- (104, 55, '48438728', 1, 0, 'asdkm', '2018-02-01', '0000-00-00', 'T', 0),
-- (105, 56, '48438728', 1, 0, 'dasmk', '2018-02-01', '0000-00-00', 'T', 0),
-- (106, 57, '48438728', 1, 0, 'kdsam', '2018-02-01', '0000-00-00', 'T', 0),
-- (107, 58, '60ea82798d8ee2e80f4ef3cd53301bd6825ec53b', 1, 4, 'skmfdkmds', '2018-02-03', '2018-02-12', 'F', 0),
-- (108, 59, '60ea82798d8ee2e80f4ef3cd53301bd6825ec53b', 1, 4, 'asdmk', '2018-02-10', '2018-02-12', 'F', 0),
-- (109, 60, '48438728', 1, 2, 'asdma', '2018-02-10', '2018-02-10', 'F', 0),
-- (110, 60, '98765432', 2, 4, 'asdma', '2018-02-10', '2018-02-10', 'F', 0),
-- (111, 60, '78976543', 4, 10, 'asdma', '2018-02-10', '2018-02-10', 'F', 0),
-- (112, 61, '48438728', 1, 5, 'DSAKM', '2018-02-10', '2018-02-10', 'F', 0),
-- (113, 61, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 5, 4, 'DSAKM', '2018-02-10', '2018-02-10', 'F', 0),
-- (114, 61, '123456789', 4, 0, 'DSAKM', '2018-02-10', '0000-00-00', 'T', 0),
-- (115, 62, '60ea82798d8ee2e80f4ef3cd53301bd6825ec53b', 1, 5, 'DAJNS', '2018-02-12', '2018-02-12', 'F', 0),
-- (116, 62, '48438728', 5, 0, 'DAJNS', '2018-02-12', '0000-00-00', 'T', 0),
-- (117, 59, '48438728', 4, 0, 'asdmk', '2018-02-12', '0000-00-00', 'T', 0),
-- (118, 58, '48438728', 4, 0, 'skmfdkmds', '2018-02-12', '0000-00-00', 'T', 0),
-- (119, 63, '48438728', 1, 0, 'asdkm', '2018-02-19', '0000-00-00', 'T', 0),
-- (120, 64, '60ea82798d8ee2e80f4ef3cd53301bd6825ec53b', 1, 10, '', '2018-02-19', '2018-02-21', 'F', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idtipodocumento` int(11) NOT NULL,
  `nombretipodocumento` varchar(80) NOT NULL,
  `descripciontipodocumento` longtext,
  `imagen` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

-- INSERT INTO `tipodocumento` (`idtipodocumento`, `nombretipodocumento`, `descripciontipodocumento`, `imagen`) VALUES
-- (1, 'TRASLADO DE MATRICULA INTERNA-CAMBIO DE ESPECIALIDAD', 'El usuario presenta la solicitud en la oficina de trámite documentario, el técnico administrativo  II verifica, recibe, y registra, tramita a Dirección Académica, secretaria II verifica, recibe, registra, entrega a Director de Programa Sectorial I correspondiente, revisa y tramita a Dirección Académica, el Director de programa sectorial II, con informe solicita autorización para proyectar resolución, tramita a Dirección General, secretaria II, verifica, recibe, registra y entrega a Director de Programa Sectorial III, recibe, visa y con memorándum autoriza proyectar la resolución, tramita a Dirección Académica, el Director de Programa Sectorial II revisa proyecta y emite la resolución, con Vº Bº de la jefatura de departamento académico correspondiente tramita a Secretaría General, el Director de Sistema Administrativo I revisa, visa, registra la resolución, tramita a Dirección General, el Director de Programa sectorial III revisa y firma la resolución, devuelve a Secretaría general, el Director de Sistema Administrativo I, recibe la resolución, numera, registra, transcribe a las oficinas correspondientes y archiva, posteriormente con copia de resolución recibida, el Ingeniero de Sistemas procede a convalidar los cursos, matricula al alumno, asigna código y entrega la constancia, archiva, fin.', ''),
-- (2, 'TRASLADO DE MATRICULA NACIONAL', 'El usuario presenta la solicitud  en la oficina de trámite documentario, el técnico administrativo  II verifica, recibe, y  registra, tramita a Dirección Académica, secretaria II verifica, recibe, registra, entrega a Director de Programa Sectorial I correspondiente,  revisa y tramita a Dirección Académica, el  Director de programa sectorial II,  con informe solicita autorización para proyectar  resolución, tramita a Dirección General, secretaria II, verifica, recibe, registra y entrega a  Director de Programa Sectorial III, recibe revisa y con memorándum  autoriza  proyectar la resolución,  tramita a  Dirección Académica,  el Director  de Programa Sectorial II revisa   proyecta y emite la resolución, con Vº Bº de la jefatura de departamento académico correspondiente  tramita a  Secretaría General, el Director de Sistema Administrativo I revisa,  visa, registra la resolución,  tramita a Dirección General, el Director  de Programa sectorial III revisa y firma la resolución, devuelve a Secretaría general, el Director de Sistema Administrativo I,  recibe la resolución,  numera, registra, transcribe a las oficinas correspondientes y archiva, posteriormente con copia de resolución recibida, el Ingeniero de Sistemas procede a convalidar los cursos,  matricula al alumno,  asigna código  y entrega la constancia, archiva, fin.', '0'),
-- (3, 'TRASLADO DE MATRICULA INTERNACIONAL', 'El usuario presenta la solicitud  en la oficina de trámite documentario, el técnico administrativo  II verifica, recibe, y  registra, tramita a Dirección Académica, secretaria II verifica, recibe, registra, entrega a Director de Programa Sectorial I correspondiente,  revisa y tramita a Dirección Académica, el  Director de programa sectorial II,  con informe solicita autorización para proyectar  resolución, tramita a Dirección General, secretaria II, verifica, recibe, registra y entrega a  Director de Programa Sectorial III, recibe revisa y con memorándum  autoriza  proyectar la resolución,  tramita a  Dirección Académica,  el Director  de Programa Sectorial II revisa   proyecta y emite la resolución, con Vº Bº de la jefatura de departamento académico correspondiente  tramita a  Secretaría General, el Director de Sistema Administrativo I revisa,  visa, registra la resolución,  tramita a Dirección General, el Director  de Programa sectorial III revisa y firma la resolución, devuelve a Secretaría general, el Director de Sistema Administrativo I,  recibe la resolución,  numera, registra, transcribe a las oficinas correspondientes y archiva, posteriormente con copia de resolución recibida, el Ingeniero de Sistemas procede a convalidar los cursos,  matricula al alumno,  asigna código  y entrega la constancia, archiva, fin.', 'JESDFFJS'),
-- (4, 'MATRICULA INTERNA CAMBIO DE FACULTAD', 'Usuario presenta  solicitud  en trámite documentario, el técnico Administrativo II, verifica recibe, y  registra, tramita a jefatura de  departamento, el director de programa sectorial I  revisa, homologa cursos, deriva a Dirección  Académica, el director de programa sectorial II revisa y solicita autorización para proyectar la  resolución, tramita a  Dirección  General, secretaria II, verifica, recibe y registra,  entrega a Dirección  General, el director de programa sectorial III, revisa, autoriza  proyectar la resolución,  tramita a  Dirección académica, el director de programa sectorial II,  revisa, proyecta y emite la resolución,  con Vº Bº de la jefatura de departamento académico correspondiente  tramita  a Dirección General, el director de programa sectorial III, revisa y firma la resolución, tramita a Secretaría general, el director de sistema administrativo I, recibe la resolución,  numera , registra, transcribe a las oficinas correspondientes y archiva, posteriormente con copia de resolución recibida, el Ingeniero de Sistemas procede a convalidar los cursos, realiza cambio de facultad matricula,  asigna código  y entrega constancia de matrícula al usuario, archiva, fin.', '0'),
-- (5, 'REINICIO DE ESTUDIOS (DESPUES DE 1 A 4 SEMESTRES)', 'Usuario presenta  solicitud  en la oficina de trámite documentario, el técnico Administrativo II recibe, revisa y  registra, tramita a Dirección Académica, la secretaria II revisa recibe y registra, entrega a   jefatura de Departamento, el director de programa sectorial I, revisa, deriva a Ing. de sistemas, recibe, revisa, registra en el sistema, con informe devuelve, el director de programa sectorial I, evalúa, si no procede el reinicio devuelve al interesado y si procede coteja con el Plan de Estudios, visa, entrega a Dirección  Académica, el director de programa sectorial II, recibe, revisa y solicita a Dirección General autorización para proyectar la Resolución, la secretaria II, revisa, recibe y registra,  entrega a Director de programa sectorial III, revisa, autoriza  proyectar la resolución,  tramita a dirección  académica, el director de programa sectorial II, revisa, proyecta la resolución, emite, con Vº Bº de la jefatura de departamento académico correspondiente  tramita  a Dirección General, el director de programa sectorial III revisa y firma la resolución tramita a secretaría general, el director de sistema administrativo I, revisa, numera, registra, transcribe a las oficinas correspondientes y archiva, posteriormente con copia de resolución  el Ingeniero de Sistemas procede a convalidar los cursos, realiza virtualmente la matrícula de reinicio de estudios,  asigna código  y entrega constancia de matrícula,  archiva, fin.', 'aksdka'),
-- (6, 'ASMKDASMK', 'DASMKDSAK', 'DASMKDSAK'),
-- (7, 'NJASNJDSA', 'SADAMDKMAS', 'SADAMDKMAS'),
-- (8, 'SADMSA', 'DANDJASJDA', 'http://localhost:9023/bellasartes/RMA-YOUTUBE/RMA/assets/bpmtipodocumento/08e9964b19c9321b3984566520328e6b.png');

-- -- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `apellidopaterno` varchar(20) NOT NULL,
  `apellidomaterno` varchar(70) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `firmadigital` varchar(300) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `contrasenha` varchar(45) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `idarea` int(11) NOT NULL,
  `permisos_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombres`, `dni`, `apellidopaterno`, `apellidomaterno`, `cargo`, `firmadigital`, `email`, `contrasenha`, `telefono`, `celular`, `estado`, `fechaCreacion`, `idarea`, `permisos_id`) VALUES
(1, 'admin', '48438728', '-', '-', '-', '-', 'admin@admin.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '-', '', 1, '2013-11-22', 1, 1)
-- (2, 'mkskdasm', '7213113', 'asdk', 'asdmka', '123341', 'adaskm', 'mmm@admin.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sdkjfks', '', 1, '2017-12-08', 3, 2),
-- (3, 'asjkd', 'sakdm', 'ssakm', 'asdkm', 'aksd', 'asdkm', 'jjj@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sadu', '', 1, '2017-12-26', 0, 1),
-- (4, 'Juanito', '8888888', 'Arcoiris', 'Castro', 'Secretario', 'ksdmkfsk', 'juanito@ba.com', '1022c125384fdeac5afd4f9dea1eb08b793eadca', '983242', 'as2813182', 1, '2017-12-28', 3, 4),
-- (5, 'JefeMesa', '73284131', 'Partes', 'ElJefe', 'Jefe Mesa', 'sadm', 'jef@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '8382343', '1231', 1, '2017-12-29', 3, 2),
-- (6, 'Romulo', '78976543', 'Anton', 'Juarez', 'Jefe de Direcci', 'erreew', 'ranton@bellasartes.com', '83888359d9c7e80bd11b260333efee1b23dc35cf', '7777777', '984567890', 1, '2017-12-29', 4, 2),
-- (7, 'Diego', '123456789', 'Samanez', 'Luque', 'Jefe Dirección ', 'hgsadsa', 'dsamanez@bellasartes.com', '8354336224c63279aadd00a9621757ef4fdf31fc', '987654211', '98753214', 1, '2017-12-29', 5, 2),
-- (8, 'Pedro', '98765432', 'Picapiedra', 'Nose', 'Jefe Gerencia G', 'jiasdas', 'ppicapiedra@bellasartes.com', '4410d99cefe57ec2c2cdbd3f1d5cf862bb4fb6f8', '82138132', '931238182', 1, '2018-01-06', 2, 2),
-- (9, 'asmdkaskm', '32423912', 'sadsadan', 'asd', 'jsadnj', '', 'asdnjasda@wtupapa.es', '084dcee3ce3ada720887845c03fd22ba9ad50310', '921391212', '213812831', 1, '2018-02-21', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`iddocumento`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idPermiso`);

--
-- Indices de la tabla `seguimientodocumento`
--
ALTER TABLE `seguimientodocumento`
  ADD PRIMARY KEY (`idseguimientodocumento`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idtipodocumento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usuarios_permissoes1_idx` (`permisos_id`),
  ADD KEY `idarea` (`idarea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `iddocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idPermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `seguimientodocumento`
--
ALTER TABLE `seguimientodocumento`
  MODIFY `idseguimientodocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idtipodocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
