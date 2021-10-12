$(function () {
	$('.editable').dblclick(function () {
		var contenu = $(this).html();
		switch ($(this).attr('data-type')) {
			case 'text':
				var code = '<input type="text" class="input"/>';
				break;
			case 'textarea':
				var code = '<textarea class="input"></textarea>';
				break;
		}
		$(this).html(code).find('.input').val(contenu);
	});

	$('main').on('blur', '.input', function () {
		var that = $(this);
		$.ajax({
			url: '?ajax=updateField',
			data: {
				id: $(this).closest('.post-detail').attr('data-id'),
				field: $(this).closest('.editable').attr('data-field'),
				value: $(this).val(),
			},
			method: 'get',
			success: function (reponsePHP) {
				if (reponsePHP == 1) {
					that.closest('.editable').html(that.val());
					notify('Modification sauvegardée', 'success');
				} else {
					notify("Problème durant l'update !", 'succes');
				}
			},
			error: function () {
				alert('Problème durant la transaction !');
			},
		});
	});
});
