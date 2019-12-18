Emma Starter
===

Use the Emma Starter repository quickly spin up WordPress + Emma Child development environment.

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
npm install --prefix wp-content/themes/emma-child/
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

4. Activate the Emma Child theme.

```
wp theme activate emma-child
```

Enjoy!
