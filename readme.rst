**********
Set-Up
**********

Base-URL
--------
Currently, the base_url() is set to http://localhost:8000.
Please change this to reflect your server at `application/config/config.php`.

Database
--------
This php-guestbook requires a database to function.
The guide for the initial set-up can be found at the `Code Igniter Database Configuration <https://codeigniter.com/user_guide/database/configuration.html>`_.

`application/initialization.sql` contains a short sql script to create the "guestbook" table in Postgres. Modifications may be required for other SQL implementations.

The basic requirements include an id column (unique), a visitor column (varchar), a comment column (text), and a time column (timestamp).
