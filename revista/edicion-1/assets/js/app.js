/*
Inclusión de componentes por Vanilla JS. 
Optimizar para PHP
*/
 //const URL = 'https://3241.com.ar/iusm';
//const PATH = '/iusm/edicion1/'
const URL = window.location.protocol +"//"+ window.location.host +"/revista/edicion-1";
console.log(URL);

fetch(URL + "/components/header.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
   
    document.querySelector("header").innerHTML = data;
  });

  fetch(URL +"/components/footer.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    
    document.querySelector("footer").innerHTML = data;
  });

  fetch(URL +"/components/nav-bar.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    
    document.querySelector("nav").innerHTML = data;
  });

  fetch(URL +"/components/related.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    
    if (document.querySelector("#related")){document.querySelector("#related").innerHTML = data};
  });

  // fetch(URL +"/components/related-milla200.html")
  // .then(response => {
  //   return response.text()
  // })
  // .then(data => {
    
  //   if (document.querySelector("#related-milla")){document.querySelector("#related-milla").innerHTML = data};
  // });

  // /*
  //   VISITED LINKS
  // */

  //   const page = location.pathname.split('/');
  //   console.log(page[1]);
  //   const node = document.querySelectorAll("a[href='hdv-1.html']");
  //  console.log(node);
    


