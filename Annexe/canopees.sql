-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 juil. 2025 à 10:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `canopees`
--

-- --------------------------------------------------------

--
-- Structure de la table `associer_contenu`
--

CREATE TABLE `associer_contenu` (
  `id` int(11) NOT NULL,
  `id_container_id` int(11) NOT NULL,
  `id_contenu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `associer_contenu`
--

INSERT INTO `associer_contenu` (`id`, `id_container_id`, `id_contenu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 10),
(8, 3, 11),
(9, 4, 12),
(10, 5, 13),
(11, 6, 14),
(12, 7, 15),
(13, 8, 7),
(14, 8, 8),
(15, 8, 9),
(16, 9, 16),
(17, 11, 17),
(18, 10, 18),
(19, 12, 19),
(20, 13, 20),
(21, 14, 21),
(22, 15, 22),
(23, 16, 23),
(24, 17, 24),
(25, 18, 25),
(26, 18, 26),
(27, 18, 27),
(28, 18, 28),
(29, 18, 29),
(30, 18, 30),
(31, 19, 31),
(32, 19, 32),
(33, 19, 33),
(34, 19, 34),
(35, 19, 35),
(36, 19, 36),
(37, 20, 37),
(38, 20, 38),
(39, 20, 39),
(40, 20, 40),
(41, 20, 41),
(42, 20, 42),
(43, 21, 43),
(44, 21, 44),
(45, 21, 45),
(46, 21, 46),
(47, 21, 47),
(48, 21, 48),
(49, 22, 49),
(50, 22, 50),
(51, 22, 51),
(52, 22, 52),
(53, 22, 53),
(54, 22, 54);

-- --------------------------------------------------------

--
-- Structure de la table `associer_tarif`
--

CREATE TABLE `associer_tarif` (
  `id` int(11) NOT NULL,
  `id_container_id` int(11) NOT NULL,
  `id_tarif_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `associer_tarif`
--

INSERT INTO `associer_tarif` (`id`, `id_container_id`, `id_tarif_id`) VALUES
(1, 23, 1),
(2, 23, 2),
(3, 23, 3),
(4, 23, 4),
(5, 23, 5),
(6, 23, 6),
(7, 24, 7),
(8, 24, 8),
(9, 24, 9),
(10, 24, 10),
(11, 24, 11),
(12, 25, 12),
(13, 25, 13),
(14, 25, 14),
(15, 25, 15),
(16, 26, 16),
(17, 26, 17),
(18, 26, 18),
(19, 26, 19),
(20, 26, 20),
(21, 26, 21),
(22, 27, 22),
(23, 27, 23),
(24, 27, 24),
(25, 27, 25),
(26, 27, 26),
(27, 27, 27),
(28, 27, 28),
(29, 28, 29),
(30, 28, 30),
(31, 28, 31),
(32, 28, 32);

-- --------------------------------------------------------

--
-- Structure de la table `container`
--

CREATE TABLE `container` (
  `id` int(11) NOT NULL,
  `nom_container` varchar(100) NOT NULL,
  `designation_container` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `container`
--

INSERT INTO `container` (`id`, `nom_container`, `designation_container`) VALUES
(1, 'Accueil_carrousel', 'container pour photo du carroussel'),
(2, 'Accueil_presentation', 'container pour texte de presentation rapide entreprise'),
(3, 'Accueil_prestation', 'container pour texte de presentation rapide prestation entreprise'),
(4, 'Accueil_marketing', 'container pour texte de marketing'),
(5, 'Accueil_particulier', 'container pour texte pour client particulier'),
(6, 'Accueil_professionnel', 'container pour texte pour client profesionnel'),
(7, 'Accueil_collectivite', 'container pour texte pour client collectivite'),
(8, 'Accueil_slider', 'container pour photo pour le slider'),
(9, 'Qui_Nom_profil_1', 'container pour nom pour le profil n°1'),
(10, 'Qui_Contenu_profil_1', 'container pour texte et photo pour le profil n°1'),
(11, 'Qui_Nom_profil_2', 'container pour nom pour le profil n°2'),
(12, 'Qui_Contenu_profil_2', 'container pour texte et photo pour le profil n°2'),
(13, 'Prestation_1', 'container pour texte et photo pour la prestation n°1'),
(14, 'Prestation_2', 'container pour texte et photo pour la prestation n°2'),
(15, 'Prestation_3', 'container pour texte et photo pour la prestation n°3'),
(16, 'Prestation_4', 'container pour texte et photo pour la prestation n°4'),
(17, 'Prestation_5', 'container pour texte et photo pour la prestation n°5'),
(18, 'Prestation_realisation_1', 'container pour photo pour les realisation de la prestation n°1'),
(19, 'Prestation_realisation_2', 'container pour photo pour les realisation de la prestation n°2'),
(20, 'Prestation_realisation_3', 'container pour photo pour les realisation de la prestation n°3'),
(21, 'Prestation_realisation_4', 'container pour photo pour les realisation de la prestation n°4'),
(22, 'Prestation_realisation_5', 'container pour photo pour les realisation de la prestation n°5'),
(23, 'Tarif_Etude', 'container pour texte pour description prestation Etude et tarif associé'),
(24, 'Tarif_Preparation', 'container pour texte pour description prestation Preparation et tarif associé'),
(25, 'Tarif_Plantation', 'container pour texte pour description prestation Plantation et tarif associé'),
(26, 'Tarif_Amenagement', 'container pour texte pour description prestation Aménagement et tarif associé'),
(27, 'Tarif_Abattage', 'container pour texte pour description prestation Abattage et tarif associé'),
(28, 'Tarif_Entretien', 'container pour texte pour description prestation Entretien et tarif associé'),
(29, 'Contact_Message', 'container pour texte pour introduire le formulaire');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id` int(11) NOT NULL,
  `id_page_web_id` int(11) NOT NULL,
  `id_container_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`id`, `id_page_web_id`, `id_container_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 2, 9),
