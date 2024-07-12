document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    const activateDefaultTab = () => {
        const defaultIndex = 0;

        tabs.forEach(tab => tab.classList.remove('tab-button--active'));
        tabContents.forEach(content => content.classList.remove('tab-content--active'));

        tabs[defaultIndex].classList.add('tab-button--active');
        tabContents[defaultIndex].classList.add('tab-content--active');
    };

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const index = this.dataset.index;

            tabs.forEach(t => t.classList.remove('tab-button--active'));
            tabContents.forEach(c => c.classList.remove('tab-content--active'));

            this.classList.add('tab-button--active');
            document.querySelector(`.tab-content[data-index="${index}"]`).classList.add('tab-content--active');
        });
    });

    activateDefaultTab();
});
