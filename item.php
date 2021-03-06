<?php

$jobs = array("","WAR","MNK","WHM","BLM","RDM","THF","PLD","DRK","BST","BRD","RNG","SAM","NIN","DRG","SMN","BLU","COR","PUP","DNC","SCH");

$clock = true;
require("include/html.inc");

if (isset($_GET['id'])) {
  if (isset($_GET['stack']))
    htmlHeader(trim($_GET['id'], "/"), $_GET['stack']);
  else
    htmlHeader(trim($_GET['id'], "/"));
  htmlDropDown(1);

  echo <<<EOF
    </div>
    <div id="content">
EOF;

  //
  // Character Stats
  //
  echo <<<EOF
    <div class="topline">
    <table class="tbl tbl-item">
      <thead><tr class="tbl-head">
        <th colspan="2"><i class="fa fa-tag" aria-hidden="true"></i> Item</th>
      </tr></thead>
      <tbody><tr>
        <td colspan="2"></td>
      </tr><tr>
        <td class="item-icon"><img src="images/large-icons/18270.png" class="i_mainicon"></td>
        <td class="item">
          <span class="i_stack"></span><span class="i_raex"></span><div class="i_item">Name</div><div class="i_stats">&lt;stats&gt;</div><div class="i_jobs">&lt;jobs&gt;</div>
        </td>
      </tr><tr>
        <td colspan="2" style="height:1px"></td>
      </tr></tbody>
    </table>
EOF;

  //
  // Item Stats
  //
  echo <<<EOF
  <table class="tbl tbl-stats tbl-hover">
      <thead><tr class="tbl-head">
        <th><i class="fa fa-line-chart" aria-hidden="true"></i> Stats</th>
      </tr></thead>
      <tbody><tr>
        <td class="center"><span class="item-ahcat"></span></td>
      </tr><tr>
        <td class="center">In Stock: &nbsp;<span class="item-stock"></span></td>
      </tr><tr>
        <td class="center">Price: &nbsp;<span style="color:rgba(180,180,180,1);" class="item-currprice"></span></td>
      </tr><tr>
        <td class="center item-bgwiki"></td>
      </tr></tbody>
    </table>
EOF;

  //
  // Bazaars
  //
  echo <<<EOF
    <div class="bazaar-hide">
      <table class="tbl tbl-bazaar tbl-hover">
        <thead><tr class="tbl-head">
          <th colspan="6"><i class="fa fa-inbox" aria-hidden="true"></i> Bazaars<span id="bazaar_list"></span></th>
        </tr>
        <tr class="tbl-subhead">
          <td class="left">Seller</td>
          <td class="center">Price</td>
          <td class="center">AH</td>
        </tr></thead>
        <tbody id="bazaars">
        </tbody>
      </table>
    </div>
    </div>
    <br/>
EOF;

  //
  // Crafting Recipe
  //
  echo <<<EOF
  <div class="recipe-hide">
    <table class="tbl tbl-recipes">
      <thead><tr class="tbl-head">
        <td id="recipecat" colspan="4"><i class="fa fa-diamond" aria-hidden="true"></i> Crafting Recipes</td>
      </tr>
      <tr class="tbl-subhead">
        <th class="center">Skills <i class="fa fa-unsorted" aria-hidden="true"></i></th>
        <th class="center">Ingredients <i class="fa fa-unsorted" aria-hidden="true"></i></th>
        <th class="center">Results <i class="fa fa-unsorted" aria-hidden="true"></i></th>
      </tr></thead>
      <tbody id="recipes">
      </tbody>
    </table>
    <br/><br/>
  </div>
EOF;

  //
  // Auction House
  //
  echo <<<EOF
      <table class="tbl tbl-ah tbl-hover">
        <thead><tr class="tbl-head">
          <th colspan="6"><i class="fa fa-balance-scale" aria-hidden="true"></i> Price History<span id="price_history"></span></th>
        </tr>
        <tr class="tbl-subhead">
          <td class="ah-date">Date</td>
          <td class="ah-who">Seller</td>
          <td class="ah-who">Buyer</td>
          <td class="ah-price">Price</td>
        </tr></thead>
        <tbody id="auctions">
        </tbody>
      </table>
EOF;

  // Footer
  echo "      <div id=\"toTop\"><i class=\"fa fa-caret-square-o-up\" aria-hidden=\"true\"></i></div>";
  echo "    </div>";
  htmlFooter("item");
} else {
  header('Location: https://ffxi.kyau.net:4444/');
}

?>