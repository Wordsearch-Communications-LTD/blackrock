class Floors {
    constructor() {
        this.floorToggle = document.getElementById('floor-toggle');
        this.floorList = document.querySelector('.floor-list');
        this.units = document.querySelectorAll('.floor-available .unit.available');
        this.expandedFloors = document.querySelectorAll('.floor-available.expanded');
        this.closeUnit = document.querySelectorAll('.floor-available .close-unit');

        this.setEventListeners();
    }

    setEventListeners() {
        this.floorToggle.addEventListener('click', e => {
            e.preventDefault();
            this.floorList.classList.toggle('hide-occupied');
        });

        this.units.forEach(unit => {
            unit.addEventListener('click', e => {
                e.preventDefault();
                this.minimiseFloors();
                unit.parentNode.classList.add('expanded');
                unit.classList.add('selected');
            });
        });

        this.closeUnit.forEach(close => {
            close.addEventListener('click', e => {
                e.preventDefault();
                e.stopPropagation();
                this.minimiseFloors();
                console.log('close');
            });
        });
    }

    minimiseFloors(){
        this.expandedFloors = document.querySelectorAll('.floor-available.expanded');
        
        this.units.forEach(unit => {
            unit.classList.remove('selected');
        });
        
        this.expandedFloors.forEach(floor => {
            console.log(floor);
            floor.classList.remove('expanded');
        });
    }
}



let floors = new Floors();