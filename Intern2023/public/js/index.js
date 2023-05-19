const btnClear = document.getElementById("btnClear");

// clear trang băng cách quay về trang search ban đầu
btnClear.onclick = function () {
    window.location.href = "http://127.0.0.1:8000/order/search";
};

const rows = document.querySelectorAll('tbody tr');

  // add event listener for double-clicking on a row
  rows.forEach((row) => {
    row.addEventListener('dblclick', () => {
      // get the URL to redirect to from the row's data-href attribute
      const url = row.dataset.href;

      // redirect to the URL
      window.location.href = url;
    });
  });


  function test(li) {
    var value = li.value;
    alert("Giá trị của thẻ li là: " + value);
  }