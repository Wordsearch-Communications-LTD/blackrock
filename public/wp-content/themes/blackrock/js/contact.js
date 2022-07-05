class Contact {
    constructor() {
        this.closeContactButton = document.getElementById('close-contact');
        this.toggleContactButton = document.querySelector('.toggle-contact');
        this.contactOpen = false;
        this.setEventListeners()
    }
    
    updateContact(){
        if(this.contactOpen) {
            document.querySelector('html').classList.add('contact-open');
            //this.contactOpen = true;
        } 
        else {
            document.querySelector('html').classList.remove('contact-open');
            //this.contactOpen = false;
        }    
    }
    setEventListeners(){
        this.closeContactButton.addEventListener('click', (e) => {
            this.contactOpen = false;
            this.updateContact();
            e.preventDefault();
        });

        this.toggleContactButton.addEventListener('click', (e) => {
            this.contactOpen = true;
            this.updateContact();
            e.preventDefault();
        });
    }
}

let contact = new Contact();