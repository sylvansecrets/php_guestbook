CREATE TABLE guestbook (
				id SERIAL,
				visitor varchar(128) NOT NULL,
				comment text NOT NULL,
				time timestamp DEFAULT CURRENT_TIMESTAMP
);
