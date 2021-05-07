function sendEmail()
{

    

    //const url = 'assets/mail/contact.php';
    const url = 'assets/mail/contact.php';


    const name = document.getElementById('contactName');
    const email = document.getElementById('contactEmail');
    const msg = document.getElementById('contactMsg');


    const formData = new FormData();
    formData.append('name', name.value);
    formData.append('email', email.value);
    formData.append('msg', msg.value);

    const sendingMsg = document.getElementById('sendingMsg');
    sendingMsg.style.display = 'flex';

    fetch(url, 
        {
            body: formData,
            method: 'post'
        })
        .then(resp => resp.json())
        .then(data => {
            console.log(data)
            name.value = null
            email.value = null
            msg.value = null
            sendingMsg.style.display = 'none';
            alert('Mensagem enviada com sucesso!');
        
                                })
        .catch(error => {
                console.log(error)
                sendingMsg.style.display = 'none';
                alert('Erro ao enviar a msg! Envie um email para iquecode@gmail.com');
        
        });
}


// function showResp(data)
// {
//     const msg = `
//         Resultado: ${data.result},
//         msg: ${data.msg}
//     `;

//     alert(msg);
// }