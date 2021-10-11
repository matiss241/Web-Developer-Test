# WEB DEVELOPER TEST FOR MAGEBIT

To run this project localy clone this repo:
`git clone git@github.com:matiss241/Web-Developer-Test.git`
## To run this website you can use MAMP
[MAMP download](https://www.mamp.info/en/mamp/windows/)
- In MAMP you can chose your own port to use for local host
- In this project port 3306 was used
- Use Apache server to run the project. There were some problems if nginx was used.
- To change prort/user/password you can go to Web-Developer-Test/Models/DB.php and change the nececery information
- Make sure to put root directory as Web-Developer-Test folder
## Run the website
1. Start server with MAMP
2. In the browser type: `localhost:80/Views/layout.php
3. If the website is not opening check the port for Apache in MAMP and put it `localhost:(ApachePort)/Views/layout.php
## Use of the website
- You can type in and email adress and submit it with a button
- You will be directed to a different page where you can click on "Check the database here" link
- You will be directed to a page where all the emails from database are displayed
- You can press email provider buttons to filter the emails
