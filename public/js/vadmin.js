$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//////////////////////////////
// 							//
//           SKIN           //
//                          //
//////////////////////////////

//--------------------- NEW AND EDIT AJAX FORMS ------------------------- //

	$('.CloseSmallForm').on('click', function(){

		$(this).parents().eq(3).addClass('Hidden');
		$('.ShowNewBtn').removeClass('Hidden');
		$('.ShowListBtn').addClass('Hidden');

	});


//--------------------- LISTS ------------------------- //

// ----------------- List Actions---------------------- //

$(document).ready(function(){
	$(document).on("click",".Select-Row-Trigger",function(e) {
		$('.List-Actions').addClass('Hidden');
		$(this).children('.List-Actions').removeClass('Hidden');
	});

	// Close Actions
	$(document).on("click",".Close-Actions-Btn",function(e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).parent().addClass('Hidden');
	})
});

// ----------------- Batch Delete --------------------- //

$(document).on("click", ".BatchDelete", function(e){

	
	e.stopPropagation();
	batch_select(this);

	var checkbox = $(this).prop('checked');
	if(checkbox){
		$(this).parent().addClass('row-selected');
	} else {
		$(this).parent().removeClass('row-selected');
	}

});

function batch_select(trigger) {
	
	var countSelected = $('input:checkbox:checked').length;

	if(countSelected >= 2) {
		$('#BatchDeleteBtn').removeClass('Hidden');
	} else  {
		$('#BatchDeleteBtn').addClass('Hidden');
	}

}

//////////////////////////////
// 							//
//        FUNCTIONS         //
//                          //
//////////////////////////////

var deleteRecord = function(id, route, bigtext, smalltext) {
	swal({
		title: bigtext,
		text: smalltext,
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'ELIMINAR',
		cancelButtonText: 'Cancelar',
		confirmButtonClass: 'button buttonOk',
		cancelButtonClass: 'button buttonCancel',
		buttonsStyling: false
	}).then(function () {
		$.ajax({
			url: route,
			method: 'POST',             
			dataType: 'JSON',
			data: { id: id },
			beforeSend: function(){
				$('#Main-Loader').removeClass('Hidden');
			},
			success: function(data){
				if (data.result == 1) {
					$('#Id'+id).hide(200);
					for(i=0; i < id.length ; i++){
						$('#Id'+id[i]).hide(200);
					}
					alert_ok('Ok!','Eliminación completa');
				} else {
					alert_error('Ups!','Ha ocurrido un error');
					console.log(data);
				}
			},
			error: function(data)
			{
				$('#Error').html(data.responseText);
				console.log(data);	
			},
			complete: function()
			{
				$('#Main-Loader').addClass('Hidden');
			}
		});
	});

}





var singleDelete = function(id, route, bigtext, smalltext) {
	swal({
		title: bigtext,
		text: smalltext,
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'ELIMINAR',
		cancelButtonText: 'Cancelar',
		confirmButtonClass: 'button buttonOk',
		cancelButtonClass: 'button buttonCancel',
		buttonsStyling: false
	}).then(function () {

		$.ajax({
			url: route,
			method: 'post',             
			dataType: "json",
			data: {id: id},
			beforeSend: function(){
				$('#Main-Loader').removeClass('Hidden');
			},
			success: function(data){
				if (data.result == 1) {
					$('#Id'+id).hide(200);
					alert_ok('Ok!','Eliminación completa');
				} else {
					alert_error('Ups!','Ha ocurrido un error');
				}
			},
			error: function(data)
			{
				$('#Error').html(data.responseText);
				console.log(data);	
			},
			complete: function()
			{
				$('#Main-Loader').addClass('Hidden');
			}
		});
	});

}



// function confirm_delete(id, bigtext, smalltext) {
// 	swal({
// 		title: bigtext,
// 		text: smalltext,
// 		type: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'ELIMINAR',
// 		cancelButtonText: 'Cancelar',
// 		confirmButtonClass: 'button buttonOk',
// 		cancelButtonClass: 'button buttonCancel',
// 		buttonsStyling: false
// 	}).then(function () {
// 		delete_item(id);
// 	});
// }


function confirm_batch_delete(id, bigtext, smalltext) {
	swal({
		title: bigtext,
		text: smalltext,
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'ELIMINAR',
		cancelButtonText: 'Cancelar',
		confirmButtonClass: 'button buttonOk',
		cancelButtonClass: 'button buttonCancel',
		buttonsStyling: false
	}).then(function () {
		batch_delete_item(id);
	});
}

function resetForm(id) {
    document.getElementById(id).reset();
}

//////////////////////////////
// 							//
//         FORMULES         //
//                          //
//////////////////////////////

function formatNum(num, fixed) {
    var re = new RegExp('^-?\\d+(?:\.\\d{0,' + (fixed || -1) + '})?');
    return num.toString().match(re)[0];
}

//////////////////////////////
// 							//
//          ALERTS          //
//                          //
//////////////////////////////

function alert_ok(bigtext, smalltext){

	swal(
	  bigtext,
	  smalltext,
	  'success'
	);

}

function alert_error(bigtext, smalltext){

	swal(
	  bigtext,
	  smalltext,
	  'error'
	);
	
}

function alert_info(bigtext, smalltext){

	swal({
  		title: bigtext,
		type: 'info',
		html: smalltext,
		showCloseButton: true,
		showCancelButton: false,
		confirmButtonText:
			'<i class="ion-checkmark-round"></i> Ok!'
		});
}


//////////////////////////////
// 							//
//        ACTIONS           //
//                          //
//////////////////////////////

$('.btnClose, .btnClose2').click(function(){
	$(this).parent().fadeOut( 200 );
});


//////////////////////////////
// 							//
//        FILTERS           //
//                          //
//////////////////////////////


$('.OpenFilters').click(function(){
	$('.Search-Filters').fadeIn(200);
});


//////////////////////////////
// 							//
//        LOADER            //
//                          //
//////////////////////////////

$(document).ajaxStart(function(){
    toggleLoader();
});

$(document).ajaxComplete(function(){
	toggleLoader();
});

function toggleLoader(){
  $('.Main-Loader').toggleClass('Hidden');
    // if (!$('.Main-loader').hasClass('Hidden')) {
    //   // This prevents scroll on loader
    // //   $('html').css({ 'overflow': 'hidden', 'height': '100%' });
    // } else {
    // //   $('html').css({ 'overflow-y': 'scroll', 'height': '100%' });
    // }
}

