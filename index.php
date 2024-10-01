<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            height: 100vh;
            margin: 0;
        }

        .container {

            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px #0431fa;
            padding: 2rem;
            max-width: 400px;
            max-height: 500px;
            width: 100%;
        }

        .btn {
            width: 100%;
        }

        h3 {
            text-align: center;
        }
        #ext{
            color: gray;
            
        }
        
    </style>
</head>

<body>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <h3>Upload file</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="mb3">
                
                <label for="photo" class="form-label">Photo</label>
                <p id="ext">Allowed extentions jpg, jpeg , png and gif</p>
                <input type="file" name="photo" class="form-control">

            </div>
            <div class="mb-3">
            </div>
            <input type="submit" value="Upload" name="upload" class="btn btn-primary">
    </div>
    </form>
    </div>
</body>

</html>