LaraBB 
=========

At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.

### Demo on : http://larabb.jordane.net

## Getting started

 1. Install the VM with the command : "vagrant up"
 2. Use the command "npm install" for install Gruntjs and these plugins
 3. Access to the VM with SSH (use Putty). (IP by default : 192.168.566.101, Port by default: 22 and the login name is : vagrant. You dont need password, only the SSH key in the puphpet folder)
 4. Go to the project with Putty : "cd /var/www"
 5. Install the packages with compsoer: "composer install"
 6. Create the database: php artisan migrate
 7. Edit the settings migrate in "\app\database\migrations"
 8. Fill the tables: php artisan db:seed
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
