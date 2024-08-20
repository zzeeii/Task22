Blog Post Management System


This is a simple PHP-based blog post management system that allows you to create, read, update, and delete (CRUD) blog posts. The project uses MySQL as the database and Bootstrap for styling.

Features:

Create a Post: Create a new blog post with a title, content, and author.
Read Posts: View a list of all blog posts or read individual posts.
Update a Post: Edit the details of an existing post.
Delete a Post: Remove a post from the database.

Requirements:
PHP 7.4 or later
MySQL 5.7 or later
XAMPP or any local server environment


Setup Instructions:
git clone https://github.com/zzeeii/task2.git
cd task2



Database Setup:
Import the createdatabase.sql file into your MySQL database, or let the application create it for you automatically.

Alternatively, the Database.php file includes code to create the database and table if they don't exist.

Run the Application:

Start your local server (e.g., XAMPP) and navigate to the project directory in your browse


Usage:
Creating a Post:

Navigate to create.php to add a new blog post.
Viewing Posts:

Use list.php to see all posts in a table format.
Use index.php to see a more visual representation of the posts.
Updating a Post:

Click on the "Edit" button in the list.php page to modify an existing post.
Deleting a Post:

Click on the "Delete" button in the list.php page to remove a post. You will be prompted to confirm the deletion.
Notes
The init.php file is responsible for initializing the application and loading necessary dependencies.
The project uses Bootstrap 5 for basic styling. You can customize the appearance by modifying the HTML and CSS as needed.