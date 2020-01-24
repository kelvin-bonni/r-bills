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
    git clone https://kwakuapeadu@bitbucket.org/callenssolutions/atm-fusion-camera-portal.git
    ```

2. CD into the project
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
    
    c. the email settings (in the variables starting with `MAIL_`).
    
    d. the authentication driver `AUTH_DRIVER`. 
    For database authentication set the driver to `eloquent`. 
    For Active Directory or LDAP authentication set the driver to `adldap` 
    and set the values for the Active Directory Server in the variables starting with `ADLDAP_`
    
    e. the admin user name and email in `ADMIN_NAME` and `ADMIN_EMAIL`
    
    f. the event broadcast driver for real-time event broadcasting, `BROADCAST_DRIVER`.
    The application has been tested with the **redis** driver.

8. Run the migrations to setup the database
    ```bash
    php artisan migrate
    ```

9. Seed the database.
    ```bash
    php artisan db:seed
    ```
    
    This will setup the default Super Administrator account with the name and email provided in the 
    `.env` file with an auto-generated password.

10. All set. You may go to the application URL  :)