(10, 2, 10),
(11, 3, 11),
(12, 3, 12),
(13, 3, 13),
(14, 3, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17),
(18, 3, 18),
(19, 3, 19),
(20, 3, 20),
(21, 4, 21),
(22, 4, 22),
(23, 4, 23),
(24, 4, 24),
(25, 4, 25),
(26, 4, 26),
(27, 5, 27),
(28, 2, 28),
(29, 2, 29);

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `id` int(11) NOT NULL,
  `description_contenu` longtext DEFAULT NULL,
  `adresse_image_contenu` varchar(255) DEFAULT NULL,
  `contenu_texte_contenu` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`id`, `description_contenu`, `adresse_image_contenu`, `contenu_texte_contenu`) VALUES
(1, 'Bois joliment entretenu', '/uploads/Carrousel/Photo_1_Carrousel.webp', NULL),
(2, 'Jardin avec un bassin', '/uploads/Carrousel/Photo_2_Carrousel.webp', NULL),
(3, 'Magnifique jardin Japonais', '/uploads/Carrousel/Photo_3_Carrousel.webp', NULL),
(4, 'Jardin avec des buis très bien taillés', '/uploads/Carrousel/Photo_4_Carrousel.webp', NULL),
(5, 'Très beau jardin naturel', '/uploads/Carrousel/Photo_5_Carrousel.webp', NULL),
(6, 'Parcours de golf très bien entretenu', '/uploads/Carrousel/Photo_6_Carrousel.webp', NULL),
(7, 'Jardin public bien entretenu', '/uploads/Slider/Photo_1_Slider.webp', NULL),
(8, 'Élagueur travaillant dans un arbre', '/uploads/Slider/Photo_2_Slider.webp', NULL),
(9, 'Élagueur travaillant dans un arbre', '/uploads/Slider/Photo_3_Slider.webp', NULL),
(10, 'texte accueil présentation', NULL, '<span class=\"bold_paragraphe\">Chez Canopées</span>, nous sommes passionnés par la nature et le soin des espaces verts. Depuis plusieurs années, nous mettons <span class=\"green_text semibold_paragraphe\">notre expertise</span> à votre service pour créer, entretenir et embellir vos espaces extérieurs. Notre équipe de <span class=\"green_text semibold_paragraphe\">professionnels qualifiés</span> s\'engage à offrir <span class=\"green_text semibold_paragraphe\">des prestations de haute qualité, respectueuses de l\'environnement</span> adaptées à vos besoins.'),
(11, 'texte accueil prestation', NULL, '<ul class=\"listePresentation\"><h2 class=\"bold_paragraphe paragraphe_desktop mt-2\">Nos prestations :</h2><li class=\"green_text\">Conception et réalisation d\'espaces verts.</li><li class=\"green_text\">Entretien des espaces verts.</li><li class=\"green_text\">Taille des haies.</li><li class=\"green_text\">Élagage et abattage d\'arbres.</li><li class=\"green_text\">Valorisation des déchets verts (compostage).</li></ul>'),
(12, 'texte accueil marketing', NULL, 'Faire appel à Canopées, c\'est bénéficier d\'une <span class=\"green_text semibold_paragraphe\">expertise de confiance</span>, d\'un <span class=\"green_text semibold_paragraphe\">savoir-faire éprouvé</span> et d\'un accompagnement personnalisé pour tous vos projets paysagers. Notre approche repose sur <span class=\"green_text semibold_paragraphe\">l\'écoute, la créativité, et le respect de l\'environnement</span>, pour que chaque intervention soit une <span class=\"green_text semibold_paragraphe\">réussite durable et satisfaisante</span>.'),
(13, 'texte accueil particulier', NULL, '<li><span class=\"bold_paragraphe\">Propriétaires de maisons</span> : Ceux qui souhaitent transformer ou entretenir leur jardin pour en faire un <span class=\"semibold_paragraphe green_text\">espace agréable, esthétique et fonctionnel</span>.</li><li><span class=\"bold_paragraphe\">Résidents de lotissements et de copropriétés</span> : Besoin de <span class=\"semibold_paragraphe green_text\">services réguliers</span> pour la taille des haies, la tonte des pelouses, l\'élagage et le <span class=\"semibold_paragraphe green_text\">maintien d\'espaces communs</span>.</li>'),
(14, 'texte accueil professionnel', NULL, '<li><span class=\"bold_paragraphe\">Bureaux et bâtiments commerciaux</span> : Pour les entreprises désireuses de créer des espaces verts autour de leurs bâtiments, offrant un <span class=\"semibold_paragraphe green_text\">cadre de travail agréable</span> aux employés et une <span class=\"semibold_paragraphe green_text\">image de marque respectueuse de l\'environnement</span>.</li><li><span class=\"bold_paragraphe\">Centres commerciaux et zones commerciales</span> : Aménagement et entretien d\'espaces verts accueillants pour les visiteurs, contribuant à l\'<span class=\"semibold_paragraphe green_text\">attractivité du site</span>.</li><li><span class=\"bold_paragraphe\">Hôtels et résidences touristiques</span> : Besoin d\'espaces extérieurs soignés et esthétiques pour offrir aux clients un <span class=\"semibold_paragraphe green_text\">environnement de détente et de bien-être</span>.</li>'),
(15, 'texte accueil collectivite', NULL, '<li><span class=\"bold_paragraphe\">Mairies et collectivités locales</span> : Aménagement et entretien de parcs, jardins publics, espaces verts urbains et zones piétonnes pour <span class=\"semibold_paragraphe green_text\">embellir la commune</span> et offrir des <span class=\"semibold_paragraphe green_text\">espaces de détente aux citoyens</span>.</li>'),
(16, 'nom qui profil 1', NULL, 'Bob Martin'),
(17, 'nom qui profil 2', NULL, 'Tom Durand'),
(18, 'contenu qui profil 1', '/uploads/Portrait/Portrait_Bob_Martin.webp', 'Bob Martin est co-fondateur et Directeur Technique de Canopées. Fort de 15 ans d’expérience en jardinage et aménagement paysager, il associe passion pour la nature et expertise technique. Diplômé en horticulture, il a débuté comme jardinier avant d’évoluer rapidement grâce à son savoir-faire. Chez Canopées, il supervise la conception et l’exécution des projets, privilégiant des solutions écologiques et durables. Bob collabore étroitement avec les clients pour créer des espaces verts harmonieux favorisant la biodiversité. Engagé dans la sensibilisation à la préservation des jardins, il organise des ateliers et événements communautaires sur l’entretien des espaces verts et la gestion des déchets. Passionné de plein air, il aime randonner et jardiner. Son leadership et son enthousiasme font de lui un pilier apprécié de l’équipe de Canopées.'),
(19, 'contenu qui profil 2', '/uploads/Portrait/Portrait_Tom_Durand.webp', 'Tom Durand, co-fondateur et Directeur Commercial de Canopées, possède plus de 10 ans d’expérience dans le jardinage et l’entretien des espaces verts. Issu du secteur de la vente et du service client, il a cofondé Canopées avec Bob pour offrir des services d’aménagement paysager de qualité, axés sur la durabilité. Responsable des relations clients et du développement des projets, il veille à répondre aux besoins spécifiques de chacun avec une approche personnalisée. Grâce à son expertise en gestion commerciale, il contribue à la croissance de l’entreprise en explorant de nouvelles opportunités. Convaincu du rôle clé de l’aménagement paysager dans la protection de l’environnement, il sensibilise ses clients à des pratiques écoresponsables. Passionné de nature, il consacre son temps libre au vélo, au jardinage et à des initiatives écologiques locales. Son engagement et son dynamisme font de lui un leader inspirant au sein de Canopées.'),
(20, 'Equipe de Canopées autour d’une table pour conception espace vert', '/uploads/Prestation/Conception.webp', 'Conception et réalisation d\'espace verts'),
(21, 'Agent de Canopées en train de tondre une pelouse', '/uploads/Prestation/Entretien.webp', 'Entretien des espaces verts'),
(22, 'Agent de Canopées en train de tailler des haies', '/uploads/Prestation/Taille_haie.webp', 'Taille des haies'),
(23, 'Deux mains tiennent du compost végetal', '/uploads/Prestation/Compost.webp', 'Valorisation des déchets verts (compostage)'),
(24, 'Agent de Canopées dans une nacelle en train d’élaguer un arbre', '/uploads/Prestation/Elagage.webp', 'Élagage et abattage'),
(25, 'Jolie jardin avec un massif fleuri', '/uploads/Fenetre_modale/conception1.webp', NULL),
(26, 'Jardin a la française avec buis taillés', '/uploads/Fenetre_modale/conception2.webp', NULL),
(27, 'Allée bordée de cactus', '/uploads/Fenetre_modale/conception3.webp', NULL),
(28, 'Jardin avec pelouse et arbres dans la cour d’un batiment', '/uploads/Fenetre_modale/conception4.webp', NULL),
(29, 'Jardin avec pelouse et palmier autour d’une mosaïque et statue', '/uploads/Fenetre_modale/conception5.webp', NULL),
(30, 'Jardin avec des massifs de fleurs et d’arbustes autour d’un chemin d’accès à une maison', '/uploads/Fenetre_modale/conception6.webp', NULL),
(31, 'Agent de Canopées en train de couper un arbre avec tronçonneuse', '/uploads/Fenetre_modale/elagage1.webp', NULL),
(32, 'Place avec des arbres bien taillés', '/uploads/Fenetre_modale/elagage2.webp', NULL),
(33, 'Rue avec des arbres bien taillées', '/uploads/Fenetre_modale/elagage3.webp', NULL),
(34, 'Chemin avec des arbres bien taillées', '/uploads/Fenetre_modale/elagage4.webp', NULL),
(35, 'Buis bien taillé', '/uploads/Fenetre_modale/elagage5.webp', NULL),
(36, 'Chemin accédant a une maison bordé d’arbres bien taillés', '/uploads/Fenetre_modale/elagage6.webp', NULL),
(37, 'Maison avec jardin bien entretenu', '/uploads/Fenetre_modale/entretien1.webp', NULL),
(38, 'Chemin avec jardin bien entretenu', '/uploads/Fenetre_modale/entretien2.webp', NULL),
(39, 'Jardin bien entretenu', '/uploads/Fenetre_modale/entretien3.webp', NULL),
(40, 'Jardin bien entretenu', '/uploads/Fenetre_modale/entretien4.webp', NULL),
(41, 'Jardin bien entretenu', '/uploads/Fenetre_modale/entretien5.webp', NULL),
(42, 'Jardin bien entretenu', '/uploads/Fenetre_modale/entretien6.webp', NULL),
(43, 'Chemin avec haies bien taillées', '/uploads/Fenetre_modale/taille1.webp', NULL),
(44, 'Chemin avec haies bien taillées', '/uploads/Fenetre_modale/taille2.webp', NULL),
(45, 'Chemin avec haies bien taillées', '/uploads/Fenetre_modale/taille3.webp', NULL),
(46, 'Chemin avec haies bien taillées', '/uploads/Fenetre_modale/taille4.webp', NULL),
(47, 'Chemin avec haies bien taillées', '/uploads/Fenetre_modale/taille5.webp', NULL),
(48, 'Jardin a la française avec haies bien taillées', '/uploads/Fenetre_modale/taille6.webp', NULL),
(49, 'Jardin avec brf', '/uploads/Fenetre_modale/valorisation1.webp', NULL),
(50, 'Mains montrant du brf', '/uploads/Fenetre_modale/valorisation2.webp', NULL),
(51, 'Machine réalisant du  brf', '/uploads/Fenetre_modale/valorisation3.webp', NULL),
(52, 'Machine réalisant du  brf', '/uploads/Fenetre_modale/valorisation4.webp', NULL),
(53, 'Jardin avec brf', '/uploads/Fenetre_modale/valorisation5.webp', NULL),
(54, 'Bacs a compost', '/uploads/Fenetre_modale/valorisation6.webp', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250711162303', '2025-07-18 15:11:14', 836);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom_message` varchar(100) NOT NULL,
  `prenom_message` varchar(100) NOT NULL,
  `adresse_message` longtext NOT NULL,
  `adresse_mail_message` varchar(150) NOT NULL,
  `telephone_message` varchar(50) NOT NULL,
  `texte_message` longtext NOT NULL,
  `statut_message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `nom_message`, `prenom_message`, `adresse_message`, `adresse_mail_message`, `telephone_message`, `texte_message`, `statut_message`) VALUES
(1, 'Meyer', 'Pierre', '1, rue Frédérique Baron\n95546 Levy', 'georges.ramos@wanadoo.fr', '+33 (0)4 80 99 84 55', 'Suscipit cumque autem voluptatem sunt voluptas. Repellendus et in veritatis fugit. Fugiat enim nemo fugit veritatis. Sed laboriosam odit repudiandae.', 'A_Traiter'),
(2, 'Gregoire', 'Dominique', 'impasse Lucas Pottier\n04810 Lenoir-sur-Mer', 'ulacombe@yahoo.fr', '07 66 63 63 60', 'Ab inventore minima laborum qui optio cum ad. Consequatur perspiciatis aut natus reprehenderit consequatur. Magnam est praesentium aspernatur quia suscipit.', 'A_Traiter'),
(3, 'Delorme', 'Guillaume', 'place Blanc\n05484 Rouxboeuf', 'christine.pichon@deschamps.fr', '+33 7 59 31 66 11', 'Ratione officiis praesentium qui neque adipisci aut. Corporis perferendis est natus omnis nobis. Atque provident sequi quis quia. Nesciunt et deleniti modi rem ut fuga fugit.', 'A_Traiter'),
(4, 'Fabre', 'Madeleine', '66, rue Valette\n65405 Michauddan', 'labbe.laure@bouchet.fr', '+33 6 42 71 40 73', 'Eum voluptates praesentium expedita necessitatibus. Ducimus minus vel similique omnis. Qui nihil sed incidunt sequi enim architecto.', 'A_Traiter'),
(5, 'Texier', 'Manon', '10, rue Robert\n75611 Regnier', 'roger62@yahoo.fr', '+33 (0)3 62 51 71 33', 'Beatae omnis velit omnis et quod corporis. Id iure quo alias vero neque consequatur perspiciatis. Tempora ea ut eius neque asperiores qui.', 'A_Traiter'),
(6, 'Michaud', 'Élodie', '5, rue Mathieu\n19152 Weiss', 'philippine.mace@munoz.com', '0895389174', 'Hic eius numquam qui qui vel inventore totam. Aut aut facere eos molestiae. Libero sit debitis quis corporis.', 'A_Traiter'),
(7, 'Girard', 'Dorothée', 'rue de Camus\n38970 Boulanger-la-Forêt', 'thibault49@hotmail.fr', '04 01 90 26 19', 'Doloribus at dolores hic. Minima aut voluptatem provident harum odit.', 'A_Traiter'),
(8, 'Gosselin', 'François', '754, rue de Chevallier\n02000 DevauxBourg', 'rene.pages@tele2.fr', '0301049097', 'Suscipit aut corporis eos perspiciatis magni sequi voluptatibus. Esse ipsum iusto ut quam ut deleniti. Eos omnis incidunt consequatur consequatur fuga est. Et qui modi quia.', 'A_Traiter'),
(9, 'Lefort', 'Vincent', '99, chemin Aubert\n07096 Guillot', 'stephane47@baron.fr', '0198781554', 'Et perferendis voluptatem repellendus aut sint ex. Aut non et quibusdam earum possimus veniam cum. Ab aliquam ut qui. Esse laudantium architecto cumque rerum.', 'A_Traiter'),
(10, 'Clerc', 'Michelle', '120, rue Pénélope Gros\n44607 Martineau', 'vfrancois@henry.net', '0897005223', 'Molestiae aut nobis iure est illum consequatur. A voluptas quia quibusdam rerum non illum. Qui ratione placeat sit aut dolorum mollitia. Aut a qui omnis velit delectus est.', 'A_Traiter');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `page_web`
--

CREATE TABLE `page_web` (
  `id` int(11) NOT NULL,
  `adresse_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page_web`
--

INSERT INTO `page_web` (`id`, `adresse_url`) VALUES
(1, 'Accueil'),
(2, 'Qui_sommes_nous'),
(3, 'Prestations'),
(4, ' Tarifs'),
(5, 'Contact');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `designation_tarif` varchar(255) NOT NULL,
  `prix_tarif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id`, `designation_tarif`, `prix_tarif`) VALUES
(1, 'Consultation initiale et devis', 'Gratuit'),
(2, 'Étude de faisabilité', '200 - 500'),
(3, 'Conception de plan paysager (2D)', '500 - 2 000'),
(4, 'Conception en 3D', '800 - 3 500'),
(5, 'Plan de plantation', '300 - 1 500'),
(6, 'Plan d’arrosage automatique', '300 - 1 000'),
(7, 'Débroussaillage / Nettoyage du terrain', '2 - 5'),
(8, 'Terrassement et nivellement', '5 - 20'),
(9, 'Apport de terre végétale', '10 - 30'),
(10, 'Engazonnement (gazon en semis)', '3 - 8'),
(11, 'Pose de gazon en rouleau', '10 - 20'),
(12, 'Plantation d’arbustes (haie, massif)', '10 - 50'),
(13, 'Plantation d’arbres', '50 - 500'),
(14, 'Plantation de fleurs vivaces', '5 - 20'),
(15, 'Création de massifs fleuris (au m²)', '30 - 100'),
(16, 'Pose de paillage (écorce, copeaux, au m²)', '10 - 30'),
(17, 'Création d’une allée (graviers, pavés, au m²)', '30 - 150'),
(18, 'Installation d\'un arrosage automatique (au m²)', '8 - 25'),
(19, 'Installation d’un éclairage extérieur (a l\'unité)', '50 - 500'),
(20, 'Construction d’une terrasse bois/pierre (au m²)', '80 - 250'),
(21, 'Création d’un bassin d’ornement', '1 500 - 10 000'),
(22, 'Petit arbre (jusqu\'à 5 m)', '100 - 300'),
(23, 'Arbre moyen (5 à 10 m)', '300 - 800'),
(24, 'Grand arbre (10 à 20 m)', '800 - 2 000'),
(25, 'Très grand arbre (plus de 20 m)', '2 000 - 5 000'),
(26, 'Dessouchage (rognage de la souche)', '50 - 500'),
(27, 'Évacuation des branches et du tronc', '50 - 300'),
(28, 'Broyage des branches sur place', '30 - 100'),
(29, 'Tonte de pelouse', '30 - 80'),
(30, 'Taille de haies (au ml)', '5 - 15'),
(31, 'Élagage d’arbres', '100 - 800'),
(32, 'Désherbage et entretien des massifs', '50 - 200');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adresse` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `prenom`, `nom`, `adresse`) VALUES
(1, 'charles.berthelot@hotmail.fr', '[\"ROLE_USER\"]', '$2y$10$LX2FealbexBJg2oahBWmV.L1L0NPhbWrN9Mlk5TkTTuUoixO08Rvq', 'Marc', 'Pelletier', 'rue de Parent\n39791 Mallet'),
(2, 'emmanuelle.lefort@free.fr', '[\"ROLE_USER\"]', '$2y$10$uQhxkfnrj1IuZNrXEFwsZ.bIhURLGBCyv884BYS6TUpJcafuxlPUW', 'Julie', 'Devaux', '9, boulevard de Petitjean\n18005 LeclercqBourg'),
(3, 'joseph66@hotmail.fr', '[\"ROLE_USER\"]', '$2y$10$rNRj9KugsqtWwTJbYNk5O.b8ilXq3RU8SSKiwW6/iUsNNX6Cvk86W', 'Émilie', 'Fleury', '44, avenue Duhamel\n34905 Chevallier'),
(4, 'alfred62@collet.com', '[\"ROLE_USER\"]', '$2y$10$ViLNUGNz498u1miK03tcwepAmCd6iGmxa27GfyqelFl1MxBDjeWtG', 'Christophe', 'Perret', '79, place de Dos Santos\n24134 Guichard'),
(5, 'sdelannoy@mercier.com', '[\"ROLE_USER\"]', '$2y$10$q2MrOOSQD3z6QRX8eS4Gxu0fnl26QUfoYwl2lEATH6iUPX8PIYYjG', 'Audrey', 'Colas', '48, avenue de Caron\n66103 Perrin'),
(6, 'uallain@rey.net', '[\"ROLE_USER\"]', '$2y$10$zbdvhaXk72GIgZiOIo5Vi./3Vow59YX2pOoto817jM0RRZI05x7cq', 'André', 'Menard', 'place Lucas Dufour\n02958 Tanguyboeuf'),
(7, 'randre@orange.fr', '[\"ROLE_USER\"]', '$2y$10$aCLfEW5G8OwWBR34/IuPHuxLbmNI/zTXcwvbUm1/SeFImKsER3AYW', 'Madeleine', 'Paris', '14, place Étienne Benoit\n51521 PoirierVille'),
(8, 'tpereira@sfr.fr', '[\"ROLE_USER\"]', '$2y$10$Xef7Xah0DamIo6mm7UaFhuQ238SwSlJV1FVPtuoHZZHKVCkFNnER2', 'Auguste', 'Mathieu', '37, chemin de Fontaine\n69051 Guillon-sur-Mer'),
(9, 'daniel.jean@hotmail.fr', '[\"ROLE_USER\"]', '$2y$10$gbAD.m.aEh6bAMM9kH9/2OgxQz6CtotVNKA46hN1vLlf3AIQdwOra', 'Marcel', 'Gallet', 'rue Tanguy\n11706 Delmas'),
(10, 'theodore25@noos.fr', '[\"ROLE_USER\"]', '$2y$10$wMofdg.k9MsVmWk6vFJm7.Vwnq8TC6DyuDdBdTLJ.zhTm6UXuMIje', 'Susan', 'Chauveau', '882, impasse Chantal Leroux\n83519 Guichard-les-Bains'),
(11, 'admi@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$yPTih14NAJo7os7Rhymi6.yo/MogvKhVHNzu36a4kwCSyng8ne1BG', 'jer', 'bon', 'adr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `associer_contenu`
--
ALTER TABLE `associer_contenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D658726A9FE08230` (`id_container_id`),
  ADD KEY `IDX_D658726A9996445F` (`id_contenu_id`);

--
-- Index pour la table `associer_tarif`
--
ALTER TABLE `associer_tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4BC8158F9FE08230` (`id_container_id`),
  ADD KEY `IDX_4BC8158F65A7E6CC` (`id_tarif_id`);

--
-- Index pour la table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3C914DFD89DC7CA4` (`id_page_web_id`),
  ADD KEY `IDX_3C914DFD9FE08230` (`id_container_id`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `page_web`
--
ALTER TABLE `page_web`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `associer_contenu`
--
ALTER TABLE `associer_contenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `associer_tarif`
--
ALTER TABLE `associer_tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `container`
--
ALTER TABLE `container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `contenir`
--
ALTER TABLE `contenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `page_web`
--
ALTER TABLE `page_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `associer_contenu`
--
ALTER TABLE `associer_contenu`
  ADD CONSTRAINT `FK_D658726A9996445F` FOREIGN KEY (`id_contenu_id`) REFERENCES `contenu` (`id`),
  ADD CONSTRAINT `FK_D658726A9FE08230` FOREIGN KEY (`id_container_id`) REFERENCES `container` (`id`);

--
-- Contraintes pour la table `associer_tarif`
--
ALTER TABLE `associer_tarif`
  ADD CONSTRAINT `FK_4BC8158F65A7E6CC` FOREIGN KEY (`id_tarif_id`) REFERENCES `tarif` (`id`),
  ADD CONSTRAINT `FK_4BC8158F9FE08230` FOREIGN KEY (`id_container_id`) REFERENCES `container` (`id`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `FK_3C914DFD89DC7CA4` FOREIGN KEY (`id_page_web_id`) REFERENCES `page_web` (`id`),
  ADD CONSTRAINT `FK_3C914DFD9FE08230` FOREIGN KEY (`id_container_id`) REFERENCES `container` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
