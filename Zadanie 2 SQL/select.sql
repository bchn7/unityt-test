SELECT
    a.first_name,
    a.last_name,
    COUNT(ab.author_id) AS number_of_books
FROM
    authors a
LEFT JOIN
    author_book ab ON a.author_id = ab.author_id
GROUP BY
    a.author_id, a.first_name, a.last_name;
