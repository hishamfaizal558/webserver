# Webserver Phase 1

A simple Apache-ready static website project with four pages:

- `index.html` - custom landing page
- `company.html` - fictional company page
- `portfolio.html` - student portfolio page
- `login-demo.html` - safe login page demo

## Host on Ubuntu Apache

```bash
sudo apt update
sudo apt install apache2 git -y
git clone https://github.com/hishamfaizal558/webserver.git
cd webserver
sudo cp -r index.html company.html portfolio.html login-demo.html style.css images /var/www/html/
sudo systemctl restart apache2
```

Open the server in a browser:

```text
http://YOUR_SERVER_IP/
```
