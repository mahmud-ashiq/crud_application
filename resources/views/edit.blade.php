<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Edit Project</title>
</head>

<body>
    <div class="wrapper">
    <h1>Edit Project</h1>
    <form method="post" action="{{ route('update', $project->id) }}" enctype="multipart/form-data">
        @csrf
        <label>Title (required): <input type="text" name="title" value="{{ $project->title }}"></label><br><br>
        @error('title')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <label>Description: <textarea name="description">{{ $project->description }}</textarea></label><br><br>
        <label>Project URL: <input type="url" name="project_url" placeholder="https://www.example.com" value={{ $project->project_url }}></label><br><br>
        <label>Current Image: <img src="{{ asset('images/' . $project->image) }}" width="100px" alt=""></label><br><br>
        <label>Image: <input type="file" name="image" accept="image/*"></label><br><br>
        @error('image')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <label>Status:
            <select name="status" required>
                <option value="draft" {{ $project->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $project->status == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </label><br><br>
        <input type="submit" value="Edit Project">
    </form>
    <p><a href="/">Back to Home</a></p>
    </div>
</body>

</html>