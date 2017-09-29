CREATE TABLE IF NOT EXISTS Address
(
	aid		serial		not null unique,
	streetAddress	text		not null,
	city		text		not null,
	state		char(2)		null,
	country		text		not null,
	postalCode	integer		not null,
	PRIMARY KEY(aid)
);

SELECT * FROM Address;

CREATE TABLE IF NOT EXISTS Organization
(
	oid		serial		not null unique,
	location	text		not null unique,
	PRIMARY KEY(oid)
);

SELECT * FROM Organization;

CREATE TABLE IF NOT EXISTS Contact_Info
(
	cid		serial		not null unique,
	homePhone	char(15)	not null,
	workExt		char(5)		not null unique,
	email		varchar(96)	not null unique,
	PRIMARY KEY(cid)
);

SELECT * FROM Contact_Info;

CREATE TABLE IF NOT EXISTS Title
(
	tid		serial		not null unique,
	posName		text		not null unique,
	PRIMARY KEY(tid)
);

SELECT * FROM Title;

DROP TABLE Employees;
CREATE TABLE IF NOT EXISTS Employees
(
	eid		serial		not null unique,
	firstName	text		not null,
	lastName	text		not null,
	dateOfBirth	date		not null,
	username	varchar(96)	not null unique references Login(username),
	aid		integer		not null unique references Address(aid),
	cid		integer		not null unique references Contact_Info(cid),
	oid		integer		not null references Organization(oid),
	tid		integer		not null references Title(tid),
	PRIMARY KEY(eid),
	FOREIGN KEY(username) REFERENCES Login(username),
	FOREIGN KEY(aid) REFERENCES Address(aid),
	FOREIGN KEY(cid) REFERENCES Contact_Info(cid),
	FOREIGN KEY(oid) REFERENCES Organization(oid),
	FOREIGN KEY(tid) REFERENCES Title(tid)
);

SELECT * FROM Employees;

CREATE TABLE IF NOT EXISTS Login
(
	username	varchar(96)	not null unique,
	PRIMARY KEY(username)
);

SELECT * FROM Login;




--DROP FUNCTION new_user();
CREATE OR REPLACE FUNCTION new_user() RETURNS trigger AS
$$
BEGIN
	UPDATE Login SET user_pw = CRYPT(NEW.user_pw, GEN_SALT('md5'));
	RETURN NEW;
END;
$$
LANGUAGE PLPGSQL;

--DROP TRIGGER new_user ON Login;
CREATE TRIGGER new_user
AFTER INSERT
ON Login
FOR EACH ROW
EXECUTE PROCEDURE new_user();

DROP TABLE Expired_PW;
CREATE TABLE IF NOT EXISTS Expired_PW (
	changeID	serial		not null unique,
	username	text		not null references Login (username),
	oldPW		text		not null,
	pwChangeDate	date		not null,
	PRIMARY KEY(changeID),
	FOREIGN KEY(username) REFERENCES Login(username)	
);
SELECT * FROM Expired_PW;


CREATE OR REPLACE FUNCTION update_password(text, text, text, date) RETURNS text AS
$$
DECLARE
	username	text		= $1;
	oldPW		text		= $2;
	user_PW		text		= $3;
	pwChangeDate	date		= $4;
	pwHelper	text		= Login.user_PW FROM Login WHERE Login.username = $1;
	newChange	int		= MAX(changeID) FROM Expired_PW;
BEGIN

	--IF CRYPT($2, pwHelper) =  THEN
	--	RAISE EXCEPTION 'Please enter your old password.';
	--ELSE
	--	IF $3 <> CRYPT($2, pwHelper) THEN
		IF newChange IS NULL THEN
			INSERT INTO Expired_PW (changeID, username, oldPW, pwChangeDate)
			VALUES (1, $1, $2, $4);
			UPDATE Expired_PW
			SET oldPw = pwHelper WHERE changeID = 1;
			UPDATE Login SET user_PW = CRYPT($3, GEN_SALT('md5')) WHERE Login.username = $1;
		ELSE
			INSERT INTO Expired_PW (changeID, username, oldPW, pwChangeDate)
			VALUES (newChange+1, $1, $2, $4);
			UPDATE Expired_PW
			SET oldPw = pwHelper WHERE changeID = newChange+1;
			UPDATE Login SET user_PW = CRYPT($3, GEN_SALT('md5')) WHERE Login.username = $1;
		END IF;
		--ELSE
		--	RAISE EXCEPTION 'Please enter a new password.';
		--END IF;
	--END IF;
	RETURN 'Password successfully changed.';
END;
$$
LANGUAGE PLPGSQL;

SELECT update_password('testing', 'mynewPa$$word', 'anutha1', CURRENT_DATE);
SELECT * FROM Login;

SELECT * FROM Expired_PW
ORDER BY changeID DESC;

INSERT INTO Login
VALUES ('testing', 'mypasswordis');

DELETE FROM Login
WHERE username = 'testing';
SELECT * FROM Login;

SELECT user_PW = CRYPT('mypasswordis', user_PW)
FROM Login;






