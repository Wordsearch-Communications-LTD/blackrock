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
            this.floorToggle.classList.toggle('active');
        });

        this.units.forEach(unit => {
            unit.addEventListener('click', e => {
                e.preventDefault();
                this.minimiseFloors();
                unit.parentNode.classList.add('expanded');
                unit.classList.add('selected');
                this.scrollToUnit(unit);
            });
        });

        this.closeUnit.forEach(close => {
            close.addEventListener('click', e => {
                e.preventDefault();
                e.stopPropagation();
                this.minimiseFloors();
            });
        });
    }

    scrollToUnit(unit){
        let unitRect = unit.getBoundingClientRect();

        console.log(unitRect);

        if(window.innerWidth <= 768) {
            
            window.scrollTo({
                top: ((unitRect.y + window.scrollY) - 60),
                left: 0,
                behavior: 'smooth'
              });
        }
    }

    minimiseFloors(){
        this.expandedFloors = document.querySelectorAll('.floor-available.expanded');
        
        this.units.forEach(unit => {
            unit.classList.remove('selected');
        });
        
        this.expandedFloors.forEach(floor => {
            floor.classList.remove('expanded');
        });
    }
}


if(document.getElementById('floor-toggle')){
    let floors = new Floors();
}