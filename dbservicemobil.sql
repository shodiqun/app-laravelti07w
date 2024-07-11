
DROP TABLE IF EXISTS detail_layanan;
DROP TABLE IF EXISTS kategori_montir;
DROP TABLE IF EXISTS layanan;
DROP TABLE IF EXISTS montir;

CREATE TABLE detail_layanan (
  id INTEGER NOT NULL,
  pekerjaan VARCHAR(100) NOT NULL,
  biaya DOUBLE DEFAULT NULL,
  layanan_id INTEGER DEFAULT NULL,
  pj_montir_id INTEGER DEFAULT NULL
);

CREATE TABLE kategori_montir (
  id INTEGER NOT NULL,
  nama VARCHAR(45) NOT NULL
);

CREATE TABLE layanan (
  id INTEGER NOT NULL,
  kode VARCHAR(10) NOT NULL,
  nama VARCHAR(100) NOT NULL,
  deskripsi VARCHAR(200) DEFAULT NULL,
  jenis_layanan_id INTEGER DEFAULT NULL,
  total_biaya DOUBLE DEFAULT NULL,
  rating INTEGER DEFAULT NULL
);

CREATE TABLE montir (
  id INTEGER NOT NULL,
  nomor VARCHAR(4) NOT NULL,
  nama VARCHAR(50) NOT NULL,
  gender CHAR(1) NOT NULL,
  tgl_lahir DATE NOT NULL,
  tmp_lahir VARCHAR(30) NOT NULL,
  keahlian VARCHAR(200) DEFAULT NULL,
  kategori_montir_id INTEGER DEFAULT NULL
);

INSERT INTO detail_layanan (id, pekerjaan, biaya, layanan_id, pj_montir_id) VALUES
(1, 'Servis Mesin', 200000, 1, 1),
(2, 'Servis Body', 150000, 2, 2),
(3, 'Ganti Aki', 300000, 1, 3),
(4, 'Servis Rem', 250000, 2, 4);

INSERT INTO kategori_montir (id, nama) VALUES
(1, 'Ahli Mesin'),
(2, 'Ahli Elektrik'),
(3, 'Ahli Rem'),
(4, 'Ahli Aki');

INSERT INTO layanan (id, kode, nama, deskripsi, jenis_layanan_id, total_biaya, rating) VALUES
(1, 'L001', 'Servis Lengkap', 'Servis menyeluruh untuk mobil', 1, 500000, 5),
(2, 'L002', 'Servis Body', 'Perbaikan dan pengecatan bodi mobil', 2, 200000, 4),
(3, 'L003', 'Ganti Aki', 'Penggantian aki kendaraan', 3, 300000, 4),
(4, 'L004', 'Servis Rem', 'Servis sistem pengereman', 4, 250000, 5);

INSERT INTO montir (id, nomor, nama, gender, tgl_lahir, tmp_lahir, keahlian, kategori_montir_id) VALUES
(1, '001', 'Shodiq', 'L', '1985-05-15', 'Jakarta', 'Mesin', 1),
(2, '002', 'Delvin', 'L', '1990-08-25', 'Bandung', 'Elektrik', 2),
(3, '003', 'Aril', 'L', '1988-03-12', 'Surabaya', 'Rem', 3),
(4, '004', 'Fatih', 'L', '1992-06-17', 'Medan', 'Aki', 4);
