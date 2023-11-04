<x-layout>
    <div class="full-height flex-center">
        <div>
        <h1>
        Hello there!
        </h1>
        @auth
            You are in!
        @endauth
        <p>
        Please <a href="/signup">sign up</a> or <a href="/login">log in</a>.
        </p>
        </div>
    </div>
</x-layout>