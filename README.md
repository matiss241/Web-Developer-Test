# WEB DEVELOPER TEST FOR MAGEBIT

To run this project locally clone this repo:
`git clone git@github.com:matiss241/Web-Developer-Test.git`
## To run this website you can use MAMP
[MAMP download](https://www.mamp.info/en/mamp/windows/)
- In MAMP you can choose your port to use for localhost
- In this project port 3306 was used
- Use the Apache server to run the project. There were some problems if Nginx was used.
- To change port/user/password you can go to Web-Developer-Test/Models/DB.php and change the necessary information
- Make sure to put the root directory as Web-Developer-Test folder
## Run the website
1. Start the server with MAMP
2. In the browser type: `localhost:80/Views/layout.php
3. If the website is not opening check the port for Apache in MAMP and put it `localhost:(ApachePort)/Views/layout.php
## Use of the website
- You can type in an email address and submit it with a button
- You will be directed to a different page where you can click on the "Check the database here" link
- You will be directed to a page where all the emails from the database are displayed
- You can press the email provider buttons to filter the emails
