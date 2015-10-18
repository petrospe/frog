DROP TRIGGER user_insert;

CREATE TRIGGER user_insert
AFTER INSERT
   ON almab_customers FOR EACH ROW BEGIN
   INSERT INTO `users` (`username`, `password`, `email`, `superuser`, `status`) VALUES (NEW.email, md5(NEW.email), NEW.email, 0, 1);
   INSERT INTO `profiles` (`lastname`, `firstname`) VALUES (SUBSTRING_INDEX(NEW.descr, ' ', 1), SUBSTRING(NEW.descr, LOCATE(' ' , NEW.descr)+1));
END $$
