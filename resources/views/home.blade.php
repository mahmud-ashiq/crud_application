<!DOCTYPE html>
<html>

<head>
    <title>Project Manager - Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="wrapper">
        <h1>Project Manager</h1>
        @if (session('success'))
        <h2 style="color:green">{{ session('success') }}</h2>
        @endif
        <h2>All Projects</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Project URL</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>
                        @if ($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url }}</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td><img src="images/{{ $project->image }}" width="100px" alt=""></td>
                    <td>
                        <form action="{{ route('view', $project->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit" class="button">View</button>
                        </form> |
                        <form action="{{ route('edit', $project->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Edit</button>
                        </form> |
                        <form action="{{ route('delete', $project->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
        <a href="/add" style="display:inline-block; padding:8px 16px; background-color:#007bff; color:white; text-decoration:none; border:1px solid #007bff; border-radius:4px;">
            Add New Project
        </a>

    </div>
</body>

</html>