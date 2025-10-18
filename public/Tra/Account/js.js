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
    document.getElementById('old_pass').value='';
    document.getElementById('new_pass1').value='';
    document.getElementById('new_pass2').value='';
}
function change(){
    if(document.getElementById('user_password').value!=document.getElementById('old_pass').value){
        alert('Bạn nhập sai password cũ');
    } else if(document.getElementById('new_pass1').value!=document.getElementById('new_pass2').value){
        alert('Bạn nhập sai password mới');
    } else if(document.getElementById('new_pass1').value.length<8){
        alert('Mật khẩu phải dài hơn 8 kí tự');
    } else {
        alert("Đổi mật khẩu thành công");
        document.getElementById('load').style.display='none';
        document.getElementById('user_password').value=document.getElementById('new_pass2').value;
    }
}
function unload(){
    document.getElementById('load').style.display='none';
}
function nothing(){
    alert('Tính năng chưa phát triển, quay lại sau!');
}
function setup(){
    document.getElementById('set_change_avatar').style.display="block";
}
function change_avatar() { 
    const input = document.getElementById('image_input'); 
    const avatar = document.getElementById('avatar'); 
    const file = input.files[0]; if (file) { 
        const reader = new FileReader(); 
        reader.onload = function(e) { 
            avatar.src = e.target.result; 
        }; 
        reader.readAsDataURL(file); 
    }
    document.getElementById('set_change_avatar').style.display="none";
}

document.getElementById('image_input').addEventListener('change', handleImageUpload);  

window.onload = function() {
    var statu = "signed"; // Biến trạng thái
    updateSignStatus();

    function updateSignStatus() {
        if (statu === "signed") {
            document.getElementById('sign_or_not1').innerHTML = "<b>TÀI KHOẢN</b>";
            document.getElementById('sign_or_not2').innerHTML = "Tài khoản";
        }
    }
};

function enableEdit(n) { 
    let inputField = document.getElementsByClassName('info-input')[n]; 
    document.getElementsByClassName('edit')[n].style.display="none";
    document.getElementsByClassName('unedit')[n].style.display="block";
    if(n==4){
        AddressEdit();
        return;
    }
    inputField.readOnly = false; 
    inputField.focus(); // Đặt con trỏ vào ô nhập liệu 
    if(n==1){
        var options = inputField.options;
        for(var i=0;i<options.length;i++){
            options[i].style.display="block";
        }
    }
    

}

function unableEdit(n){
    let inputField = document.getElementsByClassName('info-input')[n]; 
    document.getElementsByClassName('edit')[n].style.display="block";
    document.getElementsByClassName('unedit')[n].style.display="none";  
    if(n==4){
        AddressDone(inputField);
        return;
    }
    inputField.readOnly = true; 
    inputField.focus(); // Đặt con trỏ vào ô nhập liệu   
    
    if(n==1){
        var options = inputField.options;
        for(var i=0;i<options.length;i++){
            options[i].style.display="none";
        }
    }
}
function AddressEdit(){
    document.getElementsByClassName('addres_edit')[0].style.display="flex";
}
function AddressDone(id){
    chance_width(id);
    if(selected('province-select').value==0 || selected('district-select').value==0 || selected('ward-select').value==0 ){
        alert('Bạn nhập thiếu dữ liệu');
        return;
    } 
    let province = selected('province-select').textContent;
    let district = selected('district-select').textContent;
    let ward = selected('ward-select').textContent;
    let detail = document.getElementById('detail_address').value;
    let address_user = ward+" - "+district+" - "+province;
    if(detail!=""){
        address_user = detail+" - "+address_user;
    }
    document.getElementById('address_user').textContent= address_user;
    document.getElementsByClassName('addres_edit')[0].style.display="none";
    
}
function chance_width(id){
    id.style.width ="max-content"; 
    id.style.width =(id.scrollWidth); 
}
function selected(id){
    return document.getElementById(id).options[document.getElementById(id).selectedIndex]
}