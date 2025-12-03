<?php
declare(strict_types=1);
?>
<!-- Kenth Andrei M. Patio -->
<!DOCTYPE html>
<html>
    <head>
         <title>F1 Store by Kenth Patio</title>
         <link rel="stylesheet" href="style.css">
        </head>
        <body>
            
       
         <div class="f1-stripes"></div>
         <img src="f1logo.png" class="page-logo">
         <?php include "header.php"; ?>
         
         <?php
         // Product list: each item has price + stock
         $merch = [
            "Team Jersey"      => ["price" => 1800, "stock" => 14],
            "Team Cap"         => ["price" => 750,  "stock" => 9],
            "Sticker Pack"     => ["price" => 150,  "stock" => 32],
            "Keychain"         => ["price" => 120,  "stock" => 27],
            "Hoodie"           => ["price" => 1200, "stock" => 6],
            "Water Bottle"     => ["price" => 350,  "stock" => 19],
            "Lanyard"          => ["price" => 100,  "stock" => 8]
        ];
        
        // Tax percentage
        $taxRate = 12;
        
        // Returns "Yes" if stock is low
        function get_reorder_message(int $stock): string {

            return ($stock < 10) ? "Yes" : "No";
        }
        // Total stock value

        function get_total_value(float $price, int $qty): float {
             return $price * $qty;
            }
            
            // Total tax for all stock
            
             function get_tax_due(float $price, int $qty, int $tax = 0): float {
                return ($price * $qty) * ($tax / 100);
            }
            ?>
            
            <h1 class="title">F1 Store By Kenth Patio</h1>
            <div class="table-container">
                <table class="stock-table">
                    <tr>
                         <th>Product</th>
                         <th>Stock</th>
                         <th>Re-order?</th>
                         <th>Total Value (₱)</th>
                         <th>Tax Due (₱)</th>
                        </tr>
                        <?php 
                        
                        // Loop through each product
                        
                        foreach ($merch as $name => $data) { ?>
                         <tr>
                            <td><?= $name ?></td>
                            <td><?= $data["stock"] ?></td>
                            <td><?= get_reorder_message($data["stock"]) ?></td>
                            <td>₱<?= number_format(get_total_value($data["price"], $data["stock"]), 2) ?></td>
                            <td>₱<?= number_format(get_tax_due($data["price"], $data["stock"], $taxRate), 2) ?></td>
                         </tr>

                        <?php } ?>
                    </table>
                </div>
                <?php include "footer.php"; ?>
            </body>
            </html>
