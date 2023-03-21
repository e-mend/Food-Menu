const shower = document.getElementById("shower");
const modal = document.getElementById("modal_real"); 
const btn = document.getElementById("marca-x");  

function boxChecked2(){
     if(modal.style.display == "inline-block"){
       modal.style.display = "none";
       shower.style.width = "17%";
    }else{
     modal.style.display = "inline-block";
     shower.style.width = "5%";
   }
};

shower.addEventListener("click", boxChecked2, false);
// btn.addEventListener("click", boxChecked2);



const checkBox = document.getElementById("completaa");
const hidden = document.getElementById("incompletaa");

function boxChecked() {
     if(checkBox.checked == true){
       hidden.style.display = "none";
    }else{
     hidden.style.display = "inline-block";
   }
   };

checkBox.addEventListener("click", boxChecked, false);
hidden.addEventListener("click", boxChecked, false);



