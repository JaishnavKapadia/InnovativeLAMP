 const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');
	  const about_us = document.querySelector('#about_us');
	  const camps = document.querySelector('#camps');
	  const vido = document.querySelector('#vido');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
		about_us.classList.toggle('active');
		camps.classList.toggle('active');
		vido.classList.toggle('active');
})



var vid = document.getElementById("myVideo");
vid.playbackRate = 0.75;