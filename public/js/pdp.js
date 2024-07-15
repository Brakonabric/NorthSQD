document.addEventListener('DOMContentLoaded', function() {
    const activateTabs = () => {
        const tabs = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        
        const defaultIndex = 0; 

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('tab-button--active'));
                tabContents.forEach(c => c.classList.remove('tab-content--active'));
    
                tab.classList.add('tab-button--active');
                tabContents[index].classList.add('tab-content--active');
            });
        });
    
        tabs[defaultIndex].click();
    };
    

    // Function to handle thumbnail image switching
    const activateThumbnails = () => {
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.querySelector('.card__image');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                const imageUrl = thumb.getAttribute('data-image');
                mainImage.src = imageUrl;

                thumbnails.forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            });
        });
    };

    // Function to handle selection of sizes based on color
    const activateSizeSelection = () => {
        const sizeLists = document.querySelectorAll('.sizes');

        const showSizes = (colorId) => {
            sizeLists.forEach(list => {
                if (list.id === `sizes-${colorId}`) {
                    list.style.display = 'block';
                    localStorage.setItem('selectedColor', colorId);
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
            });
        });
    };

    activateTabs();
    activateThumbnails();
    activateSizeSelection();
});
