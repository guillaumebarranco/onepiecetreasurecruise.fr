setTimeout(() => {
  replaceOrbsColors();
  replaceTypesColors();
}, 100);

function replaceOrbsColors(chosenSection = '.fiche-table') {
  let $section = $(chosenSection).html();

  const orbs = [
    {
      name: 'STR',
      color: '#DC241C',
    },
    {
      name: 'DEX',
      color: '#1CAC24',
    },
    {
      name: 'QCK',
      color: '#4C4CFF',
    },
    {
      name: 'PSY',
      color: '#ECAC04',
    },
    {
      name: 'INT',
      color: '#A916B6',
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
      color: '#DC241C',
    },
    {
      name: 'DEX',
      color: '#1CAC24',
    },
    {
      name: 'QCK',
      color: '#4C4CFF',
    },
    {
      name: 'PSY',
      color: '#ECAC04',
    },
    {
      name: 'INT',
      color: '#A916B6',
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

      const regex4 = new RegExp(escapeRegExp(`<strong>${type.name}</strong>`), 'gi');

      $section = $section.replace(
        regex4,
        `<strong style="color: ${type.color};">${type.name}</strong>`
      );
    });

    $(chosenSection).html($section);
  }
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
