Emma Starter
===

Getting Started
---------------
NOTE: When running a Virtual Machine (VM) local development (Virtual Box, Vagrant, Docker, etc.),
it is recommended to SSH into the VM to run these commmands.

To get started, change directories to the local developmet directory where WordPress will be
installed (e.g. `cd my/target/directory`).

From within your local development directory run the following commands:

```
git clone https://github.com/pressden/emma-starter.git .
git clone https://github.com/pressden/emma.git wp-content/themes/emma
npm install --prefix wp-content/themes/emma-child/
wp core download --skip-content
wp config create --prompt=dbname,dbuser,dbpass
wp core install --prompt=title,url,admin_user,admin_email
wp theme activate emma-child
```

Here is a summary of each command:

1. Clone this repo to the target development directory.
2. Clone Emma to the WordPress themes directory.
3. Initialize the Emma Child theme using NPM.
4. Download the WordPress core.
5. Create a unique wp-config.php file for this project.
6. Install WordPress and generate an admin password.
7. Activate the Emma Child theme within WordPress.

Enjoy!
