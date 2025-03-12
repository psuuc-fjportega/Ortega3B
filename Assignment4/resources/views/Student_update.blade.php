<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .card {
            border: none;
            background: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            padding: 0.6rem 1.8rem;
            border-radius: 6px;
            transition: all 0.2s;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        .form-control {
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            padding: 0.75rem;
        }
        .form-control:focus {
            border-color: #6c757d;
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card">
            <form action="/edit/<?php echo $users[0]->id; ?>" method="post">
                @csrf
                <div class="mb-4">
                    <input type="text" class="form-control" name="stud_name" placeholder="Student Name" value="<?php echo $users[0]->name; ?>">
                </div>
                <div class="d-flex gap-3 justify-content-center">
                    <button class="btn btn-dark" type="submit">Update</button>
                    <a class="btn btn-outline-dark" href="/view-records">View</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>