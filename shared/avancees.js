function generateAvanceeList(charactersList, whichList = 'legends') {
  const charactersContainerElement = document.querySelector(
    ".characters-container"
  );

  charactersList.forEach((character) => {
    const characterHtmlElement = document.createElement("div");
    characterHtmlElement.className = "characters";

    let keyLbPictureUrl;

    switch(whichList) {
      case "legends": keyLbPictureUrl = "https://i.imgur.com/sdYFrmz.png"; break;
      case "rrs": keyLbPictureUrl = "https://i.imgur.com/5dWfTra.png"; break;
      case "tms": keyLbPictureUrl = "https://i.imgur.com/qQl7YXh.png"; break;
      default: keyLbPictureUrl = ""; break;
    }

    const characterElements = {
      characterIcon: {
        pictureUrl: character.imgUrl,
        id: "A",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fA.png",
      },
      characterMaxSpecial: {
        pictureUrl: "https://imgur.com/76MHSCn.png",
        id: "SKILL",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fSKILL.png",
      },
      characterMaxSockets: {
        pictureUrl: "https://imgur.com/BahT39m.png",
        id: "SOCKET",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fSOCKET.png",
      },
      characterIconMaxCC: {
        pictureUrl: "https://i.imgur.com/GhoX8pM.png",
        id: "CC",
        imgUrl:
          "https://i.imgur.com/GhoX8pM.png",
      },
      characterIconMaxLB: {
        pictureUrl: "https://imgur.com/LNddvdE.png",
        id: "LB",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fLB.png",
      },
      characterIconRainbow: {
        pictureUrl: "https://imgur.com/ACQBSqv.png",
        id: "POT",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fPOT.png",
      },
      characterIconKeyLB: {
        pictureUrl: keyLbPictureUrl,
        id: "KEY",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fKEY.png",
      },
      characterIconMaxSupport: {
        pictureUrl: "https://imgur.com/g8Fdgu6.png",
        id: "ES",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fES.png",
      },
      characterIconLvlLB: {
        pictureUrl: "https://imgur.com/QsXQ2kL.png",
        id: "LVLLB",
        imgUrl:
          "https://imgur.com/QsXQ2kL.png",
      },
    };

    Object.keys(characterElements).forEach((key) => {

      const displayIcon = (key !== "characterIconKeyLB" && key !== "characterIconMaxSupport" && key !== "characterIconMaxLB" && key !== "characterIconRainbow") ||
        (key === "characterIconKeyLB" && character.hasKeyLb) ||
        (key === "characterIconMaxLB" && character.hasLb) ||
        (key === "characterIconRainbow" && character.hasLb) ||
        (key === "characterIconMaxSupport" && character.hasSupport)
      ;

      if(key === 'characterIconLvlLB') {
        const characterSliderContainerElement = document.createElement("div");
        characterSliderContainerElement.classList = "slider-element disabled";
        characterSliderContainerElement.id = `f${character.id}${characterElements[key].id}`;

        const characterSliderElement = document.createElement("round-slider");
        characterSliderElement.min = 0;
        characterSliderElement.max = 9;
        characterSliderElement.value = localStorage.getItem(`f${character.id}${characterElements[key].id}`) ?
        Number(localStorage.getItem(`f${character.id}${characterElements[key].id}`))
        : 0;

        const characterSliderValueElement = document.createElement("div");
        characterSliderValueElement.textContent = localStorage.getItem(`f${character.id}${characterElements[key].id}`) ?
        localStorage.getItem(`f${character.id}${characterElements[key].id}`).toString()
        : "0";
        characterSliderValueElement.className = "slider-value";

        characterSliderContainerElement.appendChild(characterSliderElement);
        characterSliderContainerElement.appendChild(characterSliderValueElement);
        characterHtmlElement.appendChild(characterSliderContainerElement);

      } else if (displayIcon) {
        const characterSpanElement = document.createElement("span");
        const characterImgElement = document.createElement("img");

        characterImgElement.src = characterElements[key].pictureUrl;

        characterSpanElement.id = `f${character.id}${characterElements[key].id}`;
        characterSpanElement.classList = "disabled pictures";

        characterSpanElement.appendChild(characterImgElement);
        characterHtmlElement.appendChild(characterSpanElement);
      }
    });

    charactersContainerElement.appendChild(characterHtmlElement);
  });
}

