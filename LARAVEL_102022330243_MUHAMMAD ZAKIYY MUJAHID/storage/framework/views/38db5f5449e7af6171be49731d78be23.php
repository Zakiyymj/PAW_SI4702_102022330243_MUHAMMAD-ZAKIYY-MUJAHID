<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Brand</th>
                <th>Series</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($car->brand); ?></td>
                    <td><?php echo e($car->series); ?></td>
                    <td><?php echo e($car->year); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\zakiy\projectzakiyy\resources\views/car/index.blade.php ENDPATH**/ ?>