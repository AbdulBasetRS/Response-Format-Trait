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

after installing the package you should include the namespace, see the following code:

```bash
use Abdulbaset\ResponseFormatTrait\Respond;
```

for use toApi method, see the following code:

```bash
echo Respond::toApi(200);
```

- use,
  ![Screenshot 1](/media/use%20toApi%20with%20status%20code%20200.png)

- output,
  ![Screenshot 1](/media/output%20toApi%20with%20status%20code%20200.PNG)

for use all parameters in toApi method, see the following code:

```bash
echo Respond::toApi(
        200, // status
        'successful response', // message
        'details response with status code 200', // details
        ['testOne', 'testTwo'] // data
    );
```

- use,
  ![Screenshot 1](/media/use%20toApi%20With%20full%20parameters.png)

- output,
  ![Screenshot 1](/media/output%20toApi%20With%20full%20parameters.PNG)

for use getStatusCodeSupported method to get all Status Supported with message and details, see the following code:

```bash
echo json_encode(Respond::getStatusCodeSupported());
```

- use,
  ![Screenshot 1](/media/use%20getStatusCodeSupported.png)

- output,
  ![Screenshot 1](/media/output%20getStatusCodeSupported.PNG)

## Author

- Abdulbaset R. Sayed <AbdulbasetRedaSayedHF@Gmail.com>
-

## License

This Response Format Package PHP Package is open-source software licensed under the MIT License.
