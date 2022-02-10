<h3>Fornecedor</h3>
<br>
@isset($fornecedores)
    Nome = {{$fornecedores[0]['Nome']}}
    <br>
    Status = {{$fornecedores[0]['Status']}}
    <br>
    <br>
@endisset


@unless($fornecedores[0]['Status'] == 'S')
    Fornecedor inativo
@endunless