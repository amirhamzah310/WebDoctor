CREATE TABLE Kota(
	idKota INT(12) NOT NULL,
	namaKota VARCHAR(25) NOT NULL,
	CONSTRAINT PK_Kota PRIMARY KEY(namaKota)
);

CREATE TABLE Member(
	username VARCHAR(12) NOT NULL,
	namaMember VARCHAR(50) NOT NULL,
	tglLahir DATE NOT NULL,
	kota VARCHAR(25) NOT NULL,
	alamat VARCHAR(50) NOT NULL,
	email VARCHAR(32) NOT NULL,
	kataSandi VARCHAR(32) NOT NULL,
	peran TINYINT(1) NOT NULL,
	profil VARCHAR(50) NOT NULL,
	tglGabung DATE NOT NULL,
	CONSTRAINT PK_Member PRIMARY KEY(username),
	CONSTRAINT FK_Kota FOREIGN KEY(kota)
	REFERENCES Kota(namaKota)
);

CREATE TABLE Kategori(
	idKategori INT(12) NOT NULL AUTO_INCREMENT,
	namaKategori VARCHAR(20) NOT NULL,
	CONSTRAINT PK_Kategori PRIMARY KEY(idKategori)
);

CREATE TABLE Penyakit(
	kodePenyakit INT(12) NOT NULL AUTO_INCREMENT,
	namaPenyakit VARCHAR(30) NOT NULL,
	idKategori INT(12) NOT NULL,
	CONSTRAINT PK_Penyakit PRIMARY KEY(kodePenyakit),
	CONSTRAINT FK_Kategori FOREIGN KEY(idKategori)
	REFERENCES Kategori(idKategori)
);

CREATE TABLE Gejala(
	kodeGejala INT(12) NOT NULL AUTO_INCREMENT,
	namaGejala VARCHAR(30) NOT NULL,
	CONSTRAINT PK_Gejala PRIMARY KEY(kodeGejala)	
);

CREATE TABLE Diagnosa(
	waktu DATE NOT NULL,
	kodePenyakit INT(12) NOT NULL,
	username VARCHAR(12) NOT NULL,
	CONSTRAINT FK_Penyakit FOREIGN KEY(kodePenyakit)
	REFERENCES Penyakit(kodePenyakit),
	CONSTRAINT FK_Member FOREIGN KEY(username)
	REFERENCES Member(username)
);

CREATE TABLE Hubungan(
	kodePenyakit INT(12) NOT NULL,
	kodeGejala INT(12) NOT NULL,
	CONSTRAINT FK_Penyakit2 FOREIGN KEY(kodePenyakit)
	REFERENCES Penyakit(kodePenyakit),
	CONSTRAINT FK_Gejala FOREIGN KEY(kodeGejala)
	REFERENCES Gejala(kodeGejala)
);


CREATE TABLE Punya(
	username VARCHAR(12) NOT NULL,
	kodeGejala INT(12) NOT NULL,
	waktu DATE NOT NULL,
	CONSTRAINT FK_Member2 FOREIGN KEY(username)
	REFERENCES Member(username),
	CONSTRAINT FK_Gejala2 FOREIGN KEY(kodeGejala)
	REFERENCES Gejala(kodeGejala)
);

INSERT INTO Kota(idKota, namaKota)
VALUES(1, 'Bali'), (2, 'Bandung'), (3, 'Jakarta'), (4, 'Semarang'), (5, 'Yogyakarta');

INSERT INTO Member
VALUES('admin', 'Admin WebDoctor', '1999-05-30', 'Bandung', 'Bukit Jarian 14A', 'invers273@gmail.com', 'BE6BD7A784BB6A2130E13C2EA09014C4', 1, 'no-profile.jpg','2019-04-30');

INSERT INTO `kategori` (`idKategori`, `namaKategori`) 
VALUES(1, 'Pencernaan'),(2, 'Pernapasan'),(3, 'Malnutrisi'),(4, 'Tumor');

INSERT INTO `gejala` (`kodeGejala`, `namaGejala`)
VALUES(1, 'Mual'),(2, 'Muntah'),(3, 'Demam'),(4, 'Batuk'),(5, 'Pusing'),(6, 'Menggigil'),(7, 'Lemas'),(8, 'Sesak Napas'),(9, 'Berkeringat');

INSERT INTO `penyakit` (`kodePenyakit`, `namaPenyakit`, `idKategori`)
VALUES(1, 'Diare', 1),(2, 'Influenza', 2),(3, 'Anemia', 3),(4, 'Tumor', 4);