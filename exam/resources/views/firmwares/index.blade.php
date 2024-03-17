<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">All the firmware</h1>
            </div>
            <div class="column">
                <a href="{{ route('firmwares.create') }}" class="button is-primary is-pulled-right">
                    Add firmware
                </a>
            </div>
        </div>

        @foreach($firmwares as $firmware)
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <a href="{{ route('firmwares.show', $firmware) }}">
                                <strong>{{ $firmware->name }}</strong>
                            </a>
                            <small>{{ $firmware->version}}</small>
                            <br>
                            {{ $firmware->lines_of_code }}
                        </p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
    <div style="visibility: hidden">Starfleet</div>
</x-main>
