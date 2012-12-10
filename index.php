<?php

	/*
		Plugin Name: Simple Template Columns
		Plugin URI: http://www.jonathanlundstrom.me
		Description: A small plugin that allows theme developers to easily set up multi-column templates.
		Version: 1.0
		Author: Jonathan Lundström
		Author URI: http://www.jonathanlundstrom.me
		License: GPLv2 or later
	*/

	// Function for splitting content in to columns:
	function getColumn($column = 1, $content = false){
		
		// Set post ID:
		$postID = false;
		
		// Default:
		if (!$content){
			global $post;
			$postID = $post->ID;
			setup_postdata($post);
			$content = get_the_content('', false);
			wp_reset_postdata();
		}
		
		// Shift column index:
		$column = $column - 1;
		
		// Reset column index:
		if ($column < 0){ $column = 0; }
		
		// Replace post ID and reset spans to <!--more--> tags:
		if ($postID){ $content = str_replace('<span id="more-'.$postID.'"></span>', '<!--more-->', $content); }
		
		// Replace error tags:
		$content = preg_replace('(<[0-9A-za-z]*><!--more-->)', '<!--more-->', $content);
		$content = preg_replace('(<!--more--></[0-9A-za-z]*>)', '<!--more-->', $content);
		
		// Split content by more tags:
		$content = explode('<!--more-->', $content);
		
		// Return selected column:
		if ($column > count($content)){
			$string = '<strong>Processing error:</strong> The requested column ('.($column + 1).') does not exist...';
		} else {
			$string = apply_filters('the_content', $content[$column]);
		}
		
		// Return column:
		return $string;
		
	}
	
	// Function for splitting content in to columns:
	function countColumns($content = false){
		
		// Set post ID:
		$postID = false;
		
		// Default:
		if (!$content){
			global $post;
			$postID = $post->ID;
			setup_postdata($post);
			$content = get_the_content('', false);
			wp_reset_postdata();
		}
		
		// Find first more and then split:
		if ($postID){ $content = str_replace('<span id="more-'.$postID.'"></span>', '<!--more-->', $content); }
		$content = explode('<!--more-->', $content);
		
		// Return count:
		return count($content);
		
	}
	
?>