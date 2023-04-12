<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/site.css">
    <title>Sistema Controle</title>
</head>
<body>
<div class="container col-12">
    <form action="{{ route('client-form') }}" method="post">
        @csrf
        <header>
            <h4>SISTEMA CONTROLE</h4>
        </header>
        <h5>CADASTRO DE CLIENTES</h5>
            <div class="row">
                <main class="cliente">
                    <div class="col-12 col-sm-6 col-md-4"> 
                        <label>Nome: </label>
                        <input type="text" name="name">
                    
                        <label>Cpf: <label>
                        <input type="text" name="cpf">
                   
                        <label>Rg: </label>
                        <input type="text" name="rg">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">    
                        <label>Celular: </label>
                        <input type="text" name="fone">
                   
                        <label>Celular 2: </label>
                        <input type="text" name="celfone">
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <label>Cep: </label>
                        <input type="text" name="cep">
                    
                        <label>Rua: </label>
                        <input type="text"  name="street">
                    
                        <label>Número: </label>
                        <input type="text" name="number">
                        </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <label>Bairro: </label>
                        <input type="text" name="district">
                    
                        <label>Cidade: </label>
                        <input type="text"  name="city">
                    </div>
                </main>
            </div>
        <footer>
            <input type="submit" value="cadastrar" size="20px" >
            <input type="reset" value="limpar">
        </footer>
    </form>
</div>
</body>
</html>
