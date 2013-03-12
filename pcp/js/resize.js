jQuery(document).ready(function($) {
	// masonry resizing
	$(function(){
		$('#tumblelog').imagesLoaded( function(){
			$('#tumblelog').masonry({
				itemSelector: '.box',
				isFitWidth: true, 
				columnWidth: function( containerWidth ) {
				    return containerWidth / 2;
				}
			});
		});
	});

	$('#tumblelog').imagesLoaded(function() {
		$('img.attachment-post-thumbnail').each(function() {
			var originalDimensions = getOriginalDimensionsOfImg(this);
			var tw = $(this).parents("div").width();
			var th = $(this).parents("div").height();
			var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
			$(this).css("width",result.width);
			$(this).css("height",result.height);
			$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop);
		});
	});
});