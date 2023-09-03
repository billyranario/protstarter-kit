# ProstarterKit by Billyranario

## Description

`ProstarterKit` is a Laravel package designed to expedite the initial setup and ongoing development of Laravel projects. It serves as a boilerplate, providing a collection of utilities, helpers, and core functionalities that are commonly used in Laravel applications.

This package includes a robust `BaseRequest` class that provides various methods for input transformation and validation. The package also integrates seamlessly with Data Transfer Objects (DTOs), giving you the flexibility to work with data in an organized manner.

Whether you're building a simple API backend, a complex web application, or anything in between, `ProstarterKit` aims to streamline your development process, enabling you to focus more on business logic and less on boilerplate code.

## Requirements

- **PHP version:** 7.4 and above
- **Laravel version:** 6.0 and above

## Features

- **Input Transformation:** Easily transform request data types with methods like getInputAsString, getInputAsInt, getInputAsFloat, and more.
- **DTO Integration:** Comes with a built-in support for DTOs, allowing for easy mapping of request data to data transfer objects.
- **Highly Customizable:** Designed to be flexible, allowing you to extend or override the built-in functionalities according to your project's needs.
- **Easy to Use:** Just a composer require away from being used in any Laravel application.

## Table of Contents

- [Installation](#installation)
- [Usage Examples](#usage-examples)
- [Available Classes](#available-classes)
  - [BaseRequest](#baserequest)
  - [BaseDto](#basedto)
  - [ResponseHelper](#responsehelper)
  - [ServiceResponse](#serviceresponse)
  - [UserRepositoryInterface](#userrepositoryinterface)
  - [ProstarterKitServiceProvider](#prostarterkitserviceprovider)
- [Contributing](#contributing)
- [License](#license)

## Installation

```bash
composer require billyranario/prostarterkit
```

## Usage Examples

Below is a quick example of how you can use `BaseRequest` and `BaseDto` together:

```php
use Billyranario\ProstarterKit\App\Http\Requests\BaseRequest;
use Billyranario\ProstarterKit\App\Dtos\BaseDto;

// In your controller
public function index(BaseRequest $request) {
    $baseDto = new BaseDto();
    $baseDto->setPerPage($request->getInputAsInt('perPage'));
    $baseDto->setOrderBy($request->getInputAsString('orderBy'));

    // Your business logic here
}
```

## Available Classes

### ResponseHelper

The `ResponseHelper` class provides methods for sending HTTP responses.

#### Usage

```php
use Billyranario\ProstarterKit\App\Core\ResponseHelper;

// Sending JSON data with status code 200
ResponseHelper::json(['message' => 'Hello World']);

// Sending a 200 OK status code
ResponseHelper::ok();

// Sending an empty JSON object with status code 200
ResponseHelper::empty();
```

### ServiceResponse

The `ServiceResponse` class encapsulates a standard service response object.

#### Usage

```php
use Billyranario\ProstarterKit\App\Core\ServiceResponse;

// Create a success response
$response = ServiceResponse::success('Operation successful', ['data' => 'some_data']);

```

### BaseDto

The `BaseDto` class serves as a base data transfer object for handling query parameters like pagination, sorting, etc.

#### Usage

```php
use Billyranario\ProstarterKit\App\Dtos\BaseDto;

$baseDto = new BaseDto();
$baseDto->setPerPage(20);
$baseDto->setOrderBy('created_at');
```

### UserRepositoryInterface

The `UserRepositoryInterface` serves as the contract for any class that wants to interact with User data storage.

#### Methods

- `findById(int $id): ?User:` Find a user by ID.
- `findByEmail(string $email): ?User:` Find a user by email.
- `create(array $data): User|bool:` Create a new user.
- `update(array $data, int $id): User|bool:` Update an existing user.
- `delete(int $id): bool|null:` Delete a user by ID.

#### Usage

```php
use Billyranario\ProstarterKit\App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    // implementation here
}
```

### ProstarterKitServiceProvider

The `ProstarterKitServiceProvider` class provides the bootstrapping logic for the package.

#### Usage

Usually, you don't need to interact with this class directly. Laravel will automatically register and boot the provider

```php
use Billyranario\ProstarterKit\App\Core\ServiceResponse;

// Create a success response
$response = ServiceResponse::success('Operation successful', ['data' => 'some_data']);

```

### BaseRequest

The `BaseRequest` class extends Laravel's `FormRequest` and provides methods for typecasting request inputs. It is commonly used together with DTOs to fill in data.

#### Usage with DTOs

```php
use Billyranario\ProstarterKit\App\Http\Requests\BaseRequest;
use Billyranario\ProstarterKit\App\Dtos\BaseDto;

class MyRequest extends BaseRequest
{
    public function rules()
    {
        return [
            // validation rules
        ];
    }

    public function toDto(): BaseDto
    {
        $baseDto = new BaseDto();
        $baseDto->setPerPage($this->getInputAsInt('perPage'));
        $baseDto->setOrderBy($this->getInputAsString('orderBy'));
        return $baseDto;
    }
}

// Inside a controller method
public function update(MyRequest $request)
{
    $baseDto = $request->toDto();
    // Now you can use $baseDto->getPerPage() or $baseDto->getOrderBy()
}
```

## Contributing

Contributions are welcome. Please submit a PR or open an issue.

## License

This package is open-source and licensed under the MIT License.
