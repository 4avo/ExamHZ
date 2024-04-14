<x-main>
<div class="block">
    <a href="{{ route('firmwares.edit', $firmware)}}">Edit this firmware</a>
    <h1>The name of the firmware is: {{ $firmware->name}}  </h1> 
    <h2>Current version: {{ $firmware->version}}</h2>
    <h3>It has: {{ $firmware->lines_of_code}} lines of code</h3>
    <h4>Classification: {{$firmware->classification}}</h4>
    <form method='POST' action="{{route('firmwares.destroy', $firmware)}}">
    @csrf
    @method('delete')
    <button type='submit' onclick="return confirm('Are you sure that you want to delete the firmware?')">Delete firmware</button>
    </form>
</div>
</x-main>
