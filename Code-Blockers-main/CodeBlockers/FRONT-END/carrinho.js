document.addEventListener('DOMContentLoaded', function () {
    const productRows = document.querySelectorAll('.cart-product');
    const totalContainer = document.querySelector('.cart-total-container span');
    const purchaseButton = document.querySelector('.purchase-button');

    let total = 0;

    // Adicionar evento de input para cada linha do produto
    productRows.forEach(function (row) {
        const price = parseFloat(row.querySelector('.cart-product-price').textContent.replace('R$', '').trim());
        const quantityInput = row.querySelector('.product-qtd-input');
        const removeButton = row.querySelector('.remove-product-button');

        quantityInput.addEventListener('input', function () {
            const quantity = parseInt(quantityInput.value, 10);
            const subtotal = price * quantity;
            updateTotal();
        });

        removeButton.addEventListener('click', function () {
            row.remove();
            updateTotal();
        });
    });

    // Atualizar o total
    function updateTotal() {
        total = 0;
        productRows.forEach(function (row) {
            const price = parseFloat(row.querySelector('.cart-product-price').textContent.replace('R$', '').trim());
            const quantity = parseInt(row.querySelector('.product-qtd-input').value, 10);
            total += price * quantity;
        });

        totalContainer.textContent = `R$${total.toFixed(2)}`;
    }

    // Adicionar evento de clique para o botão de compra
    purchaseButton.addEventListener('click', function () {
        alert(`Compra finalizada! Total: R$${total.toFixed(2)}`);
    });
});
