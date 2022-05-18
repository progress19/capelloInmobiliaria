-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-11-2021 a las 15:39:21
-- Versión del servidor: 10.2.32-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capello_b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcondiciones`
--

CREATE TABLE `tblcondiciones` (
  `idCondicion` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcondiciones`
--

INSERT INTO `tblcondiciones` (`idCondicion`, `nombre`, `estado`) VALUES
(1, 'Alquiler', 1),
(2, 'Venta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblconfig`
--

CREATE TABLE `tblconfig` (
  `idConfig` int(11) NOT NULL,
  `contacto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblconfig`
--

INSERT INTO `tblconfig` (`idConfig`, `contacto`) VALUES
(1, 'info@capelloinmobiliaria.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbllocalidades`
--

CREATE TABLE `tbllocalidades` (
  `idLocalidad` int(11) NOT NULL,
  `idProvincia` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbllocalidades`
--

INSERT INTO `tbllocalidades` (`idLocalidad`, `idProvincia`, `nombre`) VALUES
(1438, 14, 'Capital'),
(1439, 14, 'Chacras de Coria'),
(1440, 14, 'Dorrego'),
(1441, 14, 'Gllen'),
(1442, 14, 'Godoy Cruz'),
(1443, 14, 'Gral. Alvear'),
(1444, 14, 'Guaymallén'),
(1445, 14, 'Junín'),
(1446, 14, 'La Paz'),
(1447, 14, 'Las Heras'),
(1448, 14, 'Lavalle'),
(1449, 14, 'Luján'),
(1450, 14, 'Luján De Cuyo'),
(1451, 14, 'Maipú'),
(1452, 14, 'Malargüe'),
(1453, 14, 'Rivadavia'),
(1454, 14, 'San Carlos'),
(1455, 14, 'San Martín'),
(1456, 14, 'San Rafael'),
(1457, 14, 'Sta. Rosa'),
(1458, 14, 'Tunuyán'),
(1459, 14, 'Tupungato'),
(1460, 14, 'Villa Nueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpropiedades`
--

CREATE TABLE `tblpropiedades` (
  `idPropiedad` bigint(20) NOT NULL,
  `idTipo` bigint(20) NOT NULL,
  `idCondicion` bigint(20) NOT NULL,
  `idLocalidad` bigint(20) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `destacada` varchar(2) NOT NULL,
  `map` varchar(300) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `superficie` int(11) NOT NULL,
  `habitaciones` varchar(10) NOT NULL,
  `baños` int(11) NOT NULL,
  `cochera` varchar(2) NOT NULL,
  `piscina` varchar(2) NOT NULL,
  `calefaccion` varchar(2) NOT NULL,
  `escolar` varchar(2) NOT NULL,
  `plantas` int(11) NOT NULL,
  `telefono` varchar(2) NOT NULL,
  `luz` varchar(2) NOT NULL,
  `gas` varchar(2) NOT NULL,
  `agua` varchar(2) NOT NULL,
  `cloaca` varchar(2) NOT NULL,
  `internet` varchar(2) NOT NULL,
  `tvcable` varchar(2) NOT NULL,
  `aire` varchar(2) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpropiedades`
--

INSERT INTO `tblpropiedades` (`idPropiedad`, `idTipo`, `idCondicion`, `idLocalidad`, `titulo`, `precio`, `destacada`, `map`, `direccion`, `descripcion`, `superficie`, `habitaciones`, `baños`, `cochera`, `piscina`, `calefaccion`, `escolar`, `plantas`, `telefono`, `luz`, `gas`, `agua`, `cloaca`, `internet`, `tvcable`, `aire`, `estado`) VALUES
(9, 1, 2, 1449, 'Lote en Eco Country Altos de la Crucesita', 'USD $ 18000', 'on', '-33.037856, -69.024523', 'Eco Country Altos de la Crucesita', '<p>La Crucecita es un emprendimiento urban&iacute;stico en el Pedemonte Mendocino, donde el cuidado de la ecolog&iacute;a es prioritario. Las viviendas son de piedra, llevan&nbsp;la impronta exclusiva que este material da a las construcciones, integr&aacute;ndolas al entorno.</p><p>Las particulares caracter&iacute;sticas del paisaje hacen del sitio un lugar &uacute;nico para vivir en contacto con la naturaleza, a 20 kil&oacute;metros de la Ciudad de Mendoza.</p><ul><li>Superficie del terreno: 2000m<sup>2&nbsp;</sup></li><li>Precio Negociable</li></ul><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 2000, '', 0, '', '', '', '', 0, '', 'on', 'on', 'on', 'on', '', '', '', 1),
(34, 1, 2, 1449, 'TERRAZA PARCK ', 'U$S 28000', 'on', '-32.997298, -68.821197', 'Mendoza, Espejo 2586, Russell, Mendoza', '<p>Lotes de 500m2 con Posesi&oacute;n Inmediata. Ubicaci&oacute;n privilegiada. Financiaci&oacute;n. Consultanos! Doble portal de acceso, Seguridad 24h, Servicios subterr&aacute;neos, Cierre perimetral de pared. Todos los servicios. Financiaci&oacute;n Propia. Seguridad.</p><p>FINACIACION PROPIA&nbsp;</p><p>SE RECIBE AUTOS , CAMIONES ,HASTA EN 12 CUOTAS SE PUEDE FINACIAR&nbsp;</p><p>LLAMAR AL 2616844712</p>', 500, '', 0, '', '', '', 'on', 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(35, 3, 2, 1444, 'EXCELENTE CASA EN BARRIO COVITPA', 'U$S 70.000', 'on', '-32.9005141,-68.7778665', 'CARRIL URQUIZA Y  PEDRO DEL CASTILLO ', '<p>La casa cuenta con :&nbsp;</p><p>3 habitaciones&nbsp;</p><p>2 ba&ntilde;os&nbsp;</p><p>Living y cocina con lavanderia independiente&nbsp;</p><p>Cochera,&nbsp; churrasquera , horno de barro y patio</p><p>La casa tiene un Terreno de&nbsp; 219 y construido 168 metros . La casa fue construida en el 2000&nbsp;</p><p>Para mayor informaci&oacute;n llamar al 2616844712</p>', 219, '3', 2, 'on', '', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(43, 4, 2, 1442, 'VENTA DE DEPARTAMENTO EN VILLA MEDITERRÁNEA ', 'USS 95000', 'on', '-32.902821, -68.857111', 'MARIANO MORENO Y NECOCHEA ', '<p>Departamento en venta en Edificio Villa Mediterr&aacute;nea. La unidad cuenta con amplio livign comedor con acceso a terraza propia, cocina con mueble bajo mesada y alacena y espacio para lavander&iacute;a, un dormitorio&nbsp;&nbsp;,con placares y ba&ntilde;o completo. Celefacci&oacute;n central por radiadores, pisos cer&aacute;micos en cocina</p><p>El edificio cuenta con seguridad las 24 horas, SUM, gimnasio y dos piscinas, una de ellas cubierta</p>', 0, '', 0, 'on', 'on', 'on', 'on', 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(47, 4, 2, 1442, 'VENDO HERMOSO DEPARTAMENTO EN EL CORAZON DE GODOY CRUZ ', 'USD 68,000', 'on', '-32.923670, -68.851511', 'RIVADAVIA 1030', '<p>INMOBILIARIA CAPELLO VENDE HERMOSO DPTO&nbsp;</p><p>UBICADO EN EL CORAZ&Oacute;N DE GODOY CRUZ , A METROS DE LA CICLOV&Iacute;A.&nbsp;</p><p>CUENTA CON DOS HABITACIONES GRANDES CON PLACARES, COCINA, LIVING, COMEDOR, COCHERA PROPIA, BA&Ntilde;O Y LAVANDER&Iacute;A&nbsp;</p><p>ESPACIO PROPIO PARA PONER UN CHULENGO</p>', 81, '2', 1, 'on', 'on', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(48, 3, 2, 1442, 'CAPELLO INMOBILIARIA VENDE HERMOSA CASA EN CARRODILLA', 'USD 73.000', 'on', '-32.958972, -68.850467', 'alcotandos 686  carrodilla ', '<p>CAPELLO INMOBILIARIA VENDE HERMOSA CASA EN CARRODILLA . LA CASA ES DE DOS PISOS .CON BA&Ntilde;OS EN LAS DOS PLATAS . PATIO COCHERA PARA DOS AUTOS DOS HABITACIONES CON PLACA EN SUIT . LIVING Y COCINA COMEDOR MUY AMPLIO . LA CASA SE ENCUENTRA EN PERFECTAS CONDICI&Oacute;NES . BARRIO SEMIPRIVADO A 300 METROS DE LA IGlESIA CARRODILLA</p><p>Y SE PUEDE AGREGAR UNA HABITACION EN PLANTA ALTA&nbsp;</p><p>208 METROS DE TERRENO ,CONSTRUIDO 148 METROS ESCUCHAMOS OFERTA RAZONABLE PARA MAYOR INFORMACI&Oacute;N CAMUNICARSE 2616844712</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 208, '2', 2, 'on', '', 'on', 'on', 2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(49, 3, 2, 1447, 'VENDE  CASA EN BARRIO EL DALVIAN .', 'USD $ 155000', 'on', '-32.8675765, -68.888668', 'BARRIO DALVIAN ', '<p>&nbsp;</p><p>CAPELLO INMOBILIARIA</p><p>VENDE HERMOSA CASA EN BARRIO EL DALVIAN .</p><p>CARACTERISTICAS :</p><p>-LIVING AMPLIO</p><p>-COCINA INDEPENDIENTE</p><p>-3 HABITACIONES</p><p>-1 HABITACION PARA VISITAS</p><p>-1 CACHORA</p><p>-3 BA&Ntilde;OS</p><p>-CALEFACION CENTRAL</p><p>-BOMBA DE AGUA</p><p>-PATIO</p><p>-CHURRASQUERA</p><p>-A&Ntilde;O DE CONSTRUCION 1986</p><p>-TERRENO 300 METROS</p><p>-CUBIERTOS 230</p><p>- EXPENSAS 19000 PESOS , INCLUYE TASAS MUNICIPALES ,AGUA Y EXPENSAS</p><p>&nbsp;</p>', 300, '4', 3, 'on', '', 'on', 'on', 3, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(50, 4, 2, 1438, 'VENDO  DEPARTAMENTO O ALQUILO ', 'USD110.000', 'on', '-32.8906524, -68.8394351', 'San Martin 1052 ', '<p>INMOBILIARIA CAPELLO -VENDO DEPARTAMENTO -CON DOS BA&Ntilde;OS -DOS HABITACIONES -TODO EL DPTO EQUIPADO CON BLACKOUT Y AIRE ACONDICIONADOS -LIVING , COCINA Y LAVANDERIA INDEPENDIENTE -TIENE ASCENSOR -CON &nbsp;COCHERA -HERMOSO DEPARTAMENTO DE 100 METROS CUBIERTO SOBRE CALLE SAN MARTIN . EN EL CORAZON DEL CENTRO SE PUEDE USAR COMONVIVIENDO ,OFICINA , TURISMO PARA.</p><p>VENTA 110000 USD&nbsp;</p><p>ALQUILER $ 35000 + EXPENSAS 3900 CON COCHERA&nbsp;</p><p>MAYOR INFORMACI&Oacute;N LLAMAR 2616844712</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 100, '2', 2, '', '', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(52, 4, 2, 1442, 'VENDO DOS  DEPARTAMENTO A ESTRENAR ', 'USD 45000', 'on', '-32.95307315354798, -68.85100568955714', 'PERITO MORENO 2444', '<p>Departamento &middot; 67m&sup2; &middot; 3 Ambientes &middot; 1 Cochera</p><p>PERITO MORENO 2444, La Carrodilla, Godoy Cruz</p><ul><li>67 m&sup2; Total</li><li>67 m&sup2; Cubierta</li><li>3 Ambientes</li><li>1 Ba&ntilde;o</li><li>1 Cochera</li><li>2 Dormitorios</li><li>A estrenar</li><li>Muy luminoso</li></ul><p>Publicado hoy</p><p>Vendo Dos Departamento a Estrenas</p><p>EL DEPARTAMENTO CUENTA CON :<br />DOS HABITACIONES<br />LIVING COCINA COMERDOR<br />DESAYUNADOR<br />BA&Ntilde;O<br />COCHERA<br />PLANTA BAJA AMBOS DEPARTAMENTOS&nbsp;<br />ESTAB UBICADOS ENFRENE GO BAR , A METROS DE PALMARES , CICLO VIA</p><p>&nbsp;</p><p>Ubicaci&oacute;n</p><p>PERITO MORENO 2444, La Carrodilla, Godoy Cruz</p>', 67, '2', 1, 'on', '', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(53, 3, 2, 1451, 'OLIVOS EL TORREN CASA A ESTRENAR', 'USD 150.000', 'on', '-32.95479977843314, -68.81491546472805', 'OLIVOS DEL TORREON ', '<p>LA CASA ESTA UBICADA EN LA PRIMER ISLA ,</p><p>EN LA ETAPA . A&nbsp;</p><p>TIENE 160 CUBIERTOS&nbsp;</p><p>470 DE TERRENO&nbsp;</p><p>&nbsp;</p>', 475, '3', 3, 'on', '', '', 'on', 1, 'on', 'on', '', 'on', 'on', 'on', 'on', '', 1),
(54, 3, 2, 1438, 'VENDO CASA  B<RRIO SOBERANIA ', 'USD 100.000', 'on', '-32.876880, -68.872771', 'Cabildo de Mendoza', '<p><strong>Direcci&oacute;n :BARRIO SOBERANIA , CAPITAL&nbsp;</strong><br /><br /><strong>Descripci&oacute;n :</strong></p><p>La casa cuenta con un lote de 530 metros cuadrados&nbsp;</p><p>Con 160 metros contruidos .</p><p>Mas ampliacion 50 metros de quincho cerrado&nbsp; ,con ba&ntilde;o ,cocina&nbsp;</p><p>Tiene :</p><p>3 habitaciones&nbsp;</p><p>3 ba&ntilde;os&nbsp;</p><p>Un quincho cerrado . con carpinteria de alumino, ba&ntilde;o,&nbsp;ducha.,construcion de material.</p><p>Cochera para 6 autos&nbsp;</p><p>galeria en todo el costado de la casa&nbsp;</p><p>cocina independiente&nbsp;</p><p>placares&nbsp;</p><p>aire acondicionado&nbsp;</p><p>a metros del parque , calle aristides , muy buena ubicacion&nbsp;</p><p>quincho cerrado , con ba&ntilde;o, cocina y habitacion&nbsp;</p>', 530, '3', 3, 'on', '', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(55, 5, 1, 1442, 'ALQUILO O VENDO LOCAL COMERCIAL ', '100000', 'on', '-32.918449, -68.846560', 'AVENIDA SAN MARTIN SUR ', '<p>Vendo o Alquilo Local Comercial en Godoy Cruz</p><p>EL LOCAL COMERCIAL , CUENTA CON 400 METROS , EN CALLE SAN MARTIN SUR DE GODOY CRUZ.<br />SE PUEDE ALQUILAR , PARA GIMNASIO , O CUALQUIEL RUBRO , QUE DISPONGA LA MUNICIPALIDAD</p><p>SE PUEDEN DAR DOS MESES , SIN COSTO DE ALQUILER PARA REMODELAR&nbsp;</p>', 400, '0', 4, 'on', '', '', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(56, 1, 2, 1444, 'SOL ANDINO III', 'USD 10000', 'on', '-32.879967, -68.736614', 'Prof Mathus, Mendoza', '<div class=\"section-title\" style=\"padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Hind, sans-serif;\"><h1 style=\"font-size: 20px; margin: 16px 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: 600; line-height: 26px;\">Sol Andino III</h1></div><div id=\"reactDescription\" style=\"padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Hind, sans-serif;\"><div class=\"ViewmoreContainer-c8o1fp-1 jHsbKQ collapsed\" style=\"padding: 0px; border: 0px; vertical-align: baseline; overflow: hidden; transition: max-height 0.1s cubic-bezier(0, 1, 0, 1) 0s; height: auto; max-height: 128px; line-height: 25px; margin: 16px 0px 8px;\"><div id=\"longDescription\" style=\"padding: 0px; border: 0px; vertical-align: baseline;\"><div style=\"padding: 0px; border: 0px; vertical-align: baseline;\">Lote de 300 mts todo los servicios.<br />listo para escriturar , se puede entregar el 50 % al contado y hasta 6&nbsp;cuotas , financiaci&oacute;n propia</div></div></div></div>', 300, '', 0, '', '', '', 'on', 0, 'on', 'on', 'on', 'on', 'on', 'on', '', '', 1),
(57, 1, 2, 1442, 'VENDO LOTE EN GODOY CRUZ ', 'USD 55000', 'on', '-32.933067, -68.843240', 'BERNARDO ORTIZ 654', '<p>Vendo Lote en Godoy Cruz</p><p>EL LOTE TIENE 362 METROS<br />APTO PARA CONSTRUIDIR<br />EN EXCELENTE ZONA</p><p>&nbsp;</p>', 362, '0', 0, 'on', '', '', 'on', 0, 'on', 'on', 'on', 'on', 'on', 'on', '', '', 1),
(58, 3, 2, 1447, 'CASA EN LAS HERAS OPORTUNIDAD ', 'USD 60000', '', '-32.845938, -68.830946', 'lescano fa ,manzana n casa , Las Heras, Mendoza', '<p>Casa &middot; 76m&sup2; &middot; 2 Ambientes &middot; 3 Cocheras</p><p>lescano fa ,manzana n casa&nbsp;, Las Heras, Mendoza</p><ul><li>236 m&sup2; Total</li><li>76 m&sup2; Cubierta</li><li>2 Ambientes</li><li>1 Ba&ntilde;o</li><li>3 Cocheras</li><li>3 Dormitorios</li><li>2 Antig&uuml;edad</li></ul><p>&nbsp;</p><p>Vendo Casa en Las Heras</p><p>3 dormitorios, lavander&iacute;a cerrada, triple cochera, patio, ba&ntilde;o, cocina comedor, cerco perimetral<br />Todo material, nada construcci&oacute;n en seco.<br />230 mts total, 76 mts cubierto</p>', 230, '3', 1, 'on', '', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(59, 1, 2, 1449, 'VENDO LOTE EN ETAPA 4 LICEO RUGBY CLUB', 'USD 39000', 'on', '-32.983264, -68.827806', 'VIEYTES  2070 LICEO RUGBY CLUB 4 ', '<p>EL LOTE TIENE 1043 METROS&nbsp;</p><p>TIENE TODO LOS SERVICIOS EN LA PUERTA .</p><p>SE RECIBE AUTO O CAMIONETA PARA PERMUTAR&nbsp;</p>', 1043, '', 0, '', '', '', 'on', 0, 'on', 'on', '', 'on', 'on', 'on', 'on', '', 1),
(60, 7, 2, 1439, 'CAPELLO INMOBILIRIA VENDE DUPLEX CHACRAS ', '80.000', 'on', '-32.989848, -68.863391', ' San Martin al 51.....', '<p>Ubicaci&oacute;n: barrio cerrado, excelente ubicaci&oacute;n, San Martin al 51...&nbsp;- Villa Eucalipto</p><p>&nbsp;</p><p>DETALLE: Departamento de 84m&sup2; aprox, con excelente terminaciones, cuenta con dos habitaciones, dos ba&ntilde;o, cocina, comedor, ba&ntilde;o con ante ba&ntilde;o, ba&ntilde;adera, parrillero, estacionamiento.</p>', 84, '2', 2, 'on', '', 'on', 'on', 2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(61, 1, 2, 1449, 'Inmobiliria Capello Vende lote de Terrazas Park Lunlunta', 'usd 19500', 'on', '-33.037221, -68.861951', 'Azcuénaga, M5507 Luján de Cuyo, Mendoza', '<p>El lote tiene seguridad privada , se escritura en un a&ntilde;o y medio aproximadamente . posecion inmediata .&nbsp;</p>', 300, '', 0, '', '', '', 'on', 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(62, 3, 2, 1447, 'VENDO CASA EN LAS HERAS ', 'USD 60.000', 'on', '-32.842962, -68.829387', 'Lescano Fá & Calle Corrientes  Las Heras, Mendoza', '<p>Vendo Casa en Las Heras</p><p>3 dormitorios, lavander&iacute;a cerrada, triple cochera, patio, ba&ntilde;o, cocina comedor, cerco perimetral<br />Todo material, nada construcci&oacute;n en seco.<br />230 mts total, 76 mts cubierto</p>', 230, '3', 1, 'on', '', '', 'on', 1, 'on', '', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(63, 1, 2, 1449, 'VENDO DOS LOTES EN CORAZON DE MANZANA GRAN BOEDO ', 'USD 37000', 'on', '-32.987509, -68.830597', 'MILAGROS 2221', '<div class=\"section-title\" style=\"padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Hind, sans-serif;\"><h1 style=\"font-size: 20px; margin: 16px 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: 600; line-height: 26px;\">Gran Boedo, Gran Oportunidad. lotes 550 m, Manzanas Centrales</h1></div><div id=\"reactDescription\" style=\"padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Hind, sans-serif;\"><div class=\"ViewmoreContainer-c8o1fp-1 jHsbKQ collapsed\" style=\"padding: 0px; border: 0px; vertical-align: baseline; overflow: hidden; transition: max-height 0.1s cubic-bezier(0, 1, 0, 1) 0s; height: auto; max-height: 128px; line-height: 25px; margin: 16px 0px 8px;\"><div id=\"longDescription\" style=\"padding: 0px; border: 0px; vertical-align: baseline;\"><div style=\"padding: 0px; border: 0px; vertical-align: baseline;\">Vendemos dos lotes de 550 metros cada uno ,recibimos permuta, razonable .escuchamos oferta .<br />est&aacute;n ubicado en la manzana central<br />ubicaciones norte , sur</div></div></div></div>', 550, '', 0, '', '', '', '', 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(64, 1, 2, 1442, 'VENDO LOTE EN GODOY CRUZ ', 'USD 55.000', 'on', '-32.933112, -68.843218', 'BERNARDO ORTIZ , Godoy Cruz, Mendoza', '<p>Terrenos &middot; 362m&sup2;</p><p>BERNARDO ORTIZ&nbsp;, Godoy Cruz, Mendoza</p><ul><li>362 m&sup2; Total</li><li>10 Antig&uuml;edad</li></ul><p>Vendo Lote en Godoy Cruz</p><p>EL LOTE TIENE 362 METROS<br />APTO PARA CONSTRUIDIR<br />EN EXCELENTE ZONA</p><p>&nbsp;</p><p>Ubicaci&oacute;n</p><p>BERNARDO ORTIZ&nbsp;, Godoy Cruz, Mendoza</p>', 362, '', 0, '', '', '', 'on', 0, '', '', 'on', 'on', 'on', 'on', 'on', '', 1),
(65, 1, 2, 1449, 'VENDO LOTES EN TERRADA BARRIO PRIVADO ', '0000', 'on', '-33.005094, -68.848137  ', 'Calle terrada ', '<p>Excelente Oportunidad, Ultimos 3 Lotes</p><p>Precios:<br />Lotes perimetrales<br />Valor Contado: u$u 18.000<br />Valor Financiado: u$u 14.000 contado + 12 cuotas de $ 79.000 actualizables mes a mes con el &iacute;ndice de la C&aacute;mara Argentina de la Construcci&oacute;n (CAC)<br /><br />Lotes centrales:<br />Contado: u$u 19.500<br />Financiado: u$u 15.500 contado + 12 cuotas de $ 79.000 actualizables mes a mes con el &iacute;ndice de la C&aacute;mara Argentina de la Construcci&oacute;n (CAC)<br /><br />Lotes esquina:<br />Contado u$u 21.000<br />Financiaci&oacute;n: u$u 16.500 contado + 12 cuotas de 79.000 actualizables mes a mes con el &iacute;ndice de la C&aacute;mara Argentina de la Construcci&oacute;n (CAC)</p><p>No tiene cloaca .</p><p><br />POSESION EN DICIEMBRE DE 2020&nbsp;</p><p>ESCRITURACION A LOS 6 MESES DE POSESION .<br />EN DICIEMBRE SE ENTREGA ESCRITURA Y NO SE PAGA EXPENSAS , HASTA DICIEMBRE</p>', 500, '', 0, '', '', '', '', 0, 'on', 'on', 'on', 'on', '', 'on', '', '', 1),
(66, 3, 1, 1447, 'ALQUILO CASA EN BARRIO DALVIAN ', '128000', 'on', '-32.873822, -68.883016', 'Av. Champagnat 2006, M5500 Men', '<p>&nbsp;Casa en 2 plantas</p><p>Terreno 300 m2</p><p>Cubiertos 170 m2</p><p>Living comedor</p><p>Cocina/lavanderia</p><p>4 dormitorios</p><p>Escritorio</p><p>3 ba&ntilde;os (1 en suite)</p><p>Cochera pasante</p><p>Piscina</p><p>Zona Vip</p><p>Expensas $ 18.000</p>', 170, '4', 3, 'on', 'on', 'on', 'on', 2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(67, 4, 2, 1442, 'Vendo departamento en Godoy Cruz , a Estrenar ', 'USD $ 45.000', 'on', '-32.914167, -68.848529', 'Almte Brown 980 , Godoy Cruz ', '<p>El departamento se encuentra en un primer piso&nbsp;</p><p>con cochera , ba&ntilde;o ,living comedor , terraza</p>', 57, '1', 1, 'on', '', '', 'on', 1, 'on', 'on', 'on', '', 'on', 'on', 'on', '', 1),
(68, 4, 2, 1442, 'DEPARTAMENTO BOMBAL SUR ', 'USD 55.000 ', 'on', '-32.908312, -68.846322', 'almirante brown 1525', '<p>Inmobiliaria Capello Vende Departamento Bombal Sur</p><p>El Departamento Cuenta :</p><p>Una Habitacion</p><p>Ba&ntilde;o</p><p>Cochera al lado del ascensor principal</p><p>Terraza</p><p>Port&oacute;n con control remoto&nbsp;</p><p>tiene cocina electrica , no usa gas solo electricidad&nbsp;</p>', 49, '1', 1, 'on', '', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(69, 3, 2, 1451, 'CASA A ESTRENAS , BARRIO LAS RETAMAS, RODEO DEL MEDIO ', 'USD 120.000', 'on', '-32.990256, -68.668294', 'LAS RETAMAS ,RODEO DEL MEDIO MAIPU ', '<p>Casa a estrenar en ubicacion privilegiada dentro del Barrio Privado Las Retamas en Rodeo del Medio, Maip&uacute;, uno de los m&aacute;s prestigiosos emprendimiento de Gimenez Rilli. A una cuadra del club house y cerca de la entrada principal del barrio. La vivienda se desarrolla en una planta. Consta de : amplio living comedor; cocina con mesada de granito, anafe en mesada y horno el&eacute;ctrico empotrado. Amoblamiento completo de cocina al igual que en lavander&iacute;a; 3 dormitorios ( 1 dormitorio con vestidor y ba&ntilde;o en suite); otro ba&ntilde;o completo; pisos de porcellanato, calefacci&oacute;n central por losa radiante; aberturas de aluminio con doble vidriado herm&eacute;tico, cochera pasante para dos veh&iacute;culos, churrasquera y Pergolado. Piscina. Bajas expensas. Llave en mano. Escuchamos su propuesta. Superficie cubierta 142 m2. Dimensiones del lote 387 m2.</p>', 387, '3', 2, 'on', 'on', 'on', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1),
(70, 3, 1, 1439, 'BARRIO ALZAGA , VENTA O ALQUILER ', 'usd 315.000', 'on', '-32.968907, -68.862737', 'alzaga 7285', '<p>Casa &middot; 320m&sup2; &middot; 6 Ambientes &middot; 2 Cocheras</p><p>alzaga 7285, Chacras de Coria, Mendoza</p><ul><li>650 m&sup2; Total</li><li>320 m&sup2; Cubierta</li><li>6 Ambientes</li><li>3 Ba&ntilde;os</li><li>2 Cocheras</li><li>3 Dormitorios</li><li>2 Toilettes</li><li>4 Antig&uuml;edad</li><li>Muy luminoso</li></ul><p>&nbsp;</p><p>Esta propiedad cumple con:&nbsp;Permite mascotas.</p><p>Publicado hoy</p><p>Barrio Alzaga. Alquiler y Venta</p><p>La Casa cuenta con :<br />3 habitaciones<br />3 ba&ntilde;os<br />2 living<br />1 habitaci&oacute;n de servicio con ba&ntilde;o<br />Tiene sistema de camaras en todo la casa</p><p>&nbsp;</p><p>Ubicaci&oacute;n</p><p>Alzaga 7285, Chacras de Coria, Mendoza</p>', 650, '3', 3, 'on', 'on', 'on', 'on', 2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(71, 1, 2, 1447, 'Gran Oportunidad dique Potrerillos ', 'USD 48.000', 'on', '-32.950784, -69.156702', 'Peri lago Potrerillos  ', '<p>Perilago terrenos listos para escriturar, con excelente vista al Dique de Potrerillos y a la Cordillera de los Andes, el ingreso es por Ruta Nacional N&ordm; 7. ideal para Emprendimiento Turistico.terrenos listos para escriturar,&nbsp;</p><p>4000 metros de terreno&nbsp;</p><p>La propiedad se encuentra a 43 km del centro de la Ciudad de Mendoza.</p>', 4000, '', 0, '', '', '', 'on', 0, '', 'on', '', 'on', '', 'on', '', '', 1),
(72, 1, 2, 1450, 'LOTE EN B° LICEO RUGBY CLUB ', 'USD $ 38.000', 'on', '-32.984893, -68.825265', ' Mariano Boedo, Luján de Cuyo, Mendoza', '<p>Lote IV Etapa, Barrio Privado Liceo Rugby CLub. 1043 m2, liminta con loteo gran Boedo lote Perimetral&nbsp; . listo para escriturar y para construir. Todos los servicios subterr&aacute;neos, cloacas, calles iluminadas con farolas. Hermoso entorno campestre con vista a la cordillera, cercano a vi&ntilde;edos, bodegas y rutas del vino.. Seguridad 24 horas. Posee club con canchas de Rugby, Hockey, F&uacute;tbol, piscina, escuela de verano, club house. Es un lugar ideal para quienes gusten de disfrutar del placer de la tranquilidad y el aire puro. Rapidos accesos y cercano a centros urbanos, ubicado a 13 kms. de la capital de Mendoza y a 3 kms. de la ciudad de Maip&uacute; y Chacras de Coria en cercan&iacute;as a nuevo Jumbo.</p>', 1043, '', 0, '', '', '', 'on', 0, 'on', 'on', 'on', 'on', 'on', 'on', '', '', 1),
(73, 1, 2, 1450, 'LOTE EN B° LICEO RUGBY CLUB ', 'USD $ 43000', 'on', '-32.985436, -68.825317', ' Mariano Boedo, Luján de Cuyo, Mendoza', '<p>Lote IV Etapa, Barrio Privado Liceo Rugby CLub. 1020&nbsp;&nbsp;m2,&nbsp;lote Perimetral&nbsp; . listo para escriturar y para construir. Todos los servicios subterr&aacute;neos, cloacas, calles iluminadas con farolas. Hermoso entorno campestre con vista a la cordillera, cercano a vi&ntilde;edos, bodegas y rutas del vino.. Seguridad 24 horas. Posee club con canchas de Rugby, Hockey, F&uacute;tbol, piscina, escuela de verano, club house. Es un lugar ideal para quienes gusten de disfrutar del placer de la tranquilidad y el aire puro. Rapidos accesos y cercano a centros urbanos, ubicado a 13 kms. de la capital de Mendoza y a 3 kms. de la ciudad de Maip&uacute; y Chacras de Coria en cercan&iacute;as a nuevo Jumbo.</p>', 1020, '', 0, '', '', '', '', 0, 'on', 'on', 'on', 'on', '', 'on', '', '', 1),
(74, 1, 2, 1450, 'LOTE EN B° LICEO RUGBY CLUB ', 'USD $ 43000', 'on', '-32.984893, -68.825265', ' Mariano Boedo, Luján de Cuyo, Mendoza', '<p>&nbsp;</p><p>Lote IV Etapa, Barrio Privado Liceo Rugby CLUB. 1197&nbsp;m2,&nbsp; lote Perimetral&nbsp; . listo para escriturar y para construir. Todos los servicios subterr&aacute;neos, cloacas, calles iluminadas con farolas. Hermoso entorno campestre con vista a la cordillera, cercano a vi&ntilde;edos, bodegas y rutas del vino.. Seguridad 24 horas. Posee club con canchas de Rugby, Hockey, F&uacute;tbol, piscina, escuela de verano, club house. Es un lugar ideal para quienes gusten de disfrutar del placer de la tranquilidad y el aire puro. Rapidos accesos y cercano a centros urbanos, ubicado a 13 kms. de la capital de Mendoza y a 3 kms. de la ciudad de Maip&uacute; y Chacras de Coria en cercan&iacute;as a nuevo Jumbo.</p><p>&nbsp;</p>', 1197, '', 0, '', '', '', '', 0, 'on', 'on', 'on', 'on', 'on', '', '', '', 1),
(75, 1, 2, 1450, 'LOTE EN B° LICEO RUGBY CLUB ', 'USD $ 43000', 'on', '-32.984893, -68.825265', ' Mariano Boedo, Luján de Cuyo, Mendoza', '<p><span lang=\"ES\" style=\"background-attachment:initial; background-clip:initial; background-image:initial; background-origin:initial; background-position:initial; background-repeat:initial; background-size:initial; font-family:arial,sans-serif; font-size:10pt; line-height:107%\">Lote IV Etapa, Barrio Privado Liceo Rugby Club. 1152 m2, lote Perimetral&nbsp;. listo para escriturar y para construir. Todos los servicios subterr&aacute;neos, cloacas, calles iluminadas con farolas. Hermoso entorno campestre con vista a la cordillera, cercano a vi&ntilde;edos, bodegas y rutas del vino.. Seguridad 24 horas. Posee club con canchas de Rugby, Hockey, F&uacute;tbol, piscina, escuela de verano, club house. Es un lugar ideal para quienes gusten de disfrutar del placer de la tranquilidad y el aire puro. Rapidos accesos y cercano a centros urbanos, ubicado a 13 kms. de la capital de Mendoza y a 3 kms. de la ciudad de Maip&uacute; y Chacras de Coria en cercan&iacute;as a nuevo Jumbo</span></p>', 1152, '', 0, '', '', '', '', 0, 'on', 'on', 'on', 'on', 'on', '', '', '', 1),
(76, 10, 2, 1445, 'OPORTUNIDA FINCA EN BARRIALES ', 'USD 85.000', 'on', '-33.143461, -68.643595', 'JUNIN MENDOZA ', '<p>LA FINCA ESTA UBICADA A 35 KM DE LA CIUDAD DE MENDOZA&nbsp;</p><p>APROXIMADAMENTE SON UNOS 40 MINUTOS EN AUTO&nbsp;</p><p>ACCESO RAPIDO A LA FINCA A METROS DE LA RUTA</p><p>9 HECTARIAS&nbsp;</p><p>8 CON VI&Ntilde;EDOS DE LAS 9&nbsp;HECTARIAS&nbsp;</p><p>&nbsp;</p><p><strong>. 1(uno)&nbsp; tractor Fiat Standart 400. mod 1973/74. c/ levante hidraulico.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp; Barra de tiro para tractor.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Carrito metalico de un eje con caja metalica.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Azufrador- Pulverizador marca Maipu, para tractor.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Arado para 6(seis) rejas para parral. </strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Una rastra de 16 (dieciseis) disco para parral.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Cultivador de 7 (siete)&nbsp; rejas.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Arado de mancera de una reja.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Desorillador para animal.</strong></p><p><strong>&nbsp;</strong></p><p><strong>2 )dos)&nbsp; Desorilladoras con autom&aacute;tico p/ tractor marca Musetto c/ cadenas.</strong></p><p><strong>&nbsp;</strong></p><p><strong>5 (cinco) Tambor de 200 litros para gas oil.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Tijera para parral importada.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Serrucho para vi&ntilde;edo.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Pala punta coraz&oacute;n.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp; Orquilla de 4 (cuatro) dientes.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp; Pala de puntear.</strong></p><p><strong>&nbsp;</strong></p><p><strong>28 ( veinte y ocho) tachos cosechadores de 20 kilos c/u</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Azufrador de mano.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp; Sulfatadora mochila marca Hatsuta.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Escalera met&aacute;lica.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Bomba para agua manual.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Atomizador de 400 litros para levantar hidr&aacute;ulico Marca Maip&uacute; con tambor de acero inoxidable con manguera y lanza marca Maip&uacute; con su bomba.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Zapa marca Bellot ( espa&ntilde;ola) con mango largo.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Juego de 3 ( tres) llaves fijas.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Port&oacute;n met&aacute;lico de dos hojas.</strong></p><p><strong>&nbsp;</strong></p><p><strong>1(uno)&nbsp;&nbsp; Armario para herramientas menores, colgantes.</strong></p><p>&nbsp;</p><p><strong>Ped&iacute; 100.000</strong></p><p>&nbsp;</p><p>&nbsp;</p>', 90000, '', 0, '', '', '', 'on', 0, '', 'on', '', 'on', 'on', '', '', '', 1),
(77, 3, 2, 1447, 'BARRIO PORTICO DE SOL ll', 'USD 180.000', 'on', '-32.859119, -68.876785', 'Dr. Lemos, Las Heras, Mendoza', '<p>Casa a estrenar, construida en una planta, terminaciones de primera calidad.</p><p>El barrio p&oacute;rtico del sol 2 se encuentra en el challao.</p><p>Portico del sol 2</p><p>169 cubiertos</p><p>310 lote&nbsp;</p><p>3 ba&ntilde;os</p><p>3 dormitorios (1 en suitte)</p><p>Calefacci&oacute;n central</p><p>Horno el&eacute;ctrico y anafe a gas&nbsp;</p><p>Preinstalaciones aire acondicionado en todos los ambientes</p>', 310, '3', 3, 'on', '', '', 'on', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpropiedadesimagenes`
--

CREATE TABLE `tblpropiedadesimagenes` (
  `idImagen` bigint(20) NOT NULL,
  `idPropiedad` bigint(20) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `orden` int(10) DEFAULT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpropiedadesimagenes`
--

INSERT INTO `tblpropiedadesimagenes` (`idImagen`, `idPropiedad`, `imagen`, `orden`, `estado`) VALUES
(51, 9, '25082.jpg', NULL, 1),
(52, 9, '27116.jpg', NULL, 1),
(53, 9, '23073.jpg', NULL, 1),
(54, 9, '27653.jpg', NULL, 1),
(55, 9, '24918.jpg', NULL, 1),
(56, 9, '88243.jpg', NULL, 1),
(57, 9, '24642.jpg', NULL, 1),
(58, 9, '79891.jpg', NULL, 1),
(59, 9, '51576.jpg', NULL, 1),
(496, 34, '3d130618-0723-48fc-a8cc-460b11e67d7976.jpg', NULL, 1),
(497, 34, '4aa5e1c5-3baf-4f33-a9d1-d1a76ef49e7b39.jpg', NULL, 1),
(498, 34, '65b128f8-fed1-420f-9e4a-d810723f95eb29.jpg', NULL, 1),
(499, 34, '3359b039-29f6-4ff1-b074-d23b064ccf9288.jpg', NULL, 1),
(500, 34, 'c8760479-3e53-463d-9724-f5801dd9fe7a59.jpg', NULL, 1),
(501, 34, 'e0246580-8126-419c-99ce-dd6d08982dba65.jpg', NULL, 1),
(502, 34, 'e323091f-7ad4-4fd9-b14a-f1636e35c75e13.jpg', NULL, 1),
(503, 34, 'image59d4aa9facae557.jpg', NULL, 1),
(504, 34, 'image59d4aa9f910cb10.jpg', NULL, 1),
(505, 34, '70e1b22e-3cba-4a9c-9cc0-48da80b7abfb15.jpg', NULL, 1),
(506, 34, 'image59d4aa9fedd1096.jpg', NULL, 1),
(507, 34, 'image59d4aaa0b810436.jpg', NULL, 1),
(508, 34, 'image59d4aaa0d4f8849.jpg', NULL, 1),
(509, 34, 'image59d4aaa057b1149.jpg', NULL, 1),
(510, 34, 'image59d4aaa07805d20.jpg', NULL, 1),
(511, 34, 'image59d4aaa03954360.jpg', NULL, 1),
(512, 34, 'image59d4aaa09821383.jpg', NULL, 1),
(513, 35, '1f6e9878-1340-4b34-81e3-90f18d6dd8e7.jpg', 13, 1),
(514, 35, '3a64e8ae-e1df-4fe2-9396-7615d78d24af.jpg', 12, 1),
(515, 35, '2c8fb59d-afe7-4811-ba1c-9ef56aafe3d2.jpg', 11, 1),
(516, 35, '38bf7b1a-20fd-4d87-8b4d-f7be11be8f42.jpg', 13, 1),
(517, 35, '10926980-b82d-4812-93b5-e5f7eccf6e32.jpg', 8, 1),
(519, 35, '8f6edc84-2385-4011-a8c9-cbd717fcbabd.jpg', 9, 1),
(521, 35, '71999135-7802-413d-90bb-9940b74a51b3.jpg', 1, 1),
(522, 35, 'b93f109c-9e6c-47c6-8dce-939b63788ab1.jpg', 7, 1),
(523, 35, 'ac8deaa2-f89b-47ba-a4ce-7bf6bdf7c624.jpg', 6, 1),
(524, 35, 'bba21386-d335-4b0e-bbe4-9c6770bce7d1.jpg', 5, 1),
(525, 35, 'c7140dc7-2e5f-45d2-98fc-3ad2c4d71880.jpg', 4, 1),
(526, 35, 'dc96bcaf-40d6-450e-9638-bc6915584c77.jpg', 3, 1),
(527, 35, 'e7c6c01e-4d73-4f49-8753-66667c2a7d51.jpg', 2, 1),
(646, 43, '2abac78b-158d-4f56-8db5-1e2250c5a591.jpg', NULL, 1),
(647, 43, '2f7a6bf0-a054-4662-9c3c-d1954a9a7396.jpg', NULL, 1),
(648, 43, '332ae012-2e41-4925-ba8e-014eb5d4dbb9.jpg', NULL, 1),
(649, 43, '828dbf38-738c-4e6a-a63f-213c2785adce.jpg', NULL, 1),
(650, 43, 'a0c51e9e-4348-471d-91eb-ba4b2f863397.jpg', NULL, 1),
(651, 43, 'ba2ad3f2-8606-452d-b9ff-91cc6086e229.jpg', NULL, 1),
(652, 43, 'd5c87e23-b00f-442d-bb2c-5872ed0a901c.jpg', NULL, 1),
(653, 43, 'd6a6241f-6b79-444f-b201-2716148c38f4.jpg', NULL, 1),
(681, 47, '7d464021-224a-497f-b99b-e0d698d6c5e5.jpg', NULL, 1),
(682, 48, '2d841a4e-d74f-4a3b-b0ff-68cff1b73063.jpg', 12, 1),
(683, 48, '02a1d541-efe5-4726-ab5c-a3cab3fd5461.jpg', 11, 1),
(684, 48, '1af07993-8259-45f9-8768-4e7366623881.jpg', 10, 1),
(685, 48, '6abeae06-764e-4d97-a823-a88c8e693196.jpg', 9, 1),
(686, 48, '8d5df6e6-560e-4e7f-b523-f45feff3b0be.jpg', 8, 1),
(687, 48, '56f6fce1-a68e-422d-bdf2-f14c36df6073.jpg', 1, 1),
(689, 48, '57e2468d-62d5-4107-829a-53b7b38a3683.jpg', 7, 1),
(690, 48, '0345b1a4-4a5a-447e-bf92-426ae5d93c7f.jpg', 6, 1),
(691, 48, '86682b7a-778a-4a2a-9f30-36c4a3ac587f.jpg', 5, 1),
(692, 48, 'e2e1af81-d522-4f56-9c7a-e4dd3e74ea81.jpg', 4, 1),
(693, 48, 'eb2c81b9-2d9b-4337-8af2-a383cf4d147b.jpg', 3, 1),
(694, 48, 'f91d1bc7-db76-497f-a34d-59331160bd5e.jpg', 2, 1),
(695, 49, '4d568b94-66fc-42b3-a471-199e4675f0be.jpg', NULL, 1),
(696, 49, '4ce9db92-198b-4ea7-98b9-e32766be7ec8.jpg', NULL, 1),
(697, 49, '6f016245-f4aa-487a-b80c-edb9a23dc87f.jpg', NULL, 1),
(698, 49, '9c624615-8d8d-49ca-98cc-94943831f275.jpg', NULL, 1),
(699, 49, '16b7bbf7-9a09-43fd-8a2e-45e67de59d51.jpg', NULL, 1),
(700, 49, '8d58c352-9490-4d3f-a068-68aca8fa343c.jpg', NULL, 1),
(701, 49, '29b4c33a-27ef-4158-a590-641490149e6f.jpg', NULL, 1),
(702, 49, '463b958c-8ab5-4e8f-b2cc-de24d3b657de.jpg', NULL, 1),
(703, 49, '63e376c8-0b7b-4828-a8a1-b9495b52d463.jpg', NULL, 1),
(704, 49, '505f6c23-b1da-4a29-bad2-50e55e9ac3d2.jpg', NULL, 1),
(705, 49, '45598d49-fac8-488d-ae3a-5eb2b235d2e7.jpg', NULL, 1),
(706, 49, '47250bfa-8455-48e6-a9de-c2798ad93b87.jpg', NULL, 1),
(707, 49, '2b80a835-a73b-4df2-9c6f-57b01c9e9d09.jpg', NULL, 1),
(708, 49, '27060fd5-59e5-4312-8d9b-8e8780a071cb.jpg', NULL, 1),
(709, 49, '6290229d-52ba-4f2c-8b69-e1140e1239b9.jpg', NULL, 1),
(710, 49, '50404be0-5ff0-49f2-99ae-08accb85d502.jpg', NULL, 1),
(711, 49, 'ab2a7e3c-745b-4943-8a31-44cfee2b6cf4.jpg', NULL, 1),
(712, 49, 'c5206dfa-6e8c-4320-bdef-6880b7f1bcde.jpg', NULL, 1),
(713, 49, 'bb83d11a-80a8-4372-af44-eef7ae4dcdb6.jpg', NULL, 1),
(714, 49, '2b80a835-a73b-4df2-9c6f-57b01c9e9d0952.jpg', NULL, 1),
(715, 49, '4d568b94-66fc-42b3-a471-199e4675f0be63.jpg', NULL, 1),
(716, 49, '6f016245-f4aa-487a-b80c-edb9a23dc87f82.jpg', NULL, 1),
(717, 49, '4ce9db92-198b-4ea7-98b9-e32766be7ec836.jpg', NULL, 1),
(718, 49, '9c624615-8d8d-49ca-98cc-94943831f27520.jpg', NULL, 1),
(719, 49, '29b4c33a-27ef-4158-a590-641490149e6f34.jpg', NULL, 1),
(720, 49, '8d58c352-9490-4d3f-a068-68aca8fa343c32.jpg', NULL, 1),
(721, 49, '16b7bbf7-9a09-43fd-8a2e-45e67de59d5149.jpg', NULL, 1),
(722, 49, '63e376c8-0b7b-4828-a8a1-b9495b52d46362.jpg', NULL, 1),
(723, 49, '463b958c-8ab5-4e8f-b2cc-de24d3b657de25.jpg', NULL, 1),
(724, 49, '27060fd5-59e5-4312-8d9b-8e8780a071cb84.jpg', NULL, 1),
(725, 49, '45598d49-fac8-488d-ae3a-5eb2b235d2e793.jpg', NULL, 1),
(726, 49, '505f6c23-b1da-4a29-bad2-50e55e9ac3d212.jpg', NULL, 1),
(727, 49, '47250bfa-8455-48e6-a9de-c2798ad93b8720.jpg', NULL, 1),
(728, 49, '50404be0-5ff0-49f2-99ae-08accb85d50266.jpg', NULL, 1),
(729, 49, 'ab2a7e3c-745b-4943-8a31-44cfee2b6cf431.jpg', NULL, 1),
(730, 49, '6290229d-52ba-4f2c-8b69-e1140e1239b964.jpg', NULL, 1),
(731, 49, 'bb83d11a-80a8-4372-af44-eef7ae4dcdb682.jpg', NULL, 1),
(732, 49, 'c5206dfa-6e8c-4320-bdef-6880b7f1bcde92.jpg', NULL, 1),
(733, 49, 'cd23c3da-2441-4447-9d5a-aa3bd7db42d8.jpg', NULL, 1),
(734, 49, 'cdf69057-2ab5-48ee-ab42-20593c723788.jpg', NULL, 1),
(735, 49, 'd3bb5b93-0a77-4a76-9bb1-765ab8ac6ad6.jpg', NULL, 1),
(736, 49, 'd31aa72e-2890-4056-b235-8bf3ae2cae9d.jpg', NULL, 1),
(737, 49, 'ea427220-4271-4240-b5c9-d0895fd376b7.jpg', NULL, 1),
(738, 49, 'e079753e-c54a-40a9-acf4-0c9c6fb008b9.jpg', NULL, 1),
(739, 49, 'f3a0df90-dce0-4c1b-9a1b-487ac475274e.jpg', NULL, 1),
(740, 49, 'fbccfaa6-17fd-4ed3-83fd-463af6b7a97c.jpg', NULL, 1),
(741, 49, 'e373ddfb-3e0f-4da8-9ace-f48bf94967f0.jpg', NULL, 1),
(742, 50, '77090645_10157749099311240_2660479137449246720_n.jpg', NULL, 1),
(743, 50, '77097802_10157749098846240_3159051091631407104_n (1).jpg', NULL, 1),
(744, 50, '77321163_10157749099196240_4798087573303984128_n.jpg', NULL, 1),
(745, 50, '78310276_10157749099556240_2048621051398586368_n.jpg', NULL, 1),
(747, 50, '78353901_10157749099081240_58650479961309184_n.jpg', NULL, 1),
(748, 50, '74792381_10157749098871240_7498972045087080448_n.jpg', NULL, 1),
(749, 50, '78654183_10157749098901240_6595074642677858304_n.jpg', NULL, 1),
(750, 50, '78684656_10157749099481240_4019452303672082432_n.jpg', NULL, 1),
(751, 50, '78857639_10157749099386240_6727791082039410688_n.jpg', NULL, 1),
(761, 52, '0e180f11-dc27-4632-b515-a91278abb97c.jpg', NULL, 1),
(762, 52, '1c1cd103-163e-415e-9c0b-508dc28a8d8b.jpg', NULL, 1),
(763, 52, '4d0bad0c-5e58-44a6-9439-db6c994ed922.jpg', NULL, 1),
(764, 52, '7e28c6fe-187e-4cf0-9c54-0a954d11cbb2.jpg', NULL, 1),
(765, 52, '1d9395dc-0783-4286-bb97-13eba20938c1.jpg', NULL, 1),
(766, 52, '86bd245f-73c1-4547-98f9-742c32937575.jpg', NULL, 1),
(767, 52, '92e331a2-8696-4e98-82dd-ea86ef570c23.jpg', NULL, 1),
(768, 52, '67f1d228-c30d-49fe-809b-16d2a3832c0f.jpg', 1, 1),
(769, 52, '310c6335-fc4f-4023-9f11-39dd89a8c8ed.jpg', NULL, 1),
(770, 52, '17760f61-2049-439a-93be-5d74f8bcd579.jpg', 5, 1),
(771, 52, 'bb962ba5-1c83-483c-9907-1167ea512da5.jpg', 4, 1),
(772, 52, 'da458458-8ef8-4b3f-bc24-ca51ebd4af4e.jpg', NULL, 1),
(773, 52, 'fb1689b1-b7fb-484a-8878-a8a01ae0fbfe.jpg', 3, 1),
(774, 52, 'd649ab1f-7577-47cc-b35d-3fd63ea3b958.jpg', 2, 1),
(775, 53, '86c3f501-239e-455c-9b74-46fb656317ca.jpg', 12, 1),
(776, 53, '3f48950c-224f-4a32-a78a-f899788f9205.jpg', 13, 1),
(777, 53, '5d8c5b77-b666-48ea-a0e5-0db1dd9ddcca.jpg', 11, 1),
(778, 53, '90374f55-dc55-4191-b7e5-12dcd88717a3.jpg', 10, 1),
(779, 53, '26405a83-25c5-4ab8-a7d8-f7095a456ab4.jpg', 9, 1),
(780, 53, '8432fe76-5d55-4e1b-818e-a6167bccacbc.jpg', 8, 1),
(781, 53, 'a15ae702-a27e-4890-8b61-55204d2d1303.jpg', 6, 1),
(782, 53, 'aebd1a8a-77ea-462a-9e36-598588b94a21.jpg', 5, 1),
(783, 53, '24193149-bf65-4312-902a-3a82a12e181b.jpg', 2, 1),
(784, 53, 'b3ed6e6f-1716-47ec-a638-3e502f04af4c.jpg', 4, 1),
(785, 53, 'b13334c8-5b66-4b7b-b0be-7b0c2d0fbce9.jpg', 3, 1),
(786, 53, 'f9629f31-1569-4d71-b50c-8cef3555bba5.jpg', 1, 1),
(787, 54, '35db1189-0543-4d58-9c77-ec181ff0d804.jpg', 12, 1),
(788, 54, '44a58e81-306f-4c26-9267-aee24e2e39d8.jpg', 14, 1),
(791, 54, '50ec733e-267f-4055-8050-f636f7edad31.jpg', NULL, 1),
(792, 54, '54dcf5e2-b0db-4532-9ea4-a8701fb7b5de.jpg', 12, 1),
(793, 54, '76b71c05-3b22-40b3-bf23-9a550240395b.jpg', NULL, 1),
(794, 54, '00305dc6-8e59-4b1a-b755-1dd4d9c45c8e.jpg', 9, 1),
(795, 54, '380dc54f-6602-4666-969e-d2f53c9773d1.jpg', 11, 1),
(796, 54, '2764d704-fd0d-4521-97cc-e8f69798a0db.jpg', 10, 1),
(797, 54, '4321e2eb-a8e7-4a9d-9165-ab462f9c3329.jpg', 7, 1),
(798, 54, 'a4bd8c73-9d6c-44b9-953e-ddc442378d9d.jpg', 6, 1),
(799, 54, 'b84150b1-89d7-4bda-883f-487fb6a94d69.jpg', 4, 1),
(800, 54, 'bdbbe25c-7901-40a9-8199-0285d747ad54.jpg', 3, 1),
(801, 54, 'd6aaddc4-667f-4940-91f2-e3a824767e55.jpg', 5, 1),
(802, 54, 'eb28539a-914c-4cad-afe2-edb08391fabf.jpg', 2, 1),
(803, 54, 'fcccace7-2aae-4d75-9020-b83e8f7cacb5.jpg', 1, 1),
(804, 55, '3d6b21d2-54af-4bae-a7c5-09fbb59519f8.jpg', 5, 1),
(805, 55, '3fb5ec12-b52a-451f-93b3-5474223aeecc.jpg', 3, 1),
(806, 55, '679e9c67-2f76-4e25-b429-4d894f217903.jpg', 2, 1),
(807, 55, '870ea6df-995f-4a5b-92b1-16aa7f49a8f8.jpg', 1, 1),
(808, 55, 'a46fa602-474d-4c54-a8d4-c2a77df20457.jpg', 4, 1),
(809, 56, '0cc3f3f1-a561-4556-b9a3-04d6d0769e21.jpg', 7, 1),
(810, 56, '4adb805f-c155-4e43-95f3-f89eb9fca51e.jpg', 6, 1),
(811, 56, '8ba83b4a-997c-412e-ab6a-517feca7a04f.jpg', 5, 1),
(812, 56, '290465eb-08d9-4aa8-bae4-18279d706828.jpg', 4, 1),
(813, 56, '34911bc2-0c50-4e47-be15-4c491a914738.jpg', 3, 1),
(814, 56, 'b86ad4e4-a636-4787-9301-f5baf05aae07.jpg', 2, 1),
(815, 56, 'dbc08993-e73f-4a1d-8ec4-3071e8214016.jpg', 1, 1),
(816, 57, '05b2def6-462f-49a0-b507-4d80916d0d7f.jpg', 5, 1),
(817, 57, 'b4b0c465-d120-47f4-807f-bc0af1505a7b.jpg', 4, 1),
(818, 57, '3102a9fd-32b5-4526-928a-e54078283ae9.jpg', 3, 1),
(819, 57, 'bf25b09f-078a-4b5d-b6c0-0ce8d684c5fe.jpg', 1, 1),
(820, 57, 'ecbfa020-b927-436a-9161-2cd3f1805ba6.jpg', 2, 1),
(821, 58, '2a69cd20-38bc-4b9d-98b6-261e4e2cea87.jpg', 4, 1),
(822, 58, '7a21f124-227e-438d-9f66-e8351db3fcdc.jpg', 12, 1),
(823, 58, '46bd2537-b17e-4085-8269-23197aaabc8c.jpg', 10, 1),
(824, 58, '7492f5ed-7c48-43cd-9cf5-80d23c7c1039.jpg', 9, 1),
(825, 58, '52d36aa3-9eb2-4a64-a7be-958916841962.jpg', 8, 1),
(826, 58, 'a32f7d2e-ccc9-4810-8dfd-502d102effc0.jpg', 1, 1),
(827, 58, 'b7c96c0d-3c3d-4571-9e54-e5ddf405a0c5.jpg', 6, 1),
(828, 58, 'aae64aea-e276-4359-b8af-3b65aeadf9ce.jpg', 5, 1),
(829, 58, 'bcc695fb-8718-409a-b75c-46bc5f2e5aa8.jpg', 4, 1),
(830, 58, 'ed15e3c2-c7ca-4b74-b0df-c30f588365a6.jpg', 3, 1),
(831, 58, 'e8efefc7-1ac6-48ee-ab77-e2979fa8e735.jpg', 7, 1),
(832, 58, 'ee9e6f22-d4b9-428f-b6fe-382f71cabbe7.jpg', 2, 1),
(833, 59, '2d8ad58c-5630-4016-b70b-2cb5cbf0fe78.jpg', 5, 1),
(835, 59, '1fd90179-6ef4-4fdc-84d3-dcfed37bccf3.jpg', 4, 1),
(836, 59, 'fe1d9534-9b6d-46ec-8529-c99086c810e4.jpg', 1, 1),
(837, 59, '8e4033b3-1852-49f3-a501-6ce0daceb485.jpg', 2, 1),
(838, 59, 'f0ce7ad5-aef2-4069-87c5-3736c8f216b9.jpg', 3, 1),
(839, 60, '49ff46eb-2eae-4f0f-8faf-a20b94077450.jpg', 7, 1),
(840, 60, '2f273dee-aed1-40e2-8054-c893c29ca220 - copia.jpg', 6, 1),
(841, 60, '79f966fd-235d-4428-a7a0-d4368e0ef2e4.jpg', 1, 1),
(842, 60, 'abaa2861-4e5d-445f-9c6f-163902e89a6a.jpg', 5, 1),
(843, 60, 'c6161187-7581-48b6-a330-9bf8fde062f7.jpg', 3, 1),
(844, 60, 'ce04f186-354f-4309-8cda-bd0da11a5dfa - copia.jpg', 8, 1),
(846, 60, 'd7a00f6d-dc58-48c2-9f1c-222957fcd05a - copia73.jpg', 1, 1),
(847, 61, '7602e18f-15a4-4350-926e-e850b7c0e12d.jpg', 3, 1),
(848, 61, '1bb53227-2b2e-4651-bda2-4cc0d7dd01b4.jpg', 2, 1),
(849, 61, '295a7c92-cc86-4a23-b727-a9ae834805a3.jpg', 6, 1),
(850, 61, 'ffc7ebc1-39e9-471f-baaa-3badc682fd5f.jpg', 5, 1),
(851, 61, 'c8351c17-02b0-4332-bf61-bc8ffb725d06.jpg', 1, 1),
(852, 61, 'ec5e3d3d-3d59-4b5e-83df-eaafa31b6b1c.jpg', 4, 1),
(853, 62, '2a69cd20-38bc-4b9d-98b6-261e4e2cea8799.jpg', 12, 1),
(854, 62, '46bd2537-b17e-4085-8269-23197aaabc8c11.jpg', 11, 1),
(855, 62, '7a21f124-227e-438d-9f66-e8351db3fcdc50.jpg', 7, 1),
(856, 62, '52d36aa3-9eb2-4a64-a7be-95891684196285.jpg', 9, 1),
(857, 62, '7492f5ed-7c48-43cd-9cf5-80d23c7c103943.jpg', 10, 1),
(858, 62, 'a32f7d2e-ccc9-4810-8dfd-502d102effc012.jpg', 1, 1),
(859, 62, 'b7c96c0d-3c3d-4571-9e54-e5ddf405a0c548.jpg', 2, 1),
(860, 62, 'aae64aea-e276-4359-b8af-3b65aeadf9ce76.jpg', 3, 1),
(861, 62, 'ed15e3c2-c7ca-4b74-b0df-c30f588365a627.jpg', 4, 1),
(862, 62, 'e8efefc7-1ac6-48ee-ab77-e2979fa8e73526.jpg', 5, 1),
(863, 62, 'bcc695fb-8718-409a-b75c-46bc5f2e5aa841.jpg', 6, 1),
(864, 62, 'ee9e6f22-d4b9-428f-b6fe-382f71cabbe769.jpg', 8, 1),
(865, 63, '5a394987-9adb-4001-b49d-c5fdd62debcc.jpg', 5, 1),
(866, 63, '33a6f6a0-778b-4809-8a36-bf275a412321.jpg', 4, 1),
(867, 63, '8087f52b-d66f-4058-b0e8-1fe3fbdd9d97.jpg', 3, 1),
(868, 63, 'd295cb4e-9d86-4dfd-98fa-9e1160ff43cd.jpg', NULL, 1),
(869, 63, 'd7215b48-402b-46e3-9916-d088d267c176.jpg', 2, 1),
(870, 64, 'b4b0c465-d120-47f4-807f-bc0af1505a7b24.jpg', 3, 1),
(872, 64, '05b2def6-462f-49a0-b507-4d80916d0d7f38.jpg', 4, 1),
(873, 64, 'bf25b09f-078a-4b5d-b6c0-0ce8d684c5fe76.jpg', NULL, 1),
(874, 64, 'ecbfa020-b927-436a-9161-2cd3f1805ba674.jpg', 2, 1),
(875, 65, '3fd05098-a376-4265-9822-fbc82d01e13e.jpg', 2, 1),
(876, 65, 'c499a1bb-9532-4ac1-9fc1-66e379a10596.jpg', NULL, 1),
(877, 65, 'ed474694-d9d7-413b-88e6-26b96266924a.jpg', 4, 1),
(878, 65, 'Planimetria (1)[4621].JPG', 3, 1),
(879, 66, '7b095fe8-50f1-49fb-b89e-d44d4ea31e80.jpg', 12, 1),
(880, 66, '8c2689a3-d8b4-4ab8-a79b-737a2d502f9a.jpg', 14, 1),
(883, 66, '33d372bc-4c13-4dca-8ffb-01a2e6e197a8.jpg', 15, 1),
(886, 66, '74f72e08-207e-4aad-82e4-2705bb809233.jpg', 13, 1),
(887, 66, '3419a2c2-2619-4be5-91cb-8887cb1a2258.jpg', 11, 1),
(888, 66, '855716df-7c30-41e7-b1b3-d4428b4b51a0.jpg', 10, 1),
(889, 66, 'a8d159f0-efed-4e09-a4f5-ca872854a686.jpg', 8, 1),
(890, 66, 'a09df656-220b-436f-8a97-27d369bcf6c9.jpg', 7, 1),
(891, 66, '6272703a-c91e-48fa-b5eb-645db3142116.jpg', 6, 1),
(892, 66, 'b9fd7658-e5c1-4e32-aa99-9164a3156fe5.jpg', 5, 1),
(893, 66, 'cc9ca42c-f831-491c-95b7-65699960ed66.jpg', 1, 1),
(894, 66, 'a431f66d-d128-40a1-975c-f1c10be34de5.jpg', 4, 1),
(895, 66, 'd895acee-0d34-4656-b052-563d41084a87.jpg', 3, 1),
(896, 66, 'db356fe3-115b-43e9-bb48-04f4233eeab5.jpg', 2, 1),
(897, 67, '6b47aafb-e8b5-49b4-9b07-92056c12c760.jpg', 6, 1),
(898, 67, '8e4a6059-f727-4537-beae-7704b4d20b3a.jpg', 14, 1),
(899, 67, '37b542d0-30cf-4386-b6f4-d9d321bd3ff9.jpg', 7, 1),
(900, 67, '81d68c4f-bf5c-4c29-8909-86db448afc70.jpg', 8, 1),
(901, 67, '8e77bcac-ad74-4f31-9908-73eb50717905.jpg', 1, 1),
(902, 67, '84ef45d6-a58f-4f95-a0e2-8e7ef2ed223a.jpg', 15, 1),
(903, 67, '250c7dcf-ba4f-44be-9bba-aa4fb11f368a.jpg', 5, 1),
(904, 67, '6545c76c-5517-42cb-8568-a21eb4b22783.jpg', 12, 1),
(905, 67, '649c4057-9eed-43cf-95d0-c059cce52cd5.jpg', 11, 1),
(906, 67, '1033e2cb-36fe-40d7-a851-985fb0803ab9.jpg', 12, 1),
(907, 67, '5344653e-be51-439b-9695-d2e929383eee.jpg', 4, 1),
(908, 67, '18723162-2e07-4ef3-951b-d48566f7518d.jpg', 13, 1),
(909, 67, 'a1743c19-b47c-4e50-8c01-9f2d49e41e14.jpg', 3, 1),
(910, 67, 'a6eb2550-358a-486a-a62d-f4d8a39f1b42.jpg', 10, 1),
(911, 67, 'fe8a0b04-8ffb-4711-8d87-c774abe869eb.jpg', 2, 1),
(912, 67, 'f1fa1a2c-3171-4f4e-a3e1-2eba2518da45.jpg', 9, 1),
(913, 68, '22d44d3b-1d1c-4f95-995a-581d6f6a9cab.jpg', 10, 1),
(914, 68, '257b5a91-8350-4d7f-981d-0e71ae472492.jpg', 9, 1),
(915, 68, '93029b66-2fd2-44da-ab0a-7577e084f5a9.jpg', 8, 1),
(917, 68, 'c2f1a8e2-3351-477f-96d2-c729ac437213.jpg', 5, 1),
(918, 68, 'a932eb01-b939-4db0-b737-ca3a27adf1e6.jpg', 1, 1),
(919, 68, 'da7188b4-df22-4430-bb60-7663ec283496.jpg', 2, 1),
(920, 68, 'd0f97b7a-d2e1-4f0b-8bc1-2f487d5a18d0.jpg', 6, 1),
(921, 68, 'e3b1bf94-18be-46c1-90f4-b923375fb3b7.jpg', 3, 1),
(922, 68, 'dd0f982d-5ca0-44b3-adf5-b540023a6fa5.jpg', 4, 1),
(923, 68, 'f1ce017a-82d1-4996-84e2-eae200a6ae5f.jpg', 7, 1),
(938, 70, '1cb013ae-6d76-4a29-9e5c-5153d0a7c095.jpg', 12, 1),
(939, 70, '1cefa470-2bad-4a40-8eff-6fd0c6748306.jpg', 13, 1),
(940, 70, '0ab62d4e-494a-4e9d-a3d6-15c2c0fb39eb.jpg', 1, 1),
(942, 70, '4b93dba1-0849-4099-abe5-3c01f6702826.jpg', 14, 1),
(948, 70, '861ae73b-06e7-475c-8c30-425783880d38.jpg', 15, 1),
(949, 70, '40428741-a974-4388-8dcf-55a6ed8707cd.jpg', 11, 1),
(950, 70, '41491394-37d0-4331-8d52-91b40b0287b7.jpg', 9, 1),
(951, 70, '8849df08-5335-4ab2-a74c-5c426a8bc26d.jpg', 8, 1),
(952, 70, 'ac824b7a-54e3-4016-98b9-dcbc11e711fa.jpg', 10, 1),
(953, 70, 'b21ca462-0d4b-455d-aad0-1be01fe52cc6.jpg', 7, 1),
(954, 70, 'bc275db0-601b-4420-9595-02aad91d021d.jpg', 6, 1),
(955, 70, 'cbc0afcb-c7b7-4069-8403-0351d82774a7.jpg', 5, 1),
(956, 70, 'dee50d72-6556-408f-9fb6-6be2cde40868.jpg', 4, 1),
(957, 70, 'ce52b944-f0cb-46b5-837d-efb00e77f109.jpg', 2, 1),
(958, 70, 'fe31717e-c2cb-4900-9569-b66b6e678890.jpg', 3, 1),
(959, 71, '3c56e101-2e21-4e2c-9bbe-8ccf43b8fc6c.jpg', 9, 1),
(960, 71, '4d509d1a-24cd-422e-bc89-1989e23df2de.jpg', 8, 1),
(961, 71, '0bfba9ed-1e86-420b-b1b0-31b27f91ad16.jpg', 7, 1),
(962, 71, '08fdf8b9-da94-4f13-8a4f-459227786ca1.jpg', 6, 1),
(963, 71, '00677f0f-8a59-4d8f-af2e-33f3c345a6ab.jpg', 5, 1),
(964, 71, '14ef6ad2-b256-44ff-a808-3b547df46ad5.jpg', 4, 1),
(965, 71, 'c9204e9e-aa76-4a6d-9a27-3f762ee01cb4.jpg', 1, 1),
(966, 71, '036728d3-bfcf-40b7-979e-3ec3f6b6f893.jpg', 3, 1),
(967, 71, '04480391-bc8a-4013-961b-fc92164774d6.jpg', 2, 1),
(968, 72, '9ab4c863-c7b1-4550-bf0e-029efe23c57e.jpg', NULL, 1),
(969, 72, 'c45c8db9-8fe3-4aae-8b7c-4f94d4e694a9.jpg', NULL, 1),
(970, 72, '335e659c-64a1-4322-b803-8e4047ea2f20.jpg', NULL, 1),
(971, 72, 'cd3f7d75-d1fd-4287-b0b6-9444bf6736e4.jpg', NULL, 1),
(972, 72, 'f42ddd80-8836-42c7-be77-c93d8c7162ac.jpg', NULL, 1),
(973, 72, 'f1780d21-228c-44d8-960c-ef886f284b9a.jpg', NULL, 1),
(974, 73, '11dd835d-cdfb-4a1a-a59e-844c6de3f0b1.jpg', NULL, 1),
(975, 73, '8745fdd3-2606-43aa-b9f0-644998d06466.jpg', NULL, 1),
(976, 73, '839c1ed1-b4a7-44db-a560-e7cc7aec9d06.jpg', NULL, 1),
(977, 73, '6342444f-6e5c-445b-8b96-3fb1150f18d2.jpg', NULL, 1),
(978, 73, 'ff6fc4f1-fc21-4f93-a63a-6ae672c43528.jpg', NULL, 1),
(979, 74, '4e4230a8-7976-4b56-a32d-2e5f6c3d793c.jpg', NULL, 1),
(980, 74, '90c32f91-b577-4f5b-ae1a-4822880ba058 (1).jpg', NULL, 1),
(981, 74, '4e4230a8-7976-4b56-a32d-2e5f6c3d793c (1).jpg', NULL, 1),
(982, 74, '90c32f91-b577-4f5b-ae1a-4822880ba058.jpg', NULL, 1),
(983, 74, '880098f1-9cf5-4fe7-a074-f1a3884f297c.jpg', NULL, 1),
(984, 74, '76352021-e275-4908-a088-d4643c62bc1d (1).jpg', NULL, 1),
(985, 74, '76352021-e275-4908-a088-d4643c62bc1d.jpg', NULL, 1),
(986, 75, 'bfbdbe94-f6b3-45eb-8a8f-b6906842f9a2.jpg', NULL, 1),
(987, 75, '29d4de57-9d24-4db4-a73a-9048d14335f6.jpg', NULL, 1),
(988, 75, 'c4679cd6-d50c-46cd-9149-8bd6419035fd.jpg', NULL, 1),
(989, 75, 'd9cd8b45-24dd-4edb-a62f-a5c22dcf2ee7.jpg', NULL, 1),
(990, 75, 'ef521b4e-8844-4644-a8bc-94d24761da9d.jpg', NULL, 1),
(991, 76, '1e009ed3-c636-408b-baf7-c65ee38633ac.jpg', NULL, 1),
(992, 76, '01becbca-fc04-44ce-b5a0-f7333c4925f7.jpg', NULL, 1),
(993, 76, '0c6d3a0b-d376-40e4-bdfe-e441ac10a30b.jpg', NULL, 1),
(994, 76, '5bbe0fad-5b9e-480f-80e1-d1fb47cdb278.jpg', NULL, 1),
(995, 76, '4cd6ea3a-588c-4264-afc7-808ebef76d2d.jpg', NULL, 1),
(996, 76, '6cac416b-11eb-48d6-96e2-52621d7d9e8f.jpg', NULL, 1),
(997, 76, '5cefdf05-bf64-43b7-8ea0-322760ec21c6.jpg', NULL, 1),
(998, 76, '86c98531-8783-4f87-b944-77d4d74c0f78.jpg', NULL, 1),
(999, 76, '0973201a-a960-4d3f-9001-5bcf362f3fce.jpg', NULL, 1),
(1000, 76, 'c0f61a91-ac8f-4e81-bda0-849557989c75.jpg', NULL, 1),
(1001, 76, 'e81e3957-01fc-4a69-9f18-f49542b94801.jpg', NULL, 1),
(1002, 76, 'e46a4b52-2d94-46a1-8b23-ee267a30a25c.jpg', NULL, 1),
(1003, 69, '7c1a1fa9-9ff3-4654-84b8-bc0c8217459e.jpg', 9, 1),
(1004, 69, '6be0495e-a217-407a-a598-3b82cafbc528.jpg', 10, 1),
(1005, 69, 'b7a61fc3-1581-4cf7-9146-162023844c0c.jpg', 8, 1),
(1006, 69, '4c8a6bbb-2724-4528-8e33-541991fc4759.jpg', 1, 1),
(1007, 69, 'a97b5511-8783-4d98-b359-368fa08b864b.jpg', 7, 1),
(1008, 69, 'bda68821-4750-4254-9c8e-ad959ef70fd9.jpg', 6, 1),
(1009, 69, 'c35042d7-a988-4d81-a291-0bfcc2eae343.jpg', 5, 1),
(1010, 69, 'c4d0b50f-7c0a-498a-9350-3c625305547f.jpg', 4, 1),
(1011, 69, 'ed132a52-4a43-4d59-88dc-a9774afa0f9e.jpg', 3, 1),
(1012, 69, 'fe5c9a63-acf0-4020-a83a-d4fdb13a277e.jpg', 2, 1),
(1013, 77, '3b71658d-d6ca-4e2c-9ce1-efa9a2a8b2a5.jpg', 15, 1),
(1014, 77, '2ca29606-38cf-4763-9036-64210214e102.jpg', NULL, 1),
(1015, 77, '3a0b58a9-4744-46b5-9401-4a59ad0d0b95.jpg', NULL, 1),
(1016, 77, '5dcf726d-31bd-4847-9ae9-f293635cedc8.jpg', NULL, 1),
(1017, 77, '4bd1d948-2f57-4d4e-a21a-b21b37d92a73.jpg', NULL, 1),
(1018, 77, '5ba889ba-a034-400b-a5cf-185150cd2eea.jpg', NULL, 1),
(1019, 77, '435a75cc-38c9-4f98-a5fd-32f293281ec5.jpg', NULL, 1),
(1020, 77, '48fd3bff-0263-403c-9727-56e84bbdfdbf.jpg', NULL, 1),
(1021, 77, '820b3889-35fd-4e11-944e-94b0feaf60bc (1).jpg', NULL, 1),
(1022, 77, '820b3889-35fd-4e11-944e-94b0feaf60bc.jpg', NULL, 1),
(1023, 77, '7a53e10d-e8ac-47ac-b398-d7bce755441e.jpg', NULL, 1),
(1024, 77, '10794f19-c1f6-4c36-ad88-951c0133e52d.jpg', NULL, 1),
(1025, 77, '92547c1a-66cf-48b9-89e0-4dcbb4d69da5.jpg', NULL, 1),
(1026, 77, '30193377-3b29-4408-b8d8-31b781c96ee2.jpg', 13, 1),
(1028, 77, '23816e4e-f7cc-482d-9558-77e2c1227260.jpg', 14, 1),
(1029, 77, 'a8c86181-e8da-4dc3-bc36-3c8946cf65c4.jpg', 15, 1),
(1030, 77, 'acd2be42-7c3b-47ae-8936-ffb6d547eace.jpg', NULL, 1),
(1031, 77, 'b9b3769f-c389-4c9a-981f-4b4874e37b30.jpg', NULL, 1),
(1032, 77, 'bad7818f-493a-4710-860b-2fe1ee3a0fdb.jpg', NULL, 1),
(1033, 77, 'bb5c29af-a843-4d28-a9cb-ec6e1a577fd7.jpg', NULL, 1),
(1034, 77, 'b22b8427-e659-4d8f-87ca-e84c057df20a.jpg', NULL, 1),
(1035, 77, 'c4ead8ef-f325-4437-a319-97954987a2cc.jpg', 12, 1),
(1036, 77, 'caf0ca05-8704-492f-b513-ab1d06e6b9f7.jpg', 11, 1),
(1037, 77, 'bf794676-7f84-428a-8239-f7e3064e71e1.jpg', 10, 1),
(1039, 77, 'cfdc5e90-8726-4a9b-a91f-283f0cc02594.jpg', 9, 1),
(1040, 77, 'd5fb6c36-872e-43cd-9c87-58847d8f3ebc.jpg', 1, 1),
(1041, 77, 'e9a4bfa3-1112-4a42-a6b9-1daec9ed5361.jpg', 8, 1),
(1042, 77, 'e55faf9e-916b-472b-a75c-7002abf3d0d0.jpg', 7, 1),
(1043, 77, 'd2610da0-ff9f-4cc2-a6b2-be257a81f0a5.jpg', 6, 1),
(1044, 77, 'e3597fe0-82e6-47a3-a28d-fd987e695c9c.jpg', 5, 1),
(1045, 77, 'e88dfd04-4139-49fc-abe5-a295e11b99ea.jpg', 4, 1),
(1046, 77, 'ec869a65-43d8-4fc1-b9b7-9f7e369b13e0.jpg', 3, 1),
(1047, 77, 'fa90a1dd-cbc4-45f4-8ee9-7d1e279d8af7.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipos`
--

CREATE TABLE `tbltipos` (
  `idTipo` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbltipos`
--

INSERT INTO `tbltipos` (`idTipo`, `nombre`, `icono`, `estado`) VALUES
(1, 'Lote', '', 1),
(3, 'Casa', '', 1),
(4, 'Departamento', '', 1),
(5, 'Local Comercial', '', 1),
(6, 'Quinta', '', 1),
(7, 'Duplex', '', 1),
(8, 'Oficina', '', 0),
(9, 'Galpón', '', 1),
(10, 'Finca', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `apellido` varchar(128) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(128) NOT NULL,
  `ultimologin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `apellido`, `nombre`, `email`, `avatar`, `ultimologin`, `estado`) VALUES
(17, 'admin', 'baadc39eb5055a2515fd371056eb6e4e', 'Capello', 'Juan Pablo', 'juanpablocapello32@gmail.com', '5', '2021-11-03 14:10:36', 1),
(18, 'root', '21232f297a57a5a743894a0e4a801fc3', 'Capello', 'Juan Pablo', 'juanpablocapello32@gmail.com', '5', '2021-08-24 14:52:52', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcondiciones`
--
ALTER TABLE `tblcondiciones`
  ADD PRIMARY KEY (`idCondicion`);

--
-- Indices de la tabla `tblconfig`
--
ALTER TABLE `tblconfig`
  ADD PRIMARY KEY (`idConfig`);

--
-- Indices de la tabla `tbllocalidades`
--
ALTER TABLE `tbllocalidades`
  ADD PRIMARY KEY (`idLocalidad`);

--
-- Indices de la tabla `tblpropiedades`
--
ALTER TABLE `tblpropiedades`
  ADD PRIMARY KEY (`idPropiedad`),
  ADD KEY `idTipo` (`idTipo`),
  ADD KEY `idCondicion` (`idCondicion`);

--
-- Indices de la tabla `tblpropiedadesimagenes`
--
ALTER TABLE `tblpropiedadesimagenes`
  ADD PRIMARY KEY (`idImagen`),
  ADD KEY `idPropiedad` (`idPropiedad`);

--
-- Indices de la tabla `tbltipos`
--
ALTER TABLE `tbltipos`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcondiciones`
--
ALTER TABLE `tblcondiciones`
  MODIFY `idCondicion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblconfig`
--
ALTER TABLE `tblconfig`
  MODIFY `idConfig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbllocalidades`
--
ALTER TABLE `tbllocalidades`
  MODIFY `idLocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2387;

--
-- AUTO_INCREMENT de la tabla `tblpropiedades`
--
ALTER TABLE `tblpropiedades`
  MODIFY `idPropiedad` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `tblpropiedadesimagenes`
--
ALTER TABLE `tblpropiedadesimagenes`
  MODIFY `idImagen` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1048;

--
-- AUTO_INCREMENT de la tabla `tbltipos`
--
ALTER TABLE `tbltipos`
  MODIFY `idTipo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblpropiedades`
--
ALTER TABLE `tblpropiedades`
  ADD CONSTRAINT `tblpropiedades_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tbltipos` (`idTipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblpropiedades_ibfk_2` FOREIGN KEY (`idCondicion`) REFERENCES `tblcondiciones` (`idCondicion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblpropiedadesimagenes`
--
ALTER TABLE `tblpropiedadesimagenes`
  ADD CONSTRAINT `tblpropiedadesimagenes_ibfk_1` FOREIGN KEY (`idPropiedad`) REFERENCES `tblpropiedades` (`idPropiedad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
