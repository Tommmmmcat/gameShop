

<html>
    <?php include '../view/header.php'; ?>
    <body>
        <!---Navigation --->
        <?php include '../view/navber.php'; ?>
        <?php
        require '../model/database.php';
        require '../model/game_db.php';
        $games = select_all_games();
        ?>

        <script>
            function showMore() {
                var div = document.getElementById("item_div");
                div.style.display = 'block';
            }
        </script>
        <input type="hidden" name="action" value="add_order"/>
        <label>PRODUCTS:</label><br>
        <table style="margin-left: 20px;">
            <form action="../controller/updata.php" method="post" id='submitform'>
                <tr>
                    <td>
                        <select name="selected_items" onchange="showMore()" id="item_select" required="required" >
                            <option>Select game</option>
                            <?php
                            foreach ($games as $game) {
                                $game_name = $game['game_name'];
                                $game_id = $game['game_id'];
                                //$game_detail = array($game['gane_id'], $game['game_name'], $game['game_price'], $game['qty']);
                                ?>
                                <option value='<?php echo $game_id; ?>' ><?php echo $game_name ?></option>

                            <?php } ?>
                        </select>

                    </td>
                    <td class="td_lang">
                        <div style="display: none" id="item_div">
                            <lable>QUANTITY:</lable><input name='quantity'type="text"/>
                            <input type="submit" value="ADD TO ORDER">
                        </div>
                    </td>
                </tr>

        </table>