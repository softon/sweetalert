## SweetAlert 2
Laravel 5 Package for <a href="https://limonte.github.io/sweetalert2/">SweetAlert 2</a>. Use this package to easily show sweetalert2 prompts in your laravel app.

<strong>Installation</strong>

<ol>
  <li>Use composer to install the package<br>
      <pre><code> composer require softon/sweetalert </code></pre>
  </li>
  <li>(Optional for Laravel 5.5) Add the service provider to the config/app.php file in Laravel<br>
      <pre><code> Softon\SweetAlert\SweetAlertServiceProvider::class, </code></pre>
      
  </li>
  <li>(Optional for Laravel 5.5) Add an alias for the Facade to the config/app.php file in Laravel<br>
      <pre><code> 'SWAL' => Softon\SweetAlert\Facades\SWAL::class, </code></pre>
      
  </li>
  <li>Publish the config & views by running <br>
      <pre><code> php artisan vendor:publish </code></pre>
      
  </li>
</ol>

<strong>Config File:</strong>

You can change the basic parameters of the package. Refer the <a href="https://limonte.github.io/sweetalert2/">SweetAlert2</a> Docs for details.

<strong>View Files:</strong>

This package does have its own views to be included in your templates. But if you would like to tweak it or include your own you can use the views published in the resources/views/vendor/sweetalert directory. This package also includes a SweetAlert2 CDN that you can include if you have not included the SweetAlert2 Javascript file from their website. The CDN view must be loaded first.

For Inbuilt views use this in your blade templates before the closing body tag
```php
@include('sweetalert::cdn')
@include('sweetalert::view')

```

Or for the Published Views use this
```php
@include('vendor.sweetalert.cdn')
@include('vendor.sweetalert.view')
```

#Usage

You may use the SWAL Facade or the swal helper function to call the methods.

Showing a Message to User using the SWAL Facade:-
```php
use Softon\SweetAlert\Facades\SWAL;  



// Params: [Title,Text,Type,Options[]]
SWAL::message('Good Job','You have successfully Loged In!','info');  
SWAL::message('Good Job','You have successfully Loged In!','error');  
SWAL::message('Good Job','You have successfully Loged In!','success',['timer'=>2000]);

// For All avialable options please refer the SweetAlert 2 Docs

 ```

Showing a Message to User using the swal helper function:-
```php
swal('Your Title','Text');
swal()->message('Good Job','You have successfully Loged In!','info');  
swal()->message('Good Job','You have successfully Loged In!','error');  
swal()->message('Good Job','You have successfully Loged In!','success',['timer'=>2000]);
 ```

Message Type Can be 'warning', 'error', 'success', 'info' and 'question'. Based on this there are some convinence function that can be used instead of the message method.:-
```php
// Params [Title, Text, Options]
swal()->warning('Good Job','You have successfully Loged In!',[]);
swal()->error('Good Job','You have successfully Loged In!',[]);
swal()->success('Good Job','You have successfully Loged In!',[]);
swal()->info('Good Job','You have successfully Loged In!',[]);
swal()->question('Good Job','You have successfully Loged In!',[]);
```

To show modal which will autoclose after few seconds:-
```php 
swal()->autoclose(2000)->message('Good Job','You have successfully Loged In!','info'); 
swal()->autoclose(5000)->success('Good Job','You have successfully Loged In!'); 
```

To show a toast modal which will autoclose after few seconds:-
```php 
swal()->toast()->autoclose(2000)->message('Good Job','You have successfully Loged In!','info'); 
```

To change confirm button text:-
```php 
swal()->button('Close Me')->message('Good Job','You have successfully Loged In!','info'); 

// Button Params [Button Text,Button Colour, SWAL Style Enable / Disable, Style Class for Buttons]
swal()->button('Close Me','#efefef',false,'btn btn-primary')->info('Good Job','You have successfully Loged In!'); 
```

To change position of the modal:-
```php 
//  Possible Posions : 'top', 'top-left', 'top-right', 'center', 'center-left', 'center-right', 'bottom', 'bottom-left', or 'bottom-right'
swal()->position('top')->message('Good Job','You have successfully Loged In!','info'); 
```

You can chain any of these methods to combine the functionality:

```php 
swal()->position('bottom-right')->autoclose(3000)->toast()->message('This is A Custom Message');
```
