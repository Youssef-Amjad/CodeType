# CodeType

> منصة لتعليم البرمجة من الصفر — من قبل **Youssef Amjad**

## 🚀 About CodeType

CodeType is a web platform designed to make learning programming accessible, interactive, and effective for everyone.  
It provides structured lessons, a clean interface, and a supportive environment for beginners to build their coding skills confidently.

## ✨ Features

- Interactive lessons on HTML, CSS, JavaScript, and more.  
- Live updates and dynamic interactions using **Laravel Livewire**.  
- Clean and responsive UI with **Tailwind CSS**.  
- Community-focused learning environment.

## 🧰 Built With

- [Laravel](https://laravel.com/)  
- [Livewire](https://laravel-livewire.com/)  
- [Tailwind CSS](https://tailwindcss.com/)  
- PHP, HTML, CSS, JavaScript  
- Git / GitHub

## ⚙️ Installation / Local Setup

```bash
# Clone the repository
git clone https://github.com/Youssef-Amjad/CodeTyp.git
cd CodeTyp

# Install dependencies
composer install
npm install
npm run dev

# Set up environment
cp .env.example .env
php artisan key:generate

# Run migrations (if any)
php artisan migrate

# Start the server
php artisan serve
