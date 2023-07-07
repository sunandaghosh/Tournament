<!-- resources/views/event/show.blade.php -->
<h1>{{ $event->name }}</h1>

<ul>
    <li><a href="/tournament/{{ $tournament->id }}/events/{{ $event->id }}/division">Division</a></li>
    <li><a href="/tournament/{{ $tournament->id }}/events/{{ $event->id }}/categories">Categories</a></li>
    <li><a href="/tournament/{{ $tournament->id }}/events/{{ $event->id }}/competitors">Competitors</a></li>
    <li><a href="/tournament/{{ $tournament->id }}/events/{{ $event->id }}/registration">Registration Form</a></li>
    <li><a href="/tournament/{{ $tournament->id }}/events/{{ $event->id }}/settings">Settings</a></li>
</ul>
