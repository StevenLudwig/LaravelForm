-- Table: migrations

-- DROP TABLE migrations;

CREATE TABLE migrations
(
  migration character varying(255) NOT NULL,
  batch integer NOT NULL
)
WITH (
  OIDS=FALSE
);
ALTER TABLE migrations
  OWNER TO sl;
