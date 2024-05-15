const form1 = document.querySelector('.form-1');
const form2 = document.querySelector('.form-2');
const form3 = document.querySelector('.form-3');
const donation_date = document.getElementById('donation_date');
function showNext(next,event){
    event.preventDefault();
    const target = 'form-'+next;
    if(target == 'form-2'){
        form1.setAttribute('hidden', true);
        form2.removeAttribute('hidden');
    }else{
        form2.setAttribute('hidden', true);
        form3.removeAttribute('hidden');
        
    }
}
function showBack(next,event){
    event.preventDefault();
    const target = 'form-'+next;
    if(target == 'form-2'){
        form3.setAttribute('hidden', true);
        form2.removeAttribute('hidden');
    }else{
        form2.setAttribute('hidden', true);
        form1.removeAttribute('hidden');
    }
}
const today = new Date().toISOString().split('T')[0];
donation_date.setAttribute('max',today);

function navigateLogin(){
    location.href ='login';
}

function process(event){
    event.preventDefault();
    const formdata = new FormData();
    // console.log("validator_name: ",document.getElementById('validator_name').value, "validator_designation: ",document.getElementById('validator_designation').value);
        formdata.append("username", document.getElementById('username').value)
        formdata.append("number", document.getElementById('number').value)
        formdata.append("email", document.getElementById('email').value)
        formdata.append("password", document.getElementById('password').value)
        formdata.append("bgroup", document.getElementById('bgroup').value)
        formdata.append("address", document.getElementById('address').value)
        formdata.append("district", document.getElementById('district').value)
        formdata.append("url", document.getElementById('url').value)
        formdata.append("nid", document.getElementById('nid').value)
        formdata.append("dob", document.getElementById('dob').value)
        formdata.append("gender", document.querySelector('input[name="gender"]:checked').value)
        formdata.append("ddate", document.getElementById('donation_date').value)
        formdata.append("validator_name", document.getElementById('validator_name').value)
        formdata.append("validator_designation", document.getElementById('validator_designation').value)

        fetch('views/authentication/process.php', {
            method: 'POST',
            body: formdata
        }).then(res =>{
            if(!res.ok){
                throw new Error('Network was not ok');
            }
            return res.text()
        })
            .then(data=>{
                console.log(data);
                    document.querySelector('.absolute').removeAttribute('hidden');
                    setTimeout(navigateLogin, 4000);
            })
            .catch(error => {
                // Handle error
                console.error('There was a problem with your fetch operation:', error);
            });
        }
        // console.log(
        //     "username: "+username,
        //     "number: "+number,
        //     "email: "+email,
        //     "password: "+password,
        //     "group: "+group,
        //     "adress: "+adress,
        //     "district: "+district,
        //     "url: "+url,
        //     "nid: "+nid,
        //     "dob: "+dob,
        //     "gender: "+gender,
        //     "ddate: "+ddate
        // );



