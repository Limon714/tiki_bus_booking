<main class="p-8">
    <form action="" method="POST">
        @csrf
        <input type="text" name="location" value="{{ $info->location }}" placeholder="Update your destination">
        <button type="submit">Update</button>
    </form>
</main>
