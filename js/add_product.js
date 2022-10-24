const select = document.querySelector('#productType');

function choiseProductType(sw) {
  let dvd = document.getElementById('DVD');
  let furniture = document.getElementById('Furniture');
  let book = document.getElementById('Book');
  switch (sw.value) {
    case 'dvd': {
      dvd.classList.remove('hidden');
      furniture.classList.add('hidden');
      book.classList.add('hidden');
      break;
    }
    case 'furniture': {
      dvd.classList.add('hidden');
      furniture.classList.remove('hidden');
      book.classList.add('hidden');
      break;
    }
    case 'book': {
      dvd.classList.add('hidden');
      furniture.classList.add('hidden');
      book.classList.remove('hidden');
      break;
    }
    default: {
      dvd.classList.add('hidden');
      furniture.classList.add('hidden');
      book.classList.add('hidden');
      break;
    }
  }
}

select.addEventListener('type_switcher', choiseProductType);

const saveBtn = document.getElementById('save-product-btn');

saveBtn.addEventListener('click', () => {
  const formProduct = document.getElementById('form-product');
  formProduct.submit();
});