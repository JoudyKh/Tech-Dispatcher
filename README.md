Tech Dispatcher 🛠️

Tech Dispatcher is a robust service management and task dispatching system built with Laravel. It is designed to streamline the workflow between customers, dispatchers, and technical field agents, ensuring that technical issues are assigned, tracked, and resolved efficiently.

✨ Key Features

Service Request Management: Integrated system for logging and tracking technical support requests from initiation to completion.

Dispatcher Control Panel: A centralized interface for dispatchers to assign tasks to available technicians based on expertise or location.

Status Tracking: Real-time updates on task statuses (Pending, In Progress, Completed, Reopened).

Technician Portfolios: Management of technical staff profiles, including specialized skills and current workload.

Reporting & Analytics: Generate insights on response times, technician performance, and common technical issues.

Secure Authentication: Multi-level access control for Admins, Dispatchers, and Field Techs.

🛠 Technical Stack

Backend: Laravel 10.x

Database: MySQL

Frontend: Blade Templates, JavaScript, Bootstrap/Tailwind.

Architecture: MVC (Model-View-Controller) for high maintainability.

API Support: RESTful endpoints for potential mobile integration for field agents.

🚀 Installation & Setup

To deploy this system locally, follow these instructions:

Clone the Repository:

git clone [https://github.com/JoudyKh/Tech-Dispatcher.git](https://github.com/JoudyKh/Tech-Dispatcher.git)
cd Tech-Dispatcher


Install Composer Dependencies:

composer install


Install Assets:

npm install && npm run dev


Environment Setup:

Copy .env.example to .env.

Update your database connection details in the .env file.

php artisan key:generate


Database Migration:

php artisan migrate --seed


Start the Application:

php artisan serve


📂 Project Structure Highlights

Task Dispatching Logic: Custom logic to ensure tasks are routed to the correct technical personnel.

Eloquent Relationships: Complex database mapping between Users, Tasks, and Service Categories.

Validation Layers: Robust request validation to ensure data accuracy in service reporting.

👩‍💻 Developer

Joudy Alkhatib

GitHub: @JoudyKh

LinkedIn: Joudy Alkhatib

Email: joudyalkhatib38@gmail.com

Tech Dispatcher - Optimizing Field Service Operations through Automation.
