<?php include('include/config.php'); ?>
<?php include('include/operations.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/menu.css" rel="stylesheet" />
    <title>Sharebite</title>
</head>

<body>
    <div class="column">
        <table>
            <tr>
                <th>
                    Menu Sections
                    <button id="addMenu">Add</button>
                </th>
            </tr>
            <?php 
            $result = mysqli_query($conn, "select name from sections");

            $sections = array();
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    createSectionCard($row);
                }
            }
           ?>
        </table>
    </div>

    <div class="column">
        <table>
            <tr>
                <th>
                    Items
                    <button id="addItem">Add</button>
                </th>
            </tr>
            <?php
            function getItemsforSection($sectionValue) {
                error_log("The value of sectionValue is: " . $sectionValue);
                echo "The button value is: " . $sectionValue;
                include('include/config.php');
                $result = mysqli_query($conn, "select name from items where section_id in (select id from sections where name = 'Lunch Specials')");

                $items = array();
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        createItemCard($row);
                    }
                } else {
                    echo "empty data";
                }
            }
           ?>
        </table>
    </div>
    <div class="column">
        <table>
            <tr>
                <th>
                    Item Options
                    <button id="addOption">Add</button>
                </th>
            </tr>
            <?php 
            $result = mysqli_query($conn, "select name from sections");

            $sections = array();
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $sections[] = $row["name"];
                }
            }

            foreach ($sections as $section) {
                echo "<tr><td>$section</td></tr>";
            }
           ?>
        </table>
    </div>
    <div class="column">
        <table>
            <tr>
                <th>
                    Option Choices
                    <button id="addChoice">Add</button>
                </th>
            </tr>
            <?php 
            $result = mysqli_query($conn, "select name from sections");

            $sections = array();
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $sections[] = $row["name"];
                }
            }

            foreach ($sections as $section) {
                echo "<tr><td>$section</td></tr>";
            }
           ?>
        </table>
    </div>
</body>

</html>