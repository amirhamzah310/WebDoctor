CREATE TABLE Member(
	username varchar(12) NOT NULL PRIMARY KEY,
	namaMember varchar(50) NOT NULL,
	tglLahir date NOT NULL,
	kota varchar(25) NOT NULL,
	alamat varchar(100) NOT NULL,	
	email varchar(32) NOT NULL,
	password varchar(32) NOT NULL,
	peran tinyint(1) NOT NULL
);

CREATE TABLE Gejala(
	kodeGejala int(12) NOT NULL PRIMARY KEY,
	namaGejala varchar(30)
);

CREATE TABLE Kategori(
	idKategori int(12) NOT NULL PRIMARY KEY,
	namaKategori varchar(20)
);

CREATE TABLE Penyakit(
	kodePenyakit int(12) NOT NULL PRIMARY KEY,
	namaPenyakit varchar(30),
	idKategori int NOT NULL FOREIGN KEY 
	REFERENCES Kategori(
		idKategori
	)	
);

CREATE TABLE Diagnosa(
	kodePenyakit int(12) NOT NULL FOREIGN KEY
	REFERENCES Penyakit(
		kodePenyakit
	),
	idMember int(12) NOT NULL FOREIGN KEY
	REFERENCES Member(
		idMember
	),
	waktu datetime
);

CREATE TABLE Hubungan(
	kodePenyakit int(12) NOT NULL FOREIGN KEY
	REFERENCES Penyakit(
		kodePenyakit
	),
	kodeGejala int(12) NOT NULL FOREIGN KEY
	REFERENCES Gejala(
		kodeGejala
	)
);
