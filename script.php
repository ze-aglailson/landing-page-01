<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){

        $("#btn-enviar").on('click', function(){

            $.ajax({

                url: 'insert.php',
                type:'POST',
                data:{
                    nome:$("#ipt-nome").val(), 
                    email:$("#ipt-email").val()
                },
                beforeSend: function(){
                    $("#menssagem").html("Enviando...")
                },
                success: function(data)
                {
                    $("#menssagem").html("O E-book foi enviado para o seu e-mail!"),
                    $("#ipt-nome").val(""),
                    $("#ipt-email").val(""),
                    $(function(){
                        $("#menssagem").fadeIn(700, function(){
                            window.setTimeout(function(){
                                $("#menssagem").fadeOut()
                            },4000)
                        })
                    })
                },
                error:function(data){
                    $("#menssagem").html("Página insert não encontrada!") 
                }

            })

        })
    })
</script>