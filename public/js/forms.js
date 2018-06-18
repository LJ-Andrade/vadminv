
// ------------ Tags ------------ //
$('.Select-Tags').chosen({
    placeholder_text_multiple: 'Seleccione las etiquetas',
    // max_selected_options: 3,
    search_contains: true,
    no_results_text: 'No se ha encontrado la etiqueta'
});

$('.Select-Category').chosen({
    placeholder_text_single: 'Seleccione una categoría'
});

$('.Select-Chosen').chosen({
    placeholder_text_single: 'Seleccione una categoría'
});

// --------- Slug sanitizer -------- //
$(".SlugInput").keyup(function () {
    var Text = $(this).val();
    Text = Text.toLowerCase();
    var regExp = /\s+/g;
    Text = Text.replace(/[&\/\\#,¡!´#+()$~%.'":*?<>{}]/g, '');
    Text = Text.replace(regExp, '-');
    Text = Text.replace('ñ', 'n');
    Text = Text.replace('á', 'a');
    Text = Text.replace('é', 'e');
    Text = Text.replace('í', 'i');
    Text = Text.replace('ó', 'o');
    Text = Text.replace('ú', 'u');

    $(".SlugInput").val(Text);
});

// --------- Slug AutoFillnput from title --------- //
$("#TitleInput").keyup(function (event) {

    var stt = $(this).val();

    var Text = $(this).val();
    Text = Text.toLowerCase();
    var regExp = /\s+/g;
    Text = Text.replace(/[&\/\\#,¡!´#+()$~%.'":*?<>{}]/g, '');
    Text = Text.replace(regExp, '-');
    Text = Text.replace('ñ', 'n');
    Text = Text.replace('á', 'a');
    Text = Text.replace('é', 'e');
    Text = Text.replace('í', 'i');
    Text = Text.replace('ó', 'o');
    Text = Text.replace('ú', 'u');

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
$('.ShowNotesTextArea').click(function () {
    var notes = $('.NotesTextArea');
    if (notes.hasClass('Hidden')) {
        notes.removeClass('Hidden');
    } else {
        notes.addClass('Hidden');
    }
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
    captions: {
        button: function button(options) {
            return 'Seleccionar ' + (options.limit == 1 ? 'Imágen' : 'Imágen');
        },
        feedback: function feedback(options) {
            return 'Agregar imágenes...';
        },
        feedback2: function feedback2(options) {
            return options.length + ' ' + (options.length > 1 ? ' imágenes seleccionadas' : ' imágen seleccionada');
        },
        drop: 'Arrastre las imágenes aquí',
        paste: '<div class="fileuploader-pending-loader"><div class="left-half" style="animation-duration: ${ms}s"></div><div class="spinner" style="animation-duration: ${ms}s"></div><div class="right-half" style="animation-duration: ${ms}s"></div></div> Pasting a file, click here to cancel.',
        removeConfirmation: 'Eliminar?',
        errors: {
            filesLimit: 'Only ${limit} files are allowed to be uploaded.',
            filesType: 'Solo estas extensiones son admitidas: ${extensions}',
            fileSize: 'El archivo ${name} es muy grande! Elija un archivo de ${fileMaxSize}MB máximo.',
            filesSizeAll: 'Los archivos elegidos son muy grandes. Tamaño máximo: ${maxSize} MB.',
            fileName: 'El archivo con el nombre ${name} ya está seleccionado.',
            folderUpload: 'No está permitido subir carpetas.'
        },
        dialogs: {

            // alert dialog
            alert: function alert(text) {
                return alert_confirm(text);
            },

            // confirm dialog
            confirm: function confirm(text, callback) {
                'confirm(text) ? callback() : null;';
            }
        }
    }

});

$('#SingleImage').fileuploader({
    
        extensions: ['jpg', 'jpeg', 'png', 'gif'],
        limit: 1,
        maxSize: 2,
        addMore: false,
        captions: {
            button: function button(options) {
                return 'Seleccionar ' + (options.limit == 1 ? 'Imágen' : 'Imágen');
            },
            feedback: function feedback(options) {
                return 'Agregar imágen...';
            },
            feedback2: function feedback2(options) {
                return options.length + ' ' + (options.length > 1 ? ' imágen seleccionada' : ' imágen seleccionada');
            },
            drop: 'Arrastre las imágenes aquí',
            paste: '<div class="fileuploader-pending-loader"><div class="left-half" style="animation-duration: ${ms}s"></div><div class="spinner" style="animation-duration: ${ms}s"></div><div class="right-half" style="animation-duration: ${ms}s"></div></div> Pasting a file, click here to cancel.',
            removeConfirmation: 'Eliminar?',
            errors: {
                filesLimit: 'Solo se puede elegir ${limit} imágen',
                filesType: 'Solo estas extensiones son admitidas: ${extensions}',
                fileSize: 'El archivo ${name} es muy grande! Elija un archivo de ${fileMaxSize}MB máximo.',
                filesSizeAll: 'El archivo ${name} es muy grande! Elija un archivo de ${fileMaxSize}MB máximo.',
                fileName: 'El archivo con el nombre ${name} ya está seleccionado.',
                folderUpload: 'No está permitido subir carpetas.'
            },
            dialogs: {
    
                // alert dialog
                alert: function alert(text) {
                    return alert_confirm(text);
                },
    
                // confirm dialog
                confirm: function confirm(text, callback) {
                    'confirm(text) ? callback() : null;';
                }
            }
        }
    
    });