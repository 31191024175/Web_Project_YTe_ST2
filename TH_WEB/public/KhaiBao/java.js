
// nút cuộn lên đầu trang.
 
   //Khi người dùng cuộn chuột thì gọi hàm scrollFunction
   window.onscroll = function() {scrollFunction()};
   // khai báo hàm scrollFunction
   function scrollFunction() {
       // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
       if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
           //nếu lớn hơn 20px thì hiện button
           document.getElementById("myBtn").style.display = "block";
       } else {
            //nếu nhỏ hơn 20px thì ẩn button
           document.getElementById("myBtn").style.display = "none";
       }
   }
   //gán sự kiện click cho button
   document.getElementById('myBtn').addEventListener("click", function(){
       //Nếu button được click thì nhảy về đầu trang
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
   });
// của header footer

 

// nút scroll đến form
let btn_KBYT = document.querySelector('.link-btn');
let form = document.querySelector('.bodyweb');

btn_KBYT.addEventListener('click',function(){
form.scrollIntoView(true);

})
// responsive thanh menu đầu trang
let menu = document.querySelector('#menu-bar');
let nav = document.querySelector('.nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    nav.classList.toggle('active');
}