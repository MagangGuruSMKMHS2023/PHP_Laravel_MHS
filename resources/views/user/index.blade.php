<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    @include('css')
</head>
<body>
@include('navbar')


    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-8 mx-48">
        <a href="/user/create">Tambah</a>
    </button>

    

    <div class="flex justify-center mt-4">
            <table class="table-auto border-collapse border border-slate-300 w-9/12">
                <tr class="bg-indigo-400 text-white">
                    <td class="p-4">Id User</td>
                    <td class="p-4">Nama User</td>
                    <td class="p-4">Email </td>
                    <td class="p-4">Aksi</td>
                </tr>
                <?php foreach($user as $row) : ?>
                <tr class="even:bg-slate-300 odd:bg-slate-100">
                    <td class="p-4"><?= $row['id']; ?></td>
                    <td class="p-4"><?= $row['name']; ?></td>
                    <td class="p-4"><?= $row['email']; ?></td>
         
                    <td class="p-4">
                       
                       <?php 
                            if(Auth::user()->name == $row['name']){
                       ?>
                        <a href="/user/<?= $row['id'] ?>/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Edit</a>
                        <form action="/user/<?= $row['id']?>" method="post">
                           @csrf 
                           @method("delete")
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-3" type="submit">
                                Delete
                            </button>
                        </form>
                        <?php }else{ ?> 
                            <a href="#" class="bg-gray hover:bg-gray-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-gray rounded  cursor-not-allowed" >Edit</a>
                        <form action="#">
                            <button class="bg-gray hover:bg-gray-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-gray rounded mt-3  cursor-not-allowed" type="submit">
                                Delete
                            </button>
                        </form>

                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
    </div>

    
</body>
</html>





