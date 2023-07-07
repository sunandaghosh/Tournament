<!-- resources/views/tournament/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Tournament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        form {
            max-width: 500px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #eee;
        }

        label {
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="/tournament/store">
        @csrf

        <h1 class="text-center mb-4">Create Tournament</h1>

        <div class="mb-3 mt-2">
            <label for="tournament_name" class="form-label">Tournament Name:</label>
            <input type="text" name="tournament_name" id="tournament_name" class="form-control" required>
        </div>

        <div class="mb-3 mt-2">
            <label for="sports_type" class="form-label">Type of Sports:</label>
            <input type="text" name="sports_type" id="sports_type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tournament_date" class="form-label">Date of the Tournament:</label>
            <input type="date" name="tournament_date" id="tournament_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="template" class="form-label">Template:</label>
            <input type="text" name="template" id="template" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Event Type:</label>
            <div class="form-check">
                <input type="checkbox" name="event_type[]" value="TEST" class="form-check-input">
                <label class="form-check-label">TEST</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="event_type[]" value="ODI" class="form-check-input">
                <label class="form-check-label">ODI</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="event_type[]" value="T20" class="form-check-input">
                <label class="form-check-label">T20</label>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Create Tournament</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
