<main class="p-8">
    <div class="grid grid-cols-2">

    
    <form action="" method="post" class=" grid grid-rows-3 gap-4 w-[30%]">
        @csrf
        <input type="text" class="p-4 outline-none" name="location" id="" placeholder="Enter your destination">
        <input type="text" class="p-4 outline-none" name="shift" id="" placeholder="Enter your Shift">
        <button type="submit" class="bg-green-500 font-bold rounded">Submit</button>
    </form>

    @if (session()->has('status'))
    <h4>  {{ session('status') }}</h4>
       
    @endif

    <table class="border px-5">
        <tr>
            <th>ID NO</th>
            <th>Location</th>
            <th>Shift</th>
            <th style="text-align:center">Action</th>

        </tr>
        @foreach ($data as $dat)
        <tr class="text-center bg-gray-300 border">
            <td>{{ $dat->id }}</td>
            <td>{{ $dat->location }}</td>
            <td>{{ $dat->shift }}</td>
            <td style="text-align:center">
                <a class="bg-green-500 rounded p-2" href="{{ route('edit',$dat->id ) }}"> Edit</a>
                <a class="bg-red-900 rounded p-2 text-white" href="{{ route('delete',$dat->id ) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</main>
