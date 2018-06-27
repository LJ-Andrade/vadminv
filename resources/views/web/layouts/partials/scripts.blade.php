<script type="text/javascript" src="{{asset('plugins/jquery/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/wow/script.wow.js')}}"></script>
{{-- <script type="text/javascript" src="{{asset('plugins/validation/parsley.min.js')}}"></script> --}}
<script type="text/javascript" src="{{ asset('plugins/sweetalert/sweetalert2.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/web.js') }}"></script>


<script>

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

    // Show Newsletter modal
//    setTimeout(function(){
//        $('#NewsletterPopup').modal('show'); 
//    },15000) // 5 seconds.

    $(document).ready(function() {
    });
    // NewSletter
    $('.NewsletterForm').on('submit', function(e){
        e.preventDefault();
        var url  =  "{{ url('addnewsletter') }}";
        //var data = $(".NewsletterForm input[name=email]").val();
        var data = $(this).serialize();
    
        $.ajax({
            type: "GET",
            url: url,
            data: data,
            dataType: 'json',
            beforeSend: function(){
                $('.NewsletterBtn').html('');
                $('.NewsletterBtn').html("<img style='width:22px' src={{ asset('images/loaders/loader-sm.svg') }}>");
            },
            success: function(data){
                if(data.response == 'E'){
                    alert_error('Ups!', data.message);
                } else {
                    alert_ok('Ok!', data.message);
                }                
                $('#NewsletterPopup').modal('hide');
            }, 
            error: function(data){
                console.log(data);
                $('.ErrorNewsletter').html(data.responseText);
            },
            complete: function(){
                $('.NewsletterBtn').html('Suscribirse');
                $(".NewsletterForm input[name=email]").val('');
            }
        });

    });

</script>