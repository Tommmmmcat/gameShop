 <html>
     <?php include '../view/header.php'; ?>
    <body>
        <!---Navigation --->
        <?php include '../view/navber.php'; ?>
<?php
    require '../model/database.php';
    require '../model/game_db.php';
    $PageNum = isset($_GET['pagenum']) ? $_GET['pagenum'] : 1;
    $allItems = select_items($PageNum);
    $count = count_itemNum();
    ?>
<script type="text/javascript" src="../jscript/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jscript/jqPaginator.js"></script>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
 <h1>ALL PRODUCTS</h1>
    <form method="post" action="../view/order.php">
        <table>
            <?php foreach ($allItems as $item) : ?>
            <thead>
            <th style="width:150px;margin-left: 10px;margin-right: 10px;">GAME ID</th>
            <th style="width:150px;margin-left: 10px;margin-right: 50px;">GAME NAME</th>
            <th style="width:150px;margin-left: 10px;margin-right: 10px;">PRICE</th>
            <th style="width:150px;margin-left: 10px;margin-right: 10px;">QUANTITY</th>
            <th style="width:150px;margin-left: 10px;margin-right: 10px;"></th>
            </thead>
                <tr>
                    <td>
                        <?php echo $item['game_id'] ?>
                    </td>
                    <td>
                        <?php echo $item['game_name'] ?>
                    </td>
                    <td>
                        <?php echo $item['game_price'] ?>
                    </td>
                    <td>
                        <?php echo $item['qty'] ?>
                    </td>
                <input type="hidden"name='itemId' value='<?php echo $item['game_id'] ?>'/>
                </tr>
                
            <?php endforeach; ?>
        </table>
          <p id="p2"></p>
        <ul class="pagination" id="pagination2"></ul>

        <script type="text/javascript">
            $.jqPaginator('#pagination2', {
                totalPages: <?php echo $count[0]['COUNT(1)'] ?>,
                //visiblePages: 10,
                visiblePages:10 ,
                currentPage: <?php echo $PageNum; ?>,
                prev: '<li class="prev"><a href="javascript:;">Previous</a></li>',
                next: '<li class="next"><a href="javascript:;">Next</a></li>',
                page: '<li class="page"><a href="javascript:;">{{page}}</a></li>',
                onPageChange: function (num, type) {
                    //                $('#p2').text(type + '：' + num);
                    if (type == "change") {
                        window.location.href = '../view/gamelist.php?pagenum=' + num;
                    }
                }
            });

        </script>
    </form>
    <li class="next"><a href="../view/printexcle.php">PRINT OUT EXCLE</a></li>
</main> 
 </html>