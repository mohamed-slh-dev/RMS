

CREATE TABLE `chifs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chifs_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO chifs VALUES("1","Kamal Idress","+97 88 0281","master","chef@gmail.com","$2y$10$NpTCzgpWWUn.pu01KL.Dje3OtjrinW5IbiGLlp9PRUZQlH2OWj7EG","2021-10-13 09:15:00","2021-10-13 09:15:00");





CREATE TABLE `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cities VALUES("1","Dubai","400","2021-10-13 08:10:38","2021-10-13 08:10:38");
INSERT INTO cities VALUES("2","Abu Dhabi","300","2021-10-13 08:10:38","2021-10-13 08:10:38");
INSERT INTO cities VALUES("3","Sharjah","300","2021-10-13 08:10:38","2021-10-13 08:10:38");
INSERT INTO cities VALUES("4","Ajman","300","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO cities VALUES("5","Umm Al Quwain","300","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO cities VALUES("6","Al Ain","300","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO cities VALUES("7","RAK","300","2021-10-13 08:10:39","2021-10-13 08:10:39");





CREATE TABLE `component_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_limit` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO component_categories VALUES("2","Fruits","2500","2021-10-13 09:23:07","2021-10-13 09:23:07");
INSERT INTO component_categories VALUES("3","Vegetables","3000","2021-10-13 09:23:34","2021-10-13 09:23:34");





CREATE TABLE `components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measuringunit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wastage` double DEFAULT 0,
  `cals` double DEFAULT NULL,
  `proteins` double DEFAULT NULL,
  `carbs` double DEFAULT NULL,
  `fats` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `min_quantity` double DEFAULT NULL,
  `increase` double DEFAULT 0,
  `component_category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `components_component_category_id_foreign` (`component_category_id`),
  CONSTRAINT `components_component_category_id_foreign` FOREIGN KEY (`component_category_id`) REFERENCES `component_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO components VALUES("3","Orange","piece","1634117157-404-img.jpg","2","1.2","0.04","0.3","0.01","40","4","2","0","2","2021-10-13 09:25:57","2021-10-13 09:25:57");
INSERT INTO components VALUES("4","Cucumber","piece","1634117248-404-img.jpg","1","0.8","0.03","0.3","0","20","8","3","0","3","2021-10-13 09:27:28","2021-10-13 09:27:28");





CREATE TABLE `cuisines` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cuisines VALUES("1","Moroccan","2021-10-13 08:11:05","2021-10-13 08:11:05");
INSERT INTO cuisines VALUES("2","Syrian","2021-10-13 08:11:05","2021-10-13 08:11:05");
INSERT INTO cuisines VALUES("3","Sudanese","2021-10-13 08:11:05","2021-10-13 08:11:05");
INSERT INTO cuisines VALUES("4","Algerian","2021-10-13 08:11:05","2021-10-13 08:11:05");
INSERT INTO cuisines VALUES("5","American","2021-10-13 08:11:05","2021-10-13 08:11:05");





CREATE TABLE `customer_custom_package_meal_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cp_meals_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_custom_package_meal_components_cp_meals_id_foreign` (`cp_meals_id`),
  KEY `customer_custom_package_meal_components_component_id_foreign` (`component_id`),
  CONSTRAINT `customer_custom_package_meal_components_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`),
  CONSTRAINT `customer_custom_package_meal_components_cp_meals_id_foreign` FOREIGN KEY (`cp_meals_id`) REFERENCES `customer_custom_package_meals` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `customer_custom_package_meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `meal_type_id` bigint(20) unsigned NOT NULL,
  `cals` double DEFAULT NULL,
  `proteins` double DEFAULT NULL,
  `carbs` double DEFAULT NULL,
  `fats` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_custom_package_meals_customer_id_foreign` (`customer_id`),
  KEY `customer_custom_package_meals_meal_type_id_foreign` (`meal_type_id`),
  CONSTRAINT `customer_custom_package_meals_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `customer_custom_package_meals_meal_type_id_foreign` FOREIGN KEY (`meal_type_id`) REFERENCES `meal_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `customer_custom_packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `cals` double DEFAULT NULL,
  `proteins` double DEFAULT NULL,
  `carbs` double DEFAULT NULL,
  `fats` double DEFAULT NULL,
  `marcos_divide` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_custom_packages_customer_id_foreign` (`customer_id`),
  CONSTRAINT `customer_custom_packages_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `customer_deliveries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `driver_id` bigint(20) unsigned DEFAULT NULL,
  `company_delivery_id` bigint(20) unsigned DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_deliveries_customer_id_foreign` (`customer_id`),
  KEY `customer_deliveries_driver_id_foreign` (`driver_id`),
  KEY `customer_deliveries_company_delivery_id_foreign` (`company_delivery_id`),
  CONSTRAINT `customer_deliveries_company_delivery_id_foreign` FOREIGN KEY (`company_delivery_id`) REFERENCES `delivery_companies` (`id`),
  CONSTRAINT `customer_deliveries_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `customer_deliveries_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_deliveries VALUES("1","1","","","2021-10-14","ready","2021-10-13 09:41:17","2021-10-14 06:51:04");
INSERT INTO customer_deliveries VALUES("2","1","","","2021-10-17","not delivered","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_deliveries VALUES("3","1","","","2021-10-18","not delivered","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_deliveries VALUES("4","1","","","2021-10-20","not delivered","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_deliveries VALUES("5","1","","","2021-10-21","not delivered","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_deliveries VALUES("6","1","","","2021-10-23","not delivered","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_deliveries VALUES("7","1","","","2021-10-24","not delivered","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_deliveries VALUES("8","1","","","2021-10-25","not delivered","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_deliveries VALUES("9","1","","","2021-10-27","not delivered","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_deliveries VALUES("10","1","","","2021-10-28","not delivered","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_deliveries VALUES("11","1","","","2021-10-30","not delivered","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_deliveries VALUES("12","1","","","2021-10-31","not delivered","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_deliveries VALUES("13","1","","","2021-11-01","not delivered","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_deliveries VALUES("14","1","","","2021-11-03","not delivered","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_deliveries VALUES("15","1","","","2021-11-04","not delivered","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_deliveries VALUES("16","1","","","2021-11-06","not delivered","2021-10-13 09:41:22","2021-10-13 09:41:22");





CREATE TABLE `customer_excludes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_excludes_customer_id_foreign` (`customer_id`),
  KEY `customer_excludes_component_id_foreign` (`component_id`),
  CONSTRAINT `customer_excludes_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`),
  CONSTRAINT `customer_excludes_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_excludes VALUES("3","1","4","","");
INSERT INTO customer_excludes VALUES("4","1","3","","");





CREATE TABLE `customer_feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(10) unsigned DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_feedback_customer_id_foreign` (`customer_id`),
  CONSTRAINT `customer_feedback_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `customer_meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `meal_type_id` bigint(20) unsigned DEFAULT NULL,
  `package_plan_meal_id` bigint(20) unsigned DEFAULT NULL,
  `chif_id` bigint(20) unsigned DEFAULT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_meals_customer_id_foreign` (`customer_id`),
  KEY `customer_meals_meal_type_id_foreign` (`meal_type_id`),
  KEY `customer_meals_package_plan_meal_id_foreign` (`package_plan_meal_id`),
  KEY `customer_meals_chif_id_foreign` (`chif_id`),
  CONSTRAINT `customer_meals_chif_id_foreign` FOREIGN KEY (`chif_id`) REFERENCES `chifs` (`id`),
  CONSTRAINT `customer_meals_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `customer_meals_meal_type_id_foreign` FOREIGN KEY (`meal_type_id`) REFERENCES `meal_types` (`id`),
  CONSTRAINT `customer_meals_package_plan_meal_id_foreign` FOREIGN KEY (`package_plan_meal_id`) REFERENCES `package_plan_meals` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_meals VALUES("1","1","2","2","","2021-10-14","not started","2021-10-13 09:41:17","2021-10-13 09:41:17");
INSERT INTO customer_meals VALUES("2","1","2","","","2021-10-16","not started","2021-10-13 09:41:17","2021-10-13 09:41:17");
INSERT INTO customer_meals VALUES("3","1","3","","","2021-10-16","not started","2021-10-13 09:41:17","2021-10-13 09:41:17");
INSERT INTO customer_meals VALUES("4","1","5","","","2021-10-16","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("5","1","1","","","2021-10-17","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("6","1","2","","","2021-10-17","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("7","1","3","","","2021-10-17","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("8","1","5","","","2021-10-17","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("9","1","1","1","","2021-10-18","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("10","1","2","2","","2021-10-18","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("11","1","3","","","2021-10-18","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("12","1","5","","","2021-10-18","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("13","1","1","","","2021-10-20","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("14","1","2","","","2021-10-20","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("15","1","3","","","2021-10-20","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("16","1","5","","","2021-10-20","not started","2021-10-13 09:41:18","2021-10-13 09:41:18");
INSERT INTO customer_meals VALUES("17","1","1","","","2021-10-21","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("18","1","2","","","2021-10-21","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("19","1","3","","","2021-10-21","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("20","1","5","","","2021-10-21","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("21","1","1","","","2021-10-23","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("22","1","2","","","2021-10-23","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("23","1","3","","","2021-10-23","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("24","1","5","","","2021-10-23","not started","2021-10-13 09:41:19","2021-10-13 09:41:19");
INSERT INTO customer_meals VALUES("25","1","1","","","2021-10-24","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("26","1","2","","","2021-10-24","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("27","1","3","","","2021-10-24","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("28","1","5","","","2021-10-24","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("29","1","1","","","2021-10-25","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("30","1","2","","","2021-10-25","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("31","1","3","","","2021-10-25","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("32","1","5","","","2021-10-25","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("33","1","1","","","2021-10-27","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("34","1","2","","","2021-10-27","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("35","1","3","","","2021-10-27","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("36","1","5","","","2021-10-27","not started","2021-10-13 09:41:20","2021-10-13 09:41:20");
INSERT INTO customer_meals VALUES("37","1","1","","","2021-10-28","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("38","1","2","","","2021-10-28","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("39","1","3","","","2021-10-28","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("40","1","5","","","2021-10-28","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("41","1","1","","","2021-10-30","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("42","1","2","","","2021-10-30","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("43","1","3","","","2021-10-30","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("44","1","5","","","2021-10-30","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("45","1","1","","","2021-10-31","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("46","1","2","","","2021-10-31","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("47","1","3","","","2021-10-31","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("48","1","5","","","2021-10-31","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("49","1","1","","","2021-11-01","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("50","1","2","","","2021-11-01","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("51","1","3","","","2021-11-01","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("52","1","5","","","2021-11-01","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("53","1","1","","","2021-11-03","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("54","1","2","","","2021-11-03","not started","2021-10-13 09:41:21","2021-10-13 09:41:21");
INSERT INTO customer_meals VALUES("55","1","3","","","2021-11-03","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("56","1","5","","","2021-11-03","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("57","1","1","","","2021-11-04","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("58","1","2","","","2021-11-04","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("59","1","3","","","2021-11-04","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("60","1","5","","","2021-11-04","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("61","1","1","","","2021-11-06","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("62","1","2","","","2021-11-06","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("63","1","3","","","2021-11-06","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");
INSERT INTO customer_meals VALUES("64","1","5","","","2021-11-06","not started","2021-10-13 09:41:22","2021-10-13 09:41:22");





CREATE TABLE `customer_payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `card_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_on_delivery` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_transfer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_payments_customer_id_foreign` (`customer_id`),
  CONSTRAINT `customer_payments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_payments VALUES("1","1","12888","555","2021-10-13","","","","2021-10-13 09:41:17","2021-10-13 09:41:17");





CREATE TABLE `customer_subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `package_id` bigint(20) unsigned NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_subscriptions_customer_id_foreign` (`customer_id`),
  KEY `customer_subscriptions_package_id_foreign` (`package_id`),
  CONSTRAINT `customer_subscriptions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `customer_subscriptions_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_subscriptions VALUES("1","1","1","2021-10-15","","2021-10-13 09:41:17","2021-10-13 09:41:17");





CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `height` double(15,8) DEFAULT NULL,
  `weight` double(15,8) DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flat_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cutlery` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_collection` double(15,8) DEFAULT NULL,
  `delivery_days` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) unsigned NOT NULL,
  `district_id` bigint(20) unsigned NOT NULL,
  `package_id` bigint(20) unsigned NOT NULL,
  `delivery_time_id` bigint(20) unsigned DEFAULT NULL,
  `linked_customer` bigint(20) unsigned DEFAULT NULL,
  `manager_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customers_city_id_foreign` (`city_id`),
  KEY `customers_district_id_foreign` (`district_id`),
  KEY `customers_package_id_foreign` (`package_id`),
  KEY `customers_delivery_time_id_foreign` (`delivery_time_id`),
  KEY `customers_linked_customer_foreign` (`linked_customer`),
  KEY `customers_manager_id_foreign` (`manager_id`),
  CONSTRAINT `customers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  CONSTRAINT `customers_delivery_time_id_foreign` FOREIGN KEY (`delivery_time_id`) REFERENCES `delivery_times` (`id`),
  CONSTRAINT `customers_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  CONSTRAINT `customers_linked_customer_foreign` FOREIGN KEY (`linked_customer`) REFERENCES `customers` (`id`),
  CONSTRAINT `customers_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`),
  CONSTRAINT `customers_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customers VALUES("1","Aymen","Najm","971 87 7721 21","female","2021-10-13","12.00000000","79.00000000","Light Exercises 1-3 days/week","aymoon@gmail.com","$2y$10$MwM.vBOipbVYdQ8FTdq4Mu36v8v.2mHLnsylhuacen06uCJAHxtOm","Lorem 18 West","12","33","1","","2021-11-06","","on","","","","","2","158","1","1","","","2021-10-13 09:41:17","2021-10-13 09:41:17");





CREATE TABLE `delivery_companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `delivery_companies_city_id_foreign` (`city_id`),
  CONSTRAINT `delivery_companies_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `delivery_company_districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_company_id` bigint(20) unsigned NOT NULL,
  `district_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `delivery_company_districts_delivery_company_id_foreign` (`delivery_company_id`),
  KEY `delivery_company_districts_district_id_foreign` (`district_id`),
  CONSTRAINT `delivery_company_districts_delivery_company_id_foreign` FOREIGN KEY (`delivery_company_id`) REFERENCES `delivery_companies` (`id`),
  CONSTRAINT `delivery_company_districts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `delivery_times` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `timing` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO delivery_times VALUES("1","00:00 - 20:00","2021-10-13 09:49:23","2021-10-13 09:49:23");





CREATE TABLE `districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `districts_city_id_foreign` (`city_id`),
  CONSTRAINT `districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=367 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO districts VALUES("1","Dubai Hills","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("2","Design District","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("3","BurJuma","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("4","Deira Duba","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("5","Sheikh Zayed Roa","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("6","World Trade Center","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("7","Liwan","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("8","Lifestyle City","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("9","Arabian Ranches 2","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("10","Layan","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("11","Abu Hail","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("12","Academic City","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("13","Al Badaa","1","2021-10-13 08:10:39","2021-10-13 08:10:39");
INSERT INTO districts VALUES("14","Al Baraha","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("15","Al Barari","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("16","Al Barsha 1","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("17","Al Barsha 2","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("18","Al Barsha 3","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("19","Barsha Heights","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("20","Al Barsha South ","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("21","Al Furjan","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("22","Al Garhoud","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("23","Al Hudaiba","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("24","Al Jaddaf","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("25","Al Jafiliya","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("26","Al Karama","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("27","Al Khabisi","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("28","Al Khawaneej 1","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("29","Al Khawaneej 2","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("30","Al Mamzar","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("31","Al Manara","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("32","Al Mankhool","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("33","Al Mizhar 1","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("34","Al Mizhar 2","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("35","Al Muntazah Complex","1","2021-10-13 08:10:40","2021-10-13 08:10:40");
INSERT INTO districts VALUES("36","Al Murar","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("37","Al Nahda 1","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("38","Al Nahda 2","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("39","Al Quoz 1","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("40","Al Quoz 2","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("41","Al Quoz 3","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("42","Al Quoz 4","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("43","Al Qusais 1","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("44","Al Qusais 2","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("45","Al Raffa","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("46","Al Rashidiya","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("47","Al Rigga","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("48","Al Safa","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("49","Al Safouh 1","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("50","Al Safouh 2","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("51","Al Satwa","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("52","Al Twar 1","1","2021-10-13 08:10:41","2021-10-13 08:10:41");
INSERT INTO districts VALUES("53","Al Waha","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("54","Al Waheda","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("55","Al Warqa 1","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("56","Al Warqa 2","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("57","Al Warqa 3","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("58","Al Warqa 4","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("59","Al Wasl","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("60","Arabian Ranches","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("61","Arjan Dubailand","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("62","Bluewaters Island","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("63","Business Bay","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("64","City of Arabia","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("65","Damac Hills","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("66","Damac Hills Estate","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("67","Discovery Gardens","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("68","Downtown","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("69","Dubai Festival City","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("70","Dubai Healthcare City","1","2021-10-13 08:10:42","2021-10-13 08:10:42");
INSERT INTO districts VALUES("71","DIFC","1","2021-10-13 08:10:43","2021-10-13 08:10:43");
INSERT INTO districts VALUES("72","Internet City","1","2021-10-13 08:10:43","2021-10-13 08:10:43");
INSERT INTO districts VALUES("73","Investment park","1","2021-10-13 08:10:43","2021-10-13 08:10:43");
INSERT INTO districts VALUES("74","Knowledge Village","1","2021-10-13 08:10:43","2021-10-13 08:10:43");
INSERT INTO districts VALUES("75","Marina","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("76","Media City","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("77","Studio City","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("78","Emirates Hills 1","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("79","Emirates Hills 2","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("80","Falcon City","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("81","Hayat Townhouses","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("82","Hor Al Anz","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("83","IBN Battuta","1","2021-10-13 08:10:44","2021-10-13 08:10:44");
INSERT INTO districts VALUES("84","IMPZ","1","2021-10-13 08:10:45","2021-10-13 08:10:45");
INSERT INTO districts VALUES("85","International City","1","2021-10-13 08:10:45","2021-10-13 08:10:45");
INSERT INTO districts VALUES("86","Jebel Ali Village","1","2021-10-13 08:10:45","2021-10-13 08:10:45");
INSERT INTO districts VALUES("87","Jumeirah 1","1","2021-10-13 08:10:45","2021-10-13 08:10:45");
INSERT INTO districts VALUES("88","Jumeirah 2","1","2021-10-13 08:10:45","2021-10-13 08:10:45");
INSERT INTO districts VALUES("89","Jumeirah 3","1","2021-10-13 08:10:45","2021-10-13 08:10:45");
INSERT INTO districts VALUES("90","JBR","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("91","Jumeirah Heights","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("92","Jumeirah Island","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("93","JLT","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("94","Jumeirah Park","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("95","JVC","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("96","JVT","1","2021-10-13 08:10:46","2021-10-13 08:10:46");
INSERT INTO districts VALUES("97","Majan","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("98","Meadows","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("99","Meydan","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("100","Mira","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("101","Mirdif","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("102","Motor City","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("103","Mudon","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("104","Muhaisanah 1","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("105","Muhaisanah 2","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("106","Muhaisanah 3","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("107","Muhaisanah 4","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("108","Muteena","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("109","Nad Al Hammar","1","2021-10-13 08:10:47","2021-10-13 08:10:47");
INSERT INTO districts VALUES("110","Nadd Al Sheba","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("111","Naif","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("112","Nshama Town Square","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("113","Oud Al Muteena","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("114","Oud Metha","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("115","Palm Jumeirah","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("116","Ras Al Khor","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("117","Remraam","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("118","Silicon Oasis","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("119","Sport City","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("120","Springs","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("121","Tecom","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("122","The Gardens","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("123","The Greens","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("124","The Lakes","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("125","The Sustainable City","1","2021-10-13 08:10:48","2021-10-13 08:10:48");
INSERT INTO districts VALUES("126","The Villa ","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("127","Umm Al Sheif","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("128","Umm Hurair","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("129","Umm Ramool","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("130","Umm Suqeim 1","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("131","Warsan","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("132","Zaabeel","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("133","City Walk","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("134","Al Twar 2","1","2021-10-13 08:10:49","2021-10-13 08:10:49");
INSERT INTO districts VALUES("135","Al Twar 3","1","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("136","Umm Suqeim 2","1","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("137","Umm Suqeim 3","1","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("138","Living Legends","1","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("139","Nad Al Shamma","1","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("140","OTHER","1","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("141","Al Aman","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("142","Al Bahya ","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("143","Al Bandar","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("144","Al Bateen","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("145","Al Dana","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("146","Al Dhafrah","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("147","Al Etihad","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("148","Al Falah","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("149","Al Ghadeer","2","2021-10-13 08:10:50","2021-10-13 08:10:50");
INSERT INTO districts VALUES("150","Al Hisn","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("151","Al Kharamah","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("152","Al Mannal","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("153","Al Maqta","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("154","Al Maryah Island","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("155","Al Muneera","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("156","Al Muntazah","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("157","Al Muroor","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("158","Al Musalla","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("159","Al Mushrif","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("160","Al Raha","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("161","Al Raha Gardens","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("162","Al Rahba","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("163","Al Rayhan","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("164","Al Reef","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("165","Al Reem Island","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("166","Al Rowdah","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("167","Al Saadah","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("168","Al Saadiyat","2","2021-10-13 08:10:51","2021-10-13 08:10:51");
INSERT INTO districts VALUES("169","Al Samha","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("170","Al Shahama","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("171","Al Shamkhah","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("172","Al Wahda","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("173","Al Zaab","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("174","Al Zahiyah","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("175","Al Zahraa","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("176","Al Zeina","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("177","Baniyas","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("178","Bloom Gardens","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("179","Eastern Mangrove","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("180","Embassies District","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("181","Hills Abu Dhabi","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("182","Khalifa City","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("183","Khalifa City A","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("184","Khalifa City B","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("185","Madinat Zayed","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("186","Mangrove Village","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("187","Masdar City","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("188","Ministries Area","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("189","Mohamed Bin Zayed City","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("190","Rowdhat Abu Dhabi","2","2021-10-13 08:10:52","2021-10-13 08:10:52");
INSERT INTO districts VALUES("191","Saadiyat Island","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("192","Yas Island","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("193","Zayed Sport City","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("194","Zayed University","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("195","Jazeerat Al Reem","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("196","Khalidiya Village","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("197","Khalidiyah","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("198","Hadbat Al Zafaranah","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("199","Al Ras Al Akhdar","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("200","Al Marina","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("201","Al Kasir","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("202","OTHER","2","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("203","Al Abar","3","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("204","Al Azra","3","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("205","Al Bu Daniq","3","2021-10-13 08:10:53","2021-10-13 08:10:53");
INSERT INTO districts VALUES("206","Al Darari","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("207","Al Falaj","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("208","Al Fayha","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("209","Al Fisht","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("210","Al Ghafia","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("211","Al Gharayen","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("212","Al Gharb","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("213","Al Ghubaiba","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("214","Al Goaz","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("215","Al Hazannah","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("216","Al Heerah Suburb","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("217","Al Jazzat","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("218","Al Jubail","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("219","Al Jurainah 1","3","2021-10-13 08:10:54","2021-10-13 08:10:54");
INSERT INTO districts VALUES("220","Al Jurainah 2","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("221","Al Jurainah 3","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("222","Al Jurainah 4","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("223","Al Khaledia Suburb","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("224","Al Khan","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("225","Al Khezamia","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("226","Al Layyeh Suburb","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("227","Al Mahatah","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("228","Al Majaz 1","3","2021-10-13 08:10:55","2021-10-13 08:10:55");
INSERT INTO districts VALUES("229","Al Majaz 2","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("230","Al Majaz 3","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("231","Al Manakh","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("232","Al Mansoura","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("233","Al Mareija","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("234","Al Mirqab","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("235","Al Mujarrah","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("236","Al Muntazah","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("237","Al Musalla","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("238","Al Nabaah","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("239","Al Nahda","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("240","Al Nasserya","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("241","Al Nekhailat","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("242","Al Noof 1","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("243","Al Noof 2","3","2021-10-13 08:10:56","2021-10-13 08:10:56");
INSERT INTO districts VALUES("244","Al Noof 3","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("245","Al Noof 4","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("246","Al Nud","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("247","Al Qadisiya","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("248","Al Qasba","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("249","Al Qylayaah","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("250","Al Ramaqiya","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("251","Al Ramla East","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("252","Al Ramtha ","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("253","Al Rifaah","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("254","Al Riqa Suburb","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("255","Al Sabkha","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("256","Al Seef","3","2021-10-13 08:10:57","2021-10-13 08:10:57");
INSERT INTO districts VALUES("257","Al Shahba","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("258","Al Sharq","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("259","Al Sweihat","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("260","Al Taawun","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("261","Al Talaa","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("262"," Al Turfa","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("263","Al Yarmook","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("264","Al Yash","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("265","Barashi","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("266","Dasman","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("267","Halwan","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("268","Halwan Suburb","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("269","Maysaloon ","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("270","Muwafjah","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("271","Muwailih","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("272","Qarayen 1","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("273","Qarayen 2","3","2021-10-13 08:10:58","2021-10-13 08:10:58");
INSERT INTO districts VALUES("274","Qarayen 3","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("275","Qarayen 4","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("276","Qarayen 5","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("277","Samnan ","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("278","Sharqan ","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("279","Al Rahmaniya","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("280","OTHER","3","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("281","City Center","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("282","Corniche","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("283","Marina","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("284","Pearl","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("285","Uptown","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("286","Al Bustan","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("287","Al Butain","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("288","Al Hamidiya","4","2021-10-13 08:10:59","2021-10-13 08:10:59");
INSERT INTO districts VALUES("289","Al Hamriya","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("290","Al Helio","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("291","Al Jurf","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("292","Al Muntazi","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("293","Al Mushairef","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("294","Al Naemiyah","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("295","Al Nakhil","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("296","Al Owan","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("297","Al Rashidiya","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("298","Al Rowdha","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("299","Al Rumailah","4","2021-10-13 08:11:00","2021-10-13 08:11:00");
INSERT INTO districts VALUES("300","Al Zahra","4","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("301","Al Zora","4","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("302","Emirates City","4","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("303","Emirates City Extension","4","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("304","Garden City","4","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("305","Green City","4","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("306","Al Aahad","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("307","Al Abrab","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("308","Al Dar Al Baida","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("309","Al Haditha","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("310"," Al Hawiyah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("311","Al Humrah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("312","Al Limghadar","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("313","Al Maidan","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("314","Al Raas","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("315","Al Ramlah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("316","Al Raudah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("317","Al Riqqah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("318","Al Salamah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("319","Fallaj Al Muwallah","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("320","Green Belt","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("321","Old Town Area","5","2021-10-13 08:11:01","2021-10-13 08:11:01");
INSERT INTO districts VALUES("322","Marina","5","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("323","Al Bateen","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("324","Al Dahma","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("325","Al Fouah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("326","Al Ghadeer","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("327","Al Hili","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("328","Al iqabiyyah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("329","Al Jahili","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("330","Al Jimi","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("331","Al Khalidiyah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("332","Al Khibeesi","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("333","Al Khrair","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("334","Al Maqam","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("335","Al Markhaniyyah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("336","Al Masoudi","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("337","Al Mnaizfah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("338","Al Mnaizlah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("339","Al Murabaa","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("340","Al Mutarid ","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("341","Al Mutawah","6","2021-10-13 08:11:02","2021-10-13 08:11:02");
INSERT INTO districts VALUES("342","Al Muwaiji","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("343","Al Niyadat","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("344","Al Owainah","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("345","Al Qattarah","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("346","Al Ruwaikah","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("347","Al Sallan","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("348","Al Sarouj","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("349","Al Tiwayyah","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("350","Al Ugdat","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("351","Asharij","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("352","Bid Bin Ammar","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("353","Falaj Hazzaa","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("354","Ghnaymah","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("355","Hai Khalid","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("356","Jizat wraigah","6","2021-10-13 08:11:03","2021-10-13 08:11:03");
INSERT INTO districts VALUES("357","Majlood","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("358","Mreifia","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("359","Nimah","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("360","Oud Bin Sag-Han","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("361","Shabhanet Asher","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("362","Shareat Al Muwaiji","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("363","Shiab Al Ashkhar","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("364","Shibat Al Wutah","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("365","Tawam","6","2021-10-13 08:11:04","2021-10-13 08:11:04");
INSERT INTO districts VALUES("366","OTHER","7","2021-10-13 08:11:04","2021-10-13 08:11:04");





CREATE TABLE `driver_districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `driver_id` bigint(20) unsigned NOT NULL,
  `district_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `driver_districts_driver_id_foreign` (`driver_id`),
  KEY `driver_districts_district_id_foreign` (`district_id`),
  CONSTRAINT `driver_districts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  CONSTRAINT `driver_districts_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `driver_times` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `driver_id` bigint(20) unsigned NOT NULL,
  `timing_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `driver_times_driver_id_foreign` (`driver_id`),
  KEY `driver_times_timing_id_foreign` (`timing_id`),
  CONSTRAINT `driver_times_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  CONSTRAINT `driver_times_timing_id_foreign` FOREIGN KEY (`timing_id`) REFERENCES `delivery_times` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `drivers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `drivers_city_id_foreign` (`city_id`),
  CONSTRAINT `drivers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `leads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `city_id` bigint(20) unsigned DEFAULT NULL,
  `district_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leads_user_id_foreign` (`user_id`),
  KEY `leads_city_id_foreign` (`city_id`),
  KEY `leads_district_id_foreign` (`district_id`),
  CONSTRAINT `leads_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  CONSTRAINT `leads_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  CONSTRAINT `leads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `margins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `operation` double(8,2) DEFAULT 0.00,
  `margin` double(8,2) DEFAULT 0.00,
  `packing` double(8,2) DEFAULT 0.00,
  `cold_drink` double(8,2) DEFAULT 0.00,
  `hot_drink` double(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO margins VALUES("1","3000.00","20.00","0.00","0.00","0.00","","2021-10-13 09:29:57");





CREATE TABLE `meal_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO meal_categories VALUES("1","Hot Drink","2021-10-13 08:11:05","2021-10-13 08:11:05");
INSERT INTO meal_categories VALUES("2","Cold Drink","2021-10-13 08:11:06","2021-10-13 08:11:06");
INSERT INTO meal_categories VALUES("3","Meal","2021-10-13 08:11:06","2021-10-13 08:11:06");





CREATE TABLE `meal_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `meal_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meal_components_meal_id_foreign` (`meal_id`),
  KEY `meal_components_component_id_foreign` (`component_id`),
  CONSTRAINT `meal_components_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE,
  CONSTRAINT `meal_components_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `meal_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO meal_types VALUES("1","Breakfast","2021-10-13 08:11:06","2021-10-13 08:11:06");
INSERT INTO meal_types VALUES("2","Lunch","2021-10-13 08:11:06","2021-10-13 08:11:06");
INSERT INTO meal_types VALUES("3","Dinner","2021-10-13 08:11:06","2021-10-13 08:11:06");
INSERT INTO meal_types VALUES("4","Snacks","2021-10-13 08:11:06","2021-10-13 08:11:06");
INSERT INTO meal_types VALUES("5","Pre-Workout","2021-10-13 08:11:06","2021-10-13 08:11:06");
INSERT INTO meal_types VALUES("6","Post-Workout","2021-10-13 08:11:06","2021-10-13 08:11:06");





CREATE TABLE `meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gluten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dairy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_category_id` bigint(20) unsigned DEFAULT NULL,
  `cuisine_id` bigint(20) unsigned DEFAULT NULL,
  `sauce_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meals_meal_category_id_foreign` (`meal_category_id`),
  KEY `meals_cuisine_id_foreign` (`cuisine_id`),
  KEY `meals_sauce_id_foreign` (`sauce_id`),
  CONSTRAINT `meals_cuisine_id_foreign` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisines` (`id`),
  CONSTRAINT `meals_meal_category_id_foreign` FOREIGN KEY (`meal_category_id`) REFERENCES `meal_categories` (`id`),
  CONSTRAINT `meals_sauce_id_foreign` FOREIGN KEY (`sauce_id`) REFERENCES `sauces` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO meals VALUES("1","Orange Mix","Cold Kitchen","1634117518-404-img.jpg","","","","1,2,4,5","3","2","","2021-10-13 09:31:58","2021-10-13 09:31:58");





CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO migrations VALUES("1","2014_10_12_000000_create_users_table","1");
INSERT INTO migrations VALUES("2","2014_10_12_100000_create_password_resets_table","1");
INSERT INTO migrations VALUES("3","2019_08_19_000000_create_failed_jobs_table","1");
INSERT INTO migrations VALUES("4","2021_09_21_104807_create_cities_table","1");
INSERT INTO migrations VALUES("5","2021_09_21_104858_create_districts_table","1");
INSERT INTO migrations VALUES("6","2021_09_21_105347_create_cuisines_table","1");
INSERT INTO migrations VALUES("7","2021_09_21_105459_create_meal_types_table","1");
INSERT INTO migrations VALUES("8","2021_09_21_105531_create_meal_categories_table","1");
INSERT INTO migrations VALUES("9","2021_09_21_111722_create_component_categories_table","1");
INSERT INTO migrations VALUES("10","2021_09_21_111740_create_components_table","1");
INSERT INTO migrations VALUES("11","2021_09_21_112527_create_sauces_table","1");
INSERT INTO migrations VALUES("12","2021_09_21_112548_create_sauce_components_table","1");
INSERT INTO migrations VALUES("13","2021_09_21_113939_create_meals_table","1");
INSERT INTO migrations VALUES("14","2021_09_21_114049_create_meal_components_table","1");
INSERT INTO migrations VALUES("15","2021_09_21_114946_create_delivery_times_table","1");
INSERT INTO migrations VALUES("16","2021_09_21_121248_create_packages_table","1");
INSERT INTO migrations VALUES("17","2021_09_21_121438_create_package_meals_table","1");
INSERT INTO migrations VALUES("18","2021_09_21_121504_create_package_meal_components_table","1");
INSERT INTO migrations VALUES("19","2021_09_21_122151_create_package_plans_table","1");
INSERT INTO migrations VALUES("20","2021_09_21_122214_create_package_plan_meals_table","1");
INSERT INTO migrations VALUES("21","2021_09_21_143158_create_restaurant_meal_plans_table","1");
INSERT INTO migrations VALUES("22","2021_09_21_143510_create_customers_table","1");
INSERT INTO migrations VALUES("23","2021_09_21_144816_create_chifs_table","1");
INSERT INTO migrations VALUES("24","2021_09_21_144817_create_customer_meals_table","1");
INSERT INTO migrations VALUES("25","2021_09_21_145141_create_customer_custom_packages_table","1");
INSERT INTO migrations VALUES("26","2021_09_21_145200_create_customer_custom_package_meals_table","1");
INSERT INTO migrations VALUES("27","2021_09_21_145224_create_customer_custom_package_meal_components_table","1");
INSERT INTO migrations VALUES("28","2021_09_21_162508_create_drivers_table","1");
INSERT INTO migrations VALUES("29","2021_09_21_162808_create_driver_times_table","1");
INSERT INTO migrations VALUES("30","2021_09_21_162827_create_driver_districts_table","1");
INSERT INTO migrations VALUES("31","2021_09_21_164645_create_customer_payments_table","1");
INSERT INTO migrations VALUES("32","2021_09_21_164709_create_customer_subscriptions_table","1");
INSERT INTO migrations VALUES("33","2021_09_21_164731_create_customer_feedback_table","1");
INSERT INTO migrations VALUES("34","2021_10_04_070525_create_suppliers_table","1");
INSERT INTO migrations VALUES("35","2021_10_04_070810_create_supplier_components_table","1");
INSERT INTO migrations VALUES("36","2021_10_04_081320_create_delivery_companies_table","1");
INSERT INTO migrations VALUES("37","2021_10_04_081551_create_delivery_company_districts_table","1");
INSERT INTO migrations VALUES("38","2021_10_04_084246_create_purchase_components_table","1");
INSERT INTO migrations VALUES("39","2021_10_04_084310_create_purchase_component_quantities_table","1");
INSERT INTO migrations VALUES("40","2021_10_06_163602_create_customer_excludes_table","1");
INSERT INTO migrations VALUES("41","2021_10_09_071810_create_leads_table","1");
INSERT INTO migrations VALUES("42","2021_10_09_102845_create_store_items_table","1");
INSERT INTO migrations VALUES("43","2021_10_09_102934_create_store_item_components_table","1");
INSERT INTO migrations VALUES("44","2021_10_10_115728_create_orders_table","1");
INSERT INTO migrations VALUES("45","2021_10_10_120224_create_order_meals_table","1");
INSERT INTO migrations VALUES("46","2021_10_11_115423_create_margins_table","1");
INSERT INTO migrations VALUES("47","2021_10_12_150758_create_onetime_orders_table","1");
INSERT INTO migrations VALUES("48","2021_10_12_151218_create_onetime_order_meals_table","1");
INSERT INTO migrations VALUES("49","2021_10_5_164412_create_customer_deliveries_table","1");





CREATE TABLE `onetime_order_meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `meal_id` bigint(20) unsigned NOT NULL,
  `package_id` bigint(20) unsigned DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `selling_price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `onetime_order_meals_order_id_foreign` (`order_id`),
  KEY `onetime_order_meals_meal_id_foreign` (`meal_id`),
  KEY `onetime_order_meals_package_id_foreign` (`package_id`),
  CONSTRAINT `onetime_order_meals_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `package_meals` (`id`),
  CONSTRAINT `onetime_order_meals_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `onetime_orders` (`id`),
  CONSTRAINT `onetime_order_meals_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `onetime_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `city_id` bigint(20) unsigned DEFAULT NULL,
  `district_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `onetime_orders_city_id_foreign` (`city_id`),
  KEY `onetime_orders_district_id_foreign` (`district_id`),
  CONSTRAINT `onetime_orders_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  CONSTRAINT `onetime_orders_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `order_meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `meal_id` bigint(20) unsigned NOT NULL,
  `package_id` bigint(20) unsigned DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `selling_price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_meals_order_id_foreign` (`order_id`),
  KEY `order_meals_meal_id_foreign` (`meal_id`),
  KEY `order_meals_package_id_foreign` (`package_id`),
  CONSTRAINT `order_meals_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `package_meals` (`id`),
  CONSTRAINT `order_meals_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `order_meals_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `table` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `package_meal_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `package_meals_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `package_meal_components_package_meals_id_foreign` (`package_meals_id`),
  KEY `package_meal_components_component_id_foreign` (`component_id`),
  CONSTRAINT `package_meal_components_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE,
  CONSTRAINT `package_meal_components_package_meals_id_foreign` FOREIGN KEY (`package_meals_id`) REFERENCES `package_meals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO package_meal_components VALUES("1","1","3","120","2021-10-13 09:31:58","2021-10-13 09:31:58");
INSERT INTO package_meal_components VALUES("2","1","4","70","2021-10-13 09:31:58","2021-10-13 09:31:58");
INSERT INTO package_meal_components VALUES("3","2","3","120","2021-10-13 09:31:59","2021-10-13 09:31:59");
INSERT INTO package_meal_components VALUES("4","2","4","70","2021-10-13 09:31:59","2021-10-13 09:31:59");
INSERT INTO package_meal_components VALUES("5","3","3","120","2021-10-13 09:31:59","2021-10-13 09:31:59");
INSERT INTO package_meal_components VALUES("6","3","4","70","2021-10-13 09:31:59","2021-10-13 09:31:59");
INSERT INTO package_meal_components VALUES("7","4","3","120","2021-10-13 09:32:00","2021-10-13 09:32:00");
INSERT INTO package_meal_components VALUES("8","4","4","70","2021-10-13 09:32:00","2021-10-13 09:32:00");





CREATE TABLE `package_meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` bigint(20) unsigned NOT NULL,
  `meal_id` bigint(20) unsigned NOT NULL,
  `meal_type_id` bigint(20) unsigned NOT NULL,
  `price` double(15,8) DEFAULT NULL,
  `cals` double(15,8) DEFAULT NULL,
  `proteins` double(15,8) DEFAULT NULL,
  `carbs` double(15,8) DEFAULT NULL,
  `fats` double(15,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `package_meals_package_id_foreign` (`package_id`),
  KEY `package_meals_meal_id_foreign` (`meal_id`),
  KEY `package_meals_meal_type_id_foreign` (`meal_type_id`),
  CONSTRAINT `package_meals_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `package_meals_meal_type_id_foreign` FOREIGN KEY (`meal_type_id`) REFERENCES `meal_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `package_meals_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO package_meals VALUES("1","1","1","1","6200.00000000","200.00000000","6.90000000","57.00000000","1.20000000","2021-10-13 09:31:58","2021-10-13 09:31:58");
INSERT INTO package_meals VALUES("2","1","1","2","6200.00000000","200.00000000","6.90000000","57.00000000","1.20000000","2021-10-13 09:31:58","2021-10-13 09:31:58");
INSERT INTO package_meals VALUES("3","1","1","4","6200.00000000","200.00000000","6.90000000","57.00000000","1.20000000","2021-10-13 09:31:59","2021-10-13 09:31:59");
INSERT INTO package_meals VALUES("4","1","1","5","6200.00000000","200.00000000","6.90000000","57.00000000","1.20000000","2021-10-13 09:32:00","2021-10-13 09:32:00");





CREATE TABLE `package_plan_meals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `package_plan_id` bigint(20) unsigned NOT NULL,
  `package_meal_id` bigint(20) unsigned NOT NULL,
  `meal_type_id` bigint(20) unsigned NOT NULL,
  `default` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `package_plan_meals_package_plan_id_foreign` (`package_plan_id`),
  KEY `package_plan_meals_package_meal_id_foreign` (`package_meal_id`),
  KEY `package_plan_meals_meal_type_id_foreign` (`meal_type_id`),
  CONSTRAINT `package_plan_meals_meal_type_id_foreign` FOREIGN KEY (`meal_type_id`) REFERENCES `meal_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `package_plan_meals_package_meal_id_foreign` FOREIGN KEY (`package_meal_id`) REFERENCES `package_meals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `package_plan_meals_package_plan_id_foreign` FOREIGN KEY (`package_plan_id`) REFERENCES `package_plans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO package_plan_meals VALUES("1","1","1","1","true","2021-10-13 09:34:27","2021-10-13 09:34:27");
INSERT INTO package_plan_meals VALUES("2","1","3","4","true","2021-10-13 09:34:28","2021-10-13 09:34:28");
INSERT INTO package_plan_meals VALUES("3","1","4","5","true","2021-10-13 09:34:28","2021-10-13 09:34:28");





CREATE TABLE `package_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `package_id` bigint(20) unsigned NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `package_plans_package_id_foreign` (`package_id`),
  CONSTRAINT `package_plans_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO package_plans VALUES("1","1","2021-10-14","2021-10-13 09:34:27","2021-10-13 09:34:27");





CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `cals` double DEFAULT NULL,
  `proteins` double DEFAULT NULL,
  `carbs` double DEFAULT NULL,
  `fats` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO packages VALUES("1","Mean","1634117338-404-img.jpg","Demo Description For Mean Package","24800","800","80","350","3","2021-10-13 09:28:58","2021-10-13 09:32:00");





CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `purchase_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_id` bigint(20) unsigned NOT NULL,
  `supplier_component_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `price` double(8,2) DEFAULT 1.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_components_purchase_id_foreign` (`purchase_id`),
  KEY `purchase_components_supplier_component_id_foreign` (`supplier_component_id`),
  CONSTRAINT `purchase_components_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`),
  CONSTRAINT `purchase_components_supplier_component_id_foreign` FOREIGN KEY (`supplier_component_id`) REFERENCES `supplier_components` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `purchases` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` bigint(20) unsigned NOT NULL,
  `expected_date` date DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `reference` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT 1.00,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_supplier_id_foreign` (`supplier_id`),
  CONSTRAINT `purchases_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `restaurant_meal_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_types` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `sauce_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sauce_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned NOT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sauce_components_sauce_id_foreign` (`sauce_id`),
  KEY `sauce_components_component_id_foreign` (`component_id`),
  CONSTRAINT `sauce_components_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sauce_components_sauce_id_foreign` FOREIGN KEY (`sauce_id`) REFERENCES `sauces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `sauces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO sauces VALUES("1","Chilli Hot","1634203208-404-img.jpg","14","2021-10-14 09:20:09","2021-10-14 09:20:09");





CREATE TABLE `store_item_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned NOT NULL,
  `unit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `store_item_components_item_id_foreign` (`item_id`),
  KEY `store_item_components_component_id_foreign` (`component_id`),
  CONSTRAINT `store_item_components_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`),
  CONSTRAINT `store_item_components_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `store_items` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `store_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cals` double(8,2) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `supplier_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` bigint(20) unsigned NOT NULL,
  `component_id` bigint(20) unsigned NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_components_supplier_id_foreign` (`supplier_id`),
  KEY `supplier_components_component_id_foreign` (`component_id`),
  CONSTRAINT `supplier_components_component_id_foreign` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE,
  CONSTRAINT `supplier_components_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("1","Health Road","971 55 502 2838","Admin","admin@healthroad.ae","$2y$10$Wm2KlTcAdmgyiEMWXXlQne5ejl6i3O5oOgzOQ3s5RrHSBlq97vDtS","2021-10-13 08:11:04","2021-10-13 08:11:04");



