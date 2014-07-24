LaraBB 
=========

LaraBB is a simply CMS for developpers with modules (forum, shop, users, admin, ...). 
This CMS is powered with Laravel, AngularJS and Bootstrap.

### Demo on : http://larabb.jordane.net

## Getting started

 1. Install the VM with the command : "vagrant up"
 2. Use the command "npm install" for install Gruntjs and these plugins
 3. Access to the VM with SSH (use Putty). (IP by default : 192.168.566.101, Port by default: 22 and the login name is : vagrant. You dont need password, only the SSH key in the puphpet folder)
 4. Go to the project with Putty : "cd /var/www"
 5. Install the packages with composer: "composer install"
 6. Create the database: "php artisan migrate"
 7. Edit the settings migrate in "\app\database\migrations"
 8. Fill the tables: "php artisan db:seed"
 9. It's ready


## Back end

* PHP : Framework Laravel (v4.2)


## Front end

* Javascript : Framework AngularJS
* CSS : Twitter Bootstrap


## Tools

* GruntJS
* Puphpet
* Vagrant
