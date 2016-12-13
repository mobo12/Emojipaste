<?php 
require_once('includes/wrapper/header.php');

$emoji = New Read();

 ?>


<div class="hero">
         <div class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <h2>Copy & Paste Emoji</h2>
            <p>
               To use on facebook, twitter, skype and more!
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

<section id="people">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>People & Faces Emoji</h2>
               <p>Various face & people related emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('people');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>



</section>


<section id="nature" class="section-c">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>Animals & Nature Emoji</h2>
               <p>Various animal & nature related emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('nature');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>



</section>


<section id="food">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>Food & Drink Emoji</h2>
               <p>Various food & drink related emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('food');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>



</section>


<section id="sport" class="section-c">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>Activity & Sport Emoji</h2>
               <p>Various activity & sport related emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('activity');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>



</section>



<section id="travel">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>Travel & Places Emoji</h2>
               <p>Various travel & place related emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('travel');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>



</section>






<section id="objects" class="section-c">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>Objects & Media Emoji</h2>
               <p>Various media related emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('objects');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>

</section>

<section id="symbols">
<div class="container">
<div class="feature-head mobile-hide">
               <h2>Symbols Emoji</h2>
               <p>Various symbol emoji</p>
            </div>
<div class="emoji-content">
<?php 

$items = $emoji->emoji_cat('symbols');

foreach($items as $item) {
echo '<a class="copy" data-clipboard-text="&#x' . $item['unicode'] . '"><span class="emoji"><img src="assets/img/emoji/' . $item['unicode'] . '.png" width="70px" alt="' . $item['name'] . '"></span></a>';

} ?>
</div>
</div>



</section>

<?php
require_once('includes/wrapper/footer.php');
?>