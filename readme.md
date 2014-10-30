## Coanda CMS

[![Latest Stable Version](https://poser.pugx.org/coandacms/coanda-core/v/stable.svg)](https://packagist.org/packages/coandacms/coanda-core) [![Total Downloads](https://poser.pugx.org/coandacms/coanda-core/downloads.svg)](https://packagist.org/packages/coandacms/coanda-core) [![Latest Unstable Version](https://poser.pugx.org/coandacms/coanda-core/v/unstable.svg)](https://packagist.org/packages/coandacms/coanda-core) [![License](https://poser.pugx.org/coandacms/coanda-core/license.svg)](https://packagist.org/packages/coandacms/coanda-core)

Coanda CMS is a full featured content management system based on the [Laravel PHP framework](http://laravel.com).

Developers will love Coanda CMS for the control it gives you over page types, layouts, custom modules and much more.

End users will love Coanda CMS for its easy to use admin area, multiple publish options, version control, audit history and much more.

![CoandaCMS Admin Screen](http://files.devversion.com/coandacms/admin-screen.png)

### Installation

Coanda CMS can be installed by either cloning this starter system or adding the core package [CoandaCMS/coanda-core](https://github.com/CoandaCMS/coanda-core) to an existing Laravel application.

To use this starter system, first clone/download this repo to a web server or development environment. You may wish to consider using the excellent [Laravel Homestead](http://laravel.com/docs/homestead) to serve applications locally.

Once you have a fresh copy of this repo you will need to use composer to install the dependencies. For more information on how to install composer visit [https://getcomposer.org/](https://getcomposer.org/)

    composer install
    
Next, you will need to create a database and change your environment database settings in `app/database.php` or `app/your-env/database.php`
    
Once you have yoru database settings in place, then you will just need to the run the migrations for Coanda CMS and the setup command to add your first user and group

    php artisan migrate --package="coandacms/coanda-core"
    php artisan coanda:setup

Then just visit yoursite.com/admin and start creating content!

### Developing your site

For details on how you can add different page types, layout, custom modules and style your site, check out the [Coanda CMS docs](http://coandacms.org/docs) 

### Licence

Coanda CMS is an open source software package licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Feedback

If you have any questions, feature requests or criticism (preferably constructive!) then please get in touch.

Twitter - [@alexdover](http://twitter.com/alexdover)