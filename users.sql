-- Table: users

-- DROP TABLE users;

CREATE TABLE users
(
  id serial NOT NULL,
  name character varying(255) NOT NULL,
  email character varying(255) NOT NULL,
  password character varying(255) NOT NULL,
  remember_token character varying(100),
  created_at timestamp(0) without time zone,
  updated_at timestamp(0) without time zone,
  CONSTRAINT users_pkey PRIMARY KEY (id),
  CONSTRAINT users_email_unique UNIQUE (email)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE users
  OWNER TO sl;
