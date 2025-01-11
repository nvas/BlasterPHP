# BlasterPHP

BlasterPHP is a lightweight and simple PHP framework designed for rapid application development. It provides essential tools and structure to build web applications efficiently without the overhead of larger frameworks.

## Features
- Lightweight and fast
- Simple MVC architecture
- Easy-to-configure routes
- Minimal setup requirements

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/nvas/BlasterPHP.git
   ```

2. Navigate to the project directory:
   ```bash
   cd BlasterPHP
   ```

3. Install dependencies using Composer (if applicable):
   ```bash
   composer install
   ```

4. Set up your web server:
   - Point the document root to the `public` directory.
   - Ensure the `.htaccess` file is configured correctly for Apache (or configure URL rewriting for other web servers).

## Usage

1. Define routes in the `routes.php` file located in the `app/` directory:
   ```php
   $router->get('/hello', function() {
       return 'Hello, World!';
   });
   ```

2. Create controllers and views in the `app/` directory following the MVC pattern.

3. Access your application via your browser by navigating to your configured domain or localhost.

## Requirements
- PHP 7.4 or higher
- A web server (Apache, Nginx, etc.)
- Composer (for dependency management, if needed)

## Contributing
Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Description of changes"
   ```
4. Push to your branch:
   ```bash
   git push origin feature-name
   ```
5. Submit a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact
For questions or support, please open an issue in the repository or contact the maintainer.

---

Happy coding with BlasterPHP!
