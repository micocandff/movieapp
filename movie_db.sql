-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table movie_db.cache: ~0 rows (approximately)

-- Dumping data for table movie_db.cache_locks: ~0 rows (approximately)

-- Dumping data for table movie_db.failed_jobs: ~0 rows (approximately)

-- Dumping data for table movie_db.jobs: ~0 rows (approximately)

-- Dumping data for table movie_db.job_batches: ~0 rows (approximately)

-- Dumping data for table movie_db.migrations: ~4 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_05_27_041757_create_movies_table', 1);

-- Dumping data for table movie_db.movies: ~9 rows (approximately)
INSERT INTO `movies` (`id`, `title`, `director`, `summary`, `genres`, `created_at`, `updated_at`) VALUES
	(7, 'The Godfather', 'Francis Ford Coppola', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '["Crime", "Drama"]', NULL, NULL),
	(8, 'The Dark Knight', 'Christopher Nolan', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.', '["Action", "Crime", "Drama"]', NULL, NULL),
	(9, 'Pulp Fiction', 'Quentin Tarantino', 'The lives of two mob hitmen, a boxer, a gangster, and his wife intertwine in four tales of violence and redemption.', '["Crime", "Drama"]', NULL, NULL),
	(10, 'Schindler\'s List', 'Steven Spielberg', 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.', '["Biography", "Drama", "History"]', NULL, NULL),
	(11, 'The Lord of the Rings: The Return of the King', 'Peter Jackson', 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.', '["Action", "Adventure", "Drama"]', NULL, NULL),
	(12, 'Forrest Gump', 'Robert Zemeckis', 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other historical events unfold from the perspective of an Alabama man with an IQ of 75.', '["Drama", "Romance"]', NULL, NULL),
	(13, 'Inception', 'Christopher Nolan', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', '["Action", "Adventure", "Sci-Fi"]', NULL, NULL),
	(14, 'Fight Club', 'David Fincher', 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into something much, much more.', '["Drama"]', NULL, NULL),
	(15, 'The Matrix', 'Lana Wachowski, Lilly Wachowski', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', '["Action", "Sci-Fi"]', NULL, NULL);

-- Dumping data for table movie_db.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table movie_db.sessions: ~3 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('DvWKE6nRNmMA4RpO353HuPUwrKB9bsereM6olb0Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3dtWERtZWZWWXJ0NTFMSmlzWWxtb1NiRU1kbGNoQ3BXRHlLRlR0MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9tb3ZpZWFwcC50ZXN0L21vdmllcy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1716791842),
	('MuUiqzKuGJIlsPUMxWeU7qcq2YpLUG8SRgj08D0Q', NULL, '127.0.0.1', 'PostmanRuntime/7.28.4', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1pVUVRKRlo2ampOVmp0RkEyUzRDZHVpVWI0Y2c5dURScVM1bHBTNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9tb3ZpZWFwcC50ZXN0L21vdmllcy9zZWFyY2giO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1716791789),
	('uov7NkwkyCRLNgYyF1XoWVBpczcik6yQFGk15se8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2p0bHhpUzVUTkgxOFMyWlJTdVJjRzIzd0x1anVCcWVQMXcyUnhOaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716788839);

-- Dumping data for table movie_db.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
