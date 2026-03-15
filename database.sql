-- AI Lost & Found System Database

DROP DATABASE IF EXISTS lostfound;
CREATE DATABASE lostfound;

USE lostfound;

-- USERS TABLE

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
role VARCHAR(20) NOT NULL
);

-- DEFAULT USERS

INSERT INTO users (email,password,role) VALUES
('admin@niet.com','admin123','admin'),
('student@niet.com','student123','student');


-- LOST ITEMS TABLE

CREATE TABLE lost_items (

id INT AUTO_INCREMENT PRIMARY KEY,

title VARCHAR(255),

description TEXT,

location VARCHAR(255),

image VARCHAR(255),

email VARCHAR(255),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- FOUND ITEMS TABLE

CREATE TABLE found_items (

id INT AUTO_INCREMENT PRIMARY KEY,

title VARCHAR(255),

description TEXT,

location VARCHAR(255),

image VARCHAR(255),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- MATCHES TABLE

CREATE TABLE matches (

id INT AUTO_INCREMENT PRIMARY KEY,

lost_id INT,

found_id INT,

similarity FLOAT,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

FOREIGN KEY (lost_id) REFERENCES lost_items(id) ON DELETE CASCADE,

FOREIGN KEY (found_id) REFERENCES found_items(id) ON DELETE CASCADE

);
🛠 Import Kaise Karein

1️⃣ Open karein:

http://localhost/phpmyadmin

2️⃣ Click karein:

SQL

3️⃣ Poora code paste karein

4️⃣ Click karein:

GO
✔ Database Tables Ban Jayengi
lostfound
│
├── users
├── lost_items
├── found_items
└── matches
🔐 Default Login

Admin

admin@niet.com
admin123

Student

student@niet.com
student123
💡 Pro Tip
