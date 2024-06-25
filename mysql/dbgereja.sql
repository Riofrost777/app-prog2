DROP DATABASE IF EXISTS dbgereja;
CREATE DATABASE dbgereja;
USE dbgereja;

CREATE TABLE tblUser(
  iduser INT(11) PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255),
  password VARCHAR(255),
  alamat VARCHAR(255),
  nohp VARCHAR(15),
  email VARCHAR(255),
  level VARCHAR(2)
);

CREATE TABLE tblJenisPemasukan(
  idjenispemasukan INT(11) PRIMARY KEY AUTO_INCREMENT,
  iduser INT(11),
  namapemasukan VARCHAR(255),
  FOREIGN KEY (iduser) REFERENCES tblUser (iduser)
);

CREATE TABLE tblJenisPengeluaran(
  idjenispengeluaran INT(11) PRIMARY KEY AUTO_INCREMENT,
  iduser INT(11),
  namapengeluaran VARCHAR(255),
  FOREIGN KEY (iduser) REFERENCES tblUser (iduser)
);

CREATE TABLE tlbPemasukan(
  idpemasukan INT(11) PRIMARY KEY AUTO_INCREMENT,
  iduser INT(11),
  idjenispemasukan INT(11),
  tanggal TIMESTAMP,
  nominal DOUBLE,
  status BOOLEAN,
  komen VARCHAR(255),
  FOREIGN KEY (iduser) REFERENCES tblUser (iduser),
  FOREIGN KEY (idjenispemasukan) REFERENCES tblJenisPemasukan (idjenispemasukan)
);

CREATE TABLE tlbPengeluaran(
  idpengeluaran INT(11) PRIMARY KEY AUTO_INCREMENT,
  iduser INT(11),
  idjenispengeluaran INT(11),
  tanggal TIMESTAMP,
  nominal DOUBLE,
  status BOOLEAN,
  komen VARCHAR(255),
  FOREIGN KEY (iduser) REFERENCES tblUser (iduser),
  FOREIGN KEY (idjenispengeluaran) REFERENCES tblJenisPengeluaran (idjenispengeluaran)
);

CREATE TABLE tblLogPemasukan(
  idlogpemasukan INT(11) PRIMARY KEY AUTO_INCREMENT,
  iduser INT(11),
  idpemasukan INT(11),
  tanggal TIMESTAMP,
  namatransaksi VARCHAR(255),
  nominalsblm DOUBLE,
  nominalsesudah DOUBLE,
  FOREIGN KEY (iduser) REFERENCES tblUser (iduser),
  FOREIGN KEY (idpemasukan) REFERENCES tlbPemasukan (idpemasukan)
);

CREATE TABLE tblLogPengeluaran(
  idlogpengeluaran INT(11) PRIMARY KEY AUTO_INCREMENT,
  iduser INT(11),
  idpengeluaran INT(11),
  tanggal TIMESTAMP,
  namatransaksi VARCHAR(255),
  nominalsblm DOUBLE,
  nominalsesudah DOUBLE,
  FOREIGN KEY (iduser) REFERENCES tblUser (iduser),
  FOREIGN KEY (idpengeluaran) REFERENCES tlbPengeluaran (idpengeluaran)
);
