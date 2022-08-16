import randomName from './randomName.js';

const arr = [
  'Théo',
  'Quentin',
  'Louis',
  'Jeffrey',
  'Alexandra',
  'Simon',
  'Jaafar',
  'Valentin',
];

const randomButton = document.querySelector('.randomlink');

randomButton.addEventListener('click', function () {
  const name = randomName(arr);
  const element = document.getElementById(name);

  // thx https://plainjs.com/javascript/styles/get-the-position-of-an-element-relative-to-the-document-24/
  function offset(el) {
    const rect = el.getBoundingClientRect();
    const scrollLeft =
      window.pageXOffset || document.documentElement.scrollLeft;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft };
  }

  const elementOffset = offset(element);

  window.scrollTo(elementOffset.left, elementOffset.top - 110);
});

randomButton.addEventListener('mouseover', function () {
  randomButton.style.cursor = 'pointer';
});
