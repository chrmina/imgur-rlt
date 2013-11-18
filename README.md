# Simple imgur roulette.

**Demo:** [http://chrmina.heliohost.org/](http://chrmina.heliohost.org/)

	   **Requirements:** php, sqlite3

### How to use ###
1. Run `sqlite.php` to create the sqlite3 database file.
2. Run `sqliteinsert.php` to create valid links to imgur images. Note that the default number of links to be created is 1000 and it will take some time. Modify the script to your needs. You can run the script as many times as you want to create the desirable amount of links in the database.
3. Delete `sqlite.php` and `sqliteinsert.php` for security.
