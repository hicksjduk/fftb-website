# Fareham Fairtrade Borough Group Website
This website runs on Heroku; changes pushed to the `master` branch are automatically published
to the site.
## Running locally
The easiest way to test changes before pushing them is to run an Apache PHP server in Docker. The command
to do this (with the root of your local clone of the repo as current directory) is:
```
docker run -p 8080:80 -d --name fftb -v "$PWD/web":/var/www/html php:apache
```
If not running in a Linux shell, you will need to replace `$PWD` with the fully-qualified path of the current
directory. You can use a local port other than 8080 by specifying the appropriate value after `-p`.

After this has been done once:
 * You can stop the server using the command `docker stop fftb`.
 * You can restart the server using the command `docker start fftb`.
 * When the server is running, you can view the website by pointing your browser at http://localhost:8080 (or whatever port you chose).
 