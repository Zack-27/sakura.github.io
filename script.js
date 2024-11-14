document.addEventListener('DOMContentLoaded', function () {
    const productModal = new bootstrap.Modal(document.getElementById('productModal'));

    window.openModal = function (title, description, price, imageSrc) {
        document.getElementById('productModalLabel').innerText = title;
        document.getElementById('productDescription').innerText = description;
        document.getElementById('productPrice').innerText = price.toFixed(3);
        document.getElementById('modalProductImage').src = imageSrc;
        document.getElementById('productName').value = title; // Asignar el nombre del producto para el formulario
        productModal.show();

        // Reseteamos el comentario al abrir el modal
        document.getElementById('productComment').value = '';
    }

    // Enviar comentario desde el modal de producto
    document.getElementById('submitCommentButton').addEventListener('click', function () {
        const nombre = document.getElementById('nombreProducto').value;
        const email = document.getElementById('emailProducto').value;
        const comentario = document.getElementById('productComment').value;
        const producto = document.getElementById('productName').value;

        if (nombre && email && comentario) {
            fetch('guardar_comentario.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `nombre=${nombre}&email=${email}&comentario=${comentario}&producto=${producto}`
            })
            .then(response => response.text())
            .then(result => {
                alert(result);
                document.getElementById('productComment').value = '';
                productModal.hide();
            })
            .catch(error => console.error('Error:', error));
        } else {
            alert('Por favor completa todos los campos.');
        }
    });
});

// Función para filtrar productos
function filterProducts() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const productList = document.getElementById('productList');
    const cards = productList.getElementsByClassName('menu-item');

    for (let i = 0; i < cards.length; i++) {
        const title = cards[i].querySelector('.card-title').textContent;
        if (title.toLowerCase().includes(filter)) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
