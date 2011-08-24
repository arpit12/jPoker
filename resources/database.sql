--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: deal; Type: TABLE; Schema: public; Owner: jaseem; Tablespace: 
--

CREATE TABLE deal (
    dl_cost integer,
    dl_points integer,
    dl_id integer NOT NULL
);


ALTER TABLE public.deal OWNER TO jaseem;

--
-- Name: deal_dl_id_seq; Type: SEQUENCE; Schema: public; Owner: jaseem
--

CREATE SEQUENCE deal_dl_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.deal_dl_id_seq OWNER TO jaseem;

--
-- Name: deal_dl_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jaseem
--

ALTER SEQUENCE deal_dl_id_seq OWNED BY deal.dl_id;


--
-- Name: deal_dl_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jaseem
--

SELECT pg_catalog.setval('deal_dl_id_seq', 13, true);


--
-- Name: employee; Type: TABLE; Schema: public; Owner: jaseem; Tablespace: 
--

CREATE TABLE employee (
    em_id character varying(10) NOT NULL,
    em_name character varying(100),
    em_pass character varying(100),
    em_bal integer,
    em_points integer
);


ALTER TABLE public.employee OWNER TO jaseem;

--
-- Name: dl_id; Type: DEFAULT; Schema: public; Owner: jaseem
--

ALTER TABLE deal ALTER COLUMN dl_id SET DEFAULT nextval('deal_dl_id_seq'::regclass);


--
-- Data for Name: deal; Type: TABLE DATA; Schema: public; Owner: jaseem
--

COPY deal (dl_cost, dl_points, dl_id) FROM stdin;
\.


--
-- Data for Name: employee; Type: TABLE DATA; Schema: public; Owner: jaseem
--

COPY employee (em_id, em_name, em_pass, em_bal, em_points) FROM stdin;
\.


--
-- Name: deal_pkey; Type: CONSTRAINT; Schema: public; Owner: jaseem; Tablespace: 
--

ALTER TABLE ONLY deal
    ADD CONSTRAINT deal_pkey PRIMARY KEY (dl_id);


--
-- Name: employee_pkey; Type: CONSTRAINT; Schema: public; Owner: jaseem; Tablespace: 
--

ALTER TABLE ONLY employee
    ADD CONSTRAINT employee_pkey PRIMARY KEY (em_id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

