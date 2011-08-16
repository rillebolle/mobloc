
CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(11) NOT NULL auto_increment,
  `nr` varchar(12) NOT NULL,
  `date` varchar(10) NOT NULL,
  `h` tinyint(2) NOT NULL,
  `m` tinyint(2) NOT NULL,
  `sent` tinyint(1) NOT NULL default '0',
  `mess` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

