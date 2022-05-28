<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <span>Materia Prima: {{ $solicitud->Materia_Prima->nombre }}</span><br>
    <span>Fecha Solicitada:{{ $solicitud->f_vencimiento }}</span><br>
    <span>Cantidad :{{ $solicitud->cantidad }}</span>

</body>

</html>
