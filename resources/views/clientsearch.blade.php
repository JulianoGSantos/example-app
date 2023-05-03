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
        <h4>SISTEMA CONTROLE</h4>
    </header>
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
        </thead>
        <tbody>
            @foreach ($infos as $item)
                <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->name}} </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
   <footer>
        <a href="https://www.youtube.com/watch?v=LeOVXQDsAIY&list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n&index=27" target="_blank" rel="external">curso em video</a><br>
   </footer>
</body>
</html>