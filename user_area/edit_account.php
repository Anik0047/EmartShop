<h1 class="text-3xl text-center font-bold my-5">Edit Account</h1>
<form action="" method="post" enctype="multipart/form-data">

    <div class="w-96 mx-auto">
        <span class="text-lg font-bold">Name</span>
        <input name="user_name" type="text" placeholder="Type here" class="input input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto my-5">
        <span class="text-lg font-bold">Email</span>
        <input name="user_email" type="email" placeholder="Type here" class="input input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto">
        <span class="text-lg font-bold">Image</span>
        <input type="file" class="file-input file-input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto my-5">
        <span class="text-lg font-bold">Address</span>
        <input name="user_address" type="text" placeholder="Type here" class="input input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto mb-10">
        <span class="text-lg font-bold">Contact</span>
        <input name="user_phone" type="text" placeholder="Type here" class="input input-bordered w-full" />
    </div>
    <div class="w-96 mx-auto text-center">
        <input name="user_update" type="submit" class='px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:shadow-lg focus:outline-none hover:bounce-once' value="Update">
    </div>

</form>