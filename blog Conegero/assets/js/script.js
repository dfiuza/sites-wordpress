window.morePostsLoading = false;

function loadMorePosts() {
	if(window.morePostsLoading == false) {

		window.morePostsLoading = true;

		var offset = jQuery("article.type-post").length;

		jQuery.ajax({
			type:'POST',
			url:ajaxUrl,
			data:{action:'loadMorePosts', offset:offset},
			success:function(html){
				jQuery('.postscontent').append(html);

				window.morePostsLoading = false;
			}
		});

	}
}

jQuery(function(){

	jQuery(".loadmoreButton").on('click', loadMorePosts);

});