-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour fakenewsreloaded
CREATE DATABASE IF NOT EXISTS `fakenewsreloaded` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `fakenewsreloaded`;

-- Listage de la structure de la table fakenewsreloaded. posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` datetime NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `chapo` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `content` text COLLATE utf8mb4_bin,
  `image` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table fakenewsreloaded.posts : ~6 rows (environ)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `date_creation`, `title`, `chapo`, `content`, `image`) VALUES
	(1, '2020-08-04 00:15:00', 'Est-ce un lama ? ', 'A quelques centaines de toises, on aperçoit la nuit voltigeant au-dessus de la haie. Celles-là, dépouillées de leur revêtement fastueux de marbre, deux femmes cousaient.', 'Observée en couche faible, l\'eau glacée lui fouettait le sang, vous pouvez imaginer. Allier, une société d\'hommes égaux entre eux, ont fait tourner toutes les têtes moutonnèrent comme les vagues que j\'avais résolu de me tourmenter. Solennelles poignées de main, des mouvements pleins de coquetterie ! Besoin alors sera d\'une libéralité ? Frères, cotisez-vous pour me fournir l\'occasion d\'un interminable labyrinthe crétois, imitait à s\'y tromper. Soldats, je fus installé dès le même soir, tout ce peuple, de ce châtiment de sa rébellion. Mangerait-elle un peu de calme. Devenu tranquille de tous les siens, qu\'il souleva ; le cabinet était vide.', 'asset/image/pic01.jpg'),
	(2, '2020-07-26 09:14:00', 'huile de palmipède', 'Des chercheurs ont découvert qu\'à cause de l\'huile de palme quelle contient, une consommation excessive de pâte à tartiner provoquerait une mutation du pied en pâte de canard. Les photos exclusives ici !', ' ', 'asset/image/pic02.jpg'),
	(3, '2020-07-14 12:18:00', 'cerisier alien', 'Exclusif ! Les aliens sont parmis nous ! Ils se cachent dans les cerisiers déguisés en fleurs. L\'interview exclusive de Bob l\'extraterrestre', ' ', 'asset/image/pic03.jpg'),
	(7, '2020-07-14 12:18:00', 'cerisier alien', '<strong>EXCLUSIF !</strong> les aliens sont parmi nous Ils se\r\ncachent dans les cerisiers deguises en fleurs.\r\nL\'interview exclusive de Bob l\'extraterrestre', '<strong>Fake News</strong><br>\r\n- Bonjour Bob, que ressentez-vous maintenant\r\nque tout le monde connaît votre existence ?<br>\r\n<strong>Bob</strong><br>\r\n- Et bien, à vrai-dire nous sommes plutôt soulagés\r\nCertains d\'entre nous ont failli devenir fous à force\r\nde se faire butiner par des insectes en tout genre !<br>\r\n<strong>Fake News</strong><br>\r\n- Comment et quand êtes-vous arrives sur Terre ?<br>\r\n<strong>Bob</strong><br>\r\n- Ily bien longtemps, dans une galaxie lointaine,\r\ntrès lointaine, nous avons commencé notre\r\nvoyage d\'exploration interdimensionnel à la\r\nrecherche d\' autres formes de vie\r\nEn arrivant près de votre Jupiter, les forces\r\ngravitationnelles ont déréglé le convecteur\r\ntemporel et notre vitesse est passe en dessous\r\ndes SE Mph.\r\nNous avons obligés d\'allumer les propulseurs\r\nhyperdrive pour ne pas nous faire aspirer par la\r\nplanète géante. Malheureusement, suite è une\r\nsurchauffe, nous avons termine notre course sur\r\nvotre Terre, en plein milieu d\'un champs de\r\ncerisiers en fleurs\r\nQuelques autotochtones, attirés par le bruit\r\narriverent armes de fourches et de torches.\r\nEffrayes par la menace nous suons improvise un\r\nplan de camouflage. En effet, nos respirateurs\r\nressemblent étrangement aux fleurs de vos\r\ncerisiers, nous avons donc grimpe aux arbres pour\r\nnous cacher permis les fleurs\r\nCela fait maintenant SOC ans que nous sommes\r\nici. Voyant que la menace était partiez nous avons\r\ndécide de réveler notre existence<br>\r\n<strong>Fake News</strong><br>\r\n- Fascinant Merci pour votre témoignage Bob, et\r\nbienvenu par parmi nous', 'asset/image/pic03.jpg'),
	(8, '2020-07-14 12:00:00', 'Une danseuse dans les etoiles ?!', 'Incroyable ! une danseuse dans les etoiles ! C\'est fou mais vrai !!', 'Nemo quaeso miretur, si post exsudatos labores itinerum longos congestosque adfatim commeatus fiducia vestri ductante barbaricos pagos adventans velut mutato repente consilio ad placidiora deverti.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nSed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?\r\n\r\nUtque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.\r\n\r\nPost quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.\r\n\r\nSed tamen haec cum ita tutius observentur, quidam vigore artuum inminuto rogati ad nuptias ubi aurum dextris manibus cavatis offertur, inpigre vel usque Spoletium pergunt. haec nobilium sunt instituta.\r\n\r\nIllud autem non dubitatur quod cum esset aliquando virtutum omnium domicilium Roma, ingenuos advenas plerique nobilium, ut Homerici bacarum suavitate Lotophagi, humanitatis multiformibus officiis retentabant.\r\n\r\nQuam ob rem cave Catoni anteponas ne istum quidem ipsum, quem Apollo, ut ais, sapientissimum iudicavit; huius enim facta, illius dicta laudantur. De me autem, ut iam cum utroque vestrum loquar, sic habetote.\r\n\r\nCognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.\r\n\r\nProinde concepta rabie saeviore, quam desperatio incendebat et fames, amplificatis viribus ardore incohibili in excidium urbium matris Seleuciae efferebantur, quam comes tuebatur Castricius tresque legiones bellicis sudoribus induratae.', '../asset/image/5k-planet-minimalist-8s.jpg'),
	(9, '2020-08-15 02:08:00', 'un poney qui tousse ?!', 'Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.', 'Exsistit autem hoc loco quaedam quaestio subdifficilis, num quando amici novi, digni amicitia, veteribus sint anteponendi, ut equis vetulis teneros anteponere solemus. Indigna homine dubitatio! Non enim debent esse amicitiarum sicut aliarum rerum satietates; veterrima quaeque, ut ea vina, quae vetustatem ferunt, esse debet suavissima; verumque illud est, quod dicitur, multos modios salis simul edendos esse, ut amicitiae munus expletum sit.\r\n\r\nSed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.\r\n\r\nUltima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.\r\n\r\nQuae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis ut conscius ductus est aliique congregati sunt ex diversis civitatibus multi, qui atrocium criminum ponderibus urgebantur.\r\n\r\nEodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora', '../asset/image/133878.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Listage de la structure de la table fakenewsreloaded. settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_name_uindex` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table fakenewsreloaded.settings : ~2 rows (environ)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `name`, `value`) VALUES
	(3, 'subtitle_index', 'Il revient avec encore plus de news en php et sql'),
	(4, 'subtitle_trucentoc', 'Plus en details');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Listage de la structure de la table fakenewsreloaded. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_uindex` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table fakenewsreloaded.users : ~5 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
	(3, 'admin', '6f35417b2cbdbe57ced5ae0d12d86bc1619463f3b41053efb20ef92372014f2f57d6a9249a111d7ce4c9cc3ab23c748ba46340d75f5e1985c592d10459413b7e', 0),
	(7, 'OneJameson', '0c48ed860f7d30117aecc9ea458c3c93f5a4fa809091423eb41d6aa1654b80a237dc1e90943756f30d2d2db6a8232a01729ddbbae97fe09a675fb8065c6dc020', 0),
	(8, 'redac', '0ade928495dac598d28929ce7cf9ed6983e54a18ea63fe31afccd45dd5fa76b01da3d17c05d844e8a50a096677def6150245d56c3c1cf60350ae6a3aebd19a69', 1),
	(10, 'Linda', 'e33294d67f7cb7a4a4dbc12af8dc12b1a417942dc6afa806c4a89aaf1eb27043e96c502c71cd3cb20d4956c180f801136cd18ee91ed245f2f4b25721702203ee', 0),
	(11, 'Ulule', '130324b0d0221a1e26e4846a2b0b3ab9b0d0dca09d372cefc83b62f0bc7e997c003be4a2e054ec5549ebcd97f991052e18ce98fb3769f9eaf13146ba8c6ead4f', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
