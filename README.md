# College_Event_Management_system

## Project Overview
The Event Management System is a web-based application developed using PHP, MySQL, HTML, CSS, and JavaScript. It helps manage events, student registrations, event bookings, lecturer information, and event categories through a centralized platform.

## Objective
To simplify event organization and management by providing a platform for administrators, students, and lecturers to manage events, registrations, bookings, and related information efficiently.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Libraries:** jQuery, jQuery UI, Font Awesome, DataTables, Toastr

## Key Features
- User registration, login, and authentication
- Admin, student, and lecturer management
- Event creation, updating, and deletion
- Event category management
- Event booking and cancellation
- Student and lecturer information management
- Profile updates and password changes
- Database integration for storing application data
- Responsive interface with visual elements and event images

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
- `all.css`, `all.js` — Styles and JavaScript functionality

Other files provide supporting functionality, interface components, libraries, and images.

## Installation and Setup

1. Install a local PHP development environment such as [XAMPP](https://www.apachefriends.org/).
2. Clone or download this repository into the `htdocs` directory.
3. Start Apache and MySQL using the XAMPP Control Panel.
4. Open phpMyAdmin and create a database for the application.
5. Import `emsdb.sql` into the database.
6. Update the database credentials in `dbcon.php` according to your local configuration.
7. Open the application in your browser:

   `http://localhost/your-project-folder/`

## Future Enhancements
- Add email notifications for event bookings.
- Improve security with stronger authentication and input validation.
- Add event search, filtering, and reporting features.
- Enhance the user interface and mobile responsiveness.



---

*This project demonstrates web development, database integration, and event management using PHP and MySQL.*
