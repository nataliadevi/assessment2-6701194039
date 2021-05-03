

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE 'daftarmhs' (
  'Semester' int(5) NOT NULL,
  'IPK' text(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--

INSERT INTO 'Semester' ('Semester','IPK') VALUES
(1, 'tes@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'Tes', 'pict/th.jpg'),
(2, 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'a', 'pict/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE 'daftarmhs'
  ADD PRIMARY KEY (`Semester`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE 'daftarmhs'
  MODIFY 'Semester' int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
