const numb = document.querySelector("#counter");
let counter = 0;
setInterval(() => {
  if(counter == 35 ){
    clearInterval();
  }else{
    counter+=1;
    numb.textContent = counter + "%";
  }
}, 58);