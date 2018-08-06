(() => {
  var skills = document.getElementsByClassName('skills')[0];
  var skillList = skills.getElementsByClassName('skill');
  skillList.namedItem('passive').classList.add('flex');

  Array.from(skills.getElementsByClassName('nav')[0].getElementsByClassName('tab'))
  .forEach(function(tab) {
    tab.addEventListener('click', function() {
      Array.from(skillList).forEach(function(skill) {
        skill.classList.remove('flex');
      });
      skillList.namedItem(tab.id.substring(4)).classList.add('flex');
    });
  });
})();
