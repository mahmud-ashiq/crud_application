<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Project Details</title>
</head>

<body>
    <div class="wrapper">
    <h1>Project Details</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <td>{{ $project->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $project->title }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $project->description }}</td>
        </tr>
        <tr>
            <th>Project URL</th>
            <td>
                @if($project->project_url)
                <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url }}</a>
                @else
                N/A
                @endif
            </td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                @if($project->image)
                <img src="{{ asset('images/' . $project->image) }}" width="150px" alt="Project Image">
                @else
                No image uploaded
                @endif
            </td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ ucfirst($project->status) }}</td>
        </tr>
    </table>

    <br>
    <a href="{{ route('home') }}">Back to Home</a>
</body>
</div>

</html>