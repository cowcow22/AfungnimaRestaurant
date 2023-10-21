//Pembuatan Database

CREATE DATABASE utspemweblec;

CREATE TABLE login (id INT NOT NULL AUTO_INCREMENT , namadepan VARCHAR(15) NOT NULL , namabelakang VARCHAR(15) NOT NULL , tanggalLahir DATE NOT NULL , jenisKelamin VARCHAR(10) NOT NULL , username VARCHAR(50) NOT NULL , password VARCHAR(100) NOT NULL , role VARCHAR(10) NOT NULL , PRIMARY KEY (id), UNIQUE (username)) ENGINE = InnoDB;

CREATE TABLE daftarmenu (idmenu INT NOT NULL AUTO_INCREMENT , jenismenu VARCHAR(20) NOT NULL , namamenu VARCHAR(50) NOT NULL , deskripsi TEXT NOT NULL , hargamenu INT NOT NULL , fotomenu VARCHAR(255) NOT NULL , PRIMARY KEY (idmenu)) ENGINE = InnoDB;

CREATE TABLE order (username VARCHAR(50) NOT NULL , idmenu INT NOT NULL , jumlahpesanan INT NOT NULL , harga INT NOT NULL, PRIMARY KEY (username,idmenu), FOREIGN KEY (username) REFERENCES login(username), FOREIGN KEY (idmenu) REFERENCES daftarmenu(idmenu) ) ENGINE = InnoDB;

//untuk pembuatan akun admin dapat menggunakan kode reff 'admin123'

note untuk dosen: //Pada title terdapat kesalahan nama kelompok, seharusnya Afungnima Restaurant IF330-B Kelompok 3
