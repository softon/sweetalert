## SweetAlert 2

Laravel 5 Package for [SweetAlert 2](https://github.com/sweetalert2/sweetalert2/). Use this package to easily show SweetAlert prompts in your Laravel application.

### Installation

1. Use composer to install the package

```bash
$ composer require softon/sweetalert
```

2. (Optional for Laravel 5.5) Add the service provider to the config/app.php file in Laravel

```php    
Softon\SweetAlert\SweetAlertServiceProvider::class,
```

3. (Optional for Laravel 5.5) Add an alias for the Facade to the config/app.php file in Laravel<br>

```php   
'SWAL' => Softon\SweetAlert\Facades\SWAL::class,
```
      
4. Publish the config & views by running <br>

```bash
$ php artisan vendor:publish
```

### View

This package does have its own views to be included in your templates. But if you would like to tweak it or include your own you can use the views published in the `resources/views/vendor/sweetalert` directory. 

This package also includes a SweetAlert2 CDN that you can include if you have not included the SweetAlert2 Javascript file from their website. The CDN view must be loaded first.

For built in views, you can use this in your blade templates before the closing body tag

```php
@include('sweetalert::cdn')         // Optional needed only if SweetAlert2 files are not inserted by the developer 
@include('sweetalert::view')
@include('sweetalert::validator')   // Optional needed only to show form validation errors automatically
```

Or for the Published Views use this

```php
@include('vendor.sweetalert.cdn')   // Optional needed only if SweetAlert2 files are not inserted by the developer
@include('vendor.sweetalert.view')
@include('vendor.sweetalert.validator')   // Optional needed only to show form validation errors automatically
```

### Configuration

You can change the basic parameters of the package by referring to the [SweetAlert2](https://github.com/sweetalert2/sweetalert2/) documentations for more details.

### Usage

You may use the SWAL Facade or the swal helper function to call the methods.

Showing a Message to User using the SWAL Facade:

```php
use Softon\SweetAlert\Facades\SWAL;  

// Params: [Title,Text,Type,Options[]]
SWAL::message('Good Job','You have successfully logged In!','info');  
SWAL::message('Good Job','You have successfully logged In!','error');  
SWAL::message('Good Job','You have successfully logged In!','success',['timer'=>2000]);

// For All available options please refer the SweetAlert 2 Docs
 ```

Showing a Message to User using the swal helper function:

```php

//Message Type Can be `warning`, `error`, `success`, `info` and `question`. Based on this there are some convinence function that can be used instead of the message method.:
swal('Your Title','Text');
swal()->message('Good Job','You have successfully logged In!','info');  
swal()->message('Good Job','You have successfully logged In!','error');  
swal()->message('Good Job','You have successfully logged In!','success',['timer'=>2000]);
 ```

```php
// Params [Title, Text, Options]
swal()->warning('Good Job','You have successfully logged In!',[]);
swal()->error('Good Job','You have successfully logged In!',[]);
swal()->success('Good Job','You have successfully logged In!',[]);
swal()->info('Good Job','You have successfully logged In!',[]);
swal()->question('Good Job','You have successfully logged In!',[]);
```

To show modal which will autoclose after few seconds:

```php 
swal()->autoclose(2000)->message('Good Job','You have successfully logged In!','info'); 
swal()->autoclose(5000)->success('Good Job','You have successfully logged In!'); 
```

To show a toast modal which will autoclose after few seconds:

```php 
swal()->toast()->autoclose(2000)->message('Good Job','You have successfully logged In!','info'); 
```

To change confirm button text:

```php 
swal()->button('Close Me')->message('Good Job','You have successfully logged In!','info'); 

// Button Params [Button Text,Button Colour, SWAL Style Enable / Disable, Style Class for Buttons]
swal()->button('Close Me','#efefef',false,'btn btn-primary')->info('Good Job','You have successfully logged In!'); 
```

To change position of the modal:

//  Possible Posions : 'top', 'top-left', 'top-right', 'center', 'center-left', 'center-right', 'bottom', 'bottom-left', or 'bottom-right'
swal()->position('top')->message('Good Job','You have successfully logged In!','info'); 
```

Possible Positions : `top`, `top-left`, `top-right`, `center`, `center-left`, `center-right`, `bottom`, `bottom-left`, or `bottom-right`

You can chain any of these methods to combine the functionality:

```php 
swal()->position('bottom-right')->autoclose(3000)->toast()->message('This is A Custom Message');
```
