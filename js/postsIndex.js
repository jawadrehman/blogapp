var load_no = 0;
var linkShow = new Array();

$(document).ready(
		function() {
			$('#ajaxloader').hide();

			posts_empty = false;
			alreadyloading = true;
			loadPosts();

			alreadyloading = false;

			$(window).scroll(
					function() {
						if ($('body').height() <= ($(window).height() + $(
								window).scrollTop())) {
							if (alreadyloading == false && !posts_empty) {
								//alert('loading');
								alreadyloading = true;
								loadPosts();
								alreadyloading = false;
							}

						}
					});

		});

function loadPosts() {
	$('#ajaxloader').show();

	$.ajax({
		url : '/yii/blogapp/index.php/posts/list_posts/' + load_no,
		success : function(data) {

			
			
			$('#ajaxloader').hide(200);
			var millisecondsToWait = 800;
			setTimeout(function() {
				// Whatever you want to do after the wait

				$('#posts_list').append(data);
				var last_post_count = load_no * 4;
				//alert(last_post_count);
				for ($i = last_post_count; $i <= last_post_count + 4; $i++) {
					linkShow[$i] = false;
					$('#link'+$i).click(function(){
						//buttonClick();


						//alert($(this).attr('id'));
						var id = $(this).attr('id');
						var toRemove = 'link';
						var value = id.replace(toRemove, '');

						if (linkShow[value] == false) {
							// alert(linkShow[value]);
							linkShow[value] = true;
							$.ajax({
								url : '/yii/blogapp/index.php/posts/updateAjax/' + value,
								success : function(data) {
									// $('#' + value).html(data);
									$('#' + value).slideDown('slow', function() {
										$('#' + value).html(data);
									});
								}
							});
							$(this).text('Show Less');
						} else {
							// alert(linkShow[value]);
							linkShow[value] = false;
							var data = $.trim($('#' + value).text());
							var updated = data.substr(0, 2);
							// alert(updated);
							$('#' + value).text(updated);
							$(this).text('Show More');
						}


					
					});

				}
				load_no++;

			}, millisecondsToWait);
			
		}
	});

};
