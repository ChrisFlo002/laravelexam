# **Election Management System**

This Laravel-based project is a comprehensive **Election Management System** designed to manage political parties, states, governors, senators, and grand electors efficiently. It includes features like multi-role authentication, CRUD functionalities, image uploads, and advanced search capabilities. 

---

## **Features**

- **Multi-Role Authentication**:  
  - **Admin**: Full access to all pages and functionalities.  
  - **Governor**: Restricted access to view senators and electors of their associated state.
  
- **CRUD Operations**:  
  - Manage states, flags, parties, senators, governors, and electors seamlessly.
  
- **Image Upload**:  
  - Upload and manage state flags.

- **Advanced Search**:  
  - Admins can search for political parties and view associated governors, senators, and electors.

- **Responsive Design**:  
  - User-friendly and intuitive interfaces.

---

## **Getting Started**

Follow the instructions below to set up the project on your local machine.

### Prerequisites

- PHP >= 8.0
- Composer
- Laravel >= 10.x
- MySQL
- Node.js & npm (for front-end assets)

---

### Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/ChrisFlo002/laravelexam.git
   cd laravelexam
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   composer require laravel/breeze --dev
   php artisan breeze:install
   ```

3. **Setup Environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update your `.env` file with database credentials and other configurations:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=election
     DB_USERNAME=your_database_username # 'root'
     DB_PASSWORD=your_database_password # ''
     ```

4. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Compile Front-End Assets**:
   ```bash
   npm run dev
   ```

7. **Run the Development Server**:
   ```bash
   php artisan serve
   ```

   Visit the application at `http://localhost:8000`.

---

## **Database Schema**

The system utilizes the following tables:  

- `users`: For user authentication and roles (`admin`, `governor`).  
- `Etat`: Stores information about states.  
- `Flags`: Manages flag images.  
- `Partis`: Represents political parties.  
- `GrandElecteur`: Contains details of grand electors.  
- `Senateur`: Contains details of senators.  
- `Gouverneur`: Contains details of governors.
- `Parlementaire`: Contains details of senator.

---

## **Project Structure**

- **`app/Models`**: Contains the Eloquent models for database interactions.  
- **`app/Http/Controllers`**: Contains controllers for handling business logic.  
- **`resources/views`**: Blade templates for the front-end interface.  
- **`routes/web.php`**: Web routes for the application.  
- **`public/`**: Contains publicly accessible files, including uploaded images.

---

## **Usage**

### Admin Features
- Add, edit, or delete states, flags, political parties, parliamentarians, governors, senators, and electors.
- Search for political parties and view related information.

### Governor Features
- View senators and electors of their associated state.

### Authentication
- **Admin Login**: Access all functionalities.  
- **Governor Login**: Restricted access to state-specific data.

