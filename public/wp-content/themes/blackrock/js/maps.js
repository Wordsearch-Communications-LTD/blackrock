class AreaMap {
    
    constructor() {
        this.mapSection = document.querySelector('.map');
        this.mapLayers = this.mapSection.querySelectorAll('.map-layer');
        this.mapLayerButtons = this.mapSection.querySelectorAll('.map-layers-nav .toggle');

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