# Practice It: PHP with MySQL
This is the repository for the LinkedIn Learning course Practice It: PHP with MySQL. The full course is available from [LinkedIn Learning][lil-course-url].

![Practice It: PHP with MySQL][lil-thumbnail-url] 

In this course, get hands-on experience with essential PHP skills like creating, reading, updating, and deleting records in an SQL database—without the hassle of installing and configuring PHP and MySQL. Instructor Kevin Skoglund
shows you how to incorporate URL parameters, form data, and error handling as you build web pages for content management. This course offers the flexibility to work with either procedural code, object-oriented code, or both, so you can find the approach that works best for you. Whether you need a refresher on the fundamentals or want to get comfortable with unfamiliar techniques, this course can help you achieve your goals.
 
This course is integrated with GitHub Codespaces, an instant cloud developer environment that offers all the functionality of your favorite IDE without the need for any local machine setup. With GitHub Codespaces, you can get hands-on practice from any machine, at any time—all while using a tool that you’ll likely encounter in the workplace. Check out the “Using GitHub Codespaces with this course” video to learn how to get started.

## Instructions
This repository has only one branch. The files used in each assignment and the instructor's solutions are in numbered directories that correspond to the chapter and movie number (CHAPTER#_MOVIE#). For example, `01_02` contains the files needed for the first exercise and `01_03_checkit` contains the instructor's solution to the first exercise.

Each numbered directory contains two sets of files. The `tasks` directory uses PHP code in the procedural style. The `tasks_oop` directory uses PHP in the Object-Oriented Programming (OOP) style. You can use whichever style you prefer and ignore the other directory.

## Codespaces
This repository was designed for use with GitHub Codespaces. The course explains how to use it.

When launched, the Codespace will automatically create a database and populate it with sample data. You can write PHP code directly in the Codespace. Then, you can start a web server in the Codespace and view the web pages in a new browser window.

## Installing and Using
1. Launch a Codespace.
2. Start a webserver.
  - Switch to the `Terminal` tab in the bottom frame of the Codespace.
  - Type `apachectl start` and hit return.
  - You may need to start the webserver again if the Codespace is restarted.
3. Open a new browser tab to view web pages.
  - When the webserver starts, a pop-up window will appear in the lower right.
  - Click the option to "Open in Browser".
  - A new browser tab will open and show the output of the index.php page.
4. If needed, the browser tab can be opened another way.
  - Switch to the `Ports` tab in the bottom frame of the Codespace.
  - Find the line for Port 80, hover over "Local Address", and click the globe icon that appears.
5. Write your code.
  - In the Codespace, navigate to the directory that corresponds to the current exercise.
  - Write your code for the exercise directly in the Codespace.
  - Save your work.
6. View the web page.
  - Switch to the other browser tab.
  - Add the path to the PHP page to the URL.
  - Example: https://[your-codespace].app.github.dev/01_02/tasks/show.php

### Instructor

Kevin Skoglund
Check out my other courses on [LinkedIn Learning](https://www.linkedin.com/learning/instructors/kevin-skoglund).

[lil-course-url]: https://www.linkedin.com/learning/practice-it-php-with-mysql?dApp=59033956&leis=LAA
[lil-thumbnail-url]: https://media.licdn.com/dms/image/D4E0DAQGUedQu5U2T2A/learning-public-crop_288_512/0/1697665834323?e=2147483647&v=beta&t=bnJoUZ3h2vc8JiH9O1nP-HG4IwmsIGof7ic43GYK4_0
