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


<!-- TABBED PANES -->

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Tabs</h3>
        <!-- tabs -->
        <div class="tabbable">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab">One</a></li>
            <li><a href="#two" data-toggle="tab">Two</a></li>
            <li><a href="#twee" data-toggle="tab">Twee</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="one">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
            <div class="tab-pane" id="two">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</div>
            <div class="tab-pane" id="twee">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae.</div>
           </div>
        </div>
        <!-- /tabs -->

    </div>
    <div class="col-md-6"><h3>Tabs -below</h3>
    
          	
      <!-- tabs bottom -->
      <div class="tabbable tabs-below">
        <div class="tab-content">
         <div class="tab-pane active" id="one_">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
         <div class="tab-pane" id="two_">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane" id="twee_">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
        </div>
        <ul class="nav nav-tabs">
          <li><a href="#one_" data-toggle="tab">One</a></li>
          <li><a href="#two_" data-toggle="tab">Two</a></li>
          <li><a href="#twee_" data-toggle="tab">Twee</a></li>
        </ul>
      </div>
      <!-- /tabs -->
      
    
    </div>
  </div><!-- /row -->
  <div class="row">
    <div class="col-md-6"><h3>Tabs -left</h3>
          	
      <!-- tabs left -->
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li><a href="#a" data-toggle="tab">One</a></li>
          <li class="active"><a href="#b" data-toggle="tab">Two</a></li>
          <li><a href="#c" data-toggle="tab">Twee</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
         <div class="tab-pane" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane" id="c">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
        </div>
      </div>
      <!-- /tabs -->
      
    </div>
  </row>
    
     <div class="col-md-6"><h3>Tabs -right</h3>
          	
      <!-- tabs right -->
      <div class="tabbable tabs-right">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#1" data-toggle="tab">One</a></li>
          <li><a href="#2" data-toggle="tab">Two</a></li>
          <li><a href="#3" data-toggle="tab">Twee</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="1">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
         <div class="tab-pane" id="2">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane" id="3">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
        </div>
      </div>
      <!-- /tabs -->
      
    </div>
    
  </div><!-- /row -->
</div>
  
  
  

<hr>

