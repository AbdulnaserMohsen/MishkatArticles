$(document).ready(function(){

  $(".needs-validation input:not([type='submit']), .needs-validation select, .needs-validation textarea").on("blur",function(e){
		toValidate($(this));

		// var form = $(".needs-validation")[0];
    //     var isValid = form.checkValidity();
    //     if (!isValid) {
		// 	$(".needs-validation input[type='submit']").prop('disabled', 'disabled');
    //         e.preventDefault();
    //         e.stopPropagation();
    //     }
		// else
		// {
		// 	$(".needs-validation input[type='submit']").prop('disabled', false);
		// }
	});

  $(document).on('change', "input[type='checkbox'], input[type='radio']", function()
  {
    if(this.checked)
    {
      $(this).removeClass('is-invalid').addClass('is-valid');
      if($(this).attr("name") == "gender")
      {
        $("input[name=gender]").removeClass('is-invalid').addClass('is-valid');
      }
      // for color at bill details
      // if($(this).attr("name") == "color[]")
      // {
      //   var formParrent = $(this).closest('form');
      //   formParrent.find("input[name='color[]']").removeClass('is-invalid').addClass('is-valid');
      //   formParrent.find("input[name='color[]']").removeAttr('required');
      // }
    }
    else
    {
      var formParrent = $(this).closest('form');
      // for color at bill details
      // if(formParrent.find("input[name='color[]']:checked").length == 0)
      // {
      //   formParrent.find("input[name='color[]']").attr('required', 'required');
      //   formParrent.find("input[name='color[]']").removeClass('is-valid').addClass('is-invalid');
      // }


    }
  });

  $(document).on('change', " select", function()
  {
      if($(this).val() != "")
      {
        $(this).removeClass('is-invalid').addClass('is-valid');
        if($(this).hasClass("special-selector"))
        {
          //console.log($(this).val());
          $(this).next(".selectator_element").removeClass('is-invalid').addClass('is-valid');
        }
      }
      else
      {
        $(this).removeClass('is-valid').addClass('is-invalid');
        if($(this).hasClass("special-selector"))
        {
          $(this).next(".selectator_element").removeClass('is-valid').addClass('is-invalid');
        }
      }

  });

	$(".needs-validation").on("submit",function(e){
		////let inputs = $(this).children().children("input:not([type='submit'])");
		//let inputs = $(this).find("input:not([type='submit'])");
		//toValidate(inputs);
		var form = $(this)[0];
        var isValid = form.checkValidity();

        if (!isValid) {
            e.preventDefault();
            e.stopPropagation();
        }
		form.classList.add('was-validated');

    if($(this).find(".special-selector").val() == "")
    {
      $(this).find(".special-selector").next(".selectator_element").removeClass('is-valid').addClass('is-invalid');
    }


	});


	function toValidate(el)
	{
		if(!validate(el))
		{
			el.removeClass('is-valid').addClass('is-invalid');
			if(el.attr("name") == "gender")
			{
				$("input[name=gender]").removeClass('is-valid').addClass('is-invalid');
			}
			if(el.hasClass("selectator_input"))
			{
				//console.log("aaaa");
				el.parent(".selectator_element").removeClass('is-valid').addClass('is-invalid');
			}
			return false;
		}
		else
		{
			el.removeClass('is-invalid').addClass('is-valid');
			if(el.hasClass("selectator_input"))
			{
				//console.log("bbbbbb");
				el.parent(".selectator_element").removeClass('is-invalid').addClass('is-valid');
			}
			return true;
		}
	}



	function validate(el)
	{
		//console.log(el);
		//not required inputs
		if(el.attr("name") == "name_en" && !el.attr("required"))
		{
			if(el.val().trim() != "")
			{
				if(el.val().trim().match(/^[a-zA-Z ]+$/) == null)
					return false;
			}
		}
		else if(el.attr("name") == "image" && !el.attr("required"))
		{
			if(el.val().trim() != "")
			{
				if(el.val().trim().match(/\.(jpe?g|png|gif|bmp)$/i) == null)
					return false;
			}
		}
		// required inputs
		else if(el.attr("name") == "name_en")
		{
			if(el.val().trim().match(/^[a-zA-Z ]+$/) == null)
				return false;
		}
		else if(el.attr("name") == "email")
		{
			if(el.val().trim().match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/) == null)
				return false;
		}
		else if(el.attr("name") == "countryID" || el.attr("name") == "stateID" || el.attr("name") == "cityID" || el.attr("name") == "brand" || el.attr("name") == "category" || el.attr("name") == "to_page")
		{
			if(el.val() == "")
				return false;
		}
		else if(el.attr("name") == "address")
		{
			if(el.val().trim().match(/^([a-zA-Z0-9\-, ]{3,})+$/) == null)
				return false;
		}
		else if(el.attr("name") == "phone")
		{
			if(el.val().trim().match(/^\+?\d{10,}$/) == null)
				return false;
		}
		else if(el.attr("name") == "gender")
		{
			if(!el.prop("checked"))
				return false;
		}
		else if(el.attr("name") == "password")
		{
			if(el.val().trim().length < 8 )
				return false;
		}
		else if(el.attr("name") == "password_confirmation")
		{
			if(el.val().trim().length < 8)
				return false;
			if(el.val().trim() != $(".needs-validation input[name='password']").val().trim())
				return false;
		}
		else if(el.attr("name") == "agree")
		{
			if(!el.is(":checked"))
				return false;
		}
		else if(el.attr("name") == "image")
		{
			if(el.val().trim().match(/\.(jpe?g|png|gif|bmp)$/i) == null)
				return false;
		}
		else if(el.attr("name") == "price")
		{
			if(el.val().trim().match(/^[1-9]\d{0,7}(?:\.\d{1,4})?$/) == null)
				return false;
		}
		else if(el.attr("name") == "quantity")
		{
			if(el.val().trim().match(/^[1-9]\d{0,7}$/) == null)
				return false;
		}
		else if(el.attr("name") == "discount")
		{
			if(el.val().trim().match(/^[0-9]\d{0,7}$/) == null)
				return false;
		}
		else if(el.attr("name") == "description")
		{
			if(el.val().trim().match(/^[a-zA-Z ]+$/) == null)
				return false;
		}
		else if(el.hasClass("selectator_input"))
		{
		  if(el.parent().prev(".special-selector").val() == "")
		  {
			return false;
		  }
		}
		else if(el.attr("pattern"))
		{
		  if(el.val().trim().match(el.attr("pattern")) == null)
			return false;
		}
		else if(el.attr("required"))
		{
		  if(el.val() == "")
		  {
			return false;
		  }
		}

		return true;
	}




});
