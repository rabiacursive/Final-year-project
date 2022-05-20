CREATE DATABASE IF NOT EXISTS beopari;

CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title_en VARCHAR(255) NOT NULL,
    title_pk VARCHAR(255) NOT NULL,
    description_en TEXT NULL,
    description_pk TEXT NULL,
    image TEXT NULL,
    status VARCHAR(100) NOT NULL,
    category VARCHAR(200) NOT NULL,
    price VARCHAR(100) NOT NULL,
    sellerID INT(6) NOT NULL,
    created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)






-- beopari
-- beopari1234
-- git@github.com:rabiacursive/Final-year-project.git