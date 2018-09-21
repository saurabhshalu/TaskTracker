function getUTCoffset()
{
	var x = new Date();
	var UTCseconds = (x.getTimezoneOffset());
	document.cookie = "user-time="+(0-UTCseconds*60);
}

function build() {
	getUTCoffset();
	$('#log').load('log.php?mode=build');
	tally();
}

function tally() {
	$('#tally').load('log.php?mode=tally');
}

$(document).ready(function(){

	build();

	setInterval(function(){
		build();
	}, 30000);

	$('#form-new').submit(function(event){

		event.preventDefault();

		var form = $(this);
		var data = form.serialize();

		$.ajax({

			url: 'log.php?mode=new',
			data: data,
			success: function() {
				build();
			}

		});
	});


	$('#log').on('click','.btn-stop',function(){

		var id = $(this).data('id');

		$.ajax({

			url: 'log.php?mode=stop&id='+id,
			success: function() {
				build();
			}

		});

	});

	$('#log').on('click','.btn-remove',function(){

		var id = $(this).data('id');
		
		$.ajax({

			url: 'log.php?mode=remove&id='+id,
			success: function() {
				build();
			}

		});

	});
});