<html>
<head>
<title>Operação Teste</title>
</head>
<body>

<form action="/teste" method="post">
    <label for="txtIDADE">Digite a Idade:</label>
    <input type="text" name="valor_idade" id="txtIDADE"><br><br><br>

    <label for="txtPeso">Digite o peso:</label>
    <input type="text" name="valor_peso" id="txtPeso">

    <input type="submit" value="Processar"><br><br>

    {{ $calculo or '' }}
</form>



</body>
</html>