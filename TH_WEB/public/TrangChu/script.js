let menu = document.querySelector('#menu-bar');
let nav = document.querySelector('.nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    nav.classList.toggle('active');
}
function update() {
  var select = document.getElementById('form_selected').value;
  // var option = select.options[select.selectedIndex];

  fetch('https://static.pipezero.com/covid/data.json')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data); //xem data lay len tu api la gi: console.log()
    document.getElementById("thanhpho").innerHTML = data.locations[select].name.toLocaleString();
    document.getElementById("duongtinh").innerHTML = data.locations[select].casesToday.toLocaleString();
    document.getElementById("camac").innerHTML = data.locations[select].cases.toLocaleString();
    document.getElementById("tuvong").innerHTML = data.locations[select].death.toLocaleString();
    document.getElementById("chuakhoi").innerHTML = data.locations[select].recovered.toLocaleString();
  });
}

update();
// let section = document.querySelectorAll('section');
// let navLinks = document.querySelectorAll('header .nav a');

// window.onscroll = () =>{

//     menu.classList.remove('fa-times');
//     nav.classList.remove('active');

//     section.forEach(sec =>{

//         let top = window.scrollY;
//         let height = sec.offsetHeight;
//         let offset = sec.offsetTop - 150;
//         let id = sec.getAttribute('id');

//         if(top >= offset && top < offset + height){
//             navLinks.forEach(links =>{
//                 links.classList.remove('active');
//                 document.querySelector('header .nav a[href*='+id+']').classList.add('active');
//             });
//         };
//     });

// }
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
})