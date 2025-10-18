function meow(){
    const p = document.querySelectorAll('p');
    const span= document.querySelectorAll('span');
    const label=document.querySelectorAll('label')
    const option=document.querySelectorAll('option')
    

    p.forEach(p => {
        p.textContent = 'meow meow';
    })
    span.forEach(span => {
        span.textContent = 'meow meow';
    })
    label.forEach(label => {
        label.textContent = 'meow meow';
    })
    option.forEach(option => {
        option.textContent = 'meow meow';
    })
    
}


function load(){
    document.getElementById('load').style.display='block';
}

function unload(){
    document.getElementById('load').style.display='none';
}

function book(id){
    const transactionList = document.getElementById(id); 
    const span = transactionList.querySelector("span");
    span.style.display='none';
    const transactionCode = generateTransactionCode(); 
    const transactionBox = document.createElement('div'); 
    transactionBox.classList.add('transaction'); 
    transactionBox.innerHTML = `<div class="sub_history"> <img src="../Images/doctor.png" style="width: 100px;" alt="Transaction Image"> <div class="transaction-code">Mã giao dịch: ${transactionCode}</div> </div> `; 
    transactionList.appendChild(transactionBox); 
}
function generateTransactionCode() { 
    return 'TX-' + Math.floor(Math.random() * 1000000);
}