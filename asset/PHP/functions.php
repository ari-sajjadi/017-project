<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);


$json_content = file_get_contents('asset/js/shoppingCard.json');
$site_data_arr = json_decode($json_content, true);

$shoppingCard = $site_data_arr["shoppingCard"]; 


function slidshow_items() {

  global $shoppingCard;

  foreach ($shoppingCard as $key => $value) {
    // $title = $value['title'];
    $img_link = $value["img_link"];
    $img_alt = $value["img_alt"];
    $spice_name = $value["spice_name"];
    $spice_price = $value["spice_price"];
    $price_ID = $value["price_ID"];
    // .= add every times
    $menu_item .= '<div class="card">
      <img class="shoping-images" src="'.$img_link.'" alt="'.$img_alt.'">
      <h1>'.$spice_name.'</h1>
      <p class="price">'.$spice_price.'</p><button ID='.$price_ID.'>Add to Cart</button>
    </div>'.PHP_EOL;
  }
  return $menu_item;
}




// show items ========================================================================================
// function show ($data = '') {
//   echo '<pre>';//'<br>' is also work but not like a pharagraf
//   print_r($data);
//   echo '</pre>';
// }
?>