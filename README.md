# cmm_alter_char_set
A PHP script for converting character set for all tables in a database.

Recently I migrated a drupal site that uses ms sql server to mysql.

One of the conversions required me to convert all the tables from latin1_swedish_ci to utf8_general_ci character set.

If you only want to convert a few tables, just execute the following sql statement.
?
1
  
ALTER TABLE tableName CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

We all know a typical drupal site can have100+ tables.

In my case, the database I needed to convert had 350+ tables, so doing it manually was simply not an option.

So I am sharing a simple script I used to do all the conversions
- See more at: http://cheekymonkeymedia.ca/blog/drupal-planet/php-script-converting-character-set-all-tables-database#sthash.nutckfoj.dpuf
