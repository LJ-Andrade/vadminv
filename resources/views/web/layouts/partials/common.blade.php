<script type="text/javascript">
	
    $('#ContactFormMayorist').hide();
    $('#OpenFormMayoristBtn').click(function(){
        $('#ContactForm').hide(500);
        $('#ContactFormMayorist').show(500);
    });

    $('.CloseFormMayorist').click(function(){
        $('#ContactFormMayorist').hide(500);
        $('#ContactForm').show(500);
    });
    

    $(document).on('submit','#ContactForm',function(e){
        e.preventDefault();

        var data   = $(this).serialize();
        var route  = "{{ url('ajax_mail') }}";
        var loader = '<br><img src="{{ asset("images/loaders/loader-sm.svg") }}"/>';

        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                $('#ContactBtn').val('Enviando...');
                $('.FormLoader').html(loader);
            },
            success: function(data) {
                $('#ContactForm').hide();
                $('#ContactBtn').hide('Enviar');
                $('#FormSuccess').removeClass('Hidden');
                $('#FormResponse').hide();
                $('#Error').html(data.responseText);
                console.log(data);
            },
            error: function(data) {
                $('#FormResponse').hide();
                $('#ContactForm').hide();
                $('#FormError').removeClass('Hidden');
                $('#Error').html(data.responseText);
                console.log(data);
            },
            complete: function(data){
                $('#ContactBtn').html('Enviar');
                $('.FormLoader').html('');
            }
        });

    });

      $(document).on('submit','#ContactFormMayorist',function(e){
        e.preventDefault();

        var data   = $(this).serialize();
        var route  = "{{ url('ajax_mail_mayorist') }}";
        var loader = '<br><img src="{{ asset("images/loaders/loader-sm.svg") }}"/>';

        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                $('#ContactMayoristBtn').val('Enviando...');
                $('.FormLoader').html(loader);
            },
            success: function(data) {
                $('#ContactFormMayorist').hide();
                $('#ContactMayoristBtn').hide('Enviar');
                $('#FormSuccess').removeClass('Hidden');
                $('#FormResponse').hide();
            },
            error: function(data) {
                $('#FormResponse').hide();
                $('#ContactFormMayorist').hide();
                $('#FormError').removeClass('Hidden');
                console.log(data);
            },
            complete: function(data){
                $('#ContactMayoristBtn').html('Enviar');
                $('.FormLoader').html('');
            }
        });

    })


</script>