let currentIndex = 0;
const sections = document.querySelectorAll('.section');
const buttons = document.querySelectorAll('.circle-button');

function showSection(index) {
  sections.forEach((section, i) => {
    section.classList.toggle('hidden', i !== index);
    section.classList.toggle('active', i === index);
  });
  buttons.forEach((button, i) => {
    button.classList.toggle('active', i === index);
  });
}

function nextSection() {
  currentIndex = (currentIndex + 1) % sections.length;
  showSection(currentIndex);
}

buttons.forEach((button, index) => {
  button.addEventListener('click', () => {
    currentIndex = index;
    showSection(currentIndex);
  });
});

setInterval(nextSection, 5000);

// Page for Products
const products = document.querySelectorAll('.product');
const productsPerPage = 5; // Number of products to show per page
let currentPage = 1;

function showPage(page) {
    currentPage = page;
    const start = (currentPage - 1) * productsPerPage;
    const end = start + productsPerPage;

    products.forEach((product, index) => {
        product.style.display = (index >= start && index < end) ? 'block' : 'none';
    });

    updatePagination(); // Update the pagination buttons
}

function updatePagination() {
  const totalPages = Math.ceil(products.length / productsPerPage);
  const paginationContainer = document.querySelector('.pagination');
  
  // Clear existing buttons
  paginationContainer.innerHTML = '';

  // Create Previous Button
  const prevButton = document.createElement('button');
  prevButton.className = 'prev-button';
  prevButton.textContent = '←';
  prevButton.disabled = currentPage === 1; // Disable if on the first page
  prevButton.addEventListener('click', () => {
      if (currentPage > 1) {
          showPage(currentPage - 1);
      }
  });
  paginationContainer.appendChild(prevButton);

  // Determine the range of page buttons to display
  const pageButtonsToShow = 3; // Number of buttons to show
  let startPage = Math.max(1, currentPage - Math.floor(pageButtonsToShow / 2));
  let endPage = Math.min(totalPages, startPage + pageButtonsToShow - 1);

  // Adjust startPage if endPage is the last page
  if (endPage === totalPages) {
      startPage = Math.max(1, totalPages - pageButtonsToShow + 1);
  }

  // Create Page Buttons
  if (startPage > 1) {
      const firstButton = document.createElement('button');
      firstButton.className = 'page-button';
      firstButton.textContent = 1;
      firstButton.addEventListener('click', () => {
          showPage(1);
      });
      paginationContainer.appendChild(firstButton);

      // Add ellipsis if there are pages between the first and startPage
      if (startPage > 2) {
          const ellipsis = document.createElement('span');
          ellipsis.textContent = '...';
          paginationContainer.appendChild(ellipsis);
      }
  }

  // Create buttons for the current range
  for (let i = startPage; i <= endPage; i++) {
      const pageButton = document.createElement('button');
      pageButton.className = 'page-button';
      pageButton.textContent = i;
      pageButton.addEventListener('click', () => {
          showPage(i);
      });
      if (i === currentPage) {
          pageButton.classList.add('active'); // Add active class to the current page
      }
      paginationContainer.appendChild(pageButton);
  }

  // Add ellipsis if there are pages between endPage and totalPages
  if (endPage < totalPages) {
      if (endPage < totalPages - 1) {
          const ellipsis = document.createElement('span');
          ellipsis.textContent = '...';
          paginationContainer.appendChild(ellipsis);
      }

      const lastButton = document.createElement('button');
      lastButton.className = 'last-button';
      lastButton.textContent = totalPages;
      lastButton.addEventListener('click', () => {
          showPage(totalPages);
      });
      paginationContainer.appendChild(lastButton);
  }

  // Create Next Button
  const nextButton = document.createElement('button');
  nextButton.className = 'next-button';
  nextButton.textContent = '→';
  nextButton.disabled = currentPage === totalPages; // Disable if on the last page
  nextButton.addEventListener('click', () => {
      if (currentPage < totalPages) {
          showPage(currentPage + 1);
      }
  });
  paginationContainer.appendChild(nextButton);
}

// Show the first page initially
showPage(1);