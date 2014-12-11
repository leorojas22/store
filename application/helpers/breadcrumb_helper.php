<?php

	function format_breadcrumb($arrCrumbs) {
		
		$breadCrumb = array();
		$counter = 0;
		foreach($arrCrumbs as $crumb) {
			
			if(!isset($crumb['link']) || $crumb['link'] == "") {
				$breadCrumb[] = $crumb['title'];
				
			}
			else {
				$breadCrumb[] = "<a href='".$crumb['link']."'>".$crumb['title']."</a>";
			}
			
		}
		
		
		return implode(" > ", $breadCrumb);
	}

?>