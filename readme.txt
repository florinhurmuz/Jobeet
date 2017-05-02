
# To run 'symfony' and not 'php symfony' in Windows,
# copy the symfony.bat file to the root of the application



# Create application
symfony generate:app frontend



# Directory structure rights
symfony project:permissions



    # If you have decided to create the tables by writing SQL statements,
    # you can generate the corresponding schema.yml configuration file by running
    symfony doctrine:build-schema



# Database configuration
symfony configure:database "mysql:host=localhost;dbname=jobeet" root 



# ORM - Build model
symfony doctrine:build --model



# ORM - Generate SQL
symfony doctrine:build --sql



# ORM - Create the tables in the database
symfony doctrine:insert-sql



# The doctrine:build --model task generates PHP files in the "lib/model/" directory that can be used to interact with the database.
# By browsing the generated files, you have probably noticed that Doctrine generates three classes per table.

# For the jobeet_job table:

1. JobeetJob:
    An object of this class represents a single record of the jobeet_job table. The class is empty by default.

2. BaseJobeetJob:
    The parent class of JobeetJob. Each time you run doctrine:build --model, this class is overwritten,
    so all customizations must be done in the JobeetJob class.

3. JobeetJobTable:
    The class defines methods that mostly return collections of JobeetJob objects. The class is empty by default.



    # Run this task now to generate forms and validators for the Jobeet model classes
    symfony doctrine:build --all --no-confirmation



# ORM - Load data from fixtures
symfony doctrine:data-load



    # Shortcut for "doctrine:build --all" and "doctrine:data-load" commands:
    symfony doctrine:build --all --and-load



# Symfony is able to automatically generate a module for a given model that provides basic manipulation features:
symfony doctrine:generate-module --with-show --non-verbose-templates frontend job JobeetJob




