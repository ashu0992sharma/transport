$(document).ready(function () {$("#btn_SEARCH").bind("click", function (event) {$.ajax({data:$("#btn_SEARCH").closest("form").serialize(), dataType:"html", label:false, success:function (data, textStatus) {$("#vehiclemodel").html(data);}, type:"post", url:"\/transport\/Vehiclemodel\/add", value:"Go"});
return false;});
$("#fuel_type").bind("change", function (event) {alert("hfksdjfh");
return false;});});