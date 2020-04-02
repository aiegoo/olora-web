
var Ajax = {
	Send : function(url, form, sf, ef) {

		var that = this;
		var send_data = null;
		send_data = form.serialize();
		
		$.ajax({
			type : "post",
			datatype : "json",
			data : send_data,
			url : url,
			success : function(res) {
				if (typeof(sf) != "undefined" && typeof(sf) == "function") sf(res);
			},
			error : function(e, s, m) {
				if (typeof(ef) != "undefined" && typeof(ef) == "function") ef(e, s, m);
				else console.log(m);
			},
			// 전송전 스피너 처리
			beforeSend : function() {
				//$("#spinner_back").show();
				//$("#spinner").spin();
				loading.show();
			},
			// 전송후 스피너 처리
			complete : function() {
				//$("#spinner_back").hide();
				//$("#spinner").data().spinner.stop();
				//$("#spinner").spin();
				loading.hide();
			}
		});
	},
	
	// 성공여부
	isOK : function(res) {
		return res && res.result.code == "200";
	},
	
	// log
	log : function(msg) {
	},
	
	// 파라미터 객체 생성
	makeParams : function() {
		return {
			data : {},
			put : function(k, v) {
				//this.data[k] = encodeURIComponent(v);
				this.data[k] = v;
			},
			serialize : function() {
				return this.data;
			},
			clear : function() {
				this.data = {};
			}
		};
	}
};