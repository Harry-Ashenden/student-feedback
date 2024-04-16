# Student Feedback 
This is a simple PHP site that collects student feedback, stores it in a MySQL database and shows the past feedback with names and dates to go with it. Form data is validated and sanitized before inserting into the database.

<p align="center">![gif of the website](https://github.com/Harry-Ashenden/student-feedback/blob/main/gif/student-feedback.gif)</p>

## How It's Made:

**Tech used:** PHP, MySQL, Bootstrap, Apache

This project was intended a first foray into PHP and to learn some of the fundemental process that are involved with database connections and MySQL queries. I first created the basic HTML and styled it with Bootstrap for a simple responsive design. I then added in some partials for the header and footer; then set up the database connection to MySQL. I manually inserted some data and used a foreach loop to display the past feedback in cards. Finally I validated and sanitized the form data to ensure security and ease of use for the students.

## Optimizations:

Some of the PHP code is slightly messy so I would refactor it and potentially use OOP to create higher levels of usability if the project was upscaled.

## Lessons Learned:

This project was about learning the fundementals of PHP and its uses making it a sucessful use of learning. I learnt how SQL injections could cause data issues and how to protect against that with validation and sanitization. I also learnt some basic MySQL queries and PHP syntax.  