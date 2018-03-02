@if($errors->any())
	<script>
		swal({
		  title: 'Validation Error',
		  html: '{!! implode('<br>',$errors->all()) !!}',
		  type: 'error'
		})
	</script> 
@endif