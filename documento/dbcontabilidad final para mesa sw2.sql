--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.6
-- Dumped by pg_dump version 9.6.6

-- Started on 2017-12-18 16:50:47 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12469)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2337 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 191 (class 1259 OID 25890)
-- Name: cnbanco; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cnbanco (
    pk_banco integer DEFAULT nextval(('"cnbanco_pk_banco_seq"'::text)::regclass) NOT NULL,
    cncodigo character(4) NOT NULL,
    cnnombre character varying(50),
    cndireccion character varying(50),
    cnobservacion character varying(50)
);


ALTER TABLE cnbanco OWNER TO odoo;

--
-- TOC entry 192 (class 1259 OID 25896)
-- Name: cnbanco_pk_banco_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cnbanco_pk_banco_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cnbanco_pk_banco_seq OWNER TO odoo;

--
-- TOC entry 185 (class 1259 OID 25814)
-- Name: cnchequera; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cnchequera (
    pk_chequera integer DEFAULT nextval(('"cnchequera_pk_chequera_seq"'::text)::regclass) NOT NULL,
    fkbanco integer NOT NULL,
    fkcuentacontable integer NOT NULL,
    cndescripcion character varying(50),
    cnnroinicio character varying(20) NOT NULL,
    cnnrofin character varying(20) NOT NULL,
    cnhabilitar character(1) NOT NULL,
    cnestado character(1) NOT NULL
);


ALTER TABLE cnchequera OWNER TO odoo;

--
-- TOC entry 2338 (class 0 OID 0)
-- Dependencies: 185
-- Name: COLUMN cnchequera.pk_chequera; Type: COMMENT; Schema: public; Owner: odoo
--

COMMENT ON COLUMN cnchequera.pk_chequera IS ' ';


--
-- TOC entry 188 (class 1259 OID 25857)
-- Name: cnchequera_pk_chequera_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cnchequera_pk_chequera_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cnchequera_pk_chequera_seq OWNER TO odoo;

--
-- TOC entry 199 (class 1259 OID 25930)
-- Name: cncomprobante; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cncomprobante (
    pk_comprobante integer DEFAULT nextval(('"cncomprobante_pk_comprobante_seq"'::text)::regclass) NOT NULL,
    cncodcomp character(5),
    cntcomp integer NOT NULL,
    cnnrocomp character varying(15),
    cnfechacomp timestamp without time zone,
    fkmoneda integer NOT NULL,
    cntcambio numeric(10,2),
    fkbanco integer,
    cncliente character varying(50),
    cnglosa character varying(100),
    cnestado character(1)
);


ALTER TABLE cncomprobante OWNER TO odoo;

--
-- TOC entry 201 (class 1259 OID 25978)
-- Name: cncomprobante_pk_comprobante_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cncomprobante_pk_comprobante_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cncomprobante_pk_comprobante_seq OWNER TO odoo;

--
-- TOC entry 197 (class 1259 OID 25920)
-- Name: cncuentacte; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cncuentacte (
    pk_cuentacte integer DEFAULT nextval(('"cncuentacte_pk_cuentacte_seq"'::text)::regclass) NOT NULL,
    cncodigo character(4),
    cnnombre character varying(50),
    cndireccion character varying(50),
    cntelefono character varying(15),
    cntelefax character varying(15),
    cnnit character varying(15),
    cncontacto character varying(50),
    cnestado character(1) NOT NULL
);


ALTER TABLE cncuentacte OWNER TO odoo;

--
-- TOC entry 198 (class 1259 OID 25928)
-- Name: cncuentacte_pk_cuentacte_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cncuentacte_pk_cuentacte_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cncuentacte_pk_cuentacte_seq OWNER TO odoo;

--
-- TOC entry 200 (class 1259 OID 25934)
-- Name: cndetcomprobante; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cndetcomprobante (
    pk_detcomprobante integer DEFAULT nextval(('"cndetcomprobante_pk_detcomprobante_seq"'::text)::regclass) NOT NULL,
    fkcomprobante integer NOT NULL,
    fkcuentacontable integer NOT NULL,
    cndebe numeric(10,2),
    cnhaber numeric(10,2),
    fkctacte integer,
    fkproyecto integer,
    fkdocument integer,
    cnnrodoc character varying(25),
    cnglosadet character varying(100)
);


