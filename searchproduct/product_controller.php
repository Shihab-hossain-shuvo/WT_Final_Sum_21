<?php
function searchProduct($key){
	 $query = "select id,name from products where name like '%$key%'";
	 
	 $rs = get($query);
	 return $rs;