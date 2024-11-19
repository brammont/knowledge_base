CREATE DATABASE knowledge_base;
USE knowledge_base;
CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    description TEXT,
    answer TEXT NOT NULL
);