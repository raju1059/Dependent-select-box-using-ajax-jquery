
<script>
function loadclass(type , class_id){
	$.ajax({
		url: "<?php echo base_url();?>admin/class_box",
		type: "POST",
		data: {type:type,id:class_id},
		success: function(data){
			if (type == "studentdata") {
				$("#districts").html(data);
			}else{
				$("#divisions").append(data);
			}			
		}
	})
}
$( document ).ready(function() {
	loadclass();

	$("#divisions").on("change",function(){
		var class_id = $("#divisions").val();
		if (class_id != "") {
			loadclass("studentdata",class_id);
		}else{
			$("#dis").html("");
		}		
	});
});
</script>
