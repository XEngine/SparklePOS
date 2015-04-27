var baseUrl = window.location.protocol + "//" + window.location.host;

var AjaxCallCodes = {'eatables':"callCode=Eatables"};

function eatables(e) {
    e.preventDefault();
    var $obj = $(this);
    var id = $obj.data('catid');

	$.ajax({
        type: "POST",
        url: baseUrl+"/processAjaxCall",
        data: AjaxCallCodes.eatables+'&'+'id='+id,
        success: function(msg) {
        	$(".containerhall").html(msg);
        },
    });
}

$(document).on('click', '#eatables', eatables);