CREATE VIEW top_authors AS
SELECT
    a.author_id,
    a.first_name,
    a.last_name,
    AVG(r.rating) AS average_rating
FROM
    authors a
JOIN
    author_book ab ON a.author_id = ab.author_id
JOIN
    books b ON ab.book_id = b.book_id
JOIN
    reviews r ON b.book_id = r.book_id
GROUP BY
    a.author_id, a.first_name, a.last_name
ORDER BY
    AVG(r.rating) DESC
LIMIT 5;
