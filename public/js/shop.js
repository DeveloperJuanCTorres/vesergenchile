document.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const container = document.getElementById('productsContainer');
        container.classList.toggle('products-list', btn.dataset.view === 'list');
    });
});


