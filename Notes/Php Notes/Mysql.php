<?php ?>
1. how to upload very large data into mysql database ?
	ans 1.:
	run commands from mysql command prompt 
	use dbname
	source "C:/filepath/abc.sql"

	ans 2:
		LOAD DATA INFILE 'data.txt' INTO TABLE tbl_name
       FIELDS TERMINATED BY ',' ENCLOSED BY '"'
       LINES TERMINATED BY '\r\n';

2. how to calculate which queries taking long time to execute ?
	enable the MySQL slow query log.
	Log in to your server using SSH.
	At the command line, type the following command:
	mysql -u root -p pass..
	To enable the slow query log, type the following command at the mysql> prompt:
	SET GLOBAL slow_query_log = 'ON';

3. query optimization
	1 use EXPLAIN to see the excecution plan of query
	2 use Limit 1 clause when retriving unique row
	3 avoid using select *, which to force to full table scan
	4 index columns used in the joins and where clause
	5 use union all instead of union, if duplicate data.
	