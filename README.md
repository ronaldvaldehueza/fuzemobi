# f3-adminlte

This is a project starter template built using the **Fat-Free Framework (F3)** and integrated with the **AdminLTE** dashboard UI. It provides a lightweight MVC structure ready for quick development with a modern admin interface.

---

## 🚀 Features

* ⚡ Lightweight MVC architecture using F3  
* 🎨 AdminLTE 3 UI integrated for responsive layout  
* 🔒 Basic login page for development  
* 📦 Easy to configure via `.ini` file  
* 🛠️ Predefined database structure via `appdb.sql`  

---

## 📥 How to Install

1. **Clone this repository** into your webroot folder:

   ```bash
   git clone https://github.com/yourusername/f3-adminlte.git
   ```

2. **Set up your database**:
   * Use MySQL locally or remotely.
   * Import the `appdb.sql` file from the root directory into your MySQL server.

3. **Configure your application**:
   * Open `config/config.ini`.
   * Set the appropriate values for:
     ```ini
     [database]
     db_dns = "mysql:host=localhost;port=3306;dbname=yourdbname"
     db_user = "yourusername"
     db_pass = "yourpassword"
     ```
   * (Sensitive values have been redacted in the repo version.)

4. **Configure web server**:
   * If you're using **IIS**, make sure to review and adjust `web.config`.
   * If you're using **Apache**, edit `.htaccess` as needed.
   * This helps avoid **HTTP 500** or URL rewrite errors.

5. **Set up your web server (IIS)**:
   * Ensure **URL Rewrite** and **MySQL** modules are enabled.
   * Point your site root to the project folder.

6. **Access the app**:
   * Use the browser to visit the site (e.g. `http://localhost/f3-adminlte/`)
   * Log in using:
     ```
     Email: hendro.steven@gmail.com
     Password: devtest
     ```

---

## 🌐 Demo

Live Demo: [https://worldcloud9.com/dev/fuzemobi](https://worldcloud9.com/dev/fuzemobi)

---

## 💡 Notes

* Default login is for development/demo only – update security before going to production.
* Supports modular controller and view structure.
* Feel free to extend authentication, routing, and layout to suit your project.

---

## 🧑‍💻 Credits

* [Fat-Free Framework (F3)](https://fatfreeframework.com/)  
* [AdminLTE](https://adminlte.io/)  
