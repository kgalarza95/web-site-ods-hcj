CREATE SCHEMA IF NOT EXISTS ug_base_php DEFAULT CHARACTER SET utf8mb4 ;
USE ug_base_php ;

CREATE TABLE IF NOT EXISTS TBL_USUARIO (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  NOMBRE_USUARIO VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  CONTRASENIA    VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (ID)
);

INSERT INTO TBL_USUARIO (NOMBRE_USUARIO, CONTRASENIA) VALUES('KGALARZA','123');
SELECT * FROM TBL_USUARIO;