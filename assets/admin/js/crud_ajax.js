function listArticle(){
	$.ajax({
		type  : 'ajax',
		url   : 'art/show',
		async : false,
		dataType : 'json',
		success : function(data){
			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].id_article+'">'+
						'<td>'+data[i].judul_article+'</td>'+
						'<td>'+data[i].desk_article+'</td>'+
						'<td style="text-align:right;">'+
							'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id_article="'+data[i].id_article+'" data-judul_article="'+data[i].judul_article+'" data-desk_article="'+data[i].desk_article+'">Edit</a>'+' '+
							'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id_article="'+data[i].id_article+'">Delete</a>'+
						'</td>'+
						'</tr>';
			}
			$('#listRecords').html(html);					
		}
	});
}

$('#saveArtForm').submit('click',function(){
		var artJudul = $('#judul_article').val();
		var artDesk = $('#desk_article').val();
		$.ajax({
			type : "POST",
			url  : "art/save",
			dataType : "JSON",
			data : {judul_article:artJudul, desk_article:artDesk},
			success: function(data){
				$('#judul_article').val("");
				$('#desk_article').val("");
				$('#addArtModal').modal('hide');
				listArticle();
			}
		});
		return false;
	});

$('#editArtForm').on('submit',function(){
		var artId = $('#artId').val();
		var artJudul = $('#artJudul').val();
		var artDesk = $('#artDesk').val();			
		$.ajax({
			type : "POST",
			url  : "art/update",
			dataType : "JSON",
			data : {id_article:artId, judul__article:artJudul, desk_article:artDesk},
			success: function(data){
				$("#artId").val("");
				$("#artJudul").val("");
				$('#artDesk').val("");
				$('#editArtModal').modal('hide');
				listArticle();
			}
		});
		return false;
	});

$('#deleteArtForm').on('submit',function(){
		var artId = $('#deleteArtId').val();
		$.ajax({
			type : "POST",
			url  : "art/delete",
			dataType : "JSON",  
			data : {id_article:artId},
			success: function(data){
				$("#"+artId).remove();
				$('#deleteArtId').val("");
				$('#deleteArtModal').modal('hide');
				listArticle();
			}
		});
		return false;
	});