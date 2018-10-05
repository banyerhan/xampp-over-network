<h5>Go to Your XAMPP Control panel</h5>

Click on apache > config > Apache (httpd.conf) enter image description here.. see picture 1

Search for Listen 80 and replace with Listen 8080
After that check your local ip using ipconfig command (cmd console)
Search for ServerName localhost:80 and replace with your local ip:8080 (ex.192.168.X.XXX:8080)

After that open apache > config > Apache (httpd-xampp.conf) enter image description here.. see picture 2

Search for Alias /phpmyadmin "C:/xampp/phpMyAdmin/" AllowOverride AuthConfig Require local Replace with Require all granted ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
Go to xampp > config > click on service and port setting and change apache port 8080
restart xampp

then hit your ip:8080 (ex.192.168.X.XXX:8080) from other computer
