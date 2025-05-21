<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Add New Project</title>
</head>

<body>
    <div class="wrapper">
    <h1>Add New Project</h1>
    <form method="post" action="{{ route('create') }}" enctype="multipart/form-data">
        @csrf
        <label>Title (required): <input type="text" name="title" value="{{ old('title') }}"></label><br><br>
        @error('title')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <label>Description: <textarea name="description">{{ old(key: 'description') }}</textarea></label><br><br>
        <label>Project URL: <input type="url" name="project_url" placeholder="https://www.example.com" value={{ old(key: 'project_url') }}></label><br><br>
        <label>Image (required): <input type="file" name="image" accept="image/*"></label><br><br>
        @error('image')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <label>Status:
            <select name="status">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </label><br><br>
        <input type="submit" value="Add Project">
    </form>
    <p><a href="/">Back to Home</a></p>
    </div>
</body>

</html>