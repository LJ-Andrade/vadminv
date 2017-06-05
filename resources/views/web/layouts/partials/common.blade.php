<script type="text/javascript">
	
    $(document).on('submit','#ContactForm',function(e){
        e.preventDefault();

        var data   = $(this).serialize();
        var route  = "{{ url('ajax_mail') }}";
        var loader = '<img src="{{ asset("images/loaders/loader-sm.svg") }}"/>' + '<div style="color: #fff; margin-left: 15px">Enviando...</div>';

        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                $('#ContactBtn').hide();
                $('#FormLoader').html(loader);
            },
            success: function(data) {
                $('#ContactForm').hide();
                $('#FormSuccess').removeClass('Hidden');
                $('#FormResponse').hide();
                console.log(data);
            },
            error: function(data) {
                console.log(data);
                $('#FormResponse').hide();
                $('#ContactForm').hide();
                $('#FormError').removeClass('Hidden');
            }
        });

    })


</script>