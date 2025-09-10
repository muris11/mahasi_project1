# Mahasiswa Bersatu Untuk Aspirasi (MBUA)

## Demo Website
https://mahasi.free.nf

A modern web application for students to submit, track, and manage aspirations and complaints transparently.

---

## 📦 Features

- User registration & login (Mahasiswa, Petugas)
- Secure authentication & session management
- Submit, edit, delete, and view complaints (pengaduan)
- Upload supporting images (JPG, PNG, GIF)
- Real-time status tracking & admin responses
- Responsive design for desktop & mobile
- Progressive Web App (PWA) support
- Accessibility & performance optimizations
- Admin dashboard for managing users and complaints

---

## 🚀 Installation & Deployment

### 1. Clone from GitHub

- Fork or download this repository from GitHub:
  ```
  git clone https://github.com/yourusername/mbua.git
  ```
- Or use GitHub Desktop to clone the repo to your local machine.

### 2. Set Up Local Development

- Install [XAMPP](https://www.apachefriends.org/) or [Laragon](https://laragon.org/) for PHP & MySQL support.
- Place the `Pengaduan` folder inside your web server's `htdocs` directory.
- Start Apache and MySQL services.

### 3. Configure Database

- Create a new MySQL database (e.g. `pengaduan_mahasiswa`).
- Import the provided `database.sql` file using phpMyAdmin or MySQL CLI:
  ```
  mysql -u root -p pengaduan_mahasiswa < database.sql
  ```
- Edit `config/koneksi.php` and set your database credentials:
  ```php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'pengaduan_mahasiswa';
  ```

### 4. Set Folder Permissions

- Make sure `bootstrap/img/` and `uploads/` are writable for file uploads.
- On Linux:
  ```
  chmod -R 755 bootstrap/img
  chmod -R 755 uploads
  ```

### 5. Run the Application

- Open your browser and go to:
  ```
  http://localhost/Pengaduan/
  ```
- Register as a new user or login with existing credentials.

### 6. Deploy to Hosting

- Upload all files to your hosting server (e.g. cPanel, Plesk, VPS).
- Create a MySQL database and import `database.sql`.
- Update `config/koneksi.php` with your hosting database credentials.
- Set folder permissions for uploads/images.
- (Optional) Enable HTTPS for security.

### 7. Enable PWA Features

- Make sure `manifest.json` and `sw.js` are accessible from the root directory.
- Test offline support and install prompt on mobile browsers.

---

## ⚙️ Configuration

- **Database:**
  - Host, username, password, and database name in `config/koneksi.php`
- **File uploads:**
  - Images stored in `bootstrap/img/`
- **Session:**
  - PHP sessions used for authentication
- **PWA:**
  - Manifest and service worker included for offline support

---

## 📚 Usage

- **Mahasiswa:**
  - Register, login, submit complaints, view status, edit/delete own complaints
- **Petugas/Admin:**
  - Login, view/manage all complaints, respond to complaints, manage users
- **Navigation:**
  - Responsive navbar, dropdown user menu, logout functionality

---

## 🗂️ Folder Structure

```
Pengaduan/
├── admin/                # Admin dashboard & management
├── mahasiswa/            # Mahasiswa dashboard & features
├── bootstrap/            # CSS, JS, images
├── config/               # Configuration files
├── includes/             # Helper functions & error handling
├── assets/               # Additional JS/CSS
├── error-pages/          # Custom error pages
├── sw.js                 # Service worker (PWA)
├── manifest.json         # Web app manifest
├── README.md             # Project documentation
```

---

## 🔒 Security Notes

- All user input is validated and escaped
- File uploads are restricted by type and size
- Sessions are securely managed
- SQL queries use prepared statements
- Sensitive files are protected via `.htaccess`

---

## ⚡ Performance Tips

- Images are lazy-loaded and optimized
- CSS/JS loaded via CDN for speed
- Service worker caches assets for offline use
- Browser caching and compression enabled

---

## 🛠️ Troubleshooting

- **Database errors:** Check credentials in `config/koneksi.php` and ensure MySQL is running
- **File upload issues:** Check folder permissions for `bootstrap/img/`
- **Login problems:** Clear browser cookies and ensure sessions are enabled
- **PWA issues:** Make sure `manifest.json` and `sw.js` are accessible

---

## 👥 Credits

- Kelompok 7 - Proyek 1
- Bootstrap, FontAwesome, SweetAlert2
- All contributors and testers

---

## 📄 License

This project is for educational purposes. For commercial use, please contact the authors.
