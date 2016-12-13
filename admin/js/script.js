$(function() {
    $('#sortinglist').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: '.dragfromhere',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
            $.ajax({
                url: 'sort.php',
                type: 'POST',
                data: {list_order:list_sortable},
                success: function(data) {
                }
            });
        }
    });
	
	//Laxman
	
	$('table tr').click(function(){
		var rowclass = $('.addrow'); // table row CLASSNAME
		if(rowclass == 'addrow')
		{
			alert(rowclass);
		}		
	});

	$(".sidebar-menu li a").click(function(){
		//xdebug_disable();
        //e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href;
		//url='#';
        //$(".main").load(url);
		//alert(url);
		$('.addrow').show('fast');
		
		
		$.ajax({
			type:'POST',
			data:{'addrow':1},
			url: 'update_truth_dare_list.php',
			success:function(response)
			{
				$('.addrow').closest('tr').find('td:first').text(response);
				console.log(response);
				
			},
			error: function()
			{}
		});
    });	
	
	
		$("td[contenteditable=true]").unbind().keyup(function(){
		
		var current_element = $(this);
		
		if($(this).attr('contenteditable') == 'true')
		{
			var trid = $(this).closest('tr').attr('id'); // table row ID 
			
			var dt = $(this).text();
			//alert(trid + dt + rowclass);
			
			$.ajax({
				type: 'POST',
				data: {'truth_or_dare_id':trid,'changetext':dt},
				url: 'update_truth_dare_list.php',
				success: function(response)
				{	
					test = current_element.find('.changetext').text(response);
					//console.log(response);
				},
				error: function()
				{}
			});
			
		}
		
	});
		$('li').unbind().on('click', function(){
			
			var trid = $(this).closest('tr').attr('id'); // table row ID 
			var val = $(this).text().toLowerCase();
			var current_element = $(this);
			$.ajax({
				type: 'POST',
				data: {'truth_or_dare_id':trid,'text':val},
				url: 'update_truth_dare_list.php',
				success: function(response)
				{	
					test = current_element.parent().prev().text(response);	
				},
				error: function()
				{}
			});
        });
		
	
		
		
	// Laxman
});