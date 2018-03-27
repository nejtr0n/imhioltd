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

--
-- Data for Name: actor_career_status; Type: TABLE DATA; Schema: public; Owner: imhioltd
--

INSERT INTO public.actor_career_status VALUES (1, 'На пенсии');
INSERT INTO public.actor_career_status VALUES (2, 'Работает');
INSERT INTO public.actor_career_status VALUES (3, 'В активном поиске');


--
-- Data for Name: actor_images; Type: TABLE DATA; Schema: public; Owner: imhioltd
--



--
-- Data for Name: countries; Type: TABLE DATA; Schema: public; Owner: imhioltd
--

INSERT INTO public.countries VALUES (1, 'Россия');
INSERT INTO public.countries VALUES (2, 'США');
INSERT INTO public.countries VALUES (3, 'Бельгия');
INSERT INTO public.countries VALUES (4, 'Норвегия');
INSERT INTO public.countries VALUES (5, 'Австралия');
INSERT INTO public.countries VALUES (6, 'Тайланд');
INSERT INTO public.countries VALUES (7, 'Румыния');
INSERT INTO public.countries VALUES (8, 'Болгария');
INSERT INTO public.countries VALUES (9, 'Потльша');
INSERT INTO public.countries VALUES (10, 'Литва');


--
-- Data for Name: actors; Type: TABLE DATA; Schema: public; Owner: imhioltd
--

INSERT INTO public.actors VALUES (1, '2012-03-26 05:47:09.283', 'Москва', 1, 2, 'карие', 'серые', 90, 90, 90, 'http://link', NULL, 'Вася');
INSERT INTO public.actors VALUES (2, '1995-06-29 07:38:50.212', 'Рязань', 2, 1, 'голубые', 'рыжие', 45, 45, 45, '', NULL, 'Петя');
INSERT INTO public.actors VALUES (3, '1950-05-29 07:39:40.453', 'Орел', 4, 3, 'белые', 'черные', 30, 30, 30, NULL, NULL, 'Маша');
INSERT INTO public.actors VALUES (4, '1978-09-29 07:40:33.875', 'Пермь', 6, 1, 'черные', 'зелёные', 90, 60, 90, NULL, NULL, 'Оля');
INSERT INTO public.actors VALUES (5, '1955-09-27 13:58:16.873', 'Владимир', 1, 2, 'карие', 'русые', 10, 10, 10, 'http://link', NULL, 'Владимир');


--
-- Data for Name: actor_aliases; Type: TABLE DATA; Schema: public; Owner: imhioltd
--

INSERT INTO public.actor_aliases VALUES (1, 1, 'Пёс');
INSERT INTO public.actor_aliases VALUES (1, 2, 'Кот');
INSERT INTO public.actor_aliases VALUES (1, 3, 'Мышь');
INSERT INTO public.actor_aliases VALUES (2, 4, 'Пёс');
INSERT INTO public.actor_aliases VALUES (2, 5, 'Книга');
INSERT INTO public.actor_aliases VALUES (2, 6, 'Тетрадь');
INSERT INTO public.actor_aliases VALUES (3, 7, 'Кот');
INSERT INTO public.actor_aliases VALUES (3, 8, 'Добрый кот');
INSERT INTO public.actor_aliases VALUES (3, 9, 'Веселый кот');
INSERT INTO public.actor_aliases VALUES (4, 10, 'отбитый');
INSERT INTO public.actor_aliases VALUES (4, 11, 'мышонок');
INSERT INTO public.actor_aliases VALUES (4, 12, 'диск');
INSERT INTO public.actor_aliases VALUES (5, 13, 'Кот');
INSERT INTO public.actor_aliases VALUES (5, 14, 'Книга');
INSERT INTO public.actor_aliases VALUES (5, 15, 'диск');


--
-- Name: actor_aliases_id_seq; Type: SEQUENCE SET; Schema: public; Owner: imhioltd
--

SELECT pg_catalog.setval('public.actor_aliases_id_seq', 15, true);


--
-- Name: actor_career_status_id_seq; Type: SEQUENCE SET; Schema: public; Owner: imhioltd
--

SELECT pg_catalog.setval('public.actor_career_status_id_seq', 3, true);


--
-- Name: actor_images_id_seq; Type: SEQUENCE SET; Schema: public; Owner: imhioltd
--

SELECT pg_catalog.setval('public.actor_images_id_seq', 1, false);


--
-- Name: actors_id_seq; Type: SEQUENCE SET; Schema: public; Owner: imhioltd
--

SELECT pg_catalog.setval('public.actors_id_seq', 5, true);


--
-- Name: countries_id_seq; Type: SEQUENCE SET; Schema: public; Owner: imhioltd
--

SELECT pg_catalog.setval('public.countries_id_seq', 10, true);


--
-- PostgreSQL database dump complete
--

