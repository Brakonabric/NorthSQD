document.addEventListener('DOMContentLoaded', function() {
    // Function to calculate discounted price and update DOM
    const calculateDiscountedPrice = () => {
        const originalPriceElement = document.querySelector('.original-price');
        const discountElement = document.querySelector('.discount');

        const originalPrice = parseFloat(originalPriceElement.textContent.replace('€ ', ''));
        const discountAmount = parseFloat(discountElement.textContent.replace('€', ''));

        const discountedPrice = originalPrice - discountAmount;

        originalPriceElement.textContent = `€ ${originalPrice.toFixed(2)}`;
        discountElement.textContent = `€ ${discountedPrice.toFixed(2)}`;
    };

    // Function to activate tabs
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

    // Function to handle thumbnail interaction
    const activateThumbnails = () => {
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.querySelector('.card__image');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                const imageUrl = thumb.getAttribute('data-image');
                mainImage.src = imageUrl;

                // Remove 'active' class from all thumbnails and add it to the clicked one
                thumbnails.forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            });
        });
    };

    // Function to handle size selection
    const activateSizeSelection = () => {
        const sizeLists = document.querySelectorAll('.sizes');

        // Function to show sizes for a specific color
        const showSizes = (colorId) => {
            sizeLists.forEach(list => {
                if (list.id === `sizes-${colorId}`) {
                    list.style.display = 'block';
                    localStorage.setItem('selectedColor', colorId);
                } else {
                    list.style.display = 'none';
                }
            });

            // Update main product image to the first image of the selected color
            const mainImage = document.querySelector('.card__image');
            const thumbnails = document.querySelectorAll('.thumbnail');

            thumbnails.forEach(thumb => {
                if (thumb.getAttribute('data-color') === colorId) {
                    mainImage.src = thumb.getAttribute('data-image');
                    thumbnails.forEach(t => t.classList.remove('active'));
                    thumb.classList.add('active');
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
        if (storedColor) {
            const selectedButton = document.querySelector(`#${storedColor}`);
            if (selectedButton) {
                selectedButton.classList.add('selected');
                showSizes(storedColor);
            }
        } else {
            colorButtons[0].classList.add('selected');
            showSizes(colorButtons[0].id);
        }

        // Handle size selection and persistence
        const sizeOptions = document.querySelectorAll('.size-option');
        sizeOptions.forEach(option => {
            option.addEventListener('click', () => {
                const currentColor = option.parentElement.parentElement.id.split('-')[1];
                const selectedSize = option.getAttribute('data-size');
                const colorAndSize = `${currentColor}-${selectedSize}`;

                if (option.classList.contains('selected')) {
                    option.classList.remove('selected');
                    localStorage.removeItem(`selected_size_${colorAndSize}`);
                } else {
                    sizeOptions.forEach(opt => {
                        if (opt.id.startsWith(currentColor)) {
                            opt.classList.remove('selected');
                            localStorage.removeItem(`selected_size_${opt.id}`);
                        }
                    });

                    option.classList.add('selected');
                    localStorage.setItem(`selected_size_${colorAndSize}`, 'true');
                }

                // Update Add to Cart button state
                updateAddToCartButton();
            });
        });
        
        // Function to update Add to Cart button state based on selected size
        const updateAddToCartButton = () => {
            const addToCartButton = document.querySelector('.submit-btn a');
            const selectedSizeElement = document.querySelector('.size-option.selected');
    
            if (selectedSizeElement && selectedSizeElement.classList.contains('size-out-stock')) {
                addToCartButton.classList.add('disabled');
                addToCartButton.textContent = 'Out of Stock';
                addToCartButton.removeEventListener('click', handleAddToCart);
            } else {
                addToCartButton.classList.remove('disabled');
                addToCartButton.textContent = 'Add to Cart';
                addToCartButton.addEventListener('click', handleAddToCart);
            }
        };

        updateAddToCartButton();
    };

    // Function to handle Add to Cart action
    const handleAddToCart = () => {
        console.log('Adding product to cart...');
    };

    calculateDiscountedPrice();
    activateTabs();
    activateThumbnails();
    activateSizeSelection();
});
