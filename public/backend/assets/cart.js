
    document.addEventListener('DOMContentLoaded', () => {
        // Function to render cart items
        function renderCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = ''; // Clear previous items

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalQuantity = 0;

            cart.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <img src="${item.photo}" alt="${item.name}" class="product-image">
                    </td>
                    <td class="text-start product-title">
                        <h6 class="mb-0">${item.name}</h6>
                    </td>
                    <td>
                        <div class="product-qty d-inline-flex align-items-center" data-product-id="${item.id}">
                            <button class="decrease">-</button>
                            <input type="text" value="${item.quantity}">
                            <button class="increase">+</button>
                        </div>
                    </td>
                    <td>
                        <span class="text-dark fw-bold me-2 d-lg-none">Unit Price:</span>
                        <span class="text-dark fw-bold">TK. ${item.price}</span>
                    </td>
                    <td class="total-price">
                        <span class="text-dark fw-bold me-2 d-lg-none">Total Price:</span>
                        <span class="text-dark fw-bold">TK. ${item.quantity * item.price}</span>
                    </td>
                    <td>
                        <button class="btn btn-danger text-white delete-button" data-id="${item.id}">Delete</button>
                    </td>
                `;
                cartItemsContainer.appendChild(row);

                // Calculate total quantity
                totalQuantity += parseInt(item.quantity);
            });

            // Update total quantity in the header
            document.getElementById('total-items').textContent = totalQuantity;

            // Update subtotal and total
            const subtotal = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);
            const total = subtotal; // Assuming no additional costs for now

            document.getElementById('subtotal').textContent = `TK. ${subtotal.toFixed(2)}`;
            document.getElementById('total').textContent = `TK. ${total.toFixed(2)}`;

            // Add event listeners to delete buttons
            document.querySelectorAll('.delete-button').forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.dataset.id;
                    cart = cart.filter(item => item.id !== id);
                    localStorage.setItem('cart', JSON.stringify(cart));
                    renderCartItems(); // Re-render cart items after deletion
                });
            });

            // Add event listeners to increase quantity buttons
            document.querySelectorAll('.increase').forEach(button => {
                button.addEventListener('click', () => {
                    const productId = button.parentElement.dataset.productId;
                    const item = cart.find(item => item.id === productId);
                    if (item) {
                        item.quantity++;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        renderCartItems(); // Re-render cart items after quantity update
                    }
                });
            });

            // Add event listeners to decrease quantity buttons
            document.querySelectorAll('.decrease').forEach(button => {
                button.addEventListener('click', () => {
                    const productId = button.parentElement.dataset.productId;
                    const item = cart.find(item => item.id === productId);
                    if (item && item.quantity > 1) {
                        item.quantity--;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        renderCartItems(); // Re-render cart items after quantity update
                    }
                });
            });
        }

        renderCartItems(); // Render cart items on page load
    });

