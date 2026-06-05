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
sudo apt install apache2 php libapache2-mod-php git -y
git clone https://github.com/hishamfaizal558/webserver.git
cd webserver
sudo cp -r index.html company.html portfolio.html login-demo.html login-submit.php style.css images /var/www/html/
sudo systemctl restart apache2
```

Open the server in a browser:

```text
http://YOUR_SERVER_IP/
```

The login demo writes safe test records to `login-demo.log` on the server. It does not save the real password text.
