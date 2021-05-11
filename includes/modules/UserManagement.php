<?php
    require_once ('../layouts/header.php');
?>
<div class="py-6 flex flex-row items-start justify-between">
    <div class="font-bold">
        <h1 class="text-4xl text-green-800">Portal System Management</h1>
        <h2 class="text-3xl text-gray-600">User Management</h2>
    </div>
    <div>

    </div>
</div>
<div class=" border-2 border-green-700 p-3 grid grid-cols-12">
    <div class="col-span-4">
        <h5 class="text-xl text-gray-700 font-bold">User Search</h5>
        <div class="mt-3">
            <select name="" id="" class="w-5/6 p-2 border-2 border-gray-300 rounded">
                <option value="">Role</option>
                <option value="">Role1</option>
                <option value="">Role2</option>
                <option value="">Role3</option>
                <option value="">Role4</option>
                <option value="">Role5</option>
            </select>
        </div>
        <div class="mt-3">
            <input type="text" class="w-5/6 p-2 border-2 border-gray-300 rounded" placeholder="User ID">
        </div>
        <div class="mt-3">
            <input type="text" class="w-5/6 p-2 border-2 border-gray-300 rounded" placeholder="User Name">
        </div>
    </div>
    <div class="bg-yellow-700 col-span-8">
      
    </div>
</div>





<?php

require_once('../layouts/footer.php');
?>