INSERT INTO books (book_id, title, published_year, isbn, audio_path) VALUES
(1, "Juan Salvador Gaviota", 1970, "8498721725", "lib/gaviota.txt"),
(2, "El peligroso caso de Donald Trump", 2017, "1250179459", "lib/trump.txt"),
(3, "La Iliada", 1489, NULL, "lib/iliada.txt");

INSERT INTO authors VALUES
(1, "Richard", "Bach"),
(2, "Bandy X.", "Lee"),
(3, "Homero", NULL);

INSERT INTO book_authors VALUES (1, 1), (2, 2), (3, 3);

INSERT INTO users VALUES
(1, "sebastian.ramirez4@upr.edu", "password", "Sebastián", "Ramírez");