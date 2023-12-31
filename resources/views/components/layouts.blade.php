<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap');
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="{{route('index')}}/assets/css/{{$css}}.css"/>
    <title>{{$titulo}}</title>
</head>
<body>
    {{$slot}}
</body>
</html>