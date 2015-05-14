Firm Overview DKK edit
<p class="intro-graph"><b>Located in midtown Manhattan,</b> the Law Office of James Kousouros handles all types of criminal prosecutions under state and federal laws. These cases include prosecutions for white-collar crimes such as complex securities violations, Medicaid, Medicare and healthcare fraud, pharmaceutical industry fraud, and tax fraud.  They also include charges for racketeering, homicide, narcotics violations, DWI, and simple assault, among many others. (See, Notable Cases).</p>  
<h3>All Stages of Representation</h3>
<p>As a full service criminal practice, we represent clients in all stages of the criminal process:</p> 
<ul>
<li>pre-arrest investigatory stage</li>
<li>grand jury proceedings</li>
<li>indictment</li>
<li>plea negotiations</li> 
<li>trial</li> 
<li>all levels of the appellate process—including post conviction litigation and appeals.</li>
</ul> 
<p>We also represent clients before various regulatory review boards.</p>
<h3>National and International Presence</h3>
<p>Mr. Kousouros appears in state and federal courts throughout the country, as well as in international courts.</p>
<h3>A Commitment to Every Client</h3>
<p>James Kousouros’ clients have come from every walk of life, and their cases have been of both high notoriety and of little notice. In either case, Mr. Kousouros has demonstrated his strong commitment to providing an equally vigorous, aggressive and effective defense for each and every one of his clients.</p>
<h3>Frequent Client Contact</h3> 
<p>Mr. Kousouros not only believes in frequent client contact, he insists on it. This insistence comes from his firm belief that a client’s participation in his or her own defense is crucial —not only to ensure that every case is properly and thoroughly investigated, but to ensure that his client fully understands and considers all of the options available. For Mr. Kousouros, the benefits of full client participation are essential to his firm’s goal of achieving the best resolution possible.</p>







<!-- LIST BY SUBCATEGORY -->
<div id="job-listings">
<?php $cat = 'Jobs';
$catID = get_cat_ID($cat);
$subcats = get_categories('child_of=' . $catID);
    foreach($subcats as $subcat) {
    echo '<h3>Jobs Opening in ' . $subcat->cat_name . '</h3>';
    echo '<ul>';
    $subcat_posts = get_posts('cat=' . $subcat->cat_ID);
    foreach($subcat_posts as $subcat_post) {
        $postID = $subcat_post->ID;
  echo '<li>';
  echo '<a href="' . get_permalink($postID) . '">';
  echo get_the_title($postID);
  echo '</a></li>';
  }
  echo '</ul>';
  } ?>
 </div>

