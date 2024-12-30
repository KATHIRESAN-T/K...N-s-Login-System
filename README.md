# K...N-s-Login-System
# Login System with PHP and MySQL

This project implements a secure user authentication system using PHP and MySQL. It provides functionality for user registration, login, password reset, and validation of unique fields such as username, email, and phone number.

## Features

- **User Registration**: Users can register with their name, date of birth, gender, phone number, email, username, password, and a security PIN.
- **Secure Login**: Passwords are securely hashed using `password_hash` and verified using `password_verify`.
- **Password Reset**: Users can reset their password using their username and security PIN.
- **Validation**: Real-time validation to check for unique usernames, emails, and phone numbers during registration.
- **Database Security**: Prepared statements and `mysqli_real_escape_string` to prevent SQL injection.

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL (MariaDB)

## Database Schema

The project uses a single table `users` with the following structure:

| Field          | Type              | Attributes                   |
|----------------|-------------------|------------------------------|
| `id`           | int(11)          | Primary Key, Auto Increment  |
| `name`         | varchar(100)     | NOT NULL                     |
| `date_of_birth`| date             | NOT NULL                     |
| `gender`       | enum('Male','Female','Other') | NOT NULL   |
| `phone_number` | varchar(15)      | NOT NULL, Unique             |
| `mail_id`      | varchar(255)     | NOT NULL, Unique             |
| `username`     | varchar(50)      | NOT NULL, Unique             |
| `password`     | varchar(255)     | NOT NULL                     |
| `security_pin` | varchar(4)       | NOT NULL                     |

### Sample Data

| id  | name          | date_of_birth | gender | phone_number | mail_id                | username     | password (hashed)   | security_pin |
|-----|---------------|---------------|--------|--------------|------------------------|--------------|----------------------|--------------|
| 1   | KATHIRESAN T  | 2005-10-16    | Male   | 6384472853   | KATHIRES432@GMAIL.COM | KATHIRES143  | (hashed)            | 1234         |
| 2   | SRINIVASAN A  | 2004-07-12    | Male   | 8015824201   | SRINIANBU2004@GMAIL.COM | SRINI135   | (hashed)            | 4321         |
| 3   | AADHISHWAR P  | 2004-09-15    | Male   | 8838059175   | ITSMEPATTU982@GMAIL.COM | AADHI205   | (hashed)            | 3124         |

## Setup Instructions

1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   ```

2. Import the database:
   - Open **phpMyAdmin** or your preferred MySQL client.
   - Create a new database named `login-logic`.
   - Import the provided SQL file (`login-logic.sql`).

3. Configure database connection:
   - Open the PHP files.
   - Update the database connection parameters if necessary:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "login-logic";
     ```

4. Start your local server:
   - Use XAMPP, WAMP, or any other PHP server.
   - Place the project files in the server's `htdocs` directory.

5. Access the application:
   - Open your browser and navigate to `http://localhost/your-project-folder`.

## Files Included

### HTML
- `index.html`: Login page.
- `register.html`: Registration page.
- `reset_password.html`: Password reset page.

### CSS
- `styles.css`: Styling for the application.

### PHP
- `register.php`: Handles user registration.
- `login.php`: Validates login credentials.
- `reset_password.php`: Allows users to reset their password.
- `validate_email.php`: Checks for duplicate email during registration.
- `validate_phone.php`: Checks for duplicate phone number during registration.
- `validate_username.php`: Checks for duplicate username during registration.
- `validate_pin.php`: Validates the security PIN.
- `check_username.php`: Confirms if a username exists.

### SQL
- `login-logic.sql`: SQL dump file for the database.

## Demo

Provide a link here if you host the project online or add screenshots of the application.

## License

This project is licensed under the MIT License. You are free to use, modify, and distribute this software as per the license terms.
