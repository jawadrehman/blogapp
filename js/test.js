var list = new Array();
$(document).ready(function(){
	
	$value = false;
	$('#submit').click(function(){
		$.post('/yii/blogapp/index.php/helloWorld/search', {'city':$('#city').val(),'contentinput':$('#contentinput').val()}, function(data){
			console.log('works');
			$('#result').html(data);
			//$('#content1').html(data);
		});

	});
	// alert('awesome');
	var alCities = ['Baltimore', 'Boston', 'New York', 'Tampa Bay', 'Toronto', 'Chicago', 'Cleveland', 'Detroit', 'Kansas City', 'Minnesota', 'Los Angeles', 'Oakland', 'Seattle', 'Texas'].sort();
	$('#city').typeahead({
		source : alCities,
		items : 10
	});
	
	$('#city').keyup(function(eventobject){
		var keyCode = eventobject.keyCode;
		//alert(keyCode);
		if($('#city').val().length == 1){
			var text = $('#city').val();
			
			$.getJSON('/yii/blogapp/index.php/helloWorld/search?input='+text+'', function(data){
				var autocomplete = $('#city').typeahead();
				
				list = data.myarray;
				$('#content1').html(list.length);
				//autocomplete.data('typeahead').source = ['something', 'nothing'];
				autocomplete.data('typeahead').source = list;
				//alert(list[5]);
				//alert(data.myarray[1]);
			});
		}
		if(keyCode != 38 && keyCode != 40 && keyCode !=37 && keyCode != 39 && keyCode != 13){
			$('.typeahead.dropdown-menu').append('<li data-value = "Get More" class> <a href = "#">Get More</a></li>');
		}
		
		
			checkInput();
			//alert(present);
			
	
		
		
		
	});
	/**
	 * to get more results...
	 */
	$('.typeahead.dropdown-menu').click(function(){
		//alert($('#citty').val());
		checkInput();
		//var selectedData = $('#city').val();
		
	});
	$('#testing').click(function(){
		if($value==false){
			$value = true;
			$('#testing').text("bullshit");
			
			$.ajax({
				url: '/yii/blogapp/index.php/posts/updateAjax/2',
				success: function(data){
					$('#content1').html(data);
				}
			});
		}
		else{
			$value = false;
			$('#testing').text("awesome");
			$.ajax({
				url: '/yii/blogapp/index.php/posts/updateAjax/1',
				success: function(data){
					$('#content1').html(data);
				}
			});
		}
		alert($value);
		
		
		
	});

	
	

});

function checkInput(){
	//alert('something');
	var selected = $('#city').val();
	var present = false
	for(var i = 0; i<list.length; i++){
		if(list[i] == selected){
			present = true;
			break;
		}
			
	}
	
	
	if(selected == 'Get More'){
		
	}
	else if(present){
		$.get('/yii/blogapp/index.php/helloWorld/search', {'selected':$('#city').val()}, function(data){
			//alert('works');
			console.log('update textarea');
			$('#contentinput').text(data);
			//$('#content1').html(data);
		});
		
	}
	
	else{
		$('#contentinput').text('');
	}
	/*
	else{
		/*.
		$.ajax({
			url: '/yii/blogapp/index.php/helloWorld/search?selected='+selected+'',
			success: function(data){
				$('#content1').html(data);
			}
		});
		

		
		
	}
		*/
}

/*
$('#submit').click(function(){
	alert('works');
	$.post('/yii/blogapp/index.php/helloWorld/search',{'title_update':$('#city').val(), 'content':$('#contentinput').val()});
});
*/