// jQuery(document).ready(function($) { 
//     $('.disabled').click(function () {
//         $(this).each(function(){
//             var classes = ['disabled','enabled'];
//             this.className = classes[($.inArray(this.className, classes)+1)%classes.length];
//         });
//     });

//     function createCookie(name,disabled,days) {
//     if (days) {
//         var date = new Date();
//         date.setTime(date.getTime()+(days * 365));// Sans date d'expiration il disparaît à la fin de la session(normalement), ce qui est pas mal aussi
//         var expires = "; expires="+date.toGMTString();
//     }

//     function setCookie(name,value,days) {
//         var date = new Date();
//         date.setTime(date.getTime()+(days * 365));// Sans date d'expiration il disparaît à la fin de la session(normalement), ce qui est pas mal aussi
//         document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
//     }
  
//     function getCookie(name){
//         let data=RegExp(name+"[^;]+").exec(document.cookie);
//         return decodeURIComponent(!!data?data.toString().replace(/^[^=]+./,""):"");
//     }
    
//     let img = $('img');  
//     for(let i=0;i<img.length;i++){
//       if(getCookie('spanD'+i)==='1'){// Teste cookie spanD+Number
//         img[i].parentElement.className='enabled';// Met la classe du parent de l'image à disabled
//       }else{
//         img[i].parentElement.className='disabled';// Met la classe du parent de l'image à enabled
//       }

//       img[i].click(function(e){
//               if(getCookie('spanD'+i)==='1'){// Teste cookie spanD+Number
//                   img[i].parentElement.className='enabled';// Met la classe du parent de l'image à disabled
//                    setCookie('spanD'+i,0);
//               }else{
//                   img[i].parentElement.className='disabled';// Met la classe du parent de l'image à enabled
//                   setCookie('spanD'+i,1);// Création du cookie spanD+Number=1
//               }
//       });
//     }
//   }
// });

function updateStorage(key, value, save) {
  if (save) {
    localStorage.setItem(key, value);
  }
  else {
    localStorage.removeItem(key);
  }
}
 
function readStorage(key) {
  return localStorage.getItem(key);
}
 
function readAllStorage() {
  const nbItem = localStorage.length;
  const store = [];
  let i;
  let storeKey;
  for (i = 0; i < nbItem; i += 1) {
    storeKey = localStorage.key(i);
    store.push({
      "key" : storeKey,
      "value": readStorage(storeKey)
    });
  }
  // retourne un Arrray d'Object
  return store;
}

function updatePage() {
  // lecture du storage
  const store = readAllStorage();
  // restaure la classe selected
  $.each(store, function(index, elem) {
    $("#" + elem.key).addClass("selected");
  });
}

function resetPage() {
  // lecture du storage
  const store = readAllStorage();
  // supprime la classe selected
  $.each(store, function(index, elem) {
    $("#" + elem.key).removeClass("selected");
  });
  // vide le localStorage
  localStorage.clear();
}

jQuery(document).ready(function($) {
  // restaure état précédent
  updatePage();
 
  // Attention ne pas cibler uniquement la classe selected
  $(".characters span").on("click", function() {
    // objet jQuery en cours
    const $obj = $(this);
    // on bascule la classe selected
    $obj.toggleClass("selected");
    // si classe selected présente c'est que l'on sauvegarde
    const save = $obj.hasClass("selected");
    // on sauve/supprime la key
    updateStorage($obj.attr("id"), $obj.find("img").attr("src"), save);
  });
 
  // bouton annulation éventuel
  $("#clearStore").on("click", function() {
    resetPage();
  });
});