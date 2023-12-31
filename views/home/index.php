<?php

use App\Utilities\Assets;

$currentPage = $_GET['page'] ?? 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css"/>
    <link rel="stylesheet" href="<?= BASEHOST . 'dist/style.css' ?>">
    <title>My PhoneBook</title>
</head>

<body>
<!-- ====== START NAVIGATION ======  -->
<nav class="bg-white  border-gray-200 px-4 md:px-10 py-2.5 rounded ">
    <div class="flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex">
            <svg class="mr-3 h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                        d="M3.59 1.322l2.844-1.322 4.041 7.89-2.725 1.341c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-7.861 3.591-19.101-18.258-11.384-22.281zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.971-.474-2.271-4.383-1.026.5c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.497-2.251-4.398zm7.832 7.649l2.917.87c.223-.747.16-1.579-.24-2.317-.399-.739-1.062-1.247-1.808-1.469l-.869 2.916zm1.804-6.059c1.551.462 2.926 1.516 3.756 3.051.831 1.536.96 3.263.498 4.813l-1.795-.535c.325-1.091.233-2.306-.352-3.387-.583-1.081-1.551-1.822-2.643-2.146l.536-1.796zm.95-3.186c2.365.705 4.463 2.312 5.729 4.656 1.269 2.343 1.466 4.978.761 7.344l-1.84-.548c.564-1.895.406-4.006-.608-5.882-1.016-1.877-2.696-3.165-4.591-3.729l.549-1.841z"/>
            </svg>
            <span class="self-center text-lg font-semibold whitespace-nowrap ">My PhoneBook</span>
        </a>
        <button id="toggleMenu" data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200  "
                aria-controls="mobile-menu-2" aria-expanded="false">
            <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden min-w-fit md:table-cell md:w-auto scale-up-center absolute md:static top-14 right-4 md:p-0 p-4 bg-gray-50 md:bg-transparent z-10"
             id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li class="md:hover:bg-blue-500 md:hover:text-white hover:rounded  hover:bg-blue-500  p-2 group md:w-24 flex md:justify-center">
                    <a href="#"
                       class="block py-2 pr-4 pl-3 text-gray-600  group-hover:text-white">Home</a>
                </li>
                <li class="md:hover:bg-blue-500 md:hover:text-white hover:rounded hover:bg-blue-500  p-2 group md:w-24 flex md:justify-center">
                    <a href="#"
                       class="block py-2 pr-4 pl-3 text-gray-600 group-hover:text-white">Contacts</a>
                </li>


            </ul>
        </div>
    </div>
</nav>

<!-- ======END NAVIGATION ======  -->

<!-- ======START HEADER SECTION ======  -->
<div class="md:px-10 pt-2">
    <div class="text-center md:text-left">
        <p class="md:text-3xl text-xl md:pb-5 pb-3 font-semibold">
            Contacts <?php if (!empty($_GET['search'])) echo '<span class="text-blue-500">&quot;' . $_GET['search'] . '&quot;</span>' ?>
        </p>
    </div>
    <div class="grid overflow-hidden grid-cols-none grid-rows-none gap-y-3 justify-center md:flex md:justify-between">
        <!-- <div class="flex justify-center flsex-wrap md:flex-nowrap flex-col md:flex-row  gap-3 items-center"> -->

        <div class="relative msx-auto  text-gray-600 md:row-start-1 col-span-10">
            <form method="get">
                <label for="searchField">
                    <input id="searchField"
                           class=" border-gray-300 bg-white h-10  px-5 pr-16 rounded-lg text-sm focus:outline-none focus:ring-0"
                           type="search" name="search" placeholder="Search">
                </label>
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4 ">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px"
                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                         xml:space="preserve">
                            <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                </button>
            </form>
        </div>

        <!-- </div> -->

        <div class="pts-2 md:p-0 flex justify-center row-start-2 md:row-start-1 col-span-5 ">

            <button id="addNew"
                    class="justify-center flex items-center bg-blue-500 hover:bg-blue-600 focus:bg-blue-600  md:w-32  text-white whitespace-nowrap  text-center border md:py-2 md:px-4 p-1 w-28  rounded-lg  text-sm focus:outline-none focus:border-none focus:ring-0"
            >
                <svg class="h-4 w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                            d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/>
                </svg>
                <span class="pl-2">Add New</span>
            </button>
        </div>
    </div>
