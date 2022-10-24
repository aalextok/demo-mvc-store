<script type="text/javascript">
  // Data for product types and corresponding options is exported to JavasScript as JSON object.
  // It is possible now to use constant `types` to render dynamic form in HTML/CSS/JS
    const types = <?=$types?>;
    console.log(types);
</script>
<header>
    <div class ="site-heading">
        <h1 class="title"><?=$title?></h1>
        <div class="button">
            <div class="btn" id="save-product-btn" value="save">Save
            </div>
            <div class="btn" id="cancel-product-btn" value="cancel">Cancel</div>
        </div>
    </div>
</header>
<main>
    <form class="container" id="form-product" action="/product" method="post">
        <div class="product_form" id="product_form">
            <div class="product_add">
                <div>Name</div>
                <input type="text" id="name" name="name" value=""/>
            </div>
            <div class="product_add">
                <div>SKU</div>
                <input type="text" id="sku" name="SKU" value=""/>
            </div>
            <div class="product_add">
                <div>Price ($)</div>
                <input type="number" id="price" name="price" value=""/>
            </div>
            <div class="product_add">
                <div>Type Switcher</div>
                <div class="select-type-switcher">
                    <select id="productType" name="type_switcher" onchange="choiseProductType(this)">
                        <option selected disabled value="type_switcher">Type Switcher</option>
                        <option value="dvd">DVD</option>
                        <option value="furniture">Furniture</option>
                        <option value="book">Book</option>
                    </select>
                </div>
            </div>
            <div id="DVD" class="hidden">
                <div class="product_add">
                    <div>Size (MB)</div>
                    <input type="number" id="size" name="dvd_size" value=""/>
                </div>
                <p>Product description</p>
            </div>
            <div id="Furniture" class="hidden">
                <div class="product_add">
                    <div>Height (CM)</div>
                    <input type="number" id="height" name="furniture_height" value=""/>
                </div>
                <div class="product_add">
                    <div>Width (CM)</div>
                    <input type="number" id="width" name="furniture_width" value=""/>
                </div>
                <div class="product_add">
                    <div>Length (CM)</div>
                    <input type="number" id="length" name="furniture_length" value=""/>
                </div>
                <p>Product description</p>
            </div>
            <div id="Book" class="hidden">
                <div class="product_add">
                    <div>Weight (KG)</div>
                    <input type="number" id="weight" name="book_weight" value=""/>
                </div>
                <p>Product description</p>
            </div>
        </div>
    </form>
    <script src="js/<?=$js_file?>.js"></script>