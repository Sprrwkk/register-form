**<h1><center>Collaborative Development</center></h1>**

1.  Install these components: 
    * PHP 7.4+
    * MySQL
    * Composer
    * git
    * laravel

2. Access to remote repo. Clone the repository to your local machine
   
   * ``git clone https://github.com/Sprrwkk/register-form.git``

3. Install all dependencies by composer 

    * ``composer install``
    
4. Configure environment settings and generate Application Key    

    * For Linux/Git Bash: ``cp .env.example .env``
    <br>
    * For Windows: ``copy .env.example .env ``
   
   * Then run this command:
   `php artisan key:generate`

5. Create MySQL database and set environments settings in .env for DB settings and mail system
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=register_project_db
    DB_USERNAME=your_db_username
    DB_PASSWORD=your_db_password
    
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.googlemail.com
    MAIL_PORT=465
    MAIL_USERNAME=laraveltestmailsender@gmail.com
    MAIL_PASSWORD=laraveltestmailsender11
    MAIL_ENCRYPTION=ssl
    MAIL_FROM_ADDRESS=laraveltestmailsender@gmail.com
    MAIL_FROM_NAME="${APP_NAME}"
    ```
    

6. Migrate the database connections

    * use this command: `php artisan migrate`


7. Run project
    * use this command: php artisan serve

8. Go to http://127.0.0.1:8000/register


