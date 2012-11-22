# Classroom 2.0

Classroom 2.0 aims to provide a space for people to get to know each other better.
The motivation is by browing through people's timelines, one can save more time to
know about your neighbors and quickly identify people who are sharing similar traits.
It is useful in the case that either people are too shy or too busy to start talking with others.
 
This project is by no means completed. It serves as a toy app during my 4 days bootCamp hosted
by Mozillar Online and NTU eventure. Special thanks to my tutors, for my first app.


## Quick start

0. I am using IDE Webstorm, Git as developing environment. Scripting with javascript, HTML, CSS,
PHP, Mysql. Third party library, HybridAuth for social login.
1. Download sources from github.
2. Open with Webstorm and do two types of deployment according to
 [JetBrains' Wiki](http://wiki.jetbrains.net/intellij/Remote_JavaScript_debugging_with_WebStorm_and_PHPStorm)
2.0 Env Setting: LAMP, SFTP, IP or Domain Name if you have.
2.1 Local Deployment for debugging javascript, php, look and feel design etc.
2.2 Cloud Deployment for debugging social login, since localhost is not allowed.
I use EC2 in this case.
3. Setup mysql, using the database.sql script.
4. Debuging process: check apache2 error.log, enable php strict debuggin by addng the line as in the file, open mysql console for manual data cleaning, take a look at Chrome console and Network status...
5. Happy coding!


## Features

* Allow people to get to know each other better through social networks.
* Single sign-on and there is no keeping of your secretes.


## Documentation

1. It is based on [HTML5 Boilerplate](http://html5boilerplate.com).
2. HybridAuth is the key library to do social login. Some codes are modified
based on their examples.
3. Standard PHP and Javascript.


## Contributing

Anyone and everyone is welcome to contribute, though it is initially my toy app.
