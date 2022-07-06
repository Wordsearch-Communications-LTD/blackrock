class Contact {
    constructor() {
        this.toggleContactButton = document.querySelector('.toggle-contact');
        this.contactContainer = document.querySelector('.contact-module-container');
        this.contactOpen = false;
        this.setEventListeners()
    }

    setEventListeners(){


        this.toggleContactButton.addEventListener('click', (e) => {
            this.contactOpen = true;
            this.scrollToContact();
            e.preventDefault();
        });
    }

    scrollToContact(){
        let pos = this.contactContainer.getBoundingClientRect();
        window.scrollTo({
            top: pos.top + window.scrollY,
            left: 0,
            behavior: 'smooth'
          });
        
          document.querySelector('.header-menu').classList.remove('menu-open');
    }
}

let contact = new Contact();