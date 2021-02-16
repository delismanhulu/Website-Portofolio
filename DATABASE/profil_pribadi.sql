-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2020 pada 17.38
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profil_pribadi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
`kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `gambar`) VALUES
(54, 'Berita', 'Manfaat website bagi perusahaan berdasarkan anisa marketing digital komputer', '<h1>1000 Kumpulan Puisi Cinta, Romantis, Sedih, Islami, Menyentuh Hati, Singkat</h1>\r\n\r\n<p><a href="https://moondoggiesmusic.com/puisi-cinta-romantis/" rel="bookmark" title="3:43 am">September 6, 2018</a>&nbsp;by&nbsp;<a href="https://moondoggiesmusic.com/author/saitama/" rel="author" title="View all posts by Arifin Saddoen">Arifin Saddoen</a></p>\r\n\r\n<p><strong>Puisi Cinta &ndash;&nbsp;</strong>Jatuh cinta memang berjuta &ndash; juta rasanya. Mulai dari senang, bahagia, suka, duka, sedih ataupun kecewa. Biasanya saat seseorang mulai mengalami getaran &ndash; getaran yang ada di dada, dia tentu saja merasa banyak hal yang dapat ia rasakan.</p>\r\n\r\n<p>Ya begitulah yang namanya jatuh cinta, ia bisa merubah manusia biasa menjadi pujangga cinta.</p>\r\n', '2018-10-27', 'Samakalian Hulu', 'Aktif', ''),
(55, 'fffffffff', 'fffffff', '<p>fffffffffff</p>\r\n', '2018-10-30', 'fff', 'fffff', 'gambar2.jpg'),
(56, 'Web_Site', 'CARA HOSTING WEB SITE DENGAN MUDAH DI NIAGA HOSTER', '<p style="text-align: justify;">Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p style="text-align: justify;">Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li style="text-align: justify;"><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li style="text-align: justify;"><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p style="text-align: justify;">Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n', '2018-11-20', 'admin', 'Aktif', 'website-647013_960_720.jpg'),
(57, 'TEST 123', 'MEDAN', '<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n\r\n<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n\r\n<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n\r\n<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n\r\n<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n\r\n<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n\r\n<p>Setelah selesai mendesain dan membuat website secara offline, langkah selanjutnya adalah mengupload website tersebut ke account hosting yang telah Anda dapatkan.&nbsp;Yang dinamakan dengan upload ini adalah proses memindahkan file-file dari komputer Anda ke server hosting sehingga nantinya bisa diakses oleh banyak orang di seluruh dunia.</p>\r\n\r\n<p>Untuk teknik upload website &nbsp;ada beberapa cara, berikut ini 2 cara yang umum dalam melakukan upload file-file website ke server hosting:</p>\r\n\r\n<ol>\r\n	<li><strong>Upload menggunakan File Manager (atau Legacy File Manager)</strong><br />\r\n	Keuntungan mengupload file menggunakan file manager adalah Anda tidak perlu menginstal apapun di server, cukup menggunakan browser dan mengakses CPanel saja. Sedangkan kelemahannya adalah folder tidak bisa ikut diupload, sehingga harus membuat folder secara manual.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Selain itu bisa dibilang bahwa proses upload dilakukan satu-persatu. File manager hanya bisa mengupload 15 file sekaligus dan harus berada di folder yang sama.</p>\r\n\r\n	<p>Untuk informasi detail, silahkan menuju halaman&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-file-website-dengan-file-manager.html">panduan upload menggunakan File Manager</a>.</p>\r\n	</li>\r\n	<li><strong>Upload menggunakan software FTP<br />\r\n	Upload file menggunakan software FTP cukup mudah dan menyenangkan. &nbsp;Selain bisa mengupload banyak file sekaligus (termasuk folder-foldernya), ketika koneksi terputus dan proses upload terhenti, Anda bisa melanjutkannya sewaktu-waktu. Selain itu upload menggunakan FTP lebih bisa diandalkan ketika harus mengupload file-file dalam ukuran besar.</strong>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Software-software FTP yang banyak digunakan antara lain adalah FileZilla dan CuteFTP, kami merekomendasikan menggunakan FileZilla karena gratis dan mudah digunakan.</strong></p>\r\n\r\n	<p>Silahkan membaca&nbsp;<a href="http://www.rumahweb.com/tutorial/cara-upload-web-dengan-ftp.html">panduan upload file menggunakan FTP</a>&nbsp;untuk informasi detailnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Secara keseluruhan, kami lebih menyarankan untuk mengupload file-file untuk website ke server menggunakan software FTP.</p>\r\n', '2019-10-18', 'delisman hulu', 'Aktif', 'colorful-windows-10-wide-wallpaper-49907-51589-hd-wallpapers.jpg-1024x640.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bulan`
--

