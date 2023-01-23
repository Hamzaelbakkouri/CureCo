<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<!-- <center> -->
<div class="w-full flex justify-center">
    <div class="w-full w-max max-w mx-5 mt-5 ">
        <form class="bg-gray-400 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?php echo URLROOT; ?>/Medicine/edit/<?= $data[0]['id_m']; ?>" method="post" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                ADD PRODUCT
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Name
            </label>
            <input name="name" value="<?= $data[0]['name_m']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="name" required >
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Price
            </label>
            <input name="price" value="<?php echo $data[0]['price'] ?>" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="number" placeholder="price" min="1" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                image
            </label>
            <input name="image" value="<?php echo URLROOT; ?>/images/<?php echo $data[0]['image_m']; ?>" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="file" placeholder="image" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Quantity
            </label>
            <input name="quantity" value="<?php echo $data[0]['quantity'] ?>" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="number" placeholder="quantity" min="1" required>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                add
            </button>
        </div>
    </form>
</div>
<!-- </center> -->

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>