class HeroCurtain {
	constructor(containerID, sliceContainerClass, copyClass) {
		this.containerID = containerID;
		this.container = document.getElementById(containerID);
		this.copyContainer = this.container.querySelectorAll(copyClass)[0];
		this.slices = this.container.querySelectorAll(sliceContainerClass);
		this.shuffledIndex = [];
		this.columnElement = 0;
		this.colWidth = 0;
		this.containerTop = this.containerTopPos();

		this.updateSliceWidths();
		this.shuffleSlices();
		this.initEventListeners();

		if (this.copyContainer) {
			this.createCopySlices();
		}
	}

	initEventListeners() {
		this.recalculateOnResize();
		this.animateOnScroll();
	}

	containerTopPos() {
		let rect = this.container.getBoundingClientRect();
		return rect.top + window.scrollY;
	}

	shuffleSlices() {
		let columns = Array.from(Array(12).keys());
		let shuffled = columns.sort(() => Math.random() - 0.5);
		this.shuffledIndex = shuffled;
	}

	updateSliceWidths() {
		let sliceElement = this.slices[0].getBoundingClientRect();
		this.colWidth = sliceElement.width;
	}

	recalculateOnResize() {
		window.addEventListener("resize", () => {
			this.updateSliceWidths();
			this.containerTop = this.containerTopPos();
		});
	}

	createCopySlices() {
		let classes = this.copyContainer;
		let cols = 6;

		for (let i = 0; i < cols; i++) {
			let clonedCopyContainer = this.copyContainer.cloneNode(true);
			clonedCopyContainer.classList.add("js-col-" + i, "appended");
			clonedCopyContainer.classList.remove("original");
			this.copyContainer.parentNode.appendChild(clonedCopyContainer);
		}
	}

	getCopySlices() {
		let list = this.container.getElementsByClassName("appended");
		return list;
	}

	animateCopySlices() {
		let copySlices = this.getCopySlices();
		let percentage = this.calculatePercentage();
		let rect = this.container.getBoundingClientRect();
		let containerTop = rect.top;

		for (let copySlice of copySlices) {
			let percent = Math.round(percentage) / 100;
			let width = this.colWidth - this.colWidth * percent;

			if (containerTop >= 0) {
				width = this.colWidth;
			}

			if (percent > 1) {
				width = 0;
			}

			requestAnimationFrame(() => {
				copySlice.style.width = width + "px";
			});
		}
	}

	animateSliceWidths() {
		let percentage = this.calculatePercentage();
		let rect = this.container.getBoundingClientRect();
		let containerTop = rect.top;

		this.shuffledIndex.forEach((col) => {
			let percent = Math.round(percentage) / 100;
			let width = this.colWidth - this.colWidth * percent;
			let translateX = width - this.colWidth;

			if (percent > 0) {
				this.container.classList.add("scrolled");
			}

			if (percent > 0.5) {
				this.container.classList.add("revealed");
			} else {
				this.container.classList.remove("revealed");
			}

			if (percent > 0.99) {
				if (this.containerID == "home-hero") {
					document
						.querySelectorAll(".header-menu")[0]
						.classList.add("show-menu");
				}
			}

			if (percent <= 0) {
				if (this.containerID == "home-hero") {
					document
						.querySelectorAll(".header-menu")[0]
						.classList.remove("show-menu");
				}
				this.container.classList.remove("scrolled");
			}

			if (containerTop >= 0) {
				translateX = 0;
			}

			requestAnimationFrame(() => {
				this.slices[col].firstChild.style.transform =
					"translateX(" + translateX + "px)";
			});
		});
	}

	calculatePercentage() {
		let maxScroll = 400;
		let rect = this.container.getBoundingClientRect();
		let containerTop = rect.top * -1;
		let percent = (containerTop / maxScroll) * 100;

		return percent;
	}

	animateOnScroll() {
		window.addEventListener(
			"scroll",
			() => {
				console.log(this.containerTop);
				this.animateSliceWidths();
				if (this.copyContainer) {
					this.animateCopySlices();
				}
			},
			{ passive: false }
		);
	}

	get allItems() {
		return this.shuffledIndex;
	}
}

//set body height before starting curtains for pos fixed method
//let height = 0;

let curtainReveals = document.querySelectorAll(
	".column-reveal:not(.last-item)"
);

curtainReveals.forEach((element) => {
	// console.log(element);
	// let rect = element.getBoundingClientRect();
	// height = height + rect.height;

	if (element.id !== "home-hero") {
		element = new HeroCurtain(
			element.id,
			".column-reveal_slices div.slice_contain",
			".copy.split"
		);
	}
});

if (document.getElementById("home-hero")) {
	let heroCurtain = new HeroCurtain(
		"home-hero",
		".column-reveal_slices div.slice_contain"
	);
	// let rect = document.getElementById("home-hero").getBoundingClientRect();
	// height = height + rect.height;
}

//document.body.style.height = height + "px";
