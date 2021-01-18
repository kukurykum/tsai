CREATE TABLE `group` (
                         `id` SERIAL PRIMARY KEY ,
                         `name` text(64) NOT NULL UNIQUE
) ENGINE=InnoDB;

SET sql_mode = ''; -- razem z tym

CREATE TABLE `user` (
                        `id` SERIAL PRIMARY KEY ,
                        `group_id` BIGINT UNSIGNED NOT NULL ,
                        `username` text(32) NOT NULL UNIQUE,
                        `email` VARCHAR(32) NOT NULL UNIQUE,
                        `password` VARCHAR(32) NOT NULL,
                        `salt` text(16) NOT NULL,
                        `last_login` timestamp,
                        `created_at` timestamp,
                        FOREIGN KEY (group_id) REFERENCES `group`(id)
) ENGINE=InnoDB;
CREATE TABLE `permission` (
                              `id` SERIAL PRIMARY KEY ,
                              `name` text(64) NOT NULL UNIQUE
) ENGINE=InnoDB;

CREATE TABLE `brand` (
                         `id` SERIAL PRIMARY KEY ,
                         `name` text(32) NOT NULL UNIQUE
) ENGINE=InnoDB;

CREATE TABLE `model` (
                         `id` SERIAL PRIMARY KEY ,
                         `name` text(32) NOT NULL UNIQUE
) ENGINE=InnoDB;


CREATE TABLE `group_permission` (
                        `group_id` BIGINT UNSIGNED,
                        `permission_id` BIGINT UNSIGNED,
                        FOREIGN KEY (group_id) REFERENCES `group` (id),
                        FOREIGN KEY (permission_id) REFERENCES `permission` (id),
                        PRIMARY KEY (group_id, permission_id)
) ENGINE=InnoDB;


CREATE TABLE `list` (
                        `id` SERIAL PRIMARY KEY,
                        `user_id` BIGINT UNSIGNED,
                        `list_name` varchar(32) NOT NULL,
                        UNIQUE KEY `unique_index` (`user_id`,`list_name`),
                        FOREIGN KEY (user_id) REFERENCES `user`(id)
) ENGINE=InnoDB;

CREATE TABLE `shoe_info` (
                             `id` SERIAL PRIMARY KEY,
                             `list_id` BIGINT UNSIGNED NOT NULL,
                             `brand_id` BIGINT UNSIGNED NOT NULL,
                             `model_id` BIGINT UNSIGNED NOT NULL,
                             `brand` VARCHAR(32) NOT NULL,
                             `model` VARCHAR(32) NOT NULL,
                             `size` FLOAT NOT NULL,
                             `amount` INT NOT NULL,
                             `price` FLOAT NOT NULL,
                             `colorway` text(32) NOT NULL,
                             `style` varchar(32) NOT NULL,
                             `release_date` date NOT NULL,
                             UNIQUE KEY `unique_index` (`brand_id`,`model_id`,`size`),
                             FOREIGN KEY (list_id) REFERENCES `list`(id)
) ENGINE=InnoDB;
