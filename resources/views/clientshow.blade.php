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
    <header>    
        <h4><a href="{{ route('start') }}">SISTEMA CONTROLE</a></h4>
    </header>
    <h5>CLIENTE CÓD: {{ $data->id}} </h5>
    <div class="frame">
        <main class="container">
            <ul>
                <li> NOME: {{ $data->name}} </li>
                <li> CPF: {{ $data->cpf}} </li>
                <li> RG: {{ $data->rg}} </li>
                <li> RUA: {{ $data->street}} </li>
                <li> NÚMERO: {{ $data->number}} </li>
                <li> BAIRRO: {{ $data->district}} </li>
                <li> CIDADE: {{ $data->city}} </li>
                <li> CELULAR: {{ $data->fone}} </li>
                <li> CELULAR 2: {{ $data->celfone}} </li>
            </ul>
            <form action="{{ route('client-destroy', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" value="Deletar" size=14>Deletar</button>
            </form>
        </main>
    </div>
   <footer>
        <a href="https://www.youtube.com/watch?v=LeOVXQDsAIY&list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n&index=27" target="_blank" rel="external">curso em video</a><br>
   </footer>
</body>
</html>