ALTER TABLE cndetcomprobante OWNER TO odoo;

--
-- TOC entry 2339 (class 0 OID 0)
-- Dependencies: 200
-- Name: COLUMN cndetcomprobante.fkctacte; Type: COMMENT; Schema: public; Owner: odoo
--

COMMENT ON COLUMN cndetcomprobante.fkctacte IS 'identificador de cuenta corriente';


--
-- TOC entry 2340 (class 0 OID 0)
-- Dependencies: 200
-- Name: COLUMN cndetcomprobante.fkproyecto; Type: COMMENT; Schema: public; Owner: odoo
--

COMMENT ON COLUMN cndetcomprobante.fkproyecto IS 'identificador de proyecto';


--
-- TOC entry 202 (class 1259 OID 25980)
-- Name: cndetcomprobante_pk_detcomprobante_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cndetcomprobante_pk_detcomprobante_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cndetcomprobante_pk_detcomprobante_seq OWNER TO odoo;

--
-- TOC entry 193 (class 1259 OID 25898)
-- Name: cndocumento; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cndocumento (
    pk_document integer DEFAULT nextval(('"cndocumento_pk_document_seq"'::text)::regclass) NOT NULL,
    cndescripcion character varying(50),
    cndocnota character varying(50),
    cndocbreve character varying(15)
);


ALTER TABLE cndocumento OWNER TO odoo;

--
-- TOC entry 194 (class 1259 OID 25904)
-- Name: cndocumento_pk_document_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cndocumento_pk_document_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cndocumento_pk_document_seq OWNER TO odoo;

--
-- TOC entry 203 (class 1259 OID 26005)
-- Name: cngrupo; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cngrupo (
    pkgrupo integer DEFAULT nextval(('"cngrupo_pkgrupo_seq"'::text)::regclass) NOT NULL,
    codigo character varying(4) NOT NULL,
    descripcion character varying(30),
    estado character(1)
);


ALTER TABLE cngrupo OWNER TO odoo;

--
-- TOC entry 205 (class 1259 OID 26023)
-- Name: cngrupo_pkgrupo_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cngrupo_pkgrupo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cngrupo_pkgrupo_seq OWNER TO odoo;

--
-- TOC entry 186 (class 1259 OID 25818)
-- Name: cnmoneda; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cnmoneda (
    pk_moneda integer DEFAULT nextval(('"cnmoneda_pk_moneda_seq"'::text)::regclass) NOT NULL,
    cnsimbolo character varying(15),
    cndescripcion character varying(25)
);


ALTER TABLE cnmoneda OWNER TO odoo;

--
-- TOC entry 2341 (class 0 OID 0)
-- Dependencies: 186
-- Name: COLUMN cnmoneda.pk_moneda; Type: COMMENT; Schema: public; Owner: odoo
--

COMMENT ON COLUMN cnmoneda.pk_moneda IS '  ';


--
-- TOC entry 189 (class 1259 OID 25859)
-- Name: cnmoneda_pk_moneda_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cnmoneda_pk_moneda_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cnmoneda_pk_moneda_seq OWNER TO odoo;

--
-- TOC entry 187 (class 1259 OID 25822)
-- Name: cnplancontable; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cnplancontable (
    pk_plancontable integer DEFAULT nextval(('"cnplancontable_pk_plancontable_seq"'::text)::regclass) NOT NULL,
    cncuentacontable character(13) NOT NULL,
    cndescripcion character varying(50),
    fkmoneda integer NOT NULL,
    cnnivel integer NOT NULL,
    cnctachica character(1),
    cnctacte character(1),
    cnctaflujo character(1),
    cnctapresu character(1),
    cnestado character(1) NOT NULL,
    cncuentapadre integer,
    tag character varying(100)
);


ALTER TABLE cnplancontable OWNER TO odoo;

--
-- TOC entry 190 (class 1259 OID 25861)
-- Name: cnplancontable_pk_plancontable_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cnplancontable_pk_plancontable_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cnplancontable_pk_plancontable_seq OWNER TO odoo;

