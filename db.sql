CREATE TABLE teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(13) NOT NULL,
    sid INT(10) NOT NULL,
    dept VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
);


SELECT `id`, `name`, `email`, `phone`, `rollno`, `class`, `password` FROM `students` WHERE 1