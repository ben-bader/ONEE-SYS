# 🚀 ONEE-SYS — Inventory & Peripheral Management System

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)](https://www.php.net/)
[![SQLite](https://img.shields.io/badge/SQLite-003B57?style=for-the-badge\&logo=sqlite\&logoColor=white)](https://www.sqlite.org/)
[![Laravel Herd](https://img.shields.io/badge/Laravel%20Herd-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)](https://herd.laravel.com/)
[![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge\&logo=vite\&logoColor=white)](https://vitejs.dev/)
[![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge\&logo=nodedotjs\&logoColor=white)](https://nodejs.org/)
[![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge\&logo=composer\&logoColor=white)](https://getcomposer.org/)

**ONEE-SYS** is a **modern Laravel-based inventory & peripheral management system** built to manage **devices, peripherals, brands, employees, and sites**, using **SQLite** and developed locally with **Laravel Herd**.

---

## 🚀 Features

* 🖥️ Device & peripheral inventory management
* 🏷️ Brand & category tracking
* 👤 Employee assignment
* 🏢 Site / location management
* 🔐 Secure authentication
* 🗄️ Lightweight **SQLite** database
* ⚡ Fast local development with **Laravel Herd**
* 🎨 Modern asset bundling via **Vite**
* 📱 Responsive UI

---

## 🛠️ Tech Stack

* **Backend**: Laravel (PHP 8.1+)
* **Local Dev Environment**: Laravel Herd
* **Database**: SQLite
* **Frontend**: Blade + Vite
* **Dependency Management**: Composer & npm
* **Version Control**: Git & GitHub

---

## 📋 Requirements

* PHP **8.1+**
* Composer
* Node.js **16+**
* npm or yarn
* Laravel Herd (recommended for local development)

---

## 🖼️ Preview
![Preview](/public/img/preview.png)

---

## ⚡ Quick Start (Laravel Herd)

### 1️⃣ Clone the repository

```bash
git clone https://github.com/ben-bader/ONEE-SYS.git
cd ONEE-SYS
```

---

### 2️⃣ Install dependencies

```bash
composer install
npm install
```

---

### 3️⃣ Configure environment variables

```bash
cp .env.example .env
```

Update `.env` for **SQLite**:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

Create the database file:

```bash
touch database/database.sqlite
```

(Windows)

```powershell
New-Item database/database.sqlite
```

---

### 4️⃣ Generate app key

```bash
php artisan key:generate
```

---

### 5️⃣ Run migrations & seeders

```bash
php artisan migrate --seed
```

---

### 6️⃣ Start the project with Laravel Herd

* Open **Laravel Herd**
* Add the project directory
* Visit the auto-generated domain, e.g.:

```
https://onee-sys.test
```

⚡ No `php artisan serve` needed when using Herd.

---

## 🎨 Frontend Development

```bash
npm run dev    # Development
# or
npm run build  # Production
```

---

## 🗃️ Database

* 📂 Migrations: `database/migrations`
* 🌱 Seeders: `database/seeders`
* 🗄️ SQLite file: `database/database.sqlite`

---

## 🧪 Testing

```bash
php artisan test
```

---

## 🚀 Deployment Notes

If deploying with SQLite:

* Ensure `database/` directory is **writable**
* Run migrations with `--force`

```bash
php artisan migrate --force
php artisan optimize
```

---

## 📄 License

This project does not currently include a license file.
Consider adding the **MIT License** if publishing.

---

## 🔗 Useful Resources

* **Laravel** – [https://laravel.com/docs](https://laravel.com/docs)
* **Laravel Herd** – [https://herd.laravel.com](https://herd.laravel.com)
* **SQLite** – [https://www.sqlite.org/docs.html](https://www.sqlite.org/docs.html)
* **Vite** – [https://vitejs.dev/guide/](https://vitejs.dev/guide/)

