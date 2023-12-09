# Who Wants to Be a Millionaire - PHP Project

## Introduction

Welcome to the "Who Wants to Be a Millionaire" PHP web application. This project is a web-based adaptation of the popular game show, designed to run on a XAMPP server. Players can register, log in, answer trivia questions, and compete on a leaderboard. The game concludes when a player answers incorrectly.

## Requirements

- XAMPP (PHP and MySQL included)
- Web Browser (e.g., Chrome, Firefox)

## Installation

1. **Download the Project**: Clone or download this repository to your local machine.
2. **XAMPP Setup**: Make sure XAMPP is installed and operational on your machine.
3. **Project Placement**: Copy the project folder into the `htdocs` directory of your XAMPP installation.
4. **Database Setup**: Import the provided SQL file into your MySQL database using phpMyAdmin to create the necessary database and tables.

## Configuration

- **Database Connection**: Modify the `db_config.php` file with your MySQL credentials and database name to establish a connection.
- **Port Configuration**: This application utilizes the default port assigned by XAMPP, usually port 80 for HTTP. Check and adjust this in the XAMPP control panel as required.

## Usage

1. **Start XAMPP Services**: Launch Apache and MySQL from the XAMPP control panel.
2. **Access the Application**: In your browser, go to `http://localhost/[project-folder-name]`.
3. **Registration and Login**: New users should sign up, while returning users can log in.
4. **Gameplay**: Answer questions correctly to accumulate points. Scores are displayed on the leaderboard.
5. **End of Game**: The game ends upon a wrong answer.

## Features

- **User Authentication**: Secure sign-up and login.
- **Trivia Questions**: Various categories of questions.
- **Leaderboard**: High scores are tracked and displayed.
- **Responsive Design**: Compatible across multiple devices and screen sizes.

## License

This project is licensed under the @2023 Umar Mohammad

## Contact

If you have any questions or want to contribute, please email us at mohammadumar7w4@gmail.com.
