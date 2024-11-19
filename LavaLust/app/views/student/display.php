<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .btn-action {
            margin-bottom: 2px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Student List</h1>

    <form method="GET" action="<?= site_url('student/search'); ?>" class="input-group mb-3">
        <input type="text" name="query" class="form-control" placeholder="Search by ID or Last Name" aria-label="Search" required>
        <button class="btn btn-outline-secondary" type="submit">
            <i class="bi bi-search"></i>
        </button>
    </form>

    <div class="mb-3">
        <a href="<?= site_url('student/add'); ?>" class="btn btn-success">
            <i class="bi bi-plus"></i> Add Student
        </a>
        
        <?php if (isset($is_search) && $is_search): ?>
            <a href="<?= site_url('student/display'); ?>" class="btn btn-secondary">Back to List</a>
        <?php endif; ?>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($stud)): ?>
                <?php foreach ($stud as $p): ?>
                <tr>
                    <td><?= htmlspecialchars($p['id']); ?></td>
                    <td><?= htmlspecialchars($p['jmc_lastname']); ?></td>
                    <td><?= htmlspecialchars($p['jmc_first_name']); ?></td>
                    <td><?= htmlspecialchars($p['jmc_email']); ?></td>
                    <td><?= htmlspecialchars($p['jmc_gender']); ?></td>
                    <td><?= htmlspecialchars($p['jmc_address']); ?></td>
                    <td><?= htmlspecialchars($p['created_at']); ?></td>
                    <td><?= htmlspecialchars($p['updated_at']); ?></td>
                    <td>
                        <a href="<?= site_url('student/update/'.$p['id']); ?>" class="btn btn-primary btn-action w-100 me-1">
                            <i class="bi bi-pencil"></i> Update
                        </a>
                        <a href="<?= site_url('student/delete/'.$p['id']); ?>" class="btn btn-danger btn-action w-100" onclick="return confirm('Are you sure you want to delete this student?');">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9" class="text-center">No students found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <div class="d-flex justify-content-center">
            <ul class="pagination">
                <?php if ($current_page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= site_url('student/display/'.($current_page - 1)); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= ($i == $current_page) ? 'active' : ''; ?>">
                        <a class="page-link" href="<?= site_url('student/display/'.$i); ?>"><?= $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($current_page < $total_pages): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= site_url('student/display/'.($current_page + 1)); ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

</div>
</body>
</html>
