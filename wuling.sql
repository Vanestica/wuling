-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 08:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wuling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbarticle`
--

CREATE TABLE `tbarticle` (
  `ida` int(11) NOT NULL,
  `isi` text NOT NULL,
  `judul` varchar(150) NOT NULL,
  `thumbnail` text NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `tglubah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbarticle`
--

INSERT INTO `tbarticle` (`ida`, `isi`, `judul`, `thumbnail`, `tgl`, `tglubah`) VALUES
(32, '<p><em>Spoiler</em>&nbsp;merupakan salah satu komponen yang terpasang pada bagian eksterior mobil, meski kehadirannya ini sering diabaikan. Biasanya,&nbsp;<em>spoiler</em>&nbsp;terpasang di berbagai mobil sport hingga truk pengangkut berat. Tapi semakin ke sini,&nbsp;<em>spoiler</em>&nbsp;justru banyak ditemukan pada mobil-mobil penumpang.</p>\r\n\r\n<p>Ada yang memasang&nbsp;<em>spoiler</em>&nbsp;hanya demi mempercantik tampilan mobil, tapi tidak sedikit juga yang memanfaatkan&nbsp;<em>spoiler</em>&nbsp;agar mobil lebih mudah dikendalikan. Jadi, sebenarnya apa fungsi&nbsp;<em>spoiler</em>&nbsp;yang terpasang pada mobil, ya?</p>\r\n\r\n<p><em>Spoiler</em>&nbsp;bukanlah sekadar aksesori pada mobil.&nbsp;<em>Spoiler</em>&nbsp;merupakan bagian dari komponen aerodinamis mobil untuk mengurangi hambatan dan dapat mempengaruhi aerodinamika pada mobil yang Anda pakai.</p>\r\n\r\n<p><strong>Menjaga Keseimbangan Mobil</strong></p>\r\n\r\n<p><em>Spoiler</em>&nbsp;berfungsi menambah gaya tekan ke bawah pada mobil untuk mengurangi gaya angkat yang timbul akibat kecepatan tinggi. Gaya angkat yang terjadi pada mobil ini pasalnya mampu membuat mobil melayang dan tidak stabil saat melaju dalam kecepatan tinggi, sehingga menyebabkan pengemudi kehilangan kontrol. Sudah pasti berbahaya, bukan?</p>\r\n\r\n<p>Dengan demikian, saat mobil Anda memacu mobil dengan kencang, kemungkinan mobil melayang akan berkurang dengan adanya&nbsp;<em>spoiler</em>&nbsp;yang terpasang di bagian belakang mobil. Itulah fungsi paling penting dari&nbsp;<em>spoiler.</em></p>\r\n\r\n<p>Sementara, mobil-mobil sport berperforma tinggi sekaligus mobil balap biasanya memasang&nbsp;<em>spoiler</em>&nbsp;untuk mendapatkan keuntungan aerodinamis tersebut karena bisa menambah kecepatan.&nbsp; Sementara pemasangan&nbsp;<em>spoiler</em>&nbsp;pada mobil penumpang biasa ditujukan untuk faktor keamanan tersebut.</p>\r\n\r\n<p><strong>Menangkal Kotoran</strong></p>\r\n\r\n<p>Bukan hanya itu faktor keamanan saja,&nbsp;<em>spoiler</em>&nbsp;juga berfungsi untuk menangkal debu, pasir dan air hujan di kaca belakang akibat turbulensi udara. Jadi, ketika Anda sedang berkendara di daerah yang banyak debu, berpasir atau sedang hujan deras, maka&nbsp;<em>spoiler&nbsp;</em>bekerja untuk menangkal semua hal itu yang menerpa kaca belakang mobil Anda.</p>\r\n\r\n<p>Terlepas dari fungsi tersebut, sebetulnya tak semua mobil yang dijual di Indonesia dipasangkan&nbsp;<em>spoiler</em>. Tapi ada juga pabrikan yang memasangkan&nbsp;<em>spoiler</em>&nbsp;langsung pada mobil, agar para pemiliknya tak perlu kerepotan mencari di tempat aksesori.</p>\r\n\r\n<p>Wuling misalnya, yang sudah menyematkan&nbsp;<em>spoiler</em>&nbsp;pada Confero S ACT. Wuling memasangkan&nbsp;<em>spoiler</em>&nbsp;di bagian belakang atas dipadukan dengan&nbsp;<em>high mount stop lamp</em>&nbsp;berupa LED. Selain untuk faktor keamanan, pemasangan&nbsp;<em>spoiler</em>&nbsp;tersebut juga menambahkan kesan mewah pada Confero S ACT terlebih saat mobil sedang mengerem.</p>\r\n\r\n<p>Fitur keamanan Confero S ACT bukan hanya&nbsp;<em>spoiler</em>. Sebagai varian tertinggi dari model Confero, seri S ACT juga telah dibekali dengan fitur keamanan seperti ABS, EBD, hingga Tilt Steering. Satu hal yang unik dengan Confero S ACT ini, transmisinya ACT (Automatic Clutch Transmission) merupakan yang pertama di Indonesia. Jadi, mobil ini hanya memiliki dua pedal yakni rem dan gas, namun pergantian gigi tetap dilakukan secara manual.</p>\r\n\r\n<p>Itu dia fungsi&nbsp;<em>spoiler&nbsp;</em>yang selama ini terpasang di bagian belakang mobil Anda. Jadi, pastikan mobil Anda sudah memakainya supaya tetap aman selama berkendara di perjalanan, ya.</p>\r\n', 'Apa Sebenarnya Fungsi Spoiler pada Mobil?', 'Spoiler-manfaat-1000x667.png', 'Monday, 11 November 2019', 'Tuesday, 12 November 2019'),
(39, '<p><em>Tiga pemenang membawa pulang satu unit Almaz, Cortez CT, dan Confero S ACT</em></p>\r\n\r\n<p><strong>Jakarta</strong><strong>,&nbsp;</strong><strong>26 October&nbsp;</strong><strong>201</strong><strong>9</strong>&nbsp;&ndash; Wuling Motors (Wuling) hari ini resmi mengumumkan tiga pemenang program &lsquo;Drive &amp; Win&rsquo;. Periode pertama&nbsp;<em>test drive</em>&nbsp;berhadiah lini produk Wuling ini telah dimulai sejak 1 September 2019 hingga 15 Oktober 2019 dan telah diikuti oleh ribuan peserta dari berbagai kota di Indonesia. Setelah melalui proses pengundian, sebanyak 3 pemenang diumumkan yang terdiri atas 1 pemenang Confero S ACT, 1 pemenang Cortez CT tipe&nbsp;<em>Comfortable</em>&nbsp;CVT, dan 1 pemenang Almaz&nbsp;<em>Smart Enjoy</em>&nbsp;CVT 7-seater, pada kegiatan Super Wuling Experience Weekend di Gelora Bung Karno, Jakarta.</p>\r\n\r\n<p>&ldquo;Semangat &lsquo;Drive For A Better Life&rsquo; kami bawa dalam program ini dengan mengajak masyarakat untuk mencoba secara langsung produk Wuling serta berkesempatan untuk memenangkan mobil Wuling. Kami mengucapkan selamat kepada setiap pemenang dan terima kasih atas antusiasme masyarakat terhadap program ini, terlihat dari banyaknya peserta yang mendaftar di website&nbsp;<strong>driveandwin.wuling.id</strong>.&rdquo; tutur Zia Ul Rahman selaku&nbsp;<em>Marketing Strategy and Promotion Manager</em>&nbsp;Wuling Motors.</p>\r\n\r\n<p>Sebanyak 3 orang pemenang periode pertama Wuling &lsquo;Drive &amp; Win&rsquo; yang berhak membawa pulang lini produk Wuling terdiri dari Harianto yang berasal dari Bekasi merupakan yang beruntung memenangkan 1 unit Confero S ACT, sementara Elnawati dari kota Pontianak mendapatkan 1 unit Cortez CT&nbsp;<em>Comfortable</em>&nbsp;CVT, serta Suherman dari kota Jambi yang memperoleh 1 unit Almaz&nbsp;<em>Smart Enjoy</em>&nbsp;CVT 7-seater. Penyerahan hadiah secara simbolis dilakukan Zia Ul Rahman dari pihak Wuling Motors dan turut disaksikan perwakilan dari Kementrian Sosial, Dinas Sosial DKI Jakarta, Kepolisian Republik Indonesia, dan notaris.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk berpartisipasi pada program ini, peserta mendaftarkan diri melalui&nbsp;<em>website</em>&nbsp;<strong>driveandwin.wuling.id</strong>&nbsp;guna mendapatkan&nbsp;<em>unique&nbsp;</em><em>barcode</em>&nbsp;yang akan dikirimkan ke email setiap konsumen. Lalu, peserta dapat melakukan&nbsp;<em>test drive</em>&nbsp;atau pemesanan atau pembelian untuk semua tipe kendaraan Wuling dengan menunjukkan&nbsp;<em>unique&nbsp;</em><em>barcode</em>&nbsp;kepada&nbsp;<em>sales person</em>&nbsp;di diler Wuling untuk mendapatkan nomor undian. Pemenang hadiah utama produk Wuling akan diundi setiap akhir periodenya.</p>\r\n\r\n<p>Sebagai informasi tambahan pada tahap pertama Wuling &lsquo;Drive &amp; Win&rsquo; ini telah mencapai ribuan peserta yang berasal dari berbagai wilayah Indonesia telah mendaftar,&nbsp;<em>test drive</em>, hingga bertransaksi dalam program ini. Untuk periode keduanya sudah dibuka sejak 16 Oktober dan diundi pada akhir Januari 2020.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Masih ada kesempatan lain bagi peserta di periode pertama, karena nomor undian akan tetap berlaku di periode selanjutnya. Kami juga mengajak kepada masyarakat untuk berpartisipasi, mari kunjungi&nbsp;<strong>driveandwin.wuling.id&nbsp;</strong>dan diler terdekat untuk berkesempatan merasakan sensasi berkendara dengan Wuling serta memenangkan produk andalan kami,&rdquo; ajak Zia Ul Rahman.</p>\r\n\r\n<p>###</p>\r\n\r\n<p><strong>&nbsp;</strong><strong>Tentang Wuling Motors</strong></p>\r\n\r\n<p>PT SGMW Motor Indonesia (Wuling Motors) resmi berdiri di Indonesia pada Juli 2017. Komitmen jangka panjang perusahaan ditunjukkan melalui peresmian pabrik dan Supplier Park seluas 60 hektar di Cikarang, Jawa Barat. Produk pertama dari Wuling Motors, seri Confero yang diluncurkan pada Agustus 2017, telah mendapat penghargaan sebagai Indonesian Car of The Year (ICOTY) 2017 di kategori small MPV, ICOTY 2018 kategori Best Value for Money oleh Majalah Mobilmotor, serta Rookie Of The Year versi OTOMOTIF AWARD 2018. Kemudian, produk keduanya, Cortez yang didebut Februari 2018 meraih predikat Best Medium MPV di ICOTY 2018 oleh Majalah Mobilmotor dan Best of Medium MPV Gasoline versi OTOMOTIF AWARD 2019. Wuling Motors juga menghadirkan produk Light Commercial Vehicle (LCV) pertamanya melalui Formo yang diperkenalkan di November 2018. Produk ke-empat Wuling, Smart Technology SUV, Almaz, diluncurkan pada Februari 2019 dan telah meraih beragam penghargaan. Mulai dari Apresiasi Inovasi 2019 kategori Teknologi oleh Koran Sindo dan Sindonews.com, Carvaganza Editors&rsquo; Choice Award 2019 dan FORWOT Car Of The Year 2019. Wuling Motors berkomitmen untuk terus menghadirkan produk dan layanan yang sesuai dengan kebutuhan masyarakat Indonesia.</p>\r\n', 'Pemenang Wuling Drive & Win Periode Pertama Diumumkan', 'Penyerahan-kunci-simbolis-kepada-Pemenang-Wuling-Drive-Win-dengan-hadiah-utama-Confero-S-ACT-Cortez-1.5T-C-CVT-dan-Almaz-Smart-Enjoy-CVT-1000x623.jpg', 'Monday, 11 November 2019', 'Tuesday, 12 November 2019'),
(40, '<p>Memasang aksesoris pada interior mobil, bisa menjadi salah satu cara mengurangi kejenuhan saat berkendara. Pemasangan aksesori pada mobil ini bisa disesuaikan dengan selera dan keinginan si pemilik mobil itu sendiri. Walaupun mobil jarang dikendarai, namun bagian interior tetap harus dibuat senyaman mungkin agar si pengendara selalu merasa senang ketika berkendara.</p>\r\n\r\n<p>Ada beberapa aksesori yang bisa dipasang di mobil agar membuat pengendara semakin nyaman ketika berada di jalan. Apalagi kalau kendaraan Anda sudah tampak&nbsp;<em>stylish&nbsp;</em>dan modern, seperti desain mobil Wuling Almaz. Semakin total deh penampilan kendaraan Anda. Nah, ini ada beberapa tips memilih aksesori yang tepat agar semakin percaya diri ketika berkendara.</p>\r\n\r\n<p><strong>Sarung setir</strong></p>\r\n\r\n<p>Selain mengganti sarung jok, Anda pun bisa menyematkan sarung setir agar tampilan lebih&nbsp;&nbsp;<em>edgy</em>. Pilihan sarung setir pun beragam. Ada jenis kulit hingga menyerupai serat kayu agar tampilan area setir lebih elegan. Untuk Wuling Almaz yang sudah memiliki setir berlapis kulit bergaya&nbsp;<em>stylish</em>, Anda bisa memilih untuk memasangkan sarung setir agar tak cepat lecet.</p>\r\n\r\n<p><strong>Pedal</strong></p>\r\n\r\n<p>Anda juga bisa menambahkan aksesori berupa sarung pedal. Sarung pedal membuat tampilan mobil lebih bergaya. Pilihan akan sarung pedal juga beragam mulai dari yang bergaya&nbsp;<em>sporty</em>&nbsp;hingga elegan. Anda tinggal memasang aksesori tersebut sesuai dengan selera Anda, ya.</p>\r\n\r\n<p>Untuk mobil sekelas Wuling Almaz yang mempunyai tampilan mewah, sarung pedal dengan gaya elegan bisa dipilih untuk memaksimalkan tampilan mewah dan&nbsp;<em>edgy</em>&nbsp;pada mobil.</p>\r\n\r\n<p><strong>Sarung tuas transmis</strong></p>\r\n\r\n<p>Desain tuas transmisi yang itu-itu saja mungkin membosankan bagi sebagian orang. Nah dengan memberinya aksesori, tentu tampilannya bisa lebih menarik. Dengan begitu perjalanan Anda akan semakin menyenangkan.</p>\r\n\r\n<p><strong>Mengubah tampilan atap mobil</strong></p>\r\n\r\n<p>Anda bisa mengganti bagian interior dalam mobil dengan mengganti bagian atap. Supaya tidak membosankan selama perjalanan, terlebih di malam hari, Anda bisa menyematkan lampu-lampu di atap mobil yang menyala di malam hari. Ini akan membuat tampilan pada mobil menjadi berbeda dan terlihat mewah. Agar tetap aman, pemasangan lampu di bagian atap mobil bisa dilakukan ke ahlinya di bengkel.</p>\r\n\r\n<p><strong>Mengganti parfum mobil</strong></p>\r\n\r\n<p>Mengganti parfum di dalam mobil bisa menjadi pilihan untuk menambahkan suasana baru pada mobil Anda. Anda bisa menggantinya parfum dengan aroma yang sesuai selera. Memilih parfum dengan aroma elegan bisa jadi cocok untuk Wuling Almaz yang gayanya mewah.</p>\r\n\r\n<p><strong>Karpet mobil</strong></p>\r\n\r\n<p>Karpet mobil bisa dipilih untuk menambahkan identitas mobil Anda. Cukup memadukan warna karpet mobil ataupun memilih desain yang sesuai dengan selera warna atau warna eksterior mobil.</p>\r\n\r\n<p><strong>Sarung sabuk pengaman</strong></p>\r\n\r\n<p>Sarung Sabuk pengaman bisa menambah estetika di dalam mobil. Di samping itu, jika memilih bahan yang pas sarung sabuk pengaman juga dapat membuat pemakaian&nbsp;<em>seat belt&nbsp;</em>jadi lebih nyaman. Anda bisa memilih beragam desain sarung sabuk pengaman sesuai dengan keinginan. Karena harganya tak terlalu tinggi, Anda bisa membelinya dengan beragam desain. Apabila bosan, cukup mengganti desain yang sesuai keinginan hati.</p>\r\n\r\n<p>Aksesori semacam ini cocok untuk membuat tampilan interior Wuling Almaz semakin menarik. Apalagi sarung sabuk pengaman bisa dipilih sesuai dengan selera.</p>\r\n', 'Aksesori yang Membuat Wuling Almaz Anda Tampil Stylish', 'Wuling-artikel-5-almaz-keren-1000x569.jpg', 'Monday, 11 November 2019', 'Tuesday, 12 November 2019'),
(41, '<p>Jakarta - PT SGMW Motor Indonesia selaku pemegang merek Wuling memulai kiprah ekspor mobil perdana sejak dua tahun berada di Indonesia. Perayaan ekspor perdana dilakukan di pabrik yang berlokasi di Greenland International Industrial Centre (GIIC), Cikarang, Jawa Barat, Rabu (25/9/2019).</p>\r\n\r\n<p>Seremoni yang bertajuk &quot;Together with Indonesia for the World&quot; ini dihadiri Menteri Perindustrian Airlangga Hartarto, dan Presiden Direktur PT SGMW Motor Indonesia, Xu Feiyun.</p>\r\n\r\n<p>&quot;Program ekspor ini sangat diapresiasi, Bapak Presiden berulang kali mengatakan bahwa pengembangan ekspor hanya dibuktikan dengan investasi,&quot; kata Airlangga dalam memberikan sambutan di Greenland International Industrial Centre (GIIC), Cikarang, Jawa Barat, Rabu (25/9/2019).</p>\r\n\r\n<p><a href=\"https://www.detik.com/tag/wuling\">Wuling</a>&nbsp;mengekspor mobil buatan Cikarang ini ke beberapa negara di Asia Tenggara. Indonesia menjadi basis produksi Wuling di ASEAN.<br />\r\n<br />\r\n&quot;Dalam 20 bulan mampu masuk ke pasar ASEAN ini membuktikan PT SGMW Indonesia menjadi basis industri basis di ASEAN untuk menjadi basis. Indonesia kompetitif,&quot; sambungnya.</p>\r\n\r\n<p>Presiden Direktur PT SGMW Motor Indonesia, Xu Feiyun mengatakan SUV Wuling Almaz yang berubah wujud menjadi&nbsp;<a href=\"https://www.detik.com/tag/chevrolet-captiva\">Chevrolet Captiva</a>&nbsp;akan dieskpor ke Thailand, Brunei Darussalam, dan Fiji. Menyoal target Airlangga menyebut ekspor Wuling ditargetkan mencapai angka 2.600 unit di tahun 2019.</p>\r\n\r\n<p>&quot;Hari ini kami bekerja sama dengan pemegang saham General Motors Amerika Serikat untuk mengerjakan ekspor mobil,&quot; ujar Xu Feiyun.<br />\r\n<br />\r\nDi pasar dalam negeri kiprah Wuling terbilang manis, dalam tenggat waktu dua tahun pabrikan China ini berhasil masuk dalam daftar 10 merek mobil terlaris di Indonesia. Saat ini ada empat produk yang dipasarkan yakni Confero, Cortez, Formo, dan Almaz.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Wuling Almaz Diekspor Menjadi Chevrolet Captiva', '07-42-50-c38ddf8d-f83d-4b62-b111-62e3e800ac75.jpeg', 'Monday, 30 December 2019', 'Monday, 30 December 2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `no` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nohp` int(14) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`no`, `nama`, `nohp`, `email`, `pesan`) VALUES
(1, 'Hendi', 2147483647, 'hendise0412@gmail.com', 'Almaz brp?'),
(2, 'KennethDep', 2147483647, 'raphaeSarmmync@gmail.com', 'Hi!  wuling-pontianak.id \r\n \r\nDid you know that it is possible to send commercial offer fully lawfully? \r\nWe presentation a new method of sending appeal through contact forms. Such forms are located on many sites. \r\nWhen such business proposals are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nAlso, messages sent through contact Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis letter is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com'),
(3, 'Hafiz', 2147483647, 'm.hafiz.w@gmail.com', 'Kapan Wuling Baojun 310 Rilis di Indonesia dan pontianak?'),
(4, 'RobertAcari', 2147483647, 'jlambert.1@yahoo.com', 'Good day \r\n \r\nI`m a private investors seeking for a reputable company/individuals to partner with in a manner it would benefit both parties. If interested, kindly contact us through this email lambertj283@gmail.com for clarification.'),
(5, 'KarenRurdY', 2147483647, 'stunningkorea@gmail.com', 'We would like to take this opportunity to introduce our company. \r\nWe are STUNNING KOREA, a special event tour company in Korea. \r\nWe provide various different types of event in Korea for associations and groups. \r\n \r\n \r\nWeâ€™re offering a event tour for a group of school classmates, a company department, \r\na sports club, an association or other organization,etc. \r\nIt is going to be customized event tour for your group and \r\nWe provide complimentary inspection tour for leader of gruop. \r\n \r\nIf your association or group ever need special trip or meeting in Korea, \r\nwe hope we can assist your event in Korea. \r\n \r\nYou may pursue our website at http://www.stunningkorea.com/ \r\nShould you be interested in our service or have any question in this regard, \r\n \r\nPlease feel free to send me an email at stunningkorea@gmail.com \r\nThank you very much, and we hope to receive your favorably response soon.'),
(6, 'Wiwik', 2147483647, 'aneka4445@gmail.com', 'DP min wuling almaz berapa, beserta dgn cicilan perbulan nya?'),
(7, 'Brianbef', 2147483647, 'no-reply@hilkom-digital.de', 'hi there \r\nI have just checked wuling-pontianak.id for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(8, 'YoungGut', 2147483647, 'stunningkorea@gmail.com', 'We would like to take this opportunity to introduce our company. \r\nWe are STUNNING KOREA, a special event tour company in Korea. \r\nWe provide various different types of event in Korea for associations and groups. \r\n \r\n \r\nWeâ€™re offering a event tour for a group of school classmates, a company department, \r\na sports club, an association or other organization,etc. \r\nIt is going to be customized event tour for your group and \r\nWe provide complimentary inspection tour for leader of gruop. \r\n \r\nIf your association or group ever need special trip or meeting in Korea, \r\nwe hope we can assist your event in Korea. \r\n \r\nYou may pursue our website at http://www.stunningkorea.com/ \r\nShould you be interested in our service or have any question in this regard, \r\n \r\nPlease feel free to send me an email at stunningkorea@gmail.com \r\nThank you very much, and we hope to receive your favorably response soon.'),
(9, 'TerryChete', 2147483647, 'hcard.marketing@gmail.com', 'Hai, saya Chris, direktur pemasaran kartu debit crypto bernama Hcard. \r\n \r\nKali ini saya menghubungi Anda untuk memperkenalkan Hcard di situs web Anda. \r\n \r\nHcard adalah penyihir kartu debit merek MasterCard yang sangat mudah digunakan. \r\n \r\nPenggunaan Hcard membutuhkan aplikasi Fiatbit dan Hcard. \r\n \r\nAplikasi Fiatbit memiliki fungsi afiliasi dan Anda dapat menerima hadiah berikut ketika penerbit kartu keluar dari tautan referensi Anda. \r\n \r\n>> Hadiah Penerbitan Kartu \r\n1 tingkat: $ 100-an \r\n2 tingkat: $ 50 \r\n3 tingkat: $ 30 \r\n \r\n>> Isi hadiah \r\n1 tingkat: 30% dari biaya \r\n2tier: 20% dari biaya \r\n3 tingkat: 10% dari biaya \r\n \r\nUntuk menerima hadiah, Anda harus membuka akun dari tautan di bawah ini. \r\nhttps://www.fiatbit.com/register.html?recommendCode=72cf \r\n \r\nSetelah membuka akun Anda, silakan instal aplikasi dari tautan di bawah ini dan masuk. \r\n \r\niPhone \r\nhttps://apps.apple.com/ky/app/fiatbit/id1483437141 \r\n \r\nAndroid \r\nhttps://play.google.com/store/apps/details?id=vcb.fiatbit.com&hl=id \r\n \r\nHcard \r\nhttps://hcard.in/ \r\n \r\n \r\nE-mail: \r\nhcard.marketing@gmail.com'),
(10, 'MichaelGuask', 2147483647, 'hcard.marketing@gmail.com', 'å—¨ï¼Œæˆ‘æ˜¯å…‹é‡Œæ–¯ï¼ˆHcardï¼‰çš„è¡Œé”€æ€»ç›‘å…‹é‡Œæ–¯ï¼ˆChrisï¼‰ã€‚ \r\n \r\nè¿™æ¬¡æˆ‘ä¸Žæ‚¨è”ç³»ä»¥åœ¨æ‚¨çš„ç½‘ç«™ä¸Šä»‹ç»Hcardã€‚ \r\n \r\nHcardæ˜¯ä¸‡äº‹è¾¾å“ç‰Œçš„å€Ÿè®°å¡å·«å©†ï¼Œéžå¸¸å¥½ç”¨ã€‚ \r\n \r\nä½¿ç”¨Hcardéœ€è¦Fiatbitå’ŒHcardåº”ç”¨ç¨‹åºã€‚ \r\n \r\nFiatbitåº”ç”¨ç¨‹åºå…·æœ‰ä¼šå‘˜åŠŸèƒ½ï¼Œå½“å‘å¡è¡Œä»Žæ‚¨çš„æŽ¨èé“¾æŽ¥ä¸­å‡ºæ¥æ—¶ï¼Œæ‚¨å¯ä»¥èŽ·å¾—ä»¥ä¸‹å¥–åŠ±ã€‚ \r\n \r\n>>å¡å‘è¡Œå¥–åŠ± \r\n1çº§ï¼š$ 100s \r\n2ç­‰ï¼š$ 50 \r\n3ç­‰ï¼š$ 30 \r\n \r\n>>å……å€¼å¥–åŠ± \r\n1çº§ï¼šè´¹ç”¨çš„30ï¼… \r\n2çº§ï¼šæ”¶è´¹çš„20ï¼… \r\nç¬¬ä¸‰å±‚ï¼šæ”¶è´¹çš„10ï¼… \r\n \r\nè¦èŽ·å¾—å¥–åŠ±ï¼Œæ‚¨éœ€è¦é€šè¿‡ä¸‹é¢çš„é“¾æŽ¥å¼€è®¾ä¸€ä¸ªå¸æˆ·ã€‚ \r\nhttps://www.fiatbit.com/register.html?recommendCode=72cf \r\n \r\næ‰“å¼€å¸æˆ·åŽï¼Œè¯·ä»Žä¸‹é¢çš„é“¾æŽ¥å®‰è£…åº”ç”¨ç¨‹åºå¹¶ç™»å½•ã€‚ \r\n \r\nè‹¹æžœæ‰‹æœº \r\nhttps://apps.apple.com/ky/app/fiatbit/id1483437141 \r\n \r\nå®‰å“ç³»ç»Ÿ \r\nhttps://play.google.com/store/apps/details?id=vcb.fiatbit.com&hl=zh_CN \r\n \r\næ¯•ç«Ÿï¼Œåªéœ€å‘å¸ƒå¼•èé“¾æŽ¥å¹¶å°†å…¶ä¼ æ’­åˆ°æ‚¨çš„ç½‘ç«™å³å¯ã€‚ \r\næ‚¨å°†èŽ·å¾—ä¸°åŽšçš„å›žæŠ¥ã€‚ \r\nè°¢è°¢ã€‚ \r\n \r\nE-mail: \r\nhcard.marketing@gmail.com'),
(11, 'Lio Hermawan', 2147483647, 'liohermawan7@gmail.com', 'Selamat malam Info harga pick up Wuling terbaru om.....'),
(12, 'Mingguansyah', 2147483647, 'minggu@yahoo.com', ''),
(13, 'JosephEmorn', 2147483647, 'yundongyuancun@163.com', 'More than 500.000 Parts available ship worldwide in fast delivery time (PLC, HMI, Inverters, Servo Drives, CNC, Motors - Encoders, Software, Low Voltage...) \r\nNEW PRODUCTS and OBSOLETE / Discontinued by manufacturers:Panasonic Yaskawa,Mitsubishi, AB etc. \r\nhttps://eusens.com/ \r\n130 Brands SIEMENS â€“ ABB â€“ GE FANUC â€“ PHOENIX CONTACT - SCHNEIDER ELECTRIC - ALLEN BRADLEY... \r\nPlease for any request do not hesitate to contact us.'),
(14, 'Iswan', 2147483647, 'iswanfachriproperty@gmail.com', ''),
(15, 'Edy Santoso', 2147483647, 'indehoy48@gmail.com', 'Minta list brosur cash dan credit '),
(16, 'Ariyo parjan', 2147483647, 'ariyo.parjan@gmail.com', 'Selamat siang.. maaf saya mau tanya..Berapa /bulan untuk Wuling Almaz dgn uang muka 50jt / 60bln..terima kasih'),
(17, 'Williamplals', 2147483647, 'no-reply@ghostdigital.co', 'Increase your wuling-pontianak.id ranks with quality web2.0 Article links. \r\nGet 500 permanent web2.0 for only $39. \r\n \r\nMore info about our new service: \r\nhttps://www.ghostdigital.co/web2/'),
(18, 'Tam Shapoval', 2147483647, 'tspieker6@gmail.com', 'Dear CEO: wuling-pontianak.id \r\nIt will be my pleasure to collaborate with you and maintain a confidential/Financial transaction with your Company for mutual benefits. Iâ€™m looking forward to a prospective business relationship with you. Your company profile has inspired me to contact you personally. Please revert to my personal email for further discussions:  t4m.shapoval@yandex.com \r\nRegards, \r\nMrs. Tam Shapoval.'),
(19, 'Herman', 2147483647, 'yunitah282@gmail.com', 'Bisa gak sih untuk wuling di bikin ambulan'),
(20, 'Jamesdiz', 2147483647, 'coronavaccine@hotmail.com', 'Today every person on Earth has been affected by the COVID-19 outbreak. Airplanes are grounded, borders are closed, businesses are shut, citizens are forced into quarantine, and governments are taking spontaneous emergency decisions undermining the principles of democracy. \r\nAll this, if not stopped shortly, can lead to chaos and unrests. \r\nCurrently HTTP://WWW.ST-lF.COM  is proud to represent the world-wide scientific community, by fundraising for COVID-19 Vaccine Development. \r\nIt is a responsibility of every human-being to put every effort to fight the deadly virus. Your support is needed to develop a vaccine ASAP! Every 1$ makes a difference. \r\nPlease, take a moment to review our campaigns HTTP://WWW.ST-lF.COM'),
(21, 'Bayu', 2147483647, 'mr.bidin.putra.borneo@gmail.com', 'Bpak/ibu bisa bagi info penawaran terbaik dari wuling motor'),
(22, 'Fredrick Sihombing', 2147483647, 'sihombingfredrick@yahoo.com', 'Harga dan brosure kredit Wuling cortez'),
(23, 'Raymond 	Brown', 2147483647, 'info@thecctvhub.com', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply N95, KN95, 3ply masks and Thermal cameras for Body Temperature Measurement up to accuracy of Â±0.1?C \r\nAdvantages of thermal imaging detection: \r\n \r\n1. Intuitive, efficient and convenient, making users directly \"see\" the temperature variation. \r\n2. Thermal condition of different locations for comprehensive analysis, providing more information for judgment \r\n3. Avoiding judgment errors, reducing labor costs, and discovering poor heat dissipation and hidden trouble points \r\n4. PC software for data analysis and report output \r\n \r\nWhatsapp: +65 87695655 \r\nTelegram: cctv_hub \r\nSkype: cctvhub \r\nEmail: sales@thecctvhub.com \r\nW: http://www.thecctvhub.com/ \r\n \r\nIf you do not wish to receive email from us again, please let us know by replying. \r\n \r\nregards, \r\nRaymond'),
(24, 'MartinGap', 2147483647, 'no-reply@hilkom-digital.de', 'hi there \r\nI have just checked wuling-pontianak.id for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(25, 'JerryPsype', 2147483647, 'no-replySarmmync@gmail.com', 'GÐ¾Ð¾d dÐ°y!  wuling-pontianak.id \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd rÐµquÐµst tÐ¾tÐ°lly lÐµgÐ°l? \r\nWÐµ submit Ð° nÐµw lÐµgÐ°l mÐµthÐ¾d Ð¾f sÐµnding prÐ¾pÐ¾sÐ°l thrÐ¾ugh fÐµÐµdbÐ°Ñk fÐ¾rms. SuÑh fÐ¾rms Ð°rÐµ lÐ¾ÑÐ°tÐµd Ð¾n mÐ°ny sitÐµs. \r\nWhÐµn suÑh mÐµssÐ°gÐµs Ð°rÐµ sÐµnt, nÐ¾ pÐµrsÐ¾nÐ°l dÐ°tÐ° is usÐµd, Ð°nd mÐµssÐ°gÐµs Ð°rÐµ sÐµnt tÐ¾ fÐ¾rms spÐµÑifiÑÐ°lly dÐµsignÐµd tÐ¾ rÐµÑÐµivÐµ mÐµssÐ°gÐµs Ð°nd Ð°ppÐµÐ°ls. \r\nÐ°lsÐ¾, mÐµssÐ°gÐµs sÐµnt thrÐ¾ugh fÐµÐµdbÐ°Ñk FÐ¾rms dÐ¾ nÐ¾t gÐµt intÐ¾ spÐ°m bÐµÑÐ°usÐµ suÑh mÐµssÐ°gÐµs Ð°rÐµ ÑÐ¾nsidÐµrÐµd impÐ¾rtÐ°nt. \r\nWÐµ Ð¾ffÐµr yÐ¾u tÐ¾ tÐµst Ð¾ur sÐµrviÑÐµ fÐ¾r frÐµÐµ. WÐµ will sÐµnd up tÐ¾ 50,000 mÐµssÐ°gÐµs fÐ¾r yÐ¾u. \r\nThÐµ ÑÐ¾st Ð¾f sÐµnding Ð¾nÐµ milliÐ¾n mÐµssÐ°gÐµs is 49 USD. \r\n \r\nThis Ð¾ffÐµr is ÑrÐµÐ°tÐµd Ð°utÐ¾mÐ°tiÑÐ°lly. PlÐµÐ°sÐµ usÐµ thÐµ ÑÐ¾ntÐ°Ñt dÐµtÐ°ils bÐµlÐ¾w tÐ¾ ÑÐ¾ntÐ°Ñt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +375259112693'),
(26, 'a', 1, 'a@gmail.com', 'A'),
(27, 'a', 1, 'a@gmail.com', 'A'),
(28, 'Supiansyah', 2147483647, 'sopiansyah60@yahoo.co.id', 'Mau tanyaÂ² promo wuling');

-- --------------------------------------------------------

--
-- Table structure for table `tbshowroom`
--

CREATE TABLE `tbshowroom` (
  `idsr` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `tipe` text NOT NULL,
  `daftar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbshowroom`
--

INSERT INTO `tbshowroom` (`idsr`, `gambar`, `nama`, `harga`, `tipe`, `daftar`) VALUES
(1, 'confero.jpg', 'CONFERO', 172800000, '3 tipe WULING Confero 1500 CC (Manual) : ', '<p>Basic/Standar</p>\r\n\r\n<p>Type C/Tengah</p>\r\n\r\n<p>Type L/Tertinggi</p>\r\n'),
(2, 'cortez.jpg', 'CORTEZ', 230300000, '5 tipe WULING Cortez : ', '<p>WULING Cortez 1.5 C (Manual)</p>\r\n\r\n<p>WULING Cortez 1.8 L Lux+ (Manual dan i-AMT/Matic)</p>\r\n\r\n<p>Wuling Cortez CT 1.5 Turbo C (Manual)</p>\r\n\r\n<p>Wuling Cortez CT 1.5 Turbo C Lux+ (CVT/Matic)</p>\r\n\r\n<p>Wuling Cortez CT 1.5 Turbo L Lux+ (CVT/Matic)</p>\r\n'),
(3, 'almaz.jpg', 'ALMAZ', 288800000, '2 tipe WULING Almaz :', '<p>Wuling Almaz 1.5 Turbo S 7 Seater (Manual dan CVT/Matic)</p>\r\n\r\n<p>Wuling Almaz 1.5 Turbo L Lux CVT (5 Seater dan 7 Seater)</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbslideshow`
--

CREATE TABLE `tbslideshow` (
  `idss` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `urutan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbslideshow`
--

INSERT INTO `tbslideshow` (`idss`, `gambar`, `urutan`) VALUES
(2, 'factory.jpg', 2),
(8, 'visit.jpg', 4),
(9, 'logo.jpg', 5),
(11, '07-44-42-Media-Factory-visit-Wuling1.jpg', 6),
(23, '07-44-42-Media-Factory-visit-Wuling.jpg', 7),
(26, '07-44-42-Media-Factory-visit-Wuling.jpg', 1),
(27, 'foto profil.jpg', 3),
(28, 'IMG_20191228_134244.jpg', 8),
(29, 'drive-win-mobile-rev.jpg', 9),
(30, 'group-18-b.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbtentang`
--

CREATE TABLE `tbtentang` (
  `idttg` int(2) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtentang`
--

INSERT INTO `tbtentang` (`idttg`, `judul`, `isi`) VALUES
(1, 'Mobil Keluarga, Mobil MPV, dan Mobil SUV Terbaik Untuk Kenyamanan Anda & Keluarga', 'Wuling berkomitmen untuk menghadirkan mobil dengan berbagai kelebihan dan kenyamanan untuk Anda dan keluarga.\r\n<br>\r\nSimak berbagai pilihan Mobil MPV, Mobil SUV dan pilihan Mobil lainnya yang sudah dihadirkan oleh Wuling untuk Anda.');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `tipe` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `tipe`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarticle`
--
ALTER TABLE `tbarticle`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbshowroom`
--
ALTER TABLE `tbshowroom`
  ADD PRIMARY KEY (`idsr`);

--
-- Indexes for table `tbslideshow`
--
ALTER TABLE `tbslideshow`
  ADD PRIMARY KEY (`idss`);

--
-- Indexes for table `tbtentang`
--
ALTER TABLE `tbtentang`
  ADD PRIMARY KEY (`idttg`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbarticle`
--
ALTER TABLE `tbarticle`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbshowroom`
--
ALTER TABLE `tbshowroom`
  MODIFY `idsr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbslideshow`
--
ALTER TABLE `tbslideshow`
  MODIFY `idss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbtentang`
--
ALTER TABLE `tbtentang`
  MODIFY `idttg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
