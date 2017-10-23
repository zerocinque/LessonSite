var inputs = document.getElementsByTagName('input');
$('#lbl-alert').hide();

function submit() {
    var flag = false;

    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            event.preventDefault();
            inputs[i].placeholder = 'Insert the ' + inputs[i].name + '!';
            console.log('Error: ' + inputs[i].name + ' has not been inserted.');
            if (!flag) {
                flag = true;
            }
        }
    }

    if (flag) {
        return;
    }

    var name = document.getElementById('input_name');
    var surname = document.getElementById('input_surname');

    var user = new Object();
    user.name = name.value;
    user.surname = surname.value;
    
    $.post('/03_bottasso_2017_07_07/controller/form_controller.php', 
        {"user": JSON.stringify(user)},
        function(data){
            //console.log(data);

            var obj = JSON.parse(data);
            //console.log(obj.state);
            if(obj.state){
                window.location.replace('./');
            }
            else{
                $('#lbl-alert').html('ERROR: non è stato possibile effetture il login.').show();
            }
            
        });

    
}

