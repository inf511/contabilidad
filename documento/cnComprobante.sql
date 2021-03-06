/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 12.1 		*/
/*  Created On : 13-Nov.-2017 10:34:52 a. m. 				*/
/*  DBMS       : PostgreSQL 						*/
/* ---------------------------------------------------- */

/* Drop Sequences for Autonumber Columns */

DROP SEQUENCE IF EXISTS cncomprobante_pk_comprobante_seq
;

/* Drop Tables */

DROP TABLE IF EXISTS cnComprobante CASCADE
;

/* Create Tables */

CREATE TABLE cnComprobante
(
	pk_Comprobante integer NOT NULL   DEFAULT NEXTVAL(('"cncomprobante_pk_comprobante_seq"'::text)::regclass),
	cnCodComp char(5),
	cnTComp integer NOT NULL,
	cnNroComp varchar(15),
	cnFechaComp timestamp,
	fkMoneda integer NOT NULL,
	cnTCambio decimal(10,2),
	fkBanco integer,
	cnNroCuenta varchar(25),
	cnNroCheque varchar(25),
	cnCliente varchar(50),
	cnGlosa varchar(100),
	cnFlujo char(1),    -- si es un comprobante de flujo
	fkGestion integer,
	cnEstado char(1)
)
;

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE cnComprobante ADD CONSTRAINT PK_cnComprobante
	PRIMARY KEY (pk_Comprobante)
;

/* Create Foreign Key Constraints */

ALTER TABLE cnComprobante ADD CONSTRAINT FK_cnComprobante_cnBanco
	FOREIGN KEY (fkBanco) REFERENCES cnBanco (pk_Banco) ON DELETE No Action ON UPDATE No Action
;

ALTER TABLE cnComprobante ADD CONSTRAINT FK_cnComprobante_cnMoneda
	FOREIGN KEY (fkMoneda) REFERENCES cnMoneda (pk_Moneda) ON DELETE No Action ON UPDATE No Action
;

/* Create Table Comments, Sequences for Autonumber Columns */

COMMENT ON COLUMN cnComprobante.cnFlujo
	IS 'si es un comprobante de flujo'
;

CREATE SEQUENCE cncomprobante_pk_comprobante_seq INCREMENT 1 START 1
;