</div>

<!-- ======END HEADER SECTION ======  -->

<!-- ======START ADD NEW MODAL SECTION ======  -->
<div id="addNewModel" aria-hidden="true" style="background-color: rgba(0,0,0,0.3);"
     class="hidden main-modal animated fadeIn faster overflow-y-scroll overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto mx-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-5 rounded-t border-b ">
                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl ">
                    Add New Contact
                </h3>
                <button type="button"
                        class="addNewModalClose text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center ">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="w-full" id="contactForm" method="POST" action="<?= BASEHOST . 'Contact/add' ?>">
                <div class="p-6 space-y-6">
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" required placeholder="John" id="firstname" name="firstName"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class="hidden mt-2 text-sm text-red-600 "> Please enter the firstname!</p>

                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="text" required placeholder="Doe" id="lastname" name="lastName"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class=" hidden mt-2 text-sm text-red-600 "> Please enter the lastname!</p>

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number</label>
                            <input type="number" required placeholder="123-456-7890" id="phoneNumber" name="Number"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class="hidden mt-2 text-sm text-red-600 "> Please enter the phone Number!</p>

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label for="emailAddress" class="block mb-2 text-sm font-medium text-gray-900">Email
                                Address</label>
                            <input type="email" placeholder="amir@ro-ox.com" id="emailAddress" name="Email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class="hidden mt-2 text-sm text-red-600 "> Please enter the Email Address!</p>

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                            <textarea id="description" rows="4" name="description"
                                      class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                      placeholder=""></textarea>

                        </div>


                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 justify-between ">
                    <button type="button"
                            class="addNewModalClose text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">
                        Cancel
                    </button>
                    <input type="submit" value="Add"
                           id="contactFormSubmit"
                           class="addNewsModalClose text-white cursor-pointer bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                </div>
            </form>
        </div>
    </div>
</div>
<div id="editNewModel" aria-hidden="true" style="background-color: rgba(0,0,0,0.3);"
     class="hidden main-modal animated fadeIn faster overflow-y-scroll overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto mx-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-5 rounded-t border-b ">
                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl ">
                    Edit Contact
                </h3>
                <button type="button"
                        class="addNewModalClose text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center ">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="w-full" id="contactFormEdit" method="POST" action="<?= BASEHOST . 'Contact/edit' ?>">
                <div class="p-6 space-y-6">
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="editfirstname" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" required placeholder="John" id="editfirstname" name="firstName"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class="hidden mt-2 text-sm text-red-600 "> Please enter the firstname!</p>

                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label for="editlastname" class="block mb-2 text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="text" required placeholder="Doe" id="editlastname" name="lastName"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class=" hidden mt-2 text-sm text-red-600 "> Please enter the lastname!</p>

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label for="editPhoneNumber" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number</label>
                            <input type="tel" required placeholder="123-456-789" id="editPhoneNumber" name="Number"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class="hidden mt-2 text-sm text-red-600 "> Please enter the phone Number!</p>

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label for="editEmailAddress" class="block mb-2 text-sm font-medium text-gray-900">Email
                                Address</label>
                            <input type="email" placeholder="amir@ro-ox.com" id="editEmailAddress" name="Email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <p class="hidden mt-2 text-sm text-red-600 "> Please enter the Email Address!</p>

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label for="editDescription"
                                   class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                            <textarea id="editDescription" rows="4" name="description"
                                      class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                      placeholder=""></textarea>

                        </div>


                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 justify-between ">
                    <button type="button"
                            class="addNewModalClose text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">
                        Cancel
                    </button>
                    <input type="submit" value="Update"
                           id="contactFormSubmit"
                           class="addNewsModalClose text-white cursor-pointer bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ======END ADD NEW MODAL SECTION ======  -->
