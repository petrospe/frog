ALTER TABLE almab_customers MODIFY COLUMN iscustom tinyint(1);

--
-- Δομή πίνακα για τον πίνακα `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `solution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(80) DEFAULT NULL,
  `filename_sys` varchar(255) NOT NULL,
  `file_type` varchar(30) NOT NULL,
  `file_size` int(11) unsigned DEFAULT NULL,
  `file_path` varchar(250) DEFAULT NULL,
  `support_id` int(11) NOT NULL,
  `file_category_id` int(11) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3286 DEFAULT CHARSET=utf8;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `files_categories` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `files_categories`
--
ALTER TABLE `files_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `files_categories`
--
ALTER TABLE `files_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT;