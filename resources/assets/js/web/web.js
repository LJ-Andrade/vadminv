//////////////////////////////
// 						    //
//        LOADER            //
//                          //
//////////////////////////////

$(document).ready(function () {

	new WOW().init();



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

}); // Document Ready