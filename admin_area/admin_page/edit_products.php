<h1 class="text-3xl font-bold text-center mb-10">
    Edit Product
</h1>

<form action="" method="post" enctype="multipart/form-data">
    <div class="flex justify-evenly items-center">
        <div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Name</span>
                <input name="product_name" type="text" value="" class="input input-bordered w-full" required />
            </div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Description</span>
                <input name="product_description" type="text" value="" class="input input-bordered w-full" required />
            </div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Keyword</span>
                <input name="product_keyword" type="text" value="" class="input input-bordered w-full" required />
            </div>
            <div class="w-96 mx-auto mb-5">
                <select name="product_category" class="select select-bordered w-full" required>
                    <option disabled selected>Select Product Category</option>
                    <option value="Bkash">Shoes</option>
                </select>
            </div>
            <div class="w-96 mx-auto mb-5">
                <select name="product_brand" class="select select-bordered w-full" required>
                    <option disabled selected>Select Product Brand</option>
                    <option value="Bkash">Adidas</option>
                </select>
            </div>
        </div>
        <div>
            <div class="w-96 mx-auto mb-5 flex">
                <input name="product_image_1" type="file" class="file-input file-input-bordered w-full" />
                <div class='mask mask-squircle w-16 h-16'>
                    <img src='./product_images/ADILETTE 22 SLIDES-pic-1.png' alt='Avatar Tailwind CSS Component' />
                </div>
            </div>
            <div class="w-96 mx-auto mb-5 flex">
                <input name="product_image_2" type="file" class="file-input file-input-bordered w-full" />
                <div class='mask mask-squircle w-16 h-16'>
                    <img src='./product_images/ADILETTE 22 SLIDES-pic-2.png' alt='Avatar Tailwind CSS Component' />
                </div>
            </div>
            <div class="w-96 mx-auto mb-5 flex">
                <input name="product_image_3" type="file" class="file-input file-input-bordered w-full" />
                <div class='mask mask-squircle w-16 h-16'>
                    <img src='./product_images/ADILETTE 22 SLIDES-pic-3.png' alt='Avatar Tailwind CSS Component' />
                </div>
            </div>
            <div class="w-96 mx-auto mb-5">
                <span class="text-lg font-bold">Product Price</span>
                <input name="product_price" type="text" value="" class="input input-bordered w-full" required />
            </div>
        </div>
    </div>
    <div class="w-96 mx-auto text-center my-10">
        <input name="product_update" type="submit"
            class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once'
            value="Update">
    </div>
</form>