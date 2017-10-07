create table lotterys
(
	id int auto_increment
		primary key,
	full_name varchar(64) null,
	email varchar(64) null,
	numbers int null,
	is_winner tinyint(1) default '0' null,
	updated_at datetime null,
	created_at datetime null
)
;




INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('ddd', 'dddd@www.ru', 345, 0, '2017-10-06 11:58:33', '2017-10-06 11:58:33');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('hhhh', 'dddd@www.ru', 245, 1, '2017-10-06 11:59:18', '2017-10-06 11:59:18');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('hhh', 'dddd@www.ru', 579, 0, '2017-10-06 11:59:33', '2017-10-06 11:59:33');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('hhh', 'nvolvacheva@yandex.ru', 579, 1, '2017-10-06 11:59:33', '2017-10-06 11:59:33');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('Nik', 'alinikol@gmail.com', 123, 0, '2017-10-07 19:06:33', '2017-10-07 19:06:33');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('Jane', 'Jane@gmail.ccc', 567, 0, '2017-10-07 19:06:53', '2017-10-07 19:06:53');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('Nik', 'alinikol@gmail.com', 123, 1, '2017-10-07 19:54:03', '2017-10-07 19:54:03');
INSERT INTO lottery.lotterys (full_name, email, numbers, is_winner, updated_at, created_at) VALUES ('Nik', 'nvolvacheva@yandex.ru', 123, 1, '2017-10-07 20:11:35', '2017-10-07 20:11:35');