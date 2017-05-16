CREATE TABLE users
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(255) NOT NULL,
	email VARCHAR(255) NULL,
	password VARCHAR(255) NOT NULL,
	created DATETIME,
	modified DATETIME
);

CREATE TABLE blocks
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(50),
	body TEXT,
	url TEXT,
	image TEXT,
	glyph	TEXT,
	created DATETIME,
	modified DATETIME,
);

CREATE TABLE entries 
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	block_id INT NOT NULL,
	title VARCHAR(50),
	body TEXT,
	url TEXT,
	image TEXT,
	glyph	TEXT,
	created DATETIME,
	modified DATETIME,
	FOREIGN KEY block_key (block_id) REFERENCES blocks(id)
);