function verifyUser(email){
    const uemail = email;
    console.log(uemail);
    const formdata = new FormData();
    formdata.append("uemail",uemail);
    fetch('views/admin/alldonors/process.php',{
        method: 'POST',
        body: formdata
    })
    .then(res =>{
        if(!res.ok){
            throw new Error('Network was not ok');
        }
        return res.text()
    })
        .then(data=>{
            window.location.reload();
        })
}