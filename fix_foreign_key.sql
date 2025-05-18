-- Disable foreign key checks
SET FOREIGN_KEY_CHECKS = 0;

-- Drop the tables in the correct order
DROP TABLE IF EXISTS news_images;
DROP TABLE IF EXISTS news_posts;

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1; 