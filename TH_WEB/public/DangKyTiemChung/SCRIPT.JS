
let menu = document.querySelector('#menu-bar');
let nav = document.querySelector('.nav');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  nav.classList.toggle('active');
}

var btn_ban_than = document.querySelector('#btn_dk_ban_than1');
var btn_nguoi_than = document.querySelector('#btn-dk_nguoi_than1');

const body = document.getElementById('body');

// const body_1= document.getElementById('body_1');
const formchinh_1 = document.getElementById('formchinh_1');
const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const form4 = document.getElementById('form4');
const body0 = document.getElementById('body0');
//Nhấn nút Radio để hiện form tương ứng

// btn_ban_than.addEventListener('click', () => {
//   form1.style.display = 'block';
//   form2.style.display = 'none';
//   progress.style.width = "450px";
// });



// btn_nguoi_than.addEventListener('click', () => {
//   // alert("xinchaof"); 
//   form1.style.display = 'none';
//   form2.style.display = 'block';
//   form3.style.display = 'none';


//   progress.style.width = "450px";
// });

// Load Page để hiện form 1
function LoadPage() {
  body0.style.display = 'block';
  // body1.style.display = 'block';

  form2.style.display = 'none';
  form3.style.display = 'none';
  progress.style.width = "450px";
  formchinh_1.style.display = 'none'
}

window.onload = LoadPage;

// Khai báo các nút
var Next1 = document.getElementById("Next1");
var Next2 = document.getElementById("Next2");
var Submit = document.getElementById("Submit");
var Back1 = document.getElementById("Back1");
var progress = document.getElementById("progress");
var paBtn = document.getElementById("paBtn");

// Các nút form 1 form 2
Next1.addEventListener('click', () => {
  body0.style.display = 'none';
  form3.style.display = 'block';
  form3.scrollIntoView(true);
  progress.style.width = "900px";
});

Next2.addEventListener('click', () => {
  form3.style.display = 'block';
  form3.scrollIntoView(true);
  form2.style.display = 'none';
  progress.style.width = "900px";
});

// Các nút form 3
//Quay lại
Back1.addEventListener('click', () => {
  if (btn_ban_than.checked) {
    body0.style.display = 'block';
    progress.style.width = "450px";
    form3.style.display = 'none';
    form2.style.display = 'none';


  }
  else {
    form2.style.display = 'block';
    progress.style.width = "450px";
    form3.style.display = 'none';
  }
});

// Nút xác nhận
Submit.addEventListener('click', () => {
  alert('Đăng ký tiêm chủng thành công');
  body0.style.display = 'block';
  form4.style.display = 'none';
});

// if(d.querySelector('myDropzone')) {
//   // Dropzone class:
//   var myDropzone = new Dropzone("div#myId", { url: "/file/post"});
// }

// script
document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    f
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

// nút scroll đến form
let btn_DKTC = document.querySelector('.link1-btn');
let form = document.querySelector('.body');

btn_DKTC.addEventListener('click', function () {
  form.scrollIntoView(true);
})

// nút phản ánh
let btn_phananh = document.querySelector('.link1-btn');
let body1 = document.querySelector('.body1');

btn_phananh.addEventListener('click', function () {
  body1.scrollIntoView(true);
})

//Khi người dùng cuộn chuột thì gọi hàm scrollFunction
window.onscroll = function () { scrollFunction() };

// khai báo hàm scrollFunction
function scrollFunction() {
  // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //nếu lớn hơn 20px thì hiện button
    document.getElementById("paBtn").style.display = "block";
  } else {
    //nếu nhỏ hơn 20px thì ẩn button
    document.getElementById("paBtn").style.display = "none";
  }
}

paBtn.addEventListener('click', () => {
  formchinh_1.style.display = 'block';
  body.style.display = 'none';
});

// nút gửi phản hồi
// let btn_phanhoi = document.querySelector('#Submit1');
// btn_phanhoi.addEventListener('click', () => {
//   alert('Phản ánh tiêm chủng thành công!');
// })