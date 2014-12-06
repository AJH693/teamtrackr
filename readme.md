Project Trackr
==============

Project Trackr is a web application which can be used to track progress of software project. The application will allow teams to input a list of tasks at the start of their project. These tasks are not required to have code to complete them. 

Once an initial task have been inputted, the project estimation will be locked and future changes will be prevented (unless explicitly allowed by the admin). The application will tally up the metrics in each of the team’s tasks in order to come up with totals for the entire project. Then, throughout the project, each team will update the tasks they have completed along with any metrics associated with each task. 

## Laravel PHP Framework

This project uses the Laravel PHP Framework. Laravel is a web application framework with expressive, elegant syntax. The official documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs)

Setup
-----

**** <b><u>**Note**:</u></b> *****
<br>This set up was designed for Unix/Mac OS X only. </br>


This team uses Git and works in individual forks, which are isolated
development areas. Fork the repository in GitHub:

    https://github.com/holdenrehg/teamtrackr/fork

Clone the forked repository to your local machine in your favorite Git client:

    git clone git@github.com:GITUSERNAME-wf/teamtrackr.git /your/local/path
    

Requirements
------------

### PHP ###
1. [Download PHP] (http://php.net/downloads.php) for your machine if you do not have it already.
2. Add php to your path (/usr/local/bin/php) so that you can use it from terminal. This is done in your .bash_profile.
3. Type `php` in your terminal to verify that it works.

### Mysql ### 

1. [Download mysql](http://dev.mysql.com/downloads/) for your machine if you do not have it already.
2. Add mysql to your path (/path/to/mysql/bin/) so that it can be used from terminal. This is done in your .bash_profile.3. Type `mysql` in your terminal and verify that a connection is made.

### Composer ###

1. Download [composer](https://getcomposer.org/download/) on your machine. <br >
Note: you will want to run the curl command in the top level directory of the project </br>


Running the application
-----
1. install composer with the following command: `php composer.phar install`

2. Now you should be able to start the local server: `php artisan serve` (runs your server at http://localhost:8000)

3. Before you can log in or create an account on the website you need to set up a mysql database named teamtrackr on your local machine:

	- Start Mysql

	`mysql`<br>

	`CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';`<br>

	- Provide the user with access to the information they will need.
	
	`GRANT ALL PRIVILEGES ON * . * TO 'newuser'@'localhost'`;<br>

	- Once you have finalized the permissions that you want to set up for your new users, always be sure to 	reload all the privileges.

	`FLUSH PRIVILEGES;`
	</br>

4. In /app/configure/database.php, update the mysql array with your correct database information.
5. Run: `php artisan migrate` This will populate the database with all the tables that you need.

Congratulations!
-----
You have successfully started the Project Trackr locally! You can now make additions and customizations!