function addAvanceeCategoryTitle(title) {
  const charactersContainerElement = document.querySelector(
    ".characters-container"
  );
  const rewardsCharactersTitle = document.createElement("h2");
  rewardsCharactersTitle.textContent = title;
  charactersContainerElement.appendChild(rewardsCharactersTitle);
}


function updateCharactersDupes(charName) {
  document.querySelectorAll("round-slider").forEach(function (el) {
    const value = Number(
      el.parentNode.querySelector(".slider-value").textContent
    );

    if (value > 1) {
      el.parentNode.classList = "slider-element";
    } else {
      el.parentNode.classList = "slider-element disabled";
    }

    el.addEventListener("value-changed", function (ev) {
      if (ev.detail.value !== undefined) {
        el.parentNode.querySelector(".slider-value").textContent =
          ev.detail.value;

        if (ev.detail.value > 1) {
          el.parentNode.classList = "slider-element";
        } else {
          el.parentNode.classList = "slider-element disabled";
        }

        localStorage.setItem(el.parentNode.id, ev.detail.value.toString());

        countMaxLlbCharacters(charName);
      }
    });

    el.addEventListener("value-changing", function (ev) {
      if (ev.detail.value !== undefined) {
        el.parentNode.querySelector(".slider-value").textContent =
          ev.detail.value;
      }
    });
  });

  countMaxLlbCharacters(charName);
}

function countMaxLlbCharacters(charName) {
  const charactersDupesCount = {
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0,
    7: 0,
    8: 0,
    9: 0,
  };

  document.querySelectorAll("round-slider").forEach(function (el) {
    const value = Number(
      el.parentNode.querySelector(".slider-value").textContent
    );

    if (value === 1) {
      charactersDupesCount[1] = charactersDupesCount[1] + 1;
    }

    if (value === 2) {
      charactersDupesCount[2] = charactersDupesCount[2] + 1;
    }

    if (value === 3) {
      charactersDupesCount[3] = charactersDupesCount[3] + 1;
    }

    if (value === 4) {
      charactersDupesCount[4] = charactersDupesCount[4] + 1;
    }

    if (value === 5) {
      charactersDupesCount[5] = charactersDupesCount[5] + 1;
    }

    if (value === 6) {
      charactersDupesCount[6] = charactersDupesCount[6] + 1;
    }

    if (value === 7) {
      charactersDupesCount[7] = charactersDupesCount[7] + 1;
    }

    if (value === 8) {
      charactersDupesCount[8] = charactersDupesCount[8] + 1;
    }

    if (value === 9) {
      charactersDupesCount[9] = charactersDupesCount[9] + 1;
    }
  });

  document.querySelector(
    "#lvl1LlbCharacters"
  ).textContent = `1 dupe = ${charactersDupesCount[1]} ${charName}`;

  document.querySelector(
    "#lvl2LlbCharacters"
  ).textContent = `2 dupes = ${charactersDupesCount[2]} ${charName}`;

  document.querySelector(
    "#lvl3LlbCharacters"
  ).textContent = `3 dupes = ${charactersDupesCount[3]} ${charName}`;

  document.querySelector(
    "#lvl4LlbCharacters"
  ).textContent = `4 dupes = ${charactersDupesCount[4]} ${charName}`;

  document.querySelector(
    "#lvl5LlbCharacters"
  ).textContent = `5 dupes = ${charactersDupesCount[5]} ${charName}`;

  document.querySelector(
    "#lvl6LlbCharacters"
  ).textContent = `6 dupes = ${charactersDupesCount[6]} ${charName}`;

  document.querySelector(
    "#lvl7LlbCharacters"
  ).textContent = `7 dupes = ${charactersDupesCount[7]} ${charName}`;

  document.querySelector(
    "#lvl8LlbCharacters"
  ).textContent = `8 dupes = ${charactersDupesCount[8]} ${charName}`;

  document.querySelector(
    "#maxLlbCharacters"
  ).textContent = `LLB max : ${charactersDupesCount[9]} ${charName}`;
}