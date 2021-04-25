function replaceOrbsColors(chosenSection = '.fiche-table') {

  $(chosenSection).each((index) => {
  });

  let $section = $(chosenSection).html();

  const orbs = [
    {
      name: 'STR',
      color: $STR,
    },
    {
      name: 'DEX',
      color: $DEX,
    },
    {
      name: 'QCK',
      color: $QCK,
    },
    {
      name: 'PSY',
      color: $PSY,
    },
    {
      name: 'INT',
      color: $INT,
    },
    {
      name: 'BLK',
      color: 'darkslateblue',
    },
    {
      name: 'TND',
      color: 'peru',
    },
    {
      name: 'RCV',
      color: '#BC5C0C',
    },
    {
      name: 'BOMB',
      color: 'maroon',
    },
    {
      name: 'EMP',
      color: '#777',
    },
  ];

  if ($section) {
    orbs.forEach(orb => {
      const regex = new RegExp(escapeRegExp(`[${orb.name}]`), 'gi');

      $section = $section.replace(
        regex,
        `<strong style="color: ${orb.color};">[${orb.name}]</strong>`
      );
    });

    $(chosenSection).html($section);
  }
}

function replaceTypesColors(chosenSection = '.fiche-table') {
  let $section = $(chosenSection).html();

  const types = [
    {
      name: 'STR',
      color: $STR,
    },
    {
      name: 'DEX',
      color: $DEX,
    },
    {
      name: 'QCK',
      color: $QCK,
    },
    {
      name: 'PSY',
      color: $PSY,
    },
    {
      name: 'INT',
      color: $INT,
    },
  ];

  if ($section) {
    types.forEach(type => {
      const regex1 = new RegExp(escapeRegExp(`${type.name} `), 'gi');

      $section = $section.replace(
        regex1,
        `<strong style="color: ${type.color};">${type.name} </strong>`
      );

      const regex2 = new RegExp(escapeRegExp(` ${type.name}.`), 'gi');

      $section = $section.replace(
        regex2,
        `<strong style="color: ${type.color};"> ${type.name}.</strong>`
      );

      const regex3 = new RegExp(escapeRegExp(` ${type.name}<`), 'gi');

      $section = $section.replace(
        regex3,
        `<strong style="color: ${type.color};"> ${type.name}</strong><`
      );

      const regex5 = new RegExp(escapeRegExp(` ${type.name},`), 'gi');

      $section = $section.replace(
        regex5,
        `<strong style="color: ${type.color};"> ${type.name}</strong>,`
      );

      const regex4 = new RegExp(escapeRegExp(`<strong>${type.name}</strong>`), 'gi');

      $section = $section.replace(
        regex4,
        `<strong style="color: ${type.color};">${type.name}</strong>`
      );


    });

    $(chosenSection).html($section);
  }
}

function addIconsToClasses(chosenSection = '.fiche-table') {
  const classes = [
    {
      name: 'Ravageur',
      icon: 'https://i.imgur.com/2aO4RiX.png',
    },
    {
      name: 'Tenace',
      icon: 'https://i.imgur.com/aUz26fE.png',
    },
    {
      name: 'Cogneur',
      icon: 'https://i.imgur.com/MrF9dbp.png',
    },
    {
      name: 'Intellectuel',
      icon: 'https://i.imgur.com/Uw1DT3w.png',
    },
    {
      name: 'Libre',
      icon: 'https://i.imgur.com/fDfi5ff.png',
    },
    {
      name: 'Tireur',
      icon: 'https://i.imgur.com/3m4dfE7.png',
    },
    {
      name: 'Sabreur',
      icon: 'https://i.imgur.com/LgeJ3v7.png',
    },
    {
      name: 'Ambitieux',
      icon: 'https://i.imgur.com/iFDU5wQ.png',
    },
  ];

  $(`${chosenSection} .character-classes`).each((index) => {
    let $section = $($(`${chosenSection} .character-classes`)[index]).html();

    classes.forEach(characterClass => {
      const regex1 = new RegExp(escapeRegExp(`${characterClass.name}`), 'gi');

      $section = $section.replace(
        regex1,
        `<img style="vertical-align: bottom;" src="${characterClass.icon}" /> ${characterClass.name}`
      );
    });

    $($(`${chosenSection} .character-classes`)[index]).html($section);
  });
}

function escapeRegExp(text) {
  return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, '\\$&');
}

jQuery(function(){
  $(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 200 ) {
              $('#scrollUp').css('right');
          } else {
              $('#scrollUp').removeAttr( 'style' );
          }
      });
  });
});
