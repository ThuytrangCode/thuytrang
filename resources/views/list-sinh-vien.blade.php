<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
</head>
<h2>Thông tin giới thiệu về bản thân sinh viên </h2>
<body>
<table border="">
        <thead>
            <tr>
                <th>mã sinh viên</th>
                <th>tên sinh viên</th>
                <th>địa chỉ</th>
                <th>lớp học</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thongtinsv as $value):?>
                <tr>
                    <td>{{ $value['ma']}}</td>
                    <td>{{ $value['ten']}}</td>
                    <td>{{ $value['diachi']}}</td>
                    <td>{{ $value['class']}}</td>
                </tr>
                <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>
