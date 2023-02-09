/*Exercise 1 - Let's join */

/* Query 1 */

SELECT *
FROM instruments
INNER JOIN instruments_in_band ON instruments_in_band.instrument_id = instruments.id
INNER JOIN bands ON instruments_in_band.band_id = bands.id
WHERE bands.name = 'Metallica';

/* Query 2 */
SELECT bands.name, count(instruments_in_band.instrument_id)
FROM bands
INNER JOIN instruments_in_band ON instruments_in_band.instrument_id = instruments.id
GROUP BY bands.name;