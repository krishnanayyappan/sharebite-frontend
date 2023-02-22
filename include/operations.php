<?php function createSectionCard(array $row) { ?>
    <div class="col-4">
        <tr class="card">
                <td onclick="getItemsforSection(this.value)"><?= $row["name"] ?></td>
        </tr>
    </div>
    <?php } ?>

    <?php function createItemCard(array $row) { ?>
    <div class="col-4">
        <tr class="card" onclick="getOptionsforItem(this.value)">
                <td><?= $row["name"] ?></td>
        </tr>
    </div>
    <?php } ?>