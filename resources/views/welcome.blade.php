<x-layout>
    <div class="full-height flex-center">
        <div>
        <h1>
        Hello there!
        </h1>
        @auth
            @if (isset($name))
                <p>You are in! Your username is {{$name}}</p>
            @endif
        @endauth
        @guest
        <p>
        Please <a href="/signup">sign up</a> or <a href="/login">log in</a>.
        </p>
        @endguest
        </div>
    </div>
</x-layout>