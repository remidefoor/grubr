# Requirements

## Database

- MySQL instance running at localhost.
- Credentials:
  - Username: user
  - Password: user

All of this can be reconfigured in the database section of the `.env` file in the root of the project, should you wish to deviate form the above settings.



# Installation

1. Create a new database, called `handball`.

   1. This can be done with the following SQL.

      ```sql
      CREATE DATABASE handball;
      ```

2. Run the Laravel migrations to setup the database. 

   1. Navigate into the project folder.

   2. Execute the following command.

      ```bash
      php artisan migrate
      ```

3. Run the database seeder to fill up the database.

   1. Navigate into the project folder.

   2. Execute the following command.

      ```bash
      php artisan db:seed
      ```
