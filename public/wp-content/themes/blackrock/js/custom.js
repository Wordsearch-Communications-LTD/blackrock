let closeContactButton = document.getElementById('close-contact');
let toggleContactButton = document.querySelector('.toggle-contact');
let contactOpen = false;

function updateContact(){
    if(contactOpen) {
        document.querySelector('html').classList.add('contact-open');
    } 
    else {
        document.querySelector('html').classList.remove('contact-open');
    }    
}

closeContactButton.addEventListener('click', (e) => {
    contactOpen = false;
    updateContact(contactOpen);
    e.preventDefault();
});

toggleContactButton.addEventListener('click', (e) => {
    contactOpen = true;
    updateContact(contactOpen);
    e.preventDefault();
});