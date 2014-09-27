#Silex - psyched and pumped !
============================

This project is a sample for a bootstrap silex application.
It's based on **lyrixx's Silex Kitchen edition**.
For more informations, see the [**dedicated page**](http://lyrixx.github.com/Silex-Kitchen-Edition).

## BASE PROJECT

**lyrixx project** is a great way to start working on silex with a proper structure.
It features
- Directory structure
- MVCish approach
- Doctrine DBAL
- Translation
- Bootstrap
- Boilerplate


However i wasn't satisfied with some of the choices that where made in the project. So i made some changes :

## CHANGES

- Implemented a User management system : [**Simple User for Silex**](https://github.com/jasongrimes/silex-simpleuser).
- Implemented a proper mvc folder structure in the the "src/" directory
- Created controllers system as services [** See Silex services controllers **](http://silex.sensiolabs.org/doc/providers/service_controller.html).
- Moved non source code elements to the folder "resources/" (console, routing, services registering etc)
- Moved the twig templates to "src/"
- Updated the layout using the SimpleUser version
- Styled the css using the spacelab sheet from [** Bootswatch**](http://bootswatch.com)

## INSTALLATION

Create a project using composer

        php composer.phar create-project -s dev enyosolutions/silex-pumped-distribution PATH/TO/YOUR/APP
        cd PATH/TO/YOUR/APP


## GETTING STARTED

The app is ready to fire. just navigate to your site with your browser.

You can then do the following :

- Go to "resources/config" and edit your config files as you see fit
- Create a controller in  "src/Controllers"
- Register it in "resources/controllers.php"
- Create your routes in "resources/routes.php"
- Create a twig template in "src/views"


You can now do everything you want. Add a redbeanphp to your vendors and you can start prototyping and building your app.
