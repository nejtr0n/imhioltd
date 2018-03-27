--
-- PostgreSQL database dump
--

-- Dumped from database version 10.3 (Debian 10.3-1.pgdg90+1)
-- Dumped by pg_dump version 10.3 (Debian 10.3-1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: actor_aliases; Type: TABLE; Schema: public; Owner: imhioltd
--

CREATE TABLE public.actor_aliases (
    actor_id integer,
    id integer NOT NULL,
    name character varying(255)
);


ALTER TABLE public.actor_aliases OWNER TO imhioltd;

--
-- Name: actor_aliases_id_seq; Type: SEQUENCE; Schema: public; Owner: imhioltd
--

CREATE SEQUENCE public.actor_aliases_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actor_aliases_id_seq OWNER TO imhioltd;

--
-- Name: actor_aliases_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: imhioltd
--

ALTER SEQUENCE public.actor_aliases_id_seq OWNED BY public.actor_aliases.id;


--
-- Name: actor_career_status; Type: TABLE; Schema: public; Owner: imhioltd
--

CREATE TABLE public.actor_career_status (
    id integer NOT NULL,
    name character varying(255)
);


ALTER TABLE public.actor_career_status OWNER TO imhioltd;

--
-- Name: actor_career_status_id_seq; Type: SEQUENCE; Schema: public; Owner: imhioltd
--

CREATE SEQUENCE public.actor_career_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actor_career_status_id_seq OWNER TO imhioltd;

--
-- Name: actor_career_status_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: imhioltd
--

ALTER SEQUENCE public.actor_career_status_id_seq OWNED BY public.actor_career_status.id;


--
-- Name: actor_images; Type: TABLE; Schema: public; Owner: imhioltd
--

CREATE TABLE public.actor_images (
    id integer NOT NULL,
    path character varying(255)
);


ALTER TABLE public.actor_images OWNER TO imhioltd;

--
-- Name: actor_images_id_seq; Type: SEQUENCE; Schema: public; Owner: imhioltd
--

CREATE SEQUENCE public.actor_images_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actor_images_id_seq OWNER TO imhioltd;

--
-- Name: actor_images_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: imhioltd
--

ALTER SEQUENCE public.actor_images_id_seq OWNED BY public.actor_images.id;


--
-- Name: actors; Type: TABLE; Schema: public; Owner: imhioltd
--

CREATE TABLE public.actors (
    id integer NOT NULL,
    birthday timestamp without time zone NOT NULL,
    birth_place character varying(512),
    country_id integer,
    career_status_id integer,
    eyes_color character varying(255),
    hair_color character varying(255),
    boobs_size integer,
    waist_size integer,
    ass_size integer,
    social_link character varying(512),
    image_id integer,
    name character varying(255)
);


ALTER TABLE public.actors OWNER TO imhioltd;

--
-- Name: actors_id_seq; Type: SEQUENCE; Schema: public; Owner: imhioltd
--

CREATE SEQUENCE public.actors_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actors_id_seq OWNER TO imhioltd;

--
-- Name: actors_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: imhioltd
--

ALTER SEQUENCE public.actors_id_seq OWNED BY public.actors.id;


--
-- Name: countries; Type: TABLE; Schema: public; Owner: imhioltd
--

CREATE TABLE public.countries (
    id integer NOT NULL,
    name character varying(255)
);


ALTER TABLE public.countries OWNER TO imhioltd;

--
-- Name: countries_id_seq; Type: SEQUENCE; Schema: public; Owner: imhioltd
--

CREATE SEQUENCE public.countries_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.countries_id_seq OWNER TO imhioltd;

--
-- Name: countries_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: imhioltd
--

ALTER SEQUENCE public.countries_id_seq OWNED BY public.countries.id;


--
-- Name: actor_aliases id; Type: DEFAULT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_aliases ALTER COLUMN id SET DEFAULT nextval('public.actor_aliases_id_seq'::regclass);


--
-- Name: actor_career_status id; Type: DEFAULT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_career_status ALTER COLUMN id SET DEFAULT nextval('public.actor_career_status_id_seq'::regclass);


--
-- Name: actor_images id; Type: DEFAULT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_images ALTER COLUMN id SET DEFAULT nextval('public.actor_images_id_seq'::regclass);


--
-- Name: actors id; Type: DEFAULT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actors ALTER COLUMN id SET DEFAULT nextval('public.actors_id_seq'::regclass);


--
-- Name: countries id; Type: DEFAULT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.countries ALTER COLUMN id SET DEFAULT nextval('public.countries_id_seq'::regclass);


--
-- Name: actor_aliases actor_aliases_id_pk; Type: CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_aliases
    ADD CONSTRAINT actor_aliases_id_pk PRIMARY KEY (id);


--
-- Name: actor_career_status actor_career_status_id_pk; Type: CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_career_status
    ADD CONSTRAINT actor_career_status_id_pk PRIMARY KEY (id);


--
-- Name: actor_images actor_images_id_pk; Type: CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_images
    ADD CONSTRAINT actor_images_id_pk PRIMARY KEY (id);


--
-- Name: actors actors_pkey; Type: CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actors
    ADD CONSTRAINT actors_pkey PRIMARY KEY (id);


--
-- Name: countries countries_id_pk; Type: CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.countries
    ADD CONSTRAINT countries_id_pk PRIMARY KEY (id);


--
-- Name: actor_career_status_pkey; Type: INDEX; Schema: public; Owner: imhioltd
--

CREATE INDEX actor_career_status_pkey ON public.actor_career_status USING btree (id);


--
-- Name: actor_images_pkey; Type: INDEX; Schema: public; Owner: imhioltd
--

CREATE INDEX actor_images_pkey ON public.actor_images USING btree (id);


--
-- Name: countries_pkey; Type: INDEX; Schema: public; Owner: imhioltd
--

CREATE INDEX countries_pkey ON public.countries USING btree (id);


--
-- Name: actor_aliases actor_aliases_actors_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actor_aliases
    ADD CONSTRAINT actor_aliases_actors_id_fk FOREIGN KEY (actor_id) REFERENCES public.actors(id) ON UPDATE SET NULL ON DELETE SET NULL;


--
-- Name: actors actors_actor_career_status_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actors
    ADD CONSTRAINT actors_actor_career_status_id_fk FOREIGN KEY (career_status_id) REFERENCES public.actor_career_status(id) ON UPDATE SET NULL ON DELETE SET NULL;


--
-- Name: actors actors_actor_images_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actors
    ADD CONSTRAINT actors_actor_images_id_fk FOREIGN KEY (image_id) REFERENCES public.actor_images(id) ON UPDATE SET NULL ON DELETE SET NULL;


--
-- Name: actors actors_countries_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: imhioltd
--

ALTER TABLE ONLY public.actors
    ADD CONSTRAINT actors_countries_id_fk FOREIGN KEY (country_id) REFERENCES public.countries(id) ON UPDATE SET NULL ON DELETE SET NULL;


--
-- PostgreSQL database dump complete
--

