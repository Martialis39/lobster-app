<x-layout>

    @if (isset($error))
            <h5 class="error"> Error! {{ $error }}</h5>
    @endif
    @if (isset($from_signup))
            <h5 class="success"> Success! User '{{$name}}' created</h5>
    @endif
    <div class="full-height flex-center">
        <form action="/login" method="post" class="form-example">
        @csrf
        <div class="form-example">
            <label for="username">Enter your username: </label>
            <input type="username" name="username" id="username" required />
        </div>
        <div class="form-example">
            <input type="submit" value="Log in!" />
        </div>
        </form>
    </div>
</x-layout>
