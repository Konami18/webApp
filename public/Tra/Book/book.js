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

/* ========================================================================= */
/*                              M A I N                                      */
/* ========================================================================= */
let infor_user = [7];
infor_user[0]='Dương Văn Trà';
infor_user[1]='05/08/2004';
infor_user[2]='0368344953';
infor_user[3]='Helicopter';
infor_user[4]='Tỉnh Nam Định';
infor_user[5]='Huyện Ý Yên';
infor_user[6]='Xã Yên Nhân';
infor_user[7]='22010087@st.phenikaa-uni.edu.vn';
let trangthai=1;
let rows = 4; 
let cols = 8; 
let inforbs = new Array(rows).fill('Bất kì').map(() => new Array(cols).fill('Bất kì'));
inforbs[1][2]='Nữ';
inforbs[1][3]='Nam';
for (let i = 0; i < cols; i++) { inforbs[3][i] = 'Bất kì ngày trong tuần';}

inforbs[0][4]='Dương Văn Trà';
inforbs[1][4]='Nam';
inforbs[2][4]='Tiến sĩ';
inforbs[3][4]='Thứ 2/4/6/chủ nhật';

function signed_button(){
    document.getElementById('i1').value=infor_user[0];
    document.getElementById('i2').value=infor_user[1];
    document.getElementById('i3').value=infor_user[2];
    document.getElementById('i4').value=infor_user[3];
    document.getElementById('i8').value=infor_user[7];
    // let provinve=document.getElementById('province-select');
    // let district=document.getElementById('district-select');
    // let ward=document.getElementById('ward-select');
    // for(let i=0;i<provinve.options.lenght;i++){
    //     if(infor_user[4]==provinve.option[i].textContent){
    //         alert("ddax tim thay");
    //     }
    // }
}

function updateDisplay() { 
    document.getElementsByClassName('b1')[0].style.display='none';
    document.getElementsByClassName('b2')[0].style.display='none';
    document.getElementsByClassName('b3')[0].style.display='none';
    document.getElementsByClassName('tron')[0].style.backgroundColor='rgb(84, 109, 115)';
    document.getElementsByClassName('tron')[1].style.backgroundColor='rgb(84, 109, 115)';
    document.getElementsByClassName('tron')[2].style.backgroundColor='rgb(84, 109, 115)';

    if (trangthai == 1) { 
        document.getElementsByClassName('b1')[0].style.display = 'block'; 
        document.getElementById('t1').style.backgroundColor = 'rgb(0, 208, 255)';
        document.getElementById('t1').style.borderColor = 'red';
        document.getElementById('h2').style.backgroundColor = 'black'; 
        document.getElementById('t2').style.borderColor = 'black'; 
    } 
    
    else if (trangthai == 2) { 
        document.getElementsByClassName('b2')[0].style.display = 'block'; 
        document.getElementById('h2').style.backgroundColor = 'red'; 
        document.getElementById('t2').style.backgroundColor = 'rgb(0, 208, 255)';
        document.getElementById('t2').style.borderColor = 'red';
        document.getElementById('h3').style.backgroundColor = 'black'; 
        document.getElementById('t3').style.borderColor = 'black'; 
    } 
        
    else if (trangthai == 3) { 
        document.getElementsByClassName('b3')[0].style.display = 'block';  
        document.getElementById('h3').style.backgroundColor = 'red'; 
        document.getElementById('t3').style.backgroundColor = 'rgb(0, 208, 255)';
        document.getElementById('t3').style.borderColor = 'red';
    }
}
function next(){
    if(trangthai==1){
        if(
            document.getElementById('i1').value=="" || document.getElementById('i2').value=="" || 
            document.getElementById('i3').value=="" || document.getElementById('i4').value=="" || 
            document.getElementById('province-select').value=="0" ||
            document.getElementById('district-select').value=="0" || 
            document.getElementById('ward-select').value=="0"
        ){ 
            alert("Bạn chưa nhập đủ các trường thông tin quan trọng");
            return;
        }
    }
    if(trangthai==2){
        if(document.getElementById('findnd').value==""){
            alert("Bạn chưa chọn nội dung thăm khám");
            return;
        }
    }
    trangthai+=1;
    if(trangthai>3) trangthai=3;
    updateDisplay();
}
function back(){
    trangthai-=1;
    if(trangthai<1) trangthai=1;
    updateDisplay();
}

function nd(n){
    let a = document.getElementById('f1');
    for(let i=1;i<n;i++){
        a = a.nextElementSibling;
    }
    let value = a.textContent;
    document.getElementById('findnd').value=value;
}
function dc(n){
    let a = document.getElementById('f2');
    for(let i=1;i<n;i++){
        a = a.nextElementSibling;
    }
    let value = a.textContent;
    document.getElementById('finddc').value=value;
}
function cs(n){
    let a = document.getElementById('f3');
    for(let i=1;i<n;i++){
        a = a.nextElementSibling;
    }
    let value = a.textContent;
    document.getElementById('findcs').value=value;
}
function bs(n){
    let a = document.getElementById('f4');
    for(let i=1;i<n;i++){
        a = a.nextElementSibling;
    }
    let value = a.textContent;
    document.getElementById('findbs').value=value;
    
    var [name,gender,learn,dates] = infor(n);
    var img='../Images/doctor.png';
    
    if(gender=='Nam'){
        img='../Images/male.jpg';
    }
    else if(gender=='Nữ') {
        img='../Images/female.jpg'
    }

    document.getElementById('name').textContent = name;
    document.getElementById('gender').textContent = gender;
    document.getElementById('learn').textContent = learn;
    document.getElementById('dates').textContent = dates;
    document.getElementById('img').src = img;
}
function infor(n){
    let name = inforbs[0][n];
    let gender = inforbs[1][n];
    let learn = inforbs[2][n];
    let dates = inforbs[3][n];
    return [name,gender,learn,dates];
}

