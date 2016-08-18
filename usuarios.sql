-- Table: usuarios

-- DROP TABLE usuarios;

CREATE TABLE usuarios
(
  id serial NOT NULL,
  first_name character varying(255) NOT NULL,
  last_name character varying(255) NOT NULL,
  title character varying(255) NOT NULL,
  company character varying(255) NOT NULL,
  email character varying(255) NOT NULL,
  role character varying(255) NOT NULL,
  created_at timestamp(0) without time zone,
  updated_at timestamp(0) without time zone,
  CONSTRAINT usuarios_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE usuarios
  OWNER TO sl;
