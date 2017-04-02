@if (count($projects) > 0)
    <h1 class="title">My Projects</h1>

    <div class="content">
        <ul>
            @foreach ($projects as $project)
                <li><b>{{ $project->name }}</b> - {{ $project->description }}</li>
            @endforeach
        </ul>
    </div>

    <hr/>
@endif