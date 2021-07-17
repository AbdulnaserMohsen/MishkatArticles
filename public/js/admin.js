$("#menu-toggle").click(function(e) {
   e.preventDefault();
   $("#wrapper").toggleClass("toggled");
});
$("#menu-toggle-2").click(function(e) {
   e.preventDefault();
   $("#wrapper").toggleClass("toggled-2");
   $('#menu ul').hide();
});

function initMenu() {
   $('#menu ul').hide();
   $('#menu ul').children('.current').parent().show();
   //$('#menu ul:first').show();
   $('#menu li a').click
   (
		function()
		{
			var checkElement = $(this).next();
			if ((checkElement.is('ul')) && (checkElement.is(':visible')))
			{
				return false;
			}
			if ((checkElement.is('ul')) && (!checkElement.is(':visible')))
			{
				$('#menu ul:visible').slideUp('normal');
				checkElement.slideDown('normal');
				return false;
			}
		}
   );
}
$(document).ready(function() {

  /** sidebar ***/
  initMenu();


   /*** dashboard cards ***/
   $('.counter-value').each(function(){
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      },{
          duration: 3500,
          easing: 'swing',
          step: function (now){
              $(this).text(Math.ceil(now));
          }
      });
  });


  /** table filter **/
  $("#table-filter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
      $("#table-body tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
  });


  function ajax(type,url,data,processData,contentType)
  {
  	var results;
      $.ajax
        ({
            type: type,
            url: url,
            dataType: 'json',
            data: data,
            async:false, //stop untill the ajax request done
            processData: processData,
            contentType: contentType,
            success: function (data)
            {
              //console.log(data);
              results = data;
            },
            error:function(data)
            {
              console.log(data);
              //console.log(data.responseJSON.errors);
              results = data;
            }
        });
      //console.log(results);
      return results;
  }
  //add & update
  $(document).on('submit','.needs-validation',function(e)
  {
      e.preventDefault();
      e.stopPropagation();
      let thisForm = $(this);
      let url = $(this).attr('action');
      var formData = new FormData($(this)[0]);
      var result = ajax('POST',url,formData,false,false);
      if(result.success = "successfull" && !result.hasOwnProperty("responseJSON"))
      {
          swal(result.message,
          {
            icon: "success",
            buttons: false,
            timer: 1500,
          });
          $('#data-section').load(location.href+' #data-container');
          $('.custom-close').trigger('click');
      }
      else if(result.hasOwnProperty("responseJSON"))
      {
          $.each(result.responseJSON.errors, function (key, value)
          {
              //console.log(key , value);
              $(thisForm).find('[name="' + key + '"]').removeClass("is-valid");
              $(thisForm).find('[name="' + key + '"]').next().html("<strong>"+value+"</strong");
              $(thisForm).find('[name="' + key + '"]').addClass("is-invalid");

          });
      }
  });

  //delete
  $(document).on('click','.btn-outline-danger',function(e)
  {
      e.preventDefault();
      e.stopPropagation();
      swal(
      			{
      			  title: "Are you sure?",
      			  text: "Once deleted, you will not be able to recover this!",
      			  icon: "warning",
      			  buttons:  true,
      			  dangerMode: true,
      			})
      			.then((willDelete) =>
      			{
      			  if (willDelete)
      			  {
                  let url = $(this).attr('href');
                  var result = ajax('GET',url,'',true,false);
                  //var data = get_ajax(url,section,link,contanier);
          				//console.log(data);
          				if(result.success == "successfull")
          				{
          					swal(result.message,
          						{
          						  icon: "success",
          						  buttons: false,
          						  timer: 1500,
          						});
                      let currenturl = location.href.split('?')[0];
                      let page = location.href.split('?')[1];

                      if($(this).attr("data-count") == 1 && page !== undefined)
                      {
                        let pageNum = page.split('=')[1];
                        if(pageNum != 1)
                        {
                            pageNum--;
                        }
                        page = page.replace(/.$/,pageNum);// /.$/ => replace any character at the end
                        location.replace(currenturl+'?'+page);
                      }
                      else
                      {
                          $('#data-section').load(location.href+' #data-container');
                      }

          				}
                  else if(result.success == "faild")
                  {
                    swal(result.message);
                  }
          				else
          				{
          					swal("Not deleted there is a problem!",
          							"Error : "+ result.responseJSON.message,
          						);
          				}
      			  }
      			  else
      			  {
      				      swal("Your data is safe",
                          {
                            buttons: false,
      						          timer: 1000,
                        });
      			  }
      			});

        });


});
