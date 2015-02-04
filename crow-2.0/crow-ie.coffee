# Fly functionality fix for IE8, if you do not use fly, ignore this file
# Please do not include this js for other browser than IE8

jQuery(document).ready ->
	jQuery.each jQuery('.crow.fly'), ->
		obj = $(this)
		children = obj.children('div')
		amount = children.length
		percent = 100/amount
		jQuery.each children, ->
		  child = $(this)
		  child.css { width : percent+'%' }