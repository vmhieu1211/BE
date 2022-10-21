<?php
$rooms = [
    [
        'id' => 1,
        'name' => 'To chuc'
    ],

    [
        'id' => 2,
        'name' => 'IT'
    ],
    [
        'id' => 3,
        'name' => 'Ke Toan'
    ]
];

$staff = [
    [
        'id' => 1,
        'name' => 'Teo',
        'age' => 21,
        'room_id' => 1,
        'money' => 1000,
    ],
    [
        'id' => 2,
        'name' => 'Ti',
        'age' => 21,
        'room_id' => 1,
        'money' => 800,

    ],
    [
        'id' => 3,
        'name' => 'Ty',
        'age' => 21,
        'room_id' => 2,
        'money' => 1500,

    ],
    [
        'id' => 4,
        'name' => 'Hoi',
        'age' => 21,
        'room_id' => 3,
        'money' => 2000

    ],
];
foreach ($staff as $key => $item){
    foreach ($rooms as $k => $value){
        //kiểm tra mã phòng của người nhận có bằng mã phòng của các phòng ban hay không?
    if($item['room_id'] == $value['id']){
        // biết được nhân viên nào thuộc phòng ban nào 
        //bổ sung tên phòng từ mảng rooms sang mảng staff
        $staff[$key]['name_room'] = $value['name'];
    }
}}
// echo "<pre>";
// print_r($staff);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
</head>
<body>
    <table width ="100%" border = "1" cellspacing ="0" cellpadding ="0">
        <thead>
            <tr>
                <th>Mã NV</th>
                <th>Họ tên</th>
                <th>Tuổi</th>
                <th>Phòng ban</th>
                <th>Tiền lương</th>


            </tr>
        </thead>
        <tbody>
            <?php $sumMoney = 0; ?>
            <?php foreach($staff as $key => $item):?>
                <?php $sumMoney += $item['money']; ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['age']; ?></td>
                    <td><?= $item['name_room']; ?></td>
                    <td><?= number_format($item['money']); ?></td>
                    


                    
                </tr>


            <?php endforeach; ?>
        </tbody>   
        <tfoot>
            <tr>
                <td colspan="4">Tổng tiền lương</td>
                <td><?= number_format($sumMoney) ; ?></td>
                

            </tr>
        </tfoot>
     </table>
</body>
</html>
