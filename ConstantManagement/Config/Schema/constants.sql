CREATE TABLE IF NOT EXISTS `constants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'プライマリーID',
  `name` varchar(50) NOT NULL COMMENT '定数名',
  `value` varchar(50) NOT NULL COMMENT '値',
  `explanation` varchar(200) NOT NULL COMMENT '説明',
  `modified` datetime NOT NULL COMMENT '更新日時',
  `created` datetime NOT NULL COMMENT '作成日時',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='定義用' AUTO_INCREMENT=4 ;