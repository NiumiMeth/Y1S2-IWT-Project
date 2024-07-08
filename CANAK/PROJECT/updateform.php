<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="POST">
    <h2>Create New Announcement</h2>
        <div class="form-group">
                        <input type="number" name="num" id="num">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" placeholder="Enter the title of the announcement" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty">Faculty:</label>
                        <input type="faculty" id="faculty" name="faculty" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" placeholder="Enter the announcement message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">UPDATE</button>
                    </div>
                </form>
    
</body>
</html>