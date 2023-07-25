CREATE TABLE authors (
    author_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL
);

CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    publication_year INT,
    isbn VARCHAR(13) NOT NULL,
    UNIQUE (isbn)
);

CREATE TABLE reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    rating INT,
    content TEXT,
    book_id INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books (book_id)
);

CREATE TABLE author_book (
    author_id INT NOT NULL,
    book_id INT NOT NULL,
    PRIMARY KEY (author_id, book_id),
    FOREIGN KEY (author_id) REFERENCES authors (author_id),
    FOREIGN KEY (book_id) REFERENCES books (book_id)
);

INSERT INTO authors (first_name, last_name)
VALUES
    ('John', 'Doe'),
    ('Jane', 'Smith'),
    ('Michael', 'Johnson'),
    ('Emily', 'Brown');
    
INSERT INTO books (title, publication_year, isbn)
VALUES
    ('Sample Book 1', 2022, '9781234567890'),
    ('Sample Book 2', 2019, '9780987654321'),
    ('Sample Book 3', 2020, '9785432167890'),
    ('Sample Book 4', 2018, '9789876543210');

INSERT INTO reviews (rating, content, book_id)
VALUES
    (8, 'Great book!', 1),
    (9, 'Highly recommended!', 1),
    (7, 'Enjoyable read.', 2),
    (10, 'One of my favorites!', 3),
    (6, 'Not bad.', 3),
    (9, 'Well-written.', 4),
    (8, 'Worth reading.', 4);

INSERT INTO author_book (author_id, book_id)
VALUES
    (1, 1),
    (1, 2),
    (2, 1),
    (3, 3),
    (3, 4),
    (4, 3),
    (4, 4);