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
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}