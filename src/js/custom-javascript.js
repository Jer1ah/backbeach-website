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


// removing default button functionality
const buttonController = (function() {

    const _buttonList = document.querySelectorAll('a');
    const _formButtonList = document.querySelectorAll('input');

    for(let i = 0; i < _buttonList.length; i++) {
        _buttonList[i].addEventListener('click', (event) => {
            event.preventDefault();
        });
    }

    for(let i = 0; i < _formButtonList.length; i++) {
        _formButtonList[i].addEventListener('click', (event) => {
            event.preventDefault();
        });
    }

}());