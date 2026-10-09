# College Event Management System

## Project Overview
The **College Event Management System** is a web-based application developed using PHP, MySQL, HTML, CSS, and JavaScript. It provides a centralized platform for managing college events, student registrations, event bookings, lecturer information, and event categories.

## Objective
The main objective of this project is to simplify the organization and management of college events. It helps administrators, students, and lecturers manage event-related activities efficiently through a single platform.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Libraries:** jQuery, jQuery UI, Font Awesome, DataTables, Toastr

## Key Features
- User registration and login
- Role-based access for administrators, students, and lecturers
- College event creation, updating, and deletion
- Event category management
- Event booking and cancellation
- Student and lecturer information management
- User profile updates and password changes
- Database integration for storing and managing application data
- User-friendly interface with event images and visual elements

## Project Structure
- `index.php` — Main entry page
- `login.php`, `reg.php` — Login and registration
- `adminhome.php` — Admin dashboard
- `studenthome.php` — Student dashboard
- `lecturerhome.php` — Lecturer dashboard
- `events.php`, `save_event.php` — Event management
- `bookevent.php`, `booking.php` — Event booking
- `cancel_event.php` — Booking cancellation
- `categories.php`, `savecat.php` — Event category management
- `students.php`, `lecturers.php`, `users.php` — User management
- `dbcon.php`, `dbfun.php` — Database connectivity and related functions
- `emsdb.sql` — Database SQL file
- `all.css`, `all.js` — Styling and JavaScript functionality

Other files provide supporting functionality, interface components, libraries, and images.

## Installation and Setup

1. Install a local PHP development environment such as [XAMPP](https://www.apachefriends.org/).
2. Clone or download the repository into the XAMPP `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Open phpMyAdmin and create a database for the application.
5. Import the `emsdb.sql` file into the database.
6. Update the database name, username, and password in `dbcon.php` according to your local configuration.
7. Open the application in your browser:

   `http://localhost/your-project-folder/`

## Future Enhancements
- Email notifications for event bookings and cancellations
- Improved authentication and input validation
- Event search and filtering functionality
- Event reports and booking summaries
- Enhanced mobile responsiveness and user experience

## Conclusion

The College Event Management System demonstrates the use of PHP and MySQL to develop a web-based application for organizing college events, managing users, and handling event bookings efficiently.
