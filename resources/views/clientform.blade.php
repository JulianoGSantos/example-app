<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/site.css">
    <title>Sistema Controle</title>
</head>
<body>
    <form action="{{ route('client-form') }}" method="post">
        @csrf
        <header>    
            <h4>SISTEMA CONTROLE</h4>
        </header>
        <h5>CADASTRO DE CLIENTES</h5>
            <div class="frame">
                <main class="cliente">
                    <div class="primeira">
                        <label>Nome: </label>
                        <input type="text" size="50px" name="name">
                        <label>Cpf: <label>
                        <input type="text" name="cpf">
                        <label>Rg: </label>
                        <input type="text" name="rg">
                    </div>
                    <div class="segunda">
                        <label>Rua: </label>
                        <input type="text" size="50px" name="street">
                        <label>Número: </label>
                        <input type="text" name="number">
                        <label>Bairro: </label>
                        <input type="text" name="district">
                    </div>
                    <div class="terceira">
                        <label>Cidade: </label>
                        <input type="text" size="50px" name="city">
                        <label>Celular: </label>
                        <input type="text" name="fone">
                        <label>Celular 2: </label>
                        <input type="text" name="celfone">
                    </div>
                </main>
            </div>
        <footer>
            <input type="submit" value="cadastrar" size="20px">
            <input type="reset" value="limpar">
        </footer>
    </form>
</body>
</html>