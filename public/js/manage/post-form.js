$(document).ready(function(){
	$('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });
    $('.summernote').summernote({
    	placeholder: 'Post body.'
    });
    $('.input-group.date').datepicker({
    	format:'dd-mm-yyyy',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });

    var edit = function() {
        $('.click2edit').summernote({focus: true});
    };
    var save = function() {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };

 	$('#tags').select2({
 		tags: true,
 		ajax: {
 			url: "/api/tags",
 			dataType: 'json',
 			delay: 250,
 			data: function (params) {
 				return {
			        q: params.term, // search term
			        page: params.page
			    };
			},
			processResults: function (data, params) {
				return {
					results: data.data.map(function(tag){
						return { text: tag.name, id: tag.name };
					}),
				};
			},
			cache: true
		},
		escapeMarkup: function (markup) { return markup; },
		templateResult: function formatState (state) {
			return $('<span>'+state.text+'</span>');
		},
		templateSelection: function (data) {
		    return data.text;
		}    		
 	});

 	//change the form based on the type of post
 	$('select[name="post_type_id"]').change(updatePostType);
 	updatePostType();
});
 	
var updatePostType = function(){
	var postType = $('select[name="post_type_id"]').find(':selected').text();

	switch(postType){
		case "Standard":
			standardPost();
			break;
		case "Image":
			imagePost();
			break;
		case "Video":
			break;
	}
}

var imagePost = function(){
	var $img = $('<img class="img-responsive" src="/images/placeholder-image.jpg"/>');
	

	var $container = $('<div class="row">' +
		'<div class="col-lg-6"><div class="img-crop"></div></div>'+
		'<div class="col-lg-6">'+
			'<h4>Preview image</h4>'+
			'<div class="btn-group">'+
                '<label title="Upload image file" for="inputImage" class="btn btn-primary">'+
                    '<input type="file" accept="image/*" name="image" id="inputImage" class="hide">'+
                    'Upload Image'+
                '</label>'+
            '</div>'+
		'</div></div>');

	$container.find('.img-crop').append($img);
	$('.post-media .ibox-content').append($container);
	$('.post-media').show();

	$($img).cropper({
        aspectRatio: 1.618,
        done: function(data) {
        }
    });

	var $inputImage = $("#inputImage");
    if (window.FileReader) {
        $inputImage.change(function() {
            console.log('change')
            var fileReader = new FileReader(),
                files = this.files,
                file;

            if (!files.length) {
                return;
            }

            file = files[0];
            if (/^image\/\w+$/.test(file.type)) {
                fileReader.readAsDataURL(file);
                fileReader.onload = function () {
                    $inputImage.val("");
                    $img.cropper("reset", true).cropper("replace", this.result);
                };
            } else {
                showMessage("Please choose an image file.");
            }
        });
    } else {
        $inputImage.addClass("hide");
    }

    var croppedPhoto = $($img).cropper('getCroppedCanvas');
    console.log(croppedPhoto)
    croppedPhoto.toBlob(function (blob) {
        $('#inputImage').val(blob); //set blob to form hidden input
    });

}

var standardPost = function(){
	$('.post-media').hide();
}
