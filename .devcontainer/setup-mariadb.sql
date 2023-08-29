-- Using the root user, grant access to the mariadb user.
GRANT ALL PRIVILEGES ON *.* TO 'mariadb'@'%' IDENTIFIED BY 'mariadb';

-- Create a table in the database
USE mariadb;
CREATE TABLE tasks (
  id INT(11) NOT NULL AUTO_INCREMENT,
  priority INT(2),
  completed TINYINT(1) DEFAULT '0',
  description VARCHAR(255),
  PRIMARY KEY (id)
);

-- Populate the table
INSERT INTO tasks (id, priority, completed, description) VALUES 
(1, 1, 1, 'Wash dishes'),
(2, 5, 0, 'Sweep floor'),
(3, 3, 1, 'Do laundry'),
(4, 2, 0, 'Mow lawn'),
(5, 4, 0, 'Weed garden'),
(6, 7, 0, 'Take out trash'),
(7, 6, 0, 'Buy groceries');
