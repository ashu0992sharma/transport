$(document).ready(function () {$("#select_stop").bind("change", function (event) {$.ajax({async:true, data:$("#select_stop").serialize(), dataType:"html", success:function (data, textStatus) {$("#show_route").html(data);}, type:"POST", url:"\/transport\/Stops\/show_routes"});
return false;});});