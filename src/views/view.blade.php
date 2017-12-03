@if (Session::has('sweetalert.json'))
    <script>
        swal({!! Session::pull('sweetalert.json') !!});
    </script>
@endif