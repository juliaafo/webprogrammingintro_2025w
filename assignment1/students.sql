CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    average FLOAT NOT NULL
);