<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="shift" id="" placeholder="Enter your Shift">
        <input type="text" name="location" id="" placeholder="Enter your destination">
        <button type="submit">Submit</button>
    </form>

    @if (session()->has('status'))
    <h4>  {{ session('status') }}</h4>
       
    @endif

    <table border="1">
        <tr>
            <th>ID NO</th>
            <th>Location</th>
            <th style="text-align:center">Action</th>

        </tr>
        @foreach ($data as $dat)
        <tr>
            <td>{{ $dat->id }}</td>
            <td>{{ $dat->location }}</td>
            <td style="text-align:center">
                <a href="{{ route('edit',$dat->id ) }}">Edit</a>
                <a href="{{ route('delete',$dat->id ) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>

   

</body>
</html>