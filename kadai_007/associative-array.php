<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎 課題007</title>
 </head>
 
 <body>
     <p>
         <?php
         
         $ass_array = ['name' => 'onion', 'price' => 200, 'weight' => 160];

         print_r ('Array ( [name] => '.$ass_array['name'].' [price] => '.$ass_array['price'].' [weight] => '.$ass_array['weight'].' )');
         ?>
     </p>
 </body>
 
 </html>