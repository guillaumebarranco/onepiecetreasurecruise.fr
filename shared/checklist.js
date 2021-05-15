function fillRRChecklist(language = 'fr') {

  const charactersContainerElement = document.querySelector(
    ".characters-checklist"
  );

  allRareRecruitCharactersList.forEach(category => {

    const categoryHtmlElement = document.createElement("div");
    categoryHtmlElement.className = 'characters-category';
    const categoryContentElement = document.createElement("div");
    const categoryTitleElement = document.createElement("h2");
    categoryTitleElement.textContent = category[language+'Name'];

    categoryHtmlElement.appendChild(categoryTitleElement);

    category.sections.forEach(section => {
      const sectionHtmlElement = document.createElement("div");

      const sectionTitleElement = document.createElement("h3");
      sectionTitleElement.textContent = section[language+'Name'];

      sectionHtmlElement.appendChild(sectionTitleElement);

      section.characters.forEach(characterBloc => {
        const sectionContentElement = document.createElement("div");
        sectionContentElement.className = 'characters';

        characterBloc.forEach(character => {

          if(!character.isSixPlus) {
            const characterHtmlElement = document.createElement("span");
            characterHtmlElement.classList = "disabled pictures";
            characterHtmlElement.id = `f${character.id}`;

            if(character.jpnOnly) {
              characterHtmlElement.lang = 'jp';
            }

            if(character.glbOnly) {
              characterHtmlElement.lang = 'en';
            }

            const characterImgElement = document.createElement("img");
            characterImgElement.src = character.imgUrl;
            characterImgElement.width = 56;

            characterHtmlElement.appendChild(characterImgElement);

            sectionContentElement.appendChild(characterHtmlElement);
          }
        });

        sectionHtmlElement.appendChild(sectionContentElement);
      });

      categoryContentElement.appendChild(sectionHtmlElement);
    });

    categoryHtmlElement.appendChild(categoryContentElement);

    charactersContainerElement.appendChild(categoryHtmlElement);
  });
}