--
-- TOC entry 195 (class 1259 OID 25906)
-- Name: cnproyecto; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cnproyecto (
    pk_proyecto integer DEFAULT nextval(('"cnproyecto_pk_proyecto_seq"'::text)::regclass) NOT NULL,
    cnnombre character varying(50),
    cncodigo character(6),
    cnclave character varying(25),
    cnglosa character varying(50),
    cnbreve character varying(15),
    fkctacosto integer NOT NULL,
    cnestado character(1) NOT NULL
);


ALTER TABLE cnproyecto OWNER TO odoo;

--
-- TOC entry 196 (class 1259 OID 25917)
-- Name: cnproyecto_pk_proyecto_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cnproyecto_pk_proyecto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cnproyecto_pk_proyecto_seq OWNER TO odoo;

--
-- TOC entry 204 (class 1259 OID 26009)
-- Name: cnusuario; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE cnusuario (
    pkusuario integer DEFAULT nextval(('"cnusuario_pkusuario_seq"'::text)::regclass) NOT NULL,
    fkgrupo integer NOT NULL,
    nickname character varying(50),
    nombrecompleto character varying(15),
    apellidocompleto character varying(50),
    password character varying(50),
    estado character(1),
    email character varying(50),
    authkey character varying(50),
    accesstoken character varying(50)
);


ALTER TABLE cnusuario OWNER TO odoo;

--
-- TOC entry 206 (class 1259 OID 26025)
-- Name: cnusuario_pkusuario_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE cnusuario_pkusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cnusuario_pkusuario_seq OWNER TO odoo;

--
-- TOC entry 2315 (class 0 OID 25890)
-- Dependencies: 191
-- Data for Name: cnbanco; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cnbanco (pk_banco, cncodigo, cnnombre, cndireccion, cnobservacion) VALUES (1, '001 ', 'BANCO NACIONAL DE BOLIVIA', 'CALLE WARNES # 23', 'CONTACTO CON JUAN PARI');


--
-- TOC entry 2342 (class 0 OID 0)
-- Dependencies: 192
-- Name: cnbanco_pk_banco_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cnbanco_pk_banco_seq', 1, true);


--
-- TOC entry 2309 (class 0 OID 25814)
-- Dependencies: 185
-- Data for Name: cnchequera; Type: TABLE DATA; Schema: public; Owner: odoo
--



--
-- TOC entry 2343 (class 0 OID 0)
-- Dependencies: 188
-- Name: cnchequera_pk_chequera_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cnchequera_pk_chequera_seq', 1, false);


--
-- TOC entry 2323 (class 0 OID 25930)
-- Dependencies: 199
-- Data for Name: cncomprobante; Type: TABLE DATA; Schema: public; Owner: odoo
--



--
-- TOC entry 2344 (class 0 OID 0)
-- Dependencies: 201
-- Name: cncomprobante_pk_comprobante_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cncomprobante_pk_comprobante_seq', 1, false);


--
-- TOC entry 2321 (class 0 OID 25920)
-- Dependencies: 197
-- Data for Name: cncuentacte; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cncuentacte (pk_cuentacte, cncodigo, cnnombre, cndireccion, cntelefono, cntelefax, cnnit, cncontacto, cnestado) VALUES (1, '001 ', 'ANALITICA', 'DIRECCION', '88387', '74849', '93882222', 'CON YALUSQUI', 'T');


--
-- TOC entry 2345 (class 0 OID 0)
-- Dependencies: 198
-- Name: cncuentacte_pk_cuentacte_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cncuentacte_pk_cuentacte_seq', 1, true);


--
-- TOC entry 2324 (class 0 OID 25934)
-- Dependencies: 200
-- Data for Name: cndetcomprobante; Type: TABLE DATA; Schema: public; Owner: odoo
--



--
-- TOC entry 2346 (class 0 OID 0)
-- Dependencies: 202
-- Name: cndetcomprobante_pk_detcomprobante_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cndetcomprobante_pk_detcomprobante_seq', 1, false);


--
-- TOC entry 2317 (class 0 OID 25898)
-- Dependencies: 193
-- Data for Name: cndocumento; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cndocumento (pk_document, cndescripcion, cndocnota, cndocbreve) VALUES (1, 'NOTA DE ENTREGA', 'NE', 'NE');
INSERT INTO cndocumento (pk_document, cndescripcion, cndocnota, cndocbreve) VALUES (2, 'FACTURA', 'FACT', 'FACT');


