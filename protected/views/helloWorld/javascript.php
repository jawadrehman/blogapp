<?php

$script = "$('#button').click(function(){
	alert('this works atleast');
	$.ajax({
		url:'',
		success: function(data){
			
			$('#content1').html(data);
			
		}
	}).error(function(){
		alert('boom');
	}).complete(function(){
		
	}).success(function(){
		
	});
})";

Yii::app()->clientScript->registerScript('helloscript',$script,CClientScript::POS_READY);


echo CHtml::ajaxLink(
  "Link Text",
  Yii::app()->createUrl( 'helloWorld/_ajaxConten' ),
  array( // ajaxOptions
    
    'success' => "function( data )
                  {
                    // handle return data
                    alert( works );
                  }",
    
  ),
  
  array( //htmlOptions
    'href' => Yii::app()->createUrl( 'myController/ajaxRequest' ),
    'class' => 'btn',
  )
);

?>