<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>XIN CHÀO CÁC BẠN</h1>
    <table border="">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listProduct as $value):?>
                <tr>
                    <td>{{ $value['id']}}</td>
                    <td>{{ $value['name']}}</td>
                </tr>
                <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>