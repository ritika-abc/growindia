 
    <input type="text" id="searchInput" value=" "  placeholder="Search products..." onkeyup="liveSearch()">

    <!-- Select Dropdown for Products -->
    <select id="productSelect">
        <option value=""><?php echo $product_name; ?></option>
    </select>

    <!-- Button to Add Product to List -->
    <button id="addProductBtn" onclick="addProduct()">Add Product</button>

    <!-- List to Show Added Products -->
    <ul id="productList"></ul>

    <script>
        // Function for live search
        function liveSearch() {
            var query = document.getElementById("searchInput").value;

            // Check if search field is empty
            if (query.length > 0) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "searchProducts.php?q=" + query, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("productSelect").innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            } else {
                document.getElementById("productSelect").innerHTML = "<option value=''>Select a product </option>";
            }
        }

        // Function to add selected product to the list
        function addProduct() {
            var selectedProduct = document.getElementById("productSelect").value;

            if (selectedProduct != "") {
                // Add to HTML list
                var li = document.createElement("li");
                li.textContent = selectedProduct;
                document.getElementById("productList").appendChild(li);

                // Optionally, send the product to the server to insert into the database
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "add-product-cat.php?product=" + selectedProduct, true);
                xhr.send();
            } else {
                alert("Please select a product first.");
            }
        }
    </script>


 