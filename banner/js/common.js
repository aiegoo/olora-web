
$(function () {

	// 빈값 체크
	$.fn.Empty = function(msg) {
		if (!$(this).val()) {
			alert(msg);
			$(this).focus();
			return true;
		} else {
			return false;
		}
	};
	
	// 체크박스 전체 체크 
	$(".allCheck").click(function () {
		var _isChecked = false;
		if($(this).prop("checked")) _isChecked = true;
		$(this).prop("checked", _isChecked);
		$("input[type='checkbox']").each(function () {
			$(this).prop("checked", _isChecked);
		});
	});

	// 숫자만 입력 가능하게
	$(document).on("keypress", "input[type='text'][class*='numberic']", function(event) {
		
		if (!/^[0-9]*$/.test(event.key)) {
			alert("숫자만 입력 가능합니다.");
			return false;
		}
		return true;
		
	});

});

// file 확장자 체크
function humanFileSize(bytes, si) {
    var thresh = si ? 1000 : 1024;
    if (Math.abs(bytes) < thresh) {
        return bytes + ' B';
    }
    var units = si
        ? ['kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']
        : ['KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB'];
    var u = -1;
    do {
        bytes /= thresh;
        ++u;
    } while (Math.abs(bytes) >= thresh && u < units.length - 1);
    return bytes.toFixed(1) + ' ' + units[u];
}

var UPLOAD_FILESIZE_LIMIT = -1;
$(document).on("change", "input[type='file']", function(){
	 // 확장자 체크
	if($(this).attr("data-ext")){
		var ext_list = $(this).attr("data-ext").split(",");

		var file_ext = $(this).val().split(".");

		file_ext = file_ext.reverse();

		if($.inArray(file_ext[0].toLowerCase(), ext_list) < 0){
			alert(ext_list + " 확장자만 사용 가능합니다");
			$(this).val("");
			$(this).next().text($(this).next().attr("title"));
			return false;
		}
    }
    // 크기 체크
    var upFile = $(this)[0].files[0];
    var limitSize = $(this).attr("data-size") ? parseInt($(this).attr("data-size").val()) : UPLOAD_FILESIZE_LIMIT;
	if (upFile && limitSize > 0) {
		if (upFile.size > limitSize) {
            alert("파일크기는 " + humanFileSize(limitSize, false) + "이하의 용량만 업로드 가능합니다.");
            $(this).val("");
            $(this).next().text($(this).next().attr("title"));
            return false;
		}
	}

});

// 테이블 체크 리스트
var getChecked;
$(function(){
	getChecked = function() {
		return $(".tbl_list td input[type='checkbox']:checked");
	}
})


// 선택한 항목
var selecteList = function () {
	var select_data = [];
	$(".table_area td [type='checkbox']:checked").each(function () {
		select_data.push($(this).val());
	});
	
	return select_data;
}

// 파일삭제 컨트롤
var DEL_FILE = {
    list : [],
    add : function(seq) {DEL_FILE.list.push(seq);},
	getList : function() {return DEL_FILE.list},
	getListStr : function() {return DEL_FILE.list.join(",")},
	clear : function() {DEL_FILE.list = [];}
};


// 모달창
var currentModal;
var currentModalUrl;
var showModal = function (u) {
	
	if (currentModal) currentModal.close();
	
	var modal = $("#modal-pop");
	$.get(u, function (data) {
		modal.empty();
		modal.html(data);
		modal.bPopup({
			modalClose : false,
			escClose : true, 
			positionStyle : "fixed", 
			follow : [ true, false ], 
			position : [ "auto", "auto"],  	
			onOpen : function () { 
				currentModal = modal; 
				currentModalUrl = u;
			}, 
			onClose : function () { 
				modal.empty();
				currentModal = false;
				currentModalUrl = false;
			}
		});
	});
}