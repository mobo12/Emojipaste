<?php 
$page_title = 'Searching';
require_once('includes/wrapper/header.php');

$string = '';

if($_POST['string'] != '') {
$string = htmlentities($_POST['string']);

} else {

header('Location: index.php');

}

$emoji = New Read();


 ?>
<div class="hero">
         <div>
            <h2><?php echo $string; ?> Emoji</h2>
            <p>
               You are currently searching for <?php echo $string; ?> emoji
            </p>
         </div>


<form class="form-inline" method="POST" action="search.php">
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control input-lg" id="search" placeholder="Search Emoji... eg: Heart" name="string">
    </div>
  </div>
  <button type="submit" class="btn searchbtn btn-lg btn-default btn-red">Search Emoji</button>
</form>
<div class="banner-ad">
<?php 
require_once('includes/wrapper/banner_ad.php');
 ?>
</div>

      </div>



<section id="#people">
<div class="container">

<div class="emoji-content">
<?php 

$items = $emoji->search_emoji($string);
if(!empty($items)) {
foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} } else {

echo '<center><h2>No emoji matched your search terms....</center></h2>';

}?>
</div>
</div>







<?php require_once('includes/wrapper/footer.php'); ?>