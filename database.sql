/* Buat Data Base Dan Table */
create database if not exists crud_db;

use crud_db;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(100),
    `email` varchar(100),
    `mobile` varchar(15),
    PRIMARY KEY (`id`)
);