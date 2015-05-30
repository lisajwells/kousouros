<?php  
	$cat_of_post = get_the_category( );
	print_r($cat_of_post);

gets this:
Array ( [0] => stdClass Object ( [term_id] => 79 [name] => Newsday [slug] => newsday [term_group] => 0 [term_taxonomy_id] => 79 [taxonomy] => category [description] => [parent] => 75 [count] => 5 [object_id] => 1557 [filter] => raw [cat_ID] => 79 [category_count] => 5 [category_description] => [cat_name] => Newsday [category_nicename] => newsday [category_parent] => 75 ) [1] => stdClass Object ( [term_id] => 73 [name] => Press [slug] => press [term_group] => 0 [term_taxonomy_id] => 73 [taxonomy] => category [description] => [parent] => 0 [count] => 28 [object_id] => 1557 [filter] => raw [cat_ID] => 73 [category_count] => 28 [category_description] => [cat_name] => Press [category_nicename] => press [category_parent] => 0 ) [2] => stdClass Object ( [term_id] => 75 [name] => Print [slug] => print [term_group] => 0 [term_taxonomy_id] => 75 [taxonomy] => category [description] => [parent] => 73 [count] => 13 [object_id] => 1557 [filter] => raw [cat_ID] => 75 [category_count] => 13 [category_description] => [cat_name] => Print [category_nicename] => print [category_parent] => 73 ) )







?>