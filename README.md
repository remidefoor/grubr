# Configuration

## Database

Configure the following properties in the `.env` file, which can be found in the root of the project.

> DB_CONNECTION=mysql  
> DB_HOST=127.0.0.1  
> DB_PORT=3306  
> DB_DATABASE=handball  
> DB_USERNAME=dbuser  
> DB_PASSWORD=1234  


# Running the application

1. Create a new database, called `handball`.

   1. This can be done with the following SQL.

      ```sql
      CREATE DATABASE handball;
      ```

2. Run the Laravel migrations to setup the database. 

   1. Navigate into the project folder.

   2. Execute the following command.

      ```
      php artisan migrate
      ```

3. Run the database seeder to fill up the database.

   1. Navigate into the project folder.

   2. Execute the following command.

      ```
      php artisan db:seed
      ```

4. Create the necessary symbolic links.

   1. Navigate into the project folder.

   2. Execute the following command.

      ```
      php artisan storage:link
      ```
   

Congratulations, the application is now at your disposal!
