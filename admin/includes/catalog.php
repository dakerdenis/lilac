<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses', 'Profit'],
            ['2017', 1000, 400, 200],
            ['2018', 1170, 460, 250],
            ['2019', 660, 1120, 300],
            ['2020', 1030, 540, 350],
            ['2021', 1030, 540, 350]
        ]);

        var options = {
            chart: {
                title: 'Company Performance',
                subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>
<?php include "../../vendor/db.php" ?>
<?php
    $query = "SELECT * FROM catalog";
    $result = mysqli_query($connection, $query);
    $num_of_products = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $table__id = $row['id'];
        $table_title = $row['title'];
        $table_price = $row['price'];
        $table_description = $row['description'];
        $table_size = $row['size'];
        $table_color = $row['color'];
        $table_image = $row['image'];
        $table__category_id = $row['category_id'];

        $num_of_products++;
    }
?>
<!---
Тарелки: 1
Игрушки: 2
кружки: 3
вазы: 4

--->
<div class="element__wrapper">
    <div class="element__name">Полный каталог продукции на сайте </div>
    <div class="element__content_wrapper">
        <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
        <div class="catalog__info">
                Общее количество товара: <?php echo $num_of_products?>
        </div>
    </div>

</div>