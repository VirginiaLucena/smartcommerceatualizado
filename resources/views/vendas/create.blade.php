<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fornecedores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <img src="http://www.merkactiva.com/blog/wp-content/uploads/2015/03/E-commerce.png" style="float:left;width:400px;height:400px">
        <style>
            html, body {
                background-color: #F0FFFF;
                color: black;
                font-family: arial;
                
            }
            #formu{
                box-shadow: 5px 5px 10px #0076a3;
                -webkit-box-shadow: 5px 5px 10px #0076a3;
                -moz-box-shadow: 5px 5px 10px #0076a3;
            	margin-top:200px;
            	padding:2%;
            	text-align: center;
            	background-color:#B0E0E6;
            	
            	width:30%;
            }
            #botao{
            	background-color:green;
            	border-color: green;
            	color:white;
            	padding:0.5%;
            }

        </style>
     </head>
	<body>
		<center><div id="formu">
			<br>
			<br>
			<b>REGISTRAR VENDAS</b><br><br><br>
			<form method="post" action=" {{route('vendas')}} ">

				@csrf
				
                Funcionário: 
				<select name="id_funcionario">
                    @foreach($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}">{{ $funcionario->user->name }}</option>
                    @endforeach
                 </select></br></br>
                 Produto:
                 <select name="id_produto">
                    @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                 </select></br></br>
                <input type="number" placeholder="Quantidade" name="quantidade"/> </br></br>
                Cliente: 
                <select name="id_cliente">
                    @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->user->name }}</option>
                    @endforeach
                 </select></br></br>
			    
			    <input type="submit" id="botao" value="Cadastrar"/>

			</form>
		</div></center>
	</body>
</html>

