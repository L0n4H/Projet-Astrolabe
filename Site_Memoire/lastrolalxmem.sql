-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : lastrolalxmem.mysql.db
-- Généré le : mer. 07 oct. 2026 à 15:39
-- Version du serveur : 8.0.46-37
-- Version de PHP : 8.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lastrolalxmem`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_musicale`
--

CREATE TABLE `categorie_musicale` (
  `id` int NOT NULL,
  `categorie_principale_id` int DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie_musicale`
--

INSERT INTO `categorie_musicale` (`id`, `categorie_principale_id`, `nom`) VALUES
(73, 2, 'ROCK'),
(74, 7, 'POP'),
(75, 11, 'JAZZ'),
(76, 10, 'SOUL / FUNK'),
(77, 8, 'MÉTAL'),
(78, 36, 'HIP HOP'),
(79, 13, 'REGGAE'),
(80, 4, 'ELECTRO'),
(81, 1, 'JEUNE PUBLIC'),
(82, 14, 'SONO MONDIALE'),
(83, 37, 'CHANSON FRANCAISE'),
(84, 130, 'AUTRES');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_musicale_genre_musical`
--

CREATE TABLE `categorie_musicale_genre_musical` (
  `categorie_musicale_id` int NOT NULL,
  `genre_musical_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie_musicale_genre_musical`
--

INSERT INTO `categorie_musicale_genre_musical` (`categorie_musicale_id`, `genre_musical_id`) VALUES
(73, 2),
(73, 15),
(73, 16),
(73, 17),
(73, 18),
(73, 20),
(73, 22),
(73, 23),
(73, 24),
(73, 25),
(73, 27),
(73, 28),
(73, 29),
(73, 30),
(73, 31),
(73, 32),
(73, 111),
(73, 112),
(73, 121),
(73, 143),
(74, 7),
(74, 41),
(74, 42),
(74, 113),
(75, 11),
(75, 43),
(75, 44),
(75, 45),
(75, 46),
(75, 47),
(75, 136),
(76, 10),
(76, 48),
(76, 49),
(76, 50),
(77, 8),
(77, 51),
(77, 52),
(77, 53),
(77, 54),
(77, 55),
(77, 56),
(77, 57),
(77, 58),
(77, 59),
(77, 60),
(77, 61),
(77, 118),
(77, 125),
(77, 137),
(77, 138),
(78, 3),
(78, 36),
(78, 62),
(78, 63),
(78, 64),
(78, 65),
(78, 66),
(78, 67),
(78, 68),
(78, 69),
(78, 70),
(78, 71),
(78, 122),
(79, 13),
(79, 33),
(79, 38),
(79, 39),
(79, 72),
(79, 73),
(79, 74),
(79, 126),
(79, 132),
(79, 141),
(80, 4),
(80, 75),
(80, 76),
(80, 77),
(80, 78),
(80, 79),
(80, 80),
(80, 81),
(80, 82),
(80, 83),
(80, 84),
(80, 85),
(80, 86),
(80, 87),
(80, 88),
(80, 109),
(80, 123),
(80, 139),
(80, 140),
(80, 142),
(81, 1),
(82, 14),
(82, 89),
(82, 90),
(82, 91),
(82, 92),
(82, 93),
(82, 94),
(82, 95),
(82, 96),
(82, 97),
(82, 101),
(82, 102),
(82, 103),
(82, 104),
(82, 105),
(82, 106),
(82, 107),
(82, 110),
(82, 114),
(82, 115),
(82, 116),
(82, 124),
(82, 133),
(82, 134),
(82, 135),
(83, 37),
(83, 40),
(83, 108),
(83, 120),
(84, 127),
(84, 128),
(84, 129),
(84, 130),
(84, 131);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220408090451', '2022-04-08 11:55:39', 820);

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `statut`) VALUES
(3, 'En attente de validation'),
(4, 'Importé et à valider'),
(5, 'Ressource invalide'),
(1, 'Validé et affiché'),
(2, 'Validé et caché');

-- --------------------------------------------------------

--
-- Structure de la table `etiquette`
--

CREATE TABLE `etiquette` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `mots_cles` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int NOT NULL,
  `type_evenement_id` int DEFAULT NULL,
  `lieu_id` int NOT NULL,
  `etat_id` int NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `lien_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `type_evenement_id`, `lieu_id`, `etat_id`, `date_debut`, `date_fin`, `description`, `titre`, `image`, `updated_at`, `lien_image`) VALUES
(1, 1, 1, 1, '2019-01-27 15:30:00', '2019-01-27 17:30:00', '<p>Pour cette premi&egrave;re cr&eacute;ation solo,&nbsp;<strong>Ellie James</strong>&nbsp;(Bumpkin Island, Mermonte, Mha&hellip;) propose une bande-son allant de la pop-sunshine des Beatles &agrave; l&rsquo;indie-Folk de Sujfan Stevens en passant par la musique minimaliste et r&eacute;p&eacute;titive de ses p&egrave;res spirituels Philip Glass et Steve Reich.</p>\r\n\r\n<p>En s&rsquo;entourant d&rsquo;instruments connus (claviers en tout genre) et d&rsquo;autres moins (Glockenspiel, Harmonium et Hangdrum), Ellie James compte bien surprendre les spectateurs et intriguer les plus petits.     Les quatre courts m&eacute;trages d&rsquo;animation choisis gravitent autour d&rsquo;un th&egrave;me commun&nbsp;: la lumi&egrave;re. Gr&acirc;ce &agrave; leurs univers &eacute;th&eacute;r&eacute;s, ces films nous plongent dans des r&ecirc;ves &eacute;veill&eacute;s.</p>\r\n\r\n<p>On nous y conte la cr&eacute;ation du soleil, la bataille entre le jour et la nuit, et, plus subtilement, on nous laisse apercevoir les rouages &amp; les m&eacute;caniques internes qui gouvernent les lois de la Terre.</p>', 'Lumières ! D\'Ellie James', NULL, NULL, NULL),
(2, 1, 1, 1, '2019-02-01 20:30:00', '2019-02-01 01:00:00', '<p>MICHELLE DAVID &nbsp;(USA / SOUL &ndash; RYTHM&rsquo; BLUES)</p>\r\n\r\n<hr />\r\n<p>Ceux qui ont tant aim&eacute; la regrett&eacute;e Sharon Jones risquent fort de se consoler avec, ce petit bout de femme, Michelle David. &Agrave; cette diff&eacute;rence pr&egrave;s que cette Am&eacute;ricaine cherche plus loin encore, au plus profond du gospel et du blues de quoi enflammer sa soul.</p>\r\n\r\n<p>Ce son terrien nous vient du sud, des tr&eacute;fonds de la m&eacute;moire collective noire, avec une puret&eacute; et une intensit&eacute; demeur&eacute;es intactes. Pas de revival ni pass&eacute;isme, le blues v&eacute;cu &agrave; l&rsquo;&eacute;ternel pr&eacute;sent. Personne n&rsquo;y r&eacute;sistera !</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HOME COOKIN&rsquo; (ORLEANS / SOUL &ndash; ROCK)</p>\r\n\r\n<hr />\r\n<p><strong>Home Cookin&rsquo;</strong>&nbsp;est n&eacute; d&rsquo;une envie du chanteur, berc&eacute; par les musiques noires am&eacute;ricaines et carib&eacute;ennes, de monter une formation de Rythm&amp;Blues &laquo;&nbsp;&agrave; l&rsquo;ancienne&nbsp;&raquo;, c&rsquo;est-&agrave;-dire de revenir &agrave; une musique directement influenc&eacute;e par le blues, le rock et le jazz. N&eacute;cessitant une rythmique solide travaill&eacute;e aux sons d&rsquo;&eacute;poque, le r&eacute;pertoire se base sur des chansons d&rsquo;amour torrides ou bless&eacute;es, sans pour autant oublier l&rsquo;appui indispensable d&rsquo;une section de cuivres.</p>\r\n\r\n<p>Compos&eacute; de musiciens tr&egrave;s influenc&eacute;s par les musiques noires am&eacute;ricaines, le groupe propose un r&eacute;pertoire de reprises d&rsquo;obscures perles du rythm&amp;blues et de la soul de la fin des 60s/d&eacute;but 70s. Mais il leur faut en faire autre chose&hellip; Ces morceaux, ils vont les d&eacute;cortiquer et les recuisiner &agrave; leur sauce. En faire une vraie cuisine maison. Ensemble ils cr&eacute;ent le groupe Home Cookin&rsquo; (With Real Soul Cuts !) en juin 2008.</p>\r\n\r\n<p>Apr&egrave;s de nombreux concerts, festivals et autres joyeuses rencontres avec le public, ils enregistrent un EP en d&eacute;cembre 2016 &laquo;&nbsp;Old pots make the best Soul&nbsp;&raquo;&nbsp;, suivi d&rsquo;un clip en d&eacute;cembre 2017 sur une adaptation explosive du c&eacute;l&egrave;bre Tainted Love.</p>', 'Michelle David & the Gospel Sessions', NULL, NULL, NULL),
(3, 1, 1, 1, '2019-02-06 20:30:00', '2019-02-06 01:00:00', '<p>JP BIMENI (BURUNDI / SOUL)</p>\r\n\r\n<hr />\r\n<p>JP Bimeni est un survivant. N&eacute; au Burundi, il a fui son pays pour &eacute;chapper &agrave; la guerre civile des ann&eacute;es 90, et &agrave; la mort qui l&rsquo;a fr&ocirc;l&eacute; plus d&rsquo;une fois. &laquo;&nbsp;Only the strong survive&nbsp;&raquo;, chantait Jerry Butler. R&eacute;fugi&eacute; &agrave; Londres, JP Bimeni est devenu un incroyable soulman, dont la voix br&ucirc;le comme celles de Sam Cooke ou Otis Redding. Dans un &eacute;crin de soul r&eacute;tro, JP Bimeni soigne sa vie en chantant, en dansant, comme sur son premier album Free Me. Au Burundi, JP Bimeni &eacute;tait d&rsquo;ascendance royale. Pour sa premi&egrave;re tourn&eacute;e fran&ccedil;aise aux Nuits de l&rsquo;Alligator, il est promis au tr&ocirc;ne de nouveau roi de la soul.</p>\r\n\r\n<p>ANN O&rsquo;ARO (R&Eacute;UNION / BLUES)</p>\r\n\r\n<hr />\r\n<p>Un gros clich&eacute; dit que le maloya est le blues de la R&eacute;union. Pour s&ucirc;r, c&rsquo;est une musique de la terre, de l&rsquo;h&eacute;ritage africain, des c&eacute;r&eacute;monies secr&egrave;tes et de la transe. Et pour s&ucirc;r, Ann O&rsquo;Aro est une nouvelle voix saisissante du maloya, imm&eacute;diatement adoub&eacute;e par le ma&icirc;tre Dany&egrave;l Waro. Dans ses chansons et son premier album-choc, Ann O&rsquo;Aro descend aux enfers pour affronter et dompter les d&eacute;mons d&rsquo;une enfance d&eacute;chir&eacute;e par l&rsquo;inceste. On a rarement entendu une musique aussi intense, forte et bouleversante. Sur sc&egrave;ne, sa voix, sa pr&eacute;sence et son corps qui danse transcendent une vie de blues.</p>\r\n\r\n<p>MUDDY GURDY (FRANCE / BLUES)</p>\r\n\r\n<hr />\r\n<p>Sorti par un label am&eacute;ricain, le premier album du trio auvergnat&nbsp;<strong>Muddy Gurdy</strong>&nbsp;a re&ccedil;u tous les honneurs, y compris au pays du blues. Et c&rsquo;est normal&nbsp;: ce tr&egrave;s bon disque, ils l&rsquo;ont enregistr&eacute; dans le Nord du Mississippi avec des l&eacute;gendes locales (Cedric Burnside, Shard&eacute; Thomas&hellip;), et surtout avec leur vielle &agrave; roue. Oui, leur vielle &agrave; roue. Muddy Gurdy invente la rencontre de deux traditions qui ont en commun la terre, le rythme, la transe, l&rsquo;&eacute;tincelle et aussi l&rsquo;amour. Leur tourn&eacute;e aux Nuits de l&rsquo;Alligator devrait leur apporter une reconnaissance sc&eacute;nique largement m&eacute;rit&eacute;e.</p>', 'Les Nuits de l\'Alligator', NULL, NULL, NULL),
(4, 1, 1, 1, '2019-02-07 18:30:00', '2019-02-07 20:45:00', '<p><strong>STEAK &amp; The Western Tuk Tuk</strong>&nbsp;est n&eacute; de la collaboration entre le trio STEAK&nbsp;et les deux artistes indiens <strong>Lopa Mudra</strong> et<strong> Philip John</strong>, dans le cadre du programme Indialinked. C&rsquo;est lors d&rsquo;une cr&eacute;ation&nbsp;&agrave; Chennai (Inde) en octobre 2018 que le projet a vu le jour, au travers de la&nbsp;direction artistique du trio et des influences des deux chanteurs indiens.</p>\r\n\r\n<p>Entre folk, pop, jazz et musique carnatique, le groupe propose une musique&nbsp;hybride, puisant notamment leurs influences chez les Beach Boys, Keith&nbsp;Jarrett, les Beatles et bien d&rsquo;autres&hellip;</p>\r\n\r\n<p>Apr&egrave;s dix jours de r&eacute;sidence et de concerts en Inde, Lopa Mudra et Philip John&nbsp;viendront en France en janvier et f&eacute;vrier 2019 afin de poursuivre le travail entam&eacute; en Inde et&nbsp;effectuer une tourn&eacute;e en R&eacute;gion Centre-Val de Loire. La premi&egrave;re partie de la soir&eacute;e pr&eacute;sentera cette aventure hors du commun pour le groupe de jazz et ouvrira le dialogue sur les passerelles &nbsp;favorisant l&rsquo;export des artistes &eacute;mergents.</p>\r\n\r\n<p><em>Indialinked, c&rsquo;est le nom du programme qui rassemble les projets culturels &eacute;mergents entre le Centre-Val de Loire et le Tamil Nadu, en Inde, dans le cadre de la politique de coop&eacute;ration d&eacute;centralis&eacute;e du Conseil r&eacute;gional. Musiques actuelles, danse, arts plastiques&hellip; les initiatives artistiques se d&eacute;veloppent depuis 2012. Indialinked, port&eacute; &agrave; sa gen&egrave;se par Astrolabe, puis par Capsul Collectif depuis 2017, tente d&rsquo;ouvrir la cr&eacute;ation en Inde, aux artistes de la r&eacute;gion.</em></p>', 'Steak and The Western Tuk Tuk', NULL, NULL, NULL),
(5, 1, 1, 1, '2019-02-08 20:30:00', '2019-02-08 01:00:00', '<p>PETER KERNEL (SUISSE / INDIE ROCK)</p>\r\n\r\n<hr />\r\n<p>Aris Bassetti et Barbara Lehnhoff rythment depuis 2008 nos vies de disques et de shows p&eacute;tris des contradictions qui pourrissent et magnifient nos existences.&nbsp;<strong>PETER KERNEL</strong>, il faut se rendre &agrave; l&rsquo;&eacute;vidence, est &agrave; l&rsquo;image du duo qui l&rsquo;a cr&eacute;&eacute;, avec toute la dualit&eacute; mouvante qu&rsquo;induit un projet artistique si &eacute;troitement li&eacute; &agrave; la vie partag&eacute;e.</p>\r\n\r\n<p>Parfois tendre, souvent dur, temp&eacute;tueux ou caressant, le noiserock des Suisses est une perle de cr&eacute;ativit&eacute; avec des instruments pourtant tr&egrave;s simples : basse-guitare-batterie-chant, le trio sur sc&egrave;ne nous fait traverser des &eacute;motions qui vont de la rage aux larmes, de la tension &agrave; l&rsquo;euphorie en passant par le rire. Un groupe complet, touchant&nbsp; au plus profond, qui a livr&eacute; avec &laquo;&nbsp;White Death, Black Heart&nbsp;&raquo; (2011) et &laquo;&nbsp;Thrill Addict&nbsp;&raquo; (2015) deux v&eacute;ritables bijoux de l&rsquo;indierock des ann&eacute;es 2010 de ce c&ocirc;t&eacute; de l&rsquo;Atlantique.</p>\r\n\r\n<p>Toujours farouchement ind&eacute;pendants, ma&icirc;trisant la cha&icirc;ne de leurs cr&eacute;ations de l&rsquo;enregistrement (ils ont leur propre studio) &agrave; la diffusion (ils ont leur propre label) et la mise en images (ils cr&eacute;ent leurs vid&eacute;os et artworks), PETER KERNEL reviennent un nouvel album en trio, &laquo;&nbsp;The Size Of The Night&nbsp;&raquo;, le 9 mars 2018 sur leur propre label On The Camper Records. Un nouvel album plus apais&eacute; et introspectif que les pr&eacute;c&eacute;dents dans lequel le duo Barbara-Aris tente de s&rsquo;accepter.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BINIDU (TOURS / INDIE MATH-ROCK)</p>\r\n\r\n<hr />\r\n<p>R&eacute;v&eacute;l&eacute; en 2013 sur fond d&rsquo;extr&ecirc;me positivisme avec &laquo; Yes !&raquo; (paru chez Kythibong), c&rsquo;est l&rsquo;air d&eacute;boussol&eacute; que&nbsp;<strong>Binidu</strong>&nbsp;revient aujourd&rsquo;hui avec&nbsp;&laquo; Nouvel Ancient &raquo;.&nbsp; Contrairement &agrave; son pr&eacute;d&eacute;cesseur, les chemins ici sont quasi toujours d&eacute;tourn&eacute;s, on y m&ecirc;le constamment le chaud et le froid.&nbsp;Il y a une dimension apocalyptique dans cet affrontement, le calme n&rsquo;est jamais apaisant, la solitude est trop bruyante et la complexit&eacute; est trop &eacute;vidente. Seul le discours est clair, directe comme pour &ecirc;tre en rupture avec ce qu&rsquo;il d&eacute;nonce.</p>\r\n\r\n<p>Le trio se tourne vers les musiques les plus aventureuses, free-rock, krautrock, musiques minimales, ambient, sans citations, sans ornements, en &eacute;tant toujours au service de la chanson. Ce format d&eacute;suet, tellement simple qu&rsquo;il peut en devenir b&ecirc;te ou merveilleux comme ici o&ugrave; elle est malax&eacute;e telle de la p&acirc;te &agrave; modeler entre dissonance et lignes claires, &eacute;tir&eacute;es entre un synth&eacute; cold et des percussions vibrantes, et toujours incarn&eacute;e par ce chant a&eacute;rien, lui aussi r&eacute;guli&egrave;rement traficot&eacute; comme pour le vider de sa substance humaine.</p>', 'Peter Kernel', NULL, NULL, NULL),
(6, 1, 1, 1, '2019-02-13 20:30:00', '2019-02-13 01:00:00', '<p>JUNGLE BY NIGHT (PAYS-BAS / SOUL &ndash; AFROBEAT)</p>\r\n\r\n<hr />\r\n<p>La tribu festive&nbsp;<strong>Jungle By Night</strong>&nbsp;s&rsquo;est immerg&eacute;e dans l&rsquo;histoire de l&rsquo;Afro-beat pour concocter un cocktail d&eacute;tonnant d&rsquo;&eacute;thiopic-jazz, de J.B.&rsquo;s-afro, de Fela-funk, de Lagos-rock et d&rsquo;Addis-Abeba-highlife.</p>\r\n\r\n<p>Dignes h&eacute;ritiers de la musique de Fela Kuti, ces neuf Amsteldamois combinent avec originalit&eacute; jazz, funk africain et rock psych&eacute;d&eacute;lique. Un son roots, &agrave; l&rsquo;ancienne, des th&egrave;mes qui semblent tout droit sortis des cerveaux du &laquo; Godfather of &eacute;thio-jazz &raquo; Mulatu Astatke ou de feu G&eacute;tatch&egrave;w M&egrave;kurya ; et le tout groove comme au c&oelig;ur d&rsquo;un night-club surchauff&eacute; d&rsquo;Abuja. Ils viennent pr&eacute;senter leur nouvel album &laquo;&nbsp;<em>livingstone&nbsp;&raquo;</em></p>', 'Jungle by night', NULL, NULL, NULL),
(7, 1, 2, 1, '2019-02-14 20:30:00', '2019-02-14 01:00:00', '<p>GRINGE (FRANCE / HIP-HOP)</p>\r\n\r\n<hr />\r\n<p><em>Enfant lune</em> est son premier album, mais <strong>Gringe</strong> n&rsquo;est pas un inconnu : binôme <strong>d&rsquo;OrelSan</strong> dans <strong>Casseurs Flowters</strong> (le groupe, le film, la série), <strong>Gringe</strong> se lance sous son nom avec un rap autobiographique grave et intense.</p>\r\n\r\n<p>&laquo; La vie est belle j&rsquo;en fais des cauchemars de rêve &raquo;, rappe l&rsquo;affranchi <strong>d&rsquo;OrelSan</strong>, qui s&rsquo;affirme d&rsquo;emblée comme un auteur majeur. Un flow d&rsquo;idées noires sorties de nuits blanches, d&rsquo;un quotidien gris, et des mélodies pour décrocher la lune.</p>\r\n\r\n<p><strong>Gringe</strong> attaque la scène début 2019, et il va être difficile de résister à son spleen qui réchauffe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>LE COMPTOIR (ORL&Eacute;ANS / HIP-HOP)</p>\r\n\r\n<hr />\r\n<p><strong>Le Comptoir</strong> est constiu&eacute; de 8 EMCEE (Luska, Biago,Le Piou, Doodz, Cercide, Asounaz, Bamw&eacute;, Mocadoums) dont 1 beatmaker (Doodz). Au sein de ce collectif Luska, Doodz et Biago forment le groupe Raga qui a sorti un EP l&rsquo;&eacute;t&eacute; dernier (Aurora).</p>\r\n\r\n<p>Aussi bien influenc&eacute; par l&rsquo;Entourage que par la sc&egrave;ne Belge et notamment le mouvement de Bruxelles Arrive ( Rom&eacute;o Elvis, Caballero et Jean Jass,..) le Comptoir propose autant de couleurs musicales qu&rsquo;il y a de rappeurs au sein du collectif. Peu importe vos influences il y aura forcement quelque chose &agrave; votre go&ucirc;t &agrave; la carte du Comptoir !</p>', 'Gringe', NULL, NULL, NULL),
(8, 1, 2, 4, '2019-02-15 20:30:00', '2019-02-15 01:00:00', NULL, 'Flavien Berger', NULL, NULL, NULL),
(9, 1, 2, 4, '2019-02-22 20:30:00', '2019-02-22 01:00:00', NULL, 'Tank & The Bangas', NULL, NULL, NULL),
(10, 1, 1, 4, '2019-02-27 20:30:00', '2019-02-27 01:00:00', NULL, 'The Schizophonics', NULL, NULL, NULL),
(11, 1, 1, 4, '2019-03-07 20:30:00', '2019-03-07 01:00:00', NULL, 'Kokoko!', NULL, NULL, NULL),
(12, 1, 2, 4, '2019-03-08 20:30:00', '2019-03-08 01:00:00', NULL, 'Rod Anton', NULL, NULL, NULL),
(13, 1, 1, 4, '2019-03-09 23:00:00', '2019-03-09 05:00:00', NULL, 'En attendant le Sirk', NULL, NULL, NULL),
(14, 1, 2, 4, '2019-03-16 23:00:00', '2019-03-16 05:00:00', NULL, 'Bubble Boum : j\'ai 20 ans !', NULL, NULL, NULL),
(15, 1, 2, 4, '2019-03-23 16:00:00', '2019-03-23 17:30:00', NULL, 'Petit Mi-Grand', NULL, NULL, NULL),
(16, 1, 2, 4, '2019-03-30 20:30:00', '2019-03-30 01:00:00', NULL, 'Youssoupha', NULL, NULL, NULL),
(17, 1, 1, 4, '2019-04-05 20:30:00', '2019-04-05 01:00:00', NULL, 'Token', NULL, NULL, NULL),
(18, 1, 2, 4, '2019-04-10 20:30:00', '2019-04-10 01:00:00', NULL, 'Sick Of It All', NULL, NULL, NULL),
(19, 1, 2, 4, '2019-04-12 20:30:00', '2019-04-12 01:00:00', NULL, 'Hop Pop Hop Night', NULL, NULL, NULL),
(20, 1, 1, 1, '2019-04-25 20:30:00', '2019-04-25 01:00:00', NULL, 'Art Brut', NULL, NULL, 'https://www.lastrolabe.org/agenda/art-brut/'),
(21, 1, 1, 4, '2019-04-26 20:30:00', '2019-04-26 02:00:00', NULL, 'Week-end Belge : La Jungle + Cocaïne Piss + Le Prince Harry', NULL, NULL, NULL),
(22, 1, 1, 4, '2019-04-27 23:00:00', '2019-04-27 05:00:00', NULL, 'Week-end Belge : Surfing Leons + Lefto + Dc Salas', NULL, NULL, NULL),
(23, 1, 1, 4, '2019-05-03 20:30:00', '2019-05-03 01:00:00', NULL, 'Weyes Blood', NULL, NULL, NULL),
(24, 1, 2, 4, '2019-05-04 20:30:00', '2019-05-04 01:00:00', NULL, 'Odezenne', NULL, NULL, NULL),
(25, 1, 1, 4, '2019-05-07 20:30:00', '2019-05-07 01:00:00', NULL, 'Celeste', NULL, NULL, NULL),
(26, 1, 2, 4, '2019-05-16 20:30:00', '2019-05-16 01:00:00', NULL, 'Puppetmastaz', NULL, NULL, NULL),
(27, 1, 1, 4, '2019-05-22 20:30:00', '2019-05-22 01:00:00', NULL, 'Novo Amor', NULL, NULL, NULL),
(28, 1, 2, 4, '2019-06-07 19:00:00', '2019-06-07 23:00:00', NULL, 'Nola Is Calling', NULL, NULL, NULL),
(29, 2, 3, 4, '2019-06-08 14:30:00', '2019-06-08 16:30:00', NULL, 'Goûter Hey gamins!', NULL, NULL, NULL),
(30, 2, 4, 4, '2019-06-15 16:00:00', '2019-06-15 21:00:00', NULL, 'Hey Gamins!', NULL, NULL, NULL),
(31, 2, 4, 4, '2019-06-16 12:00:00', '2019-06-16 19:00:00', NULL, 'Hey Gamins!', NULL, NULL, NULL),
(32, 1, 1, 4, '2019-06-23 18:00:00', '2019-06-23 22:00:00', NULL, 'The Monsters', NULL, NULL, NULL),
(33, 2, 5, 4, '2019-09-13 17:30:00', '2019-09-13 01:00:00', NULL, 'Hop Pop Hop J1', NULL, NULL, NULL),
(34, 2, 5, 4, '2019-09-14 16:00:00', '2019-09-14 03:00:00', NULL, 'Hop Pop Hop J2', NULL, NULL, NULL),
(35, 1, 1, 4, '2019-09-28 20:30:00', '2019-09-28 01:00:00', NULL, 'It It Anita', NULL, NULL, NULL),
(36, 1, 2, 4, '2019-10-04 20:30:00', '2019-10-04 01:00:00', NULL, 'Melissa Laveaux', NULL, NULL, NULL),
(37, 1, 1, 4, '2019-10-05 20:30:00', '2019-10-05 01:00:00', NULL, 'Alex Cameron', NULL, NULL, NULL),
(38, 1, 2, 4, '2019-10-11 20:30:00', '2019-10-11 01:00:00', NULL, 'VeryDub', NULL, NULL, NULL),
(39, 1, 2, 4, '2019-10-12 20:30:00', '2019-10-12 01:00:00', NULL, 'High Tone', NULL, NULL, NULL),
(40, 1, 2, 4, '2019-10-16 20:30:00', '2019-10-16 01:00:00', NULL, 'Clinton Fearon', NULL, NULL, NULL),
(41, 1, 2, 4, '2019-10-17 20:30:00', '2019-10-17 01:00:00', NULL, 'Last Train', NULL, NULL, NULL),
(42, 1, 1, 4, '2019-10-30 16:30:00', '2019-10-30 19:00:00', NULL, 'La Relève', NULL, NULL, NULL),
(43, 1, 2, 4, '2019-11-02 20:30:00', '2019-11-02 01:00:00', NULL, 'Tachycardie', NULL, NULL, NULL),
(44, 1, 2, 4, '2019-11-07 20:30:00', '2019-11-07 01:00:00', NULL, 'Maxenss', NULL, NULL, NULL),
(45, 2, 6, 4, '2019-11-09 10:00:00', '2019-11-09 11:15:00', NULL, 'KOMANEKO', NULL, NULL, NULL),
(46, 1, 1, 4, '2019-11-09 22:00:00', '2019-11-09 03:00:00', NULL, 'Dat Politics', NULL, NULL, NULL),
(47, 1, 1, 4, '2019-11-15 20:30:00', '2019-11-15 01:00:00', NULL, 'Boy Harsher', NULL, NULL, NULL),
(48, 1, 1, 4, '2019-11-16 20:30:00', '2019-11-16 01:00:00', NULL, 'Bror Gunnar Jansson', NULL, NULL, NULL),
(49, 1, 2, 4, '2019-11-21 20:30:00', '2019-11-21 01:00:00', NULL, 'The Young Gods', NULL, NULL, NULL),
(50, 2, 7, 4, '2019-11-22 20:00:00', '2019-11-22 23:00:00', NULL, 'Archive', NULL, NULL, NULL),
(51, 1, 2, 4, '2019-11-26 20:30:00', '2019-11-26 01:00:00', NULL, 'J.S Ondara', NULL, NULL, NULL),
(52, 1, 1, 4, '2019-11-27 20:30:00', '2019-11-27 01:00:00', NULL, 'The Chats', NULL, NULL, NULL),
(53, 1, 2, 4, '2019-12-14 23:00:00', '2019-12-14 05:00:00', NULL, 'Bubble Boum : En chantier', NULL, NULL, NULL),
(55, 1, 2, 1, '1999-03-12 19:00:00', '1999-03-13 02:00:00', NULL, 'ORLÉANS LANCE L\'ASTROLABE', NULL, NULL, NULL),
(56, 1, 2, 1, '1999-03-13 19:00:00', '1999-03-14 02:00:00', NULL, 'ORLÉANS LANCE L\'ASTROLABE', NULL, NULL, NULL),
(57, 1, 2, 1, '1999-03-19 20:30:00', '1999-03-20 01:00:00', '<p>Organisation : Seamus / Lab Watt</p>', 'ZENZILE', NULL, NULL, NULL),
(58, 1, 2, 1, '1999-03-25 20:30:00', '1999-03-26 01:00:00', '<p>Organisation : 1er rang</p>', 'LES WAMPAS', NULL, NULL, NULL),
(59, 1, 2, 1, '1999-03-29 20:30:00', '1999-03-30 01:00:00', '<p>Organisation : La Klave</p>', 'THE SKATALITES', NULL, NULL, NULL),
(60, 1, 2, 1, '1999-04-02 20:30:00', '1999-04-03 01:00:00', '<p>Organisation : Lobe sc&egrave;ne</p>', 'FABULOUS TROBADORS', NULL, NULL, NULL),
(61, 1, 2, 1, '1999-04-14 20:30:00', '1999-04-15 01:00:00', '<p>Organisation : La Klave</p>', 'LO\'JO TRIBAN', NULL, NULL, NULL),
(62, 1, 2, 1, '1999-04-29 20:30:00', '1999-04-30 01:00:00', '<p>Organisation : Lobe sc&egrave;ne</p>', 'ORANGE BLOSSOM', NULL, NULL, NULL),
(63, 1, 2, 1, '1999-05-14 20:30:00', '1999-05-15 01:00:00', '<p>Organisation : La Klave</p>', 'K2R', NULL, NULL, NULL),
(64, 1, 2, 1, '1999-05-20 20:30:00', '1999-05-21 01:00:00', NULL, 'THE ATOMIC SPUDS', NULL, NULL, NULL),
(65, 1, 2, 1, '1999-05-26 20:30:00', '1999-05-27 01:00:00', '<p>Organisation : Ville d&#39;Orl&eacute;ans</p>', 'MASS HYSTERIA', NULL, NULL, NULL),
(66, 1, 2, 1, '1999-05-29 20:30:00', '1999-05-30 01:00:00', '<p>Organisation : L&#39;Ascenseur</p>', 'LIVE ASCENSEUR', NULL, NULL, NULL),
(67, 1, 2, 1, '1999-05-29 20:30:00', '1999-05-30 01:00:00', NULL, 'LIVE ASCENSEUR', NULL, NULL, NULL),
(68, 1, 2, 1, '1999-06-11 20:30:00', '1999-06-12 01:00:00', '<p>Organisation : La Klave</p>', 'MARCEL ET SON ORCHESTRE', NULL, NULL, NULL),
(69, 1, 2, 1, '1999-06-25 20:30:00', '1999-06-26 01:00:00', '<p>Organisation : La Klave</p>', 'ERNEST RANGLIN', NULL, NULL, NULL),
(70, 1, 2, 1, '1999-09-29 20:30:00', '1999-09-30 01:00:00', '<p>Organisation : Premier Rang</p>', 'NATACHA ATLAS', NULL, NULL, NULL),
(71, 1, 2, 1, '1999-10-02 20:30:00', '1999-10-03 01:00:00', NULL, 'HIGH TONE', NULL, NULL, NULL),
(72, 1, 2, 1, '1999-10-15 20:30:00', '1999-10-16 01:00:00', NULL, 'DYONISOS', NULL, NULL, NULL),
(73, 1, 2, 1, '1999-10-16 20:30:00', '1999-10-17 01:00:00', NULL, 'DJ CONTEST\'99', NULL, NULL, NULL),
(74, 1, 2, 1, '1999-10-22 20:30:00', '1999-10-23 01:00:00', NULL, 'ETHNICIANS', NULL, NULL, NULL),
(75, 1, 2, 1, '1999-10-28 20:30:00', '1999-10-29 01:00:00', NULL, 'FRENCH REGGAE NIGHT 2', NULL, NULL, NULL),
(76, 1, 2, 1, '1999-11-04 20:30:00', '1999-11-05 01:00:00', NULL, 'MISTER GANG', NULL, NULL, NULL),
(77, 1, 2, 1, '1999-11-06 20:30:00', '1999-11-07 01:00:00', NULL, 'HINT', NULL, NULL, NULL),
(78, 1, 2, 1, '1999-11-10 20:30:00', '1999-11-11 01:00:00', NULL, 'BURNING HEADS', NULL, NULL, NULL),
(79, 1, 2, 1, '1999-11-17 20:30:00', '1999-11-18 01:00:00', NULL, 'FEMI KUTI', NULL, NULL, NULL),
(80, 1, 2, 1, '1999-11-20 20:30:00', '1999-11-21 01:00:00', '<p>Organisation : Lobe sc&egrave;ne</p>', 'BENABAR ET ASSOCIÉS', NULL, NULL, NULL),
(81, 1, 2, 1, '1999-11-24 20:30:00', '1999-11-25 01:00:00', '<p>Organisation : La Klave</p>', 'MUKTA', NULL, NULL, NULL),
(82, 1, 2, 1, '1999-11-26 20:30:00', '1999-11-27 01:00:00', '<p>Organisation : Seamus</p>', 'EK-KHA', NULL, NULL, NULL),
(83, 1, 2, 1, '1999-12-16 20:30:00', '1999-12-17 01:00:00', NULL, 'ROCK\'N\'NOËL', NULL, NULL, NULL),
(84, 1, 2, 1, '1999-12-17 20:30:00', '1999-12-18 01:00:00', NULL, 'MIX UP', NULL, NULL, NULL),
(85, 1, 2, 1, '2000-01-15 20:30:00', '2000-01-16 01:00:00', '<p>Organisation : Premier Rang</p>', 'MUSE', NULL, NULL, NULL),
(86, 1, 2, 1, '2000-01-20 20:30:00', '2000-01-21 01:00:00', '<p>Organisation : BMC &amp; Antirouille</p>', 'LES ZINC\'PREVUS', NULL, NULL, NULL),
(87, 1, 2, 1, '2000-01-22 20:30:00', '2000-01-23 01:00:00', '<p>Organisation : Les Nuits Java</p>', 'FESTIVAL PARI SUR LOIRE', NULL, NULL, NULL),
(88, 1, 2, 1, '2000-01-27 20:30:00', '2000-01-28 01:00:00', '<p>Organisation : La Klave</p>', 'BLUE NOTE GROOVE', NULL, NULL, NULL),
(89, 1, 2, 1, '2000-01-28 20:30:00', '2000-01-29 01:00:00', NULL, 'DOGS', NULL, NULL, NULL),
(90, 1, 2, 1, '2000-02-04 20:30:00', '2000-02-05 01:00:00', NULL, 'SOIRÉE J\'PASS', NULL, NULL, NULL),
(91, 1, 2, 1, '2000-02-09 20:30:00', '2000-02-10 01:00:00', '<p>Organisation : La Klave</p>', 'ERIK TRUFFAZ', NULL, NULL, NULL),
(92, 1, 2, 1, '2000-02-10 20:30:00', '2000-02-11 01:00:00', '<p>Organisation : Galewar Prod</p>\r\n\r\n<p>Sortie de leur premier album &quot;Civilisation ou barbarie&quot;&nbsp;</p>', 'DOLÉ', NULL, NULL, NULL),
(93, 1, 2, 1, '2000-02-19 20:30:00', '2000-02-20 01:00:00', '<p>Organisation : Lobe Session</p>', 'SAÏAN SUPA CREW', NULL, NULL, NULL),
(94, 1, 2, 1, '2000-02-24 20:30:00', '2000-02-25 01:00:00', NULL, 'M', NULL, NULL, NULL),
(95, 1, 2, 1, '2000-03-03 20:30:00', '2000-03-04 01:00:00', NULL, 'FRENCH REGGAE NIGHT #3', NULL, NULL, NULL),
(96, 1, 2, 1, '2000-03-10 20:30:00', '2000-03-11 01:00:00', '<p>Organisation : Ville d&#39;orl&eacute;ans avec le soutien de la Caisse d&#39;&eacute;pargne du Loiret, du Musicien et de La R&eacute;publique du Centre</p>', 'LES ORBITALES', NULL, NULL, NULL),
(97, 1, 2, 1, '2000-03-11 20:30:00', '2000-03-12 01:00:00', '<p>Organisation : D&eacute;fi</p>', 'KOHANN', NULL, NULL, NULL),
(98, 1, 2, 1, '2000-03-17 20:30:00', '2000-03-18 01:00:00', '<p>Organisation : SK8nfu / Lobe sc&egrave;ne</p>', 'NRA', NULL, NULL, NULL),
(99, 1, 2, 1, '2000-03-23 20:30:00', '2000-03-24 01:00:00', '<p>Organisation : Lobe sc&egrave;ne</p>', 'CEUX QUI MARCHENT DEBOUT', NULL, NULL, NULL),
(100, 1, 2, 1, '2000-03-28 20:30:00', '2000-03-29 01:00:00', '<p>Organisation : L&#39;Antirouille</p>', 'LES ZINC\'PREVUS', NULL, NULL, NULL),
(101, 1, 2, 1, '2000-03-30 20:30:00', '2000-03-31 01:00:00', '<p>Organisation : La Klave</p>', 'FRENCH REGGAE NIGHT #4', NULL, NULL, NULL),
(102, 1, 2, 1, '2000-04-01 20:30:00', '2000-04-02 01:00:00', '<p>Organisation : BMC</p>', 'COSMIC CONNECTION', NULL, NULL, NULL),
(103, 1, 2, 1, '2000-04-05 20:30:00', '2000-04-06 01:00:00', '<p>Organisation : L&#39;Antirouille</p>', 'AKOSH S. UNIT', NULL, NULL, NULL),
(104, 1, 2, 1, '2000-04-08 20:30:00', '2000-04-09 01:00:00', '<p>Organisation : Ville d&#39;Orl&eacute;ans et Lobe sc&egrave;ne</p>', 'GRAND BAL 2000', NULL, NULL, NULL),
(105, 1, 2, 1, '2000-04-14 20:30:00', '2000-04-15 01:00:00', '<p>Organisation : La Klave</p>', 'MAMADY KEITA', NULL, NULL, NULL),
(106, 1, 1, 1, '2000-04-15 20:30:00', '2000-04-16 01:00:00', '<p>Organisation : La Klave</p>', 'MAMADY KEITA', NULL, NULL, NULL),
(107, 1, 2, 1, '2000-04-26 20:30:00', '2000-04-27 01:00:00', '<p>Organisation : Ville d&#39;Orl&eacute;ans</p>', 'OMAR SOSA SEXTET', NULL, NULL, NULL),
(108, 1, 2, 1, '2000-04-22 20:30:00', '2000-04-23 01:00:00', '<p>Organisation : K.Side</p>', 'PURE BABALLE FESTIVAL', NULL, NULL, NULL),
(109, 1, 2, 1, '2000-04-28 20:30:00', '2000-04-29 01:00:00', '<p>Organisation : K.Side</p>', 'PURE BABALLE FESTIVAL', NULL, NULL, NULL),
(110, 1, 2, 1, '2000-04-29 20:30:00', '2000-04-30 01:00:00', '<p>Organisation : K.Side</p>', 'PURE BABALLE FESTIVAL', NULL, NULL, NULL),
(111, 1, 2, 1, '2000-05-04 21:00:00', '2000-05-05 01:00:00', '<p>ArchiLive se d&eacute;roule sur deux soir&eacute;es durant ArchiLab. Il s&#39;agit de cr&eacute;er un parall&egrave;le syntaxique entre les tendances de la cr&eacute;ation musicale &eacute;lectronique actuelle et les recherches architecturales les plus avanc&eacute;es. L&#39;Astrolabe provoque cet espace de rencontre et d&#39;interaction entre deux champs artistiques : l&#39;architecture et la musique.</p>\r\n\r\n<p>Organisation : Ville d&#39;orl&eacute;ans et ArchiLab</p>', 'ARCHILIVE', NULL, NULL, NULL),
(112, 1, 2, 1, '2000-05-05 21:00:00', '2000-05-06 01:00:00', '<p>ArchiLive se d&eacute;roule sur deux soir&eacute;es durant ArchiLab. Il s&#39;agit de cr&eacute;er un parall&egrave;le syntaxique entre les tendances de la cr&eacute;ation musicale &eacute;lectronique actuelle et les recherches architecturales les plus avanc&eacute;es. L&#39;Astrolabe provoque cet espace de rencontre et d&#39;interaction entre deux champs artistiques : l&#39;architecture et la musique.</p>\r\n\r\n<p>Organisation : Ville d&#39;orl&eacute;ans et ArchiLab</p>', 'ARCHILIVE', NULL, NULL, NULL),
(113, 1, 2, 1, '2000-05-06 20:30:00', '2000-05-07 01:00:00', '<p>Organisation : Lobe Sc&egrave;ne</p>', 'OVERSOUL', NULL, NULL, NULL),
(114, 1, 2, 1, '2000-05-12 20:30:00', '2000-05-13 01:00:00', '<p>Organisation : L&#39;Ascenseur</p>', 'ASCENSEUR ROCK', '699842381f92a_s-l1600.jpg', '2026-02-20 12:15:04', NULL),
(115, 1, 2, 1, '2000-05-13 20:30:00', '2000-05-14 01:00:00', '<p>Organisation : L&#39;Ascenseur</p>', 'L\'ASCENSEUR GROOVE', NULL, NULL, NULL),
(116, 1, 2, 1, '2000-05-17 20:30:00', '2000-05-18 01:00:00', '<p>Organisation : Ville d&#39;Orl&eacute;ans</p>', 'LA TORDUE', NULL, NULL, NULL),
(118, 1, 2, 1, '2000-05-19 20:30:00', '2000-05-20 01:00:00', '<p>Organisation : BMC</p>', 'DJ VADIM', NULL, NULL, NULL),
(119, 1, 2, 1, '2000-05-19 20:30:00', '2000-05-20 01:00:00', '<p>Organisation : Kether Prod</p>', 'PENUMBRA', NULL, NULL, NULL),
(120, 1, 2, 1, '2000-05-27 20:30:00', '2000-05-28 01:00:00', '<p>Organisation : Am&eacute;nophis</p>', 'TRONIC VIBES', NULL, NULL, NULL),
(121, 1, 2, 1, '2000-06-07 20:30:00', '2000-06-08 01:00:00', '<p>Organisation : Premier Rang</p>', 'VENUS', NULL, NULL, NULL),
(122, 1, 2, 1, '2000-06-09 20:30:00', '2000-06-10 01:00:00', '<p>Organisation : Lobe Sc&egrave;ne</p>', 'JAMASOUND', NULL, NULL, NULL),
(123, 1, 2, 1, '2000-06-11 20:30:00', '2000-06-12 01:00:00', '<p>Organisation : Antirouille</p>', 'SPACE HEADS', NULL, NULL, NULL),
(124, 1, 1, 1, '2000-06-14 19:00:00', '2000-06-14 22:00:00', NULL, 'PARIS LONDRES', NULL, NULL, NULL),
(125, 1, 2, 1, '2000-06-24 20:30:00', '2000-06-25 01:00:00', '<p>Organisation : Lobe Sc&egrave;ne</p>', 'KANJAR\'OC', NULL, NULL, NULL),
(126, 1, 1, 1, '2000-10-01 20:30:00', '2000-10-02 01:00:00', '<p>Organisation : Ville d&#39;Orl&eacute;ans</p>', 'KANJAR\'OC', NULL, NULL, NULL),
(127, 1, 2, 1, '2000-10-05 20:30:00', '2000-10-06 01:00:00', '<p>Organisation : Lobe Sc&egrave;ne</p>', 'MASSILIA SOUND SYSTEM', NULL, NULL, NULL),
(128, 1, 2, 1, '2000-10-19 20:30:00', '2000-10-20 01:00:00', '<p>Organisation : le CROUS et l&#39;Universit&eacute; en collaboration avec Lobe Sc&egrave;ne</p>', 'CAMPUS EN FÊTE', NULL, NULL, NULL),
(129, NULL, 2, 1, '2000-10-27 20:30:00', '2000-10-28 01:00:00', '<p>Organisation : D&eacute;fi</p>', 'SVINKELS', NULL, NULL, NULL),
(130, 1, 2, 1, '2000-11-03 20:30:00', '2000-11-04 01:00:00', '<p>Organisation : l&#39;Antirouille</p>', 'LES ZINC\'PRÉVUS', NULL, NULL, NULL),
(131, 1, 2, 1, '2000-11-10 22:00:00', '2000-11-11 03:00:00', '<p>Organisation : BMC</p>', 'BASS MASSIVE', NULL, NULL, NULL),
(132, 1, 2, 1, '2000-11-16 20:30:00', '2000-11-17 01:00:00', '<p>Organisation : La Klave</p>', 'FRENCH REGGAE NIGHT', NULL, NULL, NULL),
(133, 1, 2, 1, '2000-11-24 20:30:00', '2000-11-25 01:00:00', NULL, 'LES ORBITALES #2', NULL, NULL, NULL),
(134, 1, 2, 1, '2000-11-26 18:00:00', '2000-11-26 21:00:00', '<p>Organisation : l&#39;Antirouille</p>', 'LES ZINC\'PRÉVUS', NULL, NULL, NULL),
(135, 1, 2, 1, '2000-12-07 20:30:00', '2000-12-08 01:00:00', '<p>Organisation : Lobe Sc&egrave;ne</p>', 'ASSASSIN', NULL, NULL, NULL),
(136, 1, 2, 1, '2000-12-10 18:00:00', '2000-12-10 21:00:00', '<p>Organisation : L&#39;Antirouille</p>', 'DOUBLE NELSON', NULL, NULL, NULL),
(137, 1, 2, 1, '2000-02-13 18:00:00', '2000-02-13 21:00:00', '<p>Organisation : l&#39;Antirouille</p>', 'LES ZINC\'PRÉVUS', NULL, NULL, NULL),
(138, 1, 1, 1, '2025-10-18 20:30:00', '2026-10-18 23:30:00', NULL, 'WALLACE CLEAVER', '6ab4ec1791282_AGENDA-4.png', '2026-09-24 11:23:35', NULL),
(139, 1, 1, 1, '2025-11-29 20:30:00', '2025-11-29 23:30:00', '<p>M&Eacute;DINE (RAP &ndash; FRANCE)</p>\r\n\r\n<hr />\r\n<p>Narrateur infatigable, d&eacute;peignant les d&eacute;rives de notre soci&eacute;t&eacute; et ses contradictions, M&eacute;dine manie la langue de Moli&egrave;re comme personne, alternant humour et gravit&eacute; avec finesse depuis plus de 20 ans. La constance de ses combats, tous men&eacute;s de front, ont d&eacute;montr&eacute; son int&eacute;grit&eacute; artistique. Ayant sign&eacute; certains des plus beaux textes de rap fran&ccedil;ais, M&eacute;dine ne cesse pour autant de se renouveler, de se remettre en question, afin de toujours nous surprendre, lui qui est si &agrave; l&rsquo;aise dans l&rsquo;art du contre-pied.<br />\r\nApr&egrave;s le succ&egrave;s de sa tourn&eacute;e M&eacute;dine France Tour (+ de 70 dates en France, Suisse et Belgique, quasiment toutes sold-out), le rappeur s&rsquo;est lanc&eacute; le d&eacute;fi de f&ecirc;ter ses 20 ans de carri&egrave;re avec un spectacle acoustique. 20 repr&eacute;sentations pour un succ&egrave;s retentissant montrant une facette plus intime, familiale et chaleureuse du Havrais.<br />\r\nM&eacute;dine, qui a su f&eacute;d&eacute;rer autour de titres m&eacute;morables comme &ldquo;Grand Paris&rdquo;, est plus que jamais dans une logique de rassemblement, d&eacute;montrant la force et l&rsquo;universalit&eacute; de son message. Avec ce 9&egrave;me album intitul&eacute; &ldquo;STENTOR&rdquo;, publi&eacute; en 2 chapitres, M&eacute;dine signe un retour d&eacute;tonnant, prouvant qu&rsquo;il sait encore manier le fond et la forme, avec des punchlines assassines sur des instrumentales boom-bap &amp; trap parsem&eacute;es de samples.</p>\r\n\r\n<p>KONSKOUZ (RAP &ndash; FRANCE)</p>\r\n\r\n<hr />\r\n<p>KONS KOUZ (konscience kouzin) est un groupe de rap originaire d&rsquo;Orl&eacute;ans qui a vu le jour en 1999.</p>\r\n\r\n<p>Compos&eacute; de Dary et Fay&ccedil;ol (auteurs et interpr&egrave;tes), ils participent &agrave; plusieurs mix-tapes et enchainent une cinquantaine de concerts, dont les premi&egrave;res parties de Psy4 de la rime, L&rsquo;Alg&eacute;rino, Arsenik, Manu Dibango et Kyle Eastwood.<br />\r\nCes deux boulimiques de son abordent des th&egrave;mes vari&eacute;s autant engag&eacute;s que l&eacute;gers en privil&eacute;giant le fond sans jamais n&eacute;gliger la forme.<br />\r\nAdepte des rimes multi syllabiques et en perp&eacute;tuel renouvellement, le groupe poss&egrave;de des fondations solides.</p>\r\n\r\n<p>Instigateur d&rsquo;une quinzaine de projets affili&eacute; Kons Kouz leur premier album voit le jour en 2005 &laquo; Meks bizarres &raquo;,<br />\r\nVainqueur du concours &laquo;&nbsp;Produits de banlieue&nbsp;&raquo; la m&ecirc;me ann&eacute;e.</p>\r\n\r\n<p>Gr&acirc;ce &agrave; leur label &laquo; MakInTeush &raquo;, la structure MITvid&eacute;os, et le studio Pasnormal Prod, ils r&eacute;alisent l&rsquo;ensemble des clips,<br />\r\nla partie enregistrement et tous les processus de cr&eacute;ation d&rsquo;un projet, en totale ind&eacute;pendance.</p>\r\n\r\n<p>Ils participent &agrave; l&rsquo;&eacute;mission &laquo; Couvre-Feu &raquo; sur Skyrock, &agrave; l&rsquo;occasion de la sortie de la compilation &laquo;&nbsp;Sp&eacute;ciale Province&nbsp;&raquo; par DJ Poska.<br />\r\nS&rsquo;en suit en 2008 la sortie de leur deuxi&egrave;me album &laquo; A tous mes chiens &raquo; .<br />\r\nOn les retrouves &eacute;galement sur plusieurs projet en collectif, &laquo;&nbsp;Album Potos&nbsp;&raquo;, &laquo;&nbsp;Skyrap 1 et 2&nbsp;&raquo; et &laquo;&nbsp;Lascarlateam&nbsp;&raquo;<br />\r\net sur des albums en solo, &laquo;&nbsp;Main sur le c&oelig;ur&nbsp;&raquo; de Dary et &laquo;&nbsp;Mine de charbon&nbsp;&raquo; de Fay&ccedil;ol.</p>\r\n\r\n<p>Apr&egrave;s avoir sorti un double EP &laquo; Prendre le large &raquo; et &laquo; Piranhas &raquo;, le groupe r&eacute;it&egrave;re le 18 avril 2025,<br />\r\nen sortant leur nouvel album &laquo; Affam&eacute; &raquo; produit par Chilea&rsquo;s et Almess beats disponible en physique et sur toutes les plateformes<br />\r\nde t&eacute;l&eacute;chargement.</p>', 'MEDINE', '6ab4f10528113_MEDINE.jpeg', '2026-09-24 11:44:37', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenement_etiquette`
--

CREATE TABLE `evenement_etiquette` (
  `evenement_id` int NOT NULL,
  `etiquette_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement_genre_musical`
--

CREATE TABLE `evenement_genre_musical` (
  `evenement_id` int NOT NULL,
  `genre_musical_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement_genre_musical`
--

INSERT INTO `evenement_genre_musical` (`evenement_id`, `genre_musical_id`) VALUES
(1, 1),
(2, 10),
(3, 14),
(3, 15),
(3, 48),
(3, 89),
(4, 11),
(4, 14),
(5, 2),
(6, 10),
(7, 3),
(8, 4),
(10, 2),
(13, 4),
(16, 3),
(17, 3),
(19, 2),
(20, 2),
(21, 2),
(22, 4),
(23, 7),
(24, 4),
(25, 8),
(26, 3),
(29, 1),
(30, 1),
(31, 1),
(32, 2),
(35, 2),
(36, 7),
(37, 7),
(39, 4),
(41, 2),
(42, 3),
(44, 3),
(45, 1),
(46, 4),
(48, 2),
(50, 2),
(52, 2),
(55, 3),
(55, 13),
(56, 2),
(57, 13),
(57, 39),
(58, 2),
(59, 13),
(59, 38),
(60, 13),
(60, 37),
(60, 40),
(61, 14),
(61, 37),
(62, 2),
(62, 14),
(62, 39),
(62, 109),
(63, 13),
(63, 39),
(64, 2),
(64, 20),
(64, 21),
(65, 8),
(68, 2),
(68, 38),
(69, 11),
(69, 13),
(69, 38),
(70, 4),
(70, 14),
(70, 110),
(71, 11),
(71, 39),
(71, 90),
(72, 2),
(72, 37),
(72, 111),
(75, 13),
(76, 13),
(77, 2),
(77, 28),
(77, 112),
(77, 113),
(78, 2),
(78, 21),
(78, 28),
(78, 34),
(78, 58),
(79, 11),
(79, 14),
(79, 49),
(79, 90),
(80, 11),
(80, 14),
(80, 37),
(80, 38),
(80, 108),
(80, 114),
(81, 14),
(81, 115),
(81, 116),
(82, 4),
(82, 39),
(84, 13),
(84, 14),
(84, 36),
(84, 39),
(84, 72),
(85, 2),
(85, 4),
(85, 7),
(85, 27),
(85, 118),
(86, 4),
(86, 73),
(86, 79),
(86, 82),
(87, 7),
(87, 37),
(87, 120),
(88, 11),
(89, 2),
(89, 20),
(89, 21),
(89, 42),
(90, 8),
(90, 58),
(90, 112),
(90, 118),
(91, 4),
(91, 11),
(91, 43),
(91, 79),
(91, 84),
(92, 13),
(92, 14),
(93, 3),
(93, 36),
(93, 122),
(93, 123),
(94, 7),
(94, 14),
(94, 19),
(94, 37),
(94, 49),
(95, 4),
(95, 13),
(95, 33),
(95, 38),
(95, 39),
(95, 126),
(96, 2),
(96, 7),
(96, 8),
(96, 58),
(96, 112),
(97, 4),
(97, 7),
(97, 109),
(97, 113),
(98, 2),
(98, 21),
(98, 112),
(98, 125),
(99, 37),
(99, 49),
(99, 114),
(100, 11),
(100, 58),
(101, 13),
(101, 33),
(101, 38),
(101, 39),
(101, 126),
(102, 4),
(102, 11),
(102, 39),
(102, 72),
(102, 79),
(102, 123),
(103, 11),
(103, 46),
(104, 77),
(104, 127),
(104, 128),
(104, 131),
(105, 14),
(105, 133),
(105, 134),
(106, 14),
(106, 133),
(106, 134),
(107, 11),
(107, 131),
(107, 136),
(108, 2),
(108, 21),
(109, 8),
(109, 21),
(109, 42),
(109, 58),
(109, 137),
(110, 7),
(110, 8),
(110, 28),
(110, 138),
(111, 4),
(111, 39),
(111, 80),
(112, 4),
(112, 39),
(112, 86),
(113, 8),
(113, 112),
(114, 2),
(114, 8),
(114, 37),
(114, 58),
(115, 3),
(116, 37),
(118, 4),
(118, 36),
(118, 73),
(118, 79),
(118, 109),
(119, 8),
(119, 51),
(119, 60),
(119, 61),
(120, 4),
(120, 84),
(120, 86),
(120, 123),
(120, 131),
(120, 140),
(121, 7),
(121, 42),
(122, 13),
(122, 38),
(122, 141),
(123, 4),
(123, 47),
(124, 19),
(124, 37),
(125, 13),
(125, 38),
(126, 13),
(126, 38),
(127, 13),
(127, 40),
(127, 73),
(128, 13),
(128, 14),
(128, 36),
(128, 93),
(128, 102),
(128, 116),
(128, 120),
(129, 3),
(129, 14),
(129, 21),
(130, 4),
(130, 142),
(131, 13),
(131, 76),
(131, 79),
(131, 131),
(132, 2),
(132, 13),
(132, 38),
(132, 73),
(132, 93),
(133, 2),
(133, 7),
(133, 28),
(133, 113),
(134, 2),
(134, 11),
(134, 46),
(135, 3),
(136, 11),
(136, 21),
(136, 143),
(137, 127),
(137, 143),
(138, 3),
(138, 36),
(139, 3),
(139, 36),
(139, 68);

-- --------------------------------------------------------

--
-- Structure de la table `evenement_ressource`
--

CREATE TABLE `evenement_ressource` (
  `evenement_id` int NOT NULL,
  `ressource_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement_ressource`
--

INSERT INTO `evenement_ressource` (`evenement_id`, `ressource_id`) VALUES
(2, 1),
(2, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(6, 9),
(20, 10),
(138, 11),
(138, 12),
(139, 13),
(139, 14),
(139, 15);

-- --------------------------------------------------------

--
-- Structure de la table `genre_musical`
--

CREATE TABLE `genre_musical` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genre_musical`
--

INSERT INTO `genre_musical` (`id`, `etat_id`, `nom`) VALUES
(1, 1, 'JEUNE PUBLIC'),
(2, 1, 'ROCK'),
(3, 1, 'RAP'),
(4, 1, 'ELECTRO'),
(7, 1, 'POP'),
(8, 1, 'METAL'),
(10, 1, 'SOUL / FUNK'),
(11, 1, 'JAZZ'),
(13, 1, 'REGGAE'),
(14, 1, 'SONO MONDIALE'),
(15, 1, 'BLUES'),
(16, 1, 'BLUES ROCK'),
(17, 1, 'COLD WAVE'),
(18, 1, 'DARK WAVE'),
(19, 1, 'FOLK'),
(20, 1, 'GARAGE ROCK'),
(21, 1, 'PUNK ROCK'),
(22, 1, 'GRUNGE'),
(23, 1, 'KRAUT ROCK'),
(24, 1, 'LO FI'),
(25, 1, 'MATH ROCK'),
(26, 1, 'NEO FOLK'),
(27, 1, 'NEW WAVE'),
(28, 1, 'NOISE'),
(29, 1, 'OÏ'),
(30, 1, 'ROCK\'N\'ROLL'),
(31, 1, 'ROCKABILLY'),
(32, 1, 'SHOEGAZE'),
(33, 1, 'SKA PUNK'),
(34, 1, 'SKATE PUNK'),
(35, 1, 'STONER'),
(36, 1, 'HIP HOP'),
(37, 1, 'CHANSON FRANCAISE'),
(38, 1, 'SKA'),
(39, 1, 'DUB'),
(40, 1, 'FOLK OCCITAN'),
(41, 1, 'BRITPOP'),
(42, 1, 'POWER POP'),
(43, 1, 'ACID JAZZ'),
(44, 1, 'ETHIO JAZZ'),
(45, 1, 'JAZZ MANOUCHE'),
(46, 1, 'FREE JAZZ'),
(47, 1, 'NU JAZZ'),
(48, 1, 'SOUL'),
(49, 1, 'FUNK'),
(50, 1, 'R\'N\'B'),
(51, 1, 'BLACK METAL'),
(52, 1, 'DEATH METAL'),
(53, 1, 'DEATHCORE'),
(54, 1, 'DOOM'),
(55, 1, 'EMO'),
(56, 1, 'GRINDCORE'),
(57, 1, 'HARD ROCK'),
(58, 1, 'HARDCORE'),
(59, 1, 'HEAVY METAL'),
(60, 1, 'GOTHIQUE'),
(61, 1, 'TRASH METAL'),
(62, 1, 'CLOUD'),
(63, 1, 'OLD SCHOOL'),
(64, 1, 'RAP ALTERNATIF'),
(65, 1, 'GANGSTA RAP'),
(66, 1, 'RAP LYRICAL'),
(67, 1, 'BOOM BAP'),
(68, 1, 'CONSCIOUS HIP HOP'),
(69, 1, 'DRILL'),
(70, 1, 'RAP ROCK'),
(71, 1, 'TRAP'),
(72, 1, 'DANCE HALL'),
(73, 1, 'RAGGA'),
(74, 1, 'REGGAETON'),
(75, 1, 'AMBIANT'),
(76, 1, 'BREAKBEAT'),
(77, 1, 'DISCO'),
(78, 1, 'DOWN TEMPO'),
(79, 1, 'DRUM N\' BASS'),
(80, 1, 'ELECTRONICA'),
(81, 1, 'TRAP MUSIC'),
(82, 1, 'GABBER / TECHNO HARDCORE'),
(83, 1, 'HARDSTYLE'),
(84, 1, 'HOUSE MUSIC'),
(85, 1, 'FRENCH TOUCH'),
(86, 1, 'TECHNO'),
(87, 1, 'TRANCE'),
(88, 1, 'UK GARAGE'),
(89, 1, 'MALOYA'),
(90, 1, 'AFROBEAT'),
(91, 1, 'RAI'),
(92, 1, 'RUMBA CONGOLAISE'),
(93, 1, 'SALSA'),
(94, 1, 'CALYPSO'),
(95, 1, 'ZOUK'),
(96, 1, 'TANGO'),
(97, 1, 'BOSSA NOVA'),
(98, 1, 'SAMBA'),
(99, 1, 'CHORRO'),
(100, 1, 'CUMBIA'),
(101, 1, 'ZYDECO'),
(102, 1, 'FLAMENCO'),
(103, 1, 'REBETIKO'),
(104, 1, 'MUSIQUE TRAD / BAL FOLK'),
(105, 1, 'KLEZMER'),
(106, 1, 'FADO'),
(107, 1, 'DABKE'),
(108, 1, 'VARIÉTÉ FRANCAISE'),
(109, 1, 'TRIP HOP'),
(110, 1, 'MUSIQUES ORIENTALES'),
(111, 1, 'SLACKER ROCK'),
(112, 1, 'FUSION'),
(113, 1, 'ELECTROPOP'),
(114, 1, 'FANFARE'),
(115, 1, 'MUSIQUES INDIENNES'),
(116, 1, 'MUSIQUES TZIGANES'),
(118, 1, 'INDUS'),
(120, 1, 'NÉO MUSETTE'),
(121, 1, 'POST ROCK'),
(122, 1, 'BEATBOX'),
(123, 1, 'JUNGLE'),
(124, 1, 'MUSIQUES BRETONNES'),
(125, 1, 'HARDCORE MÉLODIQUE'),
(126, 1, 'SKA FESTIF'),
(127, 1, 'INCLASSABLE'),
(128, 1, 'THÉATRE  DE RUE'),
(129, 1, 'DOCUMENTAIRE MUSICAL'),
(130, 1, 'AUTRES'),
(131, 1, 'DJ'),
(132, 1, 'SOUND SYSTEM'),
(133, 1, 'MUSIQUES AFRICAINES'),
(134, 1, 'PERCUSSIONS'),
(135, 1, 'MUSIQUES D\'EUROPE DE L\'EST'),
(136, 1, 'JAZZ AFRO-CUBAIN'),
(137, 1, 'NU METAL'),
(138, 1, 'POST HARDCORE'),
(139, 1, 'MINIMAL'),
(140, 1, 'BIG BEAT'),
(141, 1, 'ROCKSTEADY'),
(142, 1, 'ELECTROPUNK'),
(143, 1, 'POST PUNK');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int NOT NULL,
  `nationalite_id` int DEFAULT NULL,
  `etat_id` int NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biographie` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `lien_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nationalite_id`, `etat_id`, `nom`, `date_creation`, `biographie`, `image`, `updated_at`, `lien_image`) VALUES
(1, 1, 1, 'LUMIÈRES!', NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, 'MICHELLE DAVID & THE GOSPEL SESSIONS', NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, 'HOME COOKIN\'', NULL, NULL, NULL, NULL, NULL),
(4, 1, 1, 'ANN O\'ARO', NULL, NULL, '6ab4f38e50c3f_ANNOARO.jpg', '2026-09-24 11:55:26', NULL),
(5, 1, 1, 'MUDDY GURDY', NULL, NULL, NULL, NULL, NULL),
(6, 4, 1, 'JP BIMENI & THE BLACK BELTS', NULL, NULL, NULL, NULL, NULL),
(7, 10, 1, 'STEAK AND THE WESTERN TUK TUK', NULL, NULL, NULL, NULL, NULL),
(8, 1, 1, 'BINIDU', NULL, NULL, NULL, NULL, NULL),
(9, 8, 1, 'PETER KERNEL', NULL, NULL, NULL, NULL, NULL),
(10, 9, 1, 'JUNGLE BY NIGHT', NULL, NULL, NULL, NULL, NULL),
(11, 1, 1, 'ALI M\'FANTOM', NULL, NULL, NULL, NULL, NULL),
(12, 1, 1, 'GRINGE', NULL, NULL, NULL, NULL, NULL),
(13, 1, 1, 'LE COMPTOIR', NULL, NULL, NULL, NULL, NULL),
(14, 1, 1, 'FLAVIEN BERGER', NULL, NULL, NULL, NULL, NULL),
(15, 1, 1, 'LÉONIE PERNET', NULL, NULL, NULL, NULL, NULL),
(16, 2, 1, 'TANK & THE BANGAS', NULL, NULL, NULL, NULL, NULL),
(17, 2, 1, 'SWEET CRUDE', NULL, NULL, NULL, NULL, NULL),
(18, 1, 1, 'LA CLASSE INTERNATIONALE', NULL, NULL, NULL, NULL, NULL),
(19, 2, 1, 'THE SCHIZOPHONICS', NULL, NULL, NULL, NULL, NULL),
(20, 1, 1, 'COUKOU', NULL, NULL, NULL, NULL, NULL),
(21, 1, 1, 'BLUTCH', NULL, NULL, NULL, NULL, NULL),
(22, 11, 1, 'KOKOKO!', NULL, NULL, NULL, NULL, NULL),
(23, 1, 1, 'TAXI KEBAB', NULL, NULL, NULL, NULL, NULL),
(24, 1, 1, 'ROD ANTON', NULL, NULL, NULL, NULL, NULL),
(25, 1, 1, 'THE RIOTS', NULL, NULL, NULL, NULL, NULL),
(26, 1, 1, 'KAKÊ', NULL, NULL, NULL, NULL, NULL),
(27, 1, 1, 'KONIK', NULL, NULL, NULL, NULL, NULL),
(28, 1, 1, 'P\'TIT LUC', NULL, NULL, NULL, NULL, NULL),
(29, 1, 1, 'SHEITAN BROTHERS', NULL, NULL, NULL, NULL, NULL),
(30, 1, 1, 'NINA & SIMONE', NULL, NULL, NULL, NULL, NULL),
(31, 1, 1, 'DJ NEED', NULL, NULL, NULL, NULL, NULL),
(32, 1, 1, 'LAUPHI', NULL, NULL, NULL, NULL, NULL),
(33, 1, 1, 'ABI', NULL, NULL, NULL, NULL, NULL),
(34, 1, 1, 'PETIT MI-GRAND', NULL, NULL, NULL, NULL, NULL),
(35, 1, 1, 'YOUSSOUPHA', NULL, NULL, NULL, NULL, NULL),
(36, 1, 1, 'DI#SE', NULL, NULL, NULL, NULL, NULL),
(37, 2, 1, 'TOKEN', NULL, NULL, NULL, NULL, NULL),
(38, 1, 1, 'MIND THE BEATZ', NULL, NULL, NULL, NULL, NULL),
(39, 2, 1, 'SICK OF IT ALL', NULL, NULL, NULL, NULL, NULL),
(40, 1, 1, 'SPEED JESUS', NULL, NULL, NULL, NULL, NULL),
(41, 1, 1, 'MONDE DE MERDE', NULL, NULL, NULL, NULL, NULL),
(42, 2, 1, 'BODEGA', NULL, NULL, NULL, NULL, NULL),
(43, 1, 1, 'THE PSYCHOTIC MONKS', NULL, NULL, NULL, NULL, NULL),
(44, 1, 1, 'SERVO', NULL, NULL, NULL, NULL, NULL),
(45, 4, 1, 'ART BRUT', NULL, NULL, NULL, NULL, NULL),
(46, 1, 1, 'BRAZILIERS', NULL, NULL, NULL, NULL, NULL),
(47, 5, 1, 'LA JUNGLE', NULL, NULL, NULL, NULL, NULL),
(48, 5, 1, 'LE PRINCE HARRY', NULL, NULL, NULL, NULL, NULL),
(49, 5, 1, 'SURFING LEONS', NULL, NULL, NULL, NULL, NULL),
(50, 5, 1, 'LEFTO', NULL, NULL, NULL, NULL, NULL),
(51, 5, 1, 'DC SALAS', NULL, NULL, NULL, NULL, NULL),
(52, 2, 1, 'WEYES BLOOD', NULL, NULL, NULL, NULL, NULL),
(53, 1, 1, 'VINCENT DUPAS', NULL, NULL, NULL, NULL, NULL),
(54, 1, 1, 'ODEZENNE', NULL, NULL, NULL, NULL, NULL),
(55, 1, 1, 'MOUSSA', NULL, NULL, NULL, NULL, NULL),
(56, 1, 1, 'CELESTE', NULL, NULL, NULL, NULL, NULL),
(57, 1, 1, 'PATENT', NULL, NULL, NULL, NULL, NULL),
(58, 3, 1, 'PUPPETMASTAZ', NULL, NULL, NULL, NULL, NULL),
(59, 1, 1, 'AWARDS', NULL, NULL, NULL, NULL, NULL),
(60, 4, 1, 'NOVO AMOR', NULL, NULL, NULL, NULL, NULL),
(61, 1, 1, 'GNOSSOS', NULL, NULL, NULL, NULL, NULL),
(62, 2, 1, 'NOLA IS CALLING', NULL, NULL, NULL, NULL, NULL),
(63, 1, 1, 'LADYLIKE LILY', NULL, NULL, NULL, NULL, NULL),
(64, 1, 1, 'SOUL BETON', NULL, NULL, NULL, NULL, NULL),
(65, 1, 1, 'MADALITSO BAND', NULL, NULL, NULL, NULL, NULL),
(66, 1, 1, 'BOUM', NULL, NULL, NULL, NULL, NULL),
(67, 1, 1, 'FRANCKY GOES TO POINTE À PITRE', NULL, NULL, NULL, NULL, NULL),
(68, 1, 1, 'CHAISES MUSICALES', NULL, NULL, NULL, NULL, NULL),
(69, 1, 1, 'LA BOUCLE EST BOUCLEE', NULL, NULL, NULL, NULL, NULL),
(70, 1, 1, 'CAPTAIN PARADE', NULL, NULL, NULL, NULL, NULL),
(71, 1, 1, 'DOGZILLA', NULL, NULL, NULL, NULL, NULL),
(72, 8, 1, 'THE MONSTERS', NULL, NULL, NULL, NULL, NULL),
(73, 1, 1, 'STRONG COME-ONS', NULL, NULL, NULL, NULL, NULL),
(74, 1, 1, 'OUAI STEPHANE', NULL, NULL, NULL, NULL, NULL),
(75, 5, 1, 'PHOENICIAN DRIVE', NULL, NULL, NULL, NULL, NULL),
(76, 4, 1, 'CROWS', NULL, NULL, NULL, NULL, NULL),
(77, 4, 1, 'BIG JOANIE', NULL, NULL, NULL, NULL, NULL),
(78, 4, 1, 'CASSELS', NULL, NULL, NULL, NULL, NULL),
(79, 1, 1, 'JARDIN', NULL, NULL, NULL, NULL, NULL),
(80, 1, 1, 'DEWAERE', NULL, NULL, NULL, NULL, NULL),
(81, 1, 1, 'STUFFED FOXES', NULL, NULL, NULL, NULL, NULL),
(82, 9, 1, 'ALTIN GÜN', NULL, NULL, NULL, NULL, NULL),
(83, 5, 1, 'GLAUQUE', NULL, NULL, NULL, NULL, NULL),
(84, 4, 1, 'BLACK COUNTRY, NEW ROAD', NULL, NULL, NULL, NULL, NULL),
(85, 1, 1, 'AMBEYANCE', NULL, NULL, NULL, NULL, NULL),
(86, 2, 1, 'MYSTIC BRAVES', NULL, NULL, NULL, NULL, NULL),
(87, 4, 1, 'ROZI PLAIN', NULL, NULL, NULL, NULL, NULL),
(88, 1, 1, 'HAïKUS NUMÉRIQUES', NULL, NULL, NULL, NULL, NULL),
(89, 2, 1, 'THE MYSTERY LIGHTS', NULL, NULL, NULL, NULL, NULL),
(90, 1, 1, 'IRENE DRESEL', NULL, NULL, NULL, NULL, NULL),
(91, 5, 1, 'MONOLITHE NOIR', NULL, NULL, NULL, NULL, NULL),
(92, 23, 1, 'JONATHAN BREE', NULL, NULL, NULL, NULL, NULL),
(93, 4, 1, 'LICE', NULL, NULL, NULL, NULL, NULL),
(94, 9, 1, 'ANIMISTIC BELIEFS', NULL, NULL, NULL, NULL, NULL),
(95, 1, 1, 'BRACCO', NULL, NULL, NULL, NULL, NULL),
(96, 1, 1, 'DUST LOVERS', NULL, NULL, NULL, NULL, NULL),
(97, 1, 1, 'TIMIDITE', NULL, NULL, NULL, NULL, NULL),
(98, 1, 1, 'CHAOS RULES', NULL, NULL, NULL, NULL, NULL),
(99, 1, 1, 'NAMDOSE', NULL, NULL, NULL, NULL, NULL),
(100, 1, 1, 'THÉ VANILLE', NULL, NULL, NULL, NULL, NULL),
(101, 1, 1, 'VAUDOU GAME', NULL, NULL, NULL, NULL, NULL),
(102, 1, 1, 'DAMILY', NULL, NULL, NULL, NULL, NULL),
(103, 1, 1, 'ARNAUD REBOTINI', NULL, NULL, NULL, NULL, NULL),
(104, 1, 1, 'SILENT PARTY', NULL, NULL, NULL, NULL, NULL),
(105, 1, 1, 'RED LINE CROSSERS', NULL, NULL, NULL, NULL, NULL),
(106, 1, 1, 'TRACY DE SA', NULL, NULL, NULL, NULL, NULL),
(107, 4, 1, 'SQUID', NULL, NULL, NULL, NULL, NULL),
(108, 5, 1, 'KOBO', NULL, NULL, NULL, NULL, NULL),
(109, 2, 1, 'HA SIZZLE', NULL, NULL, NULL, NULL, NULL),
(110, 1, 1, 'LES CONTRE-VISITES GUIDÉES PAR JEROME POULAIN', NULL, NULL, NULL, NULL, NULL),
(111, 1, 1, 'CATASTROPHE', NULL, NULL, NULL, NULL, NULL),
(112, 1, 1, 'GRANDE', NULL, NULL, NULL, NULL, NULL),
(113, 3, 1, 'NIKLAS PASCHBURG', NULL, NULL, NULL, NULL, NULL),
(114, 1, 1, 'MATHEM & TRICKS', NULL, NULL, NULL, NULL, NULL),
(115, 5, 1, 'IT IT ANITA', NULL, NULL, NULL, NULL, NULL),
(116, 5, 1, 'ENDLESS DIVE', NULL, NULL, NULL, NULL, NULL),
(117, 6, 1, 'MÉLISSA LAVEAUX', NULL, NULL, NULL, NULL, NULL),
(118, 1, 1, 'JAïA ROSE', NULL, NULL, NULL, NULL, NULL),
(119, 12, 1, 'ALEX CAMERON', NULL, NULL, NULL, NULL, NULL),
(120, 12, 1, 'JACK LADDER', NULL, NULL, NULL, NULL, NULL),
(121, 1, 1, 'VERYDUB', NULL, NULL, NULL, NULL, NULL),
(122, 1, 1, 'CABARET CONTEMPORAIN', NULL, NULL, NULL, NULL, NULL),
(123, 1, 1, 'RORAIMA', NULL, NULL, NULL, NULL, NULL),
(124, 1, 1, 'HIGH TONE', NULL, NULL, NULL, NULL, NULL),
(125, 13, 1, 'CLINTON FEARON', NULL, NULL, NULL, NULL, NULL),
(126, 1, 1, 'GUIVE & THE ORA', NULL, NULL, NULL, NULL, NULL),
(127, 1, 1, 'LAST TRAIN', NULL, NULL, NULL, NULL, NULL),
(128, 1, 1, 'NORMA', NULL, NULL, NULL, NULL, NULL),
(129, 1, 1, 'LA RELÈVE', NULL, NULL, NULL, NULL, NULL),
(130, 1, 1, 'OPEN MIC', NULL, NULL, NULL, NULL, NULL),
(131, 1, 1, 'TACHYCARDIE', NULL, NULL, NULL, NULL, NULL),
(132, 8, 1, 'HYPERCULTE', NULL, NULL, NULL, NULL, NULL),
(133, 1, 1, 'SPELTERINI', NULL, NULL, NULL, NULL, NULL),
(134, 1, 1, 'MAXENSS', NULL, NULL, NULL, NULL, NULL),
(135, 1, 1, 'STENSY', NULL, NULL, NULL, NULL, NULL),
(136, 1, 1, 'SZ', NULL, NULL, NULL, NULL, NULL),
(137, 1, 1, 'DAT POLITICS', NULL, NULL, NULL, NULL, NULL),
(138, 1, 1, 'FELIX KUBIN (LIVE)', NULL, NULL, NULL, NULL, NULL),
(139, 1, 1, 'RAY COLETT', NULL, NULL, NULL, NULL, NULL),
(140, NULL, 4, 'NYC', NULL, NULL, NULL, NULL, NULL),
(141, 2, 1, 'BOY HARSHER', NULL, NULL, NULL, NULL, NULL),
(142, 1, 1, 'HANTE', NULL, NULL, NULL, NULL, NULL),
(143, 14, 1, 'BROR GUNNAR JANSSON', NULL, NULL, NULL, NULL, NULL),
(144, 15, 1, 'BONGEZIWE MABANDLA', NULL, NULL, NULL, NULL, NULL),
(145, 8, 1, 'THE YOUNG GODS', NULL, NULL, NULL, NULL, NULL),
(146, 1, 1, 'MOVEMENT OF RETURN', NULL, NULL, NULL, NULL, NULL),
(147, 4, 1, 'ARCHIVE', NULL, NULL, NULL, NULL, NULL),
(148, 2, 1, 'J.S ONDARA', NULL, NULL, NULL, NULL, NULL),
(149, 1, 1, 'BOBBIE', NULL, NULL, NULL, NULL, NULL),
(150, 12, 1, 'THE CHATS', NULL, NULL, NULL, NULL, NULL),
(151, 12, 1, 'CLOWNS', NULL, NULL, NULL, NULL, NULL),
(152, 12, 1, 'CROCODYLUS', NULL, NULL, NULL, NULL, NULL),
(153, 1, 1, 'KEM', NULL, NULL, NULL, NULL, NULL),
(154, 1, 1, 'LA PETITE', NULL, NULL, NULL, NULL, NULL),
(156, NULL, 3, 'AMENRA', NULL, NULL, NULL, NULL, NULL),
(157, NULL, 3, 'REGARDE LES HOMMES TOMBER', NULL, NULL, NULL, NULL, NULL),
(158, NULL, 3, 'HUSTLA', NULL, NULL, NULL, NULL, NULL),
(159, NULL, 3, 'NERO', NULL, NULL, NULL, NULL, NULL),
(160, NULL, 3, 'HIPPOCAMPE FOU', NULL, NULL, NULL, NULL, NULL),
(161, NULL, 3, 'LINE TEN', NULL, NULL, NULL, NULL, NULL),
(162, NULL, 3, 'ARNO\'N\'JOY', NULL, NULL, NULL, NULL, NULL),
(165, NULL, 3, 'PAUL OBERHEIM', NULL, NULL, NULL, NULL, NULL),
(166, NULL, 3, 'JON RUNDELL', NULL, NULL, NULL, NULL, NULL),
(167, NULL, 3, 'ARTHUR H', NULL, NULL, NULL, NULL, NULL),
(168, NULL, 3, 'ALEJANDRA RIBERA', NULL, NULL, NULL, NULL, NULL),
(169, NULL, 3, 'JESSICA 93', NULL, NULL, NULL, NULL, NULL),
(170, NULL, 3, 'PROHIBITION', NULL, NULL, NULL, NULL, NULL),
(171, NULL, 3, 'DABASS', NULL, NULL, NULL, NULL, NULL),
(172, NULL, 3, 'PERSIAN', NULL, NULL, NULL, NULL, NULL),
(173, NULL, 3, 'MESSIR EUH', NULL, NULL, NULL, NULL, NULL),
(174, NULL, 3, 'KATUCHAT', NULL, NULL, NULL, NULL, NULL),
(175, NULL, 3, 'COTTON CLAW', NULL, NULL, NULL, NULL, NULL),
(176, NULL, 3, 'HYDRA', NULL, NULL, NULL, NULL, NULL),
(177, NULL, 3, 'COMIX DEL BAGIO', NULL, NULL, NULL, NULL, NULL),
(178, NULL, 3, 'MC FLY DJ', NULL, NULL, NULL, NULL, NULL),
(179, NULL, 3, 'TAMBOUR BATTANT', NULL, NULL, NULL, NULL, NULL),
(181, NULL, 3, 'HYPHEN HYPHEN', NULL, NULL, NULL, NULL, NULL),
(182, NULL, 3, 'JAIN', NULL, NULL, NULL, NULL, NULL),
(183, NULL, 3, 'JERRY SPRINGER', NULL, NULL, NULL, NULL, NULL),
(184, 1, 1, 'SMILE JAMAICA SOUND SYSTEM', NULL, '<p>Sound v&eacute;t&eacute;ran du milieu orl&eacute;anais, SMILE JAMAICA f&ecirc;tera bient&ocirc;t ses 30 ans d&rsquo;existence et d&rsquo;activisme reggae : production de mix tape, &eacute;mission de radio, 1&egrave;res parties de (Morgan Heritage, Tiken Jah Fakoly, Skatalites,Dub inc..). Chris ,Sly et Nardo enchainent les s&eacute;lections toujours en vinyles. Roots, rub a dub ,dancehall et stepper dans un style d&eacute;tendu mais dans l&rsquo;esprit Raggamuffin des sound system des ann&eacute;es 90.</p>', NULL, NULL, NULL),
(185, NULL, 3, 'INTERLION SOUND', NULL, NULL, NULL, NULL, NULL),
(186, NULL, 3, 'HEARTICAL SOUND', NULL, NULL, NULL, NULL, NULL),
(187, NULL, 3, 'AL CAMPBEL BACKED BY GUIDING STAR', NULL, NULL, NULL, NULL, NULL),
(188, NULL, 3, 'MICHEL SPIEL', NULL, NULL, NULL, NULL, NULL),
(189, NULL, 3, 'ROMAIN PLAY', NULL, NULL, NULL, NULL, NULL),
(190, NULL, 3, 'ARK', NULL, NULL, NULL, NULL, NULL),
(191, NULL, 3, 'THE DATAMANCERS', NULL, NULL, NULL, NULL, NULL),
(193, NULL, 3, 'BAVOOG AVERS', NULL, NULL, NULL, NULL, NULL),
(194, 1, 1, 'MASS HYSTERIA', NULL, NULL, NULL, NULL, NULL),
(195, NULL, 3, 'BUKOWSKI', NULL, NULL, NULL, NULL, NULL),
(196, NULL, 3, 'HYAENA', NULL, NULL, NULL, NULL, NULL),
(197, NULL, 3, 'HOLDING SAND', NULL, NULL, NULL, NULL, NULL),
(198, NULL, 3, 'PASCAL PARISOT', NULL, NULL, NULL, NULL, NULL),
(199, NULL, 3, 'FEU! CHATTERTON', NULL, NULL, NULL, NULL, NULL),
(200, NULL, 3, 'PARAD', NULL, NULL, NULL, NULL, NULL),
(201, 1, 1, 'LES WAMPAS', NULL, NULL, NULL, NULL, NULL),
(202, NULL, 3, 'TWISTER COVER', NULL, NULL, NULL, NULL, NULL),
(203, NULL, 3, 'COLLECTIF MARTINE À LA PLAGE', NULL, NULL, NULL, NULL, NULL),
(205, NULL, 3, 'MOH KOUYATÉ', NULL, NULL, NULL, NULL, NULL),
(207, NULL, 3, 'GIANT SAND', NULL, NULL, NULL, NULL, NULL),
(208, NULL, 3, 'JUNIUS MEYVANT', NULL, NULL, NULL, NULL, NULL),
(209, NULL, 3, 'PHILÉMONE', NULL, NULL, NULL, NULL, NULL),
(210, NULL, 3, '23 : 31', NULL, NULL, NULL, NULL, NULL),
(211, NULL, 3, 'SUPERPOZE', NULL, NULL, NULL, NULL, NULL),
(212, NULL, 3, 'LES GORDON', NULL, NULL, NULL, NULL, NULL),
(213, NULL, 3, 'DJ VIVI', NULL, NULL, NULL, NULL, NULL),
(214, NULL, 3, 'LES VOLLEYEURS', NULL, NULL, NULL, NULL, NULL),
(216, NULL, 3, 'TONTON', NULL, NULL, NULL, NULL, NULL),
(217, NULL, 3, 'FAKE IDEA', NULL, NULL, NULL, NULL, NULL),
(218, NULL, 3, 'JONATHAN TERREL', NULL, NULL, NULL, NULL, NULL),
(219, NULL, 3, 'VALD', NULL, NULL, NULL, NULL, NULL),
(220, NULL, 3, 'L.O.A.S', NULL, NULL, NULL, NULL, NULL),
(221, NULL, 3, 'NAÂMAN', NULL, NULL, NULL, NULL, NULL),
(222, NULL, 3, 'SARAH LUGO', NULL, NULL, NULL, NULL, NULL),
(223, NULL, 3, 'ROOM 204', NULL, NULL, NULL, NULL, NULL),
(225, NULL, 3, 'HEARTBEAT PARADE', NULL, NULL, NULL, NULL, NULL),
(226, NULL, 3, 'NEURONE', NULL, NULL, NULL, NULL, NULL),
(227, NULL, 3, 'DJ K-NOBEE', NULL, NULL, NULL, NULL, NULL),
(228, NULL, 3, 'LITTLE FINGERZ', NULL, NULL, NULL, NULL, NULL),
(229, NULL, 3, 'DJ MALS', NULL, NULL, NULL, NULL, NULL),
(230, NULL, 3, 'DEBOUT SUR LE ZINC', NULL, NULL, NULL, NULL, NULL),
(231, NULL, 3, 'ACORPS DE RUE', NULL, NULL, NULL, NULL, NULL),
(232, NULL, 3, 'HISTOIRE PAPIER', NULL, NULL, NULL, NULL, NULL),
(233, NULL, 3, 'BERTRAND BELIN', NULL, NULL, NULL, NULL, NULL),
(234, NULL, 3, 'ARLT', NULL, NULL, NULL, NULL, NULL),
(235, 1, 1, 'GRAVITY SLAVES', NULL, NULL, NULL, NULL, NULL),
(236, NULL, 3, 'WELCOME NOISE', NULL, NULL, NULL, NULL, NULL),
(237, NULL, 3, 'NOT SCIENTISTS', NULL, NULL, NULL, NULL, NULL),
(238, NULL, 3, 'JEANNE ADDED', NULL, NULL, NULL, NULL, NULL),
(239, NULL, 3, 'GRAND BLANC', NULL, NULL, NULL, NULL, NULL),
(240, NULL, 3, 'DEFEATER', NULL, NULL, NULL, NULL, NULL),
(241, NULL, 3, 'BREAK EVEN', NULL, NULL, NULL, NULL, NULL),
(242, NULL, 3, 'KIDS INSANE', NULL, NULL, NULL, NULL, NULL),
(243, NULL, 3, 'POLAIR', NULL, NULL, NULL, NULL, NULL),
(244, NULL, 3, 'ESPIIEM', NULL, NULL, NULL, NULL, NULL),
(245, NULL, 3, 'EFF GEE', NULL, NULL, NULL, NULL, NULL),
(246, NULL, 3, 'LELEX LUTHOR', NULL, NULL, NULL, NULL, NULL),
(247, NULL, 3, 'DJ CHILEA\'S', NULL, NULL, NULL, NULL, NULL),
(248, NULL, 3, 'KENOSHA BIRD', NULL, NULL, NULL, NULL, NULL),
(250, NULL, 3, 'MANSFIELD TYA', NULL, NULL, NULL, NULL, NULL),
(251, NULL, 3, 'BOYS IN LILIES', NULL, NULL, NULL, NULL, NULL),
(252, NULL, 3, 'KACEM WAPALEK', NULL, NULL, NULL, NULL, NULL),
(253, NULL, 3, 'KILLASON', NULL, NULL, NULL, NULL, NULL),
(254, NULL, 3, 'WEIRD OMEN', NULL, NULL, NULL, NULL, NULL),
(255, NULL, 3, 'THE JACKETS', NULL, NULL, NULL, NULL, NULL),
(256, NULL, 3, 'DJ DUTERCHE', NULL, NULL, NULL, NULL, NULL),
(258, NULL, 3, 'JULIAN JEWEIL', NULL, NULL, NULL, NULL, NULL),
(259, NULL, 3, 'FRANCOIS 1ER', NULL, NULL, NULL, NULL, NULL),
(260, NULL, 3, 'D\'JEED', NULL, NULL, NULL, NULL, NULL),
(261, NULL, 3, 'MAZE', NULL, NULL, NULL, NULL, NULL),
(262, NULL, 3, 'GL8 B2B', NULL, NULL, NULL, NULL, NULL),
(263, NULL, 3, 'RADIO MINUS SOUND SYSTEM', NULL, NULL, NULL, NULL, NULL),
(264, NULL, 3, 'CHATEAU LATEUF', NULL, NULL, NULL, NULL, NULL),
(265, NULL, 3, 'BUBZZ', NULL, NULL, NULL, NULL, NULL),
(266, NULL, 3, 'MYSTERIOUS KID', NULL, NULL, NULL, NULL, NULL),
(267, NULL, 3, 'TASSIN', NULL, NULL, NULL, NULL, NULL),
(268, NULL, 3, 'PLASTICSUN', NULL, NULL, NULL, NULL, NULL),
(269, NULL, 3, 'MICHEL CLOUP DUO', NULL, NULL, NULL, NULL, NULL),
(270, NULL, 3, 'HOLY CHIPS', NULL, NULL, NULL, NULL, NULL),
(271, NULL, 3, 'MAJNUN', NULL, NULL, NULL, NULL, NULL),
(272, NULL, 3, 'DJS RUNOUT GROOVE', NULL, NULL, NULL, NULL, NULL),
(273, NULL, 3, 'THE HOTELIER', NULL, NULL, NULL, NULL, NULL),
(274, NULL, 3, 'ROZWELL KID', NULL, NULL, NULL, NULL, NULL),
(275, NULL, 3, 'PUTS MARIE', NULL, NULL, NULL, NULL, NULL),
(276, NULL, 3, 'JESUS CHRIST FASHION BARBE', NULL, NULL, NULL, NULL, NULL),
(277, NULL, 3, 'DARK CIRCUS', NULL, NULL, NULL, NULL, NULL),
(278, NULL, 3, 'TROY VON BALTHAZAR', NULL, NULL, NULL, NULL, NULL),
(279, NULL, 3, 'C DUNCAN', NULL, NULL, NULL, NULL, NULL),
(280, NULL, 3, 'ALDOUS HARDING', NULL, NULL, NULL, NULL, NULL),
(281, NULL, 3, 'PETER HOOK AND THE LIGHT', NULL, NULL, NULL, NULL, NULL),
(282, NULL, 3, 'RUSSIAN CIRCLES', NULL, NULL, NULL, NULL, NULL),
(283, NULL, 3, 'THIS WILL DESTROY YOU', NULL, NULL, NULL, NULL, NULL),
(284, NULL, 3, 'BACHAR MAR-KHALIFÉ', NULL, NULL, NULL, NULL, NULL),
(285, NULL, 3, 'OXMO PUCCINO', NULL, NULL, NULL, NULL, NULL),
(286, NULL, 3, 'NIVEK', NULL, NULL, NULL, NULL, NULL),
(287, NULL, 3, 'MAX VOLUME', NULL, NULL, NULL, NULL, NULL),
(288, NULL, 3, 'PRINCE OFF', NULL, NULL, NULL, NULL, NULL),
(289, NULL, 3, 'DORIEN', NULL, NULL, NULL, NULL, NULL),
(290, NULL, 3, 'MAGDA & SERGE', NULL, NULL, NULL, NULL, NULL),
(291, NULL, 3, 'DJ MIKE ROCK', NULL, NULL, NULL, NULL, NULL),
(292, NULL, 3, 'THE DUDE', NULL, NULL, NULL, NULL, NULL),
(293, NULL, 3, 'BENYAMIN METAL MIAOW', NULL, NULL, NULL, NULL, NULL),
(294, NULL, 3, 'UNSANE', NULL, NULL, NULL, NULL, NULL),
(295, NULL, 3, 'SOFY MAJOR', NULL, NULL, NULL, NULL, NULL),
(296, NULL, 3, 'SOUPLESSE', NULL, NULL, NULL, NULL, NULL),
(297, NULL, 3, 'MAAS', NULL, NULL, NULL, NULL, NULL),
(298, NULL, 3, 'NAUFRAGE DE LA MONTÉE', NULL, NULL, NULL, NULL, NULL),
(299, NULL, 3, 'GABLÉ', NULL, NULL, NULL, NULL, NULL),
(300, NULL, 3, 'HAR MAR SUPERSTAR', NULL, NULL, NULL, NULL, NULL),
(301, NULL, 3, 'MISTER ELEGANZ', NULL, NULL, NULL, NULL, NULL),
(302, NULL, 3, 'LA MACHINE', NULL, NULL, NULL, NULL, NULL),
(303, NULL, 3, 'MATTCUL', NULL, NULL, NULL, NULL, NULL),
(304, NULL, 3, 'DJ PORTE', NULL, NULL, NULL, NULL, NULL),
(305, NULL, 3, 'SUPAFUH', NULL, NULL, NULL, NULL, NULL),
(306, NULL, 3, 'LA VIE D\'ARTISTE', NULL, NULL, NULL, NULL, NULL),
(307, NULL, 3, 'JIM MURPLE MEMORIAL', NULL, NULL, NULL, NULL, NULL),
(308, NULL, 3, 'HUGO FREEGOW', NULL, NULL, NULL, NULL, NULL),
(309, NULL, 3, 'FRANCOIS HADJI-LAZARO', NULL, NULL, NULL, NULL, NULL),
(310, NULL, 3, 'XAVIER STUBBE', NULL, NULL, NULL, NULL, NULL),
(311, NULL, 3, 'BOBUN FEVER', NULL, NULL, NULL, NULL, NULL),
(312, NULL, 3, 'NASHVILLE PUSSY', NULL, NULL, NULL, NULL, NULL),
(313, NULL, 3, 'NO SIGN, NOTHING', NULL, NULL, NULL, NULL, NULL),
(314, NULL, 3, 'ETHYLOSEX', NULL, NULL, NULL, NULL, NULL),
(315, NULL, 3, 'ANGLE MORT & CLIGNOTANT', NULL, NULL, NULL, NULL, NULL),
(316, NULL, 3, 'GO MARCH', NULL, NULL, NULL, NULL, NULL),
(317, NULL, 3, 'HER', NULL, NULL, NULL, NULL, NULL),
(318, NULL, 3, 'OCEAN WISDOM', NULL, NULL, NULL, NULL, NULL),
(319, NULL, 3, 'BATUK', NULL, NULL, NULL, NULL, NULL),
(320, NULL, 3, 'CHEVALIEN', NULL, NULL, NULL, NULL, NULL),
(321, NULL, 3, 'GRAUSS BOUTIQUE', NULL, NULL, NULL, NULL, NULL),
(323, NULL, 3, 'BLACK LIPS', NULL, NULL, NULL, NULL, NULL),
(324, NULL, 3, 'BOMBAY', NULL, NULL, NULL, NULL, NULL),
(325, NULL, 3, 'FINDLAY', NULL, NULL, NULL, NULL, NULL),
(326, NULL, 3, 'DELTA SLEEP', NULL, NULL, NULL, NULL, NULL),
(327, NULL, 3, 'DISSIDENT', NULL, NULL, NULL, NULL, NULL),
(328, NULL, 3, 'NINOS DU BRASIL', NULL, NULL, NULL, NULL, NULL),
(329, NULL, 3, 'SAMBA DE LA MUERTE', NULL, NULL, NULL, NULL, NULL),
(330, NULL, 3, 'THROES + THE SHINE', NULL, NULL, NULL, NULL, NULL),
(331, NULL, 3, 'RIVAL CONSOLES', NULL, NULL, NULL, NULL, NULL),
(332, NULL, 3, 'CLAUDE', NULL, NULL, NULL, NULL, NULL),
(333, NULL, 3, 'I AM STRAMGRAM', NULL, NULL, NULL, NULL, NULL),
(334, NULL, 3, 'FATHER', NULL, NULL, NULL, NULL, NULL),
(335, NULL, 3, 'SHIN-SKI', NULL, NULL, NULL, NULL, NULL),
(336, NULL, 3, 'PAUW', NULL, NULL, NULL, NULL, NULL),
(337, NULL, 3, 'YAK', NULL, NULL, NULL, NULL, NULL),
(338, NULL, 3, 'FOREIGN DIPLOMATS', NULL, NULL, NULL, NULL, NULL),
(339, NULL, 3, 'WE ARE WOLVES', NULL, NULL, NULL, NULL, NULL),
(340, NULL, 3, 'DBFC', NULL, NULL, NULL, NULL, NULL),
(341, NULL, 3, 'MAESTRO', NULL, NULL, NULL, NULL, NULL),
(342, NULL, 3, 'SILENT DISCO', NULL, NULL, NULL, NULL, NULL),
(343, NULL, 3, 'BLAST', NULL, NULL, NULL, NULL, NULL),
(345, NULL, 3, 'ELECTRIC ELECTRIC', NULL, NULL, NULL, NULL, NULL),
(346, NULL, 3, 'LA MVERTE', NULL, NULL, NULL, NULL, NULL),
(347, NULL, 3, 'BLICK BASSY', NULL, NULL, NULL, NULL, NULL),
(348, NULL, 3, 'DAN SAN', NULL, NULL, NULL, NULL, NULL),
(349, NULL, 3, 'LIESA VAN DER AA', NULL, NULL, NULL, NULL, NULL),
(350, NULL, 3, 'WE CAN BE HEROES', NULL, NULL, NULL, NULL, NULL),
(351, NULL, 3, 'YOUG BLOOD BRASS BAND', NULL, NULL, NULL, NULL, NULL),
(352, NULL, 3, 'G.BONSON LIVE', NULL, NULL, NULL, NULL, NULL),
(353, NULL, 3, 'YOB', NULL, NULL, NULL, NULL, NULL),
(354, NULL, 3, 'BLACK COBRA', NULL, NULL, NULL, NULL, NULL),
(355, NULL, 3, 'ALA.NI', NULL, NULL, NULL, NULL, NULL),
(356, NULL, 3, 'WOVENHAND', NULL, NULL, NULL, NULL, NULL),
(357, NULL, 3, 'EMMA RUTH RUNDLE', NULL, NULL, NULL, NULL, NULL),
(358, NULL, 3, 'MERIDIAN BROTHERS', NULL, NULL, NULL, NULL, NULL),
(359, NULL, 3, 'LAKKO', NULL, NULL, NULL, NULL, NULL),
(360, NULL, 3, 'SO LO LO', NULL, NULL, NULL, NULL, NULL),
(361, NULL, 3, 'BLUE BABIL', NULL, NULL, NULL, NULL, NULL),
(362, NULL, 3, 'SOOM T', NULL, NULL, NULL, NULL, NULL),
(363, NULL, 3, 'JSTAR', NULL, NULL, NULL, NULL, NULL),
(364, NULL, 3, 'THE RAINBONES', NULL, NULL, NULL, NULL, NULL),
(365, NULL, 3, 'TACHE', NULL, NULL, NULL, NULL, NULL),
(366, NULL, 3, 'DJ NASAL', NULL, NULL, NULL, NULL, NULL),
(367, NULL, 3, 'CARPENTER BRUT', NULL, NULL, NULL, NULL, NULL),
(368, NULL, 3, 'GARGANTUA', NULL, NULL, NULL, NULL, NULL),
(369, NULL, 3, 'WAND', NULL, NULL, NULL, NULL, NULL),
(370, NULL, 3, 'NOYADES', NULL, NULL, NULL, NULL, NULL),
(371, NULL, 3, 'EASY SKANKIN', NULL, NULL, NULL, NULL, NULL),
(372, NULL, 3, 'BALL I STICK', NULL, NULL, NULL, NULL, NULL),
(373, NULL, 3, 'POSITIVE IRIE', NULL, NULL, NULL, NULL, NULL),
(374, NULL, 3, 'ALPHEUS', NULL, NULL, NULL, NULL, NULL),
(375, NULL, 3, 'M2T LA SINGERIE', NULL, NULL, NULL, NULL, NULL),
(376, NULL, 3, 'GENERAL GOOD', NULL, NULL, NULL, NULL, NULL),
(377, NULL, 3, 'AFRICAN HERITAGE', NULL, NULL, NULL, NULL, NULL),
(378, NULL, 3, 'DUB FI DUB', NULL, NULL, NULL, NULL, NULL),
(379, NULL, 3, 'WAX TAYLOR', NULL, NULL, NULL, NULL, NULL),
(380, NULL, 3, 'GHOST OF CHRISTMAS', NULL, NULL, NULL, NULL, NULL),
(381, NULL, 3, 'ARNO', NULL, NULL, NULL, NULL, NULL),
(382, NULL, 3, 'MELL', NULL, NULL, NULL, NULL, NULL),
(383, NULL, 3, 'SERATONES', NULL, NULL, NULL, NULL, NULL),
(384, NULL, 3, 'THE ANIMEN', NULL, NULL, NULL, NULL, NULL),
(386, NULL, 3, 'UKANDANZ', NULL, NULL, NULL, NULL, NULL),
(387, NULL, 3, 'CANNIBALES & VAHINÉS', NULL, NULL, NULL, NULL, NULL),
(388, NULL, 3, 'MESPARROW', NULL, NULL, NULL, NULL, NULL),
(389, NULL, 3, 'ANNA', NULL, NULL, NULL, NULL, NULL),
(390, NULL, 3, 'PINCE', NULL, NULL, NULL, NULL, NULL),
(391, NULL, 3, 'DOLL IS MINE', NULL, NULL, NULL, NULL, NULL),
(392, NULL, 3, 'LIL CRACK', NULL, NULL, NULL, NULL, NULL),
(393, NULL, 3, 'AGAINST HUMANITY', NULL, NULL, NULL, NULL, NULL),
(394, NULL, 3, 'THE CLAMPS', NULL, NULL, NULL, NULL, NULL),
(395, NULL, 3, 'L-KIND B2B PERE UBU', NULL, NULL, NULL, NULL, NULL),
(396, NULL, 3, 'FUZZY LOGIC', NULL, NULL, NULL, NULL, NULL),
(397, NULL, 3, 'COCOON', NULL, NULL, NULL, NULL, NULL),
(398, NULL, 3, 'LENPARROT', NULL, NULL, NULL, NULL, NULL),
(399, NULL, 3, 'SERIOUS ANNE', NULL, NULL, NULL, NULL, NULL),
(400, NULL, 3, 'NICO 100 COINS', NULL, NULL, NULL, NULL, NULL),
(401, NULL, 3, 'TOTORRO', NULL, NULL, NULL, NULL, NULL),
(402, NULL, 3, 'LA FEMME', NULL, NULL, NULL, NULL, NULL),
(403, NULL, 3, 'PETOSAURE', NULL, NULL, NULL, NULL, NULL),
(404, NULL, 3, 'REVIVOR', NULL, NULL, NULL, NULL, NULL),
(405, NULL, 3, 'LÉONARD', NULL, NULL, NULL, NULL, NULL),
(406, NULL, 3, 'CABALLERO & JEANJASS', NULL, NULL, NULL, NULL, NULL),
(407, NULL, 3, 'ROMÉO ELVIS', NULL, NULL, NULL, NULL, NULL),
(408, NULL, 3, 'RUFF', NULL, NULL, NULL, NULL, NULL),
(409, NULL, 3, 'FRUSTRATION', NULL, NULL, NULL, NULL, NULL),
(410, NULL, 3, 'PIERRE & BASTIEN', NULL, NULL, NULL, NULL, NULL),
(411, NULL, 3, 'CANNIBALE', NULL, NULL, NULL, NULL, NULL),
(412, NULL, 3, 'MøME', NULL, NULL, NULL, NULL, NULL),
(413, NULL, 3, 'AWIR LEON', NULL, NULL, NULL, NULL, NULL),
(415, NULL, 3, 'RÉFORME GRAPHIQUE', NULL, NULL, NULL, NULL, NULL),
(416, NULL, 3, 'FUTURE OF THE LEFT', NULL, NULL, NULL, NULL, NULL),
(417, NULL, 3, 'BISON BISOU', NULL, NULL, NULL, NULL, NULL),
(418, NULL, 3, 'FOOL SYSTEM', NULL, NULL, NULL, NULL, NULL),
(419, NULL, 3, 'LOS DISSIDENTES DEL SUCIO MOTEL', NULL, NULL, NULL, NULL, NULL),
(420, NULL, 3, 'HANGMAN\'S CHAIR', NULL, NULL, NULL, NULL, NULL),
(421, NULL, 3, 'GÉRARD BASTE', NULL, NULL, NULL, NULL, NULL),
(422, NULL, 3, 'BIFTY', NULL, NULL, NULL, NULL, NULL),
(423, NULL, 3, 'JOHNNY MAFIA', NULL, NULL, NULL, NULL, NULL),
(424, NULL, 3, 'REQUIN CHAGRIN', NULL, NULL, NULL, NULL, NULL),
(425, NULL, 3, 'GEORGIO', NULL, NULL, NULL, NULL, NULL),
(426, NULL, 3, 'NUSKY & VAATI', NULL, NULL, NULL, NULL, NULL),
(427, NULL, 3, 'ROTOR JAMBREKS', NULL, NULL, NULL, NULL, NULL),
(428, NULL, 3, 'LAS AVES', NULL, NULL, NULL, NULL, NULL),
(429, NULL, 3, 'FRENCH 79', NULL, NULL, NULL, NULL, NULL),
(430, NULL, 3, 'UPSEEN', NULL, NULL, NULL, NULL, NULL),
(431, NULL, 3, 'TIM', NULL, NULL, NULL, NULL, NULL),
(432, NULL, 3, 'DJ BASSADICT', NULL, NULL, NULL, NULL, NULL),
(433, NULL, 3, 'TASSIN B2B KYJAH', NULL, NULL, NULL, NULL, NULL),
(434, NULL, 3, 'GRAPHYT', NULL, NULL, NULL, NULL, NULL),
(435, NULL, 3, 'DJ AMC', NULL, NULL, NULL, NULL, NULL),
(436, NULL, 3, 'LEGENDARY SHACK SHAKERS', NULL, NULL, NULL, NULL, NULL),
(437, NULL, 3, 'THE SEX ORGANS', NULL, NULL, NULL, NULL, NULL),
(438, NULL, 3, 'YOUNG PARIS', NULL, NULL, NULL, NULL, NULL),
(439, NULL, 3, 'LESKA', NULL, NULL, NULL, NULL, NULL),
(440, NULL, 3, 'EMILY WELLS', NULL, NULL, NULL, NULL, NULL),
(441, NULL, 3, 'EMILIE ZOE', NULL, NULL, NULL, NULL, NULL),
(442, NULL, 3, 'BIG BUSINESS', NULL, NULL, NULL, NULL, NULL),
(443, NULL, 3, 'WHORES', NULL, NULL, NULL, NULL, NULL),
(444, 1, 1, 'LA RIPOSTE', NULL, '<p>La&nbsp;<strong>Riposte</strong>&nbsp;est un groupe compos&eacute; de plusieurs rappeurs, de plusieurs groupes :&nbsp;<strong>La Secte Anonyme</strong>&nbsp;(compos&eacute; de&nbsp;<strong>Baby-S</strong>&nbsp;et&nbsp;<strong>Kolt-D</strong>),&nbsp;<strong>Far-Ka</strong>,&nbsp;<strong>Zie</strong>,&nbsp;<strong>Kappa</strong>,&nbsp;<strong>J-Bal-Tareek</strong>,&nbsp;<strong>La Tcheka</strong>(avec&nbsp;<strong>Mortimer</strong>&nbsp;alias&nbsp;<strong>Youcef</strong>),&nbsp;<strong>La Sourie</strong>&nbsp;et du&nbsp;<strong>DJ 2SH&eacute;</strong>.</p>', NULL, NULL, NULL),
(445, 1, 1, 'QUITOMBO', NULL, NULL, NULL, NULL, NULL),
(446, 1, 1, 'FURIOUS FIESTA', NULL, NULL, NULL, NULL, NULL),
(447, 1, 1, 'SPOOK & THE GUAY', NULL, '<p><strong>Spook and the Guay</strong>, stylis&eacute;&nbsp;<strong>Spook &amp; the Guay</strong><a href=\"https://fr.wikipedia.org/wiki/Spook_and_the_Guay#cite_note-amgbio-1\">[1]</a>,<a href=\"https://fr.wikipedia.org/wiki/Spook_and_the_Guay#cite_note-:4-2\">[2]</a>, est un&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Groupe_musical\">groupe</a>&nbsp;de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Pop_rock\">pop rock</a>&nbsp;<a href=\"https://fr.wikipedia.org/wiki/France\">fran&ccedil;ais</a>, originaire de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Toulouse\">Toulouse</a>, en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Haute-Garonne\">Haute-Garonne</a>. Le groupe adopte un discours assez engag&eacute; pratiquant un&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Rock_alternatif\">rock alternatif</a>&nbsp;m&ecirc;l&eacute; de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Reggae\">reggae</a>,&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Ragga\">ragga</a>et&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Ska\">ska</a>. Le groupe est form&eacute; en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/1990_en_musique\">1990</a>&nbsp;et compte un total de trois albums studio, &mdash;&nbsp;<em>Mi Tierra</em>&nbsp;(1998),&nbsp;<em>Ocho rios</em>&nbsp;(1999), et&nbsp;<em>La Vida sonora</em>&nbsp;(2002)&nbsp;&mdash; et un album live,&nbsp;<em>Spook and the Guay en concert</em>&nbsp;(2001). Le groupe se s&eacute;pare en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/2005_en_musique\">2005</a>.</p>', NULL, NULL, NULL),
(448, 1, 1, 'NATTY TUFF', NULL, NULL, NULL, NULL, NULL),
(449, 1, 1, 'DJ MOON', NULL, NULL, NULL, NULL, NULL),
(452, 1, 1, 'DJ NICO', NULL, NULL, NULL, NULL, NULL),
(453, 1, 1, 'BOSCO', NULL, '<p>Dans les&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Ann%C3%A9es_1980\">ann&eacute;es 1980</a>, St&eacute;phane Bodin et Fran&ccedil;ois March&eacute; jouent uniquement les intros dans un groupe dans un lyc&eacute;e &agrave;&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Niort\">Niort</a>. Dans les&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Ann%C3%A9es_1990\">ann&eacute;es 1990</a>, ils se retrouvent &agrave;&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Paris\">Paris</a>&nbsp;et sortent leur premier album. Cet album, sorti sous le nom de&nbsp;<em>Bosco</em>&nbsp;en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/1998_en_musique\">1998</a>, est en r&eacute;alit&eacute; une s&eacute;rie de&nbsp;<a href=\"https://fr.wikipedia.org/wiki/D%C3%A9mo_(musique)\">d&eacute;mos</a>&nbsp;d&#39;un&nbsp;<a href=\"https://fr.wikipedia.org/wiki/%C3%89chantillonneur\">sampler</a>. Avec&nbsp;<em>Paramour</em>, leur deuxi&egrave;me album, Bosco utilisent 1&nbsp;200&nbsp;<a href=\"https://fr.wikipedia.org/wiki/%C3%89chantillon_(musique)\">samples</a>. Sur l&#39;album&nbsp;<em>Action</em>, ils utilisent cinq samplers<a href=\"https://fr.wikipedia.org/wiki/Bosco_(groupe)#cite_note-1\">[1]</a>.&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Sylvia_Tournerie\">Sylvia Tournerie</a>&nbsp;r&eacute;alise les pochettes de disques du groupe<a href=\"https://fr.wikipedia.org/wiki/Bosco_(groupe)#cite_note-2\">[2]</a>.</p>\r\n\r\n<p>Les deux membres du groupe forment ensuite, en&nbsp;<a href=\"https://fr.wikipedia.org/wiki/2003_en_musique\">2003</a>, le trio&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Prototypes_(groupe)\">Prototypes</a>, auteur du titre&nbsp;<em>Danse sur la merde</em>. Bosco est &eacute;galement connu pour avoir aid&eacute;&nbsp;<a href=\"https://fr.wikipedia.org/wiki/Stupeflip\">Stupeflip</a>&nbsp;&agrave; leurs d&eacute;buts<a href=\"https://fr.wikipedia.org/wiki/Bosco_(groupe)#cite_note-3\">[3]</a>.</p>\r\n\r\n<p>En&nbsp;<a href=\"https://fr.wikipedia.org/wiki/2016_en_musique\">2016</a>, Bosco fonde le label ind&eacute;pendant Delodio, qui &eacute;dite des musiques produites sur K7 dans les ann&eacute;es 1980 et jamais &eacute;dit&eacute;es<a href=\"https://fr.wikipedia.org/wiki/Bosco_(groupe)#cite_note-4\">[4]</a>.</p>', NULL, NULL, NULL),
(454, 1, 1, 'LES GRIFTERS', NULL, NULL, NULL, NULL, NULL),
(455, 1, 1, 'LES TROUS VERTS', NULL, NULL, NULL, NULL, NULL),
(456, 1, 1, 'ART 64', NULL, NULL, NULL, NULL, NULL),
(457, 1, 1, 'DARE DARE DEVIL', NULL, NULL, NULL, NULL, 'https://bananajuicerecords.bandcamp.com/album/dare-dare-devil-3'),
(458, 1, 1, 'D FRANCK', NULL, NULL, NULL, NULL, NULL),
(459, 1, 1, 'NDE', NULL, '<p>NDE est un groupe originaire d&#39;orl&eacute;ans qui fait partie de ces groupes qui ont r&eacute;volutionn&eacute; le rock ind&eacute;pendant fran&ccedil;ais durant la premi&egrave;re moiti&eacute; des ann&eacute;es 1990, parti d&#39;une base r&eacute;solument rock le groupe a progressivement &eacute;volu&eacute; vers une musique enti&egrave;rement &eacute;lectronique &agrave; partir de leur deuxi&egrave;me opus.</p>', NULL, NULL, NULL),
(460, 1, 1, 'ZENZILE', NULL, '<p>Groupe de dub originaire d&#39;Angers</p>', NULL, NULL, 'https://zenzile.bandcamp.com/music'),
(461, 1, 1, 'KAYAMOUTS', NULL, NULL, NULL, NULL, NULL),
(462, 1, 1, 'DUB HIGH SOUND SYSTEM', NULL, NULL, NULL, NULL, NULL),
(463, 1, 1, 'SKALITSA', NULL, NULL, NULL, NULL, NULL),
(464, 13, 1, 'THE SKATALITES', NULL, NULL, NULL, NULL, NULL),
(465, 1, 1, 'JAHN DARQ ORGASM', NULL, NULL, NULL, NULL, NULL),
(466, 1, 1, 'FABULOUS TROBADORS', NULL, NULL, NULL, NULL, NULL),
(467, 1, 1, 'DA MAKI FAMILIA', NULL, NULL, NULL, NULL, NULL),
(468, 1, 1, 'LO\'JO TRIBAN', NULL, NULL, NULL, NULL, NULL),
(469, 1, 1, 'ORANGE BLOSSOM', NULL, NULL, NULL, NULL, NULL),
(470, 1, 1, 'IMPROVISATORS DUB', NULL, NULL, NULL, NULL, NULL),
(471, 1, 1, 'K2R', NULL, NULL, NULL, NULL, NULL),
(472, 1, 1, 'THE ATOMIC SPUDS', NULL, NULL, NULL, NULL, 'https://theatomicspuds.bandcamp.com'),
(473, 1, 1, 'THE BEACH BITCHES', NULL, NULL, NULL, NULL, 'https://www.discogs.com/fr/artist/1367492-The-Beach-Bitches?srsltid=AfmBOorW1iWvSJjYh0PByNq9b_yVgCrf8Xpjz_gsJ50iaEmu5zwMaMVH'),
(474, 1, 1, 'MARCEL ET SON ORCHESTRE', NULL, NULL, NULL, NULL, NULL),
(475, 4, 1, 'ERNEST RANGLIN', NULL, NULL, NULL, NULL, NULL),
(476, 5, 1, 'NATACHA ATLAS', NULL, NULL, NULL, NULL, NULL),
(478, 1, 1, 'MEÏ TEÏ SHÔ', NULL, NULL, NULL, NULL, NULL),
(479, 1, 1, 'DYONISOS', NULL, NULL, NULL, NULL, NULL),
(480, 1, 1, 'BUBBLIES', NULL, NULL, NULL, NULL, NULL),
(481, 1, 1, 'ETHNICIANS', NULL, NULL, NULL, NULL, NULL),
(482, 1, 1, 'RAFIK', NULL, NULL, NULL, NULL, NULL),
(483, 1, 1, 'MISTER GANG', NULL, NULL, NULL, NULL, NULL),
(484, 1, 1, 'WIDDIM', NULL, NULL, NULL, NULL, NULL),
(485, 1, 1, 'HINT', NULL, NULL, NULL, NULL, NULL),
(486, 1, 1, 'GINGER ALE', NULL, NULL, NULL, NULL, NULL),
(487, 1, 1, 'BURNING HEADS', NULL, NULL, NULL, NULL, NULL),
(488, 1, 1, 'PORTOBELLO BONES', NULL, NULL, NULL, NULL, NULL),
(489, 29, 1, 'FEMI KUTI', NULL, NULL, NULL, NULL, NULL),
(490, 1, 1, 'BENABAR', NULL, NULL, NULL, NULL, NULL),
(491, 1, 1, 'LES FILS DE TEUPUH', NULL, NULL, NULL, NULL, NULL),
(492, 1, 1, 'MUKTA', NULL, NULL, NULL, NULL, NULL),
(493, 1, 1, 'TARAF ISTOLEI', NULL, NULL, NULL, NULL, NULL),
(494, 1, 1, 'EK-KHA', NULL, NULL, NULL, NULL, NULL),
(495, 1, 1, 'EZ3KIEL', NULL, NULL, NULL, NULL, NULL),
(496, 1, 1, 'MIX UP', NULL, NULL, NULL, NULL, NULL),
(497, 1, 1, '38 DUB BAND', NULL, NULL, NULL, NULL, NULL),
(498, 16, 1, 'DAARA J', NULL, NULL, NULL, NULL, NULL),
(499, 4, 1, 'MUSE', NULL, NULL, NULL, NULL, NULL),
(500, 1, 1, 'LTNO', NULL, NULL, NULL, NULL, NULL),
(501, 1, 3, 'FRANCKY BROWN', NULL, NULL, NULL, NULL, NULL),
(502, 1, 1, 'DJ ZEFF & MC T', NULL, NULL, NULL, NULL, NULL),
(503, 1, 1, 'TOMMY', NULL, NULL, NULL, NULL, NULL),
(504, 1, 1, 'EDGARD DE L\'EST', NULL, NULL, NULL, NULL, NULL),
(505, 1, 1, 'JASMINE BANDE', NULL, NULL, NULL, NULL, NULL),
(506, 1, 1, 'MANICOMIO', NULL, NULL, NULL, NULL, NULL),
(507, 1, 1, 'BLUE NOTE GROOVE', NULL, NULL, NULL, NULL, NULL),
(508, NULL, 1, 'JAM\'N\'BEER', NULL, NULL, NULL, NULL, NULL),
(509, 1, 1, 'DOGS', NULL, NULL, NULL, NULL, NULL),
(510, 1, 1, 'BRIGITTE BOP', NULL, NULL, NULL, NULL, NULL),
(511, 1, 1, 'LOFOFORA', NULL, NULL, NULL, NULL, NULL),
(512, 1, 1, 'BOOST', NULL, NULL, NULL, NULL, NULL),
(513, 1, 1, 'KARMA\'SUTRA', NULL, NULL, NULL, NULL, NULL),
(514, 1, 1, 'ERIK TRUFFAZ', NULL, NULL, NULL, NULL, NULL),
(515, 1, 1, 'DOLÉ', NULL, NULL, NULL, NULL, NULL),
(516, 1, 1, 'HOMELESS', NULL, NULL, NULL, NULL, NULL),
(517, 1, 1, 'SAïAN SUPA CREW', NULL, NULL, NULL, NULL, NULL),
(518, 1, 1, 'M (Matthieu Chedid)', NULL, NULL, NULL, NULL, NULL),
(519, 1, 1, 'TÉTÉ', NULL, NULL, NULL, NULL, NULL),
(520, 1, 1, 'DEUFRÉ / FRED', NULL, NULL, NULL, NULL, NULL),
(522, 1, 1, 'MATTHIEU MALON', NULL, NULL, NULL, NULL, NULL),
(523, 9, 1, 'NRA', NULL, NULL, NULL, NULL, NULL),
(524, 1, 1, 'SPICY BOX', NULL, NULL, NULL, NULL, NULL),
(525, 1, 1, 'CEUX QUI MARCHENT DEBOUT', NULL, NULL, NULL, NULL, NULL),
(526, 1, 1, 'GROOVIN\'HAIR', NULL, NULL, NULL, NULL, NULL),
(527, 1, 1, 'SKÜAL SYSTEM', NULL, NULL, NULL, NULL, NULL),
(537, 1, 1, 'GUIDING STAR SOUND SYSTEM', NULL, NULL, NULL, NULL, NULL),
(539, 1, 1, 'SO DEEP', NULL, '<p>Dj set / Mix acid house&#39; jazz</p>', NULL, NULL, NULL),
(540, 1, 1, 'DJ NICKO', NULL, NULL, NULL, NULL, NULL),
(541, 1, 1, 'BOOYAKA', NULL, NULL, NULL, NULL, NULL),
(544, 1, 1, 'RASTA BIGOUD', NULL, NULL, NULL, NULL, NULL),
(545, 1, 1, 'LYCANTHROPE', NULL, NULL, NULL, NULL, NULL),
(546, 1, 1, 'JAWA', NULL, NULL, NULL, NULL, NULL),
(547, 1, 1, 'SUGARKANE', NULL, NULL, NULL, NULL, NULL),
(548, 1, 1, 'NATSAT', NULL, NULL, NULL, NULL, NULL),
(549, 1, 1, 'COBWEB', NULL, NULL, NULL, NULL, NULL),
(550, 1, 1, 'KOHANN', NULL, NULL, NULL, NULL, NULL),
(551, 1, 1, 'BABYLON CIRCUS', NULL, NULL, NULL, NULL, NULL),
(552, 1, 1, 'MAROUSSE', NULL, NULL, NULL, NULL, NULL),
(553, 1, 1, 'COSMIC CONNECTION', NULL, NULL, NULL, NULL, NULL),
(554, 1, 1, 'KALY DUB', NULL, NULL, NULL, NULL, NULL),
(555, 1, 1, 'WILLYMAN ET MC FAMY', NULL, NULL, NULL, NULL, NULL),
(556, 1, 1, 'PUSHY', NULL, NULL, NULL, NULL, NULL),
(557, 1, 1, 'CORPORATION DUB', NULL, NULL, NULL, NULL, NULL),
(558, 30, 1, 'AKOSH S. UNIT', NULL, NULL, NULL, NULL, NULL),
(559, 1, 1, 'AUTHELAIN QUARTET', NULL, NULL, NULL, NULL, NULL),
(560, 1, 1, 'JEAN-LOUIS 2000', NULL, NULL, NULL, NULL, NULL),
(561, 1, 1, 'JEAN DE LA TOUFFE', NULL, NULL, NULL, NULL, NULL),
(562, 1, 1, 'RUBIN STEINER', NULL, NULL, NULL, NULL, NULL),
(563, 31, 3, 'MAMADY KEITA', NULL, NULL, NULL, NULL, NULL),
(564, 7, 1, 'OMAR SOSA SEXTET', NULL, NULL, NULL, NULL, NULL),
(565, 1, 1, 'ZUTIK MIX', NULL, NULL, NULL, NULL, NULL),
(566, 1, 1, 'BAHIA SON SYSTEM', NULL, NULL, NULL, NULL, NULL),
(567, 9, 1, 'I AGAINST I', NULL, NULL, NULL, NULL, NULL),
(568, 1, 1, 'GUEST', NULL, NULL, NULL, NULL, NULL),
(569, 2, 1, 'DOWN BY LAW', NULL, NULL, NULL, NULL, NULL),
(570, 1, 1, 'HUMAN BEAT BOX', NULL, NULL, NULL, NULL, NULL),
(571, 1, 1, 'DEAD POP CLUB', NULL, NULL, NULL, NULL, NULL),
(572, 1, 1, 'ENHANCER', NULL, NULL, NULL, NULL, NULL),
(573, NULL, 1, 'HIGGINS', NULL, NULL, NULL, NULL, NULL),
(576, 1, 1, 'SLEEPERS', NULL, NULL, NULL, NULL, NULL),
(577, 1, 1, 'MANTA MIX', NULL, NULL, NULL, NULL, NULL),
(578, NULL, 1, 'VIEUX COURS SMOKERS', NULL, NULL, NULL, NULL, NULL),
(579, 3, 1, 'BURNT FRIEDMAN', NULL, NULL, NULL, NULL, NULL),
(580, 3, 3, 'POLE', NULL, NULL, NULL, NULL, NULL),
(581, 2, 1, 'KIT CLAYTON', NULL, NULL, NULL, NULL, NULL),
(582, 2, 1, 'SUTEKH', NULL, NULL, NULL, NULL, NULL),
(583, 2, 1, 'PHOENECIA', NULL, NULL, NULL, NULL, NULL),
(584, 1, 1, 'OVERSOUL', NULL, NULL, NULL, NULL, NULL),
(585, 1, 1, 'HEADLINE', NULL, NULL, NULL, NULL, NULL),
(586, 1, 1, 'DEF DAF', NULL, NULL, NULL, NULL, NULL),
(587, 1, 1, 'RISMENE', NULL, NULL, NULL, NULL, NULL),
(588, 1, 1, 'DOWN TO NO ONE', NULL, NULL, NULL, NULL, NULL),
(589, 1, 1, 'M.E.B', NULL, NULL, NULL, NULL, NULL),
(590, 1, 1, 'MÉSA', NULL, NULL, NULL, NULL, NULL),
(591, 1, 1, 'INEFFEKT', NULL, NULL, NULL, NULL, NULL),
(592, 1, 1, 'KOMITÉ I.IV', NULL, NULL, NULL, NULL, NULL),
(593, 1, 1, 'CARTE BLANCHE', NULL, NULL, NULL, NULL, NULL),
(594, 1, 1, 'LA TORDUE', NULL, NULL, NULL, NULL, NULL),
(595, 1, 1, 'LES JOUEURS DE BIQUE', NULL, NULL, NULL, NULL, NULL),
(596, 4, 1, 'DJ VADIM', NULL, NULL, NULL, NULL, NULL),
(597, 4, 1, 'KILLER KELA', NULL, NULL, NULL, NULL, NULL),
(598, 4, 1, 'FIREMAN', NULL, NULL, NULL, NULL, NULL),
(599, 4, 1, 'SCRATCH PERVERTS', NULL, NULL, NULL, NULL, NULL),
(600, 4, 1, 'PHI LIFE CYPHER', NULL, NULL, NULL, NULL, NULL),
(601, 1, 1, 'UJAMA SOUND SYSTEM', NULL, NULL, NULL, NULL, NULL),
(602, 1, 1, 'LOMBRICOR', NULL, NULL, NULL, NULL, NULL),
(603, 1, 1, 'APOSTASIA', NULL, NULL, NULL, NULL, NULL),
(604, 1, 1, 'PENUMBRA', NULL, NULL, NULL, NULL, NULL),
(605, 1, 1, 'JACK DE MARSEILLE', NULL, NULL, NULL, NULL, NULL),
(606, 2, 1, 'ILANA', NULL, NULL, NULL, NULL, NULL),
(607, 1, 1, 'CHAOTIK RAMSES', NULL, NULL, NULL, NULL, NULL),
(608, 1, 1, 'DJUL\'Z', NULL, NULL, NULL, NULL, NULL),
(609, 1, 1, 'MR WALLACE', NULL, NULL, NULL, NULL, NULL),
(610, 1, 1, 'GREG GOLDY', NULL, NULL, NULL, NULL, NULL),
(611, 1, 1, 'ANTHONY P', NULL, NULL, NULL, NULL, NULL),
(612, 1, 1, 'JUICE', NULL, NULL, NULL, NULL, NULL),
(613, 1, 1, 'STF', NULL, NULL, NULL, NULL, NULL),
(614, 1, 1, 'ATOMIKS', NULL, NULL, NULL, NULL, NULL),
(615, 5, 1, 'VENUS', NULL, NULL, NULL, NULL, NULL),
(616, 1, 1, 'IN LIMBO', NULL, NULL, NULL, NULL, NULL),
(617, 1, 1, 'JAMASOUND', NULL, NULL, NULL, NULL, NULL),
(618, 1, 1, 'ORANGE STREET', NULL, NULL, NULL, NULL, NULL),
(619, 1, 1, 'INDY K', NULL, NULL, NULL, NULL, NULL),
(620, 4, 1, 'SPACE HEADS', NULL, NULL, NULL, NULL, NULL),
(621, 1, 1, 'KINGS OF PETROLEUM', NULL, NULL, NULL, NULL, NULL),
(622, 1, 1, 'PARIS LONDRES', NULL, NULL, NULL, NULL, NULL),
(623, 1, 1, 'KANJAR\'OC', NULL, NULL, NULL, NULL, NULL),
(624, 1, 1, 'BOOBY HATCH', NULL, NULL, NULL, NULL, NULL),
(625, 1, 1, 'MASSILIA SOUND SYSTEM', NULL, NULL, NULL, NULL, NULL),
(626, 1, 1, 'MÜLLER', NULL, NULL, NULL, NULL, NULL),
(627, 1, 1, 'LA FAMILIA', NULL, NULL, NULL, NULL, NULL),
(628, 1, 1, 'JAVA', NULL, NULL, NULL, NULL, NULL),
(629, 1, 1, 'SVINKELS', NULL, NULL, NULL, NULL, NULL),
(630, 1, 1, 'FLOR DEL FANGO', NULL, NULL, NULL, NULL, NULL),
(631, 1, 1, 'SHANE COUGH', NULL, NULL, NULL, NULL, NULL),
(632, 1, 1, 'PLASTIC PEOPLE FONDATION', NULL, NULL, NULL, NULL, NULL),
(633, NULL, 1, 'TOMMY TWISTA', NULL, NULL, NULL, NULL, NULL),
(634, 1, 1, 'LES DJINNS', NULL, NULL, NULL, NULL, NULL),
(635, 4, 1, '69DB', NULL, NULL, NULL, NULL, NULL),
(636, 4, 1, 'MC TABLLOYD', NULL, NULL, NULL, NULL, NULL),
(637, 1, 1, 'TDK', NULL, NULL, NULL, NULL, NULL),
(638, 1, 1, 'CYRTAKIS', NULL, NULL, NULL, NULL, NULL),
(639, 1, 1, 'BUSTY DUSTY', NULL, NULL, NULL, NULL, NULL),
(640, 1, 1, 'PERCUBABA', NULL, NULL, NULL, NULL, NULL),
(641, 1, 1, 'SENOR HOLMES', NULL, NULL, NULL, NULL, NULL),
(642, 1, 1, 'TALITHA KOUM', NULL, NULL, NULL, NULL, NULL),
(643, 1, 1, 'INSIDE', NULL, NULL, NULL, NULL, NULL),
(644, 1, 1, 'VIRAGO', NULL, NULL, NULL, NULL, NULL),
(647, 3, 1, 'KLETKA RED', NULL, NULL, NULL, NULL, NULL),
(648, 1, 1, 'BACKSIDE', NULL, NULL, NULL, NULL, NULL),
(649, 1, 1, 'ASSASSIN', NULL, NULL, NULL, NULL, NULL),
(650, 1, 1, 'LA CAUTION', NULL, NULL, NULL, NULL, NULL),
(651, 1, 1, 'DOUBLE NELSON', NULL, NULL, NULL, NULL, NULL),
(652, 18, 1, 'ZU', NULL, NULL, NULL, NULL, NULL),
(653, 9, 1, 'THE EX', NULL, NULL, NULL, NULL, NULL),
(654, 1, 1, 'WALLACE CLEAVER', NULL, NULL, '6ab4ec4ec6a78_AGENDA-4.png', '2026-09-24 11:24:30', NULL),
(655, 1, 1, 'HENRI BLEU', NULL, NULL, NULL, NULL, NULL),
(656, 1, 1, 'MEDINE', NULL, NULL, '6ab4ef0b0284f_MEDINE.jpeg', '2026-09-24 11:36:11', NULL),
(657, 1, 1, 'KONSKOUZ', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_etiquette`
--

CREATE TABLE `groupe_etiquette` (
  `groupe_id` int NOT NULL,
  `etiquette_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupe_genre_musical`
--

CREATE TABLE `groupe_genre_musical` (
  `groupe_id` int NOT NULL,
  `genre_musical_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe_genre_musical`
--

INSERT INTO `groupe_genre_musical` (`groupe_id`, `genre_musical_id`) VALUES
(4, 14),
(4, 15),
(4, 89),
(31, 4),
(31, 85),
(31, 131),
(124, 39),
(184, 13),
(184, 131),
(184, 132),
(194, 8),
(201, 2),
(201, 21),
(235, 2),
(235, 21),
(235, 34),
(235, 58),
(444, 3),
(444, 36),
(446, 13),
(446, 38),
(446, 126),
(447, 2),
(447, 13),
(447, 38),
(448, 13),
(449, 131),
(452, 131),
(453, 2),
(453, 4),
(454, 2),
(455, 2),
(455, 37),
(456, 2),
(456, 25),
(457, 2),
(457, 21),
(459, 2),
(459, 4),
(460, 39),
(461, 13),
(462, 39),
(462, 131),
(462, 132),
(463, 2),
(464, 13),
(464, 38),
(465, 13),
(466, 13),
(466, 37),
(468, 14),
(468, 37),
(469, 2),
(469, 14),
(469, 109),
(470, 39),
(471, 13),
(471, 38),
(472, 2),
(472, 20),
(473, 2),
(473, 20),
(473, 21),
(474, 2),
(474, 38),
(474, 126),
(475, 11),
(475, 13),
(475, 38),
(476, 4),
(476, 14),
(476, 110),
(478, 11),
(478, 39),
(478, 90),
(479, 2),
(479, 37),
(480, 2),
(480, 111),
(483, 13),
(484, 13),
(485, 2),
(485, 28),
(485, 112),
(486, 2),
(486, 113),
(487, 2),
(487, 13),
(487, 21),
(487, 34),
(488, 2),
(488, 21),
(488, 28),
(489, 11),
(489, 14),
(489, 49),
(489, 90),
(490, 7),
(490, 37),
(490, 108),
(491, 11),
(491, 14),
(491, 38),
(491, 114),
(492, 4),
(492, 14),
(492, 115),
(493, 14),
(493, 116),
(493, 135),
(494, 4),
(494, 28),
(494, 39),
(494, 118),
(495, 4),
(495, 39),
(495, 109),
(495, 113),
(496, 13),
(497, 13),
(497, 39),
(498, 14),
(498, 36),
(498, 72),
(499, 2),
(499, 7),
(500, 2),
(500, 4),
(500, 21),
(500, 27),
(500, 118),
(501, 4),
(501, 79),
(501, 82),
(502, 4),
(502, 79),
(502, 131),
(503, 73),
(504, 37),
(505, 37),
(505, 120),
(506, 7),
(507, 11),
(509, 2),
(509, 20),
(509, 42),
(510, 2),
(510, 21),
(511, 8),
(512, 8),
(512, 58),
(512, 118),
(513, 8),
(513, 112),
(514, 4),
(514, 11),
(514, 79),
(515, 13),
(515, 14),
(517, 3),
(517, 36),
(517, 122),
(518, 2),
(518, 7),
(518, 49),
(519, 7),
(519, 19),
(520, 14),
(520, 19),
(520, 37),
(522, 7),
(522, 113),
(523, 2),
(523, 21),
(523, 125),
(524, 4),
(524, 8),
(524, 21),
(524, 112),
(525, 37),
(525, 49),
(525, 114),
(527, 11),
(527, 58),
(537, 13),
(537, 39),
(537, 131),
(537, 132),
(539, 4),
(539, 43),
(539, 84),
(539, 131),
(540, 36),
(540, 131),
(541, 123),
(541, 131),
(544, 13),
(544, 33),
(544, 38),
(544, 126),
(545, 4),
(545, 39),
(546, 8),
(546, 112),
(547, 7),
(548, 2),
(549, 8),
(549, 58),
(550, 4),
(550, 109),
(550, 113),
(551, 13),
(551, 33),
(551, 38),
(551, 39),
(552, 38),
(552, 126),
(553, 4),
(553, 11),
(553, 123),
(554, 39),
(555, 79),
(556, 79),
(557, 39),
(557, 72),
(558, 11),
(558, 46),
(559, 11),
(559, 46),
(560, 77),
(560, 127),
(560, 128),
(560, 130),
(561, 127),
(561, 128),
(561, 130),
(562, 4),
(562, 11),
(562, 77),
(562, 121),
(562, 131),
(563, 14),
(563, 133),
(563, 134),
(564, 11),
(564, 136),
(565, 131),
(566, 131),
(567, 2),
(567, 21),
(569, 2),
(569, 21),
(570, 8),
(570, 58),
(571, 2),
(571, 21),
(571, 42),
(572, 8),
(572, 112),
(572, 137),
(573, 2),
(573, 7),
(576, 8),
(576, 28),
(576, 138),
(579, 4),
(579, 39),
(580, 4),
(580, 39),
(581, 4),
(581, 39),
(582, 4),
(582, 11),
(582, 39),
(582, 86),
(583, 4),
(583, 86),
(584, 8),
(585, 8),
(586, 8),
(586, 112),
(587, 37),
(588, 8),
(589, 2),
(589, 8),
(589, 58),
(590, 3),
(591, 3),
(592, 3),
(593, 3),
(594, 37),
(595, 37),
(596, 4),
(596, 79),
(596, 109),
(597, 122),
(598, 4),
(598, 79),
(598, 109),
(598, 131),
(599, 36),
(599, 131),
(600, 36),
(601, 13),
(601, 73),
(601, 132),
(602, 8),
(602, 61),
(603, 8),
(603, 51),
(603, 118),
(604, 8),
(604, 60),
(605, 4),
(605, 86),
(605, 139),
(606, 4),
(606, 84),
(607, 4),
(607, 86),
(608, 4),
(608, 84),
(608, 131),
(609, 4),
(609, 84),
(609, 131),
(610, 4),
(610, 84),
(610, 131),
(611, 4),
(611, 84),
(611, 131),
(612, 4),
(612, 131),
(612, 140),
(613, 4),
(613, 123),
(613, 131),
(614, 4),
(614, 84),
(614, 86),
(614, 131),
(615, 7),
(616, 7),
(616, 42),
(617, 13),
(617, 38),
(617, 141),
(618, 13),
(618, 38),
(618, 141),
(619, 13),
(619, 141),
(620, 4),
(620, 47),
(621, 4),
(622, 19),
(622, 37),
(623, 13),
(623, 38),
(623, 39),
(624, 13),
(624, 38),
(624, 141),
(625, 13),
(625, 40),
(625, 73),
(626, 13),
(626, 39),
(626, 131),
(627, 13),
(627, 14),
(627, 93),
(627, 102),
(627, 116),
(628, 36),
(628, 120),
(629, 3),
(629, 21),
(630, 2),
(630, 14),
(631, 2),
(631, 142),
(632, 4),
(633, 13),
(633, 73),
(634, 13),
(634, 39),
(634, 123),
(635, 76),
(635, 79),
(635, 86),
(636, 76),
(636, 86),
(637, 76),
(637, 79),
(637, 131),
(638, 76),
(638, 79),
(638, 131),
(639, 79),
(639, 131),
(640, 13),
(640, 38),
(640, 73),
(641, 2),
(641, 13),
(641, 93),
(642, 7),
(642, 113),
(643, 7),
(644, 2),
(644, 28),
(647, 2),
(647, 11),
(647, 46),
(648, 2),
(649, 3),
(650, 3),
(651, 2),
(651, 118),
(651, 143),
(652, 11),
(652, 21),
(653, 127),
(653, 143),
(654, 3),
(654, 36),
(655, 3),
(655, 36),
(656, 3),
(656, 36),
(656, 68),
(657, 3),
(657, 36),
(657, 68);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_label`
--

CREATE TABLE `groupe_label` (
  `groupe_id` int NOT NULL,
  `label_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupe_ressource`
--

CREATE TABLE `groupe_ressource` (
  `groupe_id` int NOT NULL,
  `ressource_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe_ressource`
--

INSERT INTO `groupe_ressource` (`groupe_id`, `ressource_id`) VALUES
(4, 16);

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`id`, `etat_id`, `nom`) VALUES
(1, 1, 'Guitare');

-- --------------------------------------------------------

--
-- Structure de la table `label`
--

CREATE TABLE `label` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `lien_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_batiment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `etat_id`, `ville`, `cp`, `adresse`, `nom_batiment`) VALUES
(1, 1, 'Orléans', '45000', 'Boulevard Jean Jaurès', 'L\'Astroclub'),
(2, 1, 'Orléans', '45000', 'Boulevard Jean Jaurès (entrée technique 1 rue Alexandre Avisse)', 'L\'Astrolabe'),
(3, 1, 'Orléans', '45000', '88 rue du Colombier', 'FRAC'),
(4, 1, 'Chécy', '45430', 'Chemin du Port', 'Base de Loisirs (Chécy)'),
(5, 1, 'Orléans', '45000', 'Rue Robert de Courtenay', 'Jardin de l\'Evêché'),
(6, 1, 'Orléans', '45100', 'Place Ste Beuve', 'Théâtre Gérard Philipe'),
(7, 1, 'Orléans', '45000', 'Boulevard Pierre Segelle', 'Théâtre d\'Orléans / Salle Touchard'),
(8, 1, 'Orléans', '45000', '2 rue Paul Fourche', 'Campo Santo'),
(9, 1, 'Orléans', '45000', '7 rue des Carmes', 'Cinéma Les Carmes'),
(10, 1, 'Orléans', '45000', '4 place Ste Croix', 'Salle de l\'Institut'),
(11, 1, 'Orléans', '45000', '203 rue de Bourgogne', 'L\'Atelier'),
(12, 1, 'Orléans', '45000', '108 rue de Bourgogne', 'Le 108'),
(13, 1, 'Orléans', '45100', 'Rue de St Amand', 'Le Bouillon'),
(14, 1, 'Orléans', '45000', 'Boulevard Pierre Segelle', 'Parvis du Théâtre d\'Orléans'),
(15, 1, 'Chécy', '45430', '1 place vieux pavé', 'Espace George Sand'),
(16, 1, 'Orléans', '45000', 'Boulevard Pierre Segelle', 'Théâtre d\'Orléans / Scène Vitez'),
(17, 1, 'Orléans', '45000', '37 rue du bourdon blanc', 'CCNO'),
(18, 1, 'Orléans', '45000', 'Quai du Châtelet', 'La Sardine'),
(19, 1, 'Orléans', '45000', 'Quai du Châtelet', 'Le Ponton'),
(20, 1, 'Orléans', '45000', '1 rue Fernand Rabier', 'Musée des Beaux Arts d\'Orléans'),
(21, 1, 'Orléans', '45000', '2 rue du cloître St Pierre d\'Empont', 'Temple protestant'),
(22, 1, 'Orléans', '45000', '24 place de la Croix Morin', 'La Croix Morin'),
(23, 1, 'Orléans', '45000', '93 rue d\'Illiers', 'Garage Excelsior'),
(24, 1, 'Orléans', '45000', '229 rue de Bourgogne', 'Décibell\'Café'),
(25, 1, 'Orléans', '45000', '229 rue de Bourgogne', 'Le Cab'),
(26, 1, 'Orléans', '45000', '32, rue de l\'Empereur', 'L\'Antidote'),
(27, 1, 'Orléans', '45000', '32, rue de l\'Empereur', 'Le Carreau des Halles'),
(28, 1, 'Orléans', '45000', '9, rue des 7 dormants', 'Le Nantucket'),
(29, 1, 'Orléans', '45000', 'Place de la République', 'O\'Lodge'),
(30, 1, 'Orléans', '45000', '16 rue de la République', 'FNAC'),
(31, 1, 'Orléans', '45000', '38 rue de l\'Empereur', 'Le Moog'),
(32, 1, 'Orléans', '45000', 'Quai du Châtelet', 'L\'Inex'),
(33, 1, 'Orléans', '45000', '19 rue de la Lionne', 'Le Petit Bouchon'),
(34, 1, 'Orléans', '45000', '259, rue de Bourgogne', 'Le Chiendent'),
(35, 1, 'Orléans', '45000', '264 rue de Bourgogne', 'Paxton\'s'),
(36, 1, 'Orléans', '45000', 'Place de la venelle St Pierre Empont', 'Place de la venelle St Pierre Empont'),
(37, 1, 'Orléans', '45000', '262 rue de Bourgogne', 'Les Becs à Vin'),
(38, 1, 'Orléans', '45000', '8 place du Châtelet', 'Les Becs à Vin'),
(39, 1, 'Orléans', '45000', '12 rue de la Tour Neuve', 'Frac'),
(40, 1, 'Orléans', '45000', 'Boulevard Pierre Segelle', 'Hall du Théâtre d\'Orléans'),
(41, 1, 'Orléans', '45000', '26 rue des Ormes St Victor', 'Chez Babeth'),
(42, 1, 'Orléans', '45000', 'Place de l\'Etape', 'Hôtel Groslot'),
(43, 1, 'Orléans', '45000', 'Place du Châtelet', 'Parking du Châtelet'),
(44, 1, 'Orléans', '45000', '37 place du Châtelet', 'L\'Infrared'),
(45, 1, 'Orléans', '45000', 'Place Ste Croix', 'Parvis de la Cathédrale'),
(46, 1, 'Orléans', '45000', '6 rue Thiers', 'Galeries Lafayette'),
(47, 1, 'Orléans', '45000', 'Place du Martroi', 'Place du Martroi'),
(48, 1, 'Orléans', '45000', '108 rue de Bourgogne', 'Polysonik'),
(49, 1, 'Orléans', '45000', '24 bis rue de la Tour Neuve', 'La Ruche en Scène'),
(50, 1, 'Orléans', '45000', '14 rue Dupanloup', 'ESAD'),
(51, 1, 'Orléans', '45000', 'Rue Dupanloup', 'Vestige des Remparts'),
(52, 1, 'Orléans', '45000', 'Boulevard Pierre Segelle', 'Théâtre d\'Orléans / Scène Barrault');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int NOT NULL,
  `musicien_id` int NOT NULL,
  `groupe_id` int DEFAULT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membre_instrument`
--

CREATE TABLE `membre_instrument` (
  `membre_id` int NOT NULL,
  `instrument_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `musicien`
--

CREATE TABLE `musicien` (
  `id` int NOT NULL,
  `nationalite_id` int DEFAULT NULL,
  `etat_id` int NOT NULL,
  `nom_scene` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissance` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `lien_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `musicien`
--

INSERT INTO `musicien` (`id`, `nationalite_id`, `etat_id`, `nom_scene`, `nom`, `prenom`, `date_naissance`, `image`, `updated_at`, `lien_image`) VALUES
(1, 1, 1, 'BERTRAND BELIN', 'BELIN', 'BERTRAND', NULL, NULL, NULL, NULL),
(2, NULL, 1, 'MATTHIEU MALON', 'MALON', 'MATTHIEU', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `musicien_etiquette`
--

CREATE TABLE `musicien_etiquette` (
  `musicien_id` int NOT NULL,
  `etiquette_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE `nationalite` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_iso` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nationalite`
--

INSERT INTO `nationalite` (`id`, `etat_id`, `nom`, `code_iso`) VALUES
(1, 1, 'FRANCE', 'FR'),
(2, 1, 'ETATS UNIS', 'US'),
(3, 1, 'ALLEMAGNE', 'DE'),
(4, 1, 'ROYAUME UNI', 'GB'),
(5, 1, 'BELGIQUE', 'BE'),
(6, 1, 'CANADA', 'CA'),
(7, 1, 'CUBA', 'CU'),
(8, 1, 'SUISSE', 'CH'),
(9, 1, 'PAYS BAS', 'NL'),
(10, 1, 'INDE', 'IN'),
(11, 1, 'KENYA', 'KE'),
(12, 1, 'AUSTRALIE', 'AU'),
(13, 1, 'JAMAÏQUE', 'JM'),
(14, 1, 'SUEDE', 'SE'),
(15, 1, 'AFRIQUE DU SUD', 'ZA'),
(16, 1, 'SENEGAL', 'SN'),
(17, 1, 'CONGO', 'CG'),
(18, 1, 'ITALIE', 'IT'),
(19, 1, 'SLOVENIE', 'SI'),
(20, 1, 'IRLANDE', 'IE'),
(21, 1, 'DANEMARK', 'DK'),
(22, 1, 'GABON', 'GA'),
(23, 1, 'NOUVELLE ZELANDE', 'NZ'),
(24, 1, 'GRECE', 'GR'),
(25, 1, 'JAPON', 'JP'),
(26, 1, 'ISRAEL', 'IL'),
(27, 1, 'LUXEMBOURG', 'LU'),
(28, 1, 'BURUNDI', 'BI'),
(29, 1, 'NIGERIA', 'NI'),
(30, 1, 'HONGRIE', 'HU'),
(31, 1, 'GUINÉE', 'GU');

-- --------------------------------------------------------

--
-- Structure de la table `passage`
--

CREATE TABLE `passage` (
  `id` int NOT NULL,
  `groupe_id` int DEFAULT NULL,
  `evenement_id` int DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `passage`
--

INSERT INTO `passage` (`id`, `groupe_id`, `evenement_id`, `date_debut`, `date_fin`) VALUES
(1, 1, 1, '2019-01-27 15:30:00', '2019-01-27 16:30:00'),
(2, 2, 2, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 5, 3, NULL, NULL),
(6, 6, 3, NULL, NULL),
(7, 7, 4, NULL, NULL),
(8, 8, 5, NULL, NULL),
(9, 9, 5, NULL, NULL),
(10, 10, 6, NULL, NULL),
(11, 11, 6, NULL, NULL),
(12, 12, 7, NULL, NULL),
(13, 13, 7, NULL, NULL),
(14, 14, 8, NULL, NULL),
(15, 15, 8, NULL, NULL),
(16, 16, 9, NULL, NULL),
(17, 17, 9, NULL, NULL),
(18, 18, 9, NULL, NULL),
(19, 19, 10, NULL, NULL),
(20, 20, 10, NULL, NULL),
(21, 21, 10, NULL, NULL),
(22, 22, 11, NULL, NULL),
(23, 23, 11, NULL, NULL),
(24, 18, 11, NULL, NULL),
(25, 24, 12, NULL, NULL),
(26, 25, 12, NULL, NULL),
(27, 26, 12, NULL, NULL),
(28, 27, 13, NULL, NULL),
(29, 28, 13, NULL, NULL),
(30, 29, 13, NULL, NULL),
(31, 30, 14, NULL, NULL),
(32, 11, 14, NULL, NULL),
(33, 31, 14, NULL, NULL),
(34, 32, 14, NULL, NULL),
(35, 33, 14, NULL, NULL),
(36, 34, 15, NULL, NULL),
(37, 35, 16, NULL, NULL),
(38, 36, 16, NULL, NULL),
(39, 37, 17, NULL, NULL),
(40, 38, 17, NULL, NULL),
(41, 39, 18, NULL, NULL),
(42, 40, 18, NULL, NULL),
(43, 41, 18, NULL, NULL),
(44, 42, 19, NULL, NULL),
(45, 43, 19, NULL, NULL),
(46, 44, 19, NULL, NULL),
(47, 45, 20, NULL, NULL),
(48, 46, 20, NULL, NULL),
(49, 47, 21, NULL, NULL),
(50, 48, 21, NULL, NULL),
(51, 49, 22, NULL, NULL),
(52, 50, 22, NULL, NULL),
(53, 51, 22, NULL, NULL),
(54, 52, 23, NULL, NULL),
(55, 53, 23, NULL, NULL),
(56, 54, 24, NULL, NULL),
(57, 55, 24, NULL, NULL),
(58, 56, 25, NULL, NULL),
(59, 57, 25, NULL, NULL),
(60, 58, 26, NULL, NULL),
(61, 59, 26, NULL, NULL),
(62, 60, 27, NULL, NULL),
(63, 61, 27, NULL, NULL),
(64, 62, 28, NULL, NULL),
(65, 11, 28, NULL, NULL),
(66, 63, 29, NULL, NULL),
(67, 64, 30, NULL, NULL),
(68, 65, 30, NULL, NULL),
(69, 66, 30, NULL, NULL),
(70, 67, 31, NULL, NULL),
(71, 68, 31, NULL, NULL),
(72, 69, 31, NULL, NULL),
(73, 70, 31, NULL, NULL),
(74, 71, 31, NULL, NULL),
(75, 72, 32, NULL, NULL),
(76, 73, 32, NULL, NULL),
(77, 74, 33, NULL, NULL),
(78, 75, 33, NULL, NULL),
(79, 76, 33, NULL, NULL),
(80, 13, 33, NULL, NULL),
(81, 77, 33, NULL, NULL),
(82, 78, 33, NULL, NULL),
(83, 79, 33, NULL, NULL),
(84, 80, 33, NULL, NULL),
(85, 81, 33, NULL, NULL),
(86, 82, 33, NULL, NULL),
(87, 83, 33, NULL, NULL),
(88, 84, 33, NULL, NULL),
(89, 85, 33, NULL, NULL),
(90, 86, 33, NULL, NULL),
(91, 87, 33, NULL, NULL),
(92, 88, 33, NULL, NULL),
(93, 89, 34, NULL, NULL),
(94, 90, 34, NULL, NULL),
(95, 91, 34, NULL, NULL),
(96, 92, 34, NULL, NULL),
(97, 93, 34, NULL, NULL),
(98, 94, 34, NULL, NULL),
(99, 95, 34, NULL, NULL),
(100, 96, 34, NULL, NULL),
(101, 97, 34, NULL, NULL),
(102, 98, 34, NULL, NULL),
(103, 99, 34, NULL, NULL),
(104, 100, 34, NULL, NULL),
(105, 101, 34, NULL, NULL),
(106, 102, 34, NULL, NULL),
(107, 103, 34, NULL, NULL),
(108, 104, 34, NULL, NULL),
(109, 105, 34, NULL, NULL),
(110, 106, 34, NULL, NULL),
(111, 107, 34, NULL, NULL),
(112, 108, 34, NULL, NULL),
(113, 109, 34, NULL, NULL),
(114, 110, 34, NULL, NULL),
(115, 111, 34, NULL, NULL),
(116, 112, 34, NULL, NULL),
(117, 113, 34, NULL, NULL),
(118, 88, 34, NULL, NULL),
(119, 114, 35, NULL, NULL),
(120, 115, 35, NULL, NULL),
(121, 116, 35, NULL, NULL),
(122, 117, 36, NULL, NULL),
(123, 118, 36, NULL, NULL),
(124, 119, 37, NULL, NULL),
(125, 120, 37, NULL, NULL),
(126, 121, 38, NULL, NULL),
(127, 122, 38, NULL, NULL),
(128, 123, 39, NULL, NULL),
(129, 124, 39, NULL, NULL),
(130, 125, 40, NULL, NULL),
(131, 126, 40, NULL, NULL),
(132, 127, 41, NULL, NULL),
(133, 128, 41, NULL, NULL),
(134, 129, 42, NULL, NULL),
(135, 130, 42, NULL, NULL),
(136, 131, 43, NULL, NULL),
(137, 132, 43, NULL, NULL),
(138, 133, 43, NULL, NULL),
(139, 134, 44, NULL, NULL),
(140, 135, 44, NULL, NULL),
(141, 136, 45, NULL, NULL),
(142, 137, 46, NULL, NULL),
(143, 138, 46, NULL, NULL),
(144, 139, 46, NULL, NULL),
(145, 140, 46, NULL, NULL),
(146, 141, 47, NULL, NULL),
(147, 142, 47, NULL, NULL),
(148, 143, 48, NULL, NULL),
(149, 144, 48, NULL, NULL),
(150, 145, 49, NULL, NULL),
(151, 146, 49, NULL, NULL),
(152, 147, 50, NULL, NULL),
(153, 148, 51, NULL, NULL),
(154, 149, 51, NULL, NULL),
(155, 150, 52, NULL, NULL),
(156, 151, 52, NULL, NULL),
(157, 152, 52, NULL, NULL),
(158, 153, 53, NULL, NULL),
(159, 154, 53, NULL, NULL),
(160, 11, 53, NULL, NULL),
(161, 444, 55, NULL, NULL),
(162, 445, 55, NULL, NULL),
(163, 446, 55, NULL, NULL),
(164, 447, 55, NULL, NULL),
(165, 448, 55, NULL, NULL),
(166, 449, 55, NULL, NULL),
(167, 31, 55, NULL, NULL),
(168, 184, 55, NULL, NULL),
(169, 452, 55, NULL, NULL),
(170, 453, 56, NULL, NULL),
(171, 454, 56, NULL, NULL),
(172, 455, 56, NULL, NULL),
(173, 456, 56, NULL, NULL),
(174, 457, 56, NULL, NULL),
(175, 458, 56, NULL, NULL),
(176, 31, 56, NULL, NULL),
(177, 452, 56, NULL, NULL),
(178, 459, 56, NULL, NULL),
(179, 460, 57, NULL, NULL),
(180, 461, 57, NULL, NULL),
(181, 537, 57, NULL, NULL),
(182, 462, 57, NULL, NULL),
(183, 201, 58, NULL, NULL),
(184, 463, 58, NULL, NULL),
(185, 464, 59, NULL, NULL),
(186, 465, 59, NULL, NULL),
(187, 466, 60, NULL, NULL),
(188, 467, 60, NULL, NULL),
(189, 468, 61, NULL, NULL),
(190, 455, 61, NULL, NULL),
(191, 469, 62, NULL, NULL),
(192, 470, 62, NULL, NULL),
(193, 471, 63, NULL, NULL),
(194, 448, 63, NULL, NULL),
(195, 184, 63, NULL, NULL),
(196, 472, 64, NULL, NULL),
(197, 457, 64, NULL, NULL),
(198, 473, 64, NULL, NULL),
(199, 474, 68, NULL, NULL),
(200, 446, 68, NULL, NULL),
(201, 476, 70, NULL, NULL),
(202, 124, 71, NULL, NULL),
(203, 478, 71, NULL, NULL),
(204, 479, 72, NULL, NULL),
(205, 480, 72, NULL, NULL),
(206, 194, 65, NULL, NULL),
(207, 475, 69, NULL, NULL),
(208, 481, 74, NULL, NULL),
(209, 482, 74, NULL, NULL),
(210, 458, 74, NULL, NULL),
(211, 483, 76, NULL, NULL),
(212, 484, 76, NULL, NULL),
(213, 485, 77, NULL, NULL),
(214, 486, 77, NULL, NULL),
(215, 456, 77, NULL, NULL),
(216, 487, 78, NULL, NULL),
(217, 488, 78, NULL, NULL),
(218, 235, 78, NULL, NULL),
(219, 489, 79, NULL, NULL),
(220, 490, 80, NULL, NULL),
(221, 491, 80, NULL, NULL),
(222, 492, 81, NULL, NULL),
(223, 493, 81, NULL, NULL),
(224, 494, 82, NULL, NULL),
(225, 495, 82, NULL, NULL),
(226, 1, 83, NULL, NULL),
(227, 496, 84, NULL, NULL),
(228, 497, 84, NULL, NULL),
(229, 498, 84, NULL, NULL),
(230, 499, 85, NULL, NULL),
(231, 500, 85, NULL, NULL),
(232, 503, 86, NULL, NULL),
(233, 502, 86, NULL, NULL),
(234, 501, 86, NULL, NULL),
(235, 506, 87, NULL, NULL),
(236, 505, 87, NULL, NULL),
(237, 504, 87, NULL, NULL),
(238, 508, 88, NULL, NULL),
(239, 507, 88, NULL, NULL),
(240, 510, 89, NULL, NULL),
(241, 509, 89, NULL, NULL),
(242, 513, 90, NULL, NULL),
(243, 512, 90, NULL, NULL),
(244, 511, 90, NULL, NULL),
(245, 539, 91, NULL, NULL),
(246, 514, 91, NULL, NULL),
(247, 516, 92, NULL, NULL),
(248, 515, 92, NULL, NULL),
(249, 540, 93, NULL, NULL),
(250, 541, 93, NULL, NULL),
(251, 444, 93, NULL, NULL),
(252, 517, 93, NULL, NULL),
(253, 520, 94, NULL, NULL),
(255, 519, 94, NULL, NULL),
(256, 518, 94, NULL, NULL),
(257, 545, 95, NULL, NULL),
(258, 544, 95, NULL, NULL),
(259, 546, 96, NULL, NULL),
(260, 547, 96, NULL, NULL),
(261, 548, 96, NULL, NULL),
(262, 549, 96, NULL, NULL),
(263, 550, 97, NULL, NULL),
(264, 522, 97, NULL, NULL),
(265, 523, 98, NULL, NULL),
(266, 524, 98, NULL, NULL),
(267, 525, 99, NULL, NULL),
(268, 526, 100, NULL, NULL),
(269, 527, 100, NULL, NULL),
(270, 552, 101, NULL, NULL),
(271, 551, 101, NULL, NULL),
(272, 554, 102, NULL, NULL),
(273, 553, 102, NULL, NULL),
(274, 555, 102, NULL, NULL),
(275, 556, 102, NULL, NULL),
(276, 557, 102, NULL, NULL),
(277, 559, 103, NULL, NULL),
(278, 558, 103, NULL, NULL),
(279, 560, 104, NULL, NULL),
(280, 561, 104, NULL, NULL),
(281, 562, 104, NULL, NULL),
(282, 563, 105, NULL, NULL),
(283, 564, 107, NULL, NULL),
(284, 565, 107, NULL, NULL),
(285, 566, 107, NULL, NULL),
(286, 569, 108, NULL, NULL),
(287, 567, 108, NULL, NULL),
(288, 568, 108, NULL, NULL),
(289, 570, 109, NULL, NULL),
(290, 571, 109, NULL, NULL),
(291, 572, 109, NULL, NULL),
(292, 573, 110, NULL, NULL),
(293, 576, 110, NULL, NULL),
(294, 577, 110, NULL, NULL),
(295, 578, 110, NULL, NULL),
(296, 579, 111, NULL, NULL),
(297, 580, 111, NULL, NULL),
(298, 581, 111, NULL, NULL),
(299, 582, 112, NULL, NULL),
(300, 583, 112, NULL, NULL),
(301, 584, 113, NULL, NULL),
(302, 585, 113, NULL, NULL),
(303, 586, 113, NULL, NULL),
(304, 587, 114, NULL, NULL),
(305, 513, 114, NULL, NULL),
(306, 588, 114, NULL, NULL),
(307, 589, 114, NULL, NULL),
(308, 590, 115, NULL, NULL),
(309, 591, 115, NULL, NULL),
(310, 592, 115, NULL, NULL),
(311, 593, 115, NULL, NULL),
(312, 594, 116, NULL, NULL),
(313, 595, 116, NULL, NULL),
(316, 596, 118, NULL, NULL),
(317, 599, 118, NULL, NULL),
(318, 597, 118, NULL, NULL),
(319, 598, 118, NULL, NULL),
(320, 600, 118, NULL, NULL),
(321, 601, 118, NULL, NULL),
(322, 604, 119, NULL, NULL),
(323, 603, 119, NULL, NULL),
(324, 602, 119, NULL, NULL),
(325, 605, 120, NULL, NULL),
(326, 606, 120, NULL, NULL),
(327, 607, 120, NULL, NULL),
(328, 608, 120, NULL, NULL),
(329, 609, 120, NULL, NULL),
(330, 610, 120, NULL, NULL),
(331, 611, 120, NULL, NULL),
(332, 612, 120, NULL, NULL),
(333, 613, 120, NULL, NULL),
(334, 614, 120, NULL, NULL),
(335, 615, 121, NULL, NULL),
(336, 616, 121, NULL, NULL),
(337, 617, 122, NULL, NULL),
(338, 618, 122, NULL, NULL),
(339, 619, 122, NULL, NULL),
(340, 620, 123, NULL, NULL),
(341, 621, 123, NULL, NULL),
(342, 622, 124, NULL, NULL),
(343, 623, 125, NULL, NULL),
(344, 624, 125, NULL, NULL),
(345, 623, 126, NULL, NULL),
(346, 625, 127, NULL, NULL),
(347, 626, 127, NULL, NULL),
(348, 627, 128, NULL, NULL),
(349, 628, 128, NULL, NULL),
(350, 629, 129, NULL, NULL),
(351, 630, 129, NULL, NULL),
(352, 631, 130, NULL, NULL),
(353, 632, 130, NULL, NULL),
(354, 633, 131, NULL, NULL),
(355, 634, 131, NULL, NULL),
(356, 635, 131, NULL, NULL),
(357, 636, 131, NULL, NULL),
(358, 637, 131, NULL, NULL),
(359, 541, 131, NULL, NULL),
(360, 638, 131, NULL, NULL),
(361, 639, 131, NULL, NULL),
(362, 640, 132, NULL, NULL),
(363, 641, 132, NULL, NULL),
(364, 643, 133, NULL, NULL),
(365, 642, 133, NULL, NULL),
(366, 527, 133, NULL, NULL),
(367, 644, 133, NULL, NULL),
(368, 647, 134, NULL, NULL),
(369, 648, 134, NULL, NULL),
(370, 649, 135, NULL, NULL),
(371, 650, 135, NULL, NULL),
(372, 651, 136, NULL, NULL),
(373, 652, 136, NULL, NULL),
(374, 653, 137, NULL, NULL),
(375, 654, 138, NULL, NULL),
(376, 655, 138, NULL, NULL),
(377, 656, 139, NULL, NULL),
(378, 657, 139, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(2, 3, 'gTaz4C9RidGdyWCsVcvi', 'AKO7H0H3DBedISzqNcmoh9RGpYnWt4FIgRcpNAYCB5U=', '2026-02-02 11:41:20', '2026-02-02 11:51:20'),
(3, 3, 'mb26WtNI9yBfwGiBRbnB', 'z8bpj9kxvDSmux2xig16PpBr5rrh8YiEyDMUTgHBQ+Q=', '2026-02-02 11:55:28', '2026-02-02 12:05:28');

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `id` int NOT NULL,
  `type_id` int DEFAULT NULL,
  `etat_id` int NOT NULL,
  `lien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credits` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`id`, `type_id`, `etat_id`, `lien`, `nom`, `updated_at`, `titre`, `credits`) VALUES
(1, 3, 1, 'https://www.youtube.com/watch?v=ICVz8rGLxj4&t=270s', NULL, NULL, 'HOME COOKIN\' - Live', 'L\'Antirouille & L\'Astrolabe'),
(2, 3, 1, 'https://www.youtube.com/watch?v=q-WJ7_Amgd8&list=PLt1a8HIOGla1k-72_tD84bTZRz39_Rbli&index=784', NULL, NULL, 'MICHELLE DAVID & THE GOSPEL SESSIONS - Live', 'L\'Antirouille & L\'Astrolabe'),
(3, 3, 1, 'https://www.youtube.com/watch?v=6xUKiPsZjOw&list=PLt1a8HIOGla1k-72_tD84bTZRz39_Rbli&index=786', NULL, NULL, 'JB BIMENI - I miss you', 'L\'Antirouille & L\'Astrolabe'),
(4, 3, 1, 'https://www.youtube.com/watch?v=N8udK_4ta5M&list=PLt1a8HIOGla1k-72_tD84bTZRz39_Rbli&index=787', NULL, NULL, 'JB BIMENI - Free me', 'L\'Antirouille & L\'Astrolabe'),
(5, 3, 1, 'https://youtu.be/PT3TP-ohfAo?si=edXxAUvEpqcxyddW', NULL, NULL, 'JB BIMENI - Don\'t fade away', 'L\'Antirouille & L\'Astrolabe'),
(6, 3, 1, 'https://youtu.be/DoPF596DGx4?si=h0yQjUEIxRdC8asK', NULL, NULL, 'JB BIMENI - My baby likes to boogaloo', 'L\'Antirouille & L\'Astrolabe'),
(7, 3, 1, 'https://youtu.be/rg3tc-wAHxI?si=pj0p1dliiTsJuddD', NULL, NULL, 'ANN O\'ARO - Live', 'L\'Antirouille & L\'Astrolabe'),
(8, 3, 1, 'https://youtu.be/aN2Bkulmj_w?si=7YzPSlYI39kj_5s_', NULL, NULL, 'MUDDY GURDY - Live', 'L\'Antirouille & L\'Astrolabe'),
(9, 3, 1, 'https://www.youtube.com/watch?v=ZhZ50OUHdZ0', NULL, NULL, 'JUNGLE BY NIGHT - Live', 'L\'Antirouille & L\'Astrolabe'),
(10, 3, 1, 'https://www.youtube.com/watch?v=FODLbLdkPZ4', NULL, NULL, 'ART BRUT - Astrolabe', 'Melra Erix'),
(11, 2, 1, 'https://www.tiktok.com/@astrolabeorleans/video/7563694733927795990', NULL, NULL, 'Wallace Cleaver - L\'Astrolabe', 'L\'Astrolabe'),
(12, 6, 1, 'https://www.instagram.com/p/DQXITkWjDqH/', NULL, NULL, 'Wallace Cleaver - L\'Astrolabe', 'L\'Astrolabe'),
(13, 3, 1, 'https://www.youtube.com/watch?v=7SCGmqK-cAM', NULL, NULL, 'KONSKOUZ', 'KonsKouz'),
(14, 6, 1, 'https://www.instagram.com/reel/DRuuwlDDJwt/', NULL, NULL, 'KONSKOUZ', 'KonsKouz'),
(15, 2, 1, 'https://www.tiktok.com/@astrolabeorleans/video/7602671073649380630', NULL, NULL, 'MEDINE retourne L\'Astrolabe', 'L\'Astrolabe'),
(16, 3, 1, 'https://www.youtube.com/watch?v=rg3tc-wAHxI', NULL, NULL, 'LES NUITS DE L\'ALLIGATOR - ANN O\'ARO', 'AstrolabeTV Orléans');

-- --------------------------------------------------------

--
-- Structure de la table `ressource_etiquette`
--

CREATE TABLE `ressource_etiquette` (
  `ressource_id` int NOT NULL,
  `etiquette_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_evenement`
--

CREATE TABLE `type_evenement` (
  `id` int NOT NULL,
  `etat_id` int NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_evenement`
--

INSERT INTO `type_evenement` (`id`, `etat_id`, `label`) VALUES
(1, 4, 'CONCERT A L\'ASTROLABE'),
(2, 4, 'CONCERT HORS LES MURS');

-- --------------------------------------------------------

--
-- Structure de la table `type_ressource`
--

CREATE TABLE `type_ressource` (
  `id` int NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_ressource`
--

INSERT INTO `type_ressource` (`id`, `label`) VALUES
(4, 'Facebook'),
(1, 'Image/Vidéo'),
(6, 'Instagram'),
(2, 'Lien'),
(5, 'Twitter'),
(3, 'Youtube');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `email`) VALUES
(1, 'astro_admin', '[\"ROLE_USER\",\"ROLE_ADMIN\",\"ROLE_EASYADMIN\",\"ROLE_EDITEUR\",\"ROLE_EVENEMENT_READ\",\"ROLE_EVENEMENT_WRITE\",\"ROLE_EVENEMENT_EDIT\",\"ROLE_EVENEMENT_DELETE\",\"ROLE_LIEU_READ\",\"ROLE_LIEU_WRITE\",\"ROLE_LIEU_EDIT\",\"ROLE_LIEU_DELETE\",\"ROLE_GROUPE_READ\",\"ROLE_GROUPE_WRITE\",\"ROLE_GROUPE_EDIT\",\"ROLE_GROUPE_DELETE\",\"ROLE_LABEL_READ\",\"ROLE_LABEL_WRITE\",\"ROLE_LABEL_EDIT\",\"ROLE_LABEL_DELETE\",\"ROLE_MUSICIEN_READ\",\"ROLE_MUSICIEN_WRITE\",\"ROLE_MUSICIEN_EDIT\",\"ROLE_MUSICIEN_DELETE\",\"ROLE_INSTRUMENT_READ\",\"ROLE_INSTRUMENT_WRITE\",\"ROLE_INSTRUMENT_EDIT\",\"ROLE_INSTRUMENT_DELETE\",\"ROLE_NATIONALITE_READ\",\"ROLE_NATIONALITE_WRITE\",\"ROLE_NATIONALITE_EDIT\",\"ROLE_NATIONALITE_DELETE\",\"ROLE_GENRE_READ\",\"ROLE_GENRE_WRITE\",\"ROLE_GENRE_EDIT\",\"ROLE_GENRE_DELETE\",\"ROLE_CATEGORIE_READ\",\"ROLE_CATEGORIE_WRITE\",\"ROLE_CATEGORIE_EDIT\",\"ROLE_CATEGORIE_DELETE\",\"ROLE_RESSOURCES_READ\",\"ROLE_RESSOURCES_WRITE\",\"ROLE_RESSOURCES_EDIT\",\"ROLE_RESSOURCES_DELETE\",\"ROLE_ETIQUETTE_READ\",\"ROLE_ETIQUETTE_WRITE\",\"ROLE_ETIQUETTE_EDIT\",\"ROLE_ETIQUETTE_DELETE\",\"ROLE_TYPEEVENT_READ\",\"ROLE_TYPEEVENT_WRITE\",\"ROLE_TYPEEVENT_EDIT\",\"ROLE_TYPEEVENT_DELETE\"]', '$2y$13$.VT.n7BGSX7oMS5Yc41nV.yV1iRvnmf/AkNmrifjArJtYPCtDkfiy', 'alexandre.brechet@lastrolabe.org'),
(2, 'astro_editeur', '[\"ROLE_USER\",\"ROLE_EASYADMIN\",\"ROLE_EDITEUR\",\"ROLE_EVENEMENT_READ\",\"ROLE_EVENEMENT_WRITE\",\"ROLE_EVENEMENT_EDIT\",\"ROLE_EVENEMENT_DELETE\",\"ROLE_LIEU_READ\",\"ROLE_LIEU_WRITE\",\"ROLE_LIEU_EDIT\",\"ROLE_LIEU_DELETE\",\"ROLE_GROUPE_READ\",\"ROLE_GROUPE_WRITE\",\"ROLE_GROUPE_EDIT\",\"ROLE_GROUPE_DELETE\",\"ROLE_LABEL_READ\",\"ROLE_LABEL_WRITE\",\"ROLE_LABEL_EDIT\",\"ROLE_LABEL_DELETE\",\"ROLE_MUSICIEN_READ\",\"ROLE_MUSICIEN_WRITE\",\"ROLE_MUSICIEN_EDIT\",\"ROLE_MUSICIEN_DELETE\",\"ROLE_INSTRUMENT_READ\",\"ROLE_INSTRUMENT_WRITE\",\"ROLE_INSTRUMENT_EDIT\",\"ROLE_INSTRUMENT_DELETE\",\"ROLE_NATIONALITE_READ\",\"ROLE_NATIONALITE_WRITE\",\"ROLE_NATIONALITE_EDIT\",\"ROLE_NATIONALITE_DELETE\",\"ROLE_GENRE_READ\",\"ROLE_GENRE_WRITE\",\"ROLE_GENRE_EDIT\",\"ROLE_GENRE_DELETE\",\"ROLE_CATEGORIE_READ\",\"ROLE_CATEGORIE_WRITE\",\"ROLE_CATEGORIE_EDIT\",\"ROLE_CATEGORIE_DELETE\",\"ROLE_RESSOURCES_READ\",\"ROLE_RESSOURCES_WRITE\",\"ROLE_RESSOURCES_EDIT\",\"ROLE_RESSOURCES_DELETE\",\"ROLE_ETIQUETTE_READ\",\"ROLE_ETIQUETTE_WRITE\",\"ROLE_ETIQUETTE_EDIT\",\"ROLE_ETIQUETTE_DELETE\",\"ROLE_TYPEEVENT_READ\",\"ROLE_TYPEEVENT_WRITE\",\"ROLE_TYPEEVENT_EDIT\",\"ROLE_TYPEEVENT_DELETE\"]', '$2y$13$uMFUGgdH4oiruRyn8/dUJ.Pf9AKHT7hOOqTxMUU7sqyjeSak11YpG', 'elieplouyrossard@gmail.com'),
(3, 'Caroline', '[\"ROLE_USER\",\"ROLE_EASYADMIN\",\"ROLE_EDITEUR\",\"ROLE_EVENEMENT_READ\",\"ROLE_EVENEMENT_WRITE\",\"ROLE_EVENEMENT_EDIT\",\"ROLE_EVENEMENT_DELETE\",\"ROLE_LIEU_READ\",\"ROLE_LIEU_WRITE\",\"ROLE_LIEU_EDIT\",\"ROLE_LIEU_DELETE\",\"ROLE_GROUPE_READ\",\"ROLE_GROUPE_WRITE\",\"ROLE_GROUPE_EDIT\",\"ROLE_GROUPE_DELETE\",\"ROLE_LABEL_READ\",\"ROLE_LABEL_WRITE\",\"ROLE_LABEL_EDIT\",\"ROLE_LABEL_DELETE\",\"ROLE_MUSICIEN_READ\",\"ROLE_MUSICIEN_WRITE\",\"ROLE_MUSICIEN_EDIT\",\"ROLE_MUSICIEN_DELETE\",\"ROLE_INSTRUMENT_READ\",\"ROLE_INSTRUMENT_WRITE\",\"ROLE_INSTRUMENT_EDIT\",\"ROLE_INSTRUMENT_DELETE\",\"ROLE_NATIONALITE_READ\",\"ROLE_NATIONALITE_WRITE\",\"ROLE_NATIONALITE_EDIT\",\"ROLE_NATIONALITE_DELETE\",\"ROLE_GENRE_READ\",\"ROLE_GENRE_WRITE\",\"ROLE_GENRE_EDIT\",\"ROLE_GENRE_DELETE\",\"ROLE_CATEGORIE_READ\",\"ROLE_CATEGORIE_WRITE\",\"ROLE_CATEGORIE_EDIT\",\"ROLE_CATEGORIE_DELETE\",\"ROLE_RESSOURCES_READ\",\"ROLE_RESSOURCES_WRITE\",\"ROLE_RESSOURCES_EDIT\",\"ROLE_RESSOURCES_DELETE\",\"ROLE_ETIQUETTE_READ\",\"ROLE_ETIQUETTE_WRITE\",\"ROLE_ETIQUETTE_EDIT\",\"ROLE_ETIQUETTE_DELETE\",\"ROLE_TYPEEVENT_READ\",\"ROLE_TYPEEVENT_WRITE\",\"ROLE_TYPEEVENT_EDIT\",\"ROLE_TYPEEVENT_DELETE\"]', '$2y$13$jFuJD/IqDPHFRZTv7Xjt.eIluOcefPM6v5PiGniRrV.Kwx5AGGFRO', 'caroline.correggia@lastrolabe.org');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie_musicale`
--
ALTER TABLE `categorie_musicale`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2599F6306C6E55B5` (`nom`),
  ADD KEY `IDX_2599F630D639D323` (`categorie_principale_id`);

--
-- Index pour la table `categorie_musicale_genre_musical`
--
ALTER TABLE `categorie_musicale_genre_musical`
  ADD PRIMARY KEY (`categorie_musicale_id`,`genre_musical_id`),
  ADD KEY `IDX_2508C467891F4D5E` (`categorie_musicale_id`),
  ADD KEY `IDX_2508C467FFFD05DC` (`genre_musical_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_55CAF762E564F0BF` (`statut`);

--
-- Index pour la table `etiquette`
--
ALTER TABLE `etiquette`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1E0E195AD4E4C6CA` (`mots_cles`),
  ADD KEY `IDX_1E0E195AD5E86FF` (`etat_id`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B26681E88939516` (`type_evenement_id`),
  ADD KEY `IDX_B26681E6AB213CC` (`lieu_id`),
  ADD KEY `IDX_B26681ED5E86FF` (`etat_id`);

--
-- Index pour la table `evenement_etiquette`
--
ALTER TABLE `evenement_etiquette`
  ADD PRIMARY KEY (`evenement_id`,`etiquette_id`),
  ADD KEY `IDX_B050158BFD02F13` (`evenement_id`),
  ADD KEY `IDX_B050158B7BD2EA57` (`etiquette_id`);

--
-- Index pour la table `evenement_genre_musical`
--
ALTER TABLE `evenement_genre_musical`
  ADD PRIMARY KEY (`evenement_id`,`genre_musical_id`),
  ADD KEY `IDX_1FEC0406FD02F13` (`evenement_id`),
  ADD KEY `IDX_1FEC0406FFFD05DC` (`genre_musical_id`);

--
-- Index pour la table `evenement_ressource`
--
ALTER TABLE `evenement_ressource`
  ADD PRIMARY KEY (`evenement_id`,`ressource_id`),
  ADD KEY `IDX_3DC14995FD02F13` (`evenement_id`),
  ADD KEY `IDX_3DC14995FC6CD52A` (`ressource_id`);

--
-- Index pour la table `genre_musical`
--
ALTER TABLE `genre_musical`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9D48DDAB6C6E55B5` (`nom`),
  ADD KEY `IDX_9D48DDABD5E86FF` (`etat_id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4B98C216C6E55B5` (`nom`),
  ADD KEY `IDX_4B98C211B063272` (`nationalite_id`),
  ADD KEY `IDX_4B98C21D5E86FF` (`etat_id`);

--
-- Index pour la table `groupe_etiquette`
--
ALTER TABLE `groupe_etiquette`
  ADD PRIMARY KEY (`groupe_id`,`etiquette_id`),
  ADD KEY `IDX_4E9ACA6D7A45358C` (`groupe_id`),
  ADD KEY `IDX_4E9ACA6D7BD2EA57` (`etiquette_id`);

--
-- Index pour la table `groupe_genre_musical`
--
ALTER TABLE `groupe_genre_musical`
  ADD PRIMARY KEY (`groupe_id`,`genre_musical_id`),
  ADD KEY `IDX_13D88307A45358C` (`groupe_id`),
  ADD KEY `IDX_13D8830FFFD05DC` (`genre_musical_id`);

--
-- Index pour la table `groupe_label`
--
ALTER TABLE `groupe_label`
  ADD PRIMARY KEY (`groupe_id`,`label_id`),
  ADD KEY `IDX_5B0A9EB87A45358C` (`groupe_id`),
  ADD KEY `IDX_5B0A9EB833B92F39` (`label_id`);

--
-- Index pour la table `groupe_ressource`
--
ALTER TABLE `groupe_ressource`
  ADD PRIMARY KEY (`groupe_id`,`ressource_id`),
  ADD KEY `IDX_C30B96737A45358C` (`groupe_id`),
  ADD KEY `IDX_C30B9673FC6CD52A` (`ressource_id`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3CBF69DD6C6E55B5` (`nom`),
  ADD KEY `IDX_3CBF69DDD5E86FF` (`etat_id`);

--
-- Index pour la table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_EA750E86C6E55B5` (`nom`),
  ADD KEY `IDX_EA750E8D5E86FF` (`etat_id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2F577D59D5E86FF` (`etat_id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F6B4FB2960A30C4A` (`musicien_id`),
  ADD KEY `IDX_F6B4FB297A45358C` (`groupe_id`);

--
-- Index pour la table `membre_instrument`
--
ALTER TABLE `membre_instrument`
  ADD PRIMARY KEY (`membre_id`,`instrument_id`),
  ADD KEY `IDX_6605D3C56A99F74A` (`membre_id`),
  ADD KEY `IDX_6605D3C5CF11D9C` (`instrument_id`);

--
-- Index pour la table `musicien`
--
ALTER TABLE `musicien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_551D84231B063272` (`nationalite_id`),
  ADD KEY `IDX_551D8423D5E86FF` (`etat_id`);

--
-- Index pour la table `musicien_etiquette`
--
ALTER TABLE `musicien_etiquette`
  ADD PRIMARY KEY (`musicien_id`,`etiquette_id`),
  ADD KEY `IDX_5A12B33D60A30C4A` (`musicien_id`),
  ADD KEY `IDX_5A12B33D7BD2EA57` (`etiquette_id`);

--
-- Index pour la table `nationalite`
--
ALTER TABLE `nationalite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9EC4D73F6C6E55B5` (`nom`),
  ADD KEY `IDX_9EC4D73FD5E86FF` (`etat_id`);

--
-- Index pour la table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2B258F677A45358C` (`groupe_id`),
  ADD KEY `IDX_2B258F67FD02F13` (`evenement_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_939F4544C54C8C93` (`type_id`),
  ADD KEY `IDX_939F4544D5E86FF` (`etat_id`);

--
-- Index pour la table `ressource_etiquette`
--
ALTER TABLE `ressource_etiquette`
  ADD PRIMARY KEY (`ressource_id`,`etiquette_id`),
  ADD KEY `IDX_78469329FC6CD52A` (`ressource_id`),
  ADD KEY `IDX_784693297BD2EA57` (`etiquette_id`);

--
-- Index pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_BFE0290EEA750E8` (`label`),
  ADD KEY `IDX_BFE0290ED5E86FF` (`etat_id`);

--
-- Index pour la table `type_ressource`
--
ALTER TABLE `type_ressource`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_27590454EA750E8` (`label`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie_musicale`
--
ALTER TABLE `categorie_musicale`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etiquette`
--
ALTER TABLE `etiquette`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT pour la table `genre_musical`
--
ALTER TABLE `genre_musical`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=658;

--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `label`
--
ALTER TABLE `label`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `musicien`
--
ALTER TABLE `musicien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `nationalite`
--
ALTER TABLE `nationalite`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `passage`
--
ALTER TABLE `passage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_ressource`
--
ALTER TABLE `type_ressource`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie_musicale`
--
ALTER TABLE `categorie_musicale`
  ADD CONSTRAINT `FK_2599F630D639D323` FOREIGN KEY (`categorie_principale_id`) REFERENCES `genre_musical` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `categorie_musicale_genre_musical`
--
ALTER TABLE `categorie_musicale_genre_musical`
  ADD CONSTRAINT `FK_2508C467891F4D5E` FOREIGN KEY (`categorie_musicale_id`) REFERENCES `categorie_musicale` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_2508C467FFFD05DC` FOREIGN KEY (`genre_musical_id`) REFERENCES `genre_musical` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `etiquette`
--
ALTER TABLE `etiquette`
  ADD CONSTRAINT `FK_1E0E195AD5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_B26681E6AB213CC` FOREIGN KEY (`lieu_id`) REFERENCES `lieu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_B26681E88939516` FOREIGN KEY (`type_evenement_id`) REFERENCES `type_evenement` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_B26681ED5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `evenement_etiquette`
--
ALTER TABLE `evenement_etiquette`
  ADD CONSTRAINT `FK_B050158B7BD2EA57` FOREIGN KEY (`etiquette_id`) REFERENCES `etiquette` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_B050158BFD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `evenement_genre_musical`
--
ALTER TABLE `evenement_genre_musical`
  ADD CONSTRAINT `FK_1FEC0406FD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_1FEC0406FFFD05DC` FOREIGN KEY (`genre_musical_id`) REFERENCES `genre_musical` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `evenement_ressource`
--
ALTER TABLE `evenement_ressource`
  ADD CONSTRAINT `FK_3DC14995FC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_3DC14995FD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `genre_musical`
--
ALTER TABLE `genre_musical`
  ADD CONSTRAINT `FK_9D48DDABD5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `FK_4B98C211B063272` FOREIGN KEY (`nationalite_id`) REFERENCES `nationalite` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_4B98C21D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `groupe_etiquette`
--
ALTER TABLE `groupe_etiquette`
  ADD CONSTRAINT `FK_4E9ACA6D7A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_4E9ACA6D7BD2EA57` FOREIGN KEY (`etiquette_id`) REFERENCES `etiquette` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `groupe_genre_musical`
--
ALTER TABLE `groupe_genre_musical`
  ADD CONSTRAINT `FK_13D88307A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_13D8830FFFD05DC` FOREIGN KEY (`genre_musical_id`) REFERENCES `genre_musical` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `groupe_label`
--
ALTER TABLE `groupe_label`
  ADD CONSTRAINT `FK_5B0A9EB833B92F39` FOREIGN KEY (`label_id`) REFERENCES `label` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_5B0A9EB87A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `groupe_ressource`
--
ALTER TABLE `groupe_ressource`
  ADD CONSTRAINT `FK_C30B96737A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_C30B9673FC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `FK_3CBF69DDD5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `label`
--
ALTER TABLE `label`
  ADD CONSTRAINT `FK_EA750E8D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD CONSTRAINT `FK_2F577D59D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_F6B4FB2960A30C4A` FOREIGN KEY (`musicien_id`) REFERENCES `musicien` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_F6B4FB297A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `membre_instrument`
--
ALTER TABLE `membre_instrument`
  ADD CONSTRAINT `FK_6605D3C56A99F74A` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_6605D3C5CF11D9C` FOREIGN KEY (`instrument_id`) REFERENCES `instrument` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `musicien`
--
ALTER TABLE `musicien`
  ADD CONSTRAINT `FK_551D84231B063272` FOREIGN KEY (`nationalite_id`) REFERENCES `nationalite` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_551D8423D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `musicien_etiquette`
--
ALTER TABLE `musicien_etiquette`
  ADD CONSTRAINT `FK_5A12B33D60A30C4A` FOREIGN KEY (`musicien_id`) REFERENCES `musicien` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_5A12B33D7BD2EA57` FOREIGN KEY (`etiquette_id`) REFERENCES `etiquette` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `nationalite`
--
ALTER TABLE `nationalite`
  ADD CONSTRAINT `FK_9EC4D73FD5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `passage`
--
ALTER TABLE `passage`
  ADD CONSTRAINT `FK_2B258F677A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_2B258F67FD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `FK_939F4544C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type_ressource` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_939F4544D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `ressource_etiquette`
--
ALTER TABLE `ressource_etiquette`
  ADD CONSTRAINT `FK_784693297BD2EA57` FOREIGN KEY (`etiquette_id`) REFERENCES `etiquette` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_78469329FC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `type_evenement`
--
ALTER TABLE `type_evenement`
  ADD CONSTRAINT `FK_BFE0290ED5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
