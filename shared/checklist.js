function fillRRChecklist(charactersList) {
  const charactersContainerElement = document.querySelector(
    ".characters-checklist"
  );

  charactersList.forEach(character => {
    const characterHtmlElement = document.createElement("span");
    characterHtmlElement.classList = "disabled pictures";
    characterHtmlElement.id = `f${character.id}`;

    const characterImgElement = document.createElement("img");
    characterImgElement.src = character.pictureUrl;

    characterHtmlElement.appendChild(characterImgElement);

    charactersContainerElement.appendChild(characterHtmlElement);
  });
}