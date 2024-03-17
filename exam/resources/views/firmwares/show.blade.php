<x-main>
<div class="block">
    <a href="{{ route('firmwares.edit', $firmware)}}">Edit this firmware</a>
    <h1>The name of the firmware is: {{ $firmware->name}}  </h1> 
    <h2>Current version: {{ $firmware->version}}</h2>
    <h3>It has: {{ $firmware->lines_of_code}} lines of code</h3>
    <form method='POST' action="{{route('firmwares.destroy', $firmware)}}">
    @csrf
    @method('delete')
    <button type='submit'>Delete firmware</button>
    </form>
</div>
</x-main>
