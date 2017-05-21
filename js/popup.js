function popup(){
	$dialog.dialog({
	    autoOpen: false,
	    modal: true
	});

	$item.on('click', function() {
	    $dialog.html('Este item ainda não funciona');
	    $dialog.dialog('open');
	});
}