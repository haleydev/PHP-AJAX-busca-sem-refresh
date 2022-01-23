<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">    
    <title>PHP sem refresh</title>
</head>
<body>  
    <div class="search">
        <h1>PHP sem refresh</h1>  

        <script>
            //ativado ao digitar:
            $(document).ready(function(){
                $("#search").keyup(function(){
                    $.ajax({
                        type:'post',
                        url:'consulta.php',                
                        data:{dados: $(this).val()}, 
                        success:function(result){
                            $("#result").html(result);
                        }
                    });
                });
            });
        </script>  

        <!-- <script>
            //ativado ao pressionar enter:
            $(document).ready(function(){
                $("#search").keypress(function(){
                    var keycode = (event.keyCode ? event.keyCode : event.which);
                    if(keycode == '13'){
                        $.ajax({
                        type:'post',
                        url:'consulta.php',                
                        data:{dados: $(this).val()}, 
                        success:function(result){
                            $("#result").html(result);
                            }
                        });         
                    }          
                });
            });    
        </script>   -->

        <input placeholder="Pesquisar..." autocomplete="off" type="text" class="input" id="search">
        <span id="result"></span>
    </div>

    <div class="calculo">
        <h2>Calculo</h2>  

        <script>        
            $(document).ready(function(){            
                $("#calcular").click(function(){
                    $.ajax({
                        type:'post',
                        url:'calculo.php',                
                        data: $('#formCalculo').serialize(), 
                        success:function(resultCalculo){
                            $("#resultCalculo").html(resultCalculo);
                        }
                    });
                });
            });        
        </script> 

        <form id="formCalculo" action="" method="POST">
            <input name="n1" placeholder="n1" autocomplete="off" type="number" class="input"> *
            <input name="n2" placeholder="n2" autocomplete="off" type="number" class="input"><br>
            <span id="resultCalculo"></span><br><br>
            <input class="sub" type="button" value="Calcular" id="calcular">
        </form>
             
        <!-- By warleyrodrigues.net -->
    </div>
</body>
</html>