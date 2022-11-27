# CCTmail
An email system prototype built using PHP, MySQL, HTML, CSS, JavaScript and hosted on WAMP/LAMP server.

# How to run the application?

**1.** Download and Install WAMP (for Windows) or LAMP (for Linux) server on your system.
**2.** Clone this repository to the folder named 'www' in the WAMP installation directory.
**3.** Run the WAMP server by double cliking the WAMP icon.
**4.** Go to http://localhost/phpmyadmin/ and login with default credentials: username - root & password - (leave blank).
**5.** Create a new database with the name 'user_registration' with default settings.
**6.** Create a new table with the following configurations:
                    
                    +------------+----------+----------+--------+-------------+
                    | **Name**   | **Type** | **Size** |**NULL**| **Default** |
                    +------------+----------+----------+--------+-------------+
                    | name       | VARCHAR  | 32       | No     | None        |
                    +------------+----------+----------+--------+-------------+
                    | user       | VARCHAR  | 32       | No     | None        |
                    +------------+----------+----------+--------+-------------+
                    | password   | VARCHAR  | 60       | No     | None        |
                    +------------+----------+----------+--------+-------------+
                    | email      | VARCHAR  | 100      | No     | None        |
                    +------------+----------+----------+--------+-------------+
                    

**7.** Go to http://localhost/CCTmail/mail/login.php. The App is up and running!
