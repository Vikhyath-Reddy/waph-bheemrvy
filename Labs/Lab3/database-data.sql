USE waph;
create table users(username varchar(50) PRIMARY KEY, password varchar(100) NOT NULL);
INSERT INTO users(username,password) VALUES ('admin',md5('P4$$w0rd'));
