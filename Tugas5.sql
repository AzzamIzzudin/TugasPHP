-- START

-- 1. Tulis Query untuk insert data ke dalam tabel actor
INSERT INTO actor (first_name, last_name, last_update) VALUES ('Joe', 'Taslim');

-- 2. Tulis Query untuk insert data untuk kolom title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost, last_update pada table film
INSERT INTO film (title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost) VALUES ('Avanger: Endgame', 'The Last Part of Marvel Avanger Series', '2020', 1, 6, 4.0, 25.99);

-- 3. Tulis Query untuk menampilkan first_name dan last_name dari tabel actor
SELECT first_name AS 'First Name', last_name AS 'Last Name' from actor;

-- 4. Tulis Query untuk menampilan nama film yang tidak berawalan huruf a pada tabel film
SELECT title FROM film WHERE title NOT LIKE "A%";

-- 5. Tulis Query untuk menampilkan amount tertinggi selama bulan juni 2005 pada tabel payment
SELECT MAX(amount) FROM payment WHERE payment_date BETWEEN '2005-1-1' AND '2005-12-31';

-- DONE