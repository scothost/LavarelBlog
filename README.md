# LavarelBlog
## Small PHP/MariaDB based blog site

I wrote this site while I was teaching PHP/MySQL at Forth Valley College. It was/is for trying to teach PHP, MySQL and basic MVC at the same time.

The folder DeployToProduction gives everything needed to porvision an EC2 instance from a Debian 12 AMI and intall the app onto it. 

1. Provisions the server with Terraform
2. Preps the system and installs Apache, Mysql, unzip and other depencencies
3. Creates database, database user and grants correct permissions
4. Copies the db dump and codebase then imports the database and cleans up the system

This is all executed from a single Jenkins pipeline from the Groovy script included


NOTE: To make this work for you, you'll need all the correct tools and plugins on Jenkins and to create 1 or 2 folders (mainly the Jenkins Workspace and /data folders). If you wish to use your own folders you can easily reflect them in the Ansible yaml scripts
