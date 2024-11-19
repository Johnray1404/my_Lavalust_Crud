<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .container {
            max-width: 500px; 
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        .back-btn {
            background-color: #dc3545; 
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #c82333; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Student</h1>
        
        <form action="<?=site_url('student/update/' . $student['id']);?>" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Student ID:</label>
                <input type="text" id="id" name="id" class="form-control" required value="<?=$student['id'];?>" readonly>
            </div>
            
            <div class="mb-3">
                <label for="jmc_lastname" class="form-label">Last Name:</label>
                <input type="text" id="jmc_lastname" name="jmc_lastname" class="form-control" required value="<?=$student['jmc_lastname'];?>">
            </div>
            
            <div class="mb-3">
                <label for="jmc_first_name" class="form-label">First Name:</label>
                <input type="text" id="jmc_first_name" name="jmc_first_name" class="form-control" required value="<?=$student['jmc_first_name'];?>">
            </div>

            <div class="mb-3">
                <label for="jmc_email" class="form-label">Email:</label>
                <input type="email" id="jmc_email" name="jmc_email" class="form-control" required value="<?=$student['jmc_email'];?>">
            </div>

            <div class="mb-3">
                <label for="jmc_gender" class="form-label">Gender:</label>
                <input type="text" id="jmc_gender" name="jmc_gender" class="form-control" required value="<?=$student['jmc_gender'];?>">
            </div>

            <div class="mb-3">
                <label for="jmc_address" class="form-label">Address:</label>
                <input type="text" id="jmc_address" name="jmc_address" class="form-control" required value="<?=$student['jmc_address'];?>">
            </div>

            <div class="button-container">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= site_url('student/display'); ?>" class="back-btn">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
