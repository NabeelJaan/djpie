// Navigation toggle

window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('!translate-x-0');
            document.body.classList.toggle('overflow-hidden');
            document.querySelector('#primary-menu-toggle .bar').classList.toggle('animate');
      });

});
