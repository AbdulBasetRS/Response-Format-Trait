# Documentation

## Response-Format-Trait

This PHP package provides a simple and consistent way to format API and web responses. It includes a set of predefined HTTP status codes with detailed messages and supports both API and web response formatting. The package is designed to be easy to integrate into any PHP Laravel project, with a particular focus on Laravel applications.

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

To update the `abdulbaset/response-format-trait` package in your Laravel project, you can use Composer's update command. Here's how you can do it:

```bash
composer update abdulbaset/response-format-trait
```

After running the update command in your Laravel project directory, and Composer will check for updates to the `abdulbaset/response-format-trait` package and its dependencies. If a newer version is available, Composer will download and install it, updating your project.

## Usage

1. Publishing Configuration File
   You can publish the configuration file or language files using the following command:

```bash
php artisan vendor:publish --provider="Abdulbaset\ResponseFormatTrait\Providers\ResponseFormatTraitServiceProvider" --tag="config"
php artisan vendor:publish --provider="Abdulbaset\ResponseFormatTrait\Providers\ResponseFormatTraitServiceProvider" --tag="lang"
```

This command will copy the `response-format.php` file to your config directory, allowing you to customize the package's behavior.

1. Generating Responses

- First example

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

- The second example
  This will generate a JSON response with the provided status code, message, details, and optional data.

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

- Checks if a given language is supported

```php
use Abdulbaset\ResponseFormatTrait\Respond;

class YourController extends Controller
{
    public function someMethod()
    {
        if (Respond::isLanguageSupported('en')) {
            // English language is supported
            // Perform actions accordingly
        } else {
            // English language is not supported
            // Handle unsupported language scenario
        }
    }
}
```

This method validates whether a given language code is supported within the Respond trait. It checks if the provided language code exists within the predefined list of supported languages. If the language code is found in the list, the method returns true, indicating that the language is supported. Otherwise, it returns false.

## Examples

Here are some examples of how you can use the `Respond` trait in your controllers:

1. here you can customize message and details response as you need.
   ![Screenshot 1](/media/version-1.1.1/example-1.png)
   and you will get the response like:
   ![Screenshot 1](/media/version-1.1.1/example-1-response.png)
2. here you can change the default language to get message and details for some specific local as you need.
   ![Screenshot 1](/media/version-1.1.1/example-2.png)
   and you will get the response like:
   ![Screenshot 1](/media/version-1.1.1/example-2-response.png)
   other example for 404 not found error
   ![Screenshot 1](/media/version-1.1.1/example-3.png)
   and you will get the response like:
   ![Screenshot 1](/media/version-1.1.1/example-3-response.png)
3. if you want set the dynamically local language you can make middleware and set inside `config(['response-format.language' => config('app.local', 'en')]);`
   ![Screenshot 1](/media/version-1.1.1/example-4.png)
   and you will get the response like:
   ![Screenshot 1](/media/version-1.1.1/example-4-response.png)
4. if you want check the package is supported the language or not, you can use this `Respond::isLanguageSupported($language)` static method.
   ![Screenshot 1](/media/version-1.1.1/example-5.png)

## Configuration

You can customize the behavior of the package by modifying the `response-format.php` configuration file. The available options are:

**Supported languages**:

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
