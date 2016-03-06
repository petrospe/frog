ALTER TABLE almab_customers MODIFY COLUMN iscustom tinyint(1);

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `solution` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(80) DEFAULT NULL,
  `filename_sys` varchar(255) NOT NULL,
  `file_type` varchar(30) NOT NULL,
  `file_size` int(11) unsigned DEFAULT NULL,
  `file_path` varchar(250) DEFAULT NULL,
  `file_category_id` int(11) NOT NULL,
  `file_support_id` int(11) DEFAULT NULL,
  `file_customer_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `files_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

alter table almab_customerrequest convert to character set greek collate greek_general_ci;

ALTER TABLE `almab_updates` ADD `file_type` VARCHAR(30) NOT NULL AFTER `CustomerId`, ADD `file_size` INT NULL DEFAULT NULL AFTER `file_type`, ADD `file_path` VARCHAR(250) NULL DEFAULT NULL AFTER `file_size`;

UPDATE almab_updates set file_type = 'msi' WHERE id < 39;
UPDATE almab_updates SET file_type = 'exe' WHERE id > 38;
ALTER TABLE `almab_updates` CHANGE `file` `file_name` VARCHAR(255) CHARACTER SET greek COLLATE greek_general_ci NULL DEFAULT NULL;

INSERT INTO `files_categories` (`id`, `description`) VALUES
(1, 'Version'),
(2, 'Template'),
(3, 'SQL Script'),
(4, 'Text'),
(5, 'Word document'),
(6, 'Excel workbook'),
(7, 'Pdf file'),
(8, 'Batch file'),
(9, 'Compressed file'),
(10, 'Executable file'),
(11, 'DLL file'),
(12, 'Image file');