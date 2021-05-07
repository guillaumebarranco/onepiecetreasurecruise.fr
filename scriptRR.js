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