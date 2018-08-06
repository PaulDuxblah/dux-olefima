(() => {
  var skills = document.getElementsByClassName('skills')[0];
  var nav = skills.getElementsByClassName('nav')[0];
  var tabs = nav.getElementsByClassName('tab');

  Array.from(tabs).forEach(function(tab) {
    tab.addEventListener('click', function() {
      Array.from(skills.getElementsByClassName('skill')).forEach(function(skill) {
        skill.style.display = 'none';
      });
      skills.getElementsByClassName('skill').namedItem(tab.id.substring(4)).style.display = 'flex';
    });
  });
})();
