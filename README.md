# Documentation

## Response-Format-Trait

This PHP package provides a simple and consistent way to format API and web responses. It includes a set of predefined HTTP status codes with detailed messages and supports both API and web response formatting. The package is designed to be easy to integrate into any PHP project, with a particular focus on Laravel applications.

## Features

- Standardized API and web response formatting.
- Predefined HTTP status codes with detailed messages.
- Easy integration into Laravel projects.

## Installation

Use [Composer](https://getcomposer.org/) to install the package:

You can install this package via Composer:

```bash
composer require abdulbaset/response-format-trait
```

# Usage

1. Publishing Configuration File
   You can publish the configuration file using the following command:

```bash
php artisan vendor:publish --provider="Abdulbaset\ResponseFormatTrait\ResponseFormatTraitServiceProvider" --tag="config"
```

This command will copy the response-format.php file to your config directory, allowing you to customize the package's behavior.

2. Generating Responses

- first exaple

```php
use Abdulbaset\ResponseFormatTrait\Respond;

class YourController extends Controller
{
    use Respond;

    public function someMethod()
    {
        // Example usage:
        return $this->formatApi(200, 'Success', 'Resource created successfully', $data);
    }
}
```

- seconed example

```php
use Abdulbaset\ResponseFormatTrait\Respond;

class YourController extends Controller
{

    public function someMethod()
    {
        // Example usage:
        return  Respond::formatApi(200);
    }
}
```

This will generate a JSON response with the provided status code, message, details, and optional data.

## Configuration

You can customize the behavior of the package by modifying the response-format.php configuration file. The available options are:
Supported languages:

- 'en': English
- 'de': German
- 'fr': French
- 'ar': Arabic
- 'es': Spanish
- 'it': Italian

If set to null, the language will be determined dynamically.

## Author

The package was created by Abdulbaset R. Sayed <AbdulbasetRedaSayedHF@Gmail.com>

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, feel free to open an issue or submit a pull request on GitHub.

## License

This Package is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
