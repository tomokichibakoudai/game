<!DOCTYPE html>
<html>
<head>
<style type="text/css">
            .board {
    margin: 0 0px;
}

.row {
    display: table-cell;
    
    border: solid 1px black;
    width: 60px;
}

.column {
    width: 500px;
    display: table;
    table-layout: fixed;
    height: 60px;
}
        </style>
    <title>双六ボード</title>
</head>
<?php
// 1行目
echo '<div class="row">';
echo '<p class="cell" id="cell11">1</p>';
echo '<p class="cell" id="cell12">2</p>';
echo '<p class="cell" id="cell13">3</p>';
echo '<p class="cell" id="cell14">4</p>';
echo '<p class="cell" id="cell15">5</p>';
echo '</div>';

// 2行目
echo '<div class="row">';
echo '<p class="cell" id="cell21">10</p>';
echo '<p class="cell" id="cell22">9</p>';
echo '<p class="cell" id="cell23">8</p>';
echo '<p class="cell" id="cell24">7</p>';
echo '<p class="cell" id="cell25">6</p>';
echo '</div>';

// 3行目
echo '<div class="row">';
echo '<p class="cell" id="cell31">11</p>';
echo '<p class="cell" id="cell32">12</p>';
echo '<p class="cell" id="cell33">13</p>';
echo '<p class="cell" id="cell34">14</p>';
echo '<p class="cell" id="cell35">15</p>';
echo '</div>';

// 4行目
echo '<div class="row">';
echo '<p class="cell" id="cell41">20</p>';
echo '<p class="cell" id="cell42">19</p>';
echo '<p class="cell" id="cell43">18</p>';
echo '<p class="cell" id="cell44">17</p>';
echo '<p class="cell" id="cell45">16</p>';
echo '</div>';
?>
</body>
</html>