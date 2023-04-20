CREATE DATABASE database_name;

USE database_name;

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  post_content TEXT,
  post_title TEXT
);