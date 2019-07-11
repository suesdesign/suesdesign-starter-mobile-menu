/**
* Mobile menu
**/

(function() {
	
	let windowWidth, navigation, menuButton, childItems, addedPlus, clickOnPlus;

	windowWidth = window.innerWidth;
	navigation = document.getElementById('main-nav');
	menuButton = document.getElementById("menu-btn");
	childItems = document.getElementsByClassName('sub-menu');
	addedPlus = "<a class='mobile-menu-open-link closed' href='#'>+</a>";
	clickOnPlus = document.getElementsByClassName('mobile-menu-open-link');
	// Go over each sub-menu and add a link and plus sign
	function addPlus(subMenu) {
		Array.prototype.forEach.call(childItems, function(childItem) {
			childItem.insertAdjacentHTML('beforebegin', addedPlus);
		});
	}
	// Go over each submenu and add a class of .sub-menu-closed
	function addClass(menuItems) {
		Array.prototype.forEach.call(menuItems, function(menuItem) {
			menuItem.classList.add('sub-menu-closed');
		});
	}
	function removePlus(subMenu) {
		Array.prototype.forEach.call(childItems, function(childItem) {
			childItem.remove(addedPlus);
		});
	}


// Add .menu-closed to #main-nav to hide the main navigation
	navigation.classList.add('menu-closed');
	menuButton.addEventListener('click', function(event){
		event.preventDefault();
		navigation.classList.toggle('menu-closed');
		menuButton.classList.toggle('mobile-menu-clicked');
	});



// Add link with plus sign if the window width is less than 768px
	function resizeWindow() {
		if (windowWidth < 768) {
			addPlus(childItems);
			addClass(childItems);
		} else {
			//removePlus(addedPlus);
			//addPlus(childItems).stopPropagation();
			//addClass(childItems).stopPropagation();
		}
	}
	resizeWindow();
	




	function creatEventListener(clickItems) {
		Array.prototype.forEach.call(clickItems, function(clickItem) {
			clickItem.addEventListener('click', function(e){
				e.preventDefault();
				subMenuParent = this.nextSibling;
				subMenuParent.classList.add('sub-menu-open');
				subMenuParent.classList.remove('sub-menu-closed');
			});
		});
	}
	creatEventListener(clickOnPlus);

})();