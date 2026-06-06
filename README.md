# Webserver Phase 1

A simple Apache-ready static website project with four pages:

- `index.html` - custom landing page
- `company.html` - fictional company page
- `portfolio.html` - student portfolio page
- `login-demo.html` - safe login page demo
- `login-submit.php` - server-side login demo handler

## Host on Ubuntu Apache

```bash
sudo apt update
sudo apt install apache2 php libapache2-mod-php php-mysql mariadb-server git -y
git clone https://github.com/hishamfaizal558/webserver.git
cd webserver
sudo cp -r index.html company.html portfolio.html login-demo.html login-submit.php db-config.php style.css images /var/www/html/
sudo systemctl restart apache2
```

Open the server in a browser:

```text
http://YOUR_SERVER_IP/
```

## MariaDB Login Storage

Create a database, user, and table:

```sql
CREATE DATABASE webserver_demo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE USER 'webserver_user'@'localhost' IDENTIFIED BY 'change_this_password';
GRANT INSERT ON webserver_demo.* TO 'webserver_user'@'localhost';
FLUSH PRIVILEGES;

USE webserver_demo;

CREATE TABLE login_submissions (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  remember_browser TINYINT(1) NOT NULL DEFAULT 0,
  client_ip VARCHAR(45) NOT NULL,
  submitted_at DATETIME NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Update `/var/www/html/db-config.php` with your real MariaDB username and password. The login demo stores the email and a secure password hash only; it does not store the raw password text.
