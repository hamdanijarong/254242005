CREATE DATABASE db_mahasiswa;

USE db_mahasiswa;

CREATE TABLE mahasiswa (
    nim VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100),
    jurusan VARCHAR(100),
    alamat TEXT,
    status TINYINT(1) DEFAULT 1
);