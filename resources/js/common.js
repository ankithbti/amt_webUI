$(function(){

	$("#obBlock").css("display", "block");

	$("#obBtn").click(function(){
		$("#obBlock").css("display", "block");
		$("#strategyBlock").css("display", "none");
		$("#rmsBlock").css("display", "none");
		$("#obBtn").addClass("active");
		$("#strategyBtn").removeClass("active");
		$("#riskBtn").removeClass("active");
	});

	$("#strategyBtn").click(function(){
		$("#obBlock").css("display", "none");
		$("#strategyBlock").css("display", "block");
		$("#rmsBlock").css("display", "none");
		$("#obBtn").removeClass("active");
		$("#riskBtn").removeClass("active");
		$("#strategyBtn").addClass("active");
	});

	$("#riskBtn").click(function(){
		$("#obBlock").css("display", "none");
		$("#strategyBlock").css("display", "none");
		$("#rmsBlock").css("display", "block");
		$("#obBtn").removeClass("active");
		$("#strategyBtn").removeClass("active");
		$("#riskBtn").addClass("active");
	});


	$('#myTable').dataTable();

});