const buyButtons = document.querySelectorAll(".buy-button");
buyButtons.forEach(button => {
  button.addEventListener("click", (event) => {
    const productId = event.target.getAttribute("data-product");
    alert(`Você comprou o produto ${productId}!`);
  });
});