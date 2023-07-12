# PHP RESTful Service with DDD Architecture

This is a PHP RESTful service based on the Domain-Driven Design (DDD) architecture. The project utilizes PHP version 8.2 and provides a structured approach for building a robust and maintainable API.

## Project Structure

The project follows a directory structure that aligns with DDD principles. Here's an overview of the main directories and their purpose:

- src: Contains the application's source code.
  - Domain: Holds the domain layer code, including entities, value objects, and domain services.
  - Application: Contains the application layer code, including use cases, DTOs, and application services.
  - Infrastructure: Provides implementation details for interacting with external services and data storage.
  - Persistence: Includes code related to persistence, such as repositories and database migrations.
  - API: Contains the implementation of the RESTful API, including controllers and API-related services.
- tests: Contains unit tests for the application code.
- migrations: Includes database migration scripts.

## Database Schema

The project's database schema consists of the following tables:

- `posts`: Stores information about the posts, including their title, content, and author details.
- `users`: Contains user-related information, such as usernames, hashed passwords, and roles.
- `user_prems`: Represents user permissions, which are associated with specific keys and values.
- `slider_positions`: Stores different positions for sliders.
- `slider_slides`: Contains slider slide details, including the associated slider position, image, title, description, and link.
- `tags`: Stores different tags used for categorizing posts.
- `post_tags`: Represents the relationship between posts and tags.
- `contactus`: Stores contact form submissions, including the sender's name, email, telephone, and text.
- `faq`: Stores frequently asked questions, including the question and its corresponding answer.
- `menu_positions`: Represents different positions for menus.
- `menu_items`: Stores menu item details, including the associated menu position, name, link, and parent item (if applicable).
- `categories`: Represents categories used for organizing posts.
- `post_categories`: Represents the relationship between posts and categories.

## Dependencies and Requirements

The PHP RESTful service relies on the following dependencies:

- PHP 8.2 or later
- Additional dependencies managed via a package manager (such as Composer)
- A compatible database management system (e.g., MySQL, PostgreSQL)

## Installation and Setup

To set up the PHP RESTful service, follow these steps:

- Clone the repository: `git clone https://github.com/BaseMax/GeneralCMSDDDPHP`
- Install dependencies using Composer: `composer update`
- Set up the database and configure the connection details in the project's configuration file.
- Run database migrations to create the required tables: `php migration.php`
- Configure the web server to point to the project's root directory.
- Ensure that the web server has the necessary permissions to read and write files within the project directory.

## Usage

Once the PHP RESTful service is set up and the server is running, you can interact with the API endpoints to perform various operations, including creating, retrieving, updating, and deleting resources. The API follows RESTful principles and provides endpoints for managing posts, users, tags, FAQs, menu items, sliders, and more.

To use the API, make HTTP requests to the appropriate endpoints using tools such as cURL or a REST client. Refer to the API documentation or codebase for detailed information on the available endpoints, request/response formats, and authentication/authorization requirements.

## Testing

The project includes a comprehensive suite of unit tests located in the tests directory. You can execute the tests using a testing framework such as PHPUnit. Running the tests ensures that the application functions as expected and helps maintain code quality and reliability.

To run the tests, navigate to the project root directory and execute the testing command, typically provided by the testing framework, such as phpunit.

## Conclusion

This PHP RESTful service based on the DDD architecture provides a structured approach for building a maintainable and scalable API. By following DDD principles, the project separates concerns into distinct layers, simplifying development and enhancing the maintainability of the codebase.

Feel free to explore the code and adapt it to your specific requirements.

## Database

```sql
CREATE TABLE posts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  slug VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  fullcontent TEXT,
  createdat DATETIME NOT NULL,
  updatedat DATETIME,
  author INT,
  FOREIGN KEY (author) REFERENCES users(id)
);

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  hash_password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  firstname VARCHAR(255),
  lastname VARCHAR(255),
  name VARCHAR(255),
  role_id INT,
  FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE roles (
  user_id INT,
  key VARCHAR(255),
  value TINYINT,
  PRIMARY KEY (user_id, key),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE slider_positions (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  slug VARCHAR(255) NOT NULL
);

CREATE TABLE slider_slides (
  id INT PRIMARY KEY AUTO_INCREMENT,
  slider_position_id INT NOT NULL,
  image VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  link VARCHAR(255),
  FOREIGN KEY (slider_position_id) REFERENCES slider_positions(id)
);

CREATE TABLE tags (
  id INT PRIMARY KEY AUTO_INCREMENT,
  text VARCHAR(255) NOT NULL
);

CREATE TABLE post_tags (
  id INT PRIMARY KEY AUTO_INCREMENT,
  post_id INT NOT NULL,
  tag_id INT NOT NULL,
  FOREIGN KEY (post_id) REFERENCES posts(id),
  FOREIGN KEY (tag_id) REFERENCES tags(id)
);

CREATE TABLE contactus (
  id INT PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  tel VARCHAR(255) NOT NULL,
  text TEXT NOT NULL
);

CREATE TABLE faq (
  id INT PRIMARY KEY AUTO_INCREMENT,
  question VARCHAR(255) NOT NULL,
  answer TEXT NOT NULL
);

CREATE TABLE menu_positions (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  slug VARCHAR(255) NOT NULL
);

CREATE TABLE menu_items (
  id INT PRIMARY KEY AUTO_INCREMENT,
  menu_position_id INT NOT NULL,
  name VARCHAR(255) NOT NULL,
  link VARCHAR(255) NOT NULL,
  parent_id INT,
  FOREIGN KEY (menu_position_id) REFERENCES menu_positions(id),
  FOREIGN KEY (parent_id) REFERENCES menu_items(id)
);

CREATE TABLE categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  slug VARCHAR(255) NOT NULL,
  parent_id INT,
  FOREIGN KEY (parent_id) REFERENCES categories(id)
);

CREATE TABLE post_categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  post_id INT NOT NULL,
  category_id INT NOT NULL,
  FOREIGN KEY (post_id) REFERENCES posts(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);
```

------------

- posts (id, title, slug, content, fullcontent, createdat, updatedat, author)
- users (id, username, hash password, email, firstname, lastname, name, role_id)
- user_prems (user_id, key, value=0 or 1)
  post-edit
  post-insert
  post-delete

  tag-edit
  tag-insert
  tag-delete

  faq-insert
  faq-delete
  faq-edit

  menu_positions-insert
  menu_positions-delete
  menu_positions-edit

  menu_items-insert
  menu_items-delete
  menu_items-edit

  slider-insert
  slider-delete
  slider-edit

- slider_positions (id, name, slug)
- slider_slides (id, slider_position_id, image, title, description, link)
- tags (id, text)
- post_tags (id, post_id, tag_id)
- contactus (id, first name, last name, email, tel, text)
- faq (id, question, answer)
- menu_positions (id, name, slug)
- menu_items (id, menu_position_id, name, link, parent_id=null)
- categories (id, name, slug, parent_id=null)
- post_cagegoties (id, post_id, category_id)

# Examples

![Screenshot from 2023-07-10 05-34-24](https://github.com/BaseMax/GeneralCMSDDDPHP/assets/107758775/eeefac2a-d8b1-4425-9b36-955443755679)

![Screenshot from 2023-07-10 05-34-09](https://github.com/BaseMax/GeneralCMSDDDPHP/assets/107758775/f85530df-70b4-4b63-b094-90b5dc44f2f4)

![Screenshot from 2023-07-10 17-33-52](https://github.com/BaseMax/GeneralCMSDDDPHP/assets/107758775/c837cda2-61b1-411a-a024-426e372f733c)


Copyright 2023, Max Base
