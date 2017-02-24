function loadData() {
	$.ajax({

		 url: "books.xml",
		 dataType: "xml",
		 success: function(data) {
		        alert("Hey!file is loaded");
		        var info = "<tr><th>Title:   </th><th> Author: </th><th> Year:  </th><th>Price:</th></tr>";
		        $("table").append(info);
		        $(data).find('book').each(function(){
					var title = $(this).find('title').text();
					var author = $(this).find('author').each(function(){$(this).append(" , ")}).text();
					var author1 = author.substring(0,author.length-2);
					var year = $(this).find('year').text();
					var price = $(this).find('price').text();
		            var result = '<tr><td>' + title + '</td><td>' + author1 + '</td><td>' + year + '</td><td>' + price + '</td><tr><br>';
					$("table").append(result);
		        });
		 },
		 error: function() { alert("error loading file");  }
     });
}
