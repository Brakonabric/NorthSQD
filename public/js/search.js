document.addEventListener('DOMContentLoaded', function () {
    const searchBarInput = document.getElementById('search-bar-input');
    const searchListMobile = document.getElementById('search-list-mobile');

    if (searchBarInput && searchListMobile) {
        searchBarInput.addEventListener('input', function () {
            const query = searchBarInput.value;

            if (query.length > 0) {
                fetch(`/search?query=${query}`, {
                    // headers: {
                    //     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    // }
                })
                    .then(response => response.json())
                    .then(data => {
                        searchListMobile.innerHTML = '';
                        if (data.length > 0) {
                            data.forEach(item => {
                                const itemElement = document.createElement('div');
                                itemElement.classList.add('search-item');
                                itemElement.innerHTML = `<li><a href="/products/${item.id}"><strong>${item.name}</strong> by ${item.collection}</a></li>`;
                                searchListMobile.appendChild(itemElement);
                            });
                        } else {
                            searchListMobile.innerHTML = '<p>No results found.</p>';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                searchListMobile.innerHTML = '';
            }
        });
    }
});