--
-- PostgreSQL database dump
--

-- Dumped from database version 10.0
-- Dumped by pg_dump version 10.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: decision; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE decision (
    recomend text,
    date information_schema.time_stamp,
    recomend_id integer NOT NULL
);


ALTER TABLE decision OWNER TO postgres;

--
-- Name: decision_recomend_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE decision_recomend_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE decision_recomend_id_seq OWNER TO postgres;

--
-- Name: decision_recomend_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE decision_recomend_id_seq OWNED BY decision.recomend_id;


--
-- Name: finance; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE finance (
    price double precision,
    date information_schema.time_stamp,
    price_id integer NOT NULL
);


ALTER TABLE finance OWNER TO postgres;

--
-- Name: finance_price_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE finance_price_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE finance_price_id_seq OWNER TO postgres;

--
-- Name: finance_price_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE finance_price_id_seq OWNED BY finance.price_id;


--
-- Name: news; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE news (
    date date,
    authors text,
    text text,
    nlp text,
    summary text,
    news_id integer NOT NULL
);


ALTER TABLE news OWNER TO postgres;

--
-- Name: news_news_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE news_news_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE news_news_id_seq OWNER TO postgres;

--
-- Name: news_news_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE news_news_id_seq OWNED BY news.news_id;


--
-- Name: sentiment; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE sentiment (
    analysis text,
    analysis_id integer NOT NULL
);


ALTER TABLE sentiment OWNER TO postgres;

--
-- Name: sentiment_analysis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sentiment_analysis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE sentiment_analysis_id_seq OWNER TO postgres;

--
-- Name: sentiment_analysis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE sentiment_analysis_id_seq OWNED BY sentiment.analysis_id;


--
-- Name: snr; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE snr (
    high double precision,
    lowerhigh double precision,
    resistance double precision,
    low double precision,
    lowerlow double precision,
    support double precision,
    snr_output text,
    date information_schema.time_stamp,
    snr_id integer NOT NULL
);


ALTER TABLE snr OWNER TO postgres;

--
-- Name: snr_snr_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE snr_snr_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE snr_snr_id_seq OWNER TO postgres;

--
-- Name: snr_snr_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE snr_snr_id_seq OWNED BY snr.snr_id;


--
-- Name: technical; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE technical (
    output text,
    output_id integer NOT NULL,
    date information_schema.time_stamp
);


ALTER TABLE technical OWNER TO postgres;

--
-- Name: technical_analysis; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE technical_analysis (
    analysis text,
    date information_schema.time_stamp,
    analysis_id integer NOT NULL
);


ALTER TABLE technical_analysis OWNER TO postgres;

--
-- Name: technical_analysis_analysis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE technical_analysis_analysis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE technical_analysis_analysis_id_seq OWNER TO postgres;

--
-- Name: technical_analysis_analysis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE technical_analysis_analysis_id_seq OWNED BY technical_analysis.analysis_id;


--
-- Name: technical_output_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE technical_output_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE technical_output_id_seq OWNER TO postgres;

--
-- Name: technical_output_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE technical_output_id_seq OWNED BY technical.output_id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    user_id integer NOT NULL,
    username character varying(15) NOT NULL,
    password character varying(22) NOT NULL,
    email character varying(50) NOT NULL
);


ALTER TABLE users OWNER TO postgres;

--
-- Name: users_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_user_id_seq OWNER TO postgres;

--
-- Name: users_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_user_id_seq OWNED BY users.user_id;


--
-- Name: decision recomend_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY decision ALTER COLUMN recomend_id SET DEFAULT nextval('decision_recomend_id_seq'::regclass);


--
-- Name: finance price_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY finance ALTER COLUMN price_id SET DEFAULT nextval('finance_price_id_seq'::regclass);


--
-- Name: news news_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY news ALTER COLUMN news_id SET DEFAULT nextval('news_news_id_seq'::regclass);


--
-- Name: sentiment analysis_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sentiment ALTER COLUMN analysis_id SET DEFAULT nextval('sentiment_analysis_id_seq'::regclass);


--
-- Name: snr snr_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY snr ALTER COLUMN snr_id SET DEFAULT nextval('snr_snr_id_seq'::regclass);


--
-- Name: technical output_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY technical ALTER COLUMN output_id SET DEFAULT nextval('technical_output_id_seq'::regclass);


--
-- Name: technical_analysis analysis_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY technical_analysis ALTER COLUMN analysis_id SET DEFAULT nextval('technical_analysis_analysis_id_seq'::regclass);


--
-- Name: users user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN user_id SET DEFAULT nextval('users_user_id_seq'::regclass);


--
-- Name: finance finance_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY finance
    ADD CONSTRAINT finance_pkey PRIMARY KEY (price_id);


--
-- Name: news news_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY news
    ADD CONSTRAINT news_pkey PRIMARY KEY (news_id);


--
-- Name: sentiment sentiment_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sentiment
    ADD CONSTRAINT sentiment_pkey PRIMARY KEY (analysis_id);


--
-- Name: snr snr_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY snr
    ADD CONSTRAINT snr_pkey PRIMARY KEY (snr_id);


--
-- Name: technical_analysis technical_analysis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY technical_analysis
    ADD CONSTRAINT technical_analysis_pkey PRIMARY KEY (analysis_id);


--
-- Name: technical technical_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY technical
    ADD CONSTRAINT technical_pkey PRIMARY KEY (output_id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


--
-- PostgreSQL database dump complete
--

