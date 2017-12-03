<?php namespace Softon\SweetAlert\Facades;

use Illuminate\Support\Facades\Facade;

class SWAL extends Facade {

    protected static function getFacadeAccessor() { return 'softon.sweetalert'; }

}