
	// ------------ Tags ------------ //
	$('.Select-Tags').chosen({
		placeholder_text_multiple: 'Seleccione los talles',
		// max_selected_options: 3,
		search_contains: true,
		no_results_text: 'No se ha encontrado el talle'
	});

	$('.Select-Category').chosen({
		placeholder_text_single: 'Seleccione una categoría',
	});

	$('.Select-Chosen').chosen({
		placeholder_text_single: 'Seleccione una opción',
	});


	// --------- Slug sanitizer -------- //
	$(".SlugInput").keyup(function(){
		var Text     = $(this).val();
		Text         = Text.toLowerCase();
		var regExp   = /\s+/g;
		Text         = Text.replace(/[&\/\\#,¡!´#+()$~%.'":*?<>{}]/g,'');
		Text         = Text.replace(regExp,'-');
		Text         = Text.replace('ñ', 'n') ;
		Text         = Text.replace('á', 'a') ;
		Text         = Text.replace('é', 'e') ;
		Text         = Text.replace('í', 'i') ;
		Text         = Text.replace('ó', 'o') ;
		Text         = Text.replace('ú', 'u') ;
		
		$(".SlugInput").val(Text);   

	});

	// --------- Slug AutoFillnput from title --------- //
	$("#TitleInput").keyup(function(event) {

		var stt = $(this).val();

		var Text     = $(this).val();
		Text         = Text.toLowerCase();
		var regExp   = /\s+/g;
		Text         = Text.replace(/[&\/\\#,¡!´#+()$~%.'":*?<>{}]/g,'');
		Text         = Text.replace(regExp,'-');
		Text         = Text.replace('ñ', 'n') ;
		Text         = Text.replace('á', 'a') ;
		Text         = Text.replace('é', 'e') ;
		Text         = Text.replace('í', 'i') ;
		Text         = Text.replace('ó', 'o') ;
		Text         = Text.replace('ú', 'u') ;
		
		$(".SlugInput").val(Text);   

	});

	// $(document).ready(function() {
	// 	$('#Multi_Images').filer({
	// 		// limit: 3,
	// 		maxSize: 3,
	// 		extensions: ['jpg', 'jpeg', 'png', 'gif'],
	// 		changeInput: true,
	// 		showThumbs: true,
	// 		addMore: true
	// 	});
	// });

	//////////////////////////////
	// 							//
	//      CREATE FORM         //
	//                          //
	//////////////////////////////


	// Show Notes Text Area
	$('.ShowNotesTextArea').click(function(){
		var notes = $('.NotesTextArea');
		if (notes.hasClass('Hidden')){
			notes.removeClass('Hidden');
		} else {
			notes.addClass('Hidden');
		}
	});

	// Add Another Address
	$('.AddAnotherAddressBtn').click(function(){
		var addressInput = "<input class='form-control' placeholder='Ingrese otro teléfono' name='deliveryaddress[]' type='text' style='margin-top:5px'>";
		var locInput     = "<input class='form-control' placeholder='Ingrese otro teléfono' name='deliveryaddress[]' type='text' style='margin-top:5px'>";

		$('.AnotherAddress').append(addressInput);
		$('.AnotherLoc').append(locInput);
	});

	
	//////////////////////////////
	// 							//
	//   EDITORS AND FIELDS     //
	//                          //
	//////////////////////////////


	$('#Multi_Images').fileuploader({

		extensions: ['jpg', 'jpeg', 'png', 'gif'],
		limit: null,
		addMore: true,
		maxSize: 2,
		captions: {
			button: function(options) { return 'Seleccionar ' + (options.limit == 1 ? 'File' : 'Imágen'); },
			feedback: function(options) { return 'Agregar imágenes...'; },
			feedback2: function(options) { return options.length + ' ' + (options.length > 1 ? ' imágenes seleccionadas' : ' imágen seleccionada'); },
			drop: 'Arrastre las imágenes aquí',
			paste: '<div class="fileuploader-pending-loader"><div class="left-half" style="animation-duration: ${ms}s"></div><div class="spinner" style="animation-duration: ${ms}s"></div><div class="right-half" style="animation-duration: ${ms}s"></div></div> Pasting a file, click here to cancel.',
			removeConfirmation: 'Eliminar?',
			errors: {
				filesLimit: 'Solo se pueden incluír  ${limit} imágenes',
				filesType: 'Solo se permiten las extensiones: ${extensions}',
				fileSize: '${name} es muy grande! Elija una imágen de menor tamaño ( ${fileMaxSize}MB. )',
				filesSizeAll: 'El archivo es muy pesado! Tamaño máximo: ${maxSize} MB.',
				fileName: 'La imágen con el nombre ${name} ya fue seleccionada.',
				folderUpload: 'No se pueden subir carpetas.'
			},
			dialogs: {
	
				// alert dialog
				alert: function(text) {
					console.log('Error');
				},
				
				// confirm dialog
				confirm: function(text, callback) {
					'confirm(text) ? callback() : null;'
				}
			},
		}

	});

	$('#Single_Image').fileuploader({
		
		extensions: ['jpg', 'jpeg', 'png', 'gif'],
		limit: null,
		addMore: true,
		maxSize: 2,
		filesLimit: 1,
		captions: {
			button: function(options) { return 'Seleccionar ' + (options.limit == 1 ? 'File' : 'Imágen'); },
			feedback: function(options) { return 'Agregar imágenes...'; },
			feedback2: function(options) { return options.length + ' ' + (options.length > 1 ? ' imágenes seleccionadas' : ' imágen seleccionada'); },
			drop: 'Arrastre las imágenes aquí',
			paste: '<div class="fileuploader-pending-loader"><div class="left-half" style="animation-duration: ${ms}s"></div><div class="spinner" style="animation-duration: ${ms}s"></div><div class="right-half" style="animation-duration: ${ms}s"></div></div> Pasting a file, click here to cancel.',
			removeConfirmation: 'Eliminar?',
			errors: {
				filesLimit: 'Solo se pueden incluír  ${limit} imágenes',
				filesType: 'Solo se permiten las extensiones: ${extensions}',
				fileSize: '${name} es muy grande! Elija una imágen de menor tamaño ( ${fileMaxSize}MB. )',
				filesSizeAll: 'El archivo es muy pesado! Tamaño máximo: ${maxSize} MB.',
				fileName: 'La imágen con el nombre ${name} ya fue seleccionada.',
				folderUpload: 'No se pueden subir carpetas.'
			},
			dialogs: {
	
				// alert dialog
				alert: function(text) {
					console.log('Error');
				},
				
				// confirm dialog
				confirm: function(text, callback) {
					'confirm(text) ? callback() : null;'
				}
			},
		}

	});



