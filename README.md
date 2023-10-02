# Login and Signup Web Application

A simple web application for user authentication that includes login and signup functionality. This application is built using HTML, PHP, and JavaScript.

![Screenshot (43)](https://github.com/techdiz/login_signup_page/assets/104593008/b3ffb982-79a3-4767-ad4d-29e6ec0fccf9)
![Screenshot (44)](https://github.com/techdiz/login_signup_page/assets/104593008/d3bcead8-26eb-426d-8016-1542882789a6)



## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)

## Introduction

This web application provides a user-friendly interface for users to log in or sign up. It includes client-side and server-side validation for user input. User data is stored in a MySQL database.

## Features

- User-friendly interface with login and signup options.
- Client-side validation for input fields.
- Server-side validation for security.
- User data storage in a MySQL database.
- Responsive design for various screen sizes.

## Getting Started

Follow these steps to set up and run the application locally.

### Prerequisites

- You need a web server with PHP and MySQL support. You can use tools like XAMPP or WAMP for local development.

### Installation

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/your-repo.git
   
2. Import the provided SQL database file (user_auth.sql) into your MySQL server to create the necessary tables.

3. Update the database connection settings in process.php with your MySQL server details:

   ```php
    $servername = "localhost";
    $username = "your_mysql_username";
    $password = "your_mysql_password";
    $dbname = "user_auth"; // Change this to your database name
##  Usage
Access the web application in your browser.
Use the "Login" button to access the login form or the "Signup" button to access the signup form.
Enter your credentials or sign up for a new account.
After successful login or signup, you will receive a corresponding message.
