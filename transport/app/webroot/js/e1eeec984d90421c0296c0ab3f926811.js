$(document).ready(function () {$("#student").bind("change", function (event) {$.ajax({async:true, data:$("#student").serialize(), dataType:"html", success:function (data, textStatus) {$("#show_routes").html(data);}, type:"POST", url:"\/transport\/Studentroutestops\/show_routes"});
return false;});
$("#route").bind("change", function (event) {$.ajax({async:true, data:$("#route").serialize(), dataType:"html", success:function (data, textStatus) {$("#show_students").html(data);}, type:"POST", url:"\/transport\/Studentroutestops\/show_students"});
return false;});});