CREATE TABLE users (
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(255) UNIQUE,
	password VARCHAR(255) NOT NULL,
	first_name VARCHAR(100),
	last_name VARCHAR(100)
);
CREATE TABLE books (
	book_id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255),
	published_year INT,
	isbn VARCHAR(20),
	audio_path VARCHAR(255)
);
CREATE TABLE authors (
	author_id INT PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(100),
	last_name VARCHAR(100)
);
CREATE TABLE user_books (
	user_id INT,
	book_id INT,
	FOREIGN KEY (user_id) REFERENCES users(user_id),
	FOREIGN KEY (book_id) REFERENCES books(book_id)
);
CREATE TABLE book_authors (
	book_id INT,
	author_id INT,
	FOREIGN KEY (book_id) REFERENCES books(book_id),
	FOREIGN KEY (author_id) REFERENCES authors(author_id)
);
