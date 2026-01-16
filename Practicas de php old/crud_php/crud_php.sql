CREATE TABLE `users` (
  `id` integer PRIMARY KEY,
  `Nombre` varchar(255),
  `Roll` varchar(255),
  `CI` integer
);

CREATE TABLE `equipos` (
  `id` integer PRIMARY KEY,
  `Marca` varchar(255),
  `Serial` text,
  `user_id` integer NOT NULL,
  `status` varchar(255)
);

ALTER TABLE `equipos` ADD CONSTRAINT `users_equipos` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
