<!-- resources/views/event/index.blade.php -->
<h1>{{ $tournament->name }} Events</h1>

<ul>
    @foreach ($events as $event)
        <li><a href="/tournament/{{ $tournament->id }}/events/{{ $event->id }}">{{ $event->name }}</a></li>
    @endforeach
</ul>
