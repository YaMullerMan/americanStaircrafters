/* How the gallery should work

- each gallery item should have forward and back arrows
    - maybe have them always on the bottom corners of the item? Need to account for mobile, so no hover
- when they click, should enlarge the gallery with the same controls
- full screen on mobile

*/

class PhotoGallery extends HTMLElement {
    constructor() {
        super();

        this.galleryItems = this.querySelectorAll('.gallery-item');
        this.createNav();
        this.updateNavText();
        this.updateNavNumbers();

        this.addEventListener("pointerdown", this.handleClick);
        // this.addEventListener('pointerdown', this.handleClick.bind(this));
        // this.addEventListener('focusout', this.onFocusOut.bind(this));
    }

    handleClick(event) {
        const next = event.target.closest('.gallery-item__next');
        const previous = event.target.closest('.gallery-item__previous');

        if (next !== null) {
            this.next(next)
        }

        if (previous !== null) {
            this.previous(previous)
        }

        // if target is images div, then open the modal

        // don't handle the click if it's outside, return and let onFocusOut run
        // if (event.code.toUpperCase() !== 'ESCAPE') return;
        // const openDetailsElement = event.target.closest('details[open]');
        // if (!openDetailsElement) return;
    }

    // assignIds() {
    //     for (let i = 0; i < this.galleryItems.length; i++) {
    //         this.galleryItems[i].setAttribute("id", (i + 1))
    //     }
    // }

    createNav() {
        this.galleryItems.forEach((item) => {
            let galleryNav = item.querySelector('.gallery-item__nav'),
                galleryNext = document.createElement('span'),
                galleryCaption = document.createElement('span'),
                galleryCount = document.createElement('span'),
                galleryPrevious = document.createElement('span'),
                chevron = '<svg width="15" height="18" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.66667 18L14.3193 9.99992" stroke = "#202020" stroke-width="2.5" stroke-linecap="round" /><path d="M4.66667 2L14.3193 10.0001" stroke="#202020" stroke-width="2.5" stroke-linecap="round" /></svg >';
            galleryNext.innerHTML += chevron;
            galleryPrevious.innerHTML += chevron;
            galleryNext.classList.add('gallery-item__next');
            galleryCaption.classList.add('gallery-item__caption');
            galleryCount.classList.add('gallery-item__count')
            galleryPrevious.classList.add('gallery-item__previous');
            galleryNav.append(galleryPrevious, galleryCaption, galleryCount, galleryNext)
        })
    }

    updateNavText(i, img, item) {
        if (img == undefined) {
            // this runs at init. Get the first caption of every image
            this.galleryItems.forEach((gallery) => {
                const firstImg = gallery.querySelector('.gallery-item__images img')
                const text = firstImg.getAttribute('data-caption');
                const placeholder = gallery.querySelector('.gallery-item__caption')
                placeholder.innerText = text;
            })
        } else {
            const text = img[i].getAttribute('data-caption');
            const placeholder = item.querySelector('.gallery-item__caption')
            placeholder.innerText = text;
        }
    }

    updateNavNumbers(i, length, item) {
        if (i == undefined) {
            this.galleryItems.forEach((gallery) => {
                const images = gallery.querySelectorAll('.gallery-item__images img')
                const text = "1/" + images.length;
                const placeholder = gallery.querySelector('.gallery-item__count')
                placeholder.innerText = text;
            })
        } else {
            const count = item.querySelector('.gallery-item__count')
            const number = (i + 1) + "/" + length;
            count.innerText = number;
        }
    }

    fullScreenGallery() {
        // if image is clicked, open full screen modal with numbers, arrows. Swipeable
    }

    next(next) {
        const galleryItem = next.closest('.gallery-item');
        let galleryImages = galleryItem.querySelector('.gallery-item__images');
        const images = galleryItem.querySelectorAll('.gallery-item__images img');
        const galleryTrack = galleryItem.querySelector('.gallery-item__images-track');
        let leftProperty;
        if (galleryImages.style.left == "") {
            leftProperty = 0;
        } else {
            leftProperty = parseInt(galleryImages.style.left);
        }
        let newPosition = (leftProperty - parseInt(galleryTrack.clientWidth));
        let index = Math.abs(newPosition / parseInt(galleryTrack.clientWidth));

        if (index > (images.length - 1)) {
            console.log('end of the line');
        } else {
            galleryImages.style.left = newPosition + "px";
            this.updateNavNumbers(index, images.length, galleryItem);
            this.updateNavText(index, images, galleryItem);
        }
    }

    previous(previous) {
        const galleryItem = previous.closest('.gallery-item');
        let galleryImages = galleryItem.querySelector('.gallery-item__images');
        const images = galleryItem.querySelectorAll('.gallery-item__images img');
        const galleryTrack = galleryItem.querySelector('.gallery-item__images-track');
        let leftProperty;
        if (galleryImages.style.left == "") {
            leftProperty = 0;
        } else {
            leftProperty = parseInt(galleryImages.style.left);
        }
        let newPosition = (leftProperty + parseInt(galleryTrack.clientWidth));
        let index = newPosition / parseInt(galleryTrack.clientWidth)

        if (index == 1) {
            console.log('beginning of the line');
        } else {
            index = Math.abs(index);
            galleryImages.style.left = newPosition + "px";
            this.updateNavNumbers(index, images.length, galleryItem);
            this.updateNavText(index, images, galleryItem);
        }
    }
}

customElements.define('photo-gallery', PhotoGallery);




// openMenuDrawer(summaryElement) {
//     setTimeout(() => {
//         this.photoGallery.classList.add('menu-opening');
//     });
//     summaryElement.setAttribute('aria-expanded', true);
//     trapFocus(this.photoGallery, summaryElement);
//     document.body.classList.add(`overflow-hidden-${this.dataset.breakpoint}`);
// }

// closeMenuDrawer(event, elementToFocus = false) {
//     if (event === undefined) return;

//     this.photoGallery.classList.remove('menu-opening');
//     this.photoGallery.querySelectorAll('details').forEach((details) => {
//         details.removeAttribute('open');
//         details.classList.remove('menu-opening');
//     });
//     this.photoGallery.querySelectorAll('.submenu-open').forEach((submenu) => {
//         submenu.classList.remove('submenu-open');
//     });
//     document.body.classList.remove(`overflow-hidden-${this.dataset.breakpoint}`);
//     removeTrapFocus(elementToFocus);
//     this.closeAnimation(this.photoGallery);

//     if (event instanceof KeyboardEvent) elementToFocus?.setAttribute('aria-expanded', false);
// }

// onFocusOut() {
//     setTimeout(() => {
//         if (this.photoGallery.hasAttribute('open') && !this.photoGallery.contains(document.activeElement))
//             this.closeMenuDrawer();
//     });
// }