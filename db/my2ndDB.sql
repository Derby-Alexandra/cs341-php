CREATE table siteuser (
	id SERIAL PRIMARY KEY, 
	firstname VARCHAR(256) NOT NULL,
	email VARCHAR(256) NOT NULL,
	password VARCHAR(256) NOT NULL
	);

CREATE table category (
	id SERIAL PRIMARY KEY, 
	categoryname VARCHAR(256) NOT NULL
	);

CREATE table quote (
	id SERIAL PRIMARY KEY, 
	categoryid BIGINT REFERENCES category(id),
	quote VARCHAR(500) NOT NULL
	);

CREATE table userhasquote (
	userid BIGINT REFERENCES siteuser(id),
	quoteid BIGINT REFERENCES quote(id)
	);


DROP TABLE siteuser;
DROP TABLE category;
DROP TABLE quote;
DROP TABLE userhasquote;