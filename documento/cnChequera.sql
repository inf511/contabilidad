/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 12.1 		*/
/*  Created On : 14-Nov.-2017 12:06:43 a. m. 				*/
/*  DBMS       : PostgreSQL 						*/
/* ---------------------------------------------------- */

/* Drop Sequences for Autonumber Columns */

DROP SEQUENCE IF EXISTS cnchequera_pk_chequera_seq
;

/* Drop Tables */

DROP TABLE IF EXISTS cnChequera CASCADE
;

/* Create Tables */

CREATE TABLE cnChequera
(
	pk_Chequera integer NOT NULL   DEFAULT NEXTVAL(('"cnchequera_pk_chequera_seq"'::text)::regclass),    --  
	fkBanco integer NOT NULL,
	fkCuentaContable integer NOT NULL,
	cnDescripcion varchar(50),
	cnNroInicio varchar(20) NOT NULL,
	cnNroFin varchar(20) NOT NULL,
	cnHabilitar char(1) NOT NULL,
	cnEstado char(1) NOT NULL
)
;

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE cnChequera ADD CONSTRAINT PK_cnChequera
	PRIMARY KEY (pk_Chequera)
;

/* Create Foreign Key Constraints */

ALTER TABLE cnChequera ADD CONSTRAINT FK_cnChequera_cnPlanContable
	FOREIGN KEY (fkCuentaContable) REFERENCES cnPlanContable (pk_PlanContable) ON DELETE No Action ON UPDATE No Action
;

/* Create Table Comments, Sequences for Autonumber Columns */

COMMENT ON COLUMN cnChequera.pk_Chequera
	IS ' '
;

CREATE SEQUENCE cnchequera_pk_chequera_seq INCREMENT 1 START 1
;
