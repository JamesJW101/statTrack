
    var element = document.getElementById('menu');
   var trigger = document.getElementById('toggle'); //triggers the toggle

   trigger.addEventListener('click', function(e) {
       e.preventDefault();
       element.classList.toggle('showing'); // active class sets max-height to 20
   });
