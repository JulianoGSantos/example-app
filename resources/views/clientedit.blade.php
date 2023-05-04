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
    <div class="container">
        <div class="row">
            <div class="col-12"> 
                <header>
                    <h4>SISTEMA CONTROLE</h4>
                </header> 
                <h5>CLIENTES</h5>
            </div>
            <div class="col-md-6">  
                <form action="{{ route('client-update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <main>
                        <div class="col-md-6">
                        <fieldset>
                            <legend>Cadastro de clientes</legend>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="xname">Nome: </label>
                                <input type="text" name="name" value="{{ $data->name }}" id="xname">
                            </div>
                            <div class="col-md-4">
                            <label for="xcpf">CPF: </label>
                            <input type="text"  name="cpf" value="{{ $data->cpf }}" id="xcpf">
                            </div>
                            <div class="col-md-2">
                            <label for="xrg">RG: </label>
                            <input type="text" name="rg" value="{{ $data->rg }}" id="xrg">
                            </div>
                            </div>
                            <label for="xfone">Celular: </label>
                            <input type="text" name="fone" value="{{ $data->fone }}" id="xfone">

                            <label for="xcelfone">Celular 2: </label>
                            <input type="text" name="celfone" value="{{ $data->celfone }}" id="xcelfone">

                            <label for="xcep">Cep: </label>
                            <input type="text" name="cep" value="{{ $data->cep }}" id="xcep">

                            <label for="xstreet">Rua: </label>
                            <input type="text" name="street" value="{{ $data->street }}" id="xstreet">

                            <label for="xnumber">Número: </label>
                            <input type="text" name="number" value="{{ $data->number }}" id="xnumber">

                            <label for="xdistrict">Bairro: </label>
                            <input type="text" name="district" value="{{ $data->district }}" id="xdistrict">

                            <label for="xcity">Cidade: </label>
                            <input type="text" name="city" value="{{ $data->city }}" id="xcity">
                        </fieldset>
                        </div>
                    </main>
                    </div>
                    <footer>
                        <input type="submit" value="cadastrar" size="20px" >
                        <input type="reset" value="limpar">
                    </footer>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
