@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>listado de contizaciones</title>
</head>
<body>
    <h1>Cotizaciones</h1>
    <a href="{{route('cotizaciones.create')}}">Crear Cotizacion</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
            <tr>
</body>
</html>       
            