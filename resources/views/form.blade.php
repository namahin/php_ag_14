<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<h1>Form</h1>

<form action="{{ route('submit.form') }}" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <button type="submit">Submit</button>
</form>
</body>
</html>
