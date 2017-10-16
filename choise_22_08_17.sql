-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 07:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `choise`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture_name` varchar(256) NOT NULL,
  `picture_type` varchar(10) NOT NULL,
  `picture_size` int(8) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`pic_id`, `picture_name`, `picture_type`, `picture_size`) VALUES
(1, 'promo02.jpg', 'image/jpeg', 266481),
(2, 'promo02.jpg', 'image/jpeg', 266481);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `position` int(2) NOT NULL,
  `picture_id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `publish_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `picture_id` (`picture_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `subject_id`, `name`, `content`, `visible`, `position`, `picture_id`, `user_Id`, `publish_date`) VALUES
(1, 2, 'Совет 1', 'Как быть если вы приняли некоторые неверные решения в вашей жизни?\r\nЗначит ли это, что уже поздно что-либо менять? Будете ли вы откинуты в сторону, скомканы, станете бесполезны для БОга и людей. \r\nОдним из первых шагов ДАвида, после того, когда пророк Нафан обличил его было полное и безоговорочное признание своей вины. Давид не надеялся на свои заслуги перед Богом, не умалял своего греха, но приходил к Богу, ожидая милости и прощения. Такой шаг означает, что вы понимаете всю тяжесть своего поступка и готовы понести соответствующее наказание за это. ', 1, 1, 0, 7, '2017-02-07 19:08:50'),
(2, 2, ' Совет 2', 'Omul cit traieste este pus mereu in fata unei alegeri si mereu vor fi cel putin 2 variante sa alegi. Dar orice vei alege, consecintele te vor urma mai devreme sau mai tirziu. Fii sigur de aceasta, ca nimic nu ramine fara urma oricit nu vei ascunde. Deciziile luate sunt ca niste oglinzi, umbrele carora se vor reflecta in timp, marite inzecit. De aceea alegerea trebuie s-o faci cu inima curata, cu gindul la viitor si cu frica de Dumnezeu.  Chiar daca o mica minciuna alegi sa spui, ajungi peste un timp sa crezi si tu in ea, si unde este una este loc si pentru a doua iar viata devine un gol si nu mai simti unde este adevarul. Nu uita ca Dumnezeu vede tot si vei simti asta cind deja va fi tiriu, este si o vorba in popor:"Dumnezeu nu bate cu batu", dar totusi este corect si milostiv. Chiar si unui mic copil sa-i dai sa aleaga din doua jucarii: una curata si frumoasa si una urita si murdara el desigur o va alege pe cea curata si frumoasa, fiindca in subconstientul sau el deja stie ce e bine si ce e rau. Acestea nimeni nu l-a invatat, fiindca Dumnezeu este in noi de cind ne nastem si numai noi alegem daca il lasam sa ramina in inima noastra. De aceea fa o alegere corecta nu fata de tine ci fata de Dumnezeu...\r\n', 1, 2, 2, 6, '2017-02-07 19:14:27'),
(3, 1, 'Вирсавия', 'Вирсавия - очень красивая женщина. Своей красотой она соблазнила царя Давида. Впервые он увидел ее купающейся и послал разведать, кто эта женщина? Ему стало известно, что она является женой Урии Хеттеянина, который на тот момент был его солдатом. Но это не остановило Давида, и он приказал пойти и взять Вирсавию. Она повиновалась и пришла к нему.  Они спали и в результате чего Вирсавия забеременела, о чем его и известила.\r\nУзнав о беременности Вирсавии, Давид всячески пытался утаить свою причастность к этому. Но все попытки его были напрасны, и он решил убить Урия, что соответственно и произошло. Урия героически погиб во время сражения. Узнав о смерти мужа, Вирсавия оплакивала его. После окончания плача, Давид послал за Вирсавией и взял ее к себе. Она стала его женой и родила ему сына.', 1, 1, 0, 5, '2017-02-07 19:14:27'),
(4, 1, 'Урия', 'Urie Hititul a fost un soldat în armata regelui David menționat în Biblia ebraică. \r\nEl a fost soțul lui Batșeba și a fost ucis din ordinul lui David. \r\nProfetul Natan l-a mustrat pe rege pentru că a comis acest adulter și i-a reamintit lui David legământul acestuia cu Dumnezeu. \r\nSoția lui Urie a fost însărcinată de către regele David. \r\nContactul sexual al lui David cu soția lui Urie nu s-a pus drept adulter, deoarece Urie nu era evreu și doar bărbații evrei erau protejați de codul legal de la Sinai. \r\nDavid a încercat fără succes să-l îmbete pe Urie Hititul, pentru ca acesta, plecat de mult în război, să se culce cu nevasta sa Batșeba și astfel preacurvia lui cu aceasta, \r\nîn urma căreia ea rămăsese însărcinată, să fie astfel acoperită.', 1, 2, 0, 1, '2017-02-07 19:14:27'),
(5, 2, 'Совет 3', 'После прочтения данной книги, я могу сделать определённые выводы.\r\nПравильный выбор оказывается сделать намного легче, чем я мог подумать, для этого простонеобходимо знать определённые заповеди, а так же их необходимо предердиваться. Возможно ваши сегодняшние обстоятельства замечательны, но вам нужно принять несколько сложных решений.\r\nкаждый день нам нужно принимать решения, многие из которых безопасны, без долгосрочных последствий. Другие имеют силу изменять течение нашей жихни - в лучшую или худшую сторону.', 1, 3, 0, 3, '2017-02-07 19:14:27'),
(6, 2, 'Совет 4', '1) Прежде  чем принять какое-либо решение, слудет основательно подумать о последствиях. \r\nВедь мог ли Давид предположить, что его неблагой поступок  вызовет череду последущих событий? Думаю, что и не предполагал такого поворота.  \r\n2) При любых обстоятельствах надо оставаться  человечным и уметь поставить себя на место другого. Если бы Давид, прежде чем согрешить, представил, что его друг  также бы возжелал его жену и предал бы его,  стал бы он так поступать? \r\n3) За все действия, за все решения, предпринятые нами будет расплата. Чтобы мы не сделали в жизни (даже втайне) известно нам и известно Богу.Скрыть ничего нельзя. Поэтому нужно помнить, что всегда нужно быть честным с самим собой.\r\n4) Надо развивать в себе стойкость духа, чтобы противостоять  всем соблазнам, которые встречаются на пути и наталкивают на свершение греха.', 1, 4, 0, 4, '2017-02-07 19:14:27'),
(7, 1, 'Нафан', 'Нафан - пророк, которому выдалась не лёгкая задача: облечить самого царя Израля - Давида. Нелегко убедить влиятельного человека в том, что он поступает нечестиво и что ему нужно измениться.\r\n\r\n	С помощью одной мудрой притчи: "В одном городе было два человека: один богатый, другой бедный. У богача было очень много овец и крупного скота, а у бедняка не было ничего, кроме одной маленькой овечки, которую он купил. Он выкормил ее, и она выросла у него вместе с его сыновьями. Она ела от его куска, пила из его чаши, лежала у него на груди и была ему как дочь. Однажды к богачу пришел путник, но он пожалел своих овец и свой крупный скот, чтобы приготовить из них еду для путника, который пришел к нему. Поэтому он взял овечку бедняка и приготовил ее путнику, который пришел к нему", Нафан смог направить царя - Давида.\r\n\r\n	Царю было совершенно ясно, что поступок богача из примера был отвратительным. Однако лишь после того, как Давид вынес себе приговор, Нафан открыл, что пример относился к самому царю: "И сказал Нафан Давиду: ты тот человек". Тогда Давид смог увидеть всю тяжесть своего греха. Это привело к изменениям в мышлении Давида, что помогло ему принять обличение. Он признал, что «пренебрег» заповедями Божьими, согрешив с Вирсавией, и принял справедливое наказание.\r\n', 1, 3, 0, 2, '2017-02-16 18:59:05'),
(8, 1, 'Давид', '<b>Давид</b> был самый знаменитый царь Израиля. Он отличался особенным характером и поведением перед Богом и всем народом. Однако и у великих людей бывают ошибки. ТАкое было и в жизни Давида. Все началось с того, что он не пошел на войну со своим войском. В то время, когда солдаты проливали кровь, он позволял себе расслабиться в кровати до самого вечера.\r\n\r\nОднажды, во время своей вечерней прогулке по царскому дворцу, он увидел купающуюся <a href="http://localhost/choise/article.php?page=3">Вирсавию</a>, которая была очень красива. Несмотря на тот факт, что она была женой одного из его солдат, он велел послать за ней, а затем он переспал с ней. <p>Давид считал, что это останется тайной, но Бог не позволил этому греху пройти просто так и Вирсавия забеременела.</p>\r\n\r\n<i>Продолжение этой истоии читайте в следующих публикациях.</i>', 1, 3, 0, 7, '2017-02-16 18:59:05'),
(9, 3, 'Iesire din situatie', 'Pentru orice fapta vom plati. Pacatul isi are radacini in dorintele, gindurile si faptele necurate ale noastre. Si stim deja la ce urmari grave pe termen lung duce pacatul. Si de aceea noi suntem responsabili pentru el, ci nu trebuie sa dam vina pe altcineva. Dupa cele sus mentionate trebuie sa acceptam ca suntem pacatosi. Iar unica iesire din aceasta situatie, adica iesirea din pacat, este sa ne bazam pe mila lui Dumnezeu prin credinta ca ne va ierta. Fericit va fi acela care va lasa simturile pamintesti deoparte si va urma fara indoiala poruncile Domnului.Nu poti fi iertat pentru pacatele tale, fiindca ai bogatii, sau pentru frumusetea ta, acestea sunt nimicuri pamintesti care Dumnezeu cum ti le-a dat la fel ti le poate lua. Numai prin pocainta curata vei fi iertat. ', 1, 1, 0, 6, '2017-02-16 18:59:05'),
(10, 3, 'Примите решение', 'Каждый из нас бывал в ситуации, когда мы задеваем кого-нибудь словом, поступком, поведением. Тем самым мы обижаем другого человека, причём это, зачастую, происходит неосознанно. А осознаем мы нашу вину не всегда сразу. Бывает нужно пару минут, а может часы, дни или года, но иногда осознание произошедшего не приходит, и тогда посторонним людям приходиться указывать нам на наши ошибки.\r\nВзвесив всё произошедшее, нужно осознать свою вину и принять свои ошибки. И только тогда нужно подойти к человеку, поговорить и попросить прощения. Тогда и обида пройдёт, и на душе легче станет. \r\nНо надо помнить, что сделав поступок и попросив прощения, это не даёт нам право повторять одни и те же ошибки снова и снова.\r\n', 1, 2, 0, 5, '2017-02-16 18:59:05'),
(11, 3, 'Решение', 'Выход из положения \r\n\r\nНа примере истории Давида, который совершил грех прелюбодения. а также последующим за ним убийством,\r\nмы можем проследить и взять для себя: как же правильнее всего найти выход из положения, которое на \r\nпервый взгляд является безвыходным.\r\nВыход из положения можно разбить на 4 ступений или стадий, который должен сдлать человек:\r\n1. Признание греха\r\n2. Раскаяние\r\n3. Исповедание греха\r\n4. Молитва о прощении\r\n   \r\n1) Наверно самое важное и в тоже время самое трудно - это признание греха. На примере Давида, мы видим,\r\nчто он долгое время не хотел признаватсья; лишь благодаря пророрку Нафану, через которого говорил Бог, \r\nДавиду удалось понять и признать совершённый грех.\r\n2) Единственное, что можно сделать с чувством вины за совершённый грех, это смириться и по-настоящему раскаяться. \r\nЕсли мы хотим увидеть милость Божью и получить прощение, мы должны сделать это с покаянным сердцем. \r\n3) Мы должны полностью признать свой грех и принять всю отвественность за то, что мы сделали.\r\nТакже на примере Давида мы видим, что он не пытается себя как-то оправдать или воспользоваться своим\r\nположением в обществе. Он прямо говорит, что он согрешил: "Против Тебя Одного я согрешил и в Твоих глазах сделал зло".\r\n4) Одна из самых ярких молитв о прощении мы также видим на примере Давида. Его молитве посвещена целая глава в библии:\r\nПсалом 50.', 1, 3, 0, 2, '2017-02-16 18:59:05'),
(12, 5, 'Тест страницы', 'Содержание Тест страницы', 1, 1, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `content` varchar(256) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `position` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `content`, `visible`, `position`) VALUES
(1, 'Персонажи', 'ЗДесь будут публиковаться примеры из жизни людей.', 1, 2),
(2, 'Советы', 'РАздел советов', 1, 3),
(3, 'Выход из положения', 'РАздел помощи', 1, 4),
(4, 'Вопросы-Ответы', 'РАздел вопросов и ответов читателям', 1, 5),
(5, 'Test ', 'Test 5 content', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'Grigorii', '123'),
(2, 'Yurii', '123'),
(3, 'Eugen', '123'),
(4, 'Anastasia', '123'),
(5, 'MIhail', '123'),
(6, 'Andrei', '123'),
(7, 'Eduard', '123'),
(8, 'Alex', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