--
-- TOC entry 2347 (class 0 OID 0)
-- Dependencies: 194
-- Name: cndocumento_pk_document_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cndocumento_pk_document_seq', 2, true);


--
-- TOC entry 2327 (class 0 OID 26005)
-- Dependencies: 203
-- Data for Name: cngrupo; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cngrupo (pkgrupo, codigo, descripcion, estado) VALUES (1, '001', 'ADMINISTRADOR', 'T');
INSERT INTO cngrupo (pkgrupo, codigo, descripcion, estado) VALUES (2, '002', 'CLIENTES', 'T');


--
-- TOC entry 2348 (class 0 OID 0)
-- Dependencies: 205
-- Name: cngrupo_pkgrupo_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cngrupo_pkgrupo_seq', 2, true);


--
-- TOC entry 2310 (class 0 OID 25818)
-- Dependencies: 186
-- Data for Name: cnmoneda; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cnmoneda (pk_moneda, cnsimbolo, cndescripcion) VALUES (1, 'Bs', 'Bolivianos');
INSERT INTO cnmoneda (pk_moneda, cnsimbolo, cndescripcion) VALUES (2, '$us', 'Dolares Americanos');


--
-- TOC entry 2349 (class 0 OID 0)
-- Dependencies: 189
-- Name: cnmoneda_pk_moneda_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cnmoneda_pk_moneda_seq', 2, true);