CREATE TABLE IF NOT EXISTS `tbl_bulan` (
`kode` int(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `tbl_bulan`
--

INSERT INTO `tbl_bulan` (`kode`, `uraian`) VALUES
(34, 'https://www.youtube.com/watch?v=e-ZTUfWcw_g'),
(35, 'https://www.youtube.com/watch?v=TNh4NCJQjGY'),
(36, 'https://www.youtube.com/watch?v=e-ZTUfWcw_g'),
(37, 'https://www.youtube.com/watch?v=e-ZTUfWcw_g'),
(38, 'https://www.youtube.com/watch?v=e-ZTUfWcw_g');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file`
--

CREATE TABLE IF NOT EXISTS `tbl_file` (
`kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `data_file` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data untuk tabel `tbl_file`
--

INSERT INTO `tbl_file` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `data_file`) VALUES
(64, 'Tugas', '7 Cara Menggunakan Blog Untuk Meningkatkan Penjual', '<h3><strong>3. Meningkatkan SEO Secara Drastis</strong></h3>\r\n\r\n<p>Metode apa saja yang sudah Anda terapkan untuk&nbsp;<a href="https://blog.sribu.com/cara-blog-atau-website-muncul-di-halaman-pertama-google/?utm_source=blog&amp;utm_medium=blog_sribu&amp;utm_campaign=cara-meningkatkan-penjualan-bisnis-online-melalui-blog" rel="noopener" target="_blank">meningkatkan posisi website bisnis online pada mesin pencari</a>?</p>\r\n\r\n<p>Menurut beberapa pakar&nbsp;<em>digital marketing</em>,&nbsp;<em>blog&nbsp;</em>dapat digunakan untuk meningkatkan SEO&nbsp;<em>website&nbsp;</em>bisnis&nbsp;<em>online&nbsp;</em>secara drastis.</p>\r\n\r\n<p>Cara menggunakan&nbsp;<em>blog&nbsp;</em>untuk meningkatkan SEO dapat dilakukan dengan membuat konten yang memuat&nbsp;<em>keyword&nbsp;</em>relevan terhadap&nbsp;<em>website&nbsp;</em>bisnis.</p>\r\n\r\n<p>Selain itu&nbsp;<em>website&nbsp;</em>bisnis&nbsp;<em>online&nbsp;</em>juga bisa terus terupdate melalui konten-konten baru yang ditulis pada&nbsp;<em>blog&nbsp;</em>bisnis. Tentu saja Google akan lebih menyukai&nbsp;<em>website&nbsp;</em>yang terupdate secara berkala. Namun, jika terkendala untuk menulis konten baru secara berkala, Anda selalu bisa memanfaatkan&nbsp;<a href="https://www.sribulancer.com/id/packages?utm_source=blog&amp;utm_medium=blog_sribu&amp;utm_campaign=cara-meningkatkan-penjualan-bisnis-online-melalui-blog" rel="noopener" target="_blank">jasa penulisan artikel atau&nbsp;<em>copywriting</em></a>&nbsp;untuk membantu terciptanya konten yang menarik dan berkualitas.</p>\r\n\r\n<p><img alt="SEO" src="https://blog.sribu.com/wp-content/uploads/2016/07/SEO.jpg" style="height:343px; width:640px" /></p>\r\n\r\n<h5>Via&nbsp;<a href="http://www.ceozo.net/2016/06/meningkatkan-seo.html" rel="noopener" target="_blank">Ceozo</a></h5>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>4. Kepercayaan dan Profesionalitas</strong></h3>\r\n\r\n<p>Salah satu kendala terbesar dalam mengembangkan bisnis dan meningkatkan penjualan adalah karena orang tidak mempercayai produk Anda.</p>\r\n\r\n<p>Anda telah menciptakan bisnis&nbsp;<em>online&nbsp;</em>sesempurna mungkin. Produk yang dibuat pun memiliki kualitas terbaik. Namun apakah konsumen akan mengetahui dan mempercayainya?</p>\r\n\r\n<p>Untuk urusan kepercayaan dan profesionalitas,&nbsp;<em>blog&nbsp;</em>bisnis bisa menjadi solusinya.&nbsp;<a href="http://mebiso.com/10-cara-meningkatkan-kepercayaan-pelanggan-online/" rel="noopener" target="_blank">Cara menggunakan&nbsp;<em>blog&nbsp;</em>untuk meningkatkan kepercayaan customer bisnis&nbsp;<em>online</em></a>&nbsp;dapat dilakukan dengan menampilkan beberapa testimoni dari konsumen yang telah menggunakan produk Anda.</p>\r\n\r\n<p>Jika ditampilkan dengan baik, maka mereka akan menganggap bisnis&nbsp;<em>online&nbsp;</em>Anda sangat profesional.</p>\r\n', '2018-10-11', '222', '2222', 'website-647013_960_720.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_folio`
--

CREATE TABLE IF NOT EXISTS `tbl_folio` (
`kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tbl_folio`
--

INSERT INTO `tbl_folio` (`kode`, `nama`, `alamat`, `gambar`) VALUES
(12, 'PHOTO LAYANAN CODING', 'PHOTO LAYANAN CODING', 'dsc_0262.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
`kode` int(11) NOT NULL,
  `uraian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`kode`, `uraian`) VALUES
(4, 'Web Programming'),
(5, 'Dekstop'),
(6, 'Database Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal_solat`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal_solat` (
`kode` int(11) NOT NULL,
  `uraian` varchar(30) DEFAULT NULL,
  `jadwal` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tbl_jadwal_solat`
--

INSERT INTO `tbl_jadwal_solat` (`kode`, `uraian`, `jadwal`) VALUES
(20, 'OFFICE WORD 2009', '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE IF NOT EXISTS `tbl_profil` (
  `kode` int(11) NOT NULL DEFAULT '1',
  `sejarah` text,
  `jadwal` text,
  `visi_misi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`kode`, `sejarah`, `jadwal`, `visi_misi`) VALUES
(1, '<p>Update sendirilah di admin&nbsp;</p>\r\n\r\n<p>by : layanancoding.com</p>\r\n', '<p style="text-align:justify"><strong>Saya KULIIAH DI AMIK IMELDA MEDAN</strong></p>\r\n\r\n<p style="text-align:justify"><strong>ALUMNI 2018</strong></p>\r\n', '<p>Update sendirilah di admin&nbsp;</p>\r\n\r\n<p>by : layanancoding.com</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`kode` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`kode`, `user_name`, `password`, `nama`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Guswan Harahap'),
(5, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Delisman Hulu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_jadwal_solat`
--
ALTER TABLE `tbl_jadwal_solat`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_jadwal_solat`
--
ALTER TABLE `tbl_jadwal_solat`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
