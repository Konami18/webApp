const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


function load(){
  const name=document.getElementById('myname');
  const pw=document.getElementById('mypw');

  if(name.value=='' || pw.value==''){
    alert('Bạn chưa nhập đủ thông tin đăng nhập');
  } else {
  window.open("../Trang chu/index.html", "_blank");
  }
}

function check(){
  alert("Bạn chưa đăng nhập");
}

function unload(){
  document.getElementById('load').style.display='none';
}

document.getElementById("dataForm").addEventListener("submit", function(event){ 
  event.preventDefault(); // Ngăn chặn gửi form mặc định 
  var submitButton = document.getElementById("submitButton"); 
  submitButton.innerHTML = "Đang lưu..."; 
  var formData = new FormData(this); 
  fetch("save_data.php", { method: "POST", body: formData }) 
  .then(response => response.text()) 
  .then(result => { 
    console.log("Success:", result); 
    submitButton.innerHTML = "Đã lưu"; 
  }) 
  .catch(error => { 
    console.error("Error:", error); 
    submitButton.innerHTML = "Lỗi! Thử lại"; 
  }); 
}); 