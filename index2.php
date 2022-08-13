<?php
$array = [
    [
        'item'=>'Зубочистки',
        'discription'=>'дерево',
        'price'=>'200',
        'currence'=>'RUB'
    ],
    [   'item' => 'мыло',
        'discription'=>'хоз',
        'price'=>'300',
        'currence'=>'EURO'
    ],

    [   'item'=>'монитор',
        'discription'=>'ЖК',
        'price'=>'2000',
        'currence'=>'DOL'
    ]
    ];
?>

<!doctype html>
<html lang="en">
<head>
    <><title>Document</title>
</head>
<body>
    <?php foreach($array as $item): ?>
        <table>
            <tr>   
                <?php foreach ($item as $key => $value): ?>
                    <th>
                        <?=$key?>
                    </th>
                <?php endforeach; ?>
            </tr>
            
            <tr>   
                <?php foreach ($item as $key => $value): ?>
                    <td>
                        <?=$value?>
                    </td>
                <?php endforeach; ?>
            </tr>
        </table>
    <?php endforeach; ?>
</body>
</html>
<?php