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



