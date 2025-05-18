-- Disable foreign key checks
SET FOREIGN_KEY_CHECKS = 0;

-- First drop the child table (news_images) that has the foreign key constraint
DROP TABLE IF EXISTS news_images;

-- Now it's safe to drop the parent table
DROP TABLE IF EXISTS news_posts;

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Let user know the operation completed
SELECT 'Tables dropped successfully' AS 'Result'; 