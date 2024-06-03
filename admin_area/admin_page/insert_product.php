<div>
    <h1 class="text-center text-3xl">Insert Products</h1>
    <div class="mt-10">
        <form action="" method="post" enctype="multipart/form-data"></form>
        <div class="flex justify-evenly items-center">
            <div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Name</span>
                        </div>
                        <input type="text" name="product_name" placeholder="Enter Product Name" class="input input-bordered w-full max-w-xs" autocomplete="off" require />
                    </label>
                </div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Description</span>
                        </div>
                        <input type="text" name="product_descriptipm" placeholder="Enter Description" class="input input-bordered w-full max-w-xs" autocomplete="off" require />
                    </label>
                </div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Keywords</span>
                        </div>
                        <input type="text" name="product_keywords" placeholder="Enter Keywords" class="input input-bordered w-full max-w-xs" autocomplete="off" required />
                    </label>
                </div>
                <div class="mb-5">
                    <select name="product_categories" class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Select a category</option>
                        <option>category 1</option>
                        <option>category 2</option>
                        <option>category 3</option>
                        <option>category 4</option>
                    </select>
                </div>
                <div class="mb-5">
                    <select name="product_categories" class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Select a brand</option>
                        <option>brand 1</option>
                        <option>brand 2</option>
                        <option>brand 3</option>
                        <option>brand 4</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Image 1</span>
                        </div>
                        <input type="file" name="product_image_1" class="file-input file-input-bordered w-full max-w-xs" required />
                    </label>
                </div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Image 2</span>
                        </div>
                        <input type="file" name="product_image_2" class="file-input file-input-bordered w-full max-w-xs" required />
                    </label>
                </div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Image 3</span>
                        </div>
                        <input type="file" name="product_image_3" class="file-input file-input-bordered w-full max-w-xs" required />
                    </label>
                </div>
                <div class="mb-5">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Product Price</span>
                        </div>
                        <input type="text" name="product_price" placeholder="Enter Price" class="input input-bordered w-full max-w-xs" autocomplete="off" required />
                    </label>
                </div>
            </div>
        </div>


        <div class="flex justify-evenly">
            <input class="text-lg font-bold rounded-lg py-2 px-10 w-52 mt-5 bg-white hover:bg-orange-500 transition ease-in delay-150 hover:-translate-y-1 hover:ease-in-out hover:scale-110 duration-300" type="submit" name="insert_product">
        </div>
    </div>
</div>