<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">Create a new firmware</h1>
            </div>
        </div>
        <div class="box mb-6">
            <div class="content">

                <form action="{{route('firmwares.store')}}" method='POST'>
                    @csrf
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <div class="control">
                            <input type="text" name="name" value="{{old('name')}}" class="input" autofocus >
                            @error('name')<p>{{$message}}</p>@enderror
                        </div>
                    </div>
                    <div class="field">
                        <label for="version" class="label">Version</label>
                        <div class="control">
                            <input type="text" name="version" value="{{old('version')}}" class="input" autofocus>
                            @error('version')<p>{{$message}}</p>@enderror
                        </div>
                    </div>
                    <div class="field">
                        <label for="lines_of_code" class="label">Lines of code</label>
                        <div class="control">
                            <input type="text" name="lines_of_code" value="{{old('lines_of_code')}}" class="input" autofocus>
                            @error('lines_of_code')<p>{{$message}}</p>@enderror
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Save</button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button is-warning">Reset</button>
                        </div>
                        <div class="control">
                            <a type="button" href="#" class="button is-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
