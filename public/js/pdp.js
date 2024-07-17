document.addEventListener('DOMContentLoaded', function () {
    // Function to activate tabs Оставить
    const activateTabs = () => {
        const tabs = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                // Remove 'active' class from all tabs and tab contents
                tabs.forEach(t => t.classList.remove('tab-button--active'));
                tabContents.forEach(c => c.classList.remove('tab-content--active'));

                // Add 'active' class to the clicked tab and corresponding tab content
                tab.classList.add('tab-button--active');
                tabContents[index].classList.add('tab-content--active');
            });
        });

        tabs[0].click(); // Activate the first tab initially
    };

    // Function to handle thumbnail interaction Оставить
    const activateThumbnails = () => {
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                // Remove 'active' class from all thumbnails and add it to the clicked one
                thumbnails.forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            });
        });
    };

    const enableSubmit = () => {
        const addToCartButton = document.querySelector('.submit-btn');
        addToCartButton.textContent = 'Add to Cart';
        addToCartButton.classList.remove('out-of-stock')
    }

    const disableSubmit = () => {
        const addToCartButton = document.querySelector('.submit-btn');
        addToCartButton.textContent = 'Out of Stock';
        addToCartButton.classList.add('out-of-stock')
    }

    // Function to handle size selection
    const activateSizeSelection = () => {
        const sizeLists = document.querySelectorAll('.sizes');
        const imageLists = document.querySelectorAll('.image-for-color');
        const previewLists = document.querySelectorAll('.card__slide');
        // Function to show sizes for a specific color
        const showSizes = (colorId) => {
            sizeLists.forEach(list => {
                if (list.id === `sizes-${colorId}`) {
                    enableSubmit()
                    list.style.display = 'block';
                    localStorage.setItem('selectedColor', colorId);
                } else {
                    list.style.display = 'none';
                }
            });

            imageLists.forEach(list => {
                if (list.id.split('-')[2] === `${colorId}`) {
                    enableSubmit()
                    list.style.display = 'block';
                } else {
                    list.style.display = 'none';
                }
            });

            previewLists.forEach(list => {
                if (list.id.split('-')[1] === `${colorId}`) {
                    enableSubmit()
                    list.style.display = 'block';
                } else {
                    list.style.display = 'none';
                }
            });

            // Clear selected sizes for other colors
            const currentColor = colorId;
            const otherColors = Array.from(sizeLists).filter(list => list.id !== `sizes-${currentColor}`);
            otherColors.forEach(list => {
                const color = list.id.split('-')[1];
                localStorage.removeItem(`selected_size_${color}`);
                list.querySelectorAll('.size-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
            });
        };

        const colorButtons = document.querySelectorAll('.color-btn');
        colorButtons.forEach(button => {
            button.addEventListener('click', () => {
                const colorId = button.id;
                showSizes(colorId);

                // Remove 'selected' class from all color buttons and add it to the clicked one
                colorButtons.forEach(btn => btn.classList.remove('selected'));
                button.classList.add('selected');
            });
        });

        // Initialize based on localStorage or default color
        const storedColor = localStorage.getItem('selectedColor');
        const checkForColor = Array.prototype.some.call(colorButtons, function (color) {
            return color.id === storedColor
        })
        if (checkForColor) {
            const selectedButton = document.querySelector(`#${storedColor}`);
            if (selectedButton) {
                selectedButton.classList.add('selected');
                showSizes(storedColor);
            }
        } else {
            colorButtons[0].classList.add('selected');
            showSizes(colorButtons[0].id);
        }

        //Handle size selection and persistence
        const sizeOptions = document.querySelectorAll('.size-option');
        sizeOptions.forEach(option => {
            option.addEventListener('click', () => {
                const currentColor = option.parentElement.parentElement.id.split('-')[1];
                const selectedSize = option.getAttribute('id')
                localStorage.setItem('selectedSize', selectedSize);
                if (option.classList.contains('selected')) {
                    option.classList.remove('selected');
                } else {
                    sizeOptions.forEach(opt => {
                        if (opt.id.startsWith(currentColor)) {
                            opt.classList.remove('selected');
                        }
                    });
                    option.classList.add('selected');
                }
                // Update Add to Cart button state
                updateAddToCartButton();
            });
        });

        // Function to update Add to Cart button state based on selected size !!!! переработать
        const updateAddToCartButton = () => {
            const selectedSizeElement = document.querySelector('.size-option.selected');
            if (selectedSizeElement && selectedSizeElement.classList.contains('size-out-stock')) {
                disableSubmit()
            } else {
                enableSubmit()
            }
        };
        // updateAddToCartButton();
    };
    activateTabs();
    activateThumbnails();
    activateSizeSelection();
});"NOTE: FIX THUMBNAILS ACTIVE STATE"

function addToCart(id) {
    let color = localStorage.getItem('selectedColor');
    let size = localStorage.getItem('selectedSize').split('-')[1];
    console.log(color, size)
    fetch(
        addToCartUrl + '?' + new URLSearchParams({color: color, size: size}).toString()
    ).then(response => {
        if (response.redirected) {
            window.location.href = response.url;
        }
    })
    localStorage.clear()
}