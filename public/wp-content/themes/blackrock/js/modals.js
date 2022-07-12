class Modals {
    constructor(){
        this.modalContainer = document.getElementById('modal-popup');
        this.modalList = document.querySelectorAll('.image-expand .image');
        this.scrollpos = 0;
        this.setEventListeners();
    }

    setEventListeners(){
        let close = this.modalContainer.querySelector('button.close');

        close.addEventListener("click", e => {
            e.preventDefault();
            
            window.scrollTo({
                top: this.scrollpos,
                left: 0
            });
            document.body.style.overflow = 'auto';
            document.body.style.overflowX = 'hidden';

            this.modalContainer.classList.remove('visible');
        });

        this.modalList.forEach(modal => {
            
            modal.addEventListener('click', e => {
                e.preventDefault();
                this.scrollpos = window.scrollY;
                this.modalContainer.classList.add('visible');
                
                let image = modal.querySelectorAll('.image img')[0];
                let imgElement = this.modalContainer.getElementsByTagName('img')[0];
                
                if(image){
                    let caption = modal.parentNode.querySelector('.caption').cloneNode(true);
                    let originalCaption = this.modalContainer.querySelector('.image-container .caption');
                    
                    if(originalCaption){
                        originalCaption.remove();
                    }

                    imgElement.setAttribute("src", image.dataset.original);
                    
                    this.modalContainer.querySelector('.image-container').append(caption);
                    
                    document.body.style.overflow = 'hidden';
                }
            });
        });
    }
}


// const modals = document.querySelectorAll('.image-expand .image');

let modals = new Modals();
