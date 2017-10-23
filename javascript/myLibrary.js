function deleteRegistration(var id){
	$.post('/03_bottasso_2017_07_07/controller/delete_registration.php',
		{"id": JSON.stringify(id)},
		function(data){
			var obj = JSON.parse(data);
            //console.log(obj.state);
            if(obj.state){
                window.location.replace('./');
            }
		});
}
function deleteLesson(var id){

}
function deleteSubject(var id){

}