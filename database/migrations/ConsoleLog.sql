/* 16:39:28 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net */ SHOW VARIABLES;
/* 16:39:28 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net */ SELECT @@global.max_allowed_packet;
/* 16:39:28 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net */ SET NAMES 'utf8mb4';
/* 16:39:29 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net */ USE `heroku_0180f57b92c964e`;
/* 16:39:29 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net */ SET NAMES 'latin1';
/* 16:39:29 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SET NAMES 'utf8mb4';
/* 16:39:30 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW VARIABLES LIKE 'skip_show_database';
/* 16:39:30 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW DATABASES;
/* 16:39:31 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW FULL TABLES;
/* 16:39:31 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT * FROM information_schema.routines WHERE routine_schema = 'heroku_0180f57b92c964e' ORDER BY routine_name;
/* 16:39:32 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW VARIABLES LIKE 'character_set_database';
/* 16:40:11 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'migrations';
/* 16:40:12 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`migrations`;
/* 16:40:12 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `migrations`;
/* 16:40:12 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT * FROM `information_schema`.`character_sets` ORDER BY `character_set_name` ASC;
/* 16:40:12 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT * FROM `information_schema`.`collations` ORDER BY `collation_name` ASC;
/* 16:40:13 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `migrations`;
/* 16:40:13 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT * FROM `information_schema`.`collations` WHERE character_set_name = 'utf8mb4' ORDER BY `collation_name` ASC;
/* 16:40:22 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'orders';
/* 16:40:22 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`orders`;
/* 16:40:22 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `orders`;
/* 16:40:23 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `orders`;
/* 16:40:25 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'menus';
/* 16:40:26 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`menus`;
/* 16:40:26 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `menus`;
/* 16:40:26 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `menus`;
/* 16:40:27 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'genres';
/* 16:40:28 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`genres`;
/* 16:40:28 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `genres`;
/* 16:40:28 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `genres`;
/* 16:40:29 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'favorites';
/* 16:40:29 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`favorites`;
/* 16:40:29 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `favorites`;
/* 16:40:30 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `favorites`;
/* 16:40:31 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'failed_jobs';
/* 16:40:31 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`failed_jobs`;
/* 16:40:31 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `failed_jobs`;
/* 16:40:32 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `failed_jobs`;
/* 16:40:34 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'restaurants';
/* 16:40:34 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`restaurants`;
/* 16:40:34 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `restaurants`;
/* 16:40:35 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `restaurants`;
/* 16:40:36 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'reviews';
/* 16:40:36 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`reviews`;
/* 16:40:36 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `reviews`;
/* 16:40:36 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `reviews`;
/* 16:40:37 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW TABLE STATUS LIKE 'users';
/* 16:40:38 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW CREATE TABLE `heroku_0180f57b92c964e`.`users`;
/* 16:40:38 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SHOW INDEX FROM `users`;
/* 16:40:38 b2f6aeed03a5fb@us-cdbr-east-05.cleardb.net heroku_0180f57b92c964e */ SELECT COUNT(1) FROM `users`;
