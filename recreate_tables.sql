-- Disable foreign key checks for dropping tables
SET FOREIGN_KEY_CHECKS = 0;

-- Drop existing tables
DROP TABLE IF EXISTS news_images;
DROP TABLE IF EXISTS news_posts;

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Create news_posts table first
CREATE TABLE IF NOT EXISTS `news_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `excerpt` text DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  `date_published` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `author_id` (`author_id`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create news_images table after news_posts
CREATE TABLE IF NOT EXISTS `news_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT 1,
  `caption` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  CONSTRAINT `fk_news_images_article` FOREIGN KEY (`article_id`) REFERENCES `news_posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 