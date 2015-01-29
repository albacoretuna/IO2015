CREATE TABLE IF NOT EXISTS `ip_fonts` (
`ID` int(9) NOT NULL auto_increment,
`name` text NOT NULL,
`css` text NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `ip_fonts` (`ID`, `name`, `css`) VALUES
(1, 'Helvetica Neue', '"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif'),
(2, 'Verdana', 'Verdana, Geneva, sans-serif');

CREATE TABLE IF NOT EXISTS `ip_images` (
`ID` int(9) NOT NULL auto_increment,
`user_id` int(9) NOT NULL,
`url` text NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `ip_images` (`ID`, `user_id`, `url`) VALUES
(1, 1, 'http://placehold.it/1000x400&text=[Page 1]'),
(2, 1, 'http://placehold.it/400x300&text=[img]'),
(3, 1, 'http://placehold.it/1000x400&text=[Page 2]');

CREATE TABLE IF NOT EXISTS `ip_pages` (
`ID` int(9) NOT NULL auto_increment,
`site_id` int(9) NOT NULL,
`title` text NOT NULL,
`image_id` int(9) NOT NULL,
`content` text NOT NULL,
`date` date NOT NULL,
`frontpage` int(1) NOT NULL default '0',
PRIMARY KEY (`ID`),
FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `ip_pages` (`ID`, `site_id`, `title`, `image_id`, `content`, `date`, `frontpage`) VALUES
(1, 1, 'Page 1', 1, '<img src="http://placehold.it/400x300&text=[test1]" class="c_image">\n<p class="maintext">Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>', '2013-11-13', 1),
(2, 1, 'Page 2', 3, '<img src="http://placehold.it/400x300&text=[test2]" class="c_image">\r\n<p class="maintext">Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>', '2013-11-13', 0);

CREATE TABLE IF NOT EXISTS `ip_site` (
`ID` int(9) NOT NULL auto_increment,
`name` text NOT NULL,
`user_id` int(9) NOT NULL,
`font_id` int(9) NOT NULL,
`theme_id` int(9) NOT NULL,
`date` date NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `ip_site` (`ID`, `name`, `user_id`, `font_id`, `theme_id`, `date`) VALUES
(1, 'Test Site', 1, 1, 1, '2013-11-13');

CREATE TABLE IF NOT EXISTS `ip_themes` (
`ID` int(9) NOT NULL auto_increment,
`name` text NOT NULL,
`bgColor` varchar(6) NOT NULL,
`fontColor` varchar(6) NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `ip_themes` (`ID`, `name`, `bgColor`, `fontColor`) VALUES
(1, 'black/white', 'fff', '222'),
(2, 'white/gray', '444', 'fff');

CREATE TABLE IF NOT EXISTS `ip_users` (
`ID` int(9) NOT NULL auto_increment,
`name` text NOT NULL,
`email` text NOT NULL,
`password` text NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `ip_users` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Test User', 'a@b.fi', '5f4dcc3b5aa765d61d8327deb882cf99');