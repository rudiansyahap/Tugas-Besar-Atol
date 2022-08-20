<?php
  include "conf/info.php";
  $title="Popular Movies";
  include_once "header.php";
?>

<div class="container"> 
 <h1>~ Popular Movies ~</h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_popular.php";
        foreach($popular->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></li>";
        }
      ?>
    </ul>
</div>

<?php
  include_once "footer.php";
?>