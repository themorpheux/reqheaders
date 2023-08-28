<?php
$requestHeaders = apache_request_headers();
?>
<table>
        <thead>
                <tr class="header-row">
                        <th>Header</th>
                        <th>Value</th>
                </tr>
        </thead>
        <tbody>
                <?php foreach ($requestHeaders as $header => $value) { ?>
                        <tr>
                                <td><?= $header ?></td>
                                <td><?= $value ?></td>
                        </tr>
                <?php } ?>
        </tbody>
</table>