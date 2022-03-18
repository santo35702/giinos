const buttons = document.getElementsByClassName('Read-more');

const onButtonClick = (event) => {
  const button = event.target;
  const dataTarget = button.getAttribute('data-target');
  const extraContent = document.getElementById(dataTarget);
  button.innerHTML = button.innerHTML === 'Read Less' ? 'Read More' : 'Read Less';
  extraContent.classList.toggle('Read');
}

const attachingEvent = e => e.addEventListener('click', onButtonClick);

Array.prototype.forEach.call(buttons, attachingEvent);