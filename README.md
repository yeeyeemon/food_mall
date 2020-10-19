This project is deploy with heroku

https://dev.to/jsafe00/deploy-laravel-application-with-database-to-heroku-l50

1. heroku login

2. Create Procfile inside your main Laravel

    Inside your Procfile, put this code line.
    web: vendor/bin/heroku-php-apache2 public/
3. Go back to your terminal and type:

git init - This is for git initialization
heroku create - This command will create your app and repository name in

4. git add .
git commit –m “first commit”
git push heroku master

5. Add Config Vars setttings in Heroku

Click settings then add the config vars like below. Follow some config in your .env file. The APP_ENV is production while APP_URL is your heroku url. Please refer below my configuration.

6. Configure database
Lastly, we will configure our database so that we can run migrations and seeders in Heroku. Actually, we can use MySQL but we need to upgrade our membership. That’s why in this tutorial, we will be using PostgreSQL because it’s free. :)

7. heroku config

8. change db config (config/database.php)

9. git add .
git commit –m “update db connection”
git push heroku master

Then, run migration in heroku.

heroku run php artisan migrate

10. heroku run php artisan db:seed

