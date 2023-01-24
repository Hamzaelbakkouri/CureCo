<?php require APPROOT . '/views/inc/header2.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<form class="pt-5">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        <button type="button" id="done" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>

<form action="<?= URLROOT; ?>/Pages/newdash" method="post">
    <div class="w-full flex justify-center gap-10 pt-10">
        <select name="by" class="block w-40 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="">
            <option value="price">
                price
            </option>
            <option value="date">
                date
            </option>
        </select>
        <select name="way" class="block w-40 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="">
            <option value="DESC">
                DESC
            </option>
            <option value="ASC">
                ASC
            </option>
        </select>
        <div class="form-group col-sm-6">
            <button type="submit" id="" name="submit_sort" class="block w-40 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p>SORT</p>
            </button>
        </div>
    </div>
</form>

<div class="w-10 pt-5 pb-5">
    <a class="pl-2.5" href="<?php echo URLROOT; ?>/pages/add"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z" />
        </svg></a>
</div>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <p>Product name</p>
                </th>
                <th scope="col" class="px-6 py-3">
                    <p>Price</p>
                </th>
                <th scope="col" class="px-6 py-3">
                    <p>Quantity</p>
                </th>
                <th scope="col" class="px-6 py-3">
                    <p>Image</p>
                </th>
                <th scope="col" class="px-6 py-3">
                    <p>date</p>
                </th>
                <th scope="col" class="px-6 py-3">
                    <p>action</p>
                </th>
            </tr>
        </thead>

        <?php foreach ($data as $dt) : ?>
            <tbody class="prod">
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                        <p class="productsName"><?= $dt['name_m']; ?></p>
                    </th>
                    <td class="px-6 py-4 border-solid">
                        <p> <?= $dt['price']; ?> DH</p>
                    </td>
                    <td class="px-6 py-4 border-solid">
                        <p><?= $dt['quantity']; ?></p>
                    </td>
                    <td class="px-6 py-4 border-solid">
                        <img src="<?php echo URLROOT; ?>/images/<?php echo $dt['image_m']; ?>" class="img-responsive w-40 h-42" alt="">
                    </td>
                    <td class="px-6 py-4 border-solid">
                        <p><?= $dt['date']; ?></p>
                    </td>
                    <td class="flex flex-row px-6 py-4 gap-5">
                        <p>
                        <div class="w-6 pt-5 pb-5">

                            <a href="<?php echo URLROOT; ?>/pages/edit/<?php echo $dt['id_m']; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                    <path d="M497.94 74.17l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.75 18.75-49.15 0-67.91zm-246.8-20.53c-15.62-15.62-40.94-15.62-56.56 0L75.8 172.43c-6.25 6.25-6.25 16.38 0 22.62l22.63 22.63c6.25 6.25 16.38 6.25 22.63 0l101.82-101.82 22.63 22.62L93.95 290.03A327.038 327.038 0 0 0 .17 485.11l-.03.23c-1.7 15.28 11.21 28.2 26.49 26.51a327.02 327.02 0 0 0 195.34-93.8l196.79-196.79-82.77-82.77-84.85-84.85z" />
                                </svg></a>
                        </div>
                        <div class="w-6 pt-5 pb-5">
                            <a href="<?php echo URLROOT; ?>/Medicine/deletemedicine/<?php echo $dt['id_m']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></a>

                        </div>
                        </p>

                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>

    </table>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>