<!-- ======START FILTER MODAL SECTION ======  -->


<div id="filterModal" aria-hidden="true"
     class="hidden main-modal animated fadeIn faster overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
    </div>
</div>

<!-- ======END FILTER MODAL SECTION ======  -->
<!-- ======START CONTACT SECTION ======  -->
<div class="flex flex-col pt-5 ">
    <div class="-my-2 overflow-x-auto sm:-msx-6 lg:-msx-8">
        <div class="py-2 align-middle inline-block min-w-full  md:px-10">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                            Description
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                    </thead>

                    <tbody id="contacts" class="bg-white divide-y divide-gray-200">
                    <?php
                    /** @noinspection PhpUndefinedVariableInspection */
                    foreach ($Contacts as $value) :
                        ?>
                        <tr class="hover:bg-blue-500 hover:text-white group" id="Contacts-<?= $value['id'] ?>">
                            <td class="sm:px-6 sm:py-4 px-4 py-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                             src="<?= BASEHOST . 'src/img/1.jpg' ?>"
                                             alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 group-hover:text-white">
                                            <?= $value['name'] ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 group-hover:text-white">
                                    <?= $value['phone'] ?>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                            <span class="px-2 inline-flex ">
                                <?= $value['description'] ?>
                            </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                            <span class="px-2 inline-flex ">
                                <?= $value['email'] ?>
                            </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap md:table-cell">
                            <span class="px-2 inline-flex flex-col">
                                <span class="hover:bg-red-500 rounded-full px-2">
                                    <a href='<?= BASEHOST . "Contact/delete?id={$value['id']}" ?>'>Delete</a>
                                </span>
                                <button class="hover:bg-red-500 rounded-full px-2" id="editNew" data='<?= json_encode($value) ?>'>Update</button>
                            </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ======END CONTACT SECTION ======  -->
<!-- ======START PAGINATION ======  -->

<div class="flex flex-col items-center my-12">
    <?php if (empty($_GET['search'])): ?>
        <div class="flex text-gray-700">
            <a href="?page=<?= $currentPage - 1 ?>"
               class="h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-white cursor-pointer hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white <?php if ($currentPage == 1) echo 'hidden' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-chevron-left w-6 h-6">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </a>
            <div class="flex h-12 font-medium rounded-full bg-white md:space-x-1" id="pagesNumber">
                <?php
                /** @noinspection PhpUndefinedVariableInspection */
                for ($i = $currentPage - 2; $i < $currentPage; $i++):
                    if ($currentPage < 2 || $i == 0) continue;
                    ?>
                    <a href="?page=<?= $i ?>"
                       class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white active:bg-blue-500">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
                <a href="?page=<?= $currentPage ?>"
                   class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white active:bg-blue-500 bg-blue-500 text-white">
                    <?= $currentPage ?>
                </a>
                <p class="md:hidden h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-white cursor-pointer hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white ">
                    <?= $currentPage ?>
                </p>
                <?php
                for ($i = $currentPage + 1; $i <= $currentPage + 2; $i++):
                    /** @noinspection PhpUndefinedVariableInspection */
                    if ($currentPage >= $Pagination || $i == $Pagination + 1) continue;
                    ?>
                    <a href="?page=<?= $i ?>"
                       class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white active:bg-blue-500">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>

                <!--            <div-->
                <!--                    class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">-->
                <!--                ...-->
                <!--            </div>-->

            </div>
            <a href="?page=<?= $currentPage + 1 ?>"
               class="h-12 w-12 ml-1 flex justify-center items-center rounded-full bg-white cursor-pointer hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white <?php /** @noinspection PhpUndefinedVariableInspection */
               if ($currentPage == $Pagination) echo 'hidden' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-chevron-right w-6 h-6">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>
        </div>
    <?php endif; ?>
</div>
<!-- ======END PAGINATION ======  -->
<script type="text/javascript" src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
<script type="text/javascript" src="<?= Assets::loadAssets('script.js') ?>"></script>

</body>

</html>