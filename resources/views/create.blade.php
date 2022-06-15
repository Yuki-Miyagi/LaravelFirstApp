<x-layout>
        <div class="back-link">
            &laquo; <a href="{{ route('birth.index') }}">Back</a>
        </div>
        <h1>Add New Birthday</h1>

        <form method="post" action="{{ route('birth.store') }}">
            @csrf

            <label>
                Name
                <input type="text" name="name">
            </label>
            <label>
                Day
                <input name="birthday" type="date">
            </label>
            <button>Add</button>

        </form>
</x-layout>
