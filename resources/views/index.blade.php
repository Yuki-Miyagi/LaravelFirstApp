<x-layout>
        <p>今日は{{ $today }}です。</p>
        {{-- <p>{{ $birthdayfriends }}</p> --}}

        <ul>
            @forelse ($birthdayfriends as $birthdayfriend)
                <li>
                    <p class='friend'>今日は{{ $birthdayfriend->name }}さんの誕生日です。</p>
                </li>
            @empty
                <li>No one has a birthday today</li>
            @endforelse
        </ul>
        <h1>
            <span>Your friends</span>
            <a href="{{ route('birth.create') }}">[Add]</a>
        </h1>
        <ul>
            @forelse ($birthdays as $birthday)
                <li>
                    <p>{{ $birthday->name }}</p>
                    <p>{{ $birthday->birthday }}</p>
                    <form method="post" action="{{ route('birth.delete') }}">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $birthday->id }}">
                        <button class="btn">[x]</button>
                    </form>

                </li>
            @empty
                <li>No items posted</li>
            @endforelse
        </ul>
</x-layout>
