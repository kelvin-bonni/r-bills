# r-bills
-----------------------------------------------
r-bills is a web application for 
uploading timesheet information in csv format to generate an invoice.

The application was developed with Laravel 5.6

- [Setting Up](#setting-up)

<a name="setting-up"></a>
## Setting up
--------------------------------------------
1. Clone the repository
    ```bash
    git clone https://github.com/kelvin-bonni/r-bills.git
    ```
2. Navigate to the project

3. Install the composer dependencies
    ```bash
    composer install
    ```
   
4. Make a copy of the `.env.example` file and name it `.env` (at the project root).

5. Generate the encryption salt
    ```bash
    php artisan key:generate
    ```

6. Create a database in your RDBMS for the application.

7. Set the configuration variables: 

    a. the url (in `APP_URL`), 
    
    b. the database connection settings (in the variables starting with `DB_`).

8. Run the migrations to setup the database
    ```bash
    php artisan migrate
    ```
   
10. All set. You may go to the application URL  :)

