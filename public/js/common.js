$(document.body).on('click', '.delete-confirm', function(event) {
	event.preventDefault();
	var $form = $(this).closest('form');

	swal({
		title				: 'Yakin Mau Putus?',
		type				: 'warning',
		showCancelButton	: true,
		confirmButtonColor	: 'red',
		confirmButtonText	: 'Putus',
		cancelButtonText	: 'Batal',
		closeOnConfirm		: false,
		width				: 650
	}).then(function(isConfirm){
		if (isConfirm){
			$form.submit();
		}
	})
});
