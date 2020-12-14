<?php
// 配列変数を利用して、繰り返し処理で商品リストを作ってみましょう。
$Product = [
    [
        'name' => 'ベスト',
        'price' => 6980,
        'explain' => '冬に最適、ベストなベストをあなたに！'
    ],
    [
        'name' => 'アロハシャツ',
        'price' => 25500,
        'explain' => '夏に快適、カラフルなシャツをあなたに！'
    ],
    [
        'name' => 'トートバッグ',
        'price' => 3400,
        'explain' => '買い物入れに、ぜひご活用ください！'
    ],
    [
        'name' => 'ジーンズ',
        'price' => 9800,
        'explain' => '年中履ける、伸縮抜群の素材を使っております！'
    ],
    [
        'name' => 'オリジナルTシャツ',
        'price' => 50000,
        'explain' => '最高級の素材をあなたへ！'
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<style type="text/css">
h1,.name{
    text-align:center;
}
.wrapper{
    width:780px;
    display:flex;
    flex-wrap: wrap;
    margin: 0 auto;
}
.box{
    margin:19px;
    width:220px;
    border:1px solid #d6d6d6;
}
.price,.explain{
    padding:0 5px;
}
</style>
</head>
<body>
    <h1>繰り返し処理演習 商品リスト</h1>
    <div class="wrapper">
    <!-- ここから、繰り返し処理で商品リストを表示してください -->
<div class="box">
    <?php
    foreach ($Product as $value) {
}
    ?>

    <p class="name"> <?php echo '商品名'?> </p>

        <p class="price"> <?php echo '￥料金' ?> </p>
        <p class="explain"> <?php echo '説明' ?></p>



    </div>

    <!-- ここまで -->
    </div>
</body>
