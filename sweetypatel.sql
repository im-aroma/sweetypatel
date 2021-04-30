-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 08:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetypatel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(200) DEFAULT NULL,
  `admin_pwd` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_pwd`, `created_at`) VALUES
(2, 'admin', 'e6e061838856bf47e1de730719fb2609', '2020-07-22 16:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(200) DEFAULT NULL,
  `sub_blog_title` varchar(200) DEFAULT NULL,
  `blog_des` text DEFAULT NULL,
  `blog_img` varchar(200) DEFAULT NULL,
  `img_alt_title` varchar(200) DEFAULT NULL,
  `posted_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `sub_blog_title`, `blog_des`, `blog_img`, `img_alt_title`, `posted_date`, `updated_date`) VALUES
(17, 'Most Expensive  Female Escort  bhubaneswar', 'Professional Call girls in bhubaneswar', '<p>It was the first time I went to a brothel. I was getting ready to have a some action but was a little skeptical ast first. My friend had recommended this. He said I would have an experience like none other and was he right. The place was exquisite, with beautiful girls who were elite female escorts in bhubaneswar. As I entered the location, It was evident that the girls where next level.&nbsp;</p>\r\n\r\n<p>It was quite an expereince. There were so many options to choose from and all where 5 star chicks with the looks that can make your eyes open in bliss. The most difficult things was to make a selection. I chose a North-eastern looking beauty. She took my hand and guided me towards her room.&nbsp;</p>\r\n\r\n<p>As we sat inside the room, she proceeded to fill my glass with wine and we proceeded to have a conversation. I asked her about her profession to which she very boldy answerted, &quot;I have been with many people and many high end hotels with wealthy men. I like what I do, as it takes care of my commmodities. It is very satisfying when your meet people who take you for shopping, buy your gifts in exchange of your time.&quot;</p>\r\n\r\n<p>That&#39;s the time is actually clicked to me that these girls are not your tradional call girls. There was a huge difference as call girls will give you sexual pleasure, while escorts give you a pleasurable expereince. You are essentially paying for their time. They know how to talk and make you comfortable. bhubaneswar escorts from bhubaneswar Beauties know how to encourage you and will most likely tell you what you would want to here.</p>\r\n\r\n<p>As the night began to get darker, things were getting spicy between us. I was getting kisses and felt her hand move around my body. I was going to get lucky. She smelt like a fresh fragrance of flowers which set the mood for me. As the night went on, I realized that the toime and money spent for a qualtiy time was completely worth it.</p>\r\n', '853af04b5767b6c9bc58ff2c94a4bc9e.jpg', 'bhubaneswar Escorts Blog', '2019-06-21 19:04:54', '2019-09-22 16:26:29'),
(21, 'Rendezvous bhubaneswar Escort Girls At Your Service', 'bhubaneswar Escorts Agency', '<p>Especially in our escorts service bhubaneswar, you can keep expectation to a large level. We are such people who believe in quality more than money. Above all we want you to trust us and the service we provide. We have been here at this place from more than a decade and what we have learned is keeping a promise is the most important thing to get the trust of our valuable clients who have shown faith in us by taking our escorts service.</p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/61b33339ea2718758fd329d96f5d27e4.jpg\" /></p>\r\n\r\n<p>Whatever we offer to you or whatever you heard through us, you will get the same and we won’t make any changes while delivering you the service. We consider even small aspects and everything sure matters to us. We know if you get satisfied both through our hospitality and from our escort girl, you are never going to forget us in the future.   <br />\r\nIn our company, we always prefer what you like, your comfort, and we would like to arrange things as per your convenience. So whatever the service you take from us, you will feel happy about the way it happens. With that, our purely dedicated escort girl delights your mind with her friendly and caring nature. As said, the experience gives you so much joy and you will, of course, feel happy for the way we treat you.</p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/6814fbb597281924572eb9644c2bc803.jpg\" style=\"width: auto; margin: 0 auto; display: flex;\" /></p>\r\n\r\n<p>We aim at placing you in a comfortable zone. Which means once you are with us, it will be like staying in a more secure place where you can be like however you want. As you have no restriction to do things, you can explore a new world of pleasure which you have not even imagined. <br />\r\nEven in the case of our bhubaneswar escorts, things are the same and they are the girls who are working in our escort agency and of course they had to follow those principles as per our company rules. The time and place obviously matter a lot in every business and if it\'s not perfect then things will become difficult for sure. </p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/6cfe98bd26aff5ce2e77550c5595630d.jpg\" style=\"width: auto; margin: 0 auto; display: flex;\" /></p>\r\n\r\n<p>With our escorts, you can observe that perfectness and our escorts be there at your place at the exact time that they have been booked. And even at incall, the girl will be there at the location 10 minutes early than the booking time. This applies to each and every of our service and to every of our escort girls. Whoever the escort you book, she not just come at the right time, also lets you have perfect sexual pleasure in a clever manner.</p>\r\n', '394357010b1f8bf9cb0dbc4b11ca8c53.jpg', 'bhubaneswar Escorts Blog', '2019-09-20 13:00:37', '2021-04-26 16:57:34'),
(22, 'Our bhubaneswar Escorts A Real Class or Just Cheap Escorts.', 'High Society Call Girls in bhubaneswar', '<p>Our bhubaneswar escorts Agency is such a place which can offer you things beyond your expectations and here at this place you can get to see many things and all of them are related to love and lust. While it is one of the basic requirements of life, many couldn&rsquo;t able to get it properly and that is why this escorts service has been created and today it can provide you whatever kind of satisfaction you want.&nbsp;</p>\r\n\r\n<p><img alt=\"bhubaneswar Call Girls Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/bcbfc839f044771c0d715fc0e6a1231a.jpg\" style=\"width: 300px; height: 459px;\" /><br />\r\nWhenever you think of pleasure or lust, remember our escort service bhubaneswar because we are the only one who fits properly for both your desires and budget. You can get in touch with the most sophisticated, educated and highly beautiful girls and also you can get in touch with the normal good looking girl.&nbsp;<br />\r\nIf you are really an erotic person, then you will understand the difference in both of them. &nbsp;Even if you are not that erotic, you don&rsquo;t need to worry much because our escorts will teach you how to enjoy their beauty in different ways and how to create erotic thrills.&nbsp;</p>\r\n\r\n<p><img alt=\"Dating Girls bhubaneswar\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/415a0ea45ace18e24098d2c962a74a4d.jpg\" style=\"width: 300px; height: 459px;\" /><br />\r\nThis is all because we have given them the right training, and with this, the girl easily understands what kind of taste you have and your intentions.&nbsp;<br />\r\nEscorts bhubaneswar is of different types. You not only have one or two options to go with. There were so many kinds of dating girls, which are designed especially for you and it helps you to find the girl based on your desires, your comfort, and your money.&nbsp;<img alt=\"bhubaneswar Escorts\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/f219ac768ba717bc46e9ee40f8920428.jpg\" style=\"width: 300px; height: 459px;\" /><br />\r\nAs said, for each of your desires and for any of your taste there will be escorts always available and you can choose from age 16 to 45. There will be high-class VIP girls or there will be hot housewife or there will be young college girls. On each category, you can browse different beauties and everyone makes your time unforgettable. They all are brilliant in their own terms and they are doing this job with great passion. <img alt=\"Escorts Service bhubaneswar Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/20bce6fb2a6428cd60891cda90e4c58c.jpg\" style=\"width: 300px; height: 459px;\" />We have opportunities for anybody who wants to work as escorts. For those educated and matured girls training is not necessary because they had aware how to satisfy a person immensely in different aspects. Above all, you can also get in touch with some escorts with low money and that is called as cheap escorts. Through this, you can meet our bhubaneswar escorts just with your short budget and you don&rsquo;t need to pay much.</p>\r\n', 'f46470d6d79a430603e6614ae6397d9a.jpg', 'Women Seeking Men in bhubaneswar', '2019-09-20 14:56:08', '2019-09-20 15:01:13'),
(23, 'The Best Authorized Escorts Agency in bhubaneswar  \"bhubaneswarbeauties.com\"', 'The Best Intown Models For Fun', '<p>Experience of pleasure in a more classy way is possible here at our bhubaneswar beauties escorts It is a place which has authorization for providing its clients a humongous erotic experience. Of course, there are many forms in lust and you always like to enjoy that in your own style. But things wouldn&rsquo;t be available as per your likings. That is why we made this escort service where you can make anything possible.&nbsp;</p>\r\n\r\n<p><img alt=\"bhubaneswar Female Escorts in bhubaneswar\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/622fcf3f2e6eb358c0dda12317165ff5.jpg\" style=\"width: 300px; height: 459px;\" /><br />\r\nYou can get access to a most terrific sexual style and as per that material will be there for you. At that particular time of booking, you can enjoy the pleasure to another level and girls support will obviously there for you. As said, it is really hard for you to provide the experience of your choice without authorization and we need to go through several procedures to take permission and after that government allows us the freedom.&nbsp;</p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Classified\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/e37923c7a09ba7b79d3b233d22836386.jpg\" style=\"width: 300px; height: 459px;\" /><br />\r\nNow you don&rsquo;t need to worry about anything at all, whatever you have in mind just tell us and we sure make it possible for you. We can provide you the greatest comfort that you can remember. And it will be filled with expensive materials and top-class facilities. We are aware that even small things matter a lot when you are spending a romantic time with a girl and we did place those things for you.&nbsp;</p>\r\n\r\n<p><img alt=\"Independent Call Girls in bhubaneswar\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/e576bd59cc261f40b3d375e8ba149ac4.jpg\" style=\"width: 300px; height: 459px;\" /><br />\r\nSo you can use it as per your mood. As our escorts were highly passionate, they won&rsquo;t make you bored even a single minute and always involves you into unique sexual styles and that will make you even more enthusiastic. Throughout the entire time, you won&rsquo;t just go through sex. &nbsp;You will experience a real affection and that is what indulges you a lot.<br />\r\nAs the name suggests, you will be in the world of beauties and of course, you will get so many choices to chose. And not just one or two kinds, there will be around hundreds of kinds available for you with details.&nbsp;</p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/240b76dd2a1b0c33f88fcafb84e57474.jpg\" style=\"width: 300px; height: 459px;\" /></p>\r\n\r\n<p>So you can choose one, based on who fits your requirements. Whoever you chose, the girl will be going to be one of the sexiest girls you have ever met. When you get mingled with both that comfort and beauty, things will going to satisfy beyond your imaginations. As said, there are no rules or regulations for you. However you want to enjoy things, you could do that without obstacles.</p>\r\n', 'd1f241c1f1a3589df1efa86faac8031b.jpg', 'bhubaneswar Female Escorts Blog', '2019-09-20 15:45:17', '2019-09-20 15:49:57'),
(24, 'bhubaneswar Female Escorts a Wonderful Luxury', 'Erotic Fun With Sexy Indian Girls', '<p>Getting in touch with our escorts bhubaneswar itself is like a dream come true for you because you will be going to have experience with one of the most sophisticated, beautiful, and educated girls Who are brilliant in all the aspect which you expect in a woman or a girl. As they were hugely trained and talented, you will be going to have one of the finest sexual experience.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Agency\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/31e369aeab35235bf4290d09492da4a9.jpg\" style=\"width: 300px; height: 459px;\" /></p>\r\n\r\n<p>You need to keep in mind that beauty won&rsquo;t enough to get ultimate satisfaction. The woman you are spending time with also needs to give her full cooperation and then only you can have that pleasure. More than that, she had to share things from her heart and if she does that then you can able to see an unprecedented moment of love and lust. With our bhubaneswar escorts, you can find all the above things and what else you want more. We named it a wonderful luxury and that is because our bhubaneswar escorts are like the gems.&nbsp;</p>\r\n\r\n<p><img alt=\"bhubaneswar Escorts Dating\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/37d2807df611b9cbe418b8ce74e5914d.jpg\" style=\"width: 300px; height: 459px;\" /></p>\r\n\r\n<p>They were not just the pretty faces, also good at heart and of course, loves what they do. Whoever the girl you book through our agency, she won&rsquo;t consider you just as a customer. She looks at you as someone she knows and tries to know about what you like a lot and the desires you have. So that kind of intimacy helps you to stay more comfortable and you won&rsquo;t hesitate much to share your dreams. This is why we named it luxury and as said our escorts are luxurious in terms of beauty and luxurious in giving you the ultimate erotic pleasure.</p>\r\n\r\n<p><img alt=\"VIP bhubaneswar Escorts\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/913dc6606ba495d9408df645a0001a56.jpg\" style=\"width: 300px; height: 459px;\" /></p>\r\n\r\n<p>We won&rsquo;t recruit girls just by considering how they look.&nbsp; We also considers the kind of interest they had for the work, including passion. Many aspects were came into place and we had to consider all because that is how it has to happen. If the girl willing to work from her heart then only she gets recruited otherwise not. We can figure out that just with the interviews we made and the way the girl&#39;s talks tells us how much passionate they are.</p>\r\n\r\n<p><img alt=\"Call Girls Blog\" src=\"http://www.bhubaneswarbeauties.com/uploads/profile/3809287c7e0ca4c501d93ff2ed413c8f.jpg\" style=\"width: 300px; height: 459px;\" />&nbsp;</p>\r\n\r\n<p>Truly many girls will ready to give themselves to their work and they wouldn&rsquo;t require much training. Even for educated, high class matured girls,&nbsp; training was not much necessary because they understand things easily.&nbsp; But they had also need to go through some training sessions. For others, training is must and they had to take it completely.</p>\r\n', '3d8be65c683e4644c97a4eb632a6b493.jpg', 'bhubaneswar Call Girls Blog read anytime and anywhere', '2019-09-20 17:20:11', '2019-09-20 17:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `blog_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `posted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `name`, `email`, `comment`, `website`, `posted_date`) VALUES
(4, NULL, NULL, NULL, NULL, NULL, '2019-09-22 21:47:28'),
(6, NULL, NULL, NULL, NULL, NULL, '2019-09-28 19:45:32'),
(7, NULL, NULL, NULL, NULL, NULL, '2019-10-02 20:52:38'),
(13, NULL, NULL, NULL, NULL, NULL, '2019-10-16 17:47:44'),
(41, NULL, NULL, NULL, NULL, NULL, '2019-12-09 12:39:20'),
(42, NULL, NULL, NULL, NULL, NULL, '2019-12-10 11:31:56'),
(51, NULL, NULL, NULL, NULL, NULL, '2019-12-12 17:56:47'),
(52, NULL, NULL, NULL, NULL, NULL, '2019-12-13 08:53:48'),
(54, NULL, NULL, NULL, NULL, NULL, '2019-12-15 15:41:14'),
(55, NULL, NULL, NULL, NULL, NULL, '2019-12-26 19:07:32'),
(61, NULL, NULL, NULL, NULL, NULL, '2019-12-31 12:41:02'),
(62, NULL, NULL, NULL, NULL, NULL, '2020-01-10 16:07:49'),
(64, NULL, NULL, NULL, NULL, NULL, '2020-01-16 20:33:45'),
(65, NULL, NULL, NULL, NULL, NULL, '2020-01-19 17:30:32'),
(66, NULL, NULL, NULL, NULL, NULL, '2020-02-03 17:37:57'),
(67, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:05:52'),
(68, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:08'),
(69, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:08'),
(70, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(71, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(72, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(73, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(74, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(75, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(76, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(77, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(78, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:09'),
(79, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:10'),
(80, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:10'),
(81, NULL, NULL, NULL, NULL, NULL, '2020-02-20 01:08:10'),
(82, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:57:45'),
(83, NULL, NULL, NULL, NULL, NULL, '2020-05-24 05:28:17'),
(84, NULL, NULL, NULL, NULL, NULL, '2020-05-25 00:08:46'),
(85, NULL, NULL, NULL, NULL, NULL, '2020-07-10 23:04:19'),
(86, NULL, NULL, NULL, NULL, NULL, '2020-07-30 01:32:01'),
(87, NULL, NULL, NULL, NULL, NULL, '2020-08-02 20:56:46'),
(88, NULL, NULL, NULL, NULL, NULL, '2020-08-03 18:21:52'),
(89, '17', 'bhubaneswar escorts', 'sushilindseo@gmail.com', 'hi nice blog i like it and thanks for that.', 'http://bhubaneswarhotcollection.com', '2020-08-09 13:30:04'),
(90, NULL, NULL, NULL, NULL, NULL, '2020-08-10 10:22:53'),
(91, NULL, NULL, NULL, NULL, NULL, '2020-08-16 12:45:24'),
(92, NULL, NULL, NULL, NULL, NULL, '2020-08-16 19:44:28'),
(93, NULL, NULL, NULL, NULL, NULL, '2020-08-18 03:26:12'),
(94, NULL, NULL, NULL, NULL, NULL, '2020-08-18 08:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(200) DEFAULT NULL,
  `sub_cat_title` varchar(200) DEFAULT NULL,
  `cat_des` text DEFAULT NULL,
  `cat_img` varchar(200) DEFAULT NULL,
  `cat_alt_title` varchar(200) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_title`, `sub_cat_title`, `cat_des`, `cat_img`, `cat_alt_title`, `added_date`, `updated_date`) VALUES
(56, 'Call Girl in bhubaneswar', 'Call Girl', '<p>In a city like bhubaneswar if any of the services wouldn&rsquo;t be quick then surviving becomes so difficult because the city has that culture which developed to a very high level that&rsquo;s why our <a href=\"https://www.bhubaneswarbeauties.com/gallery\">call girls in bhubaneswar</a> are always quick at any time the customer wants and they are adjusted for the culture in a way that they understand each and everyday things which are happened in bhubaneswar. So whenever you are in need of a call girl at any time, you can feel free about their availability and time.</p>\r\n', 'ad9cd64d90134d5a3e6e03134b16b51e.jpg', 'bhubaneswar Call Girl', '2019-09-13 13:35:08', '2020-08-08 13:19:00'),
(57, 'BDSM', 'BDSM', '<h2>Ever in your life, have you experienced beautiful BDSM girls bhubaneswar? What was your experience?&nbsp;</h2>\r\n\r\n<p><img alt=\"BDSM girls in bhubaneswar\" src=\"https://www.bhubaneswarbeauties.com/assets/images/categories/BDSM.jpg\" /></p>\r\n\r\n<p>We&#39;re sure about your expertise with all the escorts in this gorgeous categories because all of these are very beautiful and excellently enchanting towards their job.&nbsp;The best thing about a&nbsp;<a href=\"http://www.bhubaneswarbeauties.com\">bhubaneswar escort</a>&nbsp;is she doesn&#39;t take it like a helpless task; for her, it&#39;s her livelihood, and she understands that she can please her customers in the numerous attractive method.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.bhubaneswarbeauties.com/assets/images/categories/get-your-gf-dominated.jpg\" /></p>\r\n\r\n<p>Perhaps you have wondered exactly what kind of customer you&#39;ve already been or are looking for the <a href=\"https://www.bhubaneswarbeauties.com/category/BDSM/57\">BDSM girls in bhubaneswar</a>?&nbsp; Here are the six Kinds of customers That the Majority of these meet:</p>\r\n\r\n<p>&nbsp;They manage to defeat interest after having love with a specific dame, and so they quickly adjust their focus to other girls in the gallery.&nbsp; Such guys prefer not to get too attached to the girls that they pay to sleep.</p>\r\n\r\n<p>Those who are glad and pleased with all the gratifying actions of a specific escort and hence engage her again and again: If a customer is pleased with a specific&nbsp;&nbsp;<a href=\"https://www.bhubaneswarbeauties.com\">bhubaneswar escorts</a>, he does not go to anybody else.&nbsp; The main reason is simple -- a few guys become connected to a couple of escorts, and consequently, choosing a unique girl becomes hard for them.</p>\r\n\r\n<p><img alt=\"Dominatrix Escorts bhubaneswar\" src=\"https://www.bhubaneswarbeauties.com/assets/images/categories/rer-head-girls.jpg\" /></p>\r\n\r\n<p>The sort, tender, and loving ones: There could be nothing more significant than being a sort, affectionate, and gentle customer to get a gorgeous BDSM girl escorting you.&nbsp; But this depends on how the lady treats the person.&nbsp; If the escort provides time, dedication, pleasure, and love into the customer, he does not abandon her side and is always sort towards her livelihood.</p>\r\n\r\n<p>&nbsp;This could be fun for those customers, but the escorts are unable to perform their best for these people.</p>\r\n\r\n<p>&nbsp;Considering that the spouses of these men don&#39;t give them these delights, they seek it from somebody else.</p>\r\n\r\n<p>Those who like to get dominated: While a few men like to control their escorts in bed, you will find many others who enjoy being dominated.&nbsp; &nbsp;Let&#39;s have a look on BDSM girls available in bhubaneswar.</p>\r\n', '7a6d977a6ab1c1fba48e3c3e4166baa8.jpg', 'Escorts for BDSM in bhubaneswar', '2019-09-13 13:51:37', '2020-08-09 22:07:30'),
(58, 'Russian Escorts', 'Russian Girls', '<h2><img alt=\"\" src=\"https://www.bhubaneswarbeauties.com/assets/images/categories/russian-escorts.jpg\" /></h2>\r\n\r\n<h2>You have come to bhubaneswar to get TAJ palace,&nbsp;culture, and food, right?</h2>\r\n\r\n<p>No, you have not, admit it, you have come to your Russian escorts and get a business trip also perhaps! It is OK; several different guys have too, which is one of bhubaneswar&#39;s primary attractions.</p>\r\n\r\n<p>And the fantastic news is that you have come to the ideal place to satisfy Russian escorts bhubaneswar where you can leave with abundant entertaining memories.</p>\r\n\r\n<p>Oh, you live here? Apologies as we all know that people travel from all over the world to experience a number of their Russian escorts, and that&#39;s because that a Russian escort in bhubaneswar is highly desired.</p>\r\n\r\n<p>To view <a href=\"https://www.bhubaneswarbeauties.com/category/Russian-Girls/58\">Russian escorts bhubaneswar</a>, an individual has to be ready for a few of their most unusual and enjoyable experience of their own lives. Locating Russian escorts in bhubaneswar may be a pleasant experience, seeing that our women have the best possible standard an escort who&#39;s Russian might be.</p>\r\n\r\n<p>Some Russian escorts in bhubaneswar seem distinct from each other, but the frequent denominator is they are all magnificent. You will find an assortment of lovely girls who are recorded on bhubaneswar&#39;s top women. If you&#39;re still stuck for selection, then don&#39;t withstand asking our friendly receptionist who will suggest the ideal woman for you taking under account your preferences.</p>\r\n\r\n<p>Coming to bhubaneswar may be an exciting adventure, so why don&#39;t you add the cherry into the icing and make your stay an amazing one. &nbsp;This is particularly the case when they&#39;re searching for a Russian escort for the day. Our <a href=\"https://www.bhubaneswarbeauties.com/\">bhubaneswar escorts</a> are elegant, smart, witty, and incredibly enjoyable -- do not say we didn&#39;t warn you! It requires a particular sort of person to have the ability to handle this type of girl, and if you believe that you&#39;re up for this, then measure up to the plate along with amazing Russian escort now. &nbsp;</p>\r\n\r\n<p>It is a miracle that these beauties exist and are all under a single title -- bhubaneswar&#39;s top women. Just don&#39;t forget that these women are trendy, so it&#39;s better to reserve beforehand. Make sure that you select at least two girls before you proceed and ring the beautiful receptionist just if the first girl isn&#39;t available.</p>\r\n\r\n<p>What was the very fantastic night you invested in? We guess that we can top that -- yes, that is ideal. These girls are just one of a kind and incredibly friendly and warm. &nbsp;Drop us a line and clarify just what it is you are searching for. What&#39;s the best thing you&#39;ve experienced in the last several decades? If you can&#39;t recall, then you certainly have never been loving yourself sufficient. &nbsp;Pick up the mobile, and the rest is now history!</p>\r\n', '5b6d8f9f141fef4403371399ee5be092.jpg', 'Russian Call Girls in bhubaneswar', '2019-09-13 13:55:36', '2020-08-08 15:02:34'),
(59, 'Girls for Party in bhubaneswar', 'Party Girls', '<p>This is the one which many people likes a lot because these girls give more pleasure and many of them felt that these are very enjoyable and looks very hot and erotic in bed. So we have this girl in our escort service and you just go through their profiles to book at any time you want.</p>\r\n', 'e432c3eebba2fff1c3c3d232dfadc222.jpg', 'Party Girls for Night Out bhubaneswar', '2019-09-13 14:28:03', NULL),
(60, 'College Girls ', 'College Girls', '<p><strong>College girls always feel good because of their cuteness and gorgeous looks. Being with them is like a feeling of heaven for you so here is the chance for you to get them into your place and they are always available for you at any time or anywhere you want. Booking is so easy that it can be done online or you can also call us too.</strong></p>\r\n', 'b4b36d4ed25fb473fb7ba1be396898e7.jpg', 'College Girls Ready to Date You', '2019-09-13 14:33:34', '2019-09-18 16:23:45'),
(61, 'Young Indian Virgin Girls ', 'Young Girls', '<p>There was a lot of difference between an adult girl and a young girl because of these young girls behaviors, their body, looks, the way they talk, attracts heavily for anyone. We know you will be definitely waiting for these girls and they are also waiting for your booking, you can see their profiles in the gallery and book which one you want.</p>\r\n', '49601ca5ec2a27c7d14dc781be0f42d3.jpg', 'Indian Young Girl Deep Throat', '2019-09-13 14:41:45', '2019-09-13 14:46:12'),
(62, 'Tall Girls ', 'Tall Girls', '<p>We understand each and every customer and their desires so on every aspect we designed our services and a tall girl service is also one of them, these girls are not only tall also they have the look which attracts you at first site only.</p>\r\n\r\n<p>Some of the customers who are tall wouldn&rsquo;t like to take normal girls because those girls doesn&rsquo;t fits to their level so they will face discomfort being with them that&rsquo;s why we arranged tall girls from different places to our agency and these girls also has the ability to make you feel the pleasure in an unimaginable way so our booking is very easy that you just need to go through the website and call to the number which is displaying.</p>\r\n', 'cb495930a61a22e64b6a9a9c59912092.jpg', 'Tall Girls for Long Night Fun in bhubaneswar', '2019-09-13 15:05:47', '2019-09-18 16:25:26'),
(63, 'Small Tits Girls  Available', 'Small Boobs', '<p>In our bhubaneswar escort service we have a wide variety of services for you that you can easily get them at any time you want, if you are looking for a girl as a girlfriend to any of the parties or to keep a girl as an assistant in any of your important meetings or for some other office works then this will be your place of those girls. We have suitable girls for your needs and they are very well matured and intelligent that they understand your requirements perfectly and be with you as you like.</p>\r\n', 'fa83a16770bc26d1b46e874e321015ad.jpg', 'Small Tits Indian Girls in bhubaneswar Escorts', '2019-09-13 15:11:22', '2019-10-07 14:14:49'),
(64, 'Pink Boobs', 'Pink Tits', '<p>Pink Tits for Boobs Lovers who like pink color tits for erotic fun.</p>\r\n', 'e469852af154915d764d93d9141b5037.jpg', 'Pink Titted Indian Girls', '2019-09-13 15:25:32', '2019-10-07 14:07:48'),
(65, 'Big Boobs Indian Girls ', 'Big Boobs', '<p>Big Boobs to Satisfy your dirty desire.</p>\r\n', '690621b5612dbcb3e0c70a8997d47e68.jpg', 'Big Boobs Indian Girls in bhubaneswar', '2019-09-13 15:36:03', '2019-09-18 16:19:16'),
(66, '16 year young girls', '16 year', '<p><strong>As we know since from the starting of our escort service young girls are always be demanded more than the other girls because they are aged just 16 and they look very thin. so you can&#39;t even imagine the excitement and pleasure that comes while being with them.</strong></p>\r\n\r\n<p><strong>It&#39;s very difficult for you to get those perfect 16 aged girls in any of the other escort agency&rsquo;s but not with us we recruit these girls every time and provides to our regular clients who always book these girls only. You can also get them very easy so you just need to call us and will take care of the rest.</strong></p>\r\n', '5dbc200bf8313e84d181289691e8fa09.jpg', '16 year virgin girls for your lust in bhubaneswar', '2019-09-13 15:46:36', '2019-10-07 14:15:13'),
(67, 'Sexy Girls Available', 'Sexy Indian Girls', '<p><strong>If you are looking for the wild and entertaining erotic experience then our crazy girls are the best choice for you and also you are at the right place which has the bunch of sexy escort girls.</strong></p>\r\n\r\n<p><strong>We don&rsquo;t want to tell much about these sexy girls because they are sexy in everything so you will be satisfied and entertained to a level that you can&rsquo;t expect so whatever the tension or workloads you have just keep it in a place and enjoy with these girls for a day and then from the next day you will handle everything with an awesome enthusiasm.</strong></p>\r\n', 'afc34cf85c56c019569262cdec418e24.jpg', 'Sexy Indian Girls in bhubaneswar Escorts', '2019-09-13 15:58:22', NULL),
(68, 'lesbian girls ', 'Lesbian Escorts', '<p>Lesbian Escorts&nbsp;for&nbsp; the girls who love lesbian Mode</p>\r\n', '8e1a2abab507fc0bea9eb4b071b04cf7.jpg', 'Lesbian Girls in bhubaneswar', '2019-09-13 16:40:46', '2019-09-18 16:25:55'),
(69, 'Green Eyes Girls for Erotic Fun', 'Green Eyes', '<p>Eyes are the only things which attract in a girl and when those eyes look something different then it gets the attention of people in any of the big crowd. So we felt some peoples would like those girls who have green eyes, that&rsquo;s why we have those girls for your service and definitely, you will love them once you meet and be with them for a day.</p>\r\n', '9bd55028a4ec441303425ff4a8eb3bc5.jpg', 'Green eyes Escorts in bhubaneswar', '2019-09-13 16:44:26', '2019-10-07 14:15:34'),
(70, 'Slim Girls ', 'Slim Escorts', '<p>To enjoy an ultimate way of pleasure in a perfect style is possible from slim girls only, you could get the satisfaction to a different level that you can&rsquo;t measure. Slim girls always look cool and you feel an awesome comfort while with them, that comforts makes you more erotic so you will enjoy every moment without wasting a minute and you won&rsquo;t be tired because how much you enjoyed, the girl&#39;s slimness makes you do even more erotic things with full of happiness.</p>\r\n', 'ff38ecf2eecde658554324c84c647399.jpg', 'Slim Escorts bhubaneswar', '2019-09-13 16:48:15', '2019-09-18 16:27:42'),
(71, 'Chinese Escorts ', 'Chinese Girls', '<p>Our escort agency has given opportunities for many of the girls who are interested in this field and also we have given opportunities for Chinese girls who are come from China to earn money in India.</p>\r\n\r\n<p>If you are looking for a different kind of pleasure then these Chinese girls are your choice and they suit perfectly for your erotic fun and ultimate sexual experience because they are completely different in every aspect so you will get the new type of pleasure and that pleasure satisfies you a lot.</p>\r\n', '5598f70ed3c48aa9c70f8f44b72111a4.jpg', 'Chinese Call Girls in bhubaneswar', '2019-09-13 16:51:03', '2019-09-18 16:26:59'),
(72, 'Threesome', 'Threesome', '<p>A threesome is one of the hottest and highly fun-filled sexual experience happened between 3 people that is 2 girls with 1 person or 2 persons with 1 girl. Most of the people are addicted to this service because to get enough pleasure so it&#39;s also one of the best ways to satisfy yourself being with the other two. Hear fun and pleasure are merges at a time so there will be no limit for the pleasure and you will see the real heaven with your own eyes.</p>\r\n', 'fbb3a734a8e3ed84a6aaaf794eb49a13.jpg', 'Threesome Escorts for Fun', '2019-09-13 16:55:11', '2019-10-07 14:18:19'),
(73, 'Hand job and Blowjob', 'HJ & BJ', '<p>Hot and sexy call girls for Handjob and Blowjob&nbsp;</p>\r\n', '756eea378de57aa9acb4447de4736185.jpg', 'Handjob & Blowjob Escorts in bhubaneswar', '2019-09-13 17:10:39', '2019-10-07 14:19:46'),
(74, 'Newly Married Housewife  ', 'Housewife', '<p>These are the girls, who are not satisfied with their sex life so they work as an escort and also as an independent escort for both money and for satisfaction. With these girls you can enjoy your fantasies to an unimagined level and you will be satisfied completely because they never let you until the time, by giving you so many choices to experience pleasure because they also wants pleasure in a high level from you. And more than this the look they maintained makes you stun while seeing them in real, so it becomes very difficult for you to control your excitement and definitely, you will explore another world of pleasure.</p>\r\n', '283675ca5a9c5dc13deb07153b0e8761.jpg', 'Housewife for Sexual Pleasure in bhubaneswar', '2019-09-13 17:24:17', '2019-10-07 14:20:15'),
(75, 'Shapely Girls', 'Girls in Shape', '<p>Fit and fine call girls who have well maintained their body&nbsp;with proper care&nbsp;to please and satisfy you.</p>\r\n', 'ba99fdbdcf0c1482c782be680e23bd2c.jpg', 'fit and slim Call Girls  ', '2019-09-13 17:30:15', '2019-10-07 14:20:37'),
(76, 'Cheap Rates Escorts', 'Cheap Call Girls', '<p>bhubaneswar cheap rate escorts is a new offering from our escort service bhubaneswar and it is something you can make use of a lot. There are so many escorts who willing to work for low money and they are doing for both money and lack of work. So now you don&rsquo;t need to worry if running out of balance and by choosing one of our gorgeous bhubaneswar escorts you can have that experience just by giving a small amount.</p>\r\n\r\n<p>If you have any doubts regarding this then you can clear with ease because will explain things to you. Escorts girls from different categories like 30+, young, college, housewife are available in this service and you will have hot beauties to chose. Whoever you chose the girl will be with you as usual and supports you like as a friend. Get into our official website and search your dream one and then call us for booking.</p>\r\n', 'c6a056c256ee11190c007f2ab052b886.jpg', 'Cheap and affordable escorts in bhubaneswar', '2019-09-13 17:32:23', '2019-09-18 16:27:28'),
(77, 'London Girls in bhubaneswar', 'London Girl', '<p>Escorts from London are here at bhubaneswar and what you are dreaming is now possible in our escorts service bhubaneswar. We bring you those ultimate juicy chicks who are clever in every aspect you expect. And they won&rsquo;t just satisfy you through an erotic pleasure. They have maintained an awesome outfit and that&rsquo;s enough for them to arouse both your mind and body to a large level.</p>\r\n\r\n<p>More than anything their talent of giving you that chills, makes you explore something new and you will do it for sure. We know these were your dream and surely you won&rsquo;t wait a minute once you see their pictures. These London girls are the same as girls who you have seen in the London escorts website and there is no much difference between the two. you will get engaged in a whole new sexual pleasure because these were London escorts bhubaneswar and they will give more than what you expect.</p>\r\n', '37bc7e5088bd0a6f914995c133964560.jpg', 'London Call Girls in bhubaneswar', '2019-09-13 18:31:42', '2019-09-18 16:20:24'),
(78, 'Mallu Aunty Escorts in bhubaneswar ', 'Mallu Aunty', '<p>Our bhubaneswar escorts service has been moved way far than your expectations and we have that potential to provide whatever you wish and we can make any of your dream possible. Here are those girls, who you might have seen in Kerala and these were highly famous in that place and they called as mallu-aunty escorts. Some people will know more about these girls because these were one of the hottest chicks in India and of course many of those people have the wish to enjoy these girls.</p>\r\n\r\n<p>Now those mallu aunty&rsquo;s are here at our place and you have to believe us. As we said early, we can do anything for you and it is just one of the things that we are providing. Mallu aunties have an attractive outfit and beauty which makes you unstoppable and you will enjoy the girl even for last single minute because that is what the kind of beauty and outfit these escorts have.</p>\r\n', '96579dc006d8c59678b5eb9df2f68f7c.jpg', 'Mallu Aunty Escorts Service in bhubaneswar', '2019-09-13 18:33:29', '2019-09-18 16:20:41'),
(79, 'Mallu Aunty Love-making Videos ', 'Mallu Aunty Videos', '<p>Find the videos of one of the sexiest escorts in India and you will get stunned for sure once you have seen. Through us, you can be able to see and book both mallu auntie&rsquo;s and their sex videos. We are providing this for different reasons like to show exactly what kind of girls they are, how supportive they are and to show the beauty they have. These are really the most erotic escorts in bhubaneswar you have ever seen and we are sure that you won&rsquo;t wait for much to book, once you have seen the video.</p>\r\n\r\n<p>You can see the mallu auntie&rsquo;s beauty in deep and you can observe their skills in satisfying their client. Not just one or two, there are so many videos available to you and mallu escorts from different ranges are there in it. So we suggest you to take a look at this first and then take a ride.</p>\r\n', 'f98714da58d1122339bbc117ae4c1f4a.jpg', 'Mallu Aunty bhubaneswar Escorts Video ', '2019-09-13 18:35:12', '2019-09-18 16:26:44'),
(80, 'Marathi Call Girls in bhubaneswar', 'Marathi Girl', '<p>The Marathi escort girls are at your service. Being a bhubaneswar escorts agency it doesn&rsquo;t that difficult for us to provide the Marathi escorts because the Marathi beauties are there in bhubaneswar at large numbers. And many of the Marathi girls are always in looking for escorts jobs and we give them the opportunity to work here in bhubaneswar. There is unique and different kind of beauties are available to you because Marathi girls from different regions came here to work.</p>\r\n\r\n<p>And by giving them enough training we had put them in a separate category. So you can choose from different ranges and you can book the girl as either in call or out call. The Marathi Call Girls who work with us, are so hot and good looking, and being trained from our side, they&rsquo;ll let you enjoy your dream in an awesome way. And they will also give a great company for all your dirty and hidden desires.</p>\r\n', 'fc13cc1689d347ae61d7dd03cd252ce9.jpg', 'Marathi Call Girls in bhubaneswar', '2019-09-13 18:36:56', '2019-09-14 16:32:41'),
(81, 'British Girls', 'British Girls', '<p>The British girls in bhubaneswar welcome you to their world of love and lust. Where you do not just lay on the bed rather than that you will explore that erotic love in different ways and you will get satisfied immensely in all those ways. The reason behind this is the professional and educated British girl who stays as your dearest one rather than an escort. It is a true thing because the British escorts we have are highly gorgeous and trained.</p>\r\n\r\n<p>Being British escorts, they have a great talent in engaging you to their beauty and you will also get engaged in unique erotic styles, which they only show you in detail. There wouldn&rsquo;t be any point for you to get hesitate because the British call girls in bhubaneswar makes things comfortable. And she let you free to enjoy her beauty and in meanwhile she let you have that erotic thrills and chills. Call us anytime to book these girls and you can also see pics before booking.</p>\r\n', '3e544e5863a4111f8d124a6623da4541.jpg', 'British Escorts in bhubaneswar', '2019-09-13 18:38:38', '2019-09-18 16:23:26'),
(82, 'Modelling girls', 'Models Escorts', '<p>High profile Models in bhubaneswar to feel the real heat on the bed. Book anytime</p>\r\n', '4638761498b793060362375be66a7d52.jpg', 'Model Call Girl in bhubaneswar', '2019-09-13 18:40:30', '2019-09-18 16:24:58'),
(83, 'South Indian Girls', 'South Indian', '<p>South Indian girls sexy videos to see and decide what service to take</p>\r\n', 'bfa17118424af523aa66071d2df179cc.jpg', 'South Indian bhubaneswar Escorts Videos', '2019-09-13 18:42:30', '2019-10-07 14:21:06'),
(84, 'Tamil Girls for dating ', 'Tamil Girls', '<p>Tamil Call Girls in bhubaneswar are very experienced and knows who to please and satisfy their man on the bed.</p>\r\n', 'c06358572da19eec19b170659bdca7cb.jpg', 'Tamil Escorts in bhubaneswar', '2019-09-13 18:44:35', '2019-09-18 16:21:25'),
(85, 'Punjabi Horny Girls ', 'Punjabi Girls', '<p>In north India almost in every city you can find this Punjabi chicks and their hot looks, dress sense makes you feel eroticness in different angle so what we are coming to tell you that the same girl with the same dress will come near you to satisfy your fantasies and all your greeds will fulfill in just 2 hours and that girl is a perfect Punjabi.</p>\r\n\r\n<p>In our escort service you can choose those variety of Punjabi girls and they all uploaded their pics in their own styles to attract you so see them clearly and make a time for them and you just need to call us once for booking.</p>\r\n', 'da508a3d0d30e42bc8d0ba71a60b08f6.jpg', 'Punjabi Call Girls in bhubaneswar', '2019-09-13 19:03:32', '2019-09-18 16:22:05'),
(86, 'Muslim Sexy Girls', 'Muslim Girls', '<p>Experience an ultimate level of enjoyment in a highly standard manner with our VIP escort girls. You can book them at anytime you want and they have both in call and out call services that you can also come to their location otherwise if you book out call than they only reach your location within 40 minutes of booking.</p>\r\n', '80e8a4f701ac65ff1fbeb74615b17948.jpg', 'Muslim Call Girl in bhubaneswar', '2019-09-13 19:04:47', '2019-10-07 14:21:32'),
(87, 'Bengali Actress ', 'Bengali Girls', '<p>Our escort service agency provides you unexpected things which you will definitely love us by seeing those pics that we give you and that is nonother than the actresses in Bengal. We don&rsquo;t know whether you see them on TV or anywhere but you can reach them and you can fulfill any of the desires which you have kept in your mind with them and this will be possible with us in a very easy way so just call us and get the pics of the actress and decide about your day.</p>\r\n', 'f5c2978fd46ecb11b596a417e91a4065.jpg', 'Bengali Call Girls in bhubaneswar Escorts Agency', '2019-09-13 19:06:13', '2019-09-18 16:20:06'),
(88, 'VIP Escorts', 'VIP Girls', '<p>Experience an ultimate level of enjoyment in a highly standard manner with our VIP escort girls. You can book them at anytime you want and they have both in call and out call services that you can also come to their location otherwise if you book out call than they only reach your location within 40 minutes of booking..</p>\r\n', '022c028209dd68ed09709da61907a596.jpg', 'VIP Call Girls in bhubaneswar', '2019-09-13 19:07:24', '2019-09-18 16:25:39'),
(89, 'North Indian Call Girls', 'North Indian', '<p>In our, bhubaneswar escorts North Indian girls are highly modernized and stylized that they understand what their customer needs, they will be with you like your girlfriend so you can fulfill any of your desires with them and whatever the sexual things you do with them as you like, they support you by making it more erotic.</p>\r\n', '6dffdab9998206c23279d5c01d343269.jpg', 'North Indian Escorts bhubaneswar', '2019-09-18 15:21:18', NULL),
(90, 'Bhubaneswar Escorts ', 'Bhubaneswar Girls', '<p>If you are looking for a beautiful erotic girl then Bhubaneswar girls will match your choice because they are good at both the things and when its come to work they will give you more than you expect. You can&rsquo;t even imagine how they will be with you in the room because they value their work so you not only get the pleasure also you will enjoy every bit of moment with them.</p>\r\n', '0b7f49c627b40f1c830fe8354344db41.jpg', 'Bhubaneswar Call Girls in bhubaneswar', '2019-09-18 15:24:17', '2019-09-18 16:25:12'),
(91, 'Goa Girls', 'Goa Girls Available in bhubaneswar', '<p>We know you peoples have waited for this from so many days and finally the wait is over and now you need to decide about your time to experience the gorgeous goa girls, has just arrived in our escort service.</p>\r\n\r\n<p>As you know that we are one of the biggest escort service provider have branches all over India. We have planned to provide goa girls in bhubaneswar month back, but because of some other reasons we can&rsquo;t take off by now and set up everything perfectly we are ready to accept your booking of Goa girls.</p>\r\n', 'caf08db355331fd9a42a7706bb2431b0.jpg', 'Goa Call Girls in bhubaneswar', '2019-09-18 15:29:27', NULL),
(92, 'Arab Girls in bhubaneswar', 'Arab Girls', '<p>Many men have a soft corner towards Arab looking women. It&#39;s probably because of their innocent looks and deep eyes. Our Arab looking bhubaneswar call girls are passionate and the sex you will have will be the among the best.</p>\r\n\r\n<p>Our Arab bhubaneswar escorts are very flexible and enjoy time spent with gentlemen. They mostly like to be treated like sugar candy and expect you to take care of her till the end of your session</p>\r\n\r\n<p>The quality of escorts services provided by our escort agency is of superior quality. When you use our services you will realize the beautiful and lovely girls are all independent escorts in bhubaneswar</p>\r\n', 'b9a851254a5785e91f75dfaef17cc6be.jpg', 'Arab Call Girls in bhubaneswar', '2019-09-18 15:33:58', '2020-07-26 21:41:13'),
(93, 'Dinner Dates With Our Girls', 'Dinner Dates', '<p>Now get the chance to mingle with our bhubaneswar call girls over dinner. You will be surprised to have intellectual conversations, personal discussions and many more., After the night you will be the happiest man known to the earth.<br />\r\nYou might be interested in the following as well</p>\r\n\r\n<p>Our bhubaneswar escorts who go for dinner date are too much in demand and if you want the chance to go and spend time with our lovely call girls, that you have booked them in advance. so that the time and dates can be organized.</p>\r\n\r\n<p>While having your dinner it is always a good idea to exchange introductions and know about each other. So pack a bunch of talk in you and enjoy.</p>\r\n', 'a0d347caf256d1f82c066c8c0558fbe6.jpg', 'Dinner Dates With Our Call Girls in bhubaneswar', '2019-09-18 15:38:13', NULL),
(94, 'Educated Girls', 'Educated Girls', '<p>Do you have a good amount of money on your hand, but still feel lonely and don&#39;t have anybody to spend it on. Now get a chance to meet our Educated bhubaneswar call girls, who are capable of indulging you in intellectual conversations and her charming nature.</p>\r\n\r\n<p>All our educated bhubaneswar call girls are a sucker for gold, They love to spend time with a person who has no problem spending good amounts of money on them. They love to live life king sizer and want you to experience the pleasure of life. They will take care of you for whatever your needs may be.</p>\r\n\r\n<p>These girls are for those who know they can handle themselves as well as our high profile bhubaneswar escorts. Our girls need that sugar-candy treatment and if you&#39;re up for this, our girls are the best option for you.</p>\r\n', '637bace63f63ac02e5d7508692d86d65.jpg', 'Educated Girls for fun in bhubaneswar', '2019-09-18 15:44:54', NULL),
(95, 'Happy Hours', 'Happy Hours', '<p>Enjoy the discounts and offers we have to offer during our Happy hours. Just like in a pub, we offer our escort services at near half prices to enjoy our girls. The time varies from the day today. This is something to look out for during the busy times of the city.</p>\r\n\r\n<p>There is a lot of gorgeous high profile bhubaneswar girls to check out with our Escort agency. All of them are unique in their style and enjoy the time spent with you. During the happy hours all of them come at a discounted price, so feel free to contact us for more cheap and affordable Independent bhubaneswar escorts.</p>\r\n\r\n<p>Your life will be so much better with our bhubaneswar escorts in it. When you get a chance to meet our Lovely bhubaneswar girls, you will be the happiest guy as our girls are among the best you would have met.</p>\r\n', 'ce6e7d2fe44dff331ad373c1bc74484d.jpg', 'Happy Hours With bhubaneswar Escorts', '2019-09-18 15:46:51', NULL),
(96, 'Long Drive', 'Long Drive', '<p>All men love to go on long drives and enjoy the adrenaline. Now imagine Driving with our Sexy escorts bhubaneswar. There boobs bouncing and they grabbing your hands will give you the thrills. When You stop near beautiful scenery at the end of the drive. It will be the most romantic feeling ever.</p>\r\n\r\n<p>Long and fast drives are known to induce pleasure within a woman. They tend to lose control and will totally get into you. Utilize this fact to make our high profile call girls go crazy and have the best time of your life.</p>\r\n\r\n<p>Induce romantic sensation within our Independent bhubaneswar girls by giving them the thrills and rush to have the most pleasurable time of your life.</p>\r\n', '626153dc4b62d212d9da6a4b01f6ba29.jpg', 'Long Drive Girls in bhubaneswar', '2019-09-18 15:49:46', '2019-10-07 14:04:37'),
(97, 'Limousine Escorts', 'Limousine Escorts', '<p>Now party in style with our bhubaneswar call girls Limousine services. Drive around in the most luxurious car, with the most high profile bhubaneswar escorts. It&#39;s difficult to say no to such offers, so why not give it a try. Our bhubaneswar call girls will be the perfect companions for the night inside the huge car.<br />\r\n<br />\r\nThere are a lot of sexy bhubaneswar call girls that are associated with our premium escort agency. You will love to be the presence of our bhubaneswar girls, as their sex appeal and outfit will be out of this world. When you start engaging in the intimate action with our bhubaneswar companions, when lips cross with lips, the only thing you will be sure about how lucky you&#39;re going to be tonight.<br />\r\n<br />\r\nBeing part of our VIP Members club will give you exclusive rights to different schemes and offers that you will not normally have. Limousine services, VIP call girls and many more. So why not become our VIP Member, it will cost a nominal fee which our customer care executive will inform you more about.</p>\r\n', '8f33a01d4ce99bd99d58ff58c6074363.jpg', 'Limousine Escorts in bhubaneswar', '2019-09-18 16:10:04', NULL),
(98, 'Pink Lips', 'Pink Lips', '<p>Now get to kiss the soft pink lips of our bhubaneswar call girls. Pinks lips are what most men consider the beauty and when you get a chance to spoil that lipstick with your mouth, That feeling is different. Now experience the same with our stunning bhubaneswar escorts.</p>\r\n\r\n<p>Pinks lips are like lips of the goddess, pure and fresh, That is why we are inclined towards the woman who wears sexy lipstick on them. Have you ever spoil a girl&#39;s lipstick?</p>\r\n\r\n<p>There are lots of ways things can go from when you have made contact with the soft pink lips. The best feeling is when you just want to undress her and have magnificent sex</p>\r\n', '29a9a368db90e2b44a0c238603cb2eb7.jpg', 'Pink Lips Escorts in bhubaneswar', '2019-09-18 16:12:44', NULL),
(99, 'Escorts Special Offer', 'Escorts Special Offer', '<p>Special offers, for our VIP Members to spend quality time with our most top rated <strong><a href=\"http://www.bhubaneswarbeauties.com/gallery\">bhubaneswar call girls</a></strong>. This includes Dinner services, Party girls, etc. To know more about special offers, become part of the family and become a VIP Member with our escort agency.</p>\r\n\r\n<p>Shower buddy, dinner dates, Movie dates etc are all the special offers that you can avail with our high profile bhubaneswar escorts when you are a part of the family by being our VIP Member. Hurry and check out the offers that we provide.</p>\r\n\r\n<p>Get the best from our escort services by quickly become our VIP member and become the happiest person. Our call girls will show you the true meaning or lovemaking.</p>\r\n', '4ec96903df42cddd583feda524d1476d.jpg', 'bhubaneswar Escorts Special Offer', '2019-09-18 16:15:40', '2020-02-28 11:56:49'),
(100, 'Top Rated Escorts', 'Top Rated Escorts', '<p>Taking about the high&nbsp;profile, top-rated bhubaneswar escorts is like talking about the hottest topic in the country. You already know the benefits of being with our top-rated bhubaneswar escorts, The satisfaction that you will receive will be worth every penny you spend.</p>\r\n\r\n<p>When you get the chance to meet our Top rated bhubaneswar escorts, you will understand the demand they are in. That why we suggest you book in advance so that dates can be arranged according to convenience.</p>\r\n\r\n<p>The best way to enjoy with our Top rated escorts is to have your own room, where there is no restriction, and you can do as you please.</p>\r\n', 'a5d3309881e2c90f207ff18d44168b6d.jpg', 'Top Rated Call Girls in bhubaneswar', '2019-09-18 16:18:19', NULL),
(101, 'Private escort service bhubaneswar', 'Private escorts', '<p>We are the ones who are able not only to understand your desires to call girls in <strong>Private rooms</strong> but to anticipate them. We are here not just to satisfy your needs, but to realize them with brilliance, invention and a fair amount of charm. It is no coincidence that our <a href=\"http://www.bhubaneswarbeauties.com/category/Private-escorts/101\">Private escort service bhubaneswar</a> is today one of the leading services.</p>\r\n\r\n<p>A verified recipe helped us to become leaders in the field of elite escort for <strong>Private sex</strong>. Our agency is based on &ldquo;conquer&rdquo; and &ldquo;seduce&rdquo;, basis. Because of our stratified services, customers hire our escort again and again.&nbsp;</p>\r\n\r\n<h2><a href=\"http://www.bhubaneswarbeauties.com\">The craze of our escort services is the great</a></h2>\r\n\r\n<p>Our call girls are best for <strong>private parties</strong> and sexual pleasure. All our escort are well educated and well manned, so if you accompany her to your business party, no one can find out that she is an escort. They are always ready to complete all your desire. To hire them you can find the best profile from our site; there you can get complete info of the selected escort. Also on-site you can view the video of selected escort, so it becomes easy for you to decide on <a href=\"http://www.bhubaneswarbeauties.com/category/Private-escorts/101\">Private Female escorts</a>.&nbsp;</p>\r\n', '79d0388eb4049e4afe85f75d14ad5c3c.jpg', 'Private escort service bhubaneswar', '2020-07-26 21:37:53', '2020-07-26 22:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `loc_title` varchar(200) DEFAULT NULL,
  `sub_loc_title` varchar(200) DEFAULT NULL,
  `loc_des` text DEFAULT NULL,
  `loc_img` varchar(200) DEFAULT NULL,
  `img_alt_title` varchar(200) DEFAULT NULL,
  `posted_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `loc_title`, `sub_loc_title`, `loc_des`, `loc_img`, `img_alt_title`, `posted_date`, `updated_date`) VALUES
(50, 'Vanivihar Call girls', 'Vanivihar', '<p> If you love calling call girls and want to enjoy the dream girl of your choice and roaming in the city of vanivihar pick up your cell phone and dial on the given number or visit our website to know more about our beautiful women who are ready to serve all your needs starting with massage and then the rest followed.  You might be needing a friend or companion or an attractive women or women to give you company on party or just to satisfy you we got everything that you need and you have come exactly to the place you should. <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  Vanivihar call girls </strong> </a> are unique to their looks and the beauty they posses apart from that what sets them apart is their attractive body.</p>\r\n<h2> Vanivihar escorts</h2>\r\n<p> We at  <a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a>  are here in the business of escorts since long time and we know what our customers demands are whether it’s a massage or a one night stand or any other demand we are here to serve all your needs , our escorts are the best in vanivihar city and are available and open 24/7.\r\nLook at the profile earlier to choosing your dream girl if you like the profile then just select the profile and book immediately once booking is confirmed and you want to change the choice you have done then also you have the choice to change so no need to worry about change we are ready to give you everything you want apart from that our escorts are the best in vanivihar city we have created a vast choice of escrts that you can choose and carefully selected the best.</p>', 'Vanivihar.jpg', '        Vanivihar Call girls', '2020-10-16 11:21:20', '2020-10-17 11:14:07'),
(51, 'Nayapalli call girls', 'Nayapalli', '<p> <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> Nayapalli call girls  </strong> </a> service is created for boys or men to have fun if you are in nayapalli and looking for some enjoyment then rush to our website <a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a>  or call on our number , we will be ready to help with your needs on finding you a beautiful call girl whether you need a massage or someone who can come for dinner or party with you and make your day better. Our girls are the hottest you will find in the whole city of nayapalli . They also are smart at understanding that men needs to be understood and will give you the things you imagine at your place . Thinking of making you evening or visit to nayapalli spicy then call us our call girls will make your weekend or visit more spicy with their naught actions. </p>\r\n<h2> Nayapalli escorts</h2>\r\n<p>If you want a hot escort or a mature escort or a married escort we have got everything that you need in the city of nayapalli pick your phone and immedietly call us to get the girl of your dreams. We our girls to behave friendly and also to be naughty with you when you want . If you really want  to make your visit or weekend a little better experience then call us . We are here to give you the service you want such as a good body massage , whole body massage , one night stay , or visit to a party or doing dirty things like every dirty thing you can imagine you are just a phone call away so pick our phone now and call us. </p>', 'Nayapalli.jpg', '        Nayapalli call girls', '2020-10-16 11:27:11', '2020-10-17 11:14:42'),
(52, 'Rasulgad call girls', 'Rasulgad', '<p>If you want a hot and curvy women and want to have some fun tonight in <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> rasulgad city need call girls </strong> </a> at your place call us on the number given here or visit our website<a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a>  to know more about how to get a girls at your place . we take care of everything so that you do not have to worry from picking the most beautiful call girls to sending them to your doorstep , all you have you do is have fun by booking our call girls from our website or through call . we also take take you get what you want so we have expanded our portfolio very big so then men have different needs and every need can be taken care of. </p>\r\n<h2>Rasulgad  escorts </h2>\r\n<p>Looking for hot sexy and beautiful girls and escorts online search no other than www.exapmple.com and browse through our vast size of beautiful and hot escorts that will offer you and serve your every need such as small massage to having dinner with you or going out to drink of bored at office party or farmhouse or any other place call our escorts to tune your experience to another level . We select our escorts carefully and keep them trained so that you do not have to do the hard work of selecting. You will be almost confused and getting mad at what to choose once you browse our portfolio of escorts.\r\nWe have been doing this in the city of rasulgad since very long and have been improving upon our experience so that customers face less challenges and enjoy more. </p>', 'Rasulgad.jpg', '        Rasulgad call girls', '2020-10-16 11:31:04', '2020-10-17 11:12:48'),
(53, 'Kalpana squar call girls', 'Kalpana squar ', '<p> Make you time in kalpana squar the best by booking our ladies to have fun online within minutes of booking our call girls will be at your place at the right time . Our call are the most beautiful women in the kalpana square city . Whether you are looking for massage or a partner to spend some time with or a <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  call girl </strong> </a> to take to a party we offer all services to you , our customers return to us again and again for the experience we provide you your dreams do not shy or think more just book our call girls this is a beautiful chance for you. Our escort agency is recommended by most the people in kalpana squar as you ask anyone. </p>', 'Kalpana-squar.jpg', '    Kalpana squar call girls', '2020-10-16 11:36:47', '2020-10-17 11:16:46'),
(55, 'Patia call girls', 'Patia', '<p> <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  Patia call girls </strong> </a> are the hottest call girls in the whole world all you have to do is pick the phone and call us on MOBILE NUMBER and tell us your requirements , whether you need a massage or any other service we can provide you everything that you need . Our girls also know how to be dirty and also to be good they can provide you both and also keep your pains and worries away from your life. All the girls are trained for high quality call girls service and also to keep you private so no need to worry about privacy.  We can also deliver our call girls to the place you want either you want to go on date with hot call girl or drink or spend some time with our women you will get everything that you want either call us or visit our website for more information.</p>\r\n<h2>Patia escorts </h2>\r\n<p>Patia escort look hot and sexy and they are much more beautiful at your place if you are looking for a massage or a sensual play or any kind of service with our Patia escorts then call on our number MOBILENUMBER  or visit our website and browse our list of hottest and sexiest women who will  impress you in the first impression and who are sure to make you go crazy with their looks. We have the best escorts in city even in the escort business so without worry book our escorts for some fun night or a drink with hot escort , our escorts are already trained to make you happy and seduce you better than any other escort. </p>', 'Patiya.jpg', '            Patiya call girls', '2020-10-16 11:44:11', '2020-10-17 11:17:43'),
(56, 'Master canteen call girls.', 'Master canteen', '<p> href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  Master canteen call girls </strong> </a> are the girls that you need to have some fun in your life and also to make your life spicy . We have the most beautiful ,hot , and dirty girls  in the whole world. Our gilrs are ready to give you everything that you want the curvy figure , we have many types of girls on our list such as call girls , mature women , hot aunty and many types of other categories . we are sure you will love to choose from our list , you will be amazed to know that our clients come again and again for the services we provide them as we have always received positive messages from our clients about our call girls. </p>\r\n<p>Call us on our number MOBILE NUMBER or visit our website <a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a> to know more. </p>\r\n<h2>Master canteen escorts. </h2>\r\n<p>IF you are around master canteen or planning to stay near master canteen they the most important thing to do is to use our escort service , our escorts are the hottest women and girls that exist their body and looks will make you go crazy as we are here to provide excellent escort services rather than just working for money we have carefully designed our services to pick the hottest girls and women for you. Whether you are looking for a simple massage or spend a night with escorts or looking for a drink partner or for a one night stand we have got everything for you . Our escorts have well maintained looks and bosy just for you to provide the best possible ecstatic moments for you. Pick your pphone and call us now PHONENUMBER or visit our website www.example.com and know more . </p>', 'Master-canteen.jpg', '    Master canteen call girls.', '2020-10-16 11:48:05', '2020-10-17 11:18:41'),
(57, 'Baramunda call girls', 'Baramunda', '<p> If you are looking for hot sexy and <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> beautiful call girls in Baramunda </strong> </a> then we have them for you , we provide the hottest call girls that are looking for clients and love to provide service , our call girls have the most beautiful bosy and looks , they are sure to provide you the enjoyment you need with their looks and body and behavior.</p>\r\n<p>Our call girls are ready to come to your place whether you need them for a night or a drink or to go out or any other place we can deliver you that. Pick up your phone now and call on PHONE NUMBER or visit our  website  <a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a> and browse through our list of hottest call girls and escorts and mature and young girls any type of women that you want. </p>\r\n<h2> Baramunda escorts.</h2>\r\n<p>Baramunda escorts are looking for you if you are in the city of Baramunda then join us to have some fun in your life , to make your life little spicy and make your dreams come true with our beautiful escorts . Our escorts provide many services such as massage or going on drink together or dinner anything our escorts serve you with pleasure and all they have got. Our escort understand that serving men is their purpose and priority and they know how to do it and are also trained in advance to give you more then you need. </p>\r\n<p>Pick up your phone and call us now to get what you are thinking of or go to our website to book our beautiful escorts </p>', 'Bermunda.jpg', '    Baramunda call girls', '2020-10-16 12:52:21', '2020-10-17 11:20:21'),
(58, 'Badambadi call girls', 'Badambadi', '<p> <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> Badambadi call girls  </strong> </a>  are the most beautiful call girls in Badambadi , they will impress you with their body and looks in their first impression , they look seductive and sexy and can you imagine a night or drink with such call girls . This is exactly what you want do not hesitate and think more , call girls are nowadays common and you will absolutely love them . Our call girls are selected from the most beautiful call girls from the city so that you do not have to do the hard work of selecting them you just need to enjoy and book our service , you can either call on our number MOBILE NUMBER or visit our website to know more about how to have the most hottest call girls at your location</p>\r\n<h2> Badambadi escorts</h2>\r\n<p>If you are living in Badambadi or close to Badambadi and want to spend some time enjoying with our hot escorts then you should immediately pick your phone and call on our number PHONE NUMBER or visit our website and book the women you need. Our escorts are experts at look and body you will surely like them in the first sight of seeing. We have the best escorts in the city our escorts are selected from the best of the best and have everything that an escort should have to seduce you and give a peaceful night and spend good time with you. Men dream of different women but they normally do not get the chance to spend time with different women but now you have a choice here , you can spend time with any type of women you want. </p>\r\n', 'Badambadi.jpg', '                                                                Badambadi call girls', '2020-10-16 12:56:42', '2020-10-17 11:11:52'),
(59, 'Cuttack railway station call girls', 'Cuttack railway station', '<p>If you are staying around <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> cuttack railway station </strong> </a> or looking to have fun with our call girls then pick up your phone and dial our number or visit our website . our call girls the best women handpicked by us to give the fun you want , we also train our call girls to give the enjoyment to men and also give a good time. Our call girls are charming , beautiful , hot and seductive and are more focused on how to provide all kinds of services such as a massage or spend night with you , pick up your phone and call on our number PHONE NUMBER , or visit our website to know more about our services.  Our call girls have beautiful body and curvy figure that you will love in the first impression. We have got many kinds of call girls such as mature and young call girls , housewives and many . Browse through our list of women and book one now. </p>\r\n<h2> Cuttack railway station escorts</h2>\r\n<p> <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> Cuttack railway station escorts </strong> </a> the most beautiful escorts in the city they the most beautiful body and also experience of serving men and listening to their needs , our escorts maintain hygiene and also are very careful at maintaining client details secret. If you want some fun or a date or someone to drink with you at a party or just give you a good time then you are at the right place. Escorts provide you the pleasure you need and also take care you you and when you need. This is the time you need an escort that why you are here don’t be shy just browse through the profiles of various women and find the dream girl of your choice and pick them with you call on our number to book them now</p>', 'Bhubaneswar-Railway-Station.jpg', '    Cuttack railway station call girls', '2020-10-16 12:59:49', '2020-10-17 11:23:42'),
(60, 'Omp call girls', 'Omp', '<p>If you are in the city of Omp and looking for some fun with <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> omp call girls</strong> </a>  then pick up your phone and dial our number to meet the hottest call girls you have ever seen. We train our call girls to behave good and also look good our call girls are good at keeping and mainting our relations secret. Our call girls know what a man wants and are passionate about doing this service whether you are looking for casual fun dating or one night stand or anything we are here to serve all your needs our call girls know how to talk to our clients and our clients most of the times are impressed in their first impression by our call girls due to their beauty. All you need to do is pick up the phone and call our number PHONE NUMBER to meet them. </p>\r\n<h2> Omp escorts</h2>\r\n<p>If you are searching for hot omp escorts than you are in the right place , we have got all kinds of escorts raning from young and mature omp escorts . Our escorts are ready to please you anytime as they work 24/7 . Our escorts are the most used escorts in omp this is what we hear from our own clients they come again and again for enjoying and having fun that our escorts provide. Our escorts reach your place if you are not comfortable to visit us wherever you are either home at party or at farmhouse we deliver them to you it is our duty. If you have a dream of escaping this busy routine of life and having fun with the <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> most beautiful women escorts </strong> </a>  then you are in the right place. Call us now to book our escorts on PHONE NUMBER. </p>', 'Omp.jpg', '        Omp call girls', '2020-10-16 13:02:53', '2020-10-17 11:25:26'),
(61, 'Jagatpur call girls', 'Jagatpur', '<p>If you are dreaming of <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> beautifull  call girls  and are located in the city of jagatpur </strong> </a> than do not hesitate to call us we provide call girls to your location or women who can give you all you need is just call our number and be in touch with the most beautiful call girls. Whether you are looking for casual dating or massage service or sexual pleasures then go ahead with our services. Our range of services includes providing young call girls to hot mature women and other types. Our call girls are carefully selected so that the customer do not have to think when he sees the girls. Most our clients fall for our call girls in their first sight seeing because we selected girls who have the most beautiful body and a pleasing personality and an understanding of what men want. Do not hesitate to pick up your phone can call us we will deliver what you want within minutes of your booking. </p>\r\n<h2>Jagatpur escorts </h2>\r\n<p> If you are in Jagatpur and want some fun with the <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  jagatpur escorts </strong> </a> then you are in the right place our escorts are beautiful and very friendly they understand men and their needs they are also trained to serve you and keep your privacy so that you don’t worry. Our escorts are also the first when it comes to beauty they are the most hot women and they are ready to serve you as you want. Whether you need a massage or a women escort to have a drink with you or any need you will have it within minutes all you need to do is pick up you cell phone and call us or book our escorts online by browsing profiles.</p>\r\n<p>We have select the hottest women in the city just for you to give you the pleasure you want. </p>', 'Jagatpur.jpg', '    Jagatpur call girls', '2020-10-16 13:06:05', '2020-10-17 11:26:54'),
(62, 'Chowdar Call Girls', 'Chowdar ', '<p> If you are in the city of chowder and looking for hot and spicy call girls to come at your place to make you time better and remove your pain and worries you are in the right place. We are here to serve all your need our carefully selected hot ladies provide you the fun you miss in your life , our call girls are trained to play as the customer wants and are the most beautiful women in the city with services such as massage or date or dinner or drink anwhere you want whether it be office party or any other location it is our duty to deliver you our beautiful call girls at your place. <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  Chowdar call girls </strong> </a> have the most beautiful body and figure , within minutes of seeing you will like them . Why are you waiting pick up your phone and call on our number PHONE NUMBER.</p>\r\n<h2>Chowdar escorts </h2>\r\n<p>Chowdar escorts is another service that you do not want to miss if you are in the city of chowder . Looking for hot women escorts who can seduce you the way you want and give you the pleasure you are seeking then you are in the righ place. All you need to do is call on our number PHONE NUMBER. </p>\r\n<p>We are in the business of providing escorts since very long our clients visit us again and again for our services that we provide . Our escort look stunning with beautiful body and colour and are carefully picked by us. Whether you want to talk , or drink or date or one night stand you can get anything you want with your dream girl. Ever wonder that life has become boring and busy and want to escape it we have got exactly what you want our escorts work 24/7. </p>', 'Chowdar.jpg', '        Chowdar Call Girls', '2020-10-16 13:09:50', '2020-10-17 11:29:07'),
(63, 'Barabati call girls', 'Barabati', '<p> If you are looking for hot call girls and aunties that can seduce you tonight or any day you want then you are in the right place\r\n <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong> barabati call girls </strong> </a> are the most naught call girls and are fun to hang out with they understand men very well and also love to serve all your needs do not shy to call us or ask for our services , our call girls are also good at enjoying with shy men so you don’t have to worry.</p>\r\n<p>We offer wide range of call girls like young hot call girls and also mature women who have beautiful body and also can understand you very well and provide you guaranteed satisfaction. Pick up your call and call us anytime we are working 24/7 to provide you with what you want. </p>\r\n<h2>Barabati escorts </h2>\r\n<p>If you are in the city of barabati and looking to enjoy with hot women escorts then you are in the right place we offer the most beautiful and hot women escorts who can give you a massage or seduce you for a drink or one night stand or any type of service you expect from them. We have selected the most beautiful women in the city so that you do not have to worry about selecting , any escort you come across on our profiles page you will be surely loving to meet. Spice up your weekend by inviting our hot escorts to your place or at office or any other location. Pick up your cell phone and call us right now. </p>', 'Barabati.jpg', '    Barabati call girls', '2020-10-16 13:13:12', '2020-10-17 11:30:03'),
(64, 'Khurda call girls', 'Khurda', '<p>If you live in khurda or looking to enjoy with hot call girls in khurda then you have come to the right place our services range from <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  hot call girls to mature women </strong> </a> who can serve you selflessly and remove all worries from your life , whether you are looking for friend or someone who can sit and drink with you or attend a party with you or make your weekend spicy we have everything that you need all you have to do pick up your cell phone and call us right now to make your life more happy . Our escorts do everything ranging from dirty talks to every dirty thingt you can imagine. Pick up your phone and book your hot escort now. </p>\r\n<h2>Khurda escorts </h2>\r\n<p> <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  Khurda escorts </strong> </a> are the hottest escorts you will find in the city of khurda , if you are looking for a massage or to spend time with hot escort or spend night with hot women then we have got everything that you need you just need to tell your requirements and leave the rest to us so that we can deliver what you want at your place.  We have world class escorts at our service anytime you want to feel different or spice up your life or need escorts to serve you call us so that we will deliver the most beautiful women for you. Our clients visit us many times and always say that our escorts are the best in town . The beautiful body and figure of our escorts will make you crazy in first impression itself. You will want this everytime you think about escorts . So don’t be shy or hesitate to book our escort call us on our number and book one now. </p>', 'Khurda.jpg', '    Khurda call girls', '2020-10-16 13:17:18', '2020-10-17 11:31:20'),
(65, 'Jaydev vihar call girls', 'Jaydev vihar', '<p>If you planning or you are present in <a href=\"https://bhubaneswar.loconto.net/location/Badambadi/58\"  <strong>  jaydev vihar and looking hot hot young or mature call girls or women </strong> </a> then you are in the right place pick up your phone and call our number or visit our website <a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a>  and get the girl you want at your doorstep . We offer range of many services which you will happy after you choose such as massage service ,  one night stand or need a women for party or for a drink or just to make you happy and all types of sensual requirements . Our women are ready to serve all your needs anything that you want it is our duty to give you and our call girls are extremely understanding and portable and they are also intelligent in understanding what a man wants. Browse through our categories of hot , mature , seductive and very beautiful call girls that are sure to impress you in the first sight . </p>\r\n<h2>Jaydev vihar escorts </h2>\r\n<p>Escorts are common nowadays but the escorts we provide are on the top that you should check out because we have carefully picked women who are passionate about becoming and behaving like escorts also who already look gorgeous pick up your phone and call us now on MOBILENUMBER , or visit our website <a href=\"<?php echo base_url(); ?>\" <strong> www.bhubaneswar.loconto.net </strong></a>  Our escorts are ready to give you sensual massage to everything little enjoyment that you need and dream of if you are in Jaydev city then you should check out our hot escorts browse through the list of hottest women escorts that we have book them now anytime you want anywhere you want we have them for you either occassionaly or daily our escorts work 24/7. </p>', 'Jaydev-vihar1.jpg', '    Jaydev vihar call girls', '2020-10-16 13:21:09', '2020-10-17 11:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title_id` int(11) DEFAULT NULL,
  `meta_title` varchar(200) DEFAULT NULL,
  `meta_des` varchar(200) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_id`, `title_id`, `meta_title`, `meta_des`, `added_date`, `updated_date`) VALUES
(1, 1, NULL, 'bhubaneswar Escorts | VIP models | We are not fouler or cheaters', 'bhubaneswar Escorts welcomes you to a very beautiful Independent Call Girls and Escort Service. We Provide Female escorts in bhubaneswar working 24/7', '2019-09-17 14:53:22', NULL),
(2, 2, 0, 'Escort service bhubaneswar | Take your money back if not satisfied', 'Are you looking for bhubaneswar Escort service? We will fulfill your demand to give you maximum satisfaction.', '2019-09-17 14:54:07', '2019-09-17 15:29:12'),
(3, 3, 0, 'Call girls bhubaneswar | Incall and Outcall Escorts', 'Our Independent girls are online 24/7 throughout the city area. Just call 07070801847 for dating, fun and adult service.', '2019-09-17 14:54:51', '2019-09-17 15:29:06'),
(4, 4, NULL, 'bhubaneswar Escorts Category | Different Call Girl 4 Different Man', 'We have categoriesd our bhubaneswar escorts in many different categories to make it simple and hassle-free if you are making a selection.', '2019-09-17 14:58:14', NULL),
(5, 5, NULL, 'bhubaneswar Escorts Videos | Bold Hot and Sexy Videos of our Call Girls', 'bhubaneswar Girls hot and sexy videos to entertain yourself before taking our call girls service in bhubaneswar.', '2019-09-17 15:24:56', NULL),
(6, 6, NULL, 'Escorts Location bhubaneswar', 'We have escorts service in different locations of bhubaneswar. In order to provide you the best and easy service we have seperated our Female escorts to different locations.', '2019-09-17 15:25:50', NULL),
(7, 7, 0, 'Call girl Job in bhubaneswar | Earn 20k Daily', 'If you want a job in bhubaneswar Escort service and want to earn a lot in daily basis then call:07070801847.', '2019-09-17 15:26:32', '2019-09-17 15:28:40'),
(8, 10, 0, 'Call Girls bhubaneswar Phone Number | Talk Now !', 'Want to chat with Hot and sweet girls of bhubaneswar, Book out Escorts bhubaneswar and take any of our girls for date.', '2019-09-17 15:27:21', '2019-09-17 15:28:34'),
(9, 8, NULL, 'bhubaneswar Escorts Price | Get Escort by Models at cheap rate', 'Get VIP Models escorts at affordable Price. Check out our Female Escorts at your budget available 24/7.', '2019-09-17 15:31:46', NULL),
(10, 9, NULL, 'Latest Blogs of our bhubaneswar Escorts Agency', 'See daily new and updating blogs of our escorts agency to get the latest updates and offers about our escorts service now anytime and anywhere', '2019-09-17 15:51:23', NULL),
(12, 11, 142, 'Escort bhubaneswar Sanvi | South Indian Beauty', 'We provide the best South Indian Girls in bhubaneswar as an escort for you to get full fun and pleasure. Our escorts of bhubaneswar are bold and beautiful, so don\'t hesitate just give a call to +91707', '2019-09-17 17:10:20', NULL),
(13, 11, 144, 'Female Escort Tanvi | North Indian Girl', 'Find your premium North Indian girl in bhubaneswar escorts and book her till you want her for enjoyment or relaxation in bhubaneswar.', '2019-09-17 17:11:39', NULL),
(14, 11, 145, 'bhubaneswar College Girls | Spend your day with Sexy girls  ', 'The ony way to make everything possible is our bhubaneswar Escort Service. Come and enjoy the endless moment with Call girls bhubaneswar.', '2019-09-17 17:12:17', NULL),
(15, 11, 146, 'bhubaneswar Model Escort Dory | Russian Blonde', 'You can find high-class Russian escorts in bhubaneswar. Our escorts are highly talented and achieved expertise to give you full pleasure.', '2019-09-17 17:23:59', NULL),
(16, 11, 147, 'bhubaneswar Escort Kenny | British Blonde', 'If you are looking for a British escort in bhubaneswar then just ping us as only we provide British escorts all over bhubaneswar.', '2019-09-17 17:24:43', NULL),
(23, 11, 148, 'Call Girl Nitya | Book Nitya Now', 'bhubaneswar independent female call girls Nitya is available 24/7 at your service. Nitya is the Hottest Girl in Town.', '2019-09-17 17:26:56', NULL),
(24, 11, 150, 'Goregaon Call Girls Pihu | Get fun unlimited', 'Find  Goregaon Escorts Service online whenever you are ready to take our service. Our  Goregaon Female Escorts girls are available 24/7 at your service ', '2019-09-17 17:28:29', '2020-08-06 21:19:12'),
(25, 11, 151, 'bhubaneswar Escort Suman | See Our Escorts Sexy Images', 'Suman is the sexiest and experienced call girl of our bhubaneswar Escort Agency. She can also accompany you anywhere you want for a party or dating. ', '2019-09-17 17:29:31', NULL),
(26, 11, 152, 'bhubaneswar Escort Payal | Dating Service bhubaneswar', 'Payal is the most demanded of our escorts agency in bhubaneswar. She can please you from tip to toe at an affordable price.', '2019-09-17 17:30:23', NULL),
(27, 11, 153, 'bhubaneswar Escort Kavya | Browse Our Escorts Website', 'Welcome to our Elite Escorts in bhubaneswar, Here you will find hi-fi call girls and female escorts available 24/7.', '2019-09-17 17:32:03', NULL),
(28, 11, 154, 'bhubaneswar Escort Mahi | Browse the gallery', 'Mahi is the most gorgeous and sexy girl from our bhubaneswar Escort. She is highly professional and very experienced to please you anytime.', '2019-09-17 17:32:50', NULL),
(29, 11, 155, 'bhubaneswar Escort Chandini | Women Seeking Men', 'Chandini is one of the beautiful, hot, sexy call girls of our bhubaneswar Escort Agency. Book Her to satisfy your dirty desires.', '2019-09-17 17:33:41', NULL),
(30, 11, 156, 'bhubaneswar Escort Bhoomika | Female Escorts', ' Are you looking for hot n sexy call girl in bhubaneswar then Book Our Model Escort Bhoomika and enjoy her experience to satisfy yourself.', '2019-09-17 17:34:22', NULL),
(31, 11, 157, 'bhubaneswar Escort Deepali | Browse the gallery', 'Book Our Independent Call Girl Deepali and enjoy her company anytime and anywhere with just one call.', '2019-09-17 17:35:02', NULL),
(32, 11, 158, 'bhubaneswar Escort Garima | Browse Our Escorts gallery', 'Here We provide high profile call girls and dating girls. Our Female Escorts are very hot and sexy and always ready to please you.', '2019-09-17 17:35:41', NULL),
(33, 11, 159, 'Escort Girl Naina | Get girlfriend experience here.', 'Feel the girlfriend experiance with our escorts of bhubaneswar. Meet Naina a girl full of life, She is one of the most beautiful girl of our escorts bhubaneswar.', '2019-09-17 17:37:17', NULL),
(34, 11, 160, 'Independent Call girl | Book your girl Now', 'Check out the hot and sizzling escorts of bhubaneswar who can take you to heaven. Our independent call girls are ready to give you full pleasure.', '2019-09-17 17:38:19', NULL),
(35, 11, 161, 'Independent girl bhubaneswar | Meet with Siya', 'If you are looking for an independent call girl in bhubaneswar and really want to enjoy with them then ping us on 9986367221.', '2019-09-17 17:39:11', NULL),
(36, 11, 162, 'VIP Escort Manvi | High class call girl', 'We provide VIP call girls in bhubaneswar at your doorsteps. Our premium escorts bhubaneswar are always ready to give you pleasure.', '2019-09-17 17:40:01', NULL),
(37, 11, 163, 'bhubaneswar Escort Paakhi | Fun Loving Female Companion', 'Book Our High Profile Call Girl Pakhi and enjoy her in all sexy position which you have seen in adult movies with no hidden charges.', '2019-09-17 17:41:05', NULL),
(38, 11, 164, 'bhubaneswar Escort Ritika | Girls For Pleasure Service', 'We provide elite call girls and female escorts available 24/7 on your demand. Book Once and See Our Angels.', '2019-09-17 17:41:50', NULL),
(39, 11, 165, 'bhubaneswar Escort Tanuja | Sexy Girl Tannu', 'Hey There This is Tannu from Escorts Service bhubaneswar, I provide massage, Sex, and dating service in bhubaneswar and its near major areas.', '2019-09-17 17:42:35', NULL),
(40, 11, 166, 'bhubaneswar Escort Yamini | Independent Escort Service', 'Book Our Escorts Service to relive those dirty moments with our female escorts Yamini. SHe can Please you from all her holes.', '2019-09-17 17:43:20', NULL),
(41, 11, 167, 'Call Girl Riddhi | Book Riddhi Now', 'bhubaneswar independent female call girls available 24/7 at your service. We provide both in-call and out-call service.', '2019-09-17 17:44:06', NULL),
(42, 11, 168, 'Call Girl Juhi | Book Juhi Now', 'Book Our bhubaneswar Escort Juhi to spend some erotic and intimate time. Independent Escort Juhi can do anything to please you in the bed.', '2019-09-17 17:44:53', NULL),
(43, 11, 169, 'Call Girl Gayatri | Book Gayatri Now', 'bhubaneswar independent female Escort Gayatri is available 24/7 to provide you both in-call and out-call service.', '2019-09-17 17:45:34', NULL),
(44, 11, 170, 'Call Girl Aarushi | Book Aarushi Now', 'bhubaneswar independent female call girls available 24/7 at your service. Female Escort Aarushi provide all kind of escorts service and massage service in bhubaneswar.', '2019-09-17 17:46:12', NULL),
(45, 12, 35, 'Call girl service in Andheri bhubaneswar', 'Make your day special with our call girls in bhubaneswar. As they are very eager to spend some erotic fun with handsome boys in bhubaneswar. ', '2019-09-17 17:47:35', NULL),
(46, 12, 36, 'Escorts service in Bandra bhubaneswar', 'Are you looking for VIP escorts in bhubaneswar? if yes then enjoy the unforgetful experience with our Female escorts bhubaneswar.', '2019-09-17 17:48:36', NULL),
(47, 12, 37, 'Female Escorts in Chembur bhubaneswar', 'Making everything possible we have done an arrangement for each and every people of bhubaneswar to spend restless nights with our bhubaneswar college girls.', '2019-09-17 17:49:37', NULL),
(48, 12, 38, 'Goregaon call girls bhubaneswar', 'Vip escorts and models are here to spend some erotic moments with men who are not satisfied with there girlfriend or wives.', '2019-09-17 17:50:24', NULL),
(49, 12, 39, 'Escorts service in Juhu bhubaneswar', 'Women seeking men in Juhu bhubaneswar looking for full enjoyment. Are you ready to join them here then please contact un on 9986367221?', '2019-09-17 17:51:30', NULL),
(50, 12, 40, 'Call girls in Lower Parel bhubaneswar', 'Independent Female escorts and College girls are looking to spend the night with lonely and unsatisfied men.', '2019-09-17 17:52:42', NULL),
(51, 12, 41, 'Female escorts in Navi bhubaneswar', 'We have young and good looking girls available in all location of bhubaneswar. Come here and get the most erotic fun.', '2019-09-17 17:53:54', NULL),
(52, 12, 42, 'Escorts service in North bhubaneswar', 'Call girls are ready for you to give the best deal you want for having full fun and enjoyment.', '2019-09-17 17:54:30', NULL),
(53, 12, 43, 'Female escort service in Powai bhubaneswar', 'Independent call girls are waiting for you in bhubaneswar to make you happy however you want.', '2019-09-17 17:55:07', NULL),
(54, 12, 44, 'Escorts service in South bhubaneswar', 'College girls and call girls in South bhubaneswar. Looking for fun with then ping us on 9986367221.', '2019-09-17 17:55:48', NULL),
(55, 12, 45, 'Colaba Escorts Service', 'Looking for hot sexy and discreet call girls in Colaba, Worry now as we provide all type of horny call girls to satisfy your lust.', '2019-09-17 17:56:54', NULL),
(56, 12, 46, 'Marine Drive bhubaneswar Escorts', 'Take our cal girls on a date to Marine Drive or Chowpati to enjoy with our call girl.', '2019-09-17 17:59:53', NULL),
(57, 16, 56, 'Call girls available in bhubaneswar', ' Our bhubaneswar Escorts girls are a highly qualified professional who can go to any extent just to please and satisfy your dirty desire.', '2019-09-17 18:07:18', NULL),
(58, 16, 57, 'BDSM girls available in bhubaneswar | Dominatrix Escorts', 'Those who like BDSM Girls bhubaneswar and like to get dominated you may find numerous attractive girls. This is Dominatrix Escorts bhubaneswar and you will enjoy being dominated.', '2019-09-17 18:08:10', '2020-08-09 21:22:13'),
(59, 16, 58, 'Russian Escort Service bhubaneswar | Russian Call Girls', 'A Russian escort bhubaneswar gives the very best service possible if a person is searching for a thrilling companion. The very best service to ring if you\'re trying to find a Russian call girl bhubane', '2019-09-17 18:09:31', '2020-08-08 15:01:43'),
(60, 16, 59, 'Party girls available in bhubaneswar', 'Enjoy bhubaneswar Nightlife with our Party girls who can accompany you anywhere you want them to.', '2019-09-17 18:10:51', NULL),
(61, 16, 60, 'College girls available in bhubaneswarbeauties Escorts', ' Our bhubaneswar Escorts are sexy college girls from all over India. They can Provide you dating service and companion service as well.', '2019-09-17 18:11:30', NULL),
(62, 16, 61, 'Beautiful Young girls available in bhubaneswar', 'We also provide young and virgin call girls in bhubaneswar at your intimate service for both incall and outcall.', '2019-09-17 18:12:20', NULL),
(63, 16, 62, 'Tall girls available in bhubaneswarbeauties Escorts', 'We also Provide Tall Call Girls for men who thinks differently at the time of Intimacy for incall and outcall.', '2019-09-17 18:13:22', NULL),
(64, 16, 63, 'Small Boobs girls available in bhubaneswar', 'We provide all types of escorts in bhubaneswar. Our bhubaneswar Escorts are very bold and beautiful to please you.', '2019-09-17 18:15:34', NULL),
(65, 16, 64, 'Pink girls available in bhubaneswarbeauties Escorts', 'Our Red Hot Pink Girls are generally foreign call girls whom we have arranged to please and satisfy you. Just Call Us for Bookings.', '2019-09-17 18:16:11', NULL),
(66, 16, 65, 'BIG Tits girls available in bhubaneswarbeauties Escorts', 'Our Big Titted bhubaneswar Escorts are ever-ready to please you once you confirmed the bookings.', '2019-09-17 18:17:09', NULL),
(67, 16, 66, 'Young, 16years girls available in bhubaneswarbeauties Escorts', 'We also Provide young Virgin Call Girls for you to satisfy your lust.', '2019-09-17 18:17:45', NULL),
(68, 16, 67, 'Sexy girls available in bhubaneswarbeauties Escorts', 'Hot and Sexy bhubaneswar Call Girls are Available 24/7 at your Service, Just contact us on +917070801847.', '2019-09-17 18:18:20', NULL),
(69, 16, 68, 'Lesbian girls available in bhubaneswarbeauties Escorts', 'We also Provide Lesbian Escorts in bhubaneswar for our Valuable female clients who are interested in same-gender sex.', '2019-09-17 18:19:00', NULL),
(70, 16, 69, 'Green eye girls available in bhubaneswarbeauties Escorts', 'Green-Eyed Girls are generally Very hot and sexy on Bed So we also provide green-eyed call girls in bhubaneswar.', '2019-09-17 18:19:41', NULL),
(71, 16, 70, 'Slim girls available in bhubaneswarbeauties Escorts', 'Slim girls from Our bhubaneswar Escorts Service can go to any extent to satisfy you.', '2019-09-17 18:20:15', NULL),
(72, 16, 71, 'Chinese girls available in bhubaneswarbeauties', 'We are bhubaneswarbeauties Escorts Service, Our Female Escorts are hot and sexy girls ready to please you anytime.', '2019-09-17 18:21:00', NULL),
(73, 16, 72, 'Looking for some other companion-Three some', 'We also provide Duo Escorts to fulfill your dirty desire related to a threesome with our call girls in bhubaneswar.', '2019-09-17 18:21:40', NULL),
(74, 16, 73, 'HJ-BJ Girls available in bhubaneswarbeauties Escorts', 'We also Provide Anal Sex Service in bhubaneswar such as H-J and B-J on your demand.', '2019-09-17 18:22:16', NULL),
(75, 16, 74, 'House wife available in bhubaneswarbeauties Escorts', 'We Provide Hot and Busty Housewife Escorts who are very well experienced to please each and every customer.', '2019-09-17 18:23:25', NULL),
(76, 16, 75, 'Good Structure girls available in bhubaneswarbeauties Escorts', 'Are you looking for a hot and sexy girl in bhubaneswar? Visit our bhubaneswarbeauties escorts service', '2019-09-17 18:24:09', NULL),
(77, 16, 76, 'Cheap Rates bhubaneswar Escorts', 'Cheap Rates bhubaneswar Escorts are there at your service in our escorts agency. Get ready to satisfy your lust with our hot and sexy call girls at affordable prices.', '2019-09-17 18:24:50', NULL),
(78, 16, 77, 'London Girls bhubaneswar Escorts', 'Enjoy the beauty of London Girls in bhubaneswar Escorts which is no less then the goddess of love came here just to satisfy you.', '2019-09-17 18:26:06', NULL),
(79, 16, 78, 'Mallu Aunty bhubaneswar Escort Services', 'Book Our Mallu Aunty bhubaneswar EscortS to get highly experienced married women who know each and every way to please their man. Our Married bhubaneswar Escorts are available 24/7 at your service.', '2019-09-17 18:26:50', NULL),
(80, 16, 79, 'Mallu Aunty Sex Videos', 'Our Mallu Aunty Sex Videos will arouse all your sensual feelings. Book our Mallu Aunty Escorts from our bhubaneswar Escorts Agency.', '2019-09-17 18:28:43', NULL),
(81, 16, 80, 'Marathi bhubaneswar Escort Girls', 'Marathi Girls are very horny on Bed. Marathi bhubaneswar Escort Girls are always ready to fulfill all your dirty desires.', '2019-09-17 18:31:50', NULL),
(82, 16, 81, 'bhubaneswar British Girl Escorts', 'Looking for British Girl Escorts in bhubaneswar?. Come to me as I have all type of British call girls to satisfy your lust deeply.', '2019-09-17 18:32:29', NULL),
(83, 16, 82, 'bhubaneswar Model Escorts', 'High Profile bhubaneswar Model Escorts are available in our bhubaneswar Escorts Agency. Feel Free to contact our Models Escorts anytime.', '2019-09-17 18:33:01', NULL),
(84, 16, 83, 'South Indian Girls Sex Video', 'Visit our bhubaneswar Escorts website to view erotic South Indian Girls Sex Video and enjoy a full dirty session.', '2019-09-17 18:33:45', NULL),
(85, 16, 84, 'Tamil Escorts in bhubaneswar', 'Wanna Enjoy with black Tamil Escorts in bhubaneswar?. Here at bhubaneswarbeauties escorts in bhubaneswar provide you the ultimate kind of Tamil Call Girls Ready to Serve You.', '2019-09-17 18:34:16', NULL),
(86, 16, 85, 'Punjabi girls available in bhubaneswarbeauties Escorts', 'Our Punjabi Call Girls very hot and beautiful who are here for modeling and acting in Movies but work here to ear some fast and easy income.', '2019-09-17 18:34:55', NULL),
(87, 16, 86, 'Muslim Girls available in bhubaneswarbeauties Escorts', 'We also Provide Muslim Call Girls to satisfy your sexy lust at affordable prices.', '2019-09-17 18:35:32', NULL),
(88, 16, 87, 'Bengali Actress available in bhubaneswarbeauties Escorts', 'We provide Bengali Call Girls and dating girls for fun and pleasure and bhubaneswar.', '2019-09-17 18:36:09', NULL),
(89, 16, 88, 'VIP girls available in bhubaneswarbeauties Escorts', 'VIP bhubaneswar Escorts are waiting to please you from top to bottom available 24/7 just ping us.', '2019-09-17 18:36:47', NULL),
(90, 14, 10, 'Hot Romance Video of Our bhubaneswar Escort Girls', 'Romancing call girls in very hot and sexy video to enjoy.', '2019-09-17 18:38:53', NULL),
(91, 14, 11, 'bhubaneswar Escorts Romance Video', 'Sexy dating girls enjoying with our clients ', '2019-09-17 18:40:26', NULL),
(92, 14, 12, 'Hot and sexy Videos | bhubaneswar Call Girls', 'View our escorts video to enjoy the beauty of our call girl.', '2019-09-17 18:44:00', NULL),
(93, 14, 13, 'Sexy Film Video Of our Escorts Agency Girls', 'Sexy Film Video Of our Escorts Agency Girls to enjoy the sleepless night.', '2019-09-17 18:46:08', NULL),
(94, 14, 14, 'Desi Sexy Video | bhubaneswar Dating Girls', 'Desi Sexy Video  bhubaneswar Dating Girls to have erotic fun online.', '2019-09-17 18:47:35', NULL),
(95, 14, 15, 'Tamil Escorts in bhubaneswar | Hot and sexy Video', 'Tamil escorts video| Enjoy anytime and anywhere online in our website.', '2019-09-17 18:52:36', NULL),
(96, 14, 16, 'bhubaneswar Escorts Videos | Sexy Indian Girls', 'bhubaneswar Escorts videos for fun and pleasure.', '2019-09-17 18:56:19', NULL),
(97, 14, 17, 'Tamil Escorts in bhubaneswar', 'Tamil escorts in bhubaneswar if you love south Indian girl to enjoy your erotic lovemaking.', '2019-09-17 18:58:10', NULL),
(98, 12, 47, 'Escorts in Worli bhubaneswar', 'Female escorts and call girls are available in Worli bhubaneswar. If you are interested in having fun with college girls bhubaneswar then pings us on 9986367221.', '2019-09-18 16:30:26', NULL),
(99, 16, 89, 'North Indian girls in bhubaneswar', 'We provide top-notch escorts in bhubaneswar to please our valuable clients from all over the world.', '2019-09-18 16:31:26', NULL),
(100, 16, 90, 'Bhubaneswar Girls Available In bhubaneswar For Fun.', 'We provide the hottest and beautiful call girls in bhubaneswar from all over the world just for our VIP clients.', '2019-09-18 16:32:20', NULL),
(101, 16, 91, 'Goa Girls available in bhubaneswar', 'We also provide Virgin call girls from Goa and its near locations Just to please our VIP and VVIP Clients who demand a virgin call girl.', '2019-09-18 16:32:59', NULL),
(102, 16, 92, 'Arab Girl Escorts Service in bhubaneswar | Cheap Arab Girl Escorts.', 'Looking for our Arab Escorts in bhubaneswar, Now loo not further. Our escort agency is now providing hot and sexy Arab bhubaneswar call girls.', '2019-09-18 16:34:09', NULL),
(103, 16, 93, 'Dinner Dates Escorts Service in bhubaneswar | Cheap Dinner Dates Escorts.', 'Now enjoy spending lovely time with our bhubaneswar call girls, by taking them on dinner. Spend quality time with our bhubaneswar hot girls.', '2019-09-18 16:35:02', NULL),
(104, 16, 94, 'Educated bhubaneswar Girl Escorts Service | Cheap Educated Girl Escorts.', 'Tired of all the local and novice escorts? Now get a chance to meet real educated bhubaneswar call girl for a fun time.', '2019-09-18 16:35:56', NULL),
(105, 16, 95, 'Happy Hours bhubaneswar Girl Escorts Service | Cheap Happy Hours Escorts.', 'Now get special discounts and offers on the bhubaneswar call girls during our Happy hours, To know more visit us.', '2019-09-18 16:36:44', NULL),
(106, 16, 96, 'Long drive bhubaneswar Girl Escorts Service | Cheap Long drive Escorts.', 'Have the ride of your life with our dashing bhubaneswar girls. Ride your car with our call girls in bhubaneswar right beside you.', '2019-09-18 16:37:52', NULL),
(107, 16, 97, 'Limousine with bhubaneswar Girl Escorts Service | Cheap Long drive Escorts.', 'Now get into the Limousine with our lovely bhubaneswar call girls. Enjoy their company while going into a party.', '2019-09-18 16:38:41', NULL),
(108, 16, 98, 'Pink lips bhubaneswar Call girl Service | Cheap Pink lips Girls Escorts.', 'Everybody loves a good pair of pink lips to kiss, deeply. When you kiss our bhubaneswar call girls pink lips, you will feel like heaven. That\'s the magic of our bhubaneswar girls.', '2019-09-18 16:40:08', NULL),
(109, 16, 99, 'Special offers bhubaneswar Call girl Service | Cheap price Offers Girls Escorts.', 'Now enjoy special offers with our bhubaneswar call girls. Terms and conditions will be applied to spend time with our call girls bhubaneswar.', '2019-09-18 16:42:22', NULL),
(110, 16, 100, 'Top Rated bhubaneswar Call girl Service | Cheap Top Rated Girls Escorts.', 'Experience our Top class bhubaneswar girls first hand. They will blow your mind off by their unique style of making love. For more information, click here.', '2019-09-18 16:43:26', NULL),
(111, 11, 171, 'bhubaneswar Escorts Girl Aashi | Hot and sexy Girl', 'Hire Our hot and sexy bhubaneswar Escorts Aashi and get maximum satisfaction. Our  Call Girls are ready to serve you anytime. Contact us anytime to book.', '2019-09-23 17:56:03', NULL),
(113, 11, 173, 'bhubaneswar Escorts | Rent Our Girl  Barkha', 'Brace Yourself for sensual and erotic time with Independent Call Girls. Our bhubaneswarEscort Barkha will leave no demand or desire unfulfilled. Book her 24/7 from our agency.', '2019-09-23 18:01:28', NULL),
(114, 11, 174, 'Sexy Escorts in bhubaneswar | VIP Call Girl Gargi', 'Looking for hot and sexy escorts in bhubaneswar? Visit Our Website to find the most beautiful and demanded call girls in town at an affordable price.', '2019-09-23 18:07:59', NULL),
(115, 11, 175, 'Independent call girls in bhubaneswar | Female Escort Harini', 'Unwind Yourself with our ravishing and sparkling Independent call girls in bhubaneswar. The charm of our VIP Models Escorts will surely make you “wow”.', '2019-09-23 18:38:45', NULL),
(116, 11, 176, 'Escort Girls bhubaneswar | Independent Young Girl Iniya', 'Our Escorts bhubaneswar is drop-dead gorgeous from top to down. They are highly trained for satisfying men who are seeking escort girls or female escorts.', '2019-09-24 11:04:03', NULL),
(117, 11, 177, 'bhubaneswar Party Girl Nalini | Overnight Fun', 'Call 07070801847 to book the hottest and sexiest Party call girls in bhubaneswar. Our Female Escort Nalini is always high in demand due to their curvaceous body and booty.', '2019-09-24 11:15:48', NULL),
(118, 11, 178, 'Russian Call Girl Miyal in bhubaneswar', 'Young and fresh Russian Escorts and call girls are waiting for you to book. Our Russian Female Escorts will tease and tantalizes and satisfy you in every way you want.', '2019-09-24 11:22:39', NULL),
(119, 11, 179, 'Models Escorts  bhubaneswar | Bollywood Model Omisha', 'Gorgeous isn\'t nearly a big enough word to describe our Models Escorts bhubaneswar,  Moreover, Our Actress Escort Omisha is highly professional and very discreet in nature.', '2019-09-24 11:33:37', NULL),
(120, 11, 180, 'Bombay Call Girl Tejal | College Call Girls at Your Doorstep', 'Looking for hot and sexy escorts in bhubaneswar at your doorstep? Visit Our Website for the most beautiful and demanded call girls in town at an affordable price in Bombay.', '2019-09-24 11:40:02', NULL),
(121, 11, 181, 'independent call girls bhubaneswar | Threesome Escorts ', 'I am Urvi, a simple and sophisticated girl but kinky on bed. I provide threesome escorts service. I am working as an independent call girls bhubaneswar.', '2019-09-24 11:59:24', NULL),
(122, 11, 182, 'call girl service in bhubaneswar |  Call Girl Vaani', 'Hey bhubaneswar, this is Vaani, I am a good girl with a dirty mind and a hot and sexy figure, I provide call girls service in bhubaneswar to fulfill your dirty desires.', '2019-09-24 12:34:12', NULL),
(123, 11, 183, 'Escort Center bhubaneswar for In call Service Anytime', 'Unwind Yourself with our delightful and sparkling call girls in bhubaneswar for an incall service. The charm of our VIP Girl  Kalyani in our escort center bhubaneswar will surely make you “wow”.', '2019-09-24 12:37:29', NULL),
(124, 11, 184, 'North Indian Escort | ????? ???????? Bandita', 'Call Us to book hot and beautiful North Indian Girls to spend unforgettable erotic moments.  We provide all type of Call Girls and Dating Girls here at our escorts agency.', '2019-09-24 12:59:43', NULL),
(125, 11, 185, 'Punjabi Escorts bhubaneswar Amulya | Women Seeking Men', 'Looking for hot ravishing Punjabi girl in bhubaneswar? Worry not we at bhubaneswarBeauties escorts provide hot and sexy Punjabi escorts all major locations on your demand.', '2019-09-24 13:10:53', NULL),
(126, 11, 186, 'Christian Call Girl in bhubaneswar | Joyel | Female Escorts', 'Sensual hot and sexy Christian Call Girls have joined our Escorts agency in bhubaneswar. Book Christian Call Girl in bhubaneswar at your doorstep anytime.', '2019-09-24 13:23:25', NULL),
(127, 11, 187, 'IT Call Girl in bhubaneswar | Educated Escort Parina', 'Book our highly educated IT Call Girl in bhubaneswar to feel the sensuality in a professional way. Our Call Girl Parina is Highly recommended for High profile men who like professional escorts.', '2019-09-24 13:45:43', NULL),
(128, 11, 188, 'Muslim Girl in bhubaneswar | Saira | VIP Escort bhubaneswar', 'Muslim Call girls in bhubaneswar to give you a thrilling sensual erotic time. Book Saira as a VIP Muslim call girl and enjoy intimacy at its peak. ', '2019-09-24 13:59:53', NULL),
(129, 11, 189, 'Teenage Escort in bhubaneswar | Marathi call girl Maira', 'Marathi call girl is ready for both incall and outcall anytime when in bhubaneswar. Maira is a very hot and sexy call girl in our escorts agency in bhubaneswar', '2019-09-24 14:07:45', NULL),
(130, 11, 190, 'Modern Open Minded Call Girl | Gouri | bhubaneswar Escort Girl', 'Gouri is a very open-minded hot and sexy girl always ready to satisfy you from top to bottom Book her once and feel the heat inside her body Call her anytime to book', '2019-09-24 14:15:19', NULL),
(131, 16, 101, 'Private escort service bhubaneswar is a great source of sexual desire and entertainment', 'Hire Private call girls with us for party and gatherings secretly in bhubaneswar city. With our hot escort girl, you can enjoy a lot and feel complete satisfaction with them. ', '2020-07-26 21:25:01', NULL),
(132, 16, 101, 'dfsdf', 'sdfsdf', '2020-07-26 22:06:21', NULL),
(133, 11, 172, 'Muslim Call girls bhubaneswar | Call girls near you', 'Muslim call girls can remove your stress and unburden your minds. Here in bhubaneswarbeauties you will get a variety of Muslim escorts to understand your soul with compassion.', '2020-08-06 21:11:51', NULL),
(134, 11, 191, 'Call girl Whats App No | Call girl for sex', 'Get all list of call girl whatsapp number and mobile number.  Find your partner and get ready to chat and mingle with stunning companions to your next soiree.', '2020-08-06 21:26:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `page_url` varchar(200) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_url`, `added_date`, `updated_date`) VALUES
(1, 'HOME', 'index.php', '2019-09-17 14:02:08', NULL),
(2, 'SERVICES', 'services', '2019-09-17 14:02:37', NULL),
(3, 'GALLERY', 'gallery', '2019-09-17 14:02:51', '2019-09-18 16:54:13'),
(4, 'CATEGORY', 'categories', '2019-09-17 14:43:41', '2019-09-18 17:13:37'),
(5, 'VIDEOS', 'video', '2019-09-17 14:44:03', '2019-09-18 17:19:03'),
(6, 'LOCATIONS', 'locations', '2019-09-17 14:44:21', '2019-09-18 17:18:37'),
(7, 'VACANCY', 'vacancy', '2019-09-17 14:45:05', NULL),
(8, 'PRICE', 'price', '2019-09-17 14:45:20', NULL),
(9, 'BLOG', 'blogs', '2019-09-17 14:45:34', '2019-09-18 17:20:34'),
(10, 'CONTACT US', 'contact', '2019-09-17 14:45:55', NULL),
(11, 'Profile Detail', 'profile', '2019-09-17 15:55:00', '2019-09-17 16:46:13'),
(12, 'Location Detail', 'location', '2019-09-17 16:09:32', NULL),
(13, 'Videos', 'video', '2019-09-17 16:15:11', '2019-09-18 17:19:16'),
(14, 'Video Details', 'videos', '2019-09-17 16:16:21', '2019-09-18 17:19:26'),
(15, 'Blog Detail', 'blog', '2019-09-17 16:16:53', NULL),
(16, 'Category Detail', 'category', '2019-09-17 16:46:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_post`
--

CREATE TABLE `profile_post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `imge` blob NOT NULL,
  `book_infmn` varchar(200) DEFAULT NULL,
  `abt_profile` text DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `alt_title` varchar(200) NOT NULL,
  `ethencity` varchar(100) DEFAULT NULL,
  `sexuality` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `body` varchar(100) DEFAULT NULL,
  `dress_size` int(11) DEFAULT NULL,
  `bust_size` varchar(100) DEFAULT NULL,
  `drinking` varchar(100) DEFAULT NULL,
  `smoking` varchar(100) DEFAULT NULL,
  `whatsapp_num` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `height` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `origin` varchar(200) DEFAULT NULL,
  `availability` varchar(200) DEFAULT NULL,
  `language` varchar(200) NOT NULL,
  `service` varchar(100) DEFAULT NULL,
  `avbl_cat` varchar(200) DEFAULT NULL,
  `avbl_loc` varchar(200) DEFAULT NULL,
  `avbl_st` varchar(200) NOT NULL,
  `profile_type` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_post`
--

INSERT INTO `profile_post` (`id`, `title`, `imge`, `book_infmn`, `abt_profile`, `description`, `alt_title`, `ethencity`, `sexuality`, `gender`, `body`, `dress_size`, `bust_size`, `drinking`, `smoking`, `whatsapp_num`, `url`, `age`, `height`, `category`, `origin`, `availability`, `language`, `service`, `avbl_cat`, `avbl_loc`, `avbl_st`, `profile_type`, `created_at`, `updated_at`) VALUES
(142, 'Sanvi', 0x32323035343934396236656438333563366439353163333538396162326536362e6a70672c34343338393736393935316266353161346466616332346532373661636266312e6a70672c33343130636461663031336562656138353034303161396631376530623535662e6a70672c36336637306235643637333137323635646630623865663365386162316166622e6a70672c63306635363262613161343532633462323131313932346638613934306466392e6a70672c34646535373334316461613233613136356335373535326134646532343931362e6a70672c61663539363638313234333039353132633061656234643863343732656239352e6a7067, NULL, '', 'Bhubaneswar Escort Sanvi', 'Bhubaneswar Escorts Sanvi, Female Escorts Sanvi, Call Girl Sanvi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.5', '', 'West Bengal', '24/7', 'Bengali, Hindi, English', NULL, '56', '50', '14', 'VIP', '2019-09-14 12:20:03', '2020-10-16 14:22:55'),
(144, 'Tanya', 0x62636535623432353432666234633139346439643032366635366165343661632e6a70672c62383430323465653463373162353333616336643636303038313263653966612e6a70672c61656635363062313836623163363138373661653266623235323462316434392e6a70672c61366530663164373366306264666238353932623466386135626234353131332e6a70672c38626361326661353136393430656230663331613836393261336332626139612e6a7067, NULL, '', 'Female Escort Tanya', 'Bhubaneswar Escort Service, Escorts Service Bhubaneswar, Bhubaneswar Escort Girls, Bhubaneswar Female Escort, Bhubaneswar Female Escorts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.7', '', 'Kolkata', '24/7', 'Hindi, English', NULL, '57', '51', '12', 'NEW', '2019-09-14 13:44:43', '2020-10-16 14:25:07'),
(145, 'Alisa', 0x63363266316262373139396439393134333432386464646631396534326464382e6a70672c31373761383364313837613435343734393439303534623163613038646237652e6a70672c33643862616566663636353461666161653937656262326564656361396438652e6a70672c65663036323638633363643165633134636163646239373562313431653134362e6a70672c38623461333638316133373237306435633833366135323763633535386539372e6a70672c30613839333737663133326337616637343337343838343732313532636163612e6a70672c32626435336237366132333663666233323964313335303361643136393636632e6a70672c34356231346232323266666431313063306339353962653932636266613434312e6a7067, NULL, '', 'Bhubaneswar College Girl Alisa', 'Bhubaneswar Massage, Massage in Bhubaneswar, Body massage in Bhubaneswar, Female Massage in Bhubaneswar,  Bhubaneswar escorts agency, Call Girl in Bhubaneswar, Dating Girl Bhubaneswar, Bhubaneswar Fem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'Delhi', '24/7', 'Hindi, English, Marathi', NULL, '58', '52', '1', 'TOP', '2019-09-14 16:38:05', '2020-10-16 14:26:32'),
(146, 'Simran', 0x33626462393937666661633565396561316664346131386234646261663661392e6a70672c37663937636464653236316231376565363535306531333533643432346532312e6a70672c38663030626331623434636438643762316662626133386338366434313564362e6a70672c34626132396464376464383136373163616639303061323563383432373165622e6a7067, NULL, '', 'Bhubaneswar Models Escort Simran', 'Bhubaneswar Escorts Agency, Bhubaneswar Female Escorts , Vip Escorts in Bhubaneswar, Escorts Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.8', '', 'Bhubaneswar', '24/7', 'Hindi, English,Kannada', NULL, '59', '53', '4', 'NEW', '2019-09-14 16:49:18', '2020-10-16 14:27:21'),
(147, 'Kenny', 0x66396331656531356235653139346136316538623630353238333061353232642e6a70672c65613434653636323935353934366465666636623631663632343434316634632e6a70672c39626265323637356237633838336264373837643162663734663962653732612e6a70672c33313665613165303036623662656336313638626464306334333439323035332e6a70672c39626535633865333964323132333637643564323239313333666666353837622e6a7067, NULL, '', 'Bhubaneswar Escort Kenny', 'Bhubaneswar  Call Girl, Bhubaneswar Escort Girl, Chinese Model , Bhubaneswar Call Girls Number, Bhubaneswar Dating Girls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'China', '24/7', 'Chinese, English', NULL, '60', '55', '7', 'VIP', '2019-09-14 16:56:03', '2020-10-16 14:28:27'),
(148, 'Nitya', 0x32653564386262626637346532643532356565613464373663366332653663622e6a70672c64376638326234383135633366363533616561356639373135323338653862342e6a70672c35323834366539613039303933626239303535613032346262303566623566342e6a70672c34643262326662346235316232623935373664633732373961396639613735632e6a70672c34623761356534306161643566643833656239393636666663323363356165372e6a70672c34353938353431653837363834316465623261616565663236336566383464622e6a70672c66623264656132646335376365383937323131343238656563316262646231622e6a7067, NULL, '', 'Call Girls Bhubaneswar Nitya', 'Female Escort Bhubaneswar, Call Girl Bhubaneswar, Teenage Call Girl Bhubaneswar, Bhubaneswar Escorts Agency, Call Girls Bhubaneswar, Dating Service, models escorts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.8', '', 'Punjab', '24/7', 'Punjabi, Hindi, English', NULL, '101', '65', '6', 'TOP', '2019-09-14 17:16:35', '2020-10-16 14:29:43'),
(149, 'Pari', 0x65356635643134373231303063396365616162666437656230363065653135392e6a70672c66373232363461393630613538343666623436356233633833306131313734362e6a70672c38626463366161356230306434626432323533356233343334653638653264382e6a7067, NULL, '', 'Bhubaneswar Call Girl Pari', 'Bhubaneswar Call Girls Pari,  Bhubaneswar  Escorts Service, Escorts Service in koramangala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.7', '', 'Kolkata', '24/7', 'Hindi, English', NULL, '79', '64', '8', 'NEW', '2019-09-14 17:23:01', '2020-10-16 14:30:28'),
(150, 'Pihu', 0x63303664383332653437386463366531343937333836343631633435383531382e6a70672c62643235623833373364373961626464336434613937666634643338343065322e6a70672c31623732303139643263383637623635366561323330336662616233663966342e6a7067, NULL, '', 'Bhubaneswar Escort Girl Pihu', 'Bhubaneswar Call Girls, Bhubaneswar Escorts Service, Bhubaneswar Female Escorts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '5.6', '', 'Mizoram', '24/7', 'Tamil, English', NULL, '72', '63', '21', 'TOP', '2019-09-14 17:55:02', '2020-10-16 14:31:27'),
(151, 'Suman', 0x32633334353764643261653030326631643761393162643434363463306261322e6a70672c61303530386164343731396439323932343137633464343566653533653262652e6a70672c32383762633666326266623737333665343139623861653533656235373435612e6a70672c66303362623262343838353434366338643937343464323631633036626363392e6a70672c31356365303233383735313636643562333262653632643137663333353638352e6a70672c65663262393836613337623432626562633439373565313536373561323130622e6a7067, NULL, '', 'Bhubaneswar Escort Girl Suman', 'Bhubaneswar Escort, Bhubaneswar Call Girl, Bhubaneswar Escorts Agency, Sexy Indian Girl, Bhubaneswar Escorts, Escorts Bhubaneswar ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.4', '', 'Hyderabad', '24/7', 'Telugu, English', NULL, '69', '62', '1', 'TOP', '2019-09-14 18:21:36', '2020-10-16 14:32:22'),
(152, 'Payal', 0x37313930343135613430373932393537326334313137353936653766333232322e6a70672c62396536353761343363316138336433363435626537393034326463633630312e6a70672c38393235626465633536646335386237376333353731646465366236633464332e6a7067, NULL, '', 'Bhubaneswar Call Girl', 'Bhubaneswar Escort Girl, Bhubaneswar Call Girl, Escort in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'bhubaneswar', '24/7', 'Hindi, English', NULL, '70', '61', '4', 'VIP', '2019-09-14 18:24:08', '2020-10-16 14:33:07'),
(153, 'Kavya', 0x33326461333135366161653737386434636137623037316163613465336337662e6a70672c36383134666262353937323831393234353732656239363434633262633830332e6a70672c35303066303764373637623339353235326237633631653437323431643133642e6a70672c35343065643166396337623133643561643236613634343466343564663837632e6a70672c39353630386535383162393866336332353034396132626366636264616230362e6a7067, NULL, '', 'Female Escorts Girl Kavya', 'Bhubaneswar Escort, Bhubaneswar Call Girl, Bhubaneswar Escorts Agency, Sexy Indian Girl, Bhubaneswar Escorts, Escorts Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, '5.6', '', 'Kolkata', '24/7', 'Bengali, Hindi, English', NULL, '65', '60', '26', 'NEW', '2019-09-14 18:32:33', '2020-10-16 14:34:33'),
(154, 'Mahi', 0x61666234363763316234376636333733613564353138383934306636613361632e6a70672c36643665363430656230313766653633393464613338346162323564633463662e6a70672c33396334346538623665346536303635626437613438353631656561353763392e6a70672c39333936366464343037306330346463396232616365313437353337363733642e6a70672c32333963323036323361383164326364656565633162303334336336666562372e6a7067, NULL, '', 'HJ & Bj Expert Mahi', 'HJ & Bj Expert in Bhubaneswar, South Bhubaneswar Escort, South Bhubaneswar Call Girl, sexy indian girls, Indian escorts Bhubaneswar, Indian call girls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'Indore', '24/7', 'Hindi, English', NULL, '67', '59', '17', 'VIP', '2019-09-14 18:37:54', '2020-10-16 14:35:13'),
(155, 'Chandini', 0x65353736626435396363323631663430623364333735653862613134396163342e6a70672c64313663356363633833386564633465336537613735353236346530383531362e6a70672c33623635343263356663623261643638303731383830313761303231303032372e6a70672c31306437353661656661653038363164666337363935353666633934366232362e6a7067, NULL, '', 'Bhubaneswar Call Girl Chandini', 'Bhubaneswar Call Girl, Bhubaneswar Escort Girl, Bhubaneswar VIP Escort, 69 Expert Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'Rajkot', '24/7', 'English Hindi', NULL, '86,88', '58', '5', 'NEW', '2019-09-16 12:25:13', '2020-10-16 14:36:26'),
(156, 'Bhoomika', 0x38636362643133663465616133343832306530323438613766363666346364632e6a70672c37646163313732353930323566326635316663623762653465313735623837382e6a70672c63663363646562343161343637373461666664636239613837376565353662372e6a70672c66663038333032626539656637386539383833316533386536356362306638322e6a7067, NULL, '', 'Bhubaneswar Call Girl Bhoomika', 'Bhubaneswar  Escort, Bhubaneswar Female Escorts, Bhubaneswar VIP Call Girl, Dating Girl in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'bhubaneswar', '24/7', 'English Hindi', NULL, '72,80', '57', '10', 'VIP', '2019-09-16 12:28:31', '2020-10-16 14:37:19'),
(157, 'Deepali', 0x31356338623438366437383531356165383136346534363130643334303361372e6a70672c35323234306164626466616438333732396564653661656236646535393266622e6a70672c61316431346666396439323637653736353836653738356639333734376133312e6a7067, NULL, '', 'btm layout Call Girl', 'Models Escort Bhubaneswar, Bollywood Actress Escort, Female Escort in Bhubaneswar, Bhubaneswar Escort', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.8', '', 'Nagpur', '24/7', 'English Hindi', NULL, '65,73,88', '56', '23', 'VIP', '2019-09-16 12:31:17', '2020-10-16 14:38:53'),
(158, 'Garima', 0x37653464363266356237373263643962303139306530376163666338666333632e6a70672c64353738363538303235666261383665616164613634396666306332666137362e6a70672c35313739333235313732346266623564393565303765643566623039306634612e6a7067, NULL, '', 'Bhubaneswar Escort Girl', 'Bhubaneswar Escort, Bhubaneswar Escorts, Dating Girl in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '5.1', '', 'West Bengal', '24/7', 'English Hindi', NULL, '58', '55', '10', 'NEW', '2019-09-16 12:33:12', '2020-10-16 14:39:57'),
(159, 'Naina', 0x63343339303032326337303633656239303337316338653638626139303235392e6a70672c34376434343862363334333137373435346661623365313132303939363732612e6a70672c39656262643030393366363363373435323366366262616335303636643063642e6a7067, NULL, '', 'Young Escort Naina in Bhubaneswar', 'Young Indian Call Girl in Bhubaneswar, Bhubaneswar Female Escort, Women Seeking Men in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.8', '', 'Assam', '24/7', 'English Hindi', NULL, '70,77', '52', '20', 'NEW', '2019-09-16 12:58:39', '2020-10-16 14:40:30'),
(160, 'Meera', 0x62356230316239303738616638383737333338396164616161333738353835612e6a70672c38633430376633353362303865613736366565303266653463363066316631622e6a70672c32363234646235633233386563343034303430396531623337616335306336372e6a70672c65363865323861656563363238316465393031396162636630613062313562342e6a7067, NULL, '', 'Independent Call Girl in Bhubaneswar', 'Independent Call Girl in Bhubaneswar, Model Call Girl Bhubaneswar, Models Escorts in Bhubaneswar, Female Models Escorts in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.1', '', 'Punjab', '24/7', 'English Hindi', NULL, '56,57,64', '53', '14', 'TOP', '2019-09-16 13:03:02', '2020-10-16 14:41:10'),
(161, 'Siya', 0x37333835633530356236376331346363656132613035393133616136303133622e6a70672c38383532343532373663633236623730353537353632353839336231343866622e6a70672c64383033306530396439313061613264656335376365636135633565623339392e6a70672c66613563326366666338343663303136366533393861313530656339366237662e6a70672c65303532643534663435393663303462313562316462633963353730663036622e6a70672c30613839333566626335656438653234363038316138366536633633326130382e6a70672c34383734373365346635316635383965336331663038376437333061636338362e6a7067, NULL, '', 'Female Escort in Lower Parel', 'Bhubaneswar Escort Girl, Bhubaneswar Female Escorts, Bhubaneswar Escorts Service, Bhubaneswar Call Girls Number, Bhubaneswar Sexy Girls, Female Escorts in Bhubaneswar, Dating girl in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.8', '', 'bhubaneswar', '24/7', 'English Hindi', NULL, '65,69,70', '51', '15', 'TOP', '2019-09-16 13:56:56', '2020-10-16 14:41:54'),
(162, 'Manvi', 0x64393635356238383937666432386162353333333537306339396532663866632e6a70672c39656531316534653931633534326636333066646134353730643331363366392e6a70672c35376434383930623239323266376631616163323134613565343835303735632e6a70672c38656365386434613362316435623762616435623839333933373932323138332e6a70672c39373132313731663631616533623261643832326135383039653537386437342e6a7067, NULL, '', 'Bhubaneswar Call Girl', 'Independent Call Girl  Bhubaneswar,  Call Girl Bhubaneswar, VIP Escorts in Bhubaneswar, Female  Escorts  Bhubaneswar, female companion in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, '5.9', '', 'Dating', '24/7', 'English Hindi', NULL, '60', '56', '21', 'NEW', '2019-09-16 14:04:09', '2020-10-16 14:42:46'),
(163, 'Paakhi', 0x33376231346561623236613032373033326234656636386237336137336261652e6a70672c36343864373431646537373334366266643434633532313230363033613537612e6a70672c36376461613266646563643132376434613435313561623032306262303833352e6a70672c62386632613866636435646539363530336431623066386635636361363465342e6a70672c30363338383438666664623037643561623536323635643436353031636363622e6a7067, NULL, '', 'Bhubaneswar Pakhi', 'Bhubaneswar Escorts Paakhi, Bhubaneswar Call Girl Paakhi, Slim Escort in Bhubaneswar, Big Boobs Escort in Bhubaneswar, Female Escort Paakhi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '4.9', '', 'Nainital', '24/7', 'English Hindi', NULL, '65,70', '58', '8', 'TOP', '2019-09-16 14:17:03', '2020-10-16 14:43:36'),
(164, 'Ritika', 0x31333262653036623563343734393161366635663162643636343337313666382e6a70672c36323266636633663265366562333538633064646131323331373136356666352e6a70672c61363838333830396565363438373565313135313464363737643836356339302e6a70672c32663333626434343733363865623839653465386461353239373935616265372e6a70672c62393864636363366131303164663766623933633033383961613137666337362e6a70672c32386535636131373938636361636137616232616531623232663361336565302e6a70672c38363431396339633537353762313333343563613263636130633366333831362e6a7067, NULL, '', 'Bhubaneswar Escort Ritika', 'Independent Call Girl in Bhubaneswar, Model Call Girl Bhubaneswar, Models Escorts in Bhubaneswar, Female Models Escorts in Bhubaneswar, Strip Girl in Bhubaneswar, Party Girl Ritika, Call Girl Ritika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.9', '', 'Ranchi', '24/7', 'English Hindi', NULL, '56', '52', '26', 'TOP', '2019-09-16 14:20:07', '2020-10-16 14:44:26'),
(165, 'Tanuja', 0x39653034623766326666303838353762373537313262616634623230613133322e6a70672c63313932653264313336643432313966666561343462666534613335303239332e6a70672c31343733623336393836653234303637636465623061636663396232656238322e6a70672c31653035636535633733663661346564613038326464343061366433373537352e6a70672c35623638306566623036313534393337656633333965613163373531653335652e6a70672c39313364633636303662613439356439343038646636343561303030316135362e6a70672c62316664383763373736356462346463666265313434376637363866626663662e6a7067, NULL, '', 'Bhubaneswar Sexy Girl Tanuja', 'Bhubaneswar Sexy Girl, Indian Call Girl in Bhubaneswar, Busty Escort in Bhubaneswar, Big Boobs Escort, Call Girl , Independent Bhubaneswar Escorts, Escorts Service Bhubaneswar  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.1', '', 'Punjab', '24/7', 'English Hindi, Punjabi', NULL, '79,80', '59,61', '22', 'VIP', '2019-09-16 14:26:45', '2020-10-16 14:45:49'),
(166, 'Yamini', 0x32306263653666623261363432386364363038393163646139306534633538632e6a70672c64653862346633333139643836386535306266396635633630363461663734302e6a70672c63366231646565346663306330306130643363643366623165623761396462392e6a70672c62383337303437353364303065326435613336303765396335373066653164342e6a70672c63336363316434336530643865623637313363373330666438633464346238622e6a70672c32613538636562356263643031383238323561323038343239343065343034382e6a7067, NULL, '', 'Female Escorts Yamini', 'Bhubaneswar Escorts Service, Bhubaneswar Escorts Agency, Bhubaneswar Call Girls Number, Bhubaneswar Escorts Classified, Dating in Bhubaneswar , Female Companion Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '5.8', '', 'Bhopal', '24/7', 'English Hindi,Urdu', NULL, '56,64,70,72', '53,65', '11', 'VIP', '2019-09-16 15:49:03', '2020-10-16 14:46:28'),
(167, 'Riddhi', 0x32643339376263356334326534353533633031383130346365373464393430332e6a70672c38353638356231633130316533343166333364666538333732333132393433332e6a70672c62666366636531383938616462633262393663623562386135303066396430392e6a70672c39356532643434663830393435643230633064616437313762373332386462382e6a70672c66396339613165623263613536303139353937303165373138643763613638392e6a7067, NULL, '', 'Call Girls in Bhubaneswar', 'Bhubaneswar Call Girl, Independent Call Girl, Bhubaneswar independent Escort, Call Girl Church gate, Kalyan Escorts, Bhubaneswar Dating Girl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.1', '', 'Shimla', '24/7', 'English Hindi', NULL, '62,68,69', '60,62', '5', 'NEW', '2019-09-16 15:51:34', '2020-10-16 14:47:20'),
(168, 'Juhi', 0x31313761313261353865323965353637643762313964396235316535366463632e6a70672c31306464616230376635636263383164336135663066346263373133663430632e6a70672c34356463313361643162626138363666616637386262313530306663653432622e6a70672c62383734393638313531346462613232626436626365313936626534343736662e6a70672c30316236316436396431633731653664636539616163363031356162336231382e6a70672c32346331376432353166643663393436393338653463316435613334383665352e6a70672c35616432323533366361646530386133373630373861333639373630316437362e6a7067, NULL, '', 'Medical College Student', 'Independent Call Girl in Bhubaneswar, Model Call Girl Bhubaneswar, Models Escorts in Bhubaneswar, Female Models Escorts in Bhubaneswar, Medical college call girl, College girls escorts, female call gi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '4.9', '', 'Chaibasa', '24/7', 'English Hindi,Urdu', NULL, '86,88', '53,63', '11', 'NEW', '2019-09-16 15:57:45', '2020-10-16 14:48:19'),
(169, 'Gayatri', 0x62636266633833396630343437373163306437313566633065366131323331612e6a70672c36313537626530653332656433646133653864653238336131386238363134652e6a70672c38323033666461366133356230353039306538626634393662363139636635322e6a70672c66336263303539343962366638643837336337623062356531376466356232372e6a70672c64393135646434343961623632323739313361366534363731306366626232632e6a70672c35393139303036313331363931316133653463653434656636386438386533332e6a70672c37636565383336623036346536373636336334353335633665393836613937382e6a70672c33383039323837633765306361346335303164393366663265643431336338662e6a7067, NULL, '<p><br />\r\n&nbsp;</p>\r\n', 'Dating Girl', 'Independent Call Girl in Bhubaneswar, Model Call Girl Bhubaneswar, Models Escorts in Bhubaneswar, Female Models Escorts in Bhubaneswar, Strip Girl in Bhubaneswar, Party Girl , Call Girl , Women Seekin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.8', '', 'bhubaneswar', '24/7', 'English Hindi', NULL, '62,76,78,79', '50,59', '15', 'TOP', '2019-09-16 16:01:48', '2020-10-16 14:49:02'),
(170, 'Aarushi', 0x3030656134386336303237623337316632306465626536336463656435313431332e6a70672c303065613438633630323762333731663230646562653633646365643531343131312e6a70672c303065613438633630323762333731663230646562653633646365643531343132312e6a70672c3061383933373766313332633761663734333734383834373231353263616361312e6a7067, NULL, '', 'Juhu Girl Aarushi', 'Models Escort Bhubaneswar, Bollywood Actress Escort, Female Escort in Bhubaneswar, Bhubaneswar Escort, Call Girl Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5.1', '', 'bhubaneswar', '24/7', 'English Hindi', NULL, '72,73,75', '52,65', '10', 'TOP', '2019-09-16 16:03:48', '2020-10-16 17:37:30'),
(171, 'Aashi', 0x38346563323038366161623863343936616664386134323136653230623861612e6a70672c30653265383230666632313431303439373935623038646535366362643763302e6a70672c63303262353365633666316233653230306366626565653162323836383164342e6a7067, NULL, '', 'Kharghar Escorts ', 'call girls near me, escorts near me, escort near me', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.4', '', 'Manali', '24/7', 'English, Hindi', NULL, '64,67', '52,57', '24', 'VIP', '2019-09-23 14:10:46', '2020-10-16 14:50:34'),
(173, 'Barkha', 0x33623832633430363861333238353032366665313139653762333166376538662e6a70672c31336534306333643333616439316161613238623466383666306334303732302e6a70672c62376134626438366131623966383435356130366238343266326139373133332e6a7067, NULL, '', 'Demanded Escort', 'Girls for sex in Bhubaneswar, Call Girl Come, call girl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.0', '', 'Punjab', '24/7', 'English, Hindi', NULL, '56,57,59,65', '55,61', '22', 'TOP', '2019-09-23 15:08:44', '2020-10-16 14:51:19'),
(174, 'Gargi', 0x39323133643237326363393639393533306433393237393035326337623765362e6a70672c61633365656337636535393865636161643232653039363465643064643139342e6a70672c65656531306566613737626464623062343738653262353534386666663364302e6a7067, NULL, '', 'Near Me Escorts', 'whatsapp sex chat, girls Bhubaneswar, Bhubaneswar Escorts Service,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '5\'4', '', 'Vizag', '24/7', 'English, Hindi', NULL, '88,90,95,96,97,99', '56,60', '16', 'VIP', '2019-09-23 15:22:38', '2020-10-16 14:52:40'),
(175, 'Harini', 0x66303461313763363466613766363466313133313865353866646136376233632e6a70672c62326134326264386261373262363664643032313139623835653461383534322e6a70672c39313834643639663131323365336566643638383333313162303233663563332e6a7067, NULL, '', 'Female Escorts in Bhubaneswar', 'actress escort,Indian escort service, female escort', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.6', '', 'Uttar Pradesh', '24/7', 'English, Hindi', NULL, '88,89,91,94,95,96,97,99,100', '57,62', '14', 'NEW', '2019-09-23 15:33:12', '2020-10-16 14:52:29'),
(176, 'Iniya', 0x37663931613364626533636332326532393861613437373862333838613338312e6a70672c61326665343530653139326364383232643133316331393630326434303938622e6a70672c36663130396530363363653637633931633135373566636131316336333430392e6a70672c37353664376336316331316434623762663433346566353938366665393762302e6a7067, NULL, '', 'Escort Girls Bhubaneswar', 'girls in Bhubaneswar ,call girls hot, Indian escort, sex chat whatsapp girl Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '5.1', '', 'Nagpur', '24/7', 'English, Hindi', NULL, '61,70,75,76,80,82,83,87,89', '56,61', '6', 'TOP', '2019-09-23 15:43:50', '2020-10-16 14:53:40'),
(177, 'Nalini', 0x32613362396638626136376639343563616435353130643665336632663466632e6a70672c31383139613938613439376234346438623865346364323561303630653462642e6a70672c37346537663639613634323432646437306539613930326565313564663333382e6a70672c37656462616536363664373866646464643264613065396635383331633165632e6a70672c66396332326432333832333234336336616330386261383463363962653231632e6a7067, NULL, '', 'Hot Call Girl', 'Bhubaneswar escort girls, hot call girl,  escort girl Bhubaneswar, ????? ????????, VIP call girl ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, '5.5', '', 'Chandigarh', '24/7', 'English, Hindi', NULL, '59,72,73,74,75,76,77,78', '53,57', '10', 'VIP', '2019-09-23 15:50:23', '2020-10-16 14:54:23'),
(178, 'Miyal', 0x30643235343636353938323761643766303630346131623635333861623534352e6a70672c36316437323366333532663032623335393233366330663333353064336266622e6a70672c34343632383033613861333839383065373831383436616465383163326461652e6a70672c61366466336562366532613462356438306132316531336237343037383534322e6a70672c61363332663463333338666461643938313964626335643830383236333637332e6a7067, NULL, '', 'Russian Escorts in Bhubaneswar', 'Russian Escort in Bhubaneswar, Russian  Escorts Bhubaneswar, Russian  Call Girls, Russian Female Escorts Bhubaneswar, Bhubaneswar Russian Escorts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.2', '', 'Russia', '24/7', 'English, Hindi', NULL, '58,71,73,81,92,94,97,99,100', '56,60,62', '18', 'NEW', '2019-09-23 16:02:29', '2020-10-16 14:55:27'),
(179, 'Omisha', 0x36353065363565333035363166336230663238313662343163623532303332642e6a70672c31373839346330383334646531333933363134303861346236653034633563342e6a70672c36336631613361633261366438393962383839656231386261636337373832642e6a7067, NULL, '', 'Models Escorts in Bhubaneswar', 'Bhubaneswar escort, call girl actress Bhubaneswar, escort girl in Bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '5.6', '', 'Tamil Nadu', '24/7', 'English, Hindi, Tamil', NULL, '68,69,70,74,76,82,83,84,90', '57,61', '5', 'TOP', '2019-09-23 16:07:17', '2020-10-16 14:56:02'),
(180, 'Tejal', 0x37313866653061653264353565636232383761336665633838393132646334382e6a70672c37353263316438383831646139376461393832633363393562653566666633662e6a70672c61353166656534663634356530356433663062396662316161666262323837642e6a7067, NULL, '', 'Bhubaneswar Call Girl', 'sexy escorts in Bhubaneswar, Bhubaneswar Female Companion, Dating girls in Bhubaneswar,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, '4.9', '', 'Haridwar', '24/7', 'English, Hindi', NULL, '60,78,79,85,86,87,88,89,90', '53,63', '15', 'VIP', '2019-09-23 16:17:01', '2020-10-16 14:57:21'),
(181, 'Urvi', 0x38663666383864633933363837373636306261623262386262313231356463332e6a70672c37613062633265356263636262656166383063306361396134323530633966342e6a70672c32643534326366313463353231396337613761643766383733343231326630662e6a70672c64353435626237376138623133616563306430373737333434306432643136662e6a7067, NULL, '', 'independent call girls Bhubaneswar', 'independent call girl in Bhubaneswar, independent call girls Bhubaneswar, call girl Bhabhi, independent Bhubaneswar call girls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5\'5', '', 'Bhubaneswar', '24/7', 'English, Hindi', NULL, '72,73,74,76,78,79,93', '51,64', '12', 'NEW', '2019-09-23 16:36:58', '2020-10-16 14:58:09'),
(182, 'Vaani', 0x64313136373034663838303833353064386134616431613037373034303130612e6a70672c36303966326435623164323863666665323163333432303561656461633531342e6a70672c34313235663739383965343564646132383139306137366338383863393962652e6a70672c66613564376532666435313266383138333136376262653836663561356430322e6a7067, NULL, '', 'call girl service in Bhubaneswar', 'Bhubaneswar college sexy, real call girl Bhubaneswar, college call girl, Bhubaneswar college call girls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.1', '', 'Manali', '24/7', 'English, Hindi', NULL, '56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100', '55,62', '6', 'TOP', '2019-09-23 16:40:04', '2020-10-16 14:59:06'),
(183, 'Kalyani', 0x32353533643033623163643033303539653530633161383463363638363733342e6a70672c39383461353738386661316361333536656363333062333931363966306637652e6a70672c61366130353065363165326333363866336237616662613462396438643366392e6a70672c63393836616231326661323434626634346636393937366166346132396433312e6a70672c36643135316463306534376630363837633033363937323362636431363639612e6a70672c31383263653934306261666364613935636532376431336538346139623838302e6a7067, NULL, '<p>Kalyani</p>\r\n', 'escort center Bhubaneswar', 'escort center in Bhubaneswar, bhabhi call girls, Tamil sexy video Bhubaneswar , Bhubaneswar Call Girl Bhubaneswar, Bhubaneswar Escorts in bhubaneswar, Sexy Tamil Video', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5.3', '', 'Jaipur', '24/7', 'English, Hindi', NULL, '57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100', NULL, '25', 'VIP', '2019-09-23 16:54:14', '2020-10-16 15:00:07'),
(184, 'Bandita', 0x66366433633338656439363463393933646339643938396231383465326663372e6a70672c63326433326335616565316130396364383336393262303239303237623631342e6a70672c64626235616332626636623063343736346564396561623463356230343639662e6a7067, NULL, '<p>Bandita for hot and erotic session.</p>\r\n', 'North Indian Escort', 'bhubaneswar college sexy, real call girl bhubaneswar, bhubaneswar college call girls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5\'5', '', 'Noida', '24/7', 'English, Hindi', NULL, '68,69,70,71,72,73,74,75,82,83', '38,39,40,41,42,43,44,45,46,47', '24', 'NEW', '2019-09-23 16:58:05', '2020-07-08 19:04:43'),
(185, 'Amulya', 0x30313430613364373433386335663139613935303336366333393932316362312e6a70672c37363761646462366662616530316366316234353664326532306436333463392e6a70672c37353138313630303531393433306232356265613463626332353139643466352e6a70672c65306166373264363766623135353438643734666463353363373031633663622e6a7067, NULL, '<p>bhubaneswar Escorts Service Available 24/7 at your service</p>\r\n', 'Punjabi Escorts bhubaneswar', 'Punjabi Escorts, Punjabi Call Girl, Punjabi Dating Girl, Panvel Escorts ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, '5\'7', '', 'Raipur', '24/7', 'English, Hindi', NULL, '61,62,63,64,65,67,68,69', '35', '17', 'NEW', '2019-09-23 17:05:24', '2020-07-08 19:12:08'),
(186, 'Joyel', 0x66363034323564663238383633326235623831623961313832343336643364652e6a70672c63393035616430306637656634393630396335653934393564633131326537622e6a70672c36363931386139316364313064366162313033393239303834306163613766632e6a70672c64316465643265613738643530643939333431396230333732666439323236642e6a7067, NULL, '<p>Myself Joyel from Delhi</p>\r\n', 'Christian Call Girl in bhubaneswar', 'Christian Call Girl in bhubaneswar, bhubaneswar Christian Girl Escorts, Christian Escorts in bhubaneswar, Dating girl in bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, '4.9', '', 'Delhi', '24/7', 'English, Hindi', NULL, '66,67,70,72,73,82,85', '43', '9', 'TOP', '2019-09-23 17:24:58', NULL),
(187, 'Parina', 0x65306437373463323265633035636339313630333764373838343937633632612e6a70672c39393130636132353065663931356136343830623539666632336565643165342e6a70672c35366566663031633964323932653338306161646437343164623234306263322e6a70672c66626162643763643466346637306436643365626336653338326666393165662e6a7067, NULL, '<p>Parina A Bengali It Girl in bhubaneswar</p>\r\n', 'IT Call Girl in bhubaneswar', 'IT Call Girl in bhubaneswar, Educated Call Girls, bhubaneswar Escorts Girl, Models Escort in bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, '5.3', '', 'Kolkata', '24/7', 'English, Hindi', NULL, '94,95,96,97,98,99,100', '39', '15', 'VIP', '2019-09-23 17:32:00', NULL),
(188, 'Saira', 0x35313134646231616363646339613262613463643631393864653262346466662e6a70672c66343664623038623065666665666537653263306364353436336363353933372e6a70672c32646565316166363361343066666630613737323463653566663531363565642e6a70672c63346430356339383733333037633065643630313435306364303838616132362e6a70672c38646330303532356337613266663836343232326433356135626264613338372e6a70672c31363238666662623335343864346632333833653538333138646131386532632e6a7067, NULL, '<p>Myself Saira a hot and young girl looking for some erotic fun.</p>\r\n', 'Muslim Girl in bhubaneswar', 'bhubaneswar college sexy, real call girl bhubaneswar, college call girl,bhubaneswar college call girls, bhubaneswar Escorts Agency, Escorts Service in Andheri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, '5.0', '', 'Nellore', '24/7', 'English, Hindi', NULL, '75,76,80,82,87,88,89,93,94,95,96,97,99,100', '35', '26', 'TOP', '2019-09-23 17:34:17', NULL),
(189, 'Maira', 0x31376661363839633363393963393265396464363339376166306566313836392e6a70672c63306338643832366131353331343633363463626334616239646661353962352e6a70672c37326362626165346362323761306433333434363265633136616533303838312e6a70672c65616439646334363736383833313664303663363834303063313636316161392e6a70672c31303932613037363366346563613366653838333935333130666266333465612e6a7067, NULL, '<p>Independent Teen Virgin Call Girl in bhubaneswar</p>\r\n', 'Teenage Escort in bhubaneswar', 'bhubaneswar escort girls, hot call girl,  escort girl bhubaneswar, ????? ????????, VIP call girl , Teen Sexy Girl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, '5.1', '', 'Bhubaneswar', '24/7', 'English, Hindi', NULL, '61,63,70,75,90,97', '39', '4', 'VIP', '2019-09-23 17:36:38', NULL),
(190, 'Gouri', 0x39656137366366323736623531303132383030323632623862666133313764322e6a70672c66653037393230383133326461666666303961633030623662666233396162302e6a70672c35616231323834353036623236326135613435636233666666376461616235392e6a70672c36323636363336383261343034643138396332356239376337636334373562612e6a70672c63343361353236326166613564613033373533633839333334313333356363632e6a70672c36323866303934346462366633303466373631613362653337326566666239332e6a70672c30623661393766653137343362633937326334336435316265653763366534612e6a70672c39623430393830386561663164343363336539316462643133643534323662622e6a7067, NULL, '<p>Gouri for Sexy Tour Guide in bhubaneswar</p>\r\n', 'Modern Open Minded Call Girl', 'Modern Open Minded Call Girl, Open Minded Escorts, Dating 4 fun in bhubaneswar, bhubaneswar Call Girls Number, bhubaneswar Escorts Service, Escorts in bhubaneswar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '4.9', '', 'Mangalore', '24/7', 'English, Hindi', NULL, '56,69,70', '47', '10', 'NEW', '2019-09-23 17:39:48', '2020-01-29 14:38:50'),
(191, 'Polina', 0x32653133623738666237323638383261333062653138363537306231393931642e6a70672c31333437356361383763613837626533383836306236313631346665623965392e6a70672c31616262613165346362303233343935383664356663353063666538376530642e6a70672c65643464353739666461356362646630643436303135356335353833303038312e6a70672c62393731623639643931653034393032363737373366636331653739653665612e6a70672c39623832323234643739636563616138376132376265613238343765313939392e6a70672c39386236386235393761363733626531663035376138663531303064353430372e6a7067, NULL, '<p>Bandra Escorts Service</p>\r\n\r\n<p>Call Girl Number</p>\r\n\r\n<p>Call Girl Phone number</p>\r\n\r\n<p>Sexy Call Girl</p>\r\n', 'Sexy Call Girl', 'call girl,girls whatsapp numbers,bhubaneswar sex,call girl number,call girl sex,call girl no,call girlfriend number', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '5.1', '', 'Russia', 'Bandra', 'English, Russian', NULL, '56,58,63,70,76', '36,45,46,47', '21', 'NEW', '2019-11-08 13:41:31', '2019-11-08 14:11:36'),
(193, 'aarti', 0x312e6a70672c322e6a70672c332e6a70672c342e6a70672c352e6a70672c362e6a7067, NULL, 'dddfffffffffffffff', 'i am arti', 'girl1,girl2,girl3,girl4,girl5,girl6', 'arab', 'straight', 'female', 'slim', 8, '36D', 'ff', 'ff', '9876543210', 'http://www.isabasu.com/', 34, '55', '', 'cctttttttttttttttttt', 'ddfrrrrrrrrrrrrrrr', 'english,hindi,marathi', '2,9,14,15', '57,60', '50,52', '16', 'VIP', '2021-04-27 19:45:25', '2021-04-29 11:42:37'),
(194, 'test', 0x62616e67616c6f72652d6573636f7274732d61646974692e6a70672c62616e67616c6f72652d6573636f7274732d6164697469322e6a70672c62616e67616c6f72652d6573636f7274732d6164697469332e6a70672c62616e67616c6f72652d6573636f7274732d6164697469342e6a7067, NULL, 'this profile is ', 'testing value', 'first img, secend img, third img, fourth img', 'arab', 'straight', 'female', 'slim', 8, '36D', 'ff', 'ff', '9876543210', 'https://www.seventh-heaven.com/', 20, '57', '', 'cc', 'ddf', 'english,hindi,marathi', '2', '92', '52', '9', 'TOP', '2021-04-27 20:11:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_type`
--

CREATE TABLE `profile_type` (
  `id` int(11) NOT NULL,
  `pro_type` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_type`
--

INSERT INTO `profile_type` (`id`, `pro_type`, `created_at`, `updated_at`) VALUES
(1, 'VIP', '2019-09-09 16:35:25', NULL),
(2, 'NEW', '2019-09-09 16:35:32', NULL),
(3, 'TOP', '2019-09-09 16:35:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `reply_review_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `content` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `post_id`, `reply_review_id`, `name`, `email`, `content`, `rating`, `created_at`) VALUES
(5, 1, NULL, 'Hashish Goyal ', 'ashis@gmail.com', 'Hello Nandini How are you? I loved your company.', 3, NULL),
(4, 1, NULL, 'Mahesh Kumar', 'maheshkumarblr@gmail.com', 'I spend my time with her in 5 star hotel which was awesome.', 4, NULL),
(3, 12, NULL, 'sanjay', 'mysoregirls001@gmail.com', 'She give fabulous service', 5, NULL),
(6, 2, NULL, 'Deepak Kumar', 'deepakkumarker@gmail.com', 'Nandini is a very nice and attractive girl . I loved her figure so much.', 4, NULL),
(7, 3, NULL, 'Mohit Aggarwal', 'mohitjsr07@gmail.com', 'Tanushree can I have your Moile number for personal meeting and companion.', 4, NULL),
(8, 17, NULL, 'Zhahid Hussain', 'mujhaidbk27@gmail.com', 'Hello Call girl roma are you from Bhubaneswar or from other place. Roma you were very nice last night.', 3, NULL),
(9, 16, NULL, 'Hemant Kumat', 'hemantnagk5@gmail.com', 'Dassy can you go outstation with me for escort service.', 4, NULL),
(10, 3, NULL, 'Kumar Vinod ', 'vinok27@gmail.com', 'Tanushree was very nice with her bihaviour I loved it ', 4, NULL),
(11, 10, NULL, 'Gautam rathor', 'grbangalo@gmail.bom', 'Russian escorts girl are very aggressive and horny I think we need more stamina to satisfy ðŸ˜¼ðŸ˜¼ðŸ˜¼ðŸ˜»ðŸ˜»ðŸ‘¹ðŸ‘¹', 3, NULL),
(12, 9, NULL, 'Sumesh', 'sum@d.m', 'Sexy Sneha how are you I need you yaar u are so sexy.', 4, NULL),
(13, 15, NULL, 'Sunil Kumar', 'sun@h.com', 'Sushmita was very nice to me. She is very sexy and attractive I loved her body language.', 3, NULL),
(16, 11, NULL, 'Jaffar', 'jaffar@rediffmail.com', 'Had an Awesome time, will visit again', 5, NULL),
(18, 6, NULL, 'Sanjay', 'nikitabansalescorts@gmail.com', 'Enjoy a lot with her', 5, NULL),
(19, 39, NULL, 'Rohan Kumar', 'r@s.m', 'Somi please be ready for outcall service tomorrow morning 10 to 2pm. I will call you.', 4, NULL),
(20, 27, NULL, 'Hemanta', 'r@s.me', 'If you love skinny girls with small boobs then #jessi is absolutely fine to go with. ', 3, NULL),
(21, 40, NULL, 'john', 'john@gmail.com', 'Tina is nice and brilliant girl.I loved nice', 5, NULL),
(22, 40, NULL, 'Ramesh Kumar', 'ramesh.73@gmail.com', 'she was very nice and dressing sense was also good.I enjoyed a lot and fullfill my dreams .I enjoyed and lot more fun', 5, NULL),
(41, 42, NULL, 'Raj', 'raj@yahoo.com', 'I was a virgin before, now i am a confident man , Thank you Nisha', 5, NULL),
(40, 43, NULL, 'Harish', 'harish@rediff.com', 'Jhilli is an amazing Escort, She knows alot about setting the mood. Book her for a good experience.', 4, NULL),
(39, 44, NULL, 'Sajid', 'sajid@gmail.com', 'I had an incredible time with Elina. Will book her again', 4, NULL),
(38, 45, NULL, 'Deepak', 'deepak@gmail.com', 'Pari was literally like an angel. Her body was smooth and i had the best time of my life.', 4, NULL),
(42, 54, NULL, 'Biswas Kumar', 's@g.v', 'Sabhia a Muslim girl was very hot and sexy. I will never forget the moment with her.', 4, NULL),
(43, 55, NULL, 'Joy David', 's@k.v', 'I have never tasted any Tamil girl in my life. And believe me Sindhu, who was dressed like an actress made me feel awesome . Now I too want a tamil girl as a life partner.', 5, NULL),
(44, 47, NULL, 'Devadi Franklin', 'dev@g.cl', 'Cristie, a cristian girl from South Bhubaneswar, was very humble and sweet  which made my feelings absolutely stunning from head to toe.', 4, NULL),
(45, 55, NULL, 'Azhar', 'azhar@h.com', 'Intelligent and  delight to spend time with Sindhu. She was all smiles, had a good time', 3, NULL),
(46, 55, NULL, 'Khan', 'akaka@kaka.co', 'Absolutely fantastic girl will definatelly see her again', 4, NULL),
(47, 50, NULL, 'Mahesh', 'arun@gmail.com', 'Myra very outgoing, saucy, pretty, amazing girl very genuine and hot !!!! Love you', 4, NULL),
(48, 50, NULL, 'Alok', 'arun@gmail.com', 'Myra is like a rabbit indeed , perfect!!! Exactly what I needed a great girl made all my dreams come true. Full of beans!!!', 4, NULL),
(49, 50, NULL, 'Sarat', 'sun@h.com', 'She was perfect and we did much fun with massive booty she stole my heart.', 3, NULL),
(50, 49, NULL, 'Kiran Kumar', 'kiran@g.co', 'I love North Indian girl and so the girl name Mukti with  sexy figure and sexy legs was amazing  very genuine and hot !!!! Love you Darling.', 4, NULL),
(51, 49, NULL, 'Aditya', 'Aditya@d.l', 'Mukti, Pretty face OMG that sexy boobies is amazing if you like that she is omg omg omg I had so much fun .', 4, NULL),
(67, 60, NULL, 'Sanjay', 'hotkiran.com@gmail.com', 'Nice girl, I enjoy each and every moment with her.', 4, '2019-07-20 13:58:22'),
(68, 80, NULL, 'Sultan', 'bookishabasu@gmail.com', 'Nice girl with sexy assets', 5, '2019-07-20 16:01:03'),
(69, 73, NULL, 'Alam', 'selectyourgirls.net@gmail.com', 'Wonderful beauty enjoyed her whole night', 4, '2019-07-20 16:02:49'),
(70, 89, NULL, 'Amid', '', 'Swati was so Berry nice good servers full coprative ', 4, '2019-07-20 19:41:45'),
(71, 88, NULL, 'Mack', '', 'Tanushree was amazing service I like ', 4, '2019-07-20 19:43:42'),
(426, 188, 187, 'Sanjay', '', 'Kese ', NULL, '2020-03-05 08:09:01'),
(73, 86, NULL, 'Arun', '', 'Suhani by God brilliant services', 5, '2019-07-20 19:50:33'),
(74, 85, NULL, 'Warun', '', 'Sonia was expert VJ  i like it', 5, '2019-07-20 19:52:43'),
(75, 84, NULL, 'Nick', '', 'Very good amazing service', 5, '2019-07-20 19:53:55'),
(401, 146, NULL, 'Sunil', '', 'Hello Miss', 5, '2019-12-22 11:31:13'),
(77, 64, NULL, 'Dev', '', 'Chetna was very good excellent girl', 3, '2019-07-20 20:41:08'),
(78, 75, NULL, 'Mr Rajiv rio', '', 'Dipika is very good girl service related full coprative .. ', 4, '2019-07-20 20:41:41'),
(80, 79, NULL, 'Abhishek Mishra ', '', 'Nidhi  is nice girl .. sarvice related as girlfriend experience...', 5, '2019-07-20 20:44:37'),
(81, 72, NULL, 'Mr patal ', '', 'Jimmie is excellent girl . She is full comrative . She has good sance.. and to give sarvice .. satisfaction all me .. ', 5, '2019-07-20 20:48:18'),
(82, 62, NULL, 'Agerwal', '', 'Good nice looking beautiful good service', 3, '2019-07-20 21:06:50'),
(83, 85, NULL, 'Sumit', '', 'Full hot sex girl', 5, '2019-07-20 21:08:28'),
(84, 87, NULL, 'Rahul', '', 'Hot nice full enjoy', 4, '2019-07-20 21:10:49'),
(85, 60, NULL, 'Sem', '', 'Alia was very sexy I like it this girl', 4, '2019-07-21 00:30:04'),
(86, 82, NULL, 'Mack ', '', 'Poonam is very nice girl full cooperative', 5, '2019-07-21 00:30:52'),
(88, 73, NULL, 'Raj', '', 'Lisa she take care  for me 24 hours I like it this service', 4, '2019-07-21 00:33:36'),
(89, 83, NULL, 'Dev', '', 'Miss rusti awesome service', 4, '2019-07-21 00:34:15'),
(90, 79, NULL, 'Tukaram', '', 'Very sexy girls I like it', 5, '2019-07-21 00:35:03'),
(91, 81, NULL, 'Yuvi', '', 'Priya she was awesome figure and beautiful I like it', 4, '2019-07-21 00:36:03'),
(92, 60, NULL, 'Joan', '', 'Alia Aziz very sexy girl and full cooperative', 3, '2019-07-21 15:51:21'),
(93, 89, NULL, 'Jemy', '', 'Swathi was very sexy e entertainment I like it', 4, '2019-07-21 15:52:05'),
(94, 88, NULL, 'Abhishek ', '', 'Tanusri  awesome service', 3, '2019-07-21 15:53:05'),
(95, 85, NULL, 'Kunal', '', 'Sonia I like her boobs like it amazing', 4, '2019-07-21 15:53:50'),
(96, 81, NULL, 'Mr Ahmed', '', 'Priya I like it so f****** hard she is very good', 4, '2019-07-21 15:54:42'),
(97, 79, NULL, 'Nisha Malhotra', '', 'Nidhi sexy girls', 5, '2019-07-21 15:55:53'),
(98, 82, NULL, 'Arpan Thakur', '', 'Poonam mind blowing service oh ho', 4, '2019-07-21 15:57:05'),
(99, 83, NULL, 'Mr Saxena', '', 'Miss Srishti is good girl full cooperative', 4, '2019-07-21 15:58:02'),
(100, 74, NULL, 'Mr Dheeraj', '', 'Mallika she is very good dance', 5, '2019-07-21 15:59:19'),
(101, 75, NULL, 'Mr Khalid', '', 'Deepika was amazing figure', 5, '2019-07-21 16:00:13'),
(407, 191, 380, 'Boby', '', 'Hi', NULL, '2020-01-01 10:04:51'),
(103, 60, NULL, 'mr kartik ', '', 'alia is very beautiful girl.  and she is  full cooperative.. ', 4, '2019-07-21 16:04:17'),
(104, 74, NULL, 'mr jokam ', '', 'miss malika is good girl and full cooperative..\r\nand company is very heard..', 4, '2019-07-21 16:06:52'),
(105, 88, NULL, 'Mr harvik', '', 'I love Tanushri behaviour and her talk', 4, '2019-07-21 16:12:28'),
(106, 86, NULL, 'Mr .Chetan Thakur', '', 'I love her big boobs and beautiful face', 4, '2019-07-21 16:23:06'),
(107, 85, NULL, 'Sumit', '', 'what a powerful energyfull service ...I like soniya', 3, '2019-07-21 16:26:54'),
(108, 84, NULL, 'Amarkumar', 'Amarkumar8146177@gmail.com', 'I love you too girl \r\n\r\n\r\n\r\n\r\n', 1, '2019-07-23 23:14:51'),
(118, 159, NULL, 'Kamlesh', '', 'What a sexy figure baby. I loved that! How to get bhubaneswar escort service with you...', 5, '2019-09-19 11:32:29'),
(119, 163, NULL, 'Prem Kr', '', 'Woow you know driving also. Lets go for long drive. My paakhi darling working in escorts service come to me I will give you a feeling of real entertainment.', 4, '2019-09-19 11:36:18'),
(406, 142, 133, 'raja', '', 'nice', NULL, '2019-12-31 12:49:08'),
(405, 142, 133, 'raja', '', 'nice', NULL, '2019-12-31 12:49:06'),
(404, 142, 133, 'raja', '', 'nice', NULL, '2019-12-31 12:49:03'),
(403, 142, 133, 'RAvi', '', 'good', NULL, '2019-12-31 12:48:47'),
(402, 156, 195, 'Ravi', '', 'Right', NULL, '2019-12-31 12:27:56'),
(125, 162, NULL, 'Anuj', '', 'She is very nice girl full entertainment', 5, '2019-09-20 14:31:12'),
(126, 170, NULL, 'Joan', '', 'Excellent service good company thank you', 5, '2019-09-20 15:58:32'),
(127, 145, NULL, 'Asish', '', 'Alisha was very sexy girl', 4, '2019-09-20 15:59:39'),
(128, 157, NULL, 'Mr bami ', '', 'Good looking sixty girl and full coprative', 5, '2019-09-20 16:00:47'),
(129, 156, NULL, 'Shiva', '', 'Bhumika mind blowing service', 3, '2019-09-20 16:01:03'),
(130, 148, NULL, 'Mr Asutosh', '', 'She is very beautiful and girlfriend experience \r\nNice girl\r\n', 5, '2019-09-20 16:02:03'),
(131, 155, NULL, 'Rahul', '', 'I can\'t forget this girls', 5, '2019-09-20 16:02:25'),
(132, 157, NULL, 'Mr Abdullah', '', 'Deepali was nice figure', 3, '2019-09-20 16:03:54'),
(133, 142, NULL, 'Mr pud', '', 'She is very coprative girl .\r\nAnd good looking ', 5, '2019-09-20 16:03:59'),
(346, 181, 283, 'Kabir', '', 'You people are fraud', NULL, '2019-11-15 16:38:08'),
(135, 160, NULL, 'Samda powar', '', 'Mira I saw your profile you are great so how to I contact to you in bhubaneswar', 5, '2019-09-20 16:24:51'),
(136, 144, NULL, 'Suresh', '', 'Tanya I want three some how do I contact you in bhubaneswar I am staying hotels', 4, '2019-09-20 16:26:15'),
(137, 157, NULL, 'Mark', '', 'I like it lesbian girls but only see that it\'s possible', 3, '2019-09-20 16:30:04'),
(348, 182, 334, 'Cheetah', '', 'How was d service... bj included?', NULL, '2019-11-16 18:47:44'),
(347, 156, NULL, 'Suraj', '', 'Acutually Brilliant service', 5, '2019-11-16 17:19:22'),
(141, 189, NULL, 'Nagraj', '', 'The girl is awesome figure was good, smell nice, thin attractive figure and was tall girl. She didnt gave me blowjob I don\'t know why but Handjob was very awesome. I kissed her boobs OMG. This girl is 5 star but due to not giving BJ I am reducing 1 star...', 4, '2019-09-25 11:24:12'),
(428, 185, 371, 'O', '', 'Bhai ye nagi Mile gi', NULL, '2020-03-09 15:26:44'),
(429, 150, 399, 'Pihu', '', 'Nice thought', NULL, '2020-03-10 10:00:05'),
(430, 150, 361, 'Pihu', '', 'Why not. Lets add my friend #pari too in this to make 2+2 service', NULL, '2020-03-10 10:03:25'),
(143, 142, NULL, 'Manoj', '', 'This is the same girl from Bhubaneswar escorts I know her because I booked her in Bhubaneswar from some website named www.isabasu.com and I again booked her in bhubaneswar, Chembur. This girl is comedian she always a joke inside her every words. I can say she is very co-oprative girl. Love drinking and little smoke. You can have a Kamasutra sex pose with this girl she know every pose which is needed to satisfy your feeling.', 5, '2019-09-25 11:44:59'),
(167, 146, NULL, 'Alok', '', 'This girl is working in Marathi TV serial I have seen her she is very beautiful but while she’s working in escort service I don’t know but see here is very hot and sexy figure I will go with her my sweetie', 4, '2019-09-30 08:55:51'),
(166, 145, 120, 'Javed', '', 'She is actually the same girl which I made yesterday she is very attractive very good figure I loved her figure and kiss', NULL, '2019-09-30 08:53:59'),
(165, 145, 127, 'Kairam ', '', 'Yes she is very hot and sexy girl ', NULL, '2019-09-30 08:52:02'),
(164, 163, NULL, 'Sem', '', 'Where do I meet darling ', 4, '2019-09-27 20:55:09'),
(357, 146, NULL, 'How to book this', '', 'want to book', 5, '2019-11-19 12:19:49'),
(162, 142, 143, 'Ablash', '', 'Really what a co incidence man...', NULL, '2019-09-25 17:37:10'),
(168, 146, NULL, 'Kamlesh ', '', 'Can I get the same girl in my room I’m staying in hotel C has very sexy figure I think she is housewife Siri has a very beautiful face I will love to have her in my hotel please send her to my hotel I love you', 5, '2019-09-30 08:57:37'),
(356, 146, NULL, 'How to get this girl?', '', 'want to book for 1hr', 2, '2019-11-19 12:15:50'),
(355, 146, NULL, 'How to book this ?', '', 'want to book this ', 5, '2019-11-19 12:15:21'),
(171, 150, NULL, 'Joan', '', 'I meet her she is full drink ', 5, '2019-10-01 03:52:05'),
(354, 146, NULL, 'Matthew', '', 'very hot and satisfied with her company', 4, '2019-11-19 12:14:09'),
(174, 176, NULL, 'Josan', '', ' I booked this girl yesterday, very good service who enjoyed it and enjoyed it very much.', 5, '2019-10-04 16:10:09'),
(175, 190, NULL, 'Amit agarwal ', '', 'Very good French and kissing and service', 4, '2019-10-04 16:11:49'),
(349, 157, 128, 'Pandu', '', 'Cooperative.... my ass!', NULL, '2019-11-17 08:55:40'),
(350, 146, 168, 'how to book?', '', '', NULL, '2019-11-18 15:35:52'),
(351, 154, NULL, 'MEG', '510302151@qq.com', 'How to book the service?', 5, '2019-11-18 15:38:14'),
(352, 186, NULL, 'MEG', '', 'i am in POWAI, please add my WhatsApp 9004917666 ', 5, '2019-11-18 15:49:42'),
(353, 186, 352, 'Paul', '', 'Hello my WhatsApp # +61437313258 I’m unable to add you', NULL, '2019-11-19 05:49:27'),
(400, 172, NULL, 'Ajay Kumar', '', 'Thanks', 5, '2019-12-21 18:41:39'),
(399, 150, 361, 'Daddy cool', '', 'How about you and your dad Jizz each other off', NULL, '2019-12-21 00:16:45'),
(186, 176, 174, 'Rajan', '', 'This girl is married but very sexy', NULL, '2019-10-10 10:12:06'),
(187, 188, NULL, 'Sharma', '', 'I want this girl how do I book this girls', 5, '2019-10-10 13:58:03'),
(188, 149, 138, 'hakimmd351@gmial.com', '', 'Mugae fuall night keep liya chahiy', NULL, '2019-10-11 01:19:31'),
(398, 161, NULL, 'ashraf hussain', 'hussainashraf079@gmail.com', '2horous', 1, '2019-12-20 02:04:25'),
(397, 160, 135, 'Raju', '', 'Your charges are very expensive', NULL, '2019-12-19 21:13:53'),
(396, 189, NULL, 'Sexy', '', 'Nothing', 1, '2019-12-19 15:56:11'),
(194, 155, NULL, 'Rahul', 'Kahnhayadav266@gmail.com', 'I want to book this girl for 2 hr..', 5, '2019-10-13 21:53:43'),
(195, 156, NULL, 'Khadim', 'devillawyer69@gmail.com', 'very tight and juicy pussy / my tongue touch her clit she jump from bed/ Game changer.', 5, '2019-10-14 03:20:24'),
(196, 153, 191, 'bhubaneswarbeauties', '', 'Service is very good and awesome of Kavya ', NULL, '2019-10-15 09:39:54'),
(197, 153, 192, 'bhubaneswarbeauties ', '', 'Sir first you try this girl and then you will understand how she is.', NULL, '2019-10-15 09:42:19'),
(198, 158, 193, 'bhubaneswarbeauties ', '', '3K is not enough for this girl this girl is very fantastic and attractive figure it is not possible for 3k sir', NULL, '2019-10-15 09:45:07'),
(395, 192, NULL, 'Dev', '', 'I liket this bebby ', 5, '2019-12-19 09:51:20'),
(394, 148, NULL, 'Junnu', 'junaidkhan9684,@yahoo.com', 'Rate Jada hi', 1, '2019-12-18 04:37:06'),
(427, 172, 400, 'Omkar', '', 'Real hai', NULL, '2020-03-09 15:15:02'),
(362, 158, 198, 'Kalcy', '', 'Let me know if she is available now', NULL, '2019-11-21 00:43:31'),
(363, 153, 197, 'Ano', '', 'Are you guys real? What\'s your contact? Is this a spam?', NULL, '2019-11-24 22:57:28'),
(364, 154, 351, 'Gulshan Vaswani ', '', ' Hi', NULL, '2019-11-24 23:54:29'),
(365, 145, NULL, 'Dev', 'sanjivs2016@gmail.com', 'Fren', 4, '2019-11-27 19:19:51'),
(366, 168, NULL, 'guli', 'gulistasarima@gmail.com', 'One night send me ', 2, '2019-11-28 06:24:30'),
(367, 144, NULL, 'T ray', '', 'Raypppp1@gmail.com', 5, '2019-11-28 09:49:42'),
(368, 144, NULL, 'Sachin Ashok zalte', 'sachinzalte840@gmail.com', '2', 1, '2019-11-29 05:28:50'),
(369, 154, NULL, 'Sachin Ashok zalte', 'sachinzalte840@gmail.com', '2', 1, '2019-11-29 05:34:43'),
(370, 162, 125, 'Abi', '', 'Can you do 30000 for overnight ', NULL, '2019-11-30 00:19:10'),
(371, 185, 142, 'Raju', '', 'Amlya nhi h kya wha fir photo iski kyo lga rki h', NULL, '2019-11-30 20:32:25'),
(372, 146, 358, 'mukesh', '', 'hello', NULL, '2019-12-01 09:34:04'),
(374, 153, 196, 'Farhan ', '', 'Extra hours means??? in rate chart', NULL, '2019-12-01 21:53:35'),
(375, 156, 129, 'Alex', '', 'Abe kabhi real me mili bhi ye saale sab chutiya bana rahe ho bas', NULL, '2019-12-02 16:03:39'),
(378, 168, 366, 'Aman', '', 'Shall we talk on whatsapp ??', NULL, '2019-12-04 23:33:44'),
(380, 191, NULL, 'Arun', '', 'So sexi yar mind blowing service thanks Mr agent ', 5, '2019-12-06 05:28:11'),
(381, 146, NULL, 'Guest', '', 'Simran from Dubai. She is Simran Kaur, a Dubai based model, who has an app where she sells her nudies. She has a very sexy figure. ', 5, '2019-12-07 11:05:06'),
(382, 181, 346, 'Vinay', '', 'Hey, can you tell what happened?', NULL, '2019-12-09 11:06:33'),
(383, 149, 188, 'Rakesh', '', 'Muje aap se bat karni ha', NULL, '2019-12-09 15:42:37'),
(384, 159, NULL, 'Hello', '', '\r\nJanu', 5, '2019-12-11 09:58:03'),
(385, 159, NULL, 'Hello', '', '\r\nJanu', 5, '2019-12-11 09:58:05'),
(386, 173, NULL, 'Anil', 'anilpandit4all@gmail.com', 'I like this . May i go for this', 5, '2019-12-11 10:26:15'),
(387, 154, NULL, 'kich', 'kich@gmail.com', 'ok', 5, '2019-12-11 17:33:30'),
(388, 158, 198, 'ND', '', 'Is it real pictures ?', NULL, '2019-12-12 06:08:11'),
(389, 188, NULL, 'Aj', '', 'What is the process of booking ', 4, '2019-12-13 13:59:23'),
(391, 162, NULL, 'Akash', '', 'I want girl at 2000', 2, '2019-12-16 14:10:05'),
(392, 165, NULL, 'Hotjo', 'hoteljobs90@yahoo.co.in', 'Is this pic real', 5, '2019-12-17 00:30:49'),
(434, 191, NULL, 'Ahmad', 'bhubaneswar', '15000', 1, '2020-08-05 01:49:40'),
(332, 155, 194, 'Sanjay Agarwal', '', 'I want book this girl for 2 hrs incall', NULL, '2019-11-06 23:04:34'),
(361, 150, NULL, 'Sid', 'www.siddhu.1@gmail.com', 'Can she have threesome with father son. ...... me and my dad both father son cocks will fuck her mouth and boobs together in threesome like porn ', 5, '2019-11-19 20:38:02'),
(360, 153, NULL, 'Sid', 'www.siddhu.1@gmail.com', 'She can have father son threesome mmf ......she sucked our both father son cocks together in threesome like porn. ', 5, '2019-11-19 20:35:07'),
(359, 155, NULL, 'Bilal Miyan ', 'bilalmiyan81@gmail.com ', 'full night ', 5, '2019-11-19 15:53:48'),
(329, 176, NULL, 'Krishna', '', 'Sex good for 15 min. Doesn’t allow foreplay no BJ. Avoidable. Good body but poor client service', 1, '2019-10-28 10:03:01'),
(334, 182, 199, 'Sanjay', '', 'Book this girl for 3 hrs incall', NULL, '2019-11-06 23:09:37'),
(335, 155, NULL, 'Rajendra bharuk', '', 'I want book this girl for overnight in call visited on date 11.11.2019. Chandini', 5, '2019-11-07 17:33:43'),
(358, 146, NULL, 'booking this ', '', 'book for 1hr', 5, '2019-11-19 12:20:16'),
(337, 148, NULL, 'Akash choudhary', 'Akash01choudhary@gmail.com', 'I need this girl and i pay any price', 5, '2019-11-08 04:37:13'),
(338, 157, NULL, 'Sandip', '@@@@@', 'Very..beautiful.girl', 5, '2019-11-09 13:44:56'),
(339, 153, NULL, 'Daksh', 'Darshonly@gmail.com', 'I want to book it. Can I book through email only? ', 5, '2019-11-09 17:58:30'),
(416, 161, 398, 'Vasu', '', 'Mujhe apse bat Karna hai', NULL, '2020-01-29 08:36:16'),
(417, 149, 188, 'Vasu', '', 'Most have full night fun', NULL, '2020-01-29 08:38:18'),
(418, 146, 412, 'Rehan', '', 'I want sex one hour but budget is 4000', NULL, '2020-01-30 09:44:15'),
(419, 182, 411, 'S', '', '31/01/2020', NULL, '2020-01-31 00:33:34'),
(420, 176, 413, 'S', '', '31/01/2020', NULL, '2020-01-31 00:44:07'),
(423, 158, 388, 'DHANANJAY kumar', '', 'Available  till 5 k', NULL, '2020-02-10 14:49:08'),
(424, 159, 118, 'How can I meet him', '', '', NULL, '2020-02-15 15:13:21'),
(425, 182, 411, 'ADmin', '', 'What about creampie?', NULL, '2020-02-21 10:13:51'),
(415, 161, 398, 'Vasu', '', 'My contact number 9644020182', NULL, '2020-01-29 08:35:38'),
(414, 148, 130, 'Riya', '', 'Good', NULL, '2020-01-28 14:57:16'),
(413, 176, 174, 'Abhishek', '', 'How much money unless pay', NULL, '2020-01-22 03:13:28'),
(411, 182, 348, 'Admin', '', 'Yes BJ is included', NULL, '2020-01-11 11:25:49'),
(410, 156, 402, 'Vinku', '', 'Kesi the bhai ye ??', NULL, '2020-01-10 09:33:11'),
(409, 142, 133, 'prem', '', 'good - fake', NULL, '2020-01-01 17:53:15'),
(431, 145, NULL, 'Ajeet', 'ajeet@gmail.com', 'Hello Alisha, are you available.', 4, '2020-07-03 15:49:45'),
(432, 144, NULL, 'Dimesh', 'dimesh@gmail.com', 'Are you availble', 4, '2020-07-04 13:05:29'),
(433, 142, NULL, 'Aakash', 'aakash@gmail.com', 'Veri nice girl', 4, '2020-07-04 13:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `created_at`, `updated_at`) VALUES
(2, 'blowjob123', '2021-04-27 17:51:32', '2021-04-27 18:51:43'),
(7, 'Blow job', '2021-04-28 11:35:04', '2021-04-28 11:35:04'),
(9, 'Cum in mouth', '2021-04-28 11:35:54', '2021-04-28 11:35:54'),
(10, 'Costumes', '2021-04-28 11:36:13', '2021-04-28 11:36:13'),
(11, 'Cum on body', '2021-04-28 11:36:55', '2021-04-28 11:36:55'),
(12, 'Deep French kissing', '2021-04-28 11:37:16', '2021-04-28 11:37:16'),
(13, 'Disabled clients', '2021-04-28 11:37:28', '2021-04-28 11:37:28'),
(14, 'Doggy style', '2021-04-28 11:37:37', '2021-04-28 11:37:37'),
(15, 'Double penetration', '2021-04-28 11:37:46', '2021-04-28 11:37:46'),
(16, 'Girlfriend experience', '2021-04-28 11:37:56', '2021-04-28 11:37:56'),
(17, 'Happy ending', '2021-04-28 11:38:08', '2021-04-28 11:38:08'),
(18, 'Light bondage', '2021-04-28 11:38:19', '2021-04-28 11:38:19'),
(19, 'Massage', '2021-04-28 11:38:29', '2021-04-28 11:38:29'),
(20, 'Overnight stays', '2021-04-28 11:38:41', '2021-04-28 11:38:41'),
(21, 'Passionate kissing', '2021-04-28 11:38:50', '2021-04-28 11:38:50'),
(22, 'sensual massage only', '2021-04-28 11:39:00', '2021-04-28 11:39:00'),
(23, 'Sexy lingerie', '2021-04-28 11:39:09', '2021-04-28 11:39:09'),
(24, 'Strip tease', '2021-04-28 11:39:22', '2021-04-28 11:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `profile_title` varchar(200) DEFAULT NULL,
  `gal_img` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1-Active/0-InActive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `pro_id`, `profile_title`, `gal_img`, `status`, `created_at`, `updated_at`) VALUES
(7, 142, 'Sanvi', '22054949b6ed835c6d951c3589ab2e66.jpg', 0, '2019-09-14 12:20:03', '2020-08-06 19:52:47'),
(8, 143, 'Title Post 1', '0920b326f77cf5e4822b3052af2e87fd.jpg', 0, '2019-09-14 12:30:37', NULL),
(9, 144, 'Tanya', 'bce5b42542fb4c194d9d026f56ae46ac.jpg', 0, '2019-09-14 13:44:43', '2020-08-06 20:04:55'),
(10, 145, 'Alisa', 'c62f1bb7199d99143428dddf19e42dd8.jpg', 0, '2019-09-14 16:38:05', '2020-08-06 20:08:22'),
(11, 146, 'Simran', '3bdb997ffac5e9ea1fd4a18b4dbaf6a9.jpg', 0, '2019-09-14 16:49:18', '2020-08-06 20:11:44'),
(12, 147, 'Kenny', 'f9c1ee15b5e194a61e8b6052830a522d.jpg', 0, '2019-09-14 16:56:03', '2020-07-08 13:08:55'),
(13, 148, 'Nitya', '2e5d8bbbf74e2d525eea4d76c6c2e6cb.jpg', 0, '2019-09-14 17:16:35', NULL),
(14, 149, 'Pari', 'e5f5d1472100c9ceaabfd7eb060ee159.jpg', 0, '2019-09-14 17:23:01', '2020-07-08 13:21:25'),
(15, 150, 'Pihu', 'c06d832e478dc6e1497386461c458518.jpg', 0, '2019-09-14 17:55:02', '2020-07-08 13:26:30'),
(16, 151, 'Suman', '2c3457dd2ae002f1d7a91bd4464c0ba2.jpg', 0, '2019-09-14 18:21:36', '2019-11-20 18:08:24'),
(17, 152, 'Payal', '7190415a407929572c4117596e7f3222.jpg', 0, '2019-09-14 18:24:08', '2019-11-20 18:08:43'),
(18, 153, 'Kavya', '32da3156aae778d4ca7b071aca4e3c7f.jpg', 0, '2019-09-14 18:32:33', NULL),
(19, 154, 'Mahi', 'afb467c1b47f6373a5d5188940f6a3ac.jpg', 0, '2019-09-14 18:37:54', '2020-08-06 20:18:57'),
(20, 155, 'Chandini', 'e576bd59cc261f40b3d375e8ba149ac4.jpg', 0, '2019-09-16 12:25:13', NULL),
(21, 156, 'Bhoomika', '8ccbd13f4eaa34820e0248a7f66f4cdc.jpg', 0, '2019-09-16 12:28:31', '2020-07-08 17:22:14'),
(22, 157, 'Deepali', '15c8b486d78515ae8164e4610d3403a7.jpg', 0, '2019-09-16 12:31:17', '2019-11-20 18:06:05'),
(23, 158, 'Garima', '7e4d62f5b772cd9b0190e07acfc8fc3c.jpg', 0, '2019-09-16 12:33:12', '2020-07-08 17:08:12'),
(24, 159, 'Naina', 'c4390022c7063eb90371c8e68ba90259.jpg', 0, '2019-09-16 12:58:39', '2020-07-08 19:22:33'),
(25, 160, 'Meera', 'b5b01b9078af88773389adaaa378585a.jpg', 0, '2019-09-16 13:03:02', '2019-11-20 18:05:14'),
(26, 161, 'Siya', '7385c505b67c14ccea2a05913aa6013b.jpg', 0, '2019-09-16 13:56:56', NULL),
(27, 162, 'Manvi', 'd9655b8897fd28ab5333570c99e2f8fc.jpg', 0, '2019-09-16 14:04:09', NULL),
(28, 163, 'Paakhi', '37b14eab26a027032b4ef68b73a73bae.jpg', 1, '2019-09-16 14:17:03', NULL),
(29, 164, 'Ritika', '132be06b5c47491a6f5f1bd6643716f8.jpg', 1, '2019-09-16 14:20:07', NULL),
(30, 165, 'Tanuja', '9e04b7f2ff08857b75712baf4b20a132.jpg', 0, '2019-09-16 14:26:45', NULL),
(31, 166, 'Yamini', '20bce6fb2a6428cd60891cda90e4c58c.jpg', 1, '2019-09-16 15:49:03', NULL),
(32, 167, 'Riddhi', '2d397bc5c42e4553c018104ce74d9403.jpg', 0, '2019-09-16 15:51:34', NULL),
(33, 168, 'Juhi', '117a12a58e29e567d7b19d9b51e56dcc.jpg', 0, '2019-09-16 15:57:45', NULL),
(34, 169, 'Gayatri', 'bcbfc839f044771c0d715fc0e6a1231a.jpg', 1, '2019-09-16 16:01:48', NULL),
(35, 170, 'Aarushi', '00ea48c6027b371f20debe63dced51413.jpg', 0, '2019-09-16 16:03:48', '2020-10-16 17:37:30'),
(36, 171, 'Aashi', '84ec2086aab8c496afd8a4216e20b8aa.jpg', 0, '2019-09-23 14:10:46', '2020-07-08 17:31:35'),
(37, 172, 'Aakriti', '00ea48c6027b371f20debe63dced51411.jpg', 0, '2019-09-23 15:01:03', '2020-10-16 11:59:00'),
(38, 173, 'Barkha', '3b82c4068a3285026fe119e7b31f7e8f.jpg', 0, '2019-09-23 15:08:44', NULL),
(39, 174, 'Gargi', '9213d272cc9699530d39279052c7b7e6.jpg', 0, '2019-09-23 15:22:38', NULL),
(40, 175, 'Harini', 'f04a17c64fa7f64f11318e58fda67b3c.jpg', 0, '2019-09-23 15:33:12', '2020-07-08 17:52:47'),
(41, 176, 'Iniya', '7f91a3dbe3cc22e298aa4778b388a381.jpg', 0, '2019-09-23 15:43:50', NULL),
(42, 177, 'Nalini', '2a3b9f8ba67f945cad5510d6e3f2f4fc.jpg', 0, '2019-09-23 15:50:23', NULL),
(43, 178, 'Miyal', '0d2546659827ad7f0604a1b6538ab545.jpg', 0, '2019-09-23 16:02:29', NULL),
(44, 179, 'Omisha', '650e65e30561f3b0f2816b41cb52032d.jpg', 0, '2019-09-23 16:07:17', '2020-07-08 18:24:07'),
(45, 180, 'Tejal', '718fe0ae2d55ecb287a3fec88912dc48.jpg', 0, '2019-09-23 16:17:01', '2020-07-08 18:29:50'),
(46, 181, 'Urvi', '8f6f88dc936877660bab2b8bb1215dc3.jpg', 0, '2019-09-23 16:36:58', NULL),
(47, 182, 'Vaani', 'd116704f8808350d8a4ad1a07704010a.jpg', 0, '2019-09-23 16:40:04', NULL),
(48, 183, 'Kalyani', '2553d03b1cd03059e50c1a84c6686734.jpg', 0, '2019-09-23 16:54:14', NULL),
(49, 184, 'Bandita', 'f6d3c38ed964c993dc9d989b184e2fc7.jpg', 0, '2019-09-23 16:58:05', '2020-07-08 19:04:43'),
(50, 185, 'Amulya', '0140a3d7438c5f19a950366c39921cb1.jpg', 0, '2019-09-23 17:05:24', '2020-07-08 19:12:08'),
(51, 186, 'Joyel', 'f60425df288632b5b81b9a182436d3de.jpg', 0, '2019-09-23 17:24:58', NULL),
(52, 187, 'Parina', 'e0d774c22ec05cc916037d788497c62a.jpg', 0, '2019-09-23 17:32:00', NULL),
(53, 188, 'Saira', '5114db1accdc9a2ba4cd6198de2b4dff.jpg', 0, '2019-09-23 17:34:17', NULL),
(54, 189, 'Maira', '17fa689c3c99c92e9dd6397af0ef1869.jpg', 0, '2019-09-23 17:36:38', NULL),
(55, 190, 'Gouri', '9ea76cf276b51012800262b8bfa317d2.jpg', 0, '2019-09-23 17:39:48', '2020-01-29 14:38:50'),
(56, 191, 'Polina', '2e13b78fb726882a30be186570b1991d.jpg', 0, '2019-11-08 13:41:31', NULL),
(57, 192, 'Simran', '00ea48c6027b371f20debe63dced5141.jpg', 0, '2019-11-08 14:18:27', NULL),
(58, 193, 'aarti', '1.jpg', 0, '2021-04-27 19:45:25', NULL),
(59, 194, 'test', 'bangalore-escorts-aditi.jpg', 0, '2021-04-27 20:11:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Call girl', '2019-09-09 12:55:53', '2019-09-09 13:22:33'),
(4, 'GFE', '2019-09-14 13:45:23', NULL),
(5, '69 Expert', '2019-09-14 13:45:37', NULL),
(6, 'College Girl', '2019-09-14 13:45:55', NULL),
(7, 'Chinese Model', '2019-09-14 13:46:18', NULL),
(8, 'Teenage Girl', '2019-09-14 13:46:49', NULL),
(9, 'French Kissing', '2019-09-14 13:47:25', NULL),
(10, 'Elite model', '2019-09-14 13:47:40', NULL),
(11, 'Student', '2019-09-14 13:48:06', NULL),
(12, 'Housewife', '2019-09-14 13:48:25', NULL),
(13, 'Photographer', '2019-09-14 13:49:01', NULL),
(14, 'Independent', '2019-09-14 13:49:22', NULL),
(15, 'IT Employee', '2019-09-14 13:49:55', NULL),
(16, 'bhubaneswar Girl', '2019-09-14 13:50:12', NULL),
(17, 'Kiss Expert', '2019-09-14 13:50:30', NULL),
(18, 'Russian Girls', '2019-09-14 13:57:32', NULL),
(19, 'Arab Girl', '2019-09-14 13:58:04', NULL),
(20, 'Punjabi Girl', '2019-09-14 13:58:20', NULL),
(21, 'VIP Girl', '2019-09-14 13:58:38', NULL),
(22, 'Punjabi Girl', '2019-09-14 13:58:52', NULL),
(23, 'Model Girl', '2019-09-14 13:59:09', NULL),
(24, 'Marathi Girl', '2019-09-14 13:59:31', NULL),
(25, 'bhubaneswar Escorts', '2019-09-14 14:42:16', NULL),
(26, 'Pink Tits', '2019-09-14 18:32:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suggest_location`
--

CREATE TABLE `suggest_location` (
  `id` int(11) NOT NULL,
  `loc_name` varchar(200) DEFAULT NULL,
  `added_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `sub_video_title` varchar(200) DEFAULT NULL,
  `video_imge` varchar(200) NOT NULL,
  `video_alt_title` varchar(200) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_title`, `sub_video_title`, `video_imge`, `video_alt_title`, `video_link`, `created_at`, `updated_at`) VALUES
(10, 'Hot Romance Video of bhubaneswar Escorts', 'Hot Romance Video', '402a1b66e6f73091ac25df36c9789cc2.jpg', 'hot romance video123', 'https://www.youtube.com/embed/8RjPzdHvXC4', '2019-07-20 12:36:11', '2019-10-07 14:09:18'),
(11, 'bhubaneswar Escorts Romance Video', 'Indian Romance Video', '3ceda9bc6ba1f0f52db17d4c910180c1.jpg', 'Indian romance video bhubaneswar', 'https://www.youtube.com/embed/G02iQtqtbs8', '2019-07-20 12:39:05', '2019-10-07 14:10:42'),
(12, 'bhubaneswar Escorts Romance Video HD', 'Romance Video HD', '6601b3d9f5585d83b88d24f9d8efe074.jpg', 'romance video hd bhubaneswar', 'https://www.youtube.com/embed/MSwyg_qqXYY', '2019-07-20 12:40:49', '2019-12-21 18:10:37'),
(13, 'Sexy Film Video bhubaneswar Escorts Agency', 'Sexy Film Video', '135af3f2a73f8033f1e827d8673383c5.jpg', 'Sexy Film Video bhubaneswar', 'https://www.youtube.com/embed/arE0bSK6-2Q', '2019-07-20 12:55:16', '2019-10-07 14:11:03'),
(14, 'Desi Sexy Video call girls bhubaneswar', 'Desi Sexy Video', 'a1c75bb73413bb5bd94b33a29ef7e558.jpg', 'desi sexy video bhubaneswar', 'https://www.youtube.com/embed/vgbu-uKlODM', '2019-07-20 13:03:04', '2020-08-11 16:32:08'),
(15, 'Tamil call girls in bhubaneswar', 'Tamil Sexy Video', 'a5b42ef4d4c8e5f92793dd6ea2ee2176.jpg', 'tamil sexy video bhubaneswar', 'https://www.youtube.com/embed/9V5LGbIouWc', '2019-07-20 15:56:49', '2020-08-11 16:59:45'),
(16, 'bhubaneswar Escorts Videos', 'Hot and sexy videos', '7dfc6ce7c2dd3b6087803899dbb6bbde.jpg', 'video', 'https://www.youtube.com/embed/Sks1S90LOJc', '2019-09-02 19:49:55', '2019-12-21 18:11:57'),
(17, 'Tamil Escorts in bhubaneswar', 'Tamil Video', '31adc6ea4da7731d6c46ac5664c76f7a.jpg', 'video', 'https://www.youtube.com/embed/4aBQ2oCvsdk', '2019-09-02 19:51:25', '2019-12-21 18:13:58'),
(18, 'Big Boob girl', 'Big Boobs Girl', 'ae4e27dfbd410ee3a5c25013c0e370ee.jpg', 'Big Boobs Girl bhubaneswar', 'https://www.youtube.com/embed/sm9xC-zQ7pc', '2019-12-21 18:15:12', '2020-08-11 17:27:49'),
(19, 'Seducing Teenage girl', 'Seducing Teenage girl', '1ca8916a7cc1aaebfbe25fa506861e1d.jpg', 'Seducing Teenage girl', 'https://www.youtube.com/embed/4Q6w1YHyY_E', '2019-12-21 18:16:07', '2020-08-11 17:29:08'),
(20, 'Mallu Girl Romance', 'Mallu Girl Romance', 'e0b61e1469964695651d0adea0327733.jpg', 'Mallu Girl Romance', 'https://www.youtube.com/embed/XkGL3PqyRug', '2019-12-21 18:18:23', '2020-08-11 17:34:38'),
(21, 'Sex with Trailer', 'Sex with Trailer', '36f45f330e2a5a00bd0c5f3fcbde56c1.jpg', 'Sex with Trailer bhubaneswar', 'https://www.youtube.com/embed/XzYbhltfwXs', '2019-12-21 18:19:14', '2020-08-11 17:44:17'),
(22, 'Uncut Video with Teenage', 'Uncut Video with Teenage', '4b3101fc9eee6adbbcb1722bc8cd483d.jpg', 'Uncut Video with Teenage bhubaneswar', 'https://www.youtube.com/embed/TcoHUmrgNAk', '2019-12-21 18:23:03', '2020-08-11 17:52:42'),
(23, 'Hot Sexy Girl Drunk', 'Hot Sexy Girl Drunk', 'a402d8a6ca537c6d71edee490f6698bf.jpg', 'Hot Sexy Girl video', 'https://www.youtube.com/embed/E5JKjuyd1y4', '2019-12-21 18:27:44', '2020-08-11 17:38:43'),
(24, 'Sex with Delivery Boy', 'Sex with Delivery Boy', '7650e8a76a525fa732a66e8d240bbec2.jpg', 'Sex with Delivery Boy', 'https://www.youtube.com/embed/tf_CqKs13q4', '2019-12-21 18:32:22', '2020-08-11 16:26:08'),
(25, 'Two Best Friend', 'Two Best Friend', '9b9c9a7fa292f2555eff5fce21e60bb1.jpg', 'Two Best Friend', 'https://www.youtube.com/embed/DpvH-2YqATk', '2019-12-21 18:39:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_post`
--
ALTER TABLE `profile_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_type`
--
ALTER TABLE `profile_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggest_location`
--
ALTER TABLE `suggest_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profile_post`
--
ALTER TABLE `profile_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `profile_type`
--
ALTER TABLE `profile_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
