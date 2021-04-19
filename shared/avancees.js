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
      characterMaxLevel: {
        pictureUrl: "https://imgur.com/QsXQ2kL.png",
        id: "MAX",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fMAX.png",
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
      characterIconMaxCCHP: {
        pictureUrl: "https://i.imgur.com/pqdrdu0.png",
        id: "HP",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fHP.png",
      },
      characterIconMaxCCATK: {
        pictureUrl: "https://i.imgur.com/UAK0erl.png",
        id: "ATK",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fATK.png",
      },
      characterIconMaxCCRCV: {
        pictureUrl: "https://i.imgur.com/3rglFwY.png",
        id: "RCV",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fRCV.png",
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
      characterIconMaxSupport: {
        pictureUrl: "https://imgur.com/g8Fdgu6.png",
        id: "ES",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fES.png",
      },
      characterIconKeyLB: {
        pictureUrl: keyLbPictureUrl,
        id: "KEY",
        imgUrl:
          "https://onepiece-treasurecruise.com/en/wp-content/uploads/sites/2/fKEY.png",
      },
    };

    Object.keys(characterElements).forEach((key) => {

      console.log('character.hasLb', character.hasLb)

      const displayIcon = (key !== "characterIconKeyLB" && key !== "characterIconMaxSupport" && key !== "characterIconMaxLB" && key !== "characterIconRainbow") ||
        (key === "characterIconKeyLB" && character.hasKeyLb) ||
        (key === "characterIconMaxLB" && character.hasLb) ||
        (key === "characterIconRainbow" && character.hasLb) ||
        (key === "characterIconMaxSupport" && character.hasSupport)
      ;

      if (displayIcon) {
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
