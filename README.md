# Custom PHP Routing System

A lightweight PHP routing system built from scratch. This project demonstrates how to handle HTTP requests, map them to controllers, and render views without relying on heavy frameworks. It’s designed as an educational example of clean architecture in PHP.

---

## 🚀 Features
- **Custom Router (`App/Core/Routing.php`)**  
  Dispatches requests based on HTTP method and URI.
- **Controllers (`App/Controllers`)**  
  Encapsulate application logic (e.g., `AboutController`, `FormController`).
- **Views (`App/Views`)**  
  Plain PHP/HTML templates for rendering UI.
- **Helpers (`App/Core/helpers.php`)**  
  Utility functions like `base_url()` for generating correct URLs.

---

## 📂 Project Structure
App/
├── Core/
│    ├── Routing.php
│    └── helpers.php
├── Controllers/
│    ├── AboutController.php
│    └── FormController.php
└── Views/
└── form.php
index.php
.htaccess

Code

---

## ⚙️ Installation
1. Clone the repository into your local server directory (e.g., `htdocs` for XAMPP).
   ```bash
   git clone https://github.com/your-username/custom-routing.git
Ensure PHP is installed and your local server (XAMPP, WAMP, etc.) is running.

Point your browser to:

Code
http://localhost/custom_routing
🖥️ Usage
Register Routes
In index.php:

php
require_once "App/Core/Routing.php";
require_once "App/Controllers/AboutController.php";
require_once "App/Controllers/FormController.php";

use App\Core\Routing;

$route = new Routing();

$route->addRoute("GET", "/about", \App\Controllers\AboutController::class, "about");
$route->addRoute("GET", "/form", \App\Controllers\FormController::class, "showForm");
$route->addRoute("POST", "/process-user", \App\Controllers\FormController::class, "handleSubmit");

$route->dispatch();
Example Controller
php
namespace App\Controllers;

class AboutController
{
    public function about(): void
    {
        echo "You reached about page";
    }
}
Example View
php
<!-- App/Views/form.php -->
<h2>Enter details</h2>
<form action="<?= base_url('process-user') ?>" method="post">
    First Name: <input type="text" name="first_name" />
    Age: <input type="number" name="age" />
    <button>Enter</button>
</form>
📖 Learning Goals
Understand how routing works under the hood.

Learn how to connect controllers and views.

Practice building helper functions for portability.

Gain insight into structuring small PHP projects.

🔮 Future Improvements
Support for dynamic route parameters (e.g., /users/{id}).

Middleware for authentication and request filtering.

Layout system for views (header/footer templates).

Error handling and logging.
