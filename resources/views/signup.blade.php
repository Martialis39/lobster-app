<x-layout>

    @if (isset($error))
            <h5 class="error"> Error! User with username of '{{ $name }}' already exists</h5>
    @endif
    <div class="full-height flex-center">
            <form action="" method="post" class="form-example">
    @csrf
    @if (isset($success))
            <h5 class="success"> Success! User '{{ $name }}' created!</h5>
    @endif
    <h1>Sign up!</h1>
    <div class="form-example">
        <label for="username">Enter your username: </label>
        <input type="username" name="username" id="username" required />
    </div>
    <div class="form-example">
        <input type="submit" value="Sign up!" />
    </div>
    </form>
    </div>
</x-layout>
