Emma Starter
===

Use the Emma Starter repository quickly spin up a WordPress + Emma Child development environment.

**NOTE:** When running a Virtual Machine (VM) based local development environment, it is
recommended to SSH into the VM to run the **Getting Started** commmands.

**Example:** Using vagrant, the `vagrant ssh` command will SSH into the VM instance.

Getting Started
---------------

To get started, change directories to the target directory where WordPress will be installed.

**Example:** `cd my/target/directory`

1. From within the target directory run the following commands to download `Emma Starter`,
`Emma` and `WordPress` to the target directory.

```
git clone https://github.com/pressden/emma-starter.git .
git clone https://github.com/pressden/emma.git wp-content/themes/emma
wp core download --skip-content

```

2. Create a unique wp-config.php file for this project. This command will prompt for required
information.

```
wp config create --prompt=dbname,dbuser,dbpass

```

3. Install WordPress. This command will prompt for required information and generate a unique
password for the admin user. Be sure to copy it somewhere safe.

```
wp core install --prompt=title,url,admin_user,admin_email

```

4. Install commonly used plugins and activate the child theme and desired plugins.

```
wp plugin install ninja-forms redirection wordpress-seo
wp plugin activate redirection wordpress-seo
wp theme activate emma-child

```

5. Change to the child theme directory, install and start the frontend runner via NPM.

```
cd wp-content/themes/emma-child/
npm install
npm run watch

```

**ALL DONE!** The WordPress + Emma Child environment is ready for custom development.

Changing Origins
----------------
After completing the `Getting Started` steps above it is important to change the origin URL
to a project repository. This will ensure all commits are pushed to the correct repository.

See below for a `GITHUB` example:

```
// GITHUB EXAMPLE
git remote set-url origin https://github.com/USERNAME/REPOSITORY.git

```

Enjoy!
