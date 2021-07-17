$(document).ready(function(){

      //Activte Tooltip
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      });

      //display image to print on loading
    	$(document).on("change",".input-image",function()
      {
    		var img = $(this).prev().children("img");
    		//console.log(img);

    		var reader = new FileReader();

    		reader.onload = function (e) {
    			// get loaded data and render thumbnail.
    			img.attr('src', e.target.result);
    		};

    		// read the image file as a data URL.
    		reader.readAsDataURL(this.files[0]);
    		if($(this).val().trim().match(/\.(jpe?g|png|gif|bmp)$/i) == null)
    		{
    			$(this).removeClass("is-valid").addClass("is-invalid");
    		}
    		else
    		{
    			$(this).removeClass("is-invalid").addClass("is-valid");
    		}


    	});

      //general ajax
    	function ajax(headers,type,url,data,processData,contentType)
    	{
    		var results;
    		$.ajax
    		  ({
    			  headers: headers,
    			  type: type,
    			  url: url,
    			  dataType: 'json',
    			  data: data,
    			  async:false, //stop untill the ajax request done
    			  processData: processData,
    			  contentType: contentType,
    			  success: function (data)
    			  {
        				//console.log("success");
        				//console.log(data);
        				results = data;

    			  },
    			  error:function(data)
    			  {
        				//console.log("error");
        				console.log(data);
        				results = data;
    			  }
    		  });
      		// console.log(results);
      		return results;
    	}

      //store
      $(document).on("change",".article",function()
      {
        var search = $("#search_article input[type='search']").val();
        var categories = $("[name='category[]']:checked").map(function(i, e) {return e.value}).toArray();
        var url = $("#search_article").attr("action");
        var data ={"category":categories, "search":search};
        // console.log(data);
        // console.log(categories);
        // console.log(url);

        var header =
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          "search":search,
          "category":categories,
        };

        var result = ajax(header,'POST',url,data,false,false);
        //console.log(result.message);
        $("#container-article").replaceWith(result.html);
        //var currentUrl = location.href;
        //$("#section-classification").load(url +" #container-classification");
      });


      $(document).on("submit","#search_article",function()
      {
        if(location.origin+'/' == location.href)
        {
          event.preventDefault();
          var search = $("#search_article input[type='search']").val();
          var categories = $("[name='category[]']:checked").map(function(i, e) {return e.value}).toArray();
          var url = $("#search_article").attr("action");
          var data ={"category":categories, "search":search};
          //console.log(data);
          // console.log(categories);
          //console.log(url);

          var header =
          {
            'X-CSRF-TOKEN': $('#search_article input[name="_token"]').val(),
            "search":search,
            "category":categories,
          };

          var result = ajax(header,'POST',url,data,false,false);
          //console.log(result.message);
          $("#container-article").replaceWith(result.html);
          //var currentUrl = location.href;
          //$("#section-classification").load(url +" #container-classification");
        }

      });







});
