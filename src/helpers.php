<?php

if (!function_exists('swal')) {
    function swal($title=null, $text=null)
    {
        $notifier = app('softon.sweetalert');

        if (!is_null($title)) {
            return $notifier->message($title, $text);
        }

        return $notifier;
    }
}
