// Add your JS customizations here
const mobileNavController = (function() {

    const _mobileNavButton = document.querySelector('.mobile-nav__menu');
    const _phoneNumber = document.querySelector('.mobile-nav__phone');
    const _dropDown = document.querySelector('.mobile-nav__dropdown');
    const _menuIcon = document.querySelector('.mobile-nav__menu .fa');

    _mobileNavButton.addEventListener('click', (event) => {
        event.preventDefault();

        if(window.getComputedStyle(_dropDown).display === 'none') {
            _phoneNumber.style.display = "none";
            _dropDown.style.display = "inline-block";
            _menuIcon.style.color = "black";
        } else {
            _phoneNumber.style.display = "flex";
            _dropDown.style.display = "none";
            _menuIcon.style.color = "#F47756";
        }
    });
    
}());