--
-- TOC entry 2311 (class 0 OID 25822)
-- Dependencies: 187
-- Data for Name: cnplancontable; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (12, '2-1-01-02-032', 'INTERESES POR PAGAR', 1, 1, '0', '0', '0', '0', 'T', NULL, 'INTERES A PAGAR, PAGO DE INTERESES, PAGO DE INTERES');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (11, '2-1-01-02-022', 'PRESTAMOS PARTICULARES', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO A PARTICULARES, CUENTAS POR PAGAR A PERSONAL, CUENTA A PAGAR');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (10, '2-1-01-01-011', 'PROVEEDORES POR PAGAR', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO A PROVEEDOR, CUENTA POR PAGAR A PROVEEDOR, PAGO,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (5, '1-1-02-04-011', 'FONDOS A RENDIR MONEDA NACIONAL', 1, 1, '0', '0', '0', '0', 'T', NULL, 'FONDOS A RENDIR, RENDICION DE CUENTA, RENDICION DE MONEDA');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (7, '1-1-02-07-011', 'CREDITO FISCAL MONEDA NACIONAL', 1, 1, '0', '0', '0', '0', 'T', NULL, 'COMPRA DE MATERIA, FACTURA, COMPRA DE PRODUCTO');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (13, '2-1-05-01-011', 'DEBITO FISCAL IVA POR PAGAR', 1, 1, '0', '0', '0', '0', 'T', NULL, 'VENTA DE SERVICIO, VENTA DE PRODUCTO, FACTURA POR VENTA,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (14, '2-1-05-01-021', 'IMPUESTO A LAS TRANSACCIONES IT 3%', 1, 1, '0', '0', '0', '0', 'T', NULL, 'IMPUESTO A LAS TRANSACCIONES, IT, IMPUESTO IT,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (15, '2-1-06-01-011', 'SUELDO POR PAGAR', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO DE SUELDO, PAGO A PERSONAL, PAGO DE SALARIO, SALARIO DE PERSONAL');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (16, '2-1-06-01-041', 'RETENCION POR FALTA SIN JUSTIFICACION', 1, 1, '0', '0', '0', '0', 'T', NULL, 'FALTA DE PERSONAL, FALTA AL TRABAJO, INASISTENCIA. BORRACHERA, EMBRIAGADEZ,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (17, '2-1-06-02-011', 'CAJA NACIONAL DE SALUD', 1, 1, '0', '0', '0', '0', 'T', NULL, 'CAJA NACIONAL DE SALUD, CNS, CAJA,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (18, '2-1-06-02-021', 'AFP FUTURO DE BOLIVIA', 1, 1, '0', '0', '0', '0', 'T', NULL, 'AFP, FUTURO, FUTURO DE BOLIVIA, AFP');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (19, '2-1-06-02-031', 'AFP PREVISION BBVA', 1, 1, '0', '0', '0', '0', 'T', NULL, 'AFP PREVISION, PREVISION, BBVA,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (20, '2-1-06-02-081', 'PRO-VIVIENDA', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PRO VIVIENDA, PRO-VIVIENDA, VIVIENDA');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (21, '2-1-06-03-011', 'SUBSIDIOS', 1, 1, '0', '0', '0', '0', 'T', NULL, 'SUBSIDIO, SUBSIDIO MATERNO INFANTIL,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (22, '5-2-01-01-021', 'AGUINALDO', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO DE AGUINALDO, AGUINALDO, AGUINALDO DE FIN DE AÑO');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (23, '5-2-01-01-121', 'REFRIGERIOS', 1, 1, '0', '0', '0', '0', 'T', NULL, 'COMPRA DE REFRIGERIO, REFRIGERIO POR FIESTA, COMPRA DE GASEOSA, CERVEZA, COMIDA');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (24, '5-2-01-01-141', 'SERVICIO DE CAPACITACION Y ADIESTRAMIENTO', 1, 1, '0', '0', '0', '0', 'T', NULL, 'CAPACITACION DE PERSONAL, CAPACITACION, SEMINARIO DE PERSONAL, TALLER, ADIESTRAMIENTO DE PERSONAL');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (25, '5-2-01-01-151', 'BONO DE TRANSPORTE', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO DE TRASNPORTE, PAGO DE MICRO, PAGO DE MOVILIDAD, PASAJE DE AVION, BONO DE TRANSPORTE');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (26, '5-2-01-01-071', 'ALIMENTACION', 1, 1, '0', '0', '0', '0', 'T', NULL, 'ALIMENTACION DE PERSONAL, ALMUERZO DE PERSONAL, CENA DE PERSONAL, MERIENDA, COMIDA, DESAYUNO,');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (27, '5-2-01-01-131', 'AGASAJO', 1, 1, '0', '0', '0', '0', 'T', NULL, 'AGASAJO, CUMPLEAÑO DE PERSONAL, ANIVERSARIO DE EMPRESA, AGASAJO A PERSONAL, DIA DEL TRABAJO');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (28, '5-2-02-02-011', 'ALQUILER', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO DE ALQUILER, ALQUILER, CUENTA DE ALQUILER');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (29, '5-2-02-02-021', 'CONSUMO DE TELEFONO', 1, 1, '0', '0', '0', '0', 'T', NULL, 'TARJETA PRE PAGO, PAGO DE TELEFONO, TARJETA ENTEL, TARJETA TIGO, TARJETA VIVA, FACTURA DE TELEFONO');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (30, '5-2-02-02-031', 'CONSUMO DE AGUA', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO DE CONSUMO DE AGUA, PAGO POR AGUA, FACTURA DE AGUA POTABLE');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (32, '5-2-02-02-091', 'ALQUILER DE VEHICULO', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGO DE ALQUILER DE VEHICULO, ALQUILER DE VEHICULO, ALQUILER DE MOVILIDAD, ALQUILER DE EQUIPO, MOVIL');
INSERT INTO cnplancontable (pk_plancontable, cncuentacontable, cndescripcion, fkmoneda, cnnivel, cnctachica, cnctacte, cnctaflujo, cnctapresu, cnestado, cncuentapadre, tag) VALUES (31, '5-2-02-02-041', 'PAGO DE ENERGIA ELECTRICA', 1, 1, '0', '0', '0', '0', 'T', NULL, 'PAGA DE ENERGIA ELECTRICA, CORRIENTE ELECTRICA, FACTURA DE CORRIENTE, CORRIENTE,');


--
-- TOC entry 2350 (class 0 OID 0)
-- Dependencies: 190
-- Name: cnplancontable_pk_plancontable_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cnplancontable_pk_plancontable_seq', 32, true);


--
-- TOC entry 2319 (class 0 OID 25906)
-- Dependencies: 195
-- Data for Name: cnproyecto; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cnproyecto (pk_proyecto, cnnombre, cncodigo, cnclave, cnglosa, cnbreve, fkctacosto, cnestado) VALUES (1, 'PROYECTO NRO 1', '001   ', 'CLAVE', 'glosa', 'breve', 5, 'T');


--
-- TOC entry 2351 (class 0 OID 0)
-- Dependencies: 196
-- Name: cnproyecto_pk_proyecto_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cnproyecto_pk_proyecto_seq', 1, true);


--
-- TOC entry 2328 (class 0 OID 26009)
-- Dependencies: 204
-- Data for Name: cnusuario; Type: TABLE DATA; Schema: public; Owner: odoo
--

INSERT INTO cnusuario (pkusuario, fkgrupo, nickname, nombrecompleto, apellidocompleto, password, estado, email, authkey, accesstoken) VALUES (1, 1, 'admin', 'administrador', 'administrador', 'admin', 'T', 'admin@admin.co', '', '');


--
-- TOC entry 2352 (class 0 OID 0)
-- Dependencies: 206
-- Name: cnusuario_pkusuario_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('cnusuario_pkusuario_seq', 1, true);


--
-- TOC entry 2177 (class 2606 OID 26014)
-- Name: cngrupo pk_amgrupo; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cngrupo
    ADD CONSTRAINT pk_amgrupo PRIMARY KEY (pkgrupo);


--
-- TOC entry 2180 (class 2606 OID 26016)
-- Name: cnusuario pk_amusuario; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnusuario
    ADD CONSTRAINT pk_amusuario PRIMARY KEY (pkusuario);


--
-- TOC entry 2162 (class 2606 OID 25895)
-- Name: cnbanco pk_cnbanco; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnbanco
    ADD CONSTRAINT pk_cnbanco PRIMARY KEY (pk_banco);


--
-- TOC entry 2153 (class 2606 OID 25831)
-- Name: cnchequera pk_cnchequera; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnchequera
    ADD CONSTRAINT pk_cnchequera PRIMARY KEY (pk_chequera);


--
-- TOC entry 2172 (class 2606 OID 25939)
-- Name: cncomprobante pk_cncomprobante; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cncomprobante
    ADD CONSTRAINT pk_cncomprobante PRIMARY KEY (pk_comprobante);


--
-- TOC entry 2168 (class 2606 OID 25925)
-- Name: cncuentacte pk_cncuentacte; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cncuentacte
    ADD CONSTRAINT pk_cncuentacte PRIMARY KEY (pk_cuentacte);


--
-- TOC entry 2175 (class 2606 OID 25941)
-- Name: cndetcomprobante pk_cndetcomprobante; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndetcomprobante
    ADD CONSTRAINT pk_cndetcomprobante PRIMARY KEY (pk_detcomprobante);


--
-- TOC entry 2164 (class 2606 OID 25903)
-- Name: cndocumento pk_cndocumento; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndocumento
    ADD CONSTRAINT pk_cndocumento PRIMARY KEY (pk_document);


--
-- TOC entry 2155 (class 2606 OID 25833)
-- Name: cnmoneda pk_cnmoneda; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnmoneda
    ADD CONSTRAINT pk_cnmoneda PRIMARY KEY (pk_moneda);


--
-- TOC entry 2160 (class 2606 OID 25837)
-- Name: cnplancontable pk_cnplancontable; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnplancontable
    ADD CONSTRAINT pk_cnplancontable PRIMARY KEY (pk_plancontable);


--
-- TOC entry 2166 (class 2606 OID 25911)
-- Name: cnproyecto pk_proyecto; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnproyecto
    ADD CONSTRAINT pk_proyecto PRIMARY KEY (pk_proyecto);


--
-- TOC entry 2170 (class 2606 OID 25927)
-- Name: cncuentacte uq_cncuentacte_cncodigo; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cncuentacte
    ADD CONSTRAINT uq_cncuentacte_cncodigo UNIQUE (cncodigo);


--
-- TOC entry 2157 (class 2606 OID 25835)
-- Name: cnmoneda uq_cnmoneda_pk_moneda; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnmoneda
    ADD CONSTRAINT uq_cnmoneda_pk_moneda UNIQUE (pk_moneda);


--
-- TOC entry 2173 (class 1259 OID 25942)
-- Name: ixfk_cndetcomprobante_cnplancontable; Type: INDEX; Schema: public; Owner: odoo
--

CREATE INDEX ixfk_cndetcomprobante_cnplancontable ON cndetcomprobante USING btree (fkcuentacontable);


--
-- TOC entry 2158 (class 1259 OID 25838)
-- Name: ixfk_cnplancontable_cnmoneda; Type: INDEX; Schema: public; Owner: odoo
--

CREATE INDEX ixfk_cnplancontable_cnmoneda ON cnplancontable USING btree (fkmoneda);


--
-- TOC entry 2178 (class 1259 OID 26017)
-- Name: ixfk_cnusuario_cngrupo; Type: INDEX; Schema: public; Owner: odoo
--

CREATE INDEX ixfk_cnusuario_cngrupo ON cnusuario USING btree (fkgrupo);


--
-- TOC entry 2181 (class 2606 OID 25842)
-- Name: cnchequera fk_cnchequera_cnplancontable; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnchequera
    ADD CONSTRAINT fk_cnchequera_cnplancontable FOREIGN KEY (fkcuentacontable) REFERENCES cnplancontable(pk_plancontable);


--
-- TOC entry 2184 (class 2606 OID 25943)
-- Name: cncomprobante fk_cncomprobante_cnbanco; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cncomprobante
    ADD CONSTRAINT fk_cncomprobante_cnbanco FOREIGN KEY (fkbanco) REFERENCES cnbanco(pk_banco);


--
-- TOC entry 2185 (class 2606 OID 25948)
-- Name: cncomprobante fk_cncomprobante_cnmoneda; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cncomprobante
    ADD CONSTRAINT fk_cncomprobante_cnmoneda FOREIGN KEY (fkmoneda) REFERENCES cnmoneda(pk_moneda);


--
-- TOC entry 2186 (class 2606 OID 25953)
-- Name: cndetcomprobante fk_cndetcomprobante_cncomprobante; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndetcomprobante
    ADD CONSTRAINT fk_cndetcomprobante_cncomprobante FOREIGN KEY (fkcomprobante) REFERENCES cncomprobante(pk_comprobante);


--
-- TOC entry 2187 (class 2606 OID 25958)
-- Name: cndetcomprobante fk_cndetcomprobante_cncuentacte; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndetcomprobante
    ADD CONSTRAINT fk_cndetcomprobante_cncuentacte FOREIGN KEY (fkctacte) REFERENCES cncuentacte(pk_cuentacte);


--
-- TOC entry 2188 (class 2606 OID 25963)
-- Name: cndetcomprobante fk_cndetcomprobante_cndocumento; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndetcomprobante
    ADD CONSTRAINT fk_cndetcomprobante_cndocumento FOREIGN KEY (fkdocument) REFERENCES cndocumento(pk_document);


--
-- TOC entry 2189 (class 2606 OID 25968)
-- Name: cndetcomprobante fk_cndetcomprobante_cnplancontable; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndetcomprobante
    ADD CONSTRAINT fk_cndetcomprobante_cnplancontable FOREIGN KEY (fkcuentacontable) REFERENCES cnplancontable(pk_plancontable);


--
-- TOC entry 2190 (class 2606 OID 25973)
-- Name: cndetcomprobante fk_cndetcomprobante_cnproyecto; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cndetcomprobante
    ADD CONSTRAINT fk_cndetcomprobante_cnproyecto FOREIGN KEY (fkproyecto) REFERENCES cnproyecto(pk_proyecto);


--
-- TOC entry 2182 (class 2606 OID 25847)
-- Name: cnplancontable fk_cnplancontable_cnmoneda; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnplancontable
    ADD CONSTRAINT fk_cnplancontable_cnmoneda FOREIGN KEY (fkmoneda) REFERENCES cnmoneda(pk_moneda);


--
-- TOC entry 2183 (class 2606 OID 25912)
-- Name: cnproyecto fk_cnproyecto_cnplancontable; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnproyecto
    ADD CONSTRAINT fk_cnproyecto_cnplancontable FOREIGN KEY (fkctacosto) REFERENCES cnplancontable(pk_plancontable);


--
-- TOC entry 2191 (class 2606 OID 26018)
-- Name: cnusuario fk_cnusuario_cngrupo; Type: FK CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY cnusuario
    ADD CONSTRAINT fk_cnusuario_cngrupo FOREIGN KEY (fkgrupo) REFERENCES cngrupo(pkgrupo);


-- Completed on 2017-12-18 16:50:48 -04

--
-- PostgreSQL database dump complete
--

