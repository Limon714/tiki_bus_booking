<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="grid grid-cols-6">
    @for ($j = 1; $j <= 36; $j = $j+6)  
     <div class="p-2">
      @for ($x = $j; $x < $j + 6; $x++)
      <div class="w-12 h-12 bg-gray-600  hover:bg-orange-600 rounded text-white m-4 text-center">Seat {{ $x }}</div>
       @endfor
     </div>
     @endfor


</div>

</body>
</html>
