class AreaMap {
    
    constructor() {
        this.mapSection = document.querySelector('.map');
        this.scrollable = document.querySelector('.maps');
        this.mapLayers = this.mapSection.querySelectorAll('.map-layer');
        this.mapLayerButtons = this.mapSection.querySelectorAll('.map-layers-nav .toggle');
        this.centerScrollableArea();
        this.setEventListeners();
    }

    setEventListeners() {
    
        for(let button of this.mapLayerButtons){
            button.addEventListener('click', e =>{
                e.preventDefault();
                this.hideAllLayers();
                this.showLayer(button.dataset.layerIndex);
                button.classList.add('active');
            })
        }

        this.scrollable.addEventListener('touchstart', e => {
            this.scrollable.classList.add('touched');
        });
    }

    centerScrollableArea(){
        let scrollRect = this.scrollable.getBoundingClientRect();
        let image = document.querySelectorAll('#main-map img')[0];
        let imageRect = image.getBoundingClientRect();
        let top = ((imageRect.height - scrollRect.height) / 2);
        let left = ((imageRect.width - scrollRect.width) / 2 );
        let scrollPrompt = document.querySelector('.scroll-map-info');
        let scrollPromtRect = scrollPrompt.getBoundingClientRect();

        this.scrollable.scroll(left,top);
        scrollPrompt.style.left = ((imageRect.width / 2) - 100) + 'px';
        scrollPrompt.style.top = ((imageRect.height / 2) - 50) + 'px';

        


    }

    showLayer(id) {

        for(let layer of this.mapLayers){
            if(layer.dataset.layerIndex === id){
                layer.classList.add('show');
            }
        }
    }

    hideAllLayers(){

        for(let layer of this.mapLayers){
            layer.classList.remove('show');
        }

        for(let button of this.mapLayerButtons){
            button.classList.remove('active');
        }
    }
}

if(document.querySelector('.map')){
    let areamap = new AreaMap();
}