function replaceOrbsColors(chosenSection = ".fiche-table") {
  $(chosenSection).each((index) => {});

  let $section = $(chosenSection).html();

  const orbs = [
    {
      name: "STR",
      color: $STR,
    },
    {
      name: "DEX",
      color: $DEX,
    },
    {
      name: "QCK",
      color: $QCK,
    },
    {
      name: "PSY",
      color: $PSY,
    },
    {
      name: "INT",
      color: $INT,
    },
    {
      name: "BLK",
      color: "darkslateblue",
    },
    {
      name: "TND",
      color: "peru",
    },
    {
      name: "RCV",
      color: "#BC5C0C",
    },
    {
      name: "SEMLA",
      color: "saddlebrown",
    },
    {
      name: "BOMB",
      color: "maroon",
    },
    {
      name: "BOMB+",
      color: "#FF6500",
    },
    {
      name: "EMP",
      color: "#777",
    },
    {
      name: "WA",
      color: "#B10000",
    },
    {
      name: "G",
      color: "orange",
    },
    {
      name: "POISON",
      color: "#A83CCC",
    },
    {
      name: "PAILLE",
      color: "#FEE347",
    },
  ];

  if ($section) {
    orbs.forEach((orb) => {
      const regex = new RegExp(escapeRegExp(`[${orb.name}]`), "gi");

      $section = $section.replace(
        regex,
        `<strong style="color: ${orb.color};">[${orb.name}]</strong>`
      );
    });

    $(chosenSection).html($section);
  }
}

function replaceTypesColors(chosenSection = ".fiche-table") {
  let $section = $(chosenSection).html();

  const types = [
    {
      name: "STR",
      color: $STR,
    },
    {
      name: "DEX",
      color: $DEX,
    },
    {
      name: "QCK",
      color: $QCK,
    },
    {
      name: "PSY",
      color: $PSY,
    },
    {
      name: "INT",
      color: $INT,
    },
  ];

  if ($section) {
    types.forEach((type) => {
      const regex1 = new RegExp(escapeRegExp(`${type.name} `), "gi");

      $section = $section.replace(
        regex1,
        `<strong style="color: ${type.color};">${type.name} </strong>`
      );

      const regex2 = new RegExp(escapeRegExp(` ${type.name}.`), "gi");

      $section = $section.replace(
        regex2,
        `<strong style="color: ${type.color};"> ${type.name}.</strong>`
      );

      const regex3 = new RegExp(escapeRegExp(` ${type.name}<`), "gi");

      $section = $section.replace(
        regex3,
        `<strong style="color: ${type.color};"> ${type.name}</strong><`
      );

      const regex5 = new RegExp(escapeRegExp(` ${type.name},`), "gi");

      $section = $section.replace(
        regex5,
        `<strong style="color: ${type.color};"> ${type.name}</strong>,`
      );

      const regex4 = new RegExp(
        escapeRegExp(`<strong>${type.name}</strong>`),
        "gi"
      );

      $section = $section.replace(
        regex4,
        `<strong style="color: ${type.color};">${type.name}</strong>`
      );
    });

    $(chosenSection).html($section);
  }
}

function addIconsToClasses(chosenSection = ".fiche-table") {
  const classes = [
    {
      name: "Ravageur",
      icon: "https://i.imgur.com/97ymskP.png",
    },
    {
      name: "Tenace",
      icon: "https://i.imgur.com/EA0ZMlX.png",
    },
    {
      name: "Cogneur",
      icon: "https://i.imgur.com/Bb886qJ.png",
    },
    {
      name: "Intellectuel",
      icon: "https://i.imgur.com/LsINwdq.png",
    },
    {
      name: "Libre",
      icon: "https://i.imgur.com/zVl1bkZ.png",
    },
    {
      name: "Tireur",
      icon: "https://i.imgur.com/EgrFZDY.png",
    },
    {
      name: "Sabreur",
      icon: "https://i.imgur.com/NPdyphi.png",
    },
    {
      name: "Ambitieux",
      icon: "https://i.imgur.com/KD5mQrh.png",
    },
  ];

  $(`${chosenSection} .character-classes`).each((index) => {
    let $section = $($(`${chosenSection} .character-classes`)[index]).html();

    classes.forEach((characterClass) => {
      const regex1 = new RegExp(escapeRegExp(`${characterClass.name}`), "gi");

      $section = $section.replace(
        regex1,
        `<img style="vertical-align: bottom;" src="${characterClass.icon}" width="20" height="20" /> ${characterClass.name}`
      );
    });

    $($(`${chosenSection} .character-classes`)[index]).html($section);
  });
}

function escapeRegExp(text) {
  return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
}

jQuery(function () {
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $("#scrollUp").css("right");
      } else {
        $("#scrollUp").removeAttr("style");
      }
    });
  });
});


document.querySelectorAll('.fiche-choices input').forEach(inputElement => {
  inputElement.addEventListener('change', () => {
    const displayLlb = document.querySelector('.fiche-choices input[name="llb"]').checked;
    const displayLbPlus = document.querySelector('.fiche-choices input[name="lbplus"]').checked;

    let displayValue = "classic-ability";

    if(displayLlb && displayLbPlus) {
      displayValue = 'llb-lbplus-ability';
    } else if(displayLlb && !displayLbPlus) {
      displayValue = 'llb-ability';
    } else if(displayLbPlus && !displayLlb) {
      displayValue = 'lbplus-ability';
    }

    document.querySelectorAll('.classic-ability').forEach(element => {
      element.style.display = 'none';
    });
    document.querySelectorAll('.llb-ability').forEach(element => {
      element.style.display = 'none';
    });
    document.querySelectorAll('.lbplus-ability').forEach(element => {
      element.style.display = 'none';
    });
    document.querySelectorAll('.llb-lbplus-ability').forEach(element => {
      element.style.display = 'none';
    });

    console.log('displayValue', displayValue);

    document.querySelectorAll(`.${displayValue}`).forEach(element => {
      element.style.display = 'table-row';
    });
  });
});
