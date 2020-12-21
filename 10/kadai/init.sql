drop table passdb;
create table passdb(uname text, pass text, admin bool);
insert into passdb values('admin', 'admin', true);
insert into passdb values('user', 'user', false);
