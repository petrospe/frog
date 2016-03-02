DROP TRIGGER IF EXISTS user_update;
delimiter $$
CREATE TRIGGER user_update
AFTER UPDATE ON almab_customers 
FOR EACH ROW
    IF NEW.(REPLACE((SUBSTRING(dbserial, -9)),'-','') <> OLD.(REPLACE((SUBSTRING(dbserial, -9)),'-','') 
    THEN  
      UPDATE users SET username = NEW.(REPLACE((SUBSTRING(dbserial, -9)),'-','') WHERE username = OLD.(REPLACE((SUBSTRING(dbserial, -9)),'-','');
      UPDATE users SET password = NEW.md5(REPLACE((SUBSTRING(dbserial, -9)),'-','') WHERE username = OLD.md5(REPLACE((SUBSTRING(dbserial, -9)),'-','');
    END IF
END $$
delimiter ;;