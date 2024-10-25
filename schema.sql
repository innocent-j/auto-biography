CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    name_suffix VARCHAR(10),
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    age INT CHECK (age >= 0),
    address VARCHAR(255),
    image_profile VARCHAR(255) 
);

INSERT INTO users (`id`, `first_name`, `last_name`, `name_suffix`, `username`, `password`, `age`, `address`, `image_profile`)
VALUES (1, 'Rolly', 'Malhin', 'Jr.', 'junjun', 'pogi', 20, 'Limamaan Tambulig, Zamboanga Del Sur', 'gwapito.png' );
