DROP TRIGGER IF EXISTS AuthAssignment_insert;
delimiter $$
CREATE TRIGGER AuthAssignment_insert
AFTER INSERT ON profiles
FOR EACH ROW
    BEGIN
    SET @new_id = NEW.user_id;
   INSERT INTO `AuthAssignment` (`itemname`, `userid`, `data`) VALUES ('Customer', @new_id, 'N');
   
END $$
delimiter ;;