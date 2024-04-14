<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Post</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Internal CSS */
    body {
        padding-top: 50px;
        padding-bottom: 20px;
    }

    .form-container {
        max-width: 500px;
        margin: auto;
    }

    .form-container h1 {
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-create {
        width: 100%;
    }
</style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h1>Create Post</h1>
        @if ($errors->any())
         <div class="alert alert-danger">
         <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
         </ul>
         </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
         @csrf
         <div class="form-group">
         <label for="title">Title</label>
         <input type="text" name="title" id="title" class="form-control" required>
         </div>
         <div class="form-group">
         <label for="content">Content</label>
         <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
         </div>
         <button type="submit" class="btn btn-primary btn-create">Create</button>
        </form>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>