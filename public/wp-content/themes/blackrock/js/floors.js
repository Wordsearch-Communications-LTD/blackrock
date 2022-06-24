class Floors {
    constructor() {
        this.floorToggle = document.querySelectorAll('.floor-toggle button')[0];
        this.floorList = document.querySelectorAll('.floor-list');
        this.floorToggle = false;
    }

    setEventListener() {
        this.floorToggle.addEventListener('click', e => {
            e.preventDefault();

            console.log(this.floorList.querySelectorAll('.floor-occupied'));

            for(let floor of this.floorList.querySelectorAll('.floor-occupied')){
                floor.classList.add('hidden');
            }
        });
    }

    toggleFloors(){

    }
}

let floors = new Floors();