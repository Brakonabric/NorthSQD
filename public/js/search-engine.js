const searchBar = document.getElementById('search-bar-mobile');
const searchOnButton = document.getElementById('search');
const searchOffButton = document.getElementById('close-button');
searchOnButton.addEventListener('click', () => {
    const isSearchActive = searchBar.style.display === "block";
    searchBar.style.display = isSearchActive ? "none" : "block";
});

searchOffButton.addEventListener('click', () => {
    const isSearchActive = searchBar.style.display === "block";
    searchBar.style.display = isSearchActive ? "none" : "block";
});


document.addEventListener('DOMContentLoaded', function () {
    const searchBarInput = document.getElementById('search-bar-input');
    const searchListMobile = document.getElementById('search-list-mobile');
    const searchBar = document.getElementById('search-bar-mobile');
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
                            let i = 0;
                            data.forEach(item => {
                                if (i <= 15) {
                                let itemElement = document.createElement('li');
                                itemElement.setAttribute('class','search-item');
                                let route = `<a href="/products/${item.id}">`;
                                let input = `${item.name} by ${item.collection}`.toUpperCase();
                                let regex = new RegExp(query.toUpperCase(), 'g');
                                let bold = `<strong>${query}</strong>`
                                itemElement.innerHTML = route + input.replace(regex, bold.toUpperCase()) + `</a>`;
                                searchListMobile.appendChild(itemElement);
                                }
                                i++;
                            });
                        } else {
                            searchListMobile.innerHTML = '<p class="no-result">No results found.</p>';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                searchListMobile.innerHTML = '';
            }
        });
    